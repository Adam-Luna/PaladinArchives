<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Paladin's Archives</title>
      <link rel="icon" type="image/x-icon" href="icon/icon.ico">
      <meta name="keywords" content="DnD, Dungeons and Dragons, World Recors, D&D, 5e, TTRPG">
      <meta name="description" content="">
      <meta name="author" content="Rohan-Sensei">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <script src="https://kit.fontawesome.com/2ffcb75538.js" crossorigin="anonymous"></script>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <!-- Load the Twitch embed JavaScript file -->
        <script src="https://embed.twitch.tv/embed/v1.js"></script>
   </head>
<!--Database for the team section-->
   <?php
   $db = new PDO("mysql:host = localhost; dbname=paladin", "root", "");
   $query = $db->prepare("SELECT * FROM teammember");
   $query->execute();
   $result = $query->fetchAll(PDO::FETCH_ASSOC);
   ?>

   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <div id="mySidepanel" class="sidepanel">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="index.html">Home</a>
         <a href="#about">About</a>
         <a href="#about">About</a>
         <a href="#recruiting">Recruiting</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <!-- Nav bar -->
                  <div class="col-2"></div>
                  <div class="col-8">
                     <nav class="navbar navbar-expand-lg navbar-warning bg-transparent">
                        <div class="container-fluid">
                              <a class="navbar-brand text-warning" href="index.php"><img src="images/logo.png" alt="#" style="width: 75%;"/></a>
                           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 20px;">
                                    <li class="nav-item">
                                       <a href="index.php" class="nav-link text-warning">Home</a>
                                    </li>
                                    <li class="nav-item">
                                       <a href="#about" class="nav-link text-warning">About</a> 
                                    </li>
                                    <li class="nav-item">
                                       <a href="#team" class="nav-link text-warning">The Team</a>
                                    </li>
                                    <li class="nav-item">
                                       <a href="#recruiting" class="nav-link text-warning">Recruiting</a>
                                    </li>
                                    <li class="nav-item opacity-0">
                                       <a class="nav-link text-warning disabled" href="login.php">Log in</a>
                                    </li>
                              </ul>                            
                           </div>                        
                        </div>                       
                  </nav>
               </div>
               <div class="col-2"></div>
                  <!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                     <div class="right_bottun">
                        <button class="openbtn" onclick="openNav()"><img src="images/menu_icon.png" alt="#"/> </button>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <h1>Paladin's Archives</h1>
                           <span>Organizing the largest Dungeons and Dragons event to date</span>
                           <a class="read_more" href="#about">About Us</a>
                           <ul class="social_team">
                              <li><a href="https://twitter.com/PaladinArchives" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="https://www.twitch.tv/paladinsarchives" target="_blank"><i class="fa-brands fa-twitch" aria-hidden="true"></i></a></li>
                              <li><a href="https://www.reddit.com/user/Paladins_Archives/" target="_blank"><i class="fa-brands fa-reddit" aria-hidden="true"></i></a></li>
                              <li><a href="https://discord.gg/9xEdDdueDG" target="_blank"><i class="fa-brands fa-discord" aria-hidden="true"></i></a></li>
                              <li><a href="https://www.youtube.com/channel/UCoNEA2T5MxG1TpUFODF5blQ" target="_blank"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                              <li><a href="https://store.streamelements.com/paladinsarchives" target="_blank"><i class="fa-solid fa-cart-shopping"></i></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- about section -->
      <div id="about" class="about">
         <div class="container">
              <div class="row justify-content-center">
                 <div class="col-md-6">
                    <div class="titlepage">
                       <h2>About the Marathon of Rappan Athuk</h2>
                       <h3>10 Dungon Masters, 65 Players, 15 Support Staff, 744 Hours, 1 World Record, 1 Campaign, 1 Session</h3>
                       <p>Hails and well met! Paladin's Archives is planning along with our team on running the longest session 
                        ever in history doing Rappan Athuk  
                        from Jully 1st 8Am CST to Jully 31.</p>
                    </div>
                 </div>
              </div>
         </div>
      </div>
          
      <!-- about section -->
        <div id="countdown" class="countdown">
              <div class="container">
                  <h2>Countdown to the event</h2>
                  <div id="headline"></div>
                  <div id="countdown">
                    <ul>
                      <li><span id="days"></span>days</li>
                      <li><span id="hours"></span>Hours</li>
                      <li><span id="minutes"></span>Minutes</li>
                      <li><span id="seconds"></span>Seconds</li>
                    </ul>
                  </div>
                  <div id="content" class="emoji">
                    <span>🥳</span>
                    <span>🎉</span>
                  </div>
            </div>
        </div>

      <!-- Our  team section -->

      <div id="team" class="team">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage" id="team">
                     <h2>Meet the Team</h2>
                     <p>A project in this size would only be possible with the help of a dedicated team of DMs, players and support staff. Meet them here!</p>
                  </div>
               </div>
            </div>
            <div class="row">


                <?php
                    foreach ($result as $data){
                        echo "<div class='col-md-4'>";
                            echo "<div class='team_box'>";
                                echo "<figure><img src='" . $data['img'] . "' alt='Image of " . $data['name'] . "'/></figure>";
                                echo "<div class='social_box'>";
                                    echo "<ul class='social_team'>";
                                        if ($data['media1'] != "empty") {
                                            echo "<li><a href='" . $data['link1'] . "' target='_blank'>" . $data['media1'] . "</a></li>";
                                        }
                                        if ($data['media2'] != "empty") {
                                            echo "<li><a href='" . $data['link2'] . "' target='_blank'>" . $data['media2'] . "</a></li>";
                                        }
                                        if ($data['media3'] != "empty") {
                                            echo "<li><a href='" . $data['link3'] . "' target='_blank'>" . $data['media3'] . "</a></li>";
                                        }
                                        if ($data['media4'] != "empty") {
                                            echo "<li><a href='" . $data['link4'] . "' target='_blank'>" . $data['media4'] . "</a></li>";
                                        }
                                        if ($data['media5'] != "empty") {
                                            echo "<li><a href='" . $data['link5'] . "' target='_blank'>" . $data['media5'] . "</a></li>";
                                        }
                                    echo "</ul>";
                                    echo "<h3>" . $data['name'] . "</h3>";
                                    echo "<p>" . $data['title'] . "</p>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                ?>


            </div>
         </div>
      </div>
<!--      Recruiting-->
      <div id="recruiting" class="about">
         <div class="container">
              <div class="row justify-content-center">
                 <div class="col-md-6">
                    <div class="titlepage">
                       <h2>Recruiting</h2>
                       <p>We are currently recruiting members for our team. See open positions bellow.</p>
                    </div>
                 </div>
              </div>
              <div class="row justify-content-center">
                 <div class="col-md-6">
                    <div class="titlepage">
                       <h2>Mad Mage</h2>
                       <p>Mad Mages are the DMs of this wonderful campaign. They narate the story, host the stream and play all the NPCs.</p>
                       <button class="button-30 justify-content-center" role="button" href="#">Apply to be a Mad Mage</button>
                    </div>
                 </div>
              </div>
              <div class="row justify-content-center">
                 <div class="col-md-6">
                    <div class="titlepage">
                       <h2>Mad Scribe</h2>
                       <p>A Mad Scribe is the assistant of the DM. They keep track of quests, story progressions and player inventories. They also take over the role of a Mad Mage if they're not able to attent their time slot.</p>
                       <button class="button-30 justify-content-center" role="button" href="#">Apply to be a Mage's Scribe</button>
                    </div>
                 </div>
              </div>
              <div class="row justify-content-center">
                 <div class="col-md-6">
                    <div class="titlepage">
                       <h2>Players</h2>
                       <p>The Players will receive premade characters and will be able to play this wonderful campaign in 4 hour increments.</p>
                       <button class="button-30 justify-content-center" role="button" href="#">Player applications are not yet open</button>
                    </div>
                 </div>
              </div>
         </div>
      </div>

        <div style="display: flex; justify-content: center;">
                <div>
            <a class="twitter-timeline" data-height="900" width="600" data-dnt="true" href="https://twitter.com/PaladinArchives?ref_src=twsrc%5Etfw">Tweets by PaladinArchives</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div></div>
      <!-- end Our  team section -->
      <section class="home-newsletter">
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                  	<div class="single">
                  		<h2>Subscribe to our Newsletter</h2>
                        <p>Receive news about the project and always stay up to date.</p><br>
                      	<div class="input-group">
                               <input type="email" class="form-control" placeholder="Enter your email">
                               <span class="input-group-btn">
                               <button class="btn btn-theme" type="submit">Subscribe</button>
                               </span>
                        </div>
                  	</div>
                  </div>
              </div>
          </div>
      </section>
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-12">
                    <ul class="social_icon">
                        <li><a href="https://twitter.com/PaladinArchives" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.twitch.tv/paladinsarchives" target="_blank"><i class="fa-brands fa-twitch" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.reddit.com/user/Paladins_Archives/" target="_blank"><i class="fa-brands fa-reddit" aria-hidden="true"></i></a></li>
                        <li><a href="https://discord.gg/9xEdDdueDG" target="_blank"><i class="fa-brands fa-discord" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCoNEA2T5MxG1TpUFODF5blQ" target="_blank"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="https://store.streamelements.com/paladinsarchives" target="_blank"><i class="fa-solid fa-cart-shopping"></i></i></a></li>
                    </ul>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-md-12">
                     <p>© 2023 All Rights Reserved</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidepanel").style.width = "250px";
         }

         function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
         }
      </script>

      <script>
      (function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy,
      // Change dayMonth below to change the date
      dayMonth = "07/01/",
      birthday = dayMonth + yyyy;

  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end

  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //Will hide the countdown when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
      </script>

      <!-- Create a Twitch.Embed object that will render within the "twitch-embed" element -->
      <script type="text/javascript">
        new Twitch.Embed("twitch-embed", {
        width: 854,
        height: 480,
        channel: "monstercat",
        </script>
   </body>
</html>
