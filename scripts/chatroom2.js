window.onload = function () {

    let text = document.getElementById("newMsg2");
    text.addEventListener("keyup", function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById("sendMsg2").click();
        }
    });

}