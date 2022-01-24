<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>


<header>
    <div class="p-5 bg-warning text-black text-center">
        <h1>MCSON Silver & Sång</h1>
        <p>Adminsida</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <?php

            //if (isset($_SESSION['adminUid'])) {
            if ($_SESSION['adminUid'] == 'Ja'){
                echo '<ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="admin_lista.php">Medlemmar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Admin - Annat</a>
                </li>
                
                 <li class="nav-item">
                    <a class="nav-link" href="admin_upload.php">Ladda upp filer</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="index.admin.photo.php">Admin photo</a>
                </li>
                
                
                <li class="nav-item">
                    <a class="nav-link" href="../includes/logout.inc.php">Logga ut</a>
                </li>
            </ul>';
            } else{
                echo '<ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="admin_lista.php">Medlemslista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Meddelande till Superadmin</a>
                </li>
            </ul>';
                }
            ?>
            <?php
            if (isset($_SESSION['adminUid'])){
                echo'<form action="../includes/logout.inc.php" method="post" >
                <button class="btn btn-warning" type="submit" name="logout-submit">Logga ut</button>&nbsp;
            </form>';
            }else {
                echo'<form action="../includes/logout.inc.php" method="post">
                <button class="btn btn-warning" type="submit" name="login-submit">Logga in</button>&nbsp;
                <input type="text" height="" name="mailuid" placeholder="Användarnamn" autocomplete="off" value="">&nbsp;
                <input type="password" name="pwd" placeholder="Lösenord" autocomplete="off" value="">
            </form>';
            }
            ?>

        </div>
    </nav>

</header>
