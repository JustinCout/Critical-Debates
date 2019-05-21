<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Chatroom 3';
include '../head.php';
?>

<body>

    <?php
    include '../nav.php';
    ?>
    <div class="pageWrap">
        <main>
            <a id="back" href="http://localhost/Assign3-API-JustinCoutinho/Views/chatroomList.php">Back to Chatrooms</a>
            <h1>Do airpods look silly?</h1>
            <div class="row">
                <div id="chatbox3">
                    <?php
                    include '../Controllers/chatroom3Controller.php';
                    ?>
                </div>
            </div>
            <div class="form-group shadow-textarea">
                <form action="" method="POST" id="msgForm">
                    <textarea class="form-control z-depth-1" name="msg" id="newMsg3"></textarea><br />
                    <button type="button" class="btn btn-primary" name="send" id="sendMsg3">Send</button>
                </form>
            </div>
        </main>
    </div>
    <?php
    include '../footer.php';
    ?>
    <script src="../scripts/ajax3.js" type="text/javascript"></script>
    <script src="../scripts/chatroom3.js" type="text/javascript"></script>
</body>

</html>