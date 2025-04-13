<?php

function isConnected(){
    if(isset($_SESSION['admin_ID']) && !empty($_SESSION['admin_ID'])) 
    {
        return true;
    }
    header('Location: ?action=viewHome');
    exit;
}