<?php
namespace app\controllers;


class Contact extends \app\core\Controller {

    //Need to make this one function
    public function urlLink($link) {
        $this->view($link);
    }

}
//it says Contact Controller so this means that
//this is a contact file that is located in the controllers
//folder


//Once the writing is complete, the program must redirect to the localhost/Contact/read URL
//with the following instruction: header('location:/Contact/read');
?>

<html>
    <form method='post' action='../Contact/read'> 

    </form>

</html>






