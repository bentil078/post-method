<?php

    if ($_POST) {
        
        $registeredNames = array("Emma", "Isaac", "Junior", "Yvonne");
        
        $right = false;
        
        foreach ($family as $value) {
            
            if ($value == $_POST['name']) {
                
                $right = true;
                
            }  
            
        }
        
        if ($right) {
            
            echo "Welcome ".$_POST['name']."!";
            
        } else {
            
            echo "I don't have your name registered.";
            
        }      
        
    }


?>



<form method="post">

    <p>What is your name?</p>
    
    <p><input type="text" name="name" placeholder="enter your name"></p>
    
    <p><input type="submit" value="Submit"></p>


</form>
