<?php
session_start();
include 'companylogin.php';
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
        <p style="font-size: 18px; color: #28ff00;">Placement training plays a major role in shaping up the career goals of students. It is the dream of every engineering student to get placed in a top organization visiting their campus for recruitment. Keeping this key aspect into consideration, it is realized that training is important for engineering students to enhance their employability skills and achieve good placement in various Industries.

At present, the competition for employment is increasing every day and placement has become a challenging task. Training of students and equipping them with life skills has become an important responsibility of the institution. Along with technical expertise, development of a holistic personality is also necessary. To meet out these requirements, a fully fledged training cell is operating in our college to enhance the capabilities of engineering graduates on par with the industry standards. 

<br><br><b>Objectives :</b><br>
The prime objective of the Training Cell is<br>

To look for 100% employment for all students.<br>
To recognize the core competencies of the students.<br>
To train the students to meet the expectations of the industry through our Career Development Programmes.<br>
To build confidence in students and develop right attitude in them <br>
To enhance their communication skills.<br><br>
<b>Training Activities :</b><br>

Create awareness about “career planning" and "career mapping" among the students.</p>
    </body>
</html>