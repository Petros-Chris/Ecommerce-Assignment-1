<?php
namespace app\controllers;
//require('app/models/Message.php');

class Contact {

    function passAlong(){
        print_r($_POST);
    }
    //$person->email = $_POST['email'];
}
//it says Contact Controller so this means that
//this is a contact file that is located in the controllers
//folder

//so contact must assign the data to message
//Once the writing is complete, the program must redirect to the localhost/Contact/read URL
//with the following instruction: header('location:/Contact/read');
        //$con = new Contact();
        //$con ->passAlong();
        header('location:/Contact/read');
        exit;






