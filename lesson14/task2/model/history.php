<?php

function addHistory(string $str){
        if(array_key_exists('city',$_COOKIE)){
            $history=unserialize($_COOKIE['city']);
        }
        else $history=[];

        $history[]=$str;

        setcookie('city', serialize($history));
    }

function showHistory(){
        if(array_key_exists('city',$_COOKIE)){
            $history=unserialize($_COOKIE['city']);
            foreach($history as $city){
                echo $city.'<br>';
            }
        }
    }