<?php 
    include("xuli.php");
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <form action="" name = "" method= "post">
                                <div class="group">
                                    <label for="user" class="label" >Username</label>
                                    <input id="user" type="text" class="input" name="username">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password" name="password">
                                </div>
                                <div class="group">
                                    <input id="check" type="checkbox" class="check" checked>
                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                </div>
                                <div class="group">
                        <form action="" name = "form-login" method= "post">
                                    <input type="submit" class="button" value="Sign In" name="form-login">
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <a href="#forgot">Forgot Password?</a>
                                </div>
                        </form>
                        
                    </div>
                    <div class="sign-up-htm">
                        <form action="" name ="" method= "post">
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" type="text" class="input" name= "username">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password" name ="password">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Repeat Password</label>
                                    <input id="pass" type="password" class="input" data-type="password" name="password-again">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Email Address</label>
                                    <input id="pass" type="text" class="input" name ="email">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Phone</label>
                                    <input id="pass" type="text" class="input" name ="phone">
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign Up" name ="dangky" >
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <label for="tab-1">Already Member?</a>
                                </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
</body>
</html>