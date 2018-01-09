<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="../css/reset.css" type="text/css">
      <link rel="stylesheet" href="../css/index.scss" type="text/css">
      <link rel="stylesheet" href="../css/nav.css" type="text/css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
      <link rel="stylesheet" href="../css/form1.css">
      <title>persons name</title>
   </head>
   <body>
    
      <style>
         .img-circle 
         {
         border-radius: 50% !important;
         } 
         #slidecontainer {
         width: 20%;
         }
         .slider {
         -webkit-appearance: none;
         width: 100%;
         height: 5px;
         background: #000;
         outline: none;
         opacity: 0.7;
         -webkit-transition: .2s;
         transition: opacity .2s;
         }
         .slider:hover {
         opacity: 1;
         }
         .slider::-webkit-slider-thumb {
         -webkit-appearance: none;
         appearance: none;
         width: 10px;
         height: 20px;
         background: #4CAF50;
         cursor: pointer;
         }
         .slider::-moz-range-thumb {
         width: 15px;
         height: 25px;
         background: #4CAF50;
         cursor: pointer;
         }

        

         .text-right{
            text-align: right !important; ;
        }

        
      </style>
<script type="text/javascript"></script>
<script text="text/javascript">
      var user_id            = window.localStorage.getItem('key');
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


      console.log(user_id);
     
      
  

      if (login_status == "success") {
         //window.location.href = "back.html";
      } else {
         window.location.href = "login.html";
      }

    

   </script>
      <div id="app">
         <div class="center">
            <ul>
               <br>
               <input type="hidden" id="id">
               <li><input placeholder="" id="first_name" type="text" class="validate"></li>
               <li><input placeholder="" id="last_name"  type="text" class="validate"></li>
               <li><input placeholder="" id="occupation" type="text" class="validate"></li>
               <li><input placeholder="" id="city"       type="text" class="validate"></li>
      
              
                  <li>Font type:
                  <select id="font_type" class="field-select" >
                     <option value="">Saved</option>
                     <option value="0">Source Sans Pro</option>
                     <option value="1">Courier New</option>
                     <option value="2">Verdana</option>
                     <option value="3">Lucida Console</option>
                     <option value="4">Comic Sans MS</option>
                     <option value="5">Impact</option>
                     <option value="6">Calibri</option>
                     <option value="7">Open Sans</option>
                     <option value="8">Arimo</option>
                     <option value="9">My Custom Font</option>
                     <option value="10">Raleway</option>
                  </select>
               </li>
               <li>
                  Font size:
                  <div id="slidecontainer">
                     <input type="range" min="1" max="4" id="font_size" class="slider" id="myRange">
                     <p>Size: <span id="demo"></span></p>
                  </div>
               </li>
               <script>
                  var slider = document.getElementById("myRange");
                  var output = document.getElementById("demo");
                  output.innerHTML = slider.value;
                  
                  slider.oninput = function() {
                  output.innerHTML = this.value;
                  }
               </script>
               <li>
                  background-color:
                  <select id="bgcolor"  class="field-select">
                     <option value="">Saved</option>
                     <option value="0">gray</option>
                     <option value="1">white</option>
                     <option value="2">light cyan</option>
                     <option value="3">alice blue</option>
                     <option value="4">honeydrew</option>
                     <option value="5">lavender</option>
                     <option value="6">mintcream</option>
                     <option value="7">light blue</option>
                     <option value="8">light steel blue</option>
                  </select>
               </li>
            </ul>
            <p id="caption"></p>
            <hr>
            <p>A little more about me:</p>
            <ul>
               <li><input type="text" id="micro_bio"  placeholder="One line bio"/></li>
               <li><input type="text" id="school"     placeholder="Alma Mater"/></li>
               <li><input type="text" id="eduation"   placeholder="Education"/></li>
               <li><input type="text" id="Age"        placeholder="Age"/></li>
               <li><input type="text" id="Height"     placeholder="Height"/></li>
               <li><input type="text" id="pol_view"   placeholder="Politics"/></li>
               <li><input type="text" id="fav_color"  placeholder="Favorite color"/></li>
               <li><input type="text" id="econ"       placeholder="Economy"/></li>

              
            </ul>
            <hr>
            <p>Skills: (plot your skills from most solid to least solid) </p>
            <p><i style="opacity: 0.7">example:<font color="green">PHP, HTML, CSS, MySql, Json</font>, <font color="orange">JavaScript,</font> <font color="red">React.js, Node.js, Python</font></i></p>
                 <textarea placeholder="solid..."      rows='2' cols='40' id="solid_sk"></textarea>
                 <textarea placeholder="decent..."     rows='2' cols='40' id="mid_sk"></textarea>
                 <textarea placeholder="working on..." rows='2' cols='40' id="light_sk"></textarea>
            </p>
            <hr>
            <p>Current position or last: <i style="opacity: 0.7">example: FullStack Developer at Analogg.io</i></p>
            <ul>
             <li><input type="text" id="curr_pos" placeholder="current position"/></li>
            </ul>
            <hr>
            <p>My projects:</p>
            <ul>
                <li><input type="text" id="project_info" placeholder="project info"/></li>
            </ul>
            <hr>
            <p>Resume:</p>
            <p id="resume_status"></p>
            <hr>
            <p>Get in touch:</p>
            <ul>
                <li><input type="text" id="github_username"   placeholder="Github"/></li>
                <li><input type="text" id="personal_site"     placeholder="Personal site"/></li>
                <li><input type="text" id="linkedin_url"      placeholder="LinkedIn"/></li>
                <li><input type="text" id="insta_username"    placeholder="Instagram"/></li>
            </ul>
            <p class="center-align">
            <button class="button_signup button1" id="update_account"><font color="black">save</font></button>
            </p>
         </div>
      </div>
   </body>
   <script type="text/javascript" src="../js/app.js"></script>
   <script>
      $(document).ready(function() {
        document.getElementById("id").value                 = user_id;
        document.getElementById("first_name").value         = first_name;
        document.getElementById("last_name").value          = last_name;
        document.getElementById("occupation").value         = occupation;
        document.getElementById("city").value               = city;
        document.getElementById("font_type").value          = font_type;
        document.getElementById("font_size").value          = font_size;
        document.getElementById("bg_color").value           = bg_color;
        document.getElementById("micro_bio").value          = micro_bio;
        document.getElementById("school").value             = school;
        document.getElementById("eduation").value           = eduation;
        document.getElementById("Age").value                = Age;
        document.getElementById("Height").value             = Height;
        document.getElementById("pol_view").value           = pol_view;
        document.getElementById("fav_color").value          = fav_color;
        document.getElementById("econ").value               = econ;
        document.getElementById("solid_sk").value           = solid_sk;
        document.getElementById("mid_sk").value             = mid_sk;
        document.getElementById("light_sk").value           = light_sk;
        document.getElementById("curr_pos").value           = curr_pos;
        document.getElementById("project_info").value       = project_info;
        document.getElementById("resume").value             = resume;
        document.getElementById("github_username").value    = github_username;
        document.getElementById("personal_site").value      = personal_site;
        document.getElementById("linkedin_url").value       = linkedin_url;
        document.getElementById("insta_username").value     = insta_username;

        
      
      
      
      
      
      
      });
   </script>
</html>