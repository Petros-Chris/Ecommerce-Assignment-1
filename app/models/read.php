<?php


class read{
public function insert($formData){
    $filename = 'resources/human.txt';
    //open a file for writing (append)
    $file_handle = fopen($filename, 'a'); //a is for append, w for writing from the start
    //obtain exclusive access to the file to avoid data corruption
    flock($file_handle, LOCK_EX);
    //format the data and write to the file
    $data = json_encode($this);
    fwrite($file_handle, $data . "\n");//place a single record on each line
    //release the exclusive access to the file
    flock($file_handle, LOCK_UN);
    //close the file
    fclose($file_handle);
}
}
?>