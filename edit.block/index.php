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
      </style>
      <div id="app">
         <div class="center">
            <ul>
               <input type="file" name="fileToUpload" id="fileToUpload">
               <br>
               <input type="submit" value="Upload Image" name="submit">
               <li>First name:<input type="text" name="name" value=""/></li>
               <li>Last name: <input type="text" name="name" value=""/></li>
               <li>Ocupation: <input type="text" name="name" value=""/></li>
               <li>City:      <input type="text" name="name" value=""/></li>
               <li>
                  Font type:
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
               <li>A line about myself:<input type="text" name="name" value=""/></li>
               <li>
                  background-color
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
               <li>One line bio:<input type="text" name="name" value=""/></li>
               <li>Alma Mater:<input type="text" name="name" value=""/></li>
               <li>Education:<input type="text" name="name" value=""/></li>
               <li>Age:<input type="text" name="name" value=""/></li>
               <li>Height:<input type="text" name="name" value=""/></li>
               <li>Politics:<input type="text" name="name" value=""/></li>
               <li>Favorite color:<input type="text" name="name" value=""/></li>
               <li>Economy:<input type="text" name="name" value=""/></li>
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
      
        
       var name          = 'Ibrahim';
       var location      = 'Silver Spring';
       var occupation    = 'Engineer';
       var bio_line      = 'I turn coffee into code';
       var school        = 'UMBC';
       var education     = 'B.Sc Information Systems';
       var age           = '24';
       var height        = '6 1';
       var pol           = 'left';
       var fav_color     = 'black';
       var econ          = 'stable';
       var skills        = 'PHP, MySQL, HTML, CSS, JavaScript, SQL, React.js, Node.js, Ajax, C++, C, Python, Arduino, PL-SQL, Apache, Xampp , Laravel';
       var position      = 'Fullstack Developer Intern';
       var curr_company  = 'Groove Commerce';
       var position_date = 'Oct 2017 Present';
       var resume_status = 'viewable';
      
       document.getElementById("name").innerHTML = 'Hey! Im' +'&nbsp;' +  name ;
       document.getElementById("caption").innerHTML = 'Im an' +'&nbsp;' + occupation + '&nbsp;' + 'based in' +'&nbsp;' +  location ;
       document.getElementById("bio_line").innerHTML = bio_line;
       document.getElementById("school").innerHTML = 'Alma Mater:'  +'&nbsp;' + school;
       document.getElementById("education").innerHTML = 'Education:'  +'&nbsp;' + education;
       document.getElementById("age").innerHTML = 'Age:'  +'&nbsp;' + age;
       document.getElementById("height").innerHTML = 'Height:'  +'&nbsp;' + height;
       document.getElementById("pol_view").innerHTML = 'Politics float:'  +'&nbsp;' + pol;
       document.getElementById("fav_color").innerHTML = 'Favorite color:'  +'&nbsp;' + fav_color;
       document.getElementById("econ").innerHTML = 'Economy:'  +'&nbsp;' + econ;
       document.getElementById("skills").innerHTML =  skills;
       document.getElementById("position").innerHTML =  position;
       document.getElementById("position_date").innerHTML =  position_date + '->';
       document.getElementById("curr_company").innerHTML   =  curr_company;
       document.getElementById("resume_status").innerHTML  =  'Resume:' + resume_status;
      
      
      
      
      
      
      
      });
   </script>
</html>