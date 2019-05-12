<header>
    <nav class="navbar navbar-dark bg-dark">
        <h2 class="appTitle">Great Debates</h2>
        <div id="welcomeMsg">
            <?php
            if (isset($_SESSION['access_token'])) {
                echo 'Welcome back, ' . $_SESSION['givenName'] . ' ' . $_SESSION['familyName'] . '!';
            } else {
                echo 'Welcome back, ' . $_SESSION['username'] . '!';
            }
            ?>
        </div>
        <a class="logoutLink" href="<?= CONPATH ?>/logout.php">Logout</a>
    </nav>

</header>