<?php


if(isset($_GET['page'])){
    switch($_GET['page']) {
        case 'classes' :
            require 'exercise_1_classes.php';
            break;
        case 'extending' :
            require 'exercise_2_extending.php';
            break;
        case 'private' :
            require 'exercise_3_private.php';
            break;
        case 'protected' :
            require 'exercise_4_protected.php';
            break;
        case 'public' :
            require 'exercise_5_public.php';
            break;
        case 'const' :
            require 'exercise_6_const.php';
            break;
        case 'static' :
            require 'exercise_7_static.php';
            break;
        default :
            echo 'Hmmm whatcha say, Hmmm that you only meant to see a page? Well of course you did.';
    }
}
//create a form, method = GET, when user selects one of the options they go to the selected page
//create buttons with value = page name that has been set in PHP code above
?>
<form action ="index.php" method="get">
    <button type="submit" name ="page" value ="classes">Classes</button>
    <button type="submit" name ="page" value ="extending">Extending</button>
    <button type="submit" name ="page" value ="private">Private</button>
    <button type="submit" name ="page" value ="protected">Protected</button>
    <button type="submit" name ="page" value ="public">Public</button>
    <button type="submit" name ="page" value ="const">Const</button>
    <button type="submit" name ="page" value ="static">Static</button>
</form>
