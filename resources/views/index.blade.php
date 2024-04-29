<!DOCTYPE html>
<html lang="en">

<head>

<style>
*{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%);
    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 70px;
}

.logo{
    color:red;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 10px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color:white;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color:red;
}

.btn{
    width: 100px;
    height: 40px;
    background: #ff7200;
    border: 2px solid red;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: white;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;

}

.content .cn a{
    text-decoration: none;
    color:black;
    transition: .3s ease;
}


.cn:hover{
    background-color:red;
}

.content span{
    color: white;
    font-size: 65px
}

.form{
    width: 250px;
    height: 380px;
    background: rgba(0, 0, 0, 0.7);
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color:red;
    font-size: 22px;
    background-color:white;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid red;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background:white;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background:red;
    color:red;
}
.btnn a{
    text-decoration: none;
    color:black;
    font-weight: bold;
}
.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color:red;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}

body {
    background-image: url("https://i.ibb.co/5kyHqfM/Whats-App-Image-2024-03-14-at-21-03-36-8c24c26e.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }

</style>

    <title>Bus Sheduling System</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Bus Scheduling System</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="http://localhost/Project/index.php">HOME</a></li>
                    <li><a href="http://localhost/Project/admin/adminlogin.php">ADMIN</a></li>
                </ul>
            </div>

        </div>
        <div class="content">
            <h1>Book Your Ticket Now</h1>
            <!--    <button class="cn"><a href="http://localhost/Pain%20And%20Suffering/booking.php">BOOK NOW</a></button> -->

                <div class="form">
                    <h2>Login Here</h2>
                    <form action="http://localhost/Project/login.php" method="post">
                    <input type="username" name="Username" id="Username" placeholder="Enter Username Here">
                    <input type="password" name="Password" id="Password" placeholder="Enter Password Here">
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">Login</a></button>
                    <p class="link">{{"Don't have an account"}}<br>
                    <a href="http://localhost/Project/registration.php">Sign up </a> here</a></p>
                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
