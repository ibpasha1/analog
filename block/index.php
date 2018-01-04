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
      <nav class=" animated fadeIn">
         <ul class=" gsd hint hint--right animated fadeInLeft" data-hint="Menu Description">
            <li>
               <a href='#page1' style="font-weight:900; font-size:xx-large">&#9776;</a>
               <ul class="animated fadeInLeft">
                  <li class="hint hint--right animated fadeIn" data-hint="&#9776;"><a href='#'>Sub Page 1</a></li>
                  <li><a href='#'>Sub Page 2</a></li>
                  <li><a href='#'>Sub Page 3</a></li>
               </ul>
            </li>
         </ul>
      </nav>
      <div id="app">
         <div class="center">
            <p id="name"></p>
            <br>
            <p id="caption"></p>
            <hr>
            <p>By me:</p>
            <ul>
               <li><a target="_blank" href="https://www.wesaturate.com">Wesaturate</a> - Free photos
               </li>
               <li><a target="_blank" href="http://grayhats.io">Gray Hats</a> - Home page for UW club
               </li>
               <li><a target="_blank" href="http://defend.grayhats.io">Defend</a> - Site for an
                  upcoming hackathon
               </li>
               <li><a target="_blank" href="http://blueout.co">Blueout</a> - iOS apps</li>
               <li><a target="_blank" href="https://github.com/kash/resources">Resources</a> - Curated
                  resources for devs
               </li>
               <li><a target="_blank" href="https://github.com/kash">GitHub</a> - More on my GitHub
               </li>
            </ul>
            <hr>
            <p>Skills: <i style="opacity: 0.4">(can you find the Pokemon?)</i></p>
            <p>JavaScript, Node, Redux, React, Git, REST, SQL, MySQL, Webpack, ES6,
               Stylus, Mocha, Redis, Regex, Jade, AWS S3, Sass, LESS, CSS, HTML,
               Charizard, jQUery, Express, SEO, Flow, TypeScript, Bootstrap
            </p>
            <hr>
            <p>Please support the following causes:</p>
            <ul>
               <li>
                  <a target="_blank" href="https://giveto.seattlechildrens.org/changealife">
                  Seattle Children's Hospital
                  </a>
               </li>
               <li>
                  <a target="_blank" href="https://action.aclu.org/donate-aclu?ms=web_horiz_nav_hp">
                  ACLU
                  </a>
               </li>
               <li>
                  <a target="_blank" href="https://ifundraise.nami.org/index.cfm?fuseaction=donate.event&eventID=503&referrer=WEBDG&utm_source=HomepageButton&utm_medium=website&utm_campaign=DonationTracking">
                  NAMI
                  </a>
               </li>
               <li>
                  <a target="_blank" href="https://secure.feedingamerica.org/site/Donation2?df_id=15040&15040.donation=form1&s_onsite_promo=MainNav_Donate&s_src=W177ORGSC&s_onsite_promo=MainNav_Donate&s_referrer=google&s_subsrc=http%3A%2F%2Fwww.feedingamerica.org%2F%3Freferrer%3Dhttps%3A%2F%2Fwww.google.com%2F">
                  Feeding America
                  </a>
               </li>
               <li>
                  <a target="_blank" href="https://www.battleforthenet.com/">
                  Battle For The Net
                  </a>
               </li>
            </ul>
            <hr>
            <p>Resume:</p>
            <p>Please feel free to <a href="/cdn-cgi/l/email-protection#3c575d4f547c4b594f5d48494e5d4859125f5351">email me</a> if you'd like to see my resume 😊</p>
            <hr>
            <p>Get in touch:</p>
            <ul>
               <li>Email: <a href="/cdn-cgi/l/email-protection#442f25372c04332137253031362530216a272b29"><span class="__cf_email__" data-cfemail="a2c9c3d1cae2d5c7d1c3d6d7d0c3d6c78cc1cdcf">[email&#160;protected]</span></a></li>
               <li>GitHub: <a target="_blank" href="https://github.com/kash">@kash</a></li>
               <li>Wesaturate: <a target="_blank" href="https://www.wesaturate.com/kash">@kash</a></li>
               <li>LinkedIn: <a target="_blank" href="https://linkedin.com/in/kashg">@kashg</a></li>
               <li>Instagram: <a target="_blank" href="https://instagram.com/kashgoudarzi">@kashgoudarzi</a>
               </li>
            </ul>
         </div>
      </div>
   </body>
   <script type="text/javascript" src="js/app.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script>
   $(document).ready(function() {
    var name = 'Ibrahim';
    var location = 'Silver Spring';
    var occupation = 'ME';

    document.getElementById("name").innerHTML = 'Hey! Im' +'&nbsp;' +  name ;
    document.getElementById("caption").innerHTML = 'Im a' +'&nbsp;' + occupation + '&nbsp;' + 'based in' +'&nbsp;' +  location ;
   });
</script>
</html>