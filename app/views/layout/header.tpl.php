<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reboot.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Blue Giant Store</title>
</head>

<body>
    
    <header>
        <div class="fix-head">

            <nav>
                <ul class="nav-head">
                    <li id="logo">
                        <a href="<?= $router->generate('main-home') ?>">
                            <object data="./assets/img/musical-notes.svg" width="37" height="37"></object>
                            Blue Giant Store
                        </a>
                    </li>
                    <li id="sign-in">
                        <a href="#">sign in</a>
                    </li>
                    <li id="toggle-button">
                        toggle button todo
                    </li>
                </ul> 
            </nav>
            
        </div>
    </header>