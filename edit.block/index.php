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

<script text="text/javascript">
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
            <ul>
               <input type="file" name="fileToUpload" id="fileToUpload">
               <br>
               <input type="submit" value="Upload Image" name="submit">
               <li><input type="text" name="first_name" value="" placeholder="first name"/></li>
               <li><input type="text" name="last_name"  value="" placeholder="last name"/></li>
               <li><input type="text" name="ocupation"  value="" placeholder="ocupation"/></li>
               <li><input type="text" name="city"       value="" placeholder="city"/></li>
              
                  <li>Font type:
                  <select name="font_type" class="field-select" value="">
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
                     <input type="range" min="1" max="4" name="font_size" value="" class="slider" id="myRange">
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
               <li><input type="text" name="micro_bio" value="" placeholder="A line about myself"/></li>
               <li>
                  background-color:
                  <select name="bgcolor" class="field-select" value="">
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
               <li><input type="text" name="micro_bio"  value="" placeholder="One line bio"/></li>
               <li><input type="text" name="school"     value="" placeholder="Alma Mater"/></li>
               <li><input type="text" name="eduation"   value="" placeholder="Education"/></li>
               <li><input type="text" name="Age"        value="" placeholder="Age"/></li>
               <li><input type="text" name="Height"     value="" placeholder="Height"/></li>
               <li><input type="text" name="pol_view"   value="" placeholder="Politics"/></li>
               <li><input type="text" name="fav_color"  value="" placeholder="Favorite color"/></li>
               <li><input type="text" name="econ"       value="" placeholder="Economy"/></li>

              
            </ul>
            <hr>
            <p>Skills: (plot your skills from most solid to least solid) </p>
            <p><i style="opacity: 0.7">example:<font color="green">PHP, HTML, CSS, MySql, Json</font>, <font color="orange">JavaScript,</font> <font color="red">React.js, Node.js, Python</font></i></p>
                 <textarea rows='2' cols='40' name="skills">solid...</textarea>
                 <textarea rows='2' cols='40' name="skills">decent...</textarea>
                 <textarea rows='2' cols='40' name="skills">working on...</textarea>
            </p>
            <hr>
            <p>Current position or last: <i style="opacity: 0.7">example: FullStack Developer at Analogg.io</i></p>
            <ul>
             <li>Position:<input type="text" name="name" value=""/></li>
            </ul>
            <hr>
            <p>My projects:</p>
            <ul>
            </ul>
            <hr>
            <p>Resume:</p>
            <p id="resume_status"></p>
            <p><img src="../assets/imgs/curriculum.png"  height='60' width='60'></p>
            <hr>
            <p>Get in touch:</p>
            <ul>
               <object data="myfile.pdf" type="application/pdf" width="100%" height="100%">
                  <p>Alternative text - include a link <a href="myfile.pdf">to the PDF!</a></p>
               </object>
            </ul>
            <p class="center-align">
                     <center><button class="button_signup button1" id="save"><font color="black">save</font></button></center>
                  </p>
         </div>
      </div>
   </body>
   <script type="text/javascript" src="js/app.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script>
      $(document).ready(function() {
      
        var next = 1;
            $(".add-more").click(function(e){
                e.preventDefault();
                var addto = "#field" + next;
                var addRemove = "#field" + (next);
                next = next + 1;
                var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
                var newInput = $(newIn);
                var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
                var removeButton = $(removeBtn);
                $(addto).after(newInput);
                $(addRemove).after(removeButton);
                $("#field" + next).attr('data-source',$(addto).attr('data-source'));
                $("#count").val(next);  
                
                    $('.remove-me').click(function(e){
                        e.preventDefault();
                        var fieldNum = this.id.charAt(this.id.length-1);
                        var fieldID = "#field" + fieldNum;
                        $(this).remove();
                        $(fieldID).remove();
                    });
            });
      
            //I'm assuming that the skills id is field1 and as you add more fields it would be field2, field3, field4 etc
      
        
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
       // placeholdr auto fill from vars

       document.getElementById("name").placeholder                = first_name;
      
      
      
      
      
      
      
      });
   </script>
</html>