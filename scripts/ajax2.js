$(document).ready(function () {
    setInterval(function() {
        $("#chatbox2").load("../Controllers/loadChat2.php");
      }, 1000);
    $("#sendMsg2").on('click', function () {
        let message = $("#newMsg2").val();
        $.post("../Controllers/chatroom2Controller.php", {
            message: message
        }, function (data) {
            $("#chatbox2").html(data);
            $("#newMsg2").val("");
            let chatbox = document.getElementById("chatbox2");
            chatbox.scrollTop = chatbox.scrollHeight;
        });
    });
});