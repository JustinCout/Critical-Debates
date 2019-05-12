$(document).ready(function () {
    $("#chatbox").load("../Controllers/loadChat.php");
    $("#sendMsg").on('click', function () {
        let message = $("#newMsg").val();
        $.post("../Controllers/chatroom1Controller.php", {
            message: message
        }, function (data) {
            $("#chatbox").html(data);
            $("#newMsg").val("");
            let chatbox = document.getElementById("chatbox");
            chatbox.scrollTop = chatbox.scrollHeight;
        });
    });
});

