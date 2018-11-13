<?php
/**
 * Template Name: Slider-zoom
 */

get_header();

?>
 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <script type="text/javascript" src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

   <link href="https://code.jquery.com/ui/1.11.1/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />

<div class="panel">
  
	<?php

// check if the repeater field has rows of data
if( have_rows('images_slider') ):

 	// loop through the rows of data
    while ( have_rows('images_slider') ) : the_row();
?>
        <div class="slide">
    		<div class="imageSlide"><img src="<?php echo the_sub_field('img_slide'); ?>"></div>
			<div class="titre"><?php echo the_sub_field('titre_slide'); ?></div>
			<div class="chapeau"><?php echo the_sub_field('chapeau_slide'); ?></div>
 		</div>
        
<?php
    endwhile;

else :

    // no rows found

endif;

?>
	
	
</div>

<div class="private-policy"><em>© Private policy</em></div>

<div class="svgs-footer">
	<div class="svg-container">	
		<svg version="1.1" viewBox="0 0 550 550">
		  <path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0"/>
		</svg>
	</div>
	<div class="svg-container" style="margin-top:2px;">	
		<svg version="1.1" viewBox="0 0 550 550">
		  <path d="m191.011719 419.042969c-22.140625 0-44.929688-1.792969-67.855469-5.386719-40.378906-6.335938-81.253906-27.457031-92.820312-33.78125l-30.335938-16.585938 32.84375-10.800781c35.902344-11.804687 57.742188-19.128906 84.777344-30.597656-27.070313-13.109375-47.933594-36.691406-57.976563-67.175781l-7.640625-23.195313 6.265625.957031c-5.941406-5.988281-10.632812-12.066406-14.269531-17.59375-12.933594-19.644531-19.78125-43.648437-18.324219-64.21875l1.4375-20.246093 12.121094 4.695312c-5.113281-9.65625-8.808594-19.96875-10.980469-30.777343-5.292968-26.359376-.863281-54.363282 12.476563-78.851563l10.558593-19.382813 14.121094 16.960938c44.660156 53.648438 101.226563 85.472656 168.363282 94.789062-2.742188-18.902343-.6875-37.144531 6.113281-53.496093 7.917969-19.039063 22.003906-35.183594 40.722656-46.691407 20.789063-12.777343 46-18.96875 70.988281-17.433593 26.511719 1.628906 50.582032 11.5625 69.699219 28.746093 9.335937-2.425781 16.214844-5.015624 25.511719-8.515624 5.59375-2.105469 11.9375-4.496094 19.875-7.230469l29.25-10.078125-19.074219 54.476562c1.257813-.105468 2.554687-.195312 3.910156-.253906l31.234375-1.414062-18.460937 25.230468c-1.058594 1.445313-1.328125 1.855469-1.703125 2.421875-1.488282 2.242188-3.339844 5.03125-28.679688 38.867188-6.34375 8.472656-9.511718 19.507812-8.921875 31.078125 2.246094 43.96875-3.148437 83.75-16.042969 118.234375-12.195312 32.625-31.09375 60.617187-56.164062 83.199219-31.023438 27.9375-70.582031 47.066406-117.582031 56.847656-23.054688 4.796875-47.8125 7.203125-73.4375 7.203125zm0 0"/>
		</svg>
	</div>
	<div class="svg-container">	
		<svg version="1.1" viewBox="0 0 550 550">
		 <path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h362c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm-180 390c-74.441406 0-135-60.558594-135-135s60.558594-135 135-135 135 60.558594 135 135-60.558594 135-135 135zm150-240c-24.8125 0-45-20.1875-45-45s20.1875-45 45-45 45 20.1875 45 45-20.1875 45-45 45zm0 0"/><path d="m407 90c-8.277344 0-15 6.722656-15 15s6.722656 15 15 15 15-6.722656 15-15-6.722656-15-15-15zm0 0"/><path d="m257 150c-57.890625 0-105 47.109375-105 105s47.109375 105 105 105 105-47.109375 105-105-47.109375-105-105-105zm0 0"/>
		</svg>
	</div>
</div>

<style type="text/css">

	@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700');
	
  body{
    margin:0;
    padding:0;
	  background-color:#000;
  }
	.panel{
		width:100%;
		height:100vh;
		overflow:hidden;
		position:relative;
	}
	 #right-arrow{
      position:absolute;
      z-index:801;
      right:20px;
      top:50%;
      width:60px;
      height:auto;
      -webkit-transform: translateY(-50%);
       -ms-transform: translateY(-50%);
       transform: translateY(-50%);
   }
   #left-arrow{
      position:absolute;
      z-index:800;
      left:20px;
      top:50%;
      width:60px;
      height:auto;
      -webkit-transform: translateY(-50%);
       -ms-transform: translateY(-50%);
       transform: translateY(-50%);
   }
	.couleur-point{
		color:#f8d304;
	}
	.titre-parallax{
		font-family: 'Open Sans', sans-serif;
		font-weight:700;
		color:#fff;
		font-size:137px;
		line-height:137px;
	}
	.chapeau-parallax{
		font-family: 'Open Sans', sans-serif;
		font-weight:400;
		color:#fff;
		font-size:24px;
		line-height:27px;
		margin-top:20px;
		font-style: italic;
	}
	.chapeau-parallax strong{
		color:#f8d304;
		font-weight:bold;
	}
	.bouton-parallax{
		font-family: 'Open Sans', sans-serif;
		font-weight:700;
		text-align:center;
		text-transform:uppercase;
		color:#001d45;
		font-size:14px;
		line-height:18px;
		background-color:#f8d304;
		display:inline-block;
		padding-top:12px;
		padding-bottom:10px;
		padding-left:60px;
		padding-right:60px;
		margin-left:auto;
		margin-right:auto;
		height:42px;
		border-radius: 32px;
	}
	a.bouton-parallax{
		text-decoration:none;	
	}
	a.bouton-parallax:hover{
		background-color:#fff;
		color:#001d45;
	}
	.private-policy{
		font-family: 'Open Sans', sans-serif;
		font-weight:400;
		font-size:14px;
		position:absolute;
		z-index:995;
		bottom:32px;
		left:25px;
		color:#fff;
	}
	.svgs-footer{
		position:absolute;
		z-index:996;
		bottom:32px;
		right:25px;
	
		width:150px;
		height:12px;
	}
	.svg-container{
		width:18px;
		height:18px;
		margin-left:22px;
		fill:#fff;
		float:left;
	}
	.svg-insta-container{
		width:25px;
		height:18px;
		margin-left:22px;
		fill:#fff;
		float:left;
	}
	
	
</style>

<script>
	
	
	
	//A FAIRE
	
	
	//creer footer


   $( window ).on( "load", function() {
	   
	   //Création du tableau contenant les images du slider
       window.tableSlides=new Array();
	   window.tabletitres=new Array();
	   window.tablechapeaux=new Array();
			  
	   
	   //pour chaque div
          $.each($(".slide") , function (l){ 
            //on stocke la valeur de l'image dans le tableau
             tableSlides[l]=$(this).children( '.imageSlide' ).children( 'img' ).attr('src');
			 tabletitres[l]=$(this).children( '.titre' ).text();
			 tablechapeaux[l]=$(this).children( '.chapeau' ).html();
             //On supprime la div
              $(this).remove();
          });

	 
         //INIT -- on crée un variable index à incrémenter
         window.i=0;
         //INIT -- on crée un variable z-index à décrementer
         window.zindex=500;
	   
	   //INIT-- on initialise le sens d'aniamtion des slide
 		window.sensSlide=1;
	   
	   //INIT-- création de variable d'initialisation pour la première fois où on arrive sur le site
 		window.varInit=0;
	   
	   $('body').append("<div class='conteneur-arrows'></div>");
	    //on y applique son style
	   $('.conteneur-arrows').css('position','absolute');
	   $('.conteneur-arrows').css('bottom','20px');
	   $('.conteneur-arrows').css('left','50%');
	   $('.conteneur-arrows').css('z-index','990');
	   $('.conteneur-arrows').css('-webkit-transform','translateX(-50%)');
	   $('.conteneur-arrows').css('-ms-transform','translateX(-50%)');
	   $('.conteneur-arrows').css('transform','translateX(-50%)');
	   
	   //creation de la flèche gauche
	   $('.conteneur-arrows').append("<div class='left'></div>");
	   $('.left').css('width','52px');
	   $('.left').css('height','52px');
	   $('.left').css('float','left');
	   $('.left').css('position','relative');
	   $('.left').css('border-radius','26px');
	   $('.left').css('margin-top','3px');
	   $('.left').css('margin-right','20px');
	   
	    $('.left').append("<div class='bg-push'></div>");
	   $('.bg-push').css('position','absolute');
	   $('.bg-push').css('background-color','#fff');
	   $('.bg-push').css('z-index','10');
	   $('.bg-push').css('left','0');
	   $('.bg-push').css('top','0');
	   $('.bg-push').css('width','100%');
	    $('.bg-push').css('height','100%');
	   $('.bg-push').css('border-radius','26px');
	   $('.bg-push').css('opacity', '0.3');
	   
	   $('.left').append("<div class='left-barre-haut'></div>");
	   $('.left-barre-haut').css('position','absolute');
	   $('.left-barre-haut').css('z-index','100');
	   $('.left-barre-haut').css('left','16px');
	   $('.left-barre-haut').css('top','20px');
	   $('.left-barre-haut').css('width','18px');
	   $('.left-barre-haut').css('height','2px');
	   $('.left-barre-haut').css('background-color','#fff');
	   $('.left-barre-haut').css('border-radius','3px');
	   $('.left-barre-haut').css('transform','rotate(-45deg)');
	   
	    $('.left').append("<div class='left-barre-bas'></div>");
	   $('.left-barre-bas').css('position','absolute');
	   $('.left-barre-bas').css('z-index','101');
	   $('.left-barre-bas').css('left','16px');
	   $('.left-barre-bas').css('top','32px');
	   $('.left-barre-bas').css('width','18px');
	   $('.left-barre-bas').css('height','2px');
	   $('.left-barre-bas').css('background-color','#fff');
	   $('.left-barre-bas').css('border-radius','3px');
	   $('.left-barre-bas').css('transform','rotate(45deg)');
	   
	   $('.left').append("<div class='couche-transparent-push'></div>");
	   $('.couche-transparent-push').css('position','absolute');
	   $('.couche-transparent-push').css('z-index','200');
	   $('.couche-transparent-push').css('left','0');
	   $('.couche-transparent-push').css('top','0');
	   $('.couche-transparent-push').css('width','100%');
	    $('.couche-transparent-push').css('height','100%');
	  $('.couche-transparent-push').css('border-radius','26px');
	   $('.couche-transparent-push').css('opacity','0');
	   
	   

	   
	   //Au rollover
		$('.left').mouseover(function() {
			
			$('.left').children('.bg-push').animate({
					   opacity: '0'
					},400, function() {

			});
			
			$(this).css('cursor', 'pointer');
		});
			
		//Au rollout
		$('.left').mouseout(function() {
			
			$('.left').children('.bg-push').animate({
					   opacity: '0.3'
					},400, function() {

			});
		});
	   //INIT -- lorsqu'on clique sur le bouton precedent
         $('.left').click(function() {
			 sensSlide=0;
            //on décrémente le z-index
            zindex--;
			  //on incrémente var init pour dire qu'on est plus sur al première slide on qu'on peut donc faire des animations
            varInit++;
            //on incrémentde l'index / si on est à al fin du tableau on revient au début
            i--;
            if (i<0){
               i=tableSlides.length-1;
            }
            //on appelle la fonction qui ajoute une nouvelle slide
            preloadImages();
			
         //INIT - Fin d'action bouton suivant 
         });
	   
	   
	   //creation de la flèche droite
	   $('.conteneur-arrows').append("<div class='right'></div>");
	   $('.right').css('width','52px');
	   $('.right').css('height','52px');
	   $('.right').css('float','left');
	   $('.right').css('position','relative');
	   $('.right').css('border-radius','26px');
	   $('.right').css('margin-top','3px');
	   $('.right').css('margin-right','20px');
	  
	   
	    $('.right').append("<div class='bg-push02'></div>");
	   $('.bg-push02').css('position','absolute');
	   $('.bg-push02').css('background-color','#fff');
	   $('.bg-push02').css('z-index','10');
	   $('.bg-push02').css('left','0');
	   $('.bg-push02').css('top','0');
	   $('.bg-push02').css('width','100%');
	    $('.bg-push02').css('height','100%');
	   $('.bg-push02').css('border-radius','26px');
	   $('.bg-push02').css('opacity', '0.3');
	   
	   $('.right').append("<div class='right-barre-haut'></div>");
	   $('.right-barre-haut').css('position','absolute');
	   $('.right-barre-haut').css('right','16px');
	   $('.right-barre-haut').css('top','20px');
	   $('.right-barre-haut').css('width','18px');
	   $('.right-barre-haut').css('height','2px');
	   $('.right-barre-haut').css('background-color','#fff');
	   $('.right-barre-haut').css('border-radius','3px');
	   $('.right-barre-haut').css('transform','rotate(45deg)');
	   
	    $('.right').append("<div class='right-barre-bas'></div>");
	   $('.right-barre-bas').css('position','absolute');
	   $('.right-barre-bas').css('right','16px');
	   $('.right-barre-bas').css('top','32px');
	   $('.right-barre-bas').css('width','18px');
	   $('.right-barre-bas').css('height','2px');
	   $('.right-barre-bas').css('background-color','#fff');
	   $('.right-barre-bas').css('border-radius','3px');
	   $('.right-barre-bas').css('transform','rotate(-45deg)');
	   
	   $('.right').append("<div class='couche-transparent-push02'></div>");
	    $('.couche-transparent-push02').css('position','absolute');
	   $('.couche-transparent-push02').css('z-index','200');
	   $('.couche-transparent-push02').css('left','0');
	   $('.couche-transparent-push02').css('top','0');
	   $('.couche-transparent-push02').css('width','100%');
	    $('.couche-transparent-push02').css('height','100%');
	  $('.couche-transparent-push02').css('border-radius','36px');
	   $('.couche-transparent-push02').css('opacity','0');
	   
	   
	    //Au rollover
		$('.right').mouseover(function() {
			
			$('.right').children('.bg-push02').animate({
					   opacity: '0'
					},400, function() {

			});
			
			$(this).css('cursor', 'pointer');
		});
			
		//Au rollout
		$('.right').mouseout(function() {

			$('.right').children('.bg-push02').animate({
					   opacity: '0.3'
					},400, function() {

			});
		});
	   

	   //INIT -- lorsqu'on clique sur le bouton suivant
         $('.right').click(function() {
			 sensSlide=1;
            //on décrémente le z-index
            zindex--;
			  //on incrémente var init pour dire qu'on est plus sur al première slide on qu'on peut donc faire des animations
            varInit++;
            //on incrémentde l'index / si on est à al fin du tableau on revient au début
            i++;
            if (i==tableSlides.length){
               i=0;
            }
            //on appelle la fonction qui ajoute une nouvelle slide
            preloadImages();
			
         //INIT - Fin d'action bouton suivant
         });
	   
         
	   
	    preloadImages();
	   
    });
	
	
	///////////////////////////////////
	//      CHARGEMENT DS IMAGES     //
	///////////////////////////////////
   	function preloadImages(){

   		 //INIT- on applique un preload aux images servant à créer la slide
	   preloadPictures([tableSlides[i]], function(){
	   		//si c'est chargé, on appelle la fonction qui va créer la slide
           changeSlide()
		});
   	}
	
	
	
	function changeSlide(){
       	 //INIT -- on crée une div avec l'index actuel et le z-index actuel
       	 $('.panel').append("<div class='slide"+zindex+"'><div style='background-color:#ccc;' class='panelInterne"+zindex+"'></div></div>");
       
		 //INIT -- on y applique le style
         $('.slide'+zindex).css('position','absolute');
         $('.slide'+zindex).css('width','100%');
         $('.slide'+zindex).css('height','100%');
         $('.slide'+zindex).css('z-index',zindex);
         $('.slide'+zindex).css('top','0');
         $('.slide'+zindex).css('left','0');
         $('.slide'+zindex).css('overflow','hidden');
       	 //INIT -- On y applique l'image de fond de l'index actuel
         $('.panelInterne'+zindex).append("<img src='"+tableSlides[i]+"'>");
		//INIT - on recupère les données de taille de l'image pour que le div parent ai cette taille
       window.recupWimg=$( ".panelInterne"+zindex+" img" ).width();
	   window.recupHimg=$( ".panelInterne"+zindex+" img" ).height();
	    //INIT - la div aprent prends la taille
	   $( ".panelInterne"+zindex ).css('width',recupWimg);
	   $( ".panelInterne"+zindex ).css('height',recupHimg);
	   //INIT - l'image prends 100% en hauteur et largeur et c'est la div aprent qu'on va manipuler pour que ça amrche sur wordpress
	   $( ".panelInterne"+zindex+" img" ).css('width','100%');
	   $( ".panelInterne"+zindex+" img" ).css('height','100%');
		
		//On ajoute le contenu texte
		 $( "body" ).append("<div class='text-parallax"+zindex+"'></div>");
		$('.text-parallax'+zindex).css('position','absolute');
		$('.text-parallax'+zindex).css('z-index',zindex+10);
		$('.text-parallax'+zindex).css('top','50%');
		$('.text-parallax'+zindex).css('left','25px');
		$('.text-parallax'+zindex).css('width','40%');
		$('.text-parallax'+zindex).css('text-align','left');
		$('.text-parallax'+zindex).css('-webkit-transform','translateY(-50%)');
	    $('.text-parallax'+zindex).css('-ms-transform','translateY(-50%)');
	    $('.text-parallax'+zindex).css('transform','translateY(-50%)');
		$('.text-parallax'+zindex).append("<div class='titre-parallax'>"+tabletitres[i]+"<span class='couleur-point'>.</div>");
		$('.text-parallax'+zindex).append("<div class='chapeau-parallax'>"+tablechapeaux[i]+"</div>");
		$('.text-parallax'+zindex).append("<a href='#' class='bouton-parallax'>Discover</a>");
		
		 
	   
	   //INIT - On gère la taille d'image
	    miseEnPlace();
      	$( window ).resize(function() {
            miseEnPlace();
         });
		
			//On met une valeur "zoomée" à notre image
          //on applique ce pourcentage a la hauteur de la div
		  $( ".panelInterne"+zindex  ).css('height',((pourcentageDiv+10)/100)*recupHimg);
		  //on l'applique à la largeur
		  $( ".panelInterne"+zindex  ).css('width',((pourcentageDiv+10)/100)*recupWimg); 
		if(sensSlide==1){
			
			//on fait disparaitre le slide actuel, une fois celui-ci disparu, on le supprime
			$( '.slide'+(zindex+1) ).animate({
				   width: 0
				}, "slow", function() {
				   $( '.slide'+(zindex+1) ).remove();   
			 });
			$('.text-parallax'+(zindex+1)).animate({
				   marginLeft: '-50%',
				opacity:0
				}, "slow", function() {
				   	$('.text-parallax'+(zindex+1)).remove();   
			 });

			if(varInit==0){
				 $('.panelInterne'+zindex).css('margin-left','0'); 	
			 }else{
				//un animation de droite a cauche qui suit la disparition du slider de premier plan
				  $('.panelInterne'+zindex).css('margin-left',$(window).width());
					$('.panelInterne'+zindex).animate({
					   marginLeft: 0
					},"400", function() {
				 });

				$('.panelInterne'+zindex).animate({
					   height: ((pourcentageDiv)/100)*recupHimg,
					   width:((pourcentageDiv)/100)*recupWimg
					},400,"swing", function() {

				 });
				$('.text-parallax'+(zindex)).css('margin-left','50%');
				 $('.text-parallax'+(zindex)).css('opacity','0');
				$('.text-parallax'+(zindex)).animate({
				   marginLeft: '25px',
					opacity:1
				}, "slow", function() {
				   	$('.text-parallax'+(zindex+1)).remove();   
			 });
			 }
			
		}else if(sensSlide==0){
			//on fait disparaitre le slide actuel, une fois celui-ci disparu, on le supprime
			$( '.slide'+(zindex+1) ).animate({
				   marginLeft: $(window).width()
				}, "slow", function() {
				   $( '.slide'+(zindex+1) ).remove();   
			 });
			$('.text-parallax'+(zindex+1)).animate({
				   marginLeft: '50%',
				opacity:0
				}, "slow", function() {
				   	$('.text-parallax'+(zindex+1)).remove();   
			 });
			if(varInit==0){
				 $('.panelInterne'+zindex).css('margin-left','0'); 	
			 }else{
				//un animation de droite a cauche qui suit la disparition du slider de premier plan
				  $('.panelInterne'+zindex).css('margin-left',-$(window).width());
					$('.panelInterne'+zindex).animate({
					   marginLeft: 0
					},"400", function() {
				 });

				$('.panelInterne'+zindex).animate({
					   height: ((pourcentageDiv)/100)*recupHimg,
					   width:((pourcentageDiv)/100)*recupWimg
					},400,"swing", function() {

				 });
				 $('.text-parallax'+(zindex)).css('margin-left','-50%');
				 $('.text-parallax'+(zindex)).css('opacity','0');
				$('.text-parallax'+(zindex)).animate({
				   marginLeft: '25px',
					opacity:1
				}, "slow", function() {
				   	$('.text-parallax'+(zindex+1)).remove();   
			 });
			 }

		}
		
		
    
   }
		function miseEnPlace(){
		//Si la fenêtre est plus large que haute
      	if($(window).width()>$(window).height()){
		  //on recupère la taille en pourcent de la tailel de la fenètre par rapport à la taille de la div
		  window.pourcentageDiv=($(window).width()*100)/recupWimg;  
		  //on applique ce pourcentage a la hauteur de la div
		  $( ".panelInterne"+zindex  ).css('height',(pourcentageDiv/100)*recupHimg);
		  //on l'applique à la largeur
		  $( ".panelInterne"+zindex  ).css('width',(pourcentageDiv/100)*recupWimg);
      	}
		//Si la fenêtre est plus haute que large
		if($(window).height()>$(window).width()){
			//on recupère la taille en pourcent de la tailte de la fenètre par rapport à la taille de la div
			window.pourcentageDiv=($(window).height()*100)/recupHimg;
			  //on applique ce pourcentage a la hauteur de la div
			  $( ".panelInterne"+zindex  ).css('height',(pourcentageDiv/100)*recupHimg);
			  //on l'applique à la largeur
			  $( ".panelInterne"+zindex  ).css('width',(pourcentageDiv/100)*recupWimg);
		  }

		//on applique le style à la div pour qu'elle soit centrée
			$( ".panelInterne"+zindex ).css('position','absolute');
			$( ".panelInterne"+zindex ).css('z-index',zindex);	
			$( ".panelInterne"+zindex ).css('top','50%');
			$( ".panelInterne"+zindex ).css('left','50%');
			$( ".panelInterne"+zindex ).css({" -ms-transform":"translate(-50%,-50%)"});
			$( ".panelInterne"+zindex ).css({"-webkit-transform":"translate(-50%,-50%)"});
			$( ".panelInterne"+zindex ).css({"transform":"translate(-50%,-50%)"});

	   }
		
		
	////////////////////////////////////////
	//            PRELOAD IMAGES          //
	////////////////////////////////////////
   //preload d'images
   var preloadPictures = function(pictureUrls, callback) {
    var i,
        j,
        loaded = 0;

    for (i = 0, j = pictureUrls.length; i < j; i++) {
        (function (img, src) {
            img.onload = function () {                               
                if (++loaded == pictureUrls.length && callback) {
                    callback();
                }
            };

            // Use the following callback methods to debug
            // in case of an unexpected behavior.
            img.onerror = function () {};
            img.onabort = function () {};

            img.src = src;
        } (new Image(), pictureUrls[i]));
    }
	   
};

</script>




<?php get_footer(); ?>

