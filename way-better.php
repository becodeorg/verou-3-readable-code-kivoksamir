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

            $price = price($type);

        
        echo $Message = 'Creating new order... <br/> 
        A ' . $type .  ' pizza should be sent to ' . $name . ". <br/>
        The address: $address. 
        <br/>The bill is $price.<br/> 
        Order Finished <br>";

       

    }


    function price($type)    // prices depends on type .. 

    {   
        if ($type == "marguerita") {$price = 5;}
        if ($type == "golden"){$price = 100;}
        if ($type == "calzone"){$price = 10;}
        
        return($price);
        
    }


        // calling the function with parameters $type , $name
        order("calzone", "koen");
        order("marguerita", "manuele");
        order("golden", "students");
        
 

    



    

    

   