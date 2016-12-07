<!-- Page with all the calls needed to run the index and other page
     Also contains the header for index dans aboutus pages-->
<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, maximum-scale=1">
            <title>Le bon site de Centrale Num</title>
            <link rel="icon" href="favicon.png" type="image/png">
            <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
            <link href="css/style.css" rel="stylesheet" type="text/css">
            <link href="css/linecons.css" rel="stylesheet" type="text/css">
            <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
            <link href="css/responsive.css" rel="stylesheet" type="text/css">
            <link href="css/animate.css" rel="stylesheet" type="text/css">

            <link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>
            <link rel="icon" >

            <!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

            <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.js"></script>
            <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
            <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
            <script type="text/javascript" src="js/jquery.isotope.js"></script>
            <script type="text/javascript" src="js/wow.js"></script>
            <script type="text/javascript" src="js/classie.js"></script>

            <!--[if lt IE 9]>
            <script src="js/respond-1.1.0.min.js"></script>
            <script src="js/html5shiv.js"></script>
            <script src="js/html5element.js"></script>
            <![endif]-->

            <script type="text/javascript">
                $(document).ready(function(e) {
                    $('.res-nav_click').click(function(){
                        $('ul.toggle').slideToggle(600)
                    });

                    $(document).ready(function() {
                        $(window).bind('scroll', function() {
                            if ($(window).scrollTop() > 0) {
                                $('#header_outer').addClass('fixed');
                            }
                            else {
                                $('#header_outer').removeClass('fixed');
                            }
                        });

                    });


                });
                function resizeText() {
                    var preferredWidth = 767;
                    var displayWidth = window.innerWidth;
                    var percentage = displayWidth / preferredWidth;
                    var fontsizetitle = 25;
                    var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
                    $(".divclass").css("font-size", newFontSizeTitle)
                }
            </script>
        </head>
<!-- Je ne sais pas ce que fait le zbeul au dessus, va falloir que je m'y intéresse un jour ou l'autre

     Mais en dessous ce sera la bannière d'accueil avec le logo de l'asso !-->

        <body>
            <header role="banner">
                <div class="header_bandeau"> <!-- class defining the background color and fonts -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-lg-push-4 col-sm-4 col-sm-push-4"> <!-- Placing a 1/3 screen wide box in the middle of the screen -->
                                <img class="la_classe_de_l_enfer" src="img/logo_CN.png" alt="Centrale Num" /> <!-- access to the logo -->
                            </div>
                            <div class="container"> <!-- Second box to add the login button -->
                                <div class="col-lg-4 col-lg-push-4 col-sm-4 col-sm-push-4">
                                    <a href="zone_login.php" target="_blank"> <!-- php page where the user gets to login -->
                                        <L>Peignoir</L>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </body>


</html>