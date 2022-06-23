<?php


if(isset($_GET['page'])){
    switch($_GET['page']) {
        case 'classes' :
            require 'exercise_1_classes.php';
            break;
        case 'extending' :
            require 'exercise_2_extending.php';
            break;
        default :
            echo 'Hmmm whatcha say, Hmmm that you only meant to see a page? Well of course you did.';
    }
}
//create a form, method = GET, when user selects one of the options they go to the selected page
?>
 <button method ="get" formmethod="get" name ="classes">Classes</button>

