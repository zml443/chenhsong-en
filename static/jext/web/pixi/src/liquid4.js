

$.eval('TweenMax pixi', function () {
$.task.push(function () {
	_('[liquid=4]').each(function () {
		$.__canvas_liquid_4({
			obj: $(this),
			displacementImage: $.path+'web/pixi/img/ripple.jpg',
			autoPlay: true,
			autoPlaySpeed: [0.1, 0.1],
			centerSprites: false
		});
	});
});
});

$.__canvas_liquid_4 = function( options ) {
	

	//	SCOPE
	/// ---------------------------			
	var that	=	 this;



	//	OPTIONS
	/// ---------------------------			
	options						= options || {};
	options.stageWidth			= options.hasOwnProperty('stageWidth') ? options.stageWidth : 1920;
	options.stageHeight			= options.hasOwnProperty('stageHeight') ? options.stageHeight : 1080;
	options.texts				= options.hasOwnProperty('texts') ? options.texts : [];
	options.autoPlay			= options.hasOwnProperty('autoPlay') ? options.autoPlay : true;
	options.autoPlaySpeed		= options.hasOwnProperty('autoPlaySpeed') ? options.autoPlaySpeed : [10, 3];
	options.fullScreen			= options.hasOwnProperty('fullScreen') ? options.fullScreen : true;
	options.displaceScale		= options.hasOwnProperty('displaceScale') ? options.displaceScale : [200, 70];
	options.displacementImage	= options.hasOwnProperty('displacementImage') ? options.displacementImage : '';
	options.displaceAutoFit		= options.hasOwnProperty('displaceAutoFit')	?	options.displaceAutoFit : false; 
	options.wacky				= options.hasOwnProperty('wacky') ? options.wacky : false;
	options.interactive			= options.hasOwnProperty('interactive') ? options.interactive : false;
	options.interactionEvent	= options.hasOwnProperty('interactionEvent') ? options.interactionEvent : '';
	options.displaceScaleTo		= ( options.autoPlay === false ) ? [ 0, 0 ] : [ 20, 20 ];
	options.textColor			= options.hasOwnProperty('textColor') ? options.textColor : '#fff';
	options.displacementCenter	= options.hasOwnProperty('displacementCenter') ? options.displacementCenter : false;
	options.dispatchPointerOver = options.hasOwnProperty('dispatchPointerOver') ? options.dispatchPointerOver : false;
	options.sprites				= [];
	options.length				= options.obj.find('img').size();
	options.obj.find('img').each(function () {
		options.sprites.push($(this).attr('src'));
	});
	options.obj.append('<div class="scenenav cw absolute"><div class="pointer fl prev"><svg class="svg rotate-180" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="30"><path d="M412.367 6.389l-63.88 62.071 460.007 446.973-460.007 446.975 63.88 62.071 523.885-509.044z"></path></svg></div><div class="fr pointer next"><svg class="svg" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" width="30"><path d="M412.367 6.389l-63.88 62.071 460.007 446.973-460.007 446.975 63.88 62.071 523.885-509.044z"></path></svg></div></div>');
			


	//	PIXI VARIABLES
	/// ---------------------------		
	var renderer						= new PIXI.autoDetectRenderer(options.stageWidth, options.stageHeight, { transparent: true });
	var stage							 = new PIXI.Container();
	var slidesContainer		 = new PIXI.Container();
	var displacementSprite	= new PIXI.Sprite.fromImage( options.displacementImage );
	var displacementFilter	= new PIXI.filters.DisplacementFilter( displacementSprite );

	// Add canvas to the HTML
	options.obj.append(renderer.view);
	renderer.view.style.backgroundColor	= '#222';


	//	TEXTS
	/// ---------------------------		
	var style = new PIXI.TextStyle({
		fill: options.textColor,
		wordWrap: true,
		wordWrapWidth: 400,
		letterSpacing: 20,
		fontSize: 14
	});

	

	//	SLIDES ARRAY INDEX
	/// ---------------------------		
	this.currentIndex = 0;



	/// ---------------------------
	//	INITIALISE PIXI
	/// ---------------------------			
	this.initPixi = function() {

		// Add canvas to the HTML
		// document.body.appendChild( renderer.view );


		// Add child container to the main container 
		stage.addChild( slidesContainer );


		// Enable Interactions
		stage.interactive = true;
		

		// Fit renderer to the screen
		/*if ( options.fullScreen === true ) {
			renderer.view.style.objectFit = 'cover';
			renderer.view.style.width		 = '100%';
			renderer.view.style.height		= '100%';
			renderer.view.style.top			 = '50%';
			renderer.view.style.left			= '50%';
			renderer.view.style.webkitTransform = 'translate( -50%, -50% ) scale(1.2)';
			renderer.view.style.transform = 'translate( -50%, -50% ) scale(1.2)';			
		} else {
			renderer.view.style.maxWidth	= '100%';
			renderer.view.style.top			 = '50%';
			renderer.view.style.left			= '50%';
			renderer.view.style.webkitTransform = 'translate( -50%, -50% )';
			renderer.view.style.transform = 'translate( -50%, -50% )';					
		}*/
		

		displacementSprite.texture.baseTexture.wrapMode = PIXI.WRAP_MODES.REPEAT;


		// Set the filter to stage and set some default values for the animation
		stage.filters = [displacementFilter];				

		if ( options.autoPlay === false ) {
			displacementFilter.scale.x = 0;
			displacementFilter.scale.y = 0;
		}

		if ( options.wacky === true ) {

			displacementSprite.anchor.set(0.5);
			displacementSprite.x = renderer.width / 2;
			displacementSprite.y = renderer.height / 2; 
		}

		displacementSprite.scale.x = 2;
		displacementSprite.scale.y = 2;

		// PIXI tries to fit the filter bounding box to the renderer so we optionally bypass
		displacementFilter.autoFit = options.displaceAutoFit;
		
		stage.addChild( displacementSprite );

	};



	/// ---------------------------
	//	LOAD SLIDES TO CANVAS
	/// ---------------------------					
	this.loadPixiSprites = function( sprites ) {
		

		var rSprites = options.sprites;
		var rTexts	 = options.texts;

		for ( var i = 0; i < rSprites.length; i++ ) {
			
			var texture	 = new PIXI.Texture.fromImage( sprites[i] );
			var image		 = new PIXI.Sprite( texture );

			if ( rTexts ) {
				var richText = new PIXI.Text( rTexts[i], style);
				image.addChild(richText);

				richText.anchor.set(0.5);
				richText.x = image.width / 2;
				richText.y = image.height / 2;										 
			}
			

			if ( options.centerSprites === true ) {
				image.anchor.set(0.5);
				image.x = renderer.width / 2;
				image.y = renderer.height / 2;						
			}
			//image.transform.scale.x = 1.3;
			//image.transform.scale.y = 1.3;

			
			if ( i !== 0	) {
				TweenMax.set( image, { alpha: 0 } );
			}

			slidesContainer.addChild( image );

		} 
		
	};
	


	/// ---------------------------
	//	DEFAULT RENDER/ANIMATION
	/// ---------------------------				
	if ( options.autoPlay === true ) {

		var ticker = new PIXI.ticker.Ticker();

		ticker.autoStart = options.autoPlay;

		ticker.add(function( delta ) {
			
			displacementSprite.x += options.autoPlaySpeed[0] * delta;
			displacementSprite.y += options.autoPlaySpeed[1];
			
			displacementSprite.x += 2.14 * delta;
			displacementSprite.y += 22.24 * delta;
			displacementSprite.rotation.x += 20.3;					
			
			renderer.render( stage );

		});

	}	else {

			var render = new PIXI.ticker.Ticker();

			render.autoStart = true;

			render.add(function( delta ) {
				renderer.render( stage );
			});				
		
	}		
	

	/// ---------------------------
	//	TRANSITION BETWEEN SLIDES
	/// ---------------------------		

	var transitionAnimation = new PIXI.ticker.Ticker();
	transitionAnimation.autoStart = false;

	transitionAnimation.add(function( delta ) {
		displacementSprite.x += 2.14 * delta;
		displacementSprite.y += 22.24 * delta;
		displacementSprite.rotation.x += 20.3;					
	});


	var isPlaying	 = false;	
	var slideImages = slidesContainer.children;		
	this.moveSlider = function( newIndex ) {

		isPlaying = true;
		transitionAnimation.start();

		var baseTimeline = new TimelineMax( { onComplete: function () {
			that.currentIndex = newIndex;
			isPlaying = false;
			transitionAnimation.stop();
			if ( options.wacky === true ) {
				displacementSprite.scale.set( 1 );
			}					
		 },onUpdate: function() {
			
				if ( options.wacky === true ) {
					displacementSprite.rotation += baseTimeline.progress() * 0.02;			
					displacementSprite.scale.set( baseTimeline.progress() * 3 );
				}
	
		} });
		
		baseTimeline.clear();
		
		if ( baseTimeline.isActive() ) {
			return;
		}				
		
		baseTimeline
			.to(displacementFilter.scale, 1, { y: "+="+1280+"", ease: Power3.easeOut })
			.to(slideImages[that.currentIndex], 0.5, { alpha: 0, ease: Power3.easeOut }, 0.4)
			.to(slideImages[newIndex], 0.5, { alpha: 1, ease: Power3.easeInOut }, 0.7)					
			.to(displacementFilter.scale, 1, { y: 20,	ease: Power3.easeOut }, 1 );					

	};



	/// ---------------------------
	//	CLICK HANDLERS
	/// ---------------------------				 
	// var nav = options.navElement;
	options.obj.find('.scenenav>*').click(function () {
		// Make sure the previous transition has ended
		if ( isPlaying ) {
			return false;
		}
		if ($(this).is('.next')) {
			if ( that.currentIndex >= 0 && that.currentIndex < slideImages.length - 1 ) {
				that.moveSlider( that.currentIndex + 1 );
			} else {
				that.moveSlider( 0 );
			}
		} else {

			if ( that.currentIndex > 0 && that.currentIndex < slideImages.length ) {
				that.moveSlider( that.currentIndex - 1 );
			} else {
				that.moveSlider( options.length - 1 );
			}
		}
		return false;
	});
	


	/// ---------------------------
	//	INIT FUNCTIONS
	/// ---------------------------		 
	this.init = function() {

		that.initPixi();
		that.loadPixiSprites( options.sprites );
		

	};

	
	/// ---------------------------
	//	INTERACTIONS
	/// ---------------------------
	function rotateSpite() {
		displacementSprite.rotation += 0.001;
		rafID = requestAnimationFrame( rotateSpite );
	}
				
	if ( options.interactive === true ) {
		
		var rafID, mouseX, mouseY;

		// Enable interactions on our slider
		slidesContainer.interactive = true;
		slidesContainer.buttonMode	= true;			 

		// HOVER
		if ( options.interactionEvent === 'hover' || options.interactionEvent === 'both'	)	{
				
			slidesContainer.pointerover = function( mouseData ){
				mouseX = mouseData.data.global.x;
				mouseY = mouseData.data.global.y;	 
				TweenMax.to( displacementFilter.scale, 1, { x: "+=" + Math.sin( mouseX ) * 100 + "", y: "+=" + Math.cos( mouseY ) * 100 + ""	});	 
				rotateSpite();
			};			

			slidesContainer.pointerout = function( mouseData ){
				TweenMax.to( displacementFilter.scale, 1, { x: 0, y: 0 });
				cancelAnimationFrame( rafID );
			};		 
			
		}
	
		// CLICK
		if ( options.interactionEvent === 'click' || options.interactionEvent === 'both'	) {
				
			slidesContainer.pointerup = function( mouseData ){
				if ( options.dispatchPointerOver === true ) {
					TweenMax.to( displacementFilter.scale, 1, { x: 0, y: 0, onComplete: function() {
						TweenMax.to( displacementFilter.scale, 1, { x: 20, y: 20	});				
					} });						
				} else {
					TweenMax.to( displacementFilter.scale, 1, { x: 0, y: 0 });											
					cancelAnimationFrame( rafID );
				}

			};		 

			slidesContainer.pointerdown = function( mouseData ){
				mouseX = mouseData.data.global.x;
				mouseY = mouseData.data.global.y;				 
				TweenMax.to( displacementFilter.scale, 1, { x: "+=" + Math.sin( mouseX ) * 1200 + "", y: "+=" + Math.cos( mouseY ) * 200 + ""	});	 
			};		
			 
			slidesContainer.pointerout = function( mouseData ){
				if ( options.dispatchPointerOver === true ) {
					TweenMax.to( displacementFilter.scale, 1, { x: 0, y: 0, onComplete: function() {
						TweenMax.to( displacementFilter.scale, 1, { x: 20, y: 20	});				
					} });						
				} else {
					TweenMax.to( displacementFilter.scale, 1, { x: 0, y: 0 });											
					cancelAnimationFrame( rafID );
				}

			};							

		}
	
	}
	
	
	
	/// ---------------------------
	//	CENTER DISPLACEMENT
	/// ---------------------------
	if ( options.displacementCenter === true ) {
		displacementSprite.anchor.set(0.5);
		displacementSprite.x = renderer.view.width / 2;
		displacementSprite.y = renderer.view.height / 2;				
	}
	
	
	/// ---------------------------
	//	START 
	/// ---------------------------					 
	this.init();		

	
};