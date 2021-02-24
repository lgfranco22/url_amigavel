<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Site</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    // if($_GET['url'] == 'index' || $_GET['url'] == 'index.php'){
    //     header("Location:home");
    // }
    $url = (isset($_GET['url'])) ? $_GET['url']:'home';
    $url = array_filter(explode("/",$url));
    $file = $url[0].'.php';
    
    if(is_file($file)){
        include $file;
    }
    else{
        include '404.php';
    }

    ?>
</body>
</html>