<?php


function con($host,$user,$pass,$database){

    $con = mysqli_connect($host,$user,$pass,$database);
    
    return $con;
}

function insert($con,$table,$key,$val){
    $ks = count($key) - 1;
    $keys = "";
    for($i= 0; $i <=$ks; $i++){

        if($i == $ks){
            $keys = $keys.$key[$i];
        }
        else{
            $keys =  $keys.$key[$i].",";
        }

    } 

    $vals = "";
    for($i= 0; $i <=$ks; $i++){

        if($i == $ks){
            $vals = $vals."'".$val[$i]."'";
        }
        else{
            $vals = $vals."'".$val[$i]."'".",";
        }

    } 

    $q = "Insert into ".$table."(".$keys.") values(".$vals.")";
    $ins = mysqli_query($con,$q);
    return $ins;
}


function delete($con,$table,$key,$val){

    $q = "Delete From ".$table." WHERE ".$key." = "."'".$val."'";
    $del = mysqli_query($con,$q);
    return $del;
}

function deleteMany($con,$table,$key,$val,$ao){

    $m = "";
    if($ao == '|'){
        $m = "OR"; 
    }
    else if($ao == '&'){
        $m = "AND";
    }

    $ks = count($key) - 1;
    $keys = "";
    for($i= 0; $i <=$ks; $i++){

        if($i == $ks){
            $keys = $keys."`".$key[$i]."`"."="."'".$val[$i]."'";
        }
        else{
            $keys =  $keys."`".$key[$i]."`"."="."'".$val[$i]."'"." ".$m ." ";
        }

    } 


    $q = "Delete From ".$table." WHERE ".$keys;
    $del = mysqli_query($con,$q);
    return $del;
}

?>