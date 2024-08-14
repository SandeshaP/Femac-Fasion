<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<style>
     /* body{
            background-image:url("img/IMG-20240617-WA0002.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center top;
            background-size:200px 200px ;
        }  */
    body{
         background-color: #e6e6fa;
         background-image: url("img/pexels-apasaric-325185.jpg");
    }
    img{
        height: 50px;
        width: 80px;
        margin-top: 10px;
        margin-left: 200px;
        margin-right: 200px;
    }
    .container{
         /* background-color: rgb(229, 229, 239);  */
         background-color: #f1eeee;
        /* background-color: #d8b2d1; */
            /* display: flex;
            align-items: center; */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        height: fit-content;
        width: fit-content;
        border: 1px solid black;
        border-radius: 5px;
        box-shadow: 0px 20px 35px  #000060;
    }
    .h{
        font-family:Georgia, 'Times New Roman', Times, serif;
        text-align: center; 
        margin: 10px;
        font-size: 30px;
        color: blue;
        
    }
    .f{
        margin: 10px;
        padding: 10px;
    } 
    .inp{
        height: 40px;
        width: 400px;
        margin: 10px;
        padding: 5px;
        border-radius: 5px;
        border: none;
        background-color: white;
    }
    button{
        margin-left: 160px;
        margin-right: 150px;
        margin-top: 15px;
        /* margin-bottom: 5px; */
        }
    .btn{
        align-items: center; 
        width: 100px;
        height: 35px;
        background-color: black;
        color: white;
        border-radius: 20px;
    }
    .or{
        font-size: 1.1rem;
        text-align: center;
    }
    a{
        cursor: pointer;
        color: blue;
        text-decoration: none;
        margin-left: 15px;
    }
    
</style>
<body>
     <!-- <?php require "connect.php"; ?> -->
    <div class="container">
        <img src="image\logo1.jpg">
        <h3 class="h">Admin Login</h3>
        <form method="post" class="f" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="email" name="A_Email" placeholder="Enter your email" class="inp" required>
            <br>
            <input type="password" name="A_password" placeholder="Femac password" class="inp" required>
            <br>
            <a>Forgot password?</a>
            <br>
            <button type="submit" name="login" class="btn">Submit</button>
            <br>
            <p class="or">--------------or---------------</p>
            <a href="admin_signup.php">Don't have an account? Register here</a>
        </form>
    </div>

    <?php
    include("connect.php");
     session_start();
     $_SESSION['login_status']=false; 

      if(isset($_POST['login'])){
        
         $AEmail=$_POST['A_Email'];
         $APass=($_POST['A_password']);
        $cipher_Pass=md5($APass);
        
          $query=mysqli_query($conn,"Select * from admin where a_email='$AEmail'");
          
          if(mysqli_num_rows($query)>0){
            $dbrow=mysqli_fetch_assoc($query);
             if($dbrow['A_password']==$cipher_Pass){
                $_SESSION['login_status']=true;
                $_SESSION['A_Email']=$AEmail;
                echo "<h1 style='color:green'>Login Success</h1>";
                 header("location:home.php");
             }
          }
          else{
            echo "<h1 style='color:red'>Login Failed</h1>";
          }
      }

      function input_data($data){
        $data=trim($data);
        $data=htmlspecialchars($data);
        return $data;
      }
    ?>
</body>
</html>