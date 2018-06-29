<?php

//Our global function
function validation ($post){
    $res = [];
    foreach ($post as $key=> $value){
        $res[$key] =  $isEmpty = isEmpty($value);
        if ($isEmpty["isValid"]){
            $function = $key . 'Validation';
            if (function_exists($function)) {
                $res[$key] = $function ( $value );
            }
    }
    $res['$psw-repeat'] = review($post["password"],$post["psw-repeat"]);

    return $res;
}

//Checking firstname
function firstnameValidation($firstName){
    if (!empty($firstName) && ctype_alpha(($firstName))){
        return ["isValid" =>false, "message"=>''];
    }else{
    return ["isValid"=>true,"message"=>"First Name can't be empty or must include only Latin letters"];
  }
}

//Checking lastname
function lastnameValidation($lastName){
     if(!empty($lastName) && ctype_alpha(($firstName)){
         return ["isValid"=>true, "message"=>''];
     }else{
         return ["isValid"=>false, "message"=>"Last Name can't be empty or must include only Latin letters"];
     }
}

//Checking Email
function emailValidation($email){
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
        return ["isValid"=>false, "message"=>"Please  Write Your Email Correctly"];
    }else{
        return ["isValid"=>true, "message"=>''];
    }
}

//Checking password
function passwordValidation($password){
    if (!empty($password) && strlen($password) < 5 ){
        return ["isValid"=>false, "message"=> "The symbols count must be minimum 5"];
    }else{
    return ['isValid'=> true,'message'=>''];
  }
}

//Checking gender
function genderValidation($gender){
    if(empty($gender)){
        return ["isValid"=>false, "message"=>"Gender is not choosen"];
    }else{
        return ["isValid"=>true, "message"=>''];
    }
}

//Checking description
function commentsValidation($description){
    if (empty($description)){
        return ["isValid"=>false, "message"=>"Comment not written.Please fill in this field"];
    }else{
        return ["isValid"=>true, "message"=>''];
    }
}

//Are password and repeat password the same?
function review($password, $repassword){
    if ($password !== $repassword){
        return ["isValid"=>false, "message"=>"The password and repeat password should be the same"];
    }else{
         return ["isValid"=>true, "message"=>""];
    }
}
?>