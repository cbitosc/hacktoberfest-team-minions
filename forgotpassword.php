


<html>
    
    <head>
        <link href="logincss.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
        <div class="form-control" id="frsDivTop">
            <hr id="top"/>
            <h1 id="he1">TRAINING AND PLACEMENT CELL</h1>
            
            
            
    		<hr id="mid" />
    		<br/>
    		
    		<div align="center">
    		    <br/><br/>
    		    <div id="form" style=" ">
                        <form action="sendpassword.php" autocomplete="off">
    					<h2 style="color : white; font-family:Calligrapher;">Login Here</h2><br>
                                        <input type="text" id="email" name="email" placeholder="Enter Email" autofocus="autofocus" onblur="verify_em(this.id)"onfocus="fo()" style="border-radius : 10px; padding : 5px" required>

                                        <p id="p3"></p>
    					<input type="submit" name="sub" value="SUBMIT" class="btn btn-primary">
                                        <br><br>
                                        <input type="reset" value="RESET" class="btn btn-primary">
    				</form><br/>
    				
    				
    				
    			</div>
    		</div><br><br>
    		
    		<br/><br/>
		</div>
    </body>
</html>
