<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Chatrooms';
include '../head.php';

?>

<body>

    <?php
    include '../nav.php';
    ?>
    <div class="pageWrap">
        <main id="mainList">
            <h1>Chatrooms</h1>

            <?php
            $xml = simplexml_load_file("../xml/chatrooms.xml");

            foreach ($xml->room as $room) {
                echo "<div class='chatroomBlock'><div class='imgContainer img" . $room->attributes() . "'></div><ul>
            <li><a href='chatroom" . $room->attributes() . ".php'>$room->topic</a></li>
            </ul></div>";
            }

            ?>

        </main>
    </div>
    <?php
    include '../footer.php';
    ?>
</body>

</html>