<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Login';
include 'head.php';
?>

<body>
    <header>
        <nav class="navbar">
            <h2 class="indexTitle">Critical Debates</h2>
        </nav>
    </header>
    <div class="pageWrap">
        <main>
            <?php
            //google login url
            $loginURL = $gClient->createAuthUrl();

            $user = $pass = "";

            if (isset($_POST['login'])) {
                //salt string
                $salt = "og6hexmde03j50d93kjfiklabwfil!@$@!ebwsaifldbsufivr!@$@#@!ECdla[0EJWIKALHURFGIAWE!@#&*(@#^$&*!@^";
                // login credentials
                $dbUser = 'jc';
                $passString = 'password' . $salt;
                //Gets info from the form
                $user = $_POST['uname'];
                $passInput = $_POST['pass'] . $salt;
                $encryptPass = password_hash($passString, PASSWORD_DEFAULT, ['cost' => 15]);

                if ($user == $dbUser && password_verify($passInput, $encryptPass)) {
                    $_SESSION['username'] = $dbUser;
                    header('Location: Views/chatroomList.php');

                    //add to accounts.xml
                    $XML = new DOMDocument();
                    $XML->preserveWhiteSpace = false;
                    $XML->formatOutput = true;
                    $XML->load('xml\logins.xml');
                    //elements
                    $logins = $XML->documentElement;
                    $XML->appendChild($logins);
                    $account = $XML->createElement("account");
                    $logins->appendChild($account);

                    $name = $XML->createElement("username", $dbUser);
                    $pass = $XML->createElement("password", $encryptPass);
                    $dt = date('Y-m-d G:i:s');
                    $loginTime = $XML->createElement("loginTime", $dt);
                    //children of account
                    $account->appendChild($name);
                    $account->appendChild($pass);
                    $account->appendChild($loginTime);
                    $XML->save('xml/logins.xml');
                } else {
                    $errorMsg = 'Invalid username or password';
                }
            }


            ?>

            <fieldset>
                <form action="" method="POST" name="userLogin" id="loginForm">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="uname" id="username"><br>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="pass" id="password"><br>
                    </div>
                    <input type="submit" name="login" class="btn btn-primary" value="Login">
                    <input type="button" id="googleBtn" value="Sign in with Google" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-primary">
                </form>
            </fieldset>
            <?php
            if (isset($errorMsg)) echo " <div id='errorContainer' class='alert alert-danger' role='alert'>
                                                <span id='error' style='color:red;'>" . $errorMsg . "</span></div>"; ?>
        </main>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>