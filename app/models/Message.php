<?php
namespace app\models;


class Message {
    public $name;
    public $email;
    public $ip;



    public function read() {
        //The read method opens the /resources/messages.txt file
        //with the file() function and returns the result.
    }

    public function write() {
        //The write method has the following algorithm (like an earlier method):
            //1. json_encode this object into $message;
            //2. Open the /resources/messages.txt file for appending (use fopen);
            //3. Lock the file for writing (use flock);
            //4. write contents of $message and concatenate with a \n (use fwrite).
            //5. Close the file handler (use fclose)
    }
}


?>