<?php
    //grab URL vars
    $action = $_GET["action"];
    $session = $_GET["session"];
    if( $action == null )
    {
        echo "No action;";
    } elseif( $action == "postdata" )
    {
        $data = $_GET["postdata"];
        $account = $_GET["account"];
        
        $tokenconfirmed = false;
        
        $token = fopen("../sysdata/tokens.txt" //continue work here :) 
        
        $file = fopen("../accounts/applicationdata/smn/
    }
?>
