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

            <!--[if IE]<style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

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

<!-- Banner above the pictures, logo of the association to be changed, NEED TO ADD SMOOTH COLOR REPARTITION -->
<?php include("header.php") ?>

<!-- Access to both galleries -->
<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner">
    <div class="container-fluid">
      <div class="top_content">
        <div class="row"> <!-- place where the 2 pictures are going to be set -->

          <div class="col-lg-6 col-sm-5">
              <div style="opacity: 1;" class="portfolio-item one-four   videography isotope-item"> <!-- adds the context of the animation for the hover shit -->
                <div class="portfolio-image"> <img src="http://www.centralenum.org/galerie-publique/albums/2016-2017/Agrobang/Volante/20161202-033040-1682-Paul%20Toudret.jpg" alt=""> </div>
                <div class="project-overlay">
                  <a href="http://www.centralenum.org/galerie-publique/2016-2017/Quadrabang%202k16/" class="learn_more2" target="_blank">Vers la Galerie</a> </div>
              </div>
          </div>

          <div class="col-lg-6 col-sm-5">
                <div style="opacity: 1;" class="portfolio-item one-four   videography isotope-item">
                    <div class="portfolio-image">
                        <img src="http://www.centralenum.org/galerie-publique/albums/Archives/2015-2016/RCS/Journ%C3%A9e/20160317-113330-4390-Gabriel%20Correa.jpg" alt="">
                    </div>
                    <div class="project-overlay">
                        <a href="https://www.flickr.com/photos/centralenum/" class="learn_more2" target="_blank">Vers le Book</a> </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--learn_more2 is the class defining the button to click to <hen hovering over the picture
    project-overlay refers to the aspects of the picture when hovering it with the mouse

-->


  
<!--  -->

<?php include("footer.php") ?>




<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script> 
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
	  section.className = 'wow shake';
	  section.className = 'wow zoomIn';
	  section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script> 
<script type="text/javascript">
	$(window).load(function(){
		
		$('a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script> 

<!--<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 350,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>


--> 

<script type="text/javascript">

   
  jQuery(document).ready(function($){     
// Portfolio Isotope
	var container = $('#portfolio-wrap');	
	

	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 200,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});	

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();		
	  	return false;
	});
		
		
		function splitColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = 1;
			
			
			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}
			
			return columnNumb;
		}		
		
		function setColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = splitColumns(), 
				postWidth = Math.floor(winWidth / columnNumb);
			
			container.find('.portfolio-item').each(function () { 
				$(this).css( { 
					width : postWidth + 'px' 
				});
			});
		}		
		
		function setProjects() { 
			setColumns();
			container.isotope('reLayout');
		}		
		
		container.imagesLoaded(function () { 
			setColumns();
		});
		
	
		$(window).bind('resize', function () { 
			setProjects();			
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});
</script>
</body>
</html>