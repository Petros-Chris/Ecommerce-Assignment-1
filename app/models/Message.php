<?php
namespace app\models;


class Message {
    public $name;
    public $email;
    public $ip;

    //$email = $_POST["email"];
    //public $message = $_POST['message'];
   
    //public $formdata = [
    //   'email' => $email,
    //   'message' => $message
    //   ];
   

    public function read() {
        //The read method opens the /resources/messages.txt file
        //with the file() function and returns the result.
        $filename = 'resources/human.txt';
        $fileContent = file($filename);
        return $fileContent;
    }
 
    public function write() {
        $filename = 'resources/human.txt';
        $message = json_encode($this);                  //1. json_encode this object into $message;  
        $file_handle = fopen($filename, 'a');           //2. Open the /resources/messages.txt file for appending (use fopen);
        flock($file_handle, LOCK_EX);                   //3. Lock the file for writing (use flock);
        fwrite($file_handle, "$message \n");            //4. write contents of $message and concatenate with a \n (use fwrite).
        flock($file_handle, LOCK_UN);                   //to not have it locked permately
        fclose($file_handle);                           //5. Close the file handler (use fclose)
    }
}