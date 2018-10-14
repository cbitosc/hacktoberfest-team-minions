<html>
    <?php include 'header.php'; 
    include 'footer.php';?>

<script>
                    function verify_em(s)
            {
                var x=document.getElementById(s).value;
                var w=/^[a-z , 0-9 , .]{3,}\@[a-z]{4,}\.[a-z , .]{3,5}$/;
                document.getElementById("p3").style.color="red";
                if(!x.match(w))
                {
                    var e="invalid email address";
                    document.getElementById("p3").innerHTML=e;
                }
                else
                {
                        var xhr= new XMLHttpRequest(); 
			var url = 'sendpasswordajax.php?js_var=' + x;
			xhr.open('GET', url, false);
			xhr.onreadystatechange = function () {
				if (xhr.readyState===4 && xhr.status===200) {
                                                var c=xhr.responseText;
                                                document.getElementById("p3").innerHTML=c;
				}
			}
			xhr.send();
                        return false;
            }
        }
            function fo()
                {
                    document.getElementById("p3").innerHTML="";
                }
                
</script>
    </head>
    <body>
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark cyan">
        <a class="navbar-brand" href="#">Training and Placement Cell</a>
    </nav>
        <div class="jumbotron" style="height:100vh;" id="frsDivTop">
      		
    		<div align="center">
    		    <br/><br/>
    		    <div id="form" style=" ">
                        <form action="sendpassword.php" autocomplete="off">
    					<h2 >Login Here</h2><br>
                                        <input type="text" id="email" name="email" placeholder="Enter Email" autofocus="autofocus" onblur="verify_em(this.id)"onfocus="fo()" style="border-radius : 10px; padding : 5px" required>

                                        <p id="p3"></p>
    					<input type="submit" name="sub" value="SUBMIT" class="btn btn-primary">
                                        <input type="reset" value="RESET" class="btn btn-primary">
    				</form><br/>
    				
    				
    				
    			</div>
    		</div>
    		
    		<br/><br/>
		</div>
    </body>
</html>
