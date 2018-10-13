<?php
session_start();
include 'studentlogin.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="external.css">
        <script>
            history.pushState(null, null, location.href);
            window.onpopstate = function () 
            {
                history.go(1);
            };
        </script>
        
    </head>
    <body>
        <?php include 'studentlogin.php';
        ?>
            <table>
                <p style="font-size: 18px; color: #28ff00;"><br><b>OBJECTIVE:</b><br>
The major objective of campus placement is to identify the talented and qualified professionals before they complete their 
education.It provide employment opportunities to the students who are perusing or in the final stage of completing the 
course. This process reduces the time for an industry to pick the candidates according to their need.It is a cumbersome 
activity and hence majority of the companies find it difficult to trace the right talent. Many students do not understand the importance of placement training that is 
being imparted, whether it is an aptitude training or soft skills. They show the least interest in this due to various factors viz., 
projects, assignments or more of activities loaded by the colleges as part of their curriculum thinking that it is not useful. It 
is the responsibility of the companies training on placement to make the students equipped on all aspects of career development along 
with creating a very good impact in them which makes them feel every minute they spend in the placement training session is worth 
being there and will help them in getting placed in their dream companies.<br></p>
    </body>
</html>
