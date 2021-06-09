<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <title>Register</title>
    <style>
      .isi{
        background-color:white;
          text-align: center;
          width: 400px;
          border-radius: 10px;
      }
      input{
            padding: 12px 20px; 
            margin: 8px 0; 
            display: inline-block; 
            border: 1px solid #ccc; 
            box-sizing: border-box;
            width: 60%;
            border-radius: 10px;
        }
        input[type=submit]{
            background-color:#328fa8; 
            color: white; 
            padding: 8px 20px; 
            margin: 4px 0; 
            border: none; 
            cursor: pointer; 
            width: 60%;
        }
        body{
      background-color: #BDAFA2;
      text-align: center;
      height: 100%;
      width: 100%;
    }

    h1 {
      text-transform: uppercase;
      color: white;
      font-family: 'Redressed';
    }

    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
      background-color:white;
      font-family: 'Redressed';
    }

    table thead th {
      background-image: url("gold_bg.png");
      border: solid 1px #DDEEEE;
      color: #FFE0C8;
      padding: 10px;
      text-align: left;
      text-shadow: 1px 1px 1px #FFE0C8;
      text-decoration: none;
      font-family: 'Redressed';
    }

    table tbody td {
      background-image: url("gold_bg.png");
      border: solid 1px #DDEEEE;
      padding: 10px;
      text-shadow: 1px 1px 1px #fff;
      font-family: 'Redressed';
    }

    a {
      background-image: url("gold_bg.png");
      color: #FFE0C8;
      padding: 10px;
      text-decoration: none;
      font-family: 'Redressed';
    }

    input[type=submit] {
      background-color: #FFE0C8; 
      color: #684C37; 
      padding: 10px ;
      border: none; 
      font-family: Redressed;
    }

    .topnav {
      width: 100%;
      margin-top: -10px;
      margin-left:-10px;
      font-family: 'Redressed';
      overflow: hidden;
      background-image: url("gold_bg.png");
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 8px 10px;
      text-decoration: none;
      font-size: 17px;
      background-color:black;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #328fa8;
      color: #D0BBA2;
    }

    .topnav .icon {
      display: none;
    }

    .topnav-right {
      float: right;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
      }
      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {
        position: relative;
      }

      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }

    .footer {
      position: static;
      right: 0;
      bottom: 0;
      left: 0;
      padding: 1rem;
      text-align: center;
      color:white;
    }
    </style>
</head>
<body>
    <center>
        <div class="cointaner">
            <br><br><br>
            <div class="isi">
                <br>
                <h3>Member Register</h3><br>
                <form action="register_process.php" method="post">
                <div class="name" data-validate="Name is required">
                        <label >
                            Name: <br>
                            <input type="text" name="username" required>
                        </label>
                    </div>
                    <div class="username" data-validate="Username is required">
                        <label >
                            Username: <br>
                            <input type="text" name="username" required>
                        </label>
                    </div>
                    <div class="password" data-validate="password is required">
                        <label>
                            Password:<br>
                            <input type="password" name="password" required>
                        </label>
                    </div>
                    <br>
                    <div class="container-login100-form-btn">
                        <input type="submit" value="REGISTER">
                    </div>
                </form>
                <br><br>
                <div class="text-center p-t-136">
                   <p>Already have an account?  <a class="txt2" href="login.php">
                        Login 
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
                <br><br>
            </div>
            
        </div>
    </center>
    
    
 
</body>
</html>
