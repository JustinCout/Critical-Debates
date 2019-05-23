<?php
session_write_close();
session_start();
if (isset($_POST['message'])) {
    $XML = new DOMDocument();
    $XML->preserveWhiteSpace = false;
    $XML->formatOutput = true;
    $XML->load('../xml/chatroom1.xml');
    $chatroom = $XML->documentElement;
    $XML->appendChild($chatroom);

    //XML DOM
    $msgContainer = $XML->createElement('message');
    $chatroom->appendChild($msgContainer);

    //Gets username from both types of logins
    if (isset($_SESSION['access_token'])) {
        $name = $XML->createElement("username", $_SESSION['givenName']);
    } else {
        $name = $XML->createElement("username", $_SESSION['username']);
    }

    $date = date('Y-m-d G:i:s');
    $dt = $XML->createElement("messageTime", $date);
    $content = $XML->createElement("messageContent", $_POST['message']);

    $msgContainer->appendChild($name);
    $msgContainer->appendChild($dt);
    $msgContainer->appendChild($content);

    //Attributes
    $msgID = $XML->createAttribute("id");
    $nameID = $XML->createAttribute("userId");
    $msgContainer->appendChild($msgID);
    $name->appendChild($nameID);
    $nameID->value = '4';
    $XML->save('../xml/chatroom1.xml');
    //values
    $xml = simplexml_load_file("../xml/chatroom1.xml");

    //increment msg id for each new msg
    for ($i = 0; $i < count($xml->message) + 1; $i++) {
        $msgID->value = $i;
    }

    //Format messages
    foreach ($xml->message as $msg) {

        echo '<div id="msgBox"><b>' . $msg->username . '</b>';
        echo ' <small><i>' . $msg->messageTime . '</i></small>';
        echo '<p>' . $msg->messageContent . '</p>
    </div>';
    }
    //saved a second time to save the message id
    $XML->save('../xml/chatroom1.xml');
}
