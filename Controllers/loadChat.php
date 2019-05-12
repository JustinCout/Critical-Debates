<?php

$xml = simplexml_load_file("../xml/chatroom1.xml");

//this loop loads existing messages on pageload
foreach ($xml->message as $msg) {

    echo '<div id="msgBox"><b>' . $msg->username . '</b>';
    echo ' <small><i>' . $msg->messageTime . '</i></small>';
    echo '<p>' . $msg->messageContent . '</p>
    </div>';
}
