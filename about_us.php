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
<?php include('header.php')?>

    <section class="main-section" id="client_outer"><!--main-section client-part-start-->
        <h2>L'équipe Centrale Num de l'ambiance</h2>
        <div class="client_area ">
            <div class="client_profile">
                <div class="quote_section">
                    <p> Seule personne compétente de l'association. Heureusement il est là pour remonter le niveau abyssal proposé par des membres présentés ci dessous.</p>
                </div>
                <div class="client_profile_pic"><img src="img/VG_2.png">
                <h3>Victor Grellier</h3>
                <span>Trésorier</span> </div>
               <div class="clear"></div>

            <div class="client_profile flt">
                <div class="client_profile_pic"><img src="img/chibron_1.jpg" alt=""></div>
                <h3>Selim Tirellil</h3>
                <span>Super Chibron</span>
            </div>
            <div class="quote_section flt">
                <p> Membre à la compétence douteuse, et surtout pas encore aperçue par une personne vivante. On conte que les poissons des abysses l'auraient repérée pendant une fraction de seconde. <br>
                Cela ne reste pour autant qu'une rumeur...</p>
            </div>
            <div class="clear"></div>
            </div>

            <div class="client_profile">
                <div class="quote_section">
                    <p> Seule personne compétente de l'association. Heureusement il est là pour remonter le niveau abyssal proposé par des membres présentés ci dessous.</p>
                </div>
                <div class="client_profile_pic"><img src="img/Bellgoss_1.png">
                    <h3>Rachel Guibert</h3>
                    <span>Présidente</span> </div>
                <div class="clear"></div>

                <div class="client_profile flt">
                    <div class="client_profile_pic"><img src="img/chibron_1.jpg" alt=""></div>
                    <h3>Thomas Doucet</h3>
                    <span>Vice-président <3</span>
                </div>
                <div class="quote_section flt">
                    <p> Membre à la compétence douteuse, et surtout pas encore aperçue par une personne vivante. On conte que les poissons des abysses l'auraient repérée pendant une fraction de seconde. <br>
                        Cela ne reste pour autant qu'une rumeur...</p>
                </div>
                <div class="clear"></div>
            </div>

            <div class="client_profile">
                <div class="quote_section">
                    <p> Seule personne compétente de l'association. Heureusement il est là pour remonter le niveau abyssal proposé par des membres présentés ci dessous.</p>
                </div>
                <div class="client_profile_pic"><img src="img/LF_1.png">
                    <h3>Lucie Flieller</h3>
                    <span>Secrétaire générale</span> </div>
                <div class="clear"></div>

                <div class="client_profile flt">
                    <div class="client_profile_pic"><img src="img/BM_1.jpeg" alt=""></div>
                    <h3>Benoit Matet</h3>
                    <span>Responsable de la fusion</span>
                </div>
                <div class="quote_section flt">
                    <p> Membre à la compétence douteuse, et surtout pas encore aperçue par une personne vivante. On conte que les poissons des abysses l'auraient repérée pendant une fraction de seconde. <br>
                        Cela ne reste pour autant qu'une rumeur...</p>
                </div>
                <div class="clear"></div>
            </div>

            <div class="client_profile">
                <div class="quote_section">
                    <p> Seule personne compétente de l'association. Heureusement il est là pour remonter le niveau abyssal proposé par des membres présentés ci dessous.</p>
                </div>
                <div class="client_profile_pic"><img src="img/bogoss_1.jpg">
                    <h3>Jihane Bennis</h3>
                    <span>Protectrice de Flashy</span> </div>
                <div class="clear"></div>

                <div class="client_profile flt">
                    <div class="client_profile_pic"><img src="img/AG_1.png" alt=""></div>
                    <h3>Achraf Gharbi</h3>
                    <span>Geeky nerd</span>
                </div>
                <div class="quote_section flt">
                    <p> Membre à la compétence douteuse, et surtout pas encore aperçue par une personne vivante. On conte que les poissons des abysses l'auraient repérée pendant une fraction de seconde. <br>
                        Cela ne reste pour autant qu'une rumeur...</p>
                </div>
                <div class="clear"></div>
            </div>

            <div class="client_profile">
                <div class="quote_section">
                    <p> Seule personne compétente de l'association. Heureusement il est là pour remonter le niveau abyssal proposé par des membres présentés ci dessous.</p>
                </div>
                <div class="client_profile_pic"><img src="img/GVC_1.jpeg">
                    <h3>Gabriel Vargas</h3>
                    <span>Petit balais</span> </div>
                <div class="clear"></div>

                <div class="client_profile flt">
                    <div class="client_profile_pic"><img src="img/AdG_1.jpeg" alt=""></div>
                    <h3>Adrien Galamez</h3>
                    <span>Grand manitou du matériel</span>
                </div>
                <div class="quote_section flt">
                    <p> Membre à la compétence douteuse, et surtout pas encore aperçue par une personne vivante. On conte que les poissons des abysses l'auraient repérée pendant une fraction de seconde. <br>
                        Cela ne reste pour autant qu'une rumeur...</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>

    </section>







</body>