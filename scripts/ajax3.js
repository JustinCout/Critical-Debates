$(document).ready(function () {
    setInterval(function() {
        $("#chatbox3").load("../Controllers/loadChat3.php");
      }, 1000);
    $("#sendMsg3").on('click', function () {
        let message = $("#newMsg3").val();
        $.post("../Controllers/chatroom3Controller.php", {
            message: message
        }, function (data) {
            $("#chatbox3").html(data);
            $("#newMsg3").val("");
            let chatbox = document.getElementById("chatbox3");
            chatbox.scrollTop = chatbox.scrollHeight;
        });
    });
});