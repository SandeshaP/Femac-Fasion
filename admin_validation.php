<?php
//Defining variables with empty values for showing errors
  $A_NameErr="";
  $A_pwdErr="";
  $A_EmailErr="";
  $A_PhoneErr="";
  $A_GenderErr="";
  
 //For holding user data
  $A_Name="";
  $A_pwd="";
  $A_Email="";
  $A_Phone="";
  $A_Gender="";
  
  //Input fields validation
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    //Validating username
    if(empty($_POST["A_Name"])){
        $A_NameErr="Username is required";
    }
    else{
        $A_Name=input_data($_POST["A_Name"]);
        //To check that username contains only alphabets, digits & underscores
        if(!preg_match("/^[a-zA-Z0-9_]*$/", $A_Name)){
            $A_NameErr="Only alphabets, digits & underscores are allowed for Admin Name";
        }
    }

    //Validating password
    if(empty($_POST["A_password"])){
        $A_pwdErr="Password is required";
    }
    else{
         $A_pwd=input_data($_POST["A_password"]);
        //To check that password doesn't contain blankspace
        if(!preg_match("/^[a-zA-Z0-9_#$%^&*]*$/",$A_pwd) && (strlen($A_pwd)>8)){
            $A_pwdErr="Password should be atleast 8 characters in length & should include atleast one uppercase letter, one lowercase letter, one digit & one special character";
        }
        
    }

    //Validating email
    if(empty($_POST["A_Email"])){
        $A_EmailErr="Email is required";
    }
    else{
        $A_Email=input_data($_POST["A_Email"]);
        //To check that the email address is valid
        if(!filter_var($A_Email, FILTER_VALIDATE_EMAIL)){
            $A_EmailErr="Invalid Email";
        }
    }

    //Validating phoneno
    if(empty($_POST["A_Phone"])){
        $A_PhoneErr="Phoneno is required";
    }
    else{
        $A_Phone=input_data($_POST["A_Phone"]);
        //To check that phoneno is valid
        if(!preg_match("/^[0-9]*$/",$A_Phone)){
            $A_PhoneErr="Only numeric values are allowed";
        }
        //To check that phoneno contains exact 10 digits
        if(strlen($A_Phone)!=10){
            $A_PhoneErr="Please provide a phoneno of 10 digits";
        }
    }

    //Validating gender
    if(empty($_POST["A_Gender"])){
        $A_GenderErr="Please provide your gender";
    }
    else{
        $A_Gender=input_data($_POST["A_Gender"]);
    }
   }

  //Handling whitespaces & special characters in the data
  function input_data($data){
    $data=trim($data);
    $data=htmlspecialchars($data);
    return $data;
  }
?>