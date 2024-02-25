<?php
require('app/models/Message.php');
    

$message = new \app\models\Message();
$messageContent = $message->read();
?>
<html>
<h1>yum</h1>
</html>
