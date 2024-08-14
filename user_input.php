<?php
if(isset($_POST['input_submit'])){
        include("connect.php");
        
        $UName=$_POST['UName'];
        $Pwd=md5($_POST['Password']);
        $Email=$_POST['Email'];
        $Phone=$_POST['Phone'];
        $Gender=$_POST['Gender'];
    
        $query=mysqli_query($conn,"Select * from user where Email='$Email'");
        
        //Checking whether email already exist in the database 
        if(mysqli_num_rows($query)>0){
             echo "<p style='color:red; font-size:20px; text-align:center; '><strong>Email already exists</strong></p>";
        }
        else{
        //Inserting data into user table
            $sql="insert into user(UName,Password,Email,Phone,Gender) values('$UName','$Pwd','$Email','$Phone','$Gender')";
            mysqli_query($conn,$sql);
            header("location:user_login.php");
        }
}
?>