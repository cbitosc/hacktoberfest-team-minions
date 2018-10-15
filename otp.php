<?php
session_start();
?>
<link href="signupcss.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
 <html lang="en" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
        
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
             
    </head>
    <body>
        
           
            <header>
                <h1 id="he1">TRAINING AND PLACEMENT CELL</h1>
				
            </header>
            <section>
                <div id="container_demo" >
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                               
                                <p class="change_link">
									<a href="#toregister" class="to_register">RECEIVED OTP</a>
								</p>
                            </form>
                        </div>
                        <div id="register" class="animate form">
                            <form  action="otpverify.php" autocomplete="on"> 
                                <h1>OTP Verify</h1> 
                                <p> 
                                    <label for="otp" class="uname" >Your otp</label>
                                    <input id="otp" name="otp" required="required" type="text" placeholder="eg:30690" />
                                </p>
                                
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="signin button"> 
									<input type="reset" value="Reset"/> 
								</p>
                                
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>