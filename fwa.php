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
        
        $token = fopen("../sysdata/tokens.txt");
        
        $tokendata = fread($token, filesize("../sysdata/tokens.txt"));
        
        fclose($token);
        
        $explodedata = explode(";", $tokendata);
        
        $tokenamount = count( $explodedata );
        
        $file = fopen("../accounts/applicationdata/smn/
    }
?>
