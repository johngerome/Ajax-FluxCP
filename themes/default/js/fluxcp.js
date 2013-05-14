	(function($) {
		// In: js/flux.datefields.js
		processDateFields();
				
		//Left Panel
		$('a#hide-login_box').click(function(){
			$('#login_box').slideUp('slow');
			$('#main_content-container').removeClass('large-8');
			$('#main_content-container').addClass('large-12');
			$('#show-login_box').show();
			
		});
		$('#show-login_box a').click(function(){
			$('#login_box').slideDown('slow');
			$('#main_content-container').removeClass('large-12');
			$('#main_content-container').addClass('large-8');
			$('#show-login_box').hide();
		});
		
		$('#backtotop i').click(function(){
			$('html, body').animate({ scrollTop: $('#fluxcp').offset().top }, 'slow');
		});
	}(jQuery));
	
	//-- fluxcp old
	function updatePreferredServer(sel){
			var preferred = sel.options[sel.selectedIndex].value;
			document.preferred_server_form.preferred_server.value = preferred;
			document.preferred_server_form.submit();
	};
		
	//Toggle Search Form
	function toggleSearchForm()
	{
		$('.search-form').slideToggle('fast');
	};
	//--/end fluxcp old
	
	function load_page(loadUrl){
		$.ajaxSetup ({
			cache: false  
		});
		loading = new ajaxLoader('#main_content');
		$('#ajax_loadPage').load(loadUrl, function() {
			loading.remove();
			$('html, body').animate({ scrollTop: $('#ajax_loadPage').offset().top }, 'slow');
		});
	};
	
	function ajaxLoader (el, options) {
		// Becomes this.options
		var defaults = {
			bgColor 		: '#fff',
			duration		: 800,
			opacity			: 0.9,
			classOveride 	: false
		}
		this.options 	= jQuery.extend(defaults, options);
		this.container 	= $(el);
		this.init = function() {
			var container = this.container;
			// Delete any other loaders
			this.remove();
			// Create the overlay
			var overlay = $('<div></div>').css({
					'background-color': this.options.bgColor,
					'opacity':this.options.opacity,
					'width':container.width(),
					'height':container.height(),
					'position':'absolute',
					'top':'0px',
					'left':'0px',
					'z-index':99999
			}).addClass('ajax_overlay');
			// add an overiding class name to set new loader style
			if (this.options.classOveride) {
				overlay.addClass(this.options.classOveride);
			}
			// insert overlay and loader into DOM
			container.append(
				overlay.append(
					$('<div></div>').addClass('ajax_loader')
				).fadeIn(this.options.duration)
			);
		};
		this.remove = function(){
			var overlay = this.container.children(".ajax_overlay");
			if (overlay.length) {
				overlay.fadeOut(this.options.classOveride, function() {
					overlay.remove();
				});
			}
		}
	this.init();
	};
	
	//Login
	function doLogin(BUTTON, URL, POSITION){
		$(BUTTON).addClass('disabled');
		$('#'+ POSITION +'_login_error').html(); //clear
		$.ajax({
			type : 'POST',
			url : URL,
			dataType: 'json',
			async : true,
			data : {
				server:		$('#server').val(),
				username:	$('#username').val(),
				password:	$('#password').val(),
			},
			success : function(response){
				success = response.success;
				var errors = response.errors;
				var returnUrl = response.returnUrl;
				
				 if(errors.length > 0 || success == false){
					$('#'+ POSITION +'_login_error').show();
					$('#'+ POSITION +'_login_error').html('<div data-alert class="alert-box alert">'+ errors +'<a href="#" class="close">&times;</a></div>');
					$(BUTTON).removeClass('disabled');
				}else{
					//Redirect..
					alert('x');
					reload();
				}
			}
		});
	};
	//Fluxcp Modal Box
	function showModal(HTML){
		$.ajaxSetup ({
			cache: false  
		});
		$('#fluxModal #modal-content').html(''); //clear
		loading = new ajaxLoader('#main_content');
		$('#fluxModal #modal-content').load(HTML, function() {
			loading.remove();
			$('#fluxModal').foundation('reveal', 'open');
		});
	};