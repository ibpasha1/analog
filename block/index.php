<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="../css/reset.css" type="text/css">
      <link rel="stylesheet" href="../css/index.scss" type="text/css">
      <link rel="stylesheet" href="../css/nav.css" type="text/css">
      <meta http-equiv="content-type" content="text/html;charset=utf-8" />
      <meta charset="UTF-8" />
      <meta name="description" content="Developer." />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:site" content="@ibpasha1" />
      <meta name="twitter:title" content="Ibrahim Pasha" />
      <meta name="twitter:description" content="Developer." />
      <meta name="twitter:creator" content="@ibpasha1" />
      <meta property="og:title" content="Ibrahim Pasha">
      <meta property="og:type" content="website">
      <meta property="og:url" content="http://cosyne.io/">
      <meta property="og:description" content="Developer.">
      <meta property="og:site_name" content="Ibrahim Pasha">
      <meta itemprop="url" content="http://cosyne.io/">
      <meta itemprop="name" content="Ibrahim Pasha">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link rel="stylesheet" href="../css/index.css">
      <title>persons name</title>
   </head>
   <body>
    
      <style>
            .img-circle 
            {
                border-radius: 50% !important;
            }
      </style>

<script text="text/javascript">
      //document.body.style.backgroundColor = "red";
       
      var secret_key         = window.localStorage.getItem('key');
      var login_status       = window.localStorage.getItem('status');
      var first_name         = window.localStorage.getItem('first_name');
      var last_name          = window.localStorage.getItem('last_name');
      var occupation         = window.localStorage.getItem('occupation');
      var city               = window.localStorage.getItem('city');
      var font_type          = window.localStorage.getItem('font_type');
      var font_size          = window.localStorage.getItem('font_size');
      var bg_color           = window.localStorage.getItem('bg_color');
      var micro_bio          = window.localStorage.getItem('micro_bio');
      var school             = window.localStorage.getItem('school');
      var education          = window.localStorage.getItem('education');
      var age                = window.localStorage.getItem('age');
      var height             = window.localStorage.getItem('height');
      var pol_view           = window.localStorage.getItem('pol_view');
      var fav_color          = window.localStorage.getItem('fav_color');
      var econ               = window.localStorage.getItem('econ');
      var solid_sk           = window.localStorage.getItem('solid_sk');
      var mid_sk             = window.localStorage.getItem('mid_sk');
      var light_sk           = window.localStorage.getItem('light_sk');
      var curr_pos           = window.localStorage.getItem('curr_pos');
      var project_info       = window.localStorage.getItem('project_info');
      var resume             = window.localStorage.getItem('resume');
      var github_username    = window.localStorage.getItem('github_username');
      var personal_site      = window.localStorage.getItem('personal_site');
      var linkedin_url       = window.localStorage.getItem('linkedin_url');
      var insta_username     = window.localStorage.getItem('insta_username');
      document.body.style.backgroundColor = bg_color;

      console.log(insta_username);
      console.log(secret_key);
      console.log(login_status);
      console.log(occupation);
  

      if (login_status == "success") {
         //window.location.href = "back.html";
      } else {
         window.location.href = "login.html";
      }

      if ($.trim(login_status) != null ) {
         window.location.href = "login.html";
      }

   </script>
      <div id="app">
         <div class="center">
            <img class='img-circle' src='../assets/block/b1.jpg' alt='' height='80' width='80'>
            </br>
            <p id="name"></p>
            <br>
            <p id="caption"></p>
            <hr>
            <p>A little more about me:</p>
            <ul>
               <li id="bio_line"></li>
               <li id="school"></li>
               <li id="education"></li>
               <li id="age"></li>
               <li id="height"></li>
               <li id="pol_view"></li>
               <li id="fav_color"></li>
               <li id="econ"></li>
            </ul>
            <hr>
            <p>Skills: <i style="opacity: 0.7"><font color="green"><----solid<font>-<font color="orange">famili</font><font color="red">ar----></font></i></p>
            <p id="skills">
            </p>
            <hr>
            <p>Connections:</p>
            <p id="connections">
            <hr>


            <p>Current position:</p>
            <ul>
               <p id="position"></p>
               <p id="curr_company"></p>
               <p id="position_date"></p>
            </ul>
            <hr>    
            <p>My projects:</p>
            <ul>
            </ul>
            <hr>
            <p id="resume_status"></p>
            <p><img src="../assets/imgs/curriculum.png"  height='60' width='60'></p>
            <hr>
            <p>Get in touch:</p>
            <ul>
                <li>Github:</li>
                <li>Personal site:</li>
                <li>LinkedIn:</li>
                <li>Instagram:</li>
            
            </ul>
         </div>
      </div>
   </body>
   <script type="text/javascript" src="js/app.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script>
      $(document).ready(function() {
       //var name          = 'Ibrahim';
       //var location      = 'Silver Spring';
       //var occupation    = 'Engineer';
       //var bio_line      = 'I turn coffee into code';
       //var school        = 'UMBC';
       //var education     = 'B.Sc Information Systems';
       //var age           = '24';
       //var height        = '6 1';
       //var pol           = 'left';
       //var fav_color     = 'black';
       //var econ          = 'stable';
       //var skills        = 'PHP, MySQL, HTML, CSS, JavaScript, SQL, React.js, Node.js, Ajax, C++, C, Python, Arduino, PL-SQL, Apache, Xampp , Laravel';
       //var position      = 'Fullstack Developer Intern';
       //var curr_company  = 'Groove Commerce';
       var position_date = 'Oct 2017 Present';
       var resume_status = 'viewable';
       var connections   = 'Richard Rice, Kash G, Beruk A';
      
       document.getElementById("name").innerHTML = 'Hey! Im' +'&nbsp;' +  first_name ;
       document.getElementById("caption").innerHTML = 'Im an' +'&nbsp;' + occupation + '&nbsp;' + 'based in' +'&nbsp;' +  city ;
       document.getElementById("bio_line").innerHTML = micro_bio;
       document.getElementById("school").innerHTML = 'Alma Mater:'  +'&nbsp;' + school;
       document.getElementById("education").innerHTML = 'Education:'  +'&nbsp;' + education;
       document.getElementById("age").innerHTML = 'Age:'  +'&nbsp;' + age;
       document.getElementById("height").innerHTML = 'Height:'  +'&nbsp;' + height;
       document.getElementById("pol_view").innerHTML = 'Politics float:'  +'&nbsp;' + pol_view;
       document.getElementById("fav_color").innerHTML = 'Favorite color:'  +'&nbsp;' + fav_color;
       document.getElementById("econ").innerHTML = 'Economy:'  +'&nbsp;' + econ;
       document.getElementById("skills").innerHTML =  skills;
       document.getElementById("position").innerHTML =  curr_pos;
       document.getElementById("position_date").innerHTML =  position_date + '->';
       document.getElementById("curr_company").innerHTML   =  curr_company;
       document.getElementById("resume_status").innerHTML  =  'Resume:' + resume_status;
       document.getElementById("connections").innerHTML  =  connections;
      
      
      
      
      
      
      
      });
   </script>
</html>