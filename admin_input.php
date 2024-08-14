<?php
if(isset($_POST['input_submit'])){
        include("connect.php");
        
        $A_Name=$_POST['A_Name'];
        $A_pwd=md5($_POST['A_password']);
        $A_Email=$_POST['A_Email'];
        $A_Phone=$_POST['A_Phone'];
        $A_Gender=$_POST['A_Gender'];
    
        $query=mysqli_query($conn,"Select * from admin where A_Email='$A_Email'");
        
        //Checking whether email already exist in the database 
        if(mysqli_num_rows($query)>0){
             echo "<p style='color:red; font-size:20px; text-align:center;'><strong>Email already exists</strong></p>";
        }
        else{
        //Inserting data into admin table
             $sql="insert into admin(A_Name,A_password,A_Email,A_Phone,A_Gender) values('$A_Name','$A_pwd','$A_Email','$A_Phone','$A_Gender')";
             $data=mysqli_query($conn,$sql);
             header("location:admin_login.php");
        }
}
?>