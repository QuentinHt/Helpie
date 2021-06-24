<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Slim Tutorial</title>
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li><img src="public/assets/helpielogo.svg" alt=""></li>
            <li><img src="public/assets/wysiwyg.svg" alt=""><p>Mes fiches</p></li>
            <li><img src="public/assets/playlist_add_check.svg" alt=""><p>Faire mon diagnostic</p></li>
            <li><img src="public/assets/logout.svg" alt=""><p>Quitter</p></li>
        </ul>
    </nav>
<?= $content ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js'></script>
<script src='public/js/app.js'></script>
</body>
</html>