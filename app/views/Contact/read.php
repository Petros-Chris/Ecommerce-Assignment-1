<html>
    <h1>Contact us - messages sent</h1>
</html>

<?php
require('app/models/Message.php');

$message = new \app\models\Message();
$messageContent = $message->read();

foreach ($messageContent as $human) {
    if (is_array($human)) {
        $email = isset($human['email']) ? $human['email'] : 'No email';
        $messageText = isset($human['message']) ? $human['message'] : 'No message';

        echo "<p><strong>" . ($email) . "</strong><br />";
        echo ($messageText) . "</p>";
    }
}

require_once('app/controllers/Count.php');
?>
