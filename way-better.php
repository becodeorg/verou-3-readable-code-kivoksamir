<?php

    function order($type, $name) 
    {
        if($name == 'koen'){
                $address = 'a yacht in Antwerp';
            } elseif($name == 'manuele'){
                $address = 'somewhere in Belgium';
            } elseif ($name == 'students') {
            $address = 'BeCode office';
            }
        
        echo $Message = 'Creating new order... <br/> A ' 
        . $type .  ' pizza should be sent to ' 
        . $name . ". <br/>
        The address: {$address}. 
        <br/>The bill is $price.<br/> 
        Order Finished <br>";
    }

    

   