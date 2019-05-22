<!DOCTYPE html>
<html lang="en">

<?php
$title = 'Chatroom 2';
include '../head.php';
?>

<body>

    <?php
    include '../nav.php';
    ?>
    <div class="pageWrap">
        <main>
            <a id="back" href="http://localhost/Critical-Debates/Views/chatroomList.php">Back to Chatrooms</a>
            <h1>Spaces vs. Tabs</h1>
    
                <div id="chatbox2">
                    <?php
                    include '../Controllers/chatroom2Controller.php';
                    ?>
                </div>
      
            <div class="form-group shadow-textarea">
                <form action="" method="POST" id="msgForm">
                    <textarea class="form-control z-depth-1" name="msg" id="newMsg2"></textarea><br />
                    <button type="button" class="btn btn-primary" name="send" id="sendMsg2">Send</button>
                </form>
            </div>
        </main>
    </div>
    <?php
    include '../footer.php';
    ?>
    <script src="../scripts/ajax2.js" type="text/javascript"></script>
    <script src="../scripts/chatroom2.js" type="text/javascript"></script>
</body>

</html>