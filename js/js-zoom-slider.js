//LA MISE EN PLACE DE DIV DANS LE CONTENUR PANEL NE SERT QU'À SIMPLFIER
//LA MISE À JOUR PLUTOT QU'UTILISER UN TABLEAU
//ON VA DONC METTRE TOUT EL CONTENU DES DIV DANS UN TABLEAU PUIS SUPPRIMER CELLES-CI
//UNE FOIS TOUTES LES INFOS PRISES ET MISES DANS DES TABLEAUX, IL NE DOIT RESTER QUE LA DIV PANEL VIDE
      function zoomed_slider(){

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

        }
   

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