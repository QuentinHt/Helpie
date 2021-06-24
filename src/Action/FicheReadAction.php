<?php

namespace App\Action;

use App\Domain\Fiche\Service\FicheRead;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class FicheReadAction
{
    private $ficheRead;

    public function __construct(ficheRead $ficheRead)
    {
        $this->ficheRead = $ficheRead;
    }

    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response
    ): ResponseInterface {
        // Collect input from the HTTP request
        $data = (array)$request->getParsedBody();

        // Invoke the Domain with inputs and retain the result
        $ficheId = $this->ficheRead->readFiche($data);

        // Transform the result into the JSON representation
        $result = [
            'fiche_id' => $ficheId
        ];

        // Build the HTTP response
        $response->getBody()->write((string)json_encode($result));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(201);
    }
}