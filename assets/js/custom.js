(function ($) {
	
	"use strict";

	// Window Resize Mobile Menu Fix
	mobileNav();


	// Scroll animation init
	window.sr = new scrollReveal();
	

	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	// Menu elevator animation
	$('a[href*=\\#]:not([href=\\#])').on('click', function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				var width = $(window).width();
				if(width < 991) {
					$('.menu-trigger').removeClass('active');
					$('.header-area .nav').slideUp(200);	
				}				
				$('html,body').animate({
					scrollTop: (target.offset().top) - 130
				}, 700);
				return false;
			}
		}
	});

	$(document).ready(function () {
	    $(document).on("scroll", onScroll);
	    
	    //smoothscroll
	    $('a[href^="#"]').on('click', function (e) {
	        e.preventDefault();
	        $(document).off("scroll");
	        
	        $('a').each(function () {
	            $(this).removeClass('active');
	        })
	        $(this).addClass('active');
	      
	        var target = this.hash,
	        menu = target;
	       	var target = $(this.hash);
	        $('html, body').stop().animate({
	            scrollTop: (target.offset().top) - 130
	        }, 500, 'swing', function () {
	            window.location.hash = target;
	            $(document).on("scroll", onScroll);
	        });
	    });
	});

	function onScroll(event){
	    var scrollPos = $(document).scrollTop();
	    $('.nav a').each(function () {
	        var currLink = $(this);
	        var refElement = $(currLink.attr("href"));
	        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
	            $('.nav ul li a').removeClass("active");
	            currLink.addClass("active");
	        }
	        else{
	            currLink.removeClass("active");
	        }
	    });
	}


	// Home seperator
	if($('.home-seperator').length) {
		$('.home-seperator .left-item, .home-seperator .right-item').imgfix();
	}


	// Home number counterup
	if($('.count-item').length){
		$('.count-item strong').counterUp({
			delay: 10,
			time: 1000
		});
	}


	// Page loading animation
	$(window).on('load', function() {
		if($('.cover').length){
			$('.cover').parallax({
				imageSrc: $('.cover').data('image'),
				zIndex: '1'
			});
		}

		$("#preloader").animate({
			'opacity': '0'
		}, 600, function(){
			setTimeout(function(){
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});


	// Window Resize Mobile Menu Fix
	$(window).on('resize', function() {
		mobileNav();
	});


	// Window Resize Mobile Menu Fix
	function mobileNav() {
		var width = $(window).width();
		$('.submenu').on('click', function() {
			if(width < 992) {
				$('.submenu ul').removeClass('active');
				$(this).find('ul').toggleClass('active');
			}
		});
	}

	/* form */
	$(document).ready(function(){

	
		$('#name')[0].addEventListener('invalid', function(e) {
			e.preventDefault();
			let label = document.createElement("label");
			label.className = "label_error";
			label.innerHTML = "Por favor, ingrese su nombre";
			label.style.position = "relative";
			label.style.left = "25px";
			label.style.color = "red";
			label.style.fontSize = "12px";
			this.parentNode.insertBefore(label, this.nextSibling);
		});
		$('#email')[0].addEventListener('invalid', function(e) {
			e.preventDefault();
			let label = document.createElement("label");
			label.className = "label_error";
			label.innerHTML = "Por favor, ingrese un correo electrónico válido";
			label.style.position = "relative";
			label.style.left = "25px";
			label.style.color = "red";
			label.style.fontSize = "12px";
			this.parentNode.insertBefore(label, this.nextSibling);
		});
		$('#university')[0].addEventListener('invalid', function(e) {
			e.preventDefault();
			let label = document.createElement("label");
			label.className = "label_error";
			label.innerHTML = "Por favor, ingrese un nombre";
			label.style.position = "relative";
			label.style.left = "25px";
			label.style.color = "red";
			label.style.fontSize = "12px";
			this.parentNode.insertBefore(label, this.nextSibling);
		});
		$('#cargo')[0].addEventListener('invalid', function(e) {
			e.preventDefault();
			let label = document.createElement("label");
			label.className = "label_error";
			label.innerHTML = "Por favor, ingrese un cargo";
			label.style.position = "relative";
			label.style.left = "25px";
			label.style.color = "red";
			label.style.fontSize = "12px";
			this.parentNode.insertBefore(label, this.nextSibling);
		});
	

		$("#phone").on("keypress", function (e) {
			var key = e.which;
			if (key != 43 && key != 8 && key != 0 && (key < 48 || key > 57)) {
				return false;
			}
		});

		grecaptcha.ready(function() {
          grecaptcha.execute('6LeQYjcrAAAAAB6wrRx7n4OBaoNv11Jd_PiDOjtq', {action: 'submit'}).then(function(token) {
			$('#contactForm').on('submit', function(e){
			e.preventDefault();
			var form = $(this);
			var url = form.attr('action');
			var method = form.attr('method');
			var data = form.serialize();

			$.ajax({
				type: method,
				url: url,
				data: data,
				beforeSend: function() {
					form.find('button[type="submit"]').prop('disabled', true).text('Enviando...');
				},
				success: function(response){
					$('.form-message').css('display', 'block');
					$('.form-message').html(response);
					form[0].reset();
					var labels = document.querySelectorAll('.label_error');
					labels.forEach(function(label) {
						label.remove();
					});
					
				},
				error: function(){
					$('.form-message').html('<div class="alert alert-danger">There was an error processing your request. Please try again.</div>');
				},
				complete: function() {
					form.find('button[type="submit"]').prop('disabled', false).text('Quiero Asistir');
				}
			});
		});
          });
        });
		
	});


})(window.jQuery);