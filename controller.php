<?php

require 'model.php';
class controllstudent extends student {
    public function showAllstudent(){    
    return $this->getAllstudent();
}
}
$score= new controllstudent();
$results=$score->showAllstudent();
include 'view.php';

?>