window.onload = function () {

    let text = document.getElementById("newMsg3");
    text.addEventListener("keyup", function (event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById("sendMsg3").click();
        }
    });

}