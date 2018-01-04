<!--
   Copyright (c) Cosyne LLC 2017 - 2018 - Author Ibrahim Pasha
   -->
   <!DOCTYPE html>
<html>
   <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <link rel="stylesheet" href="../css/form1.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   <title>Cosyne - Business </title>
   <body>
      <style>
         body {
         background-repeat: no-repeat;
         background-size: 100% 100%;
         opacity: 1.0;
         }
         a {
         color: #fff ;
         }
         ::-webkit-input-placeholder {
         text-align: center;
         }
      </style>
      <script type="text/javascript"></script>
      <div class="container" style="width:250px">
         <h5 class="center-align" style="margin-top: 80px;"><img src="../assets/imgs/microphone.png" alt="" height="150" width="150"></h5>
         <p class="center-align"><font color="black">after checking your email...</font></p>
         <button class="button_login button1" id="login_redirect"><font color="black">login</font></button>
      </div>
      <center>
         <div id="status"></div>
      </center>
      </br>
      <center>
         <div id="key"></div>
      </center>
      </br>
      <div id="result"></div>
      <div class="footer">
      <div class="footer-copyright">
      <div class="container">
         &copy;  Cosyne Inc
      </div>
      <script type="text/javascript" src="../js/app.js"></script>
      <script>
         $(document).ready(function() {
         $('select').material_select();
         $(".button-collapse").sideNav();
         });

         $('.carousel').carousel();
        $('.carousel.carousel-slider').carousel({fullWidth: true});

        document.getElementById("login_redirect").onclick = function () {
        location.href = "../signup";
        };

       

      </script>
   </body>
</html>