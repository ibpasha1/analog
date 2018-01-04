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
         </a>
         <p class="center-align"><font color="black">welcome to simple</font></p>
         <input type='checkbox' id='form-switch'>
         <form id='login-form'>
            <div class="row">
               <div class="input-field col s12">
                  <input id="email_login" type="email" class="validate" name="email_login" placeholder="email" required>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="password_login" type="password" class="validate" name="password_login"  placeholder="password" required>
               </div>
            </div>
            <div class="row">
               <div class="col m12">
                  <p class="center-align">
                     <button class="button_login button1" id="login"><font color="black">login</font></button>
                  </p>
               </div>
            </div>
            <center><label for='form-switch'><span>no account? get hip</span></label></center>
         </form>
         <form id='register-form'>
            <div class="row">
               <div class="input-field col s12">
                  <input id="email_signup" type="email" class="validate" name="email_signup" placeholder="email" required>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                  <input id="password_signup" type="password" class="validate" name="password_signup"  placeholder="password" required>
               </div>
            </div>
            <div class="row">
               <div class="col m12">
                  <p class="center-align">
                     <button class="button_signup button1" id="signup"><font color="black">signup</font></button>
                  </p>
               </div>
            </div>
            <center><label for='form-switch'>already hip? login then..</label></center>
         </form>
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
      </script>
   </body>
</html>