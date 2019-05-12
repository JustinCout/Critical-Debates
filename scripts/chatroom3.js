window.onload = function () {

    //https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_trigger_button_enter
    //Click 'enter' to send message
    let text = document.getElementById("newMsg3");
    text.addEventListener("keyup", function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById("sendMsg3").click();
        }
    });

}