<!-- Page with all the calls needed to run the index and other page
     Also contains the footer for index -->
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

        <body>
            <div class="bandeau"> <!-- class defining the attributs for this section -->
                <a href="about_us.php" target="_blank">
                    <h2>
                        - TOUT SAVOIR SUR NOUS -
                    </h2>
                </a>
            </div>

        </body>
    </html>