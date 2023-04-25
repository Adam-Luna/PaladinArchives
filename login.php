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
<?php

    if (isset($_POST['submit'])) {
        if ($_POST['name'] === "Edward" && $_POST['password'] === "Julee") {
            header("location: dm/index.html");
        }
    }

?>
<body>
    <!-- Nav bar -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <nav class="navbar navbar-expand-lg navbar-warning bg-transparent">
                <div class="container-fluid">
                    <a class="navbar-brand text-warning" href="index.html"><img src="images/logo.png" alt="#" style="width: 75%;"/></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 20px;">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link text-warning">Home</a>
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
    </div>

    <div class="">
        <div class="container-lg " style="min-height: 62%">
            <div class="row">
                <div class="col text-primary">
                    <br><br><br><br>
                    <h2 class="text-center">Log in to the dm account</h2>
                    <br>
                    <form method="post" class="text-center">
                        <label for="name">Name</label>
                        <br>
                        <input type="text" name="name" id="name">
                        <br><br>
                        <label for="text">Password</label>
                        <br>
                        <input type="password" name="password" id="text"></input>
                        <br><br>
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit" >
                    </form>
                    <br><br>
                </div>
            </div>
            <br>
        </div>

    </div>
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

</body>