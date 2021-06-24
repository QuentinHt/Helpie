<?php

namespace App\Domain\Fiche\Service;

use App\Domain\Fiche\Repository\FicheReadRepository;

/**
 * Service.
 */
final class FicheRead
{
    /**
     * @var FicheReadRepository
     */
    private $repository;

    /**
     * The constructor.
     *
     * @param FicheReadRepository $repository The repository
     */
    public function __construct(FicheReadRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Create a new user.
     *
     * @param array $data The form data
     *
     * @return int The new user ID
     */
    public function readFiche(array $data)
    {

        // Read fiche
        $fiche = $this->repository->getFiche($data);
        // Logging here: User created successfully
        //$this->logger->info(sprintf('User created successfully: %s', $userId));

        return $fiche;
    }
}