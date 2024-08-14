<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup Page</title>
    <style>
        body{
            
            background-color:aliceblue;
            background-image: url("image/stockvault-light-streaks-wallpaper132471.jpg");
        }
        #log_reg{
            margin: 280px 280px;
            display: flex;
            justify-content: space-between;
        }
        #log_reg .con{
            background-color: white;
            width: 170px;
            border-radius: 5%;
            box-shadow: 0px 20px 35px  #000060;
        }
        #log_reg h1{
            text-align: center;
            font-size: 50px;
            padding: 10px;
            color: black;
        }
        #log_reg a{
            cursor: pointer;
            text-decoration: none;
        }
        #log_reg #img1{
            background-image: url("image/10705.jpg");
        }
        #log_reg #img2{
            background-image: url("image/pexels-jmark-250591.jpg");
        }
    </style>
</head>
<body>
    <section id="log_reg">       
          <div class="con" id="img1">
            <a href="user_login.php"><h1>User</h1></a>
          </div>
         <div class="con" id="img2">
            <a href="admin_login.php"><h1>Admin</h1></a>
         </div>
    </section>
</body>
</html>