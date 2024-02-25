<?php
namespace app\controllers;

require('../models/Message.php');

use app\models\Message;

class Contact {

   public function passAlong(){
        $message = new Message();
        // Populate the message object with POST data
        $info = $this->info(); // Make sure this method sets the object's properties based on $_POST

        // Perform the write operation or any other required action
        $message->write($info);

        // Redirect to the read page after processing
        header('Location: /Contact/read');
        exit; 

        

        


    }

    function info(){
        $email = $_POST["email"];
        $message = $_POST['message'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $formdata = [
           'email' => $email,
           'message' => $message,
           'ip' => $ip,
           ];

        return $formdata;

    }
    //$person->email = $_POST['email'];
}

$con = new Contact();
$con->passAlong();
//it says Contact Controller so this means that
//this is a contact file that is located in the controllers
//folder

//so contact must assign the data to message
//Once the writing is complete, the program must redirect to the localhost/Contact/read URL
//with the following instruction: header('location:/Contact/read');
        //$con = new Contact();
        //$con ->passAlong();
        






