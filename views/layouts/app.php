<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="?url=home">Inicio</a></li>
            <li><a href="?url=Productos">Productos</a></li>
            <li><a href="?url=CRUD">CRUD Productos</a></li>
        </ul>
    </nav>
    <?php
    $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
    switch($url)
    {
        case 'home'    : SitioController::home();
                        break;
        case 'Productos': SitioController::Productos();
                        break;
        case 'CRUD'     : SitioController::CRUD();
                        break;
        default         : SitioController::index();
                        break;
    }
    ?>
</body>
</html>

