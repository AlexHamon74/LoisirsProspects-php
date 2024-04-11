<?php

function checkFields ($fields){
    
    foreach($fields as $field){

        if (!isset($_POST[$field]) || empty($_POST[$field]))  {
            return true;
        }
    }
}