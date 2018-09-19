<?php
session_start();
?>

<?php ob_start(); ?>
    <header>
        <div>
            <h1>Mon Site</h1>
        <?php
        if (isset($_SESSION['pseudo']) AND isset($_SESSION['pseudo']) AND isset($_SESSION['password']) AND isset($_SESSION['rank'])){
            echo $_SESSION['rank']. ' ' .$_SESSION['pseudo']. ' ';
            ?><a href="Model\logout.php">Déconnexion</a><?php
        }
        else{ ?>
            <form action="index.php" method="post">
                    <input type="text" name="pseudo" placeholder="Pseudo" required/>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <input type="submit" value="Se connecter">
            </form>
            <a href="index.php?action=inscription">S'inscrire</a> <?php
        } ?>
        </div>
    </header>
<?php $header = ob_get_clean();