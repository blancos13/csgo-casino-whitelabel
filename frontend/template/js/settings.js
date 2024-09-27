function setCookie(key, value){
	var exp = new Date();
	
	exp.setTime(exp.getTime() + 365 * 24 * 60 * 60 * 1000);
	document.cookie = key + '=' + value + '; expires=' + exp.toUTCString() + '; path=' + ROOT;
}

function getCookie(key){
	var patt = new RegExp(key + '=([^;]*)');
	
	var matches = patt.exec(document.cookie);
	
	if(matches) return matches[1];
	
	return null;
}

$(document).ready(function() {
	$('[data-copy="text"]').on('click', function(){
		var text = $(this).data('text').trim();

		console.log(text);
		
		if(text.length <= 0) return;
		
		var $temp = $('<input>');
		$('body').append($temp);
		
		$temp.val(text).select();
		
		try {  
			var successful = document.execCommand('copy');
			
			notify('success', 'Successfully copied to clipboard!');
		} catch(err) {  
			notify('error', 'Unsuccessfully copied to clipboard!');
		}
		
		$temp.remove();
	});
	
	$('[data-copy="input"]').on('click', function(){
		var input = $("#"+$(this).data('input'));

		console.log(input.val(),this.id);
	
		input.focus();
		input.select();
		
		try {  
			var successful = document.execCommand('copy');

			console.log(successful);
			
			notify('success', 'Successfully copied to clipboard!');
		} catch(err) {  
			notify('error', 'Unsuccessfully copied to clipboard!');
		}
		
		window.getSelection().removeAllRanges();
	});
});

document.addEventListener('DOMContentLoaded', function(){
	$('#first_wellcome').fadeOut(500);
});

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-14623-1', 'auto');
ga('send', 'pageview');

console.log('%cWARNING!', 'font-size: 26px; color: red;');
console.log('%cAdmin/Mods/Staff will NEVER ask you to paste text/code in this console.\n\nDo NOT paste anything in this console or use ANY third party extensions/applications, it WILL steal your DLS or / & hack your account!', 'font-size: 20px;');

jQuery.fn.extend({
	countToFloat: function(x) {
		var $this = $(this);
		
		var start = parseFloat($this.text());
		start = parseInt(start * 100);

		var delta = parseInt(x * 100 - start);
		
		var dur = Math.min(400, Math.round(Math.abs(delta) / 500 * 400));
		
		$({
			count: start
		}).animate({
			count: parseInt(x * 100)
		}, {
			duration: dur,
			step: function(val) {
				var vts = parseInt(val);
				
				$this.text(getFormatAmountString(vts / 100));
			}
		});
	},
	
	countTo: function(x) {
		var $this = $(this);
		
		var start = parseInt($this.text());
		var delta = x - start;
		
		var durd = delta;
		var dur = Math.min(400, Math.round(Math.abs(durd) / 500 * 400));
		
		$({
			count: start
		}).animate({
			count: x
		}, {
			duration: dur,
			step: function(val) {
				var vts = parseInt(val);
				
				$this.text(vts);
			}
		});
	}
});

$(document).ready(function() {
	toastr.options = {
		"closeButton": true,
		"debug": false,
		"newestOnTop": false,
		"progressBar": true,
		"positionClass": "toast-top-right",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "500",
		"hideDuration": "500",
		"timeOut": "10000",
		"extendedTimeOut": "2000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "slideUp"
	}
});

function notify(type, notify){
	toastr[type](notify);
}

/* SWIPE */

var touch_settings = {
	x: null,                                                        
	y: null
};

function getTouches(e) {
	return e.touches || e.originalEvent.touches;
}  

document.addEventListener('touchstart', function(e){
	var first_touch = getTouches(e)[0];  
	
    touch_settings.x = first_touch.clientX;                                      
    touch_settings.y = first_touch.clientY;  
}, false);   
     
document.addEventListener('touchmove', function(e){
	if(!touch_settings.x || !touch_settings.y ) return;
	
    var x = touch_settings.x - e.touches[0].clientX;
    var y = touch_settings.y - e.touches[0].clientY;
	
    if(Math.abs(x) > Math.abs(y)) {
        if(x > 0) swipe_eventLeft();
		else swipe_eventRight();                      
    } else {
        if(y > 0) swipe_eventDown();
		else swipe_eventUp();                                                               
    }
	
    touch_settings.x = null;
    touch_settings.y = null; 
}, false);

function swipe_eventUp(){}
function swipe_eventDown(){}

function swipe_eventRight(){
	if($(window).width() > 768) return;
	
	var hide_menu = $('.pullout[data-pullout="menu"]').hasClass('active');
	
	if(!hide_menu) resize_pullout('menu', false);
	
	
}

function swipe_eventLeft(){
	if($(window).width() > 768) return;
	
	var hide_menu = $('.pullout[data-pullout="menu"]').hasClass('active');
	var hide_chat = $('.pullout[data-pullout="chat"]').hasClass('active');
	
	if(hide_menu) resize_pullout('menu', true);
	else if(hide_chat) profile_settingsChange('chat', '1');
}

/* END SWIPE */

/* CAROUSEL */

var carousel_timeout = null;

$(document).ready(function() {
	$('.carousel .carousel-button').on('click', function() {
		var type = $(this).data('type');
		var $carousel = $(this).parent().parent();
		
		changeCarousel($carousel, type);
	});
	
	setInterval(function(){
		$('.carousel').each(function(i, e) {
			changeCarousel($(this), 'right');
		});
	}, 10000);
});

function changeCarousel($carousel, type){
	var index = parseInt($carousel.find('.carousel-page.active').data('index')) || 0;
	var indexes = $carousel.find('.carousel-page').length;
	
	if(indexes <= 1) return;
	
	var width = $carousel.width();
	
	var next = index;
	if(type == 'right') if(++next >= indexes) next = 0;
	if(type == 'left') if(--next < 0) next = indexes - 1;
	
	var pos = 0;
	if(type == 'right') pos = -width;
	if(type == 'left') pos = width;
	
	if(carousel_timeout) clearTimeout(carousel_timeout);
	
	$carousel.find('.carousel-page[data-index="' + next + '"]').addClass('active').css('left', -pos + 'px');
	
	$carousel.find('.carousel-page[data-index="' + next + '"]').addClass('transition-5');
	$carousel.find('.carousel-page[data-index="' + index + '"]').addClass('transition-5');
	
	setTimeout(function(){
		$carousel.find('.carousel-page[data-index="' + next + '"]').css('left', '0px');
		$carousel.find('.carousel-page[data-index="' + index + '"]').css('left', pos + 'px');
		
		carousel_timeout = setTimeout(function(){
			$carousel.find('.carousel-page[data-index="' + next + '"]').removeClass('transition-5');
			$carousel.find('.carousel-page[data-index="' + index + '"]').removeClass('transition-5').removeClass('active');
		}, 500);
	}, 1);
}

/* END CAROUSEL */

/* INPUT FIELD */

$(document).ready(function() {
	initializeInputFields();
});

function initializeInputFields(){
	$('.input_field').each(function(i, e) {
		changeInputFieldLabel($(this));
	});
	
	$('.input_field .field_element_input').on('focusout', function() {
		var text = $(this).val().trim();
		var $field = $(this).parent().parent().parent();
		
		if(text.length > 0) $field.find('.field_label').addClass('active');
		else $field.find('.field_label').removeClass('active');
		
		//$field.css('border', '2px solid var(--site-color-bg-dark)');
		
		changeInputFieldLabel($field);
	});
	
	$('.input_field .field_element_input').on('focus', function() {
		var $field = $(this).parent().parent().parent();
		
		$field.find('.field_label').addClass('active');
		
		verifyErrorInputField($field);
	});
	
	$('.input_field .field_element_input').on('input', function() {
		var text = $(this).val().trim();
		var $field = $(this).parent().parent().parent();
		
		verifyErrorInputField($field);
	});
}

function changeInputFieldLabel($field){
	var text = $field.find('.field_element_input').val().trim();
	
	if(text.length > 0) $field.find('.field_label').addClass('active');
	else $field.find('.field_label').removeClass('active');
	
	verifyErrorInputField($field);
}

function verifyErrorInputField($field){
	var text = $field.find('.field_element_input').val().trim();
	
	var border = $field.data('border');
	
	var have_error = false;
	var required_error = false;
	var default_error = false;
	
	$field.find('.field_bottom .field_error').removeClass('active');
	
	$field.find('.field_bottom .field_error').each(function(i, e) {
		var error_code = $(this).data('error');
		var error_local = false;
		
		if(error_code == 'required') required_error = true;
		if(error_code == 'default') default_error = true;
		
		if(text.length > 0){
			switch(error_code){
				case 'number':
					if(isNaN(Number(text))){
						have_error = true;
						error_local = true;
					}
					break;
					
				case 'positive_integer':
					if(!isNaN(Number(text))){
						if(parseInt(Number(text)) != Number(text) || parseInt(Number(text)) <= 0){
							have_error = true;
							error_local = true;
						}
					}
					break;
				
				case 'greater':
					if(!isNaN(Number(text))){
						if(Number(text) < 0.02){
							have_error = true;
							error_local = true;
						}
					}
					break;
				
				case 'lesser_coinflip':
					if(!isNaN(Number(text))){
						if(Number(text) > 10000.00){
							have_error = true;
							error_local = true;
						}
					}
					break;
				
				case 'lesser_crash':
					if(!isNaN(Number(text))){
						if(Number(text) > 300.00){
							have_error = true;
							error_local = true;
						}
					}
					break;
				
				case 'lesser_jackpot':
					if(!isNaN(Number(text))){
						if(Number(text) > 10000.00){
							have_error = true;
							error_local = true;
						}
					}
					break;
				
				case 'lesser_roulette':
					if(!isNaN(Number(text))){
						if(Number(text) > 1000.00){
							have_error = true;
							error_local = true;
						}
					}
					break;
				
				case 'lesser_tower':
					if(!isNaN(Number(text))){
						if(Number(text) > 500.00){
							have_error = true;
							error_local = true;
						}
					}
					break;
					
				case 'username_email':
					if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*\.\w+$/.exec(text) && !/^[a-z0-9_]{6,}$/.exec(text)){
						have_error = true;
						error_local = true;
					}
					break;
					
				case 'email':
					if(!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*\.\w+$/.exec(text)){
						have_error = true;
						error_local = true;
					}
					break;
					
				case 'username':
					if(!/^[a-z0-9_]{6,}$/.exec(text)){
						have_error = true;
						error_local = true;
					}
					break;
					
				case 'password':
					if(!/^((?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,})$/.exec(text)){
						have_error = true;
						error_local = true;
					}
					break;
					
				case 'steam_trade_link':
					if(!/^(http|https):\/\/steamcommunity.com\/tradeoffer\/new\/\?partner=(\d+)&token=([a-zA-Z0-9_-]+)$/.exec(text)){
						have_error = true;
						error_local = true;
					}
					break;
				
				case 'steam_api_key':
					if(!/^(([a-f\d]{2}){16})$/i.exec(text)){
						have_error = true;
						error_local = true;
					}
					break;
					
				case 'minimum_6_characters':
					if(text.length < 6){
						have_error = true;
						error_local = true;
					}
					break;
				
				case 'minimum_10_characters':
					if(text.length < 10){
						have_error = true;
						error_local = true;
					}
					break;			
					
				case 'only_letters_numbers':
					if(!(/(^[a-zA-Z0-9]*$)/.exec(text))){
						have_error = true;
						error_local = true;
					}
					break;
			}
		}
		
		if(error_local) $(this).addClass('active');
	});
	
	if(!have_error){
		if(required_error && text.length == 0) {
			$field.find('.field_bottom .field_error[data-error="required"]').addClass('active');
			have_error = true;
		} else if(default_error) $field.find('.field_bottom .field_error[data-error="default"]').addClass('active');
	}
	
	if(border.toString().trim().length > 0){
		//#484856
		if(have_error) {
			$field.css('border', '2px solid ' + border);
			$field.css('color', border);
		} else {
			if($field.find('.field_element_input').is(':focus') && text.length > 0) $field.css('border', '2px solid #0484fc');
			else $field.css('border', '2px solid var(--site-color-bg-dark)');
			
			$field.css('color', 'unset');
		}
	}
}

/* END INPUT FIELD */

/* DROPDOWN FIELD */

$(document).ready(function() {
	initializeDropdownFields();
});

function initializeDropdownFields(){
	$('.dropdown_field').each(function(i, e) {
		changeDropdownFieldElement($(this));
	});
	
	$(document).on('click', function() {
		setTimeout(function(){
			$('.dropdown_field .field_element_dropdowns.active').removeClass('active');
		}, 50);
	});
	
	$('.dropdown_field').on('click', function() {
		var $field = $(this);
		
		if($field.find('.field_element_dropdowns.active').length == 0){
			setTimeout(function(){
				var count = $field.find('.field_element_dropdowns .field_element_dropdown').length;
				var height = $field.find('.field_element_dropdowns').height();
				
				tinysort($field.find('.field_element_dropdowns .field_element_dropdown'), {
					data: 'index',
					order: 'asc'
				});
				
				//$field.find('.field_element_dropdowns').css('top', -(height / count * parseInt($field.attr('data-dropdown'))));
				$field.find('.field_element_dropdowns .field_element_dropdown[value="' + $field.find('.field_element_input').val() + '"]').prependTo($field.find('.field_element_dropdowns'));
				$field.find('.field_element_dropdowns').addClass('active');
				
				$field.find('.field_element_dropdowns .field_element_dropdown').removeClass('active');
				$field.find('.field_element_dropdowns .field_element_dropdown[value="' + $field.find('.field_element_input').val() + '"]').addClass('active');
			}, 100);
		}
	});
	
	$('.field_element_dropdown').on('click', function() {
		var value = $(this).attr('value');
		
		var $field = $(this).parent().parent().parent().parent();
		
		$field.find('.field_element_input').val(value).change();
	});
	
	$('.field_element_input').on('change', function() {
		var $field = $(this).parent().parent().parent();
		
		changeDropdownFieldElement($field);
	});
}

function changeDropdownFieldElement($field){
	var value = $field.find('.field_element_input').val();
	var index = $field.find('.field_element_dropdowns .field_element_dropdown[value="' + value + '"]').index();
	var text = $field.find('.field_element_dropdowns .field_element_dropdown[value="' + value + '"]').text();
	
	$field.find('.field_dropdown').text(text);
}

/* END DROPDOWN FIELD */

/* SWITCH FIELD */

$(document).ready(function() {
	initializeSwitchFields();
});

function initializeSwitchFields(){
	$('.switch_field .field_switch').on('click', function() {
		var $field = $(this).parent().parent().parent();
		var $switch = $field.find('.field_element_input');
		
		$switch.attr('checked', !$switch.is(':checked'));
		$switch.trigger('change');
	});
}

/* SWITCH FIELD */

/* SLIDER FIELD */

$(document).ready(function() {
	initializeSliderFields();
});

function initializeSliderFields(){
	$('.slider_field').each(function(i, e) {
		var $slider = $(this).find('.field_element_input');
		
		changeSliderField($slider);
	});
	
	$('.slider_field .field_element_input').on('input', function () {
		changeSliderField($(this));
	});
	
	$('.slider_field .field_element_input').on('change', function () {
		changeSliderField($(this));
	});
}

function changeSliderField($slider){
	var min = parseInt($slider.prop('min') || 0);
	var max = parseInt($slider.prop('max') || 0);
	
	var percentage = ($slider.val() - min) / (max - min) * 100;
	
	$slider.css('backgroundSize', percentage + '% 100%');
	
	$cursor = $slider.parent().find('.field_cursor');
	
	if($cursor) $cursor.css('left', percentage + '%').find('.field_cursor_text').text($slider.val());
}

/* END SLIDER FIELD */

/* MODAL */

$(document).ready(function() {
	$('[data-modal="hide"]').on('click', function(){
		var $modal = $(this);
		
		var error = 0;
		while(!$modal.hasClass('modal') && error < 100) {
			$modal = $modal.parent();
			
			error++;
		}
		
		$modal.modal('hide');
	});
	
	$('[data-modal="show"]').on('click', function(){
		$($(this).data('id')).modal('show');
	});
	
	$('.modal .modal-dialog').on('click', function(e){
		if(e.target !== e.currentTarget) return;
		
		$(this).parent().modal('hide');;
	});
});

jQuery.fn.extend({
	modal: function(type) {
		var $modal = $(this);
		
		if($modal.hasClass('modal')){
			if(type == 'show'){
				modalShow($modal);
			} else if(type == 'hide'){
				modalHide($modal)
			}
		}
	}
});

function modalShow($modal){
	if(!$modal.hasClass('active')){
		$modal.css('opacity', 0);
		
		$modal.addClass('active');
		
		setTimeout(function(){
			$modal.css('opacity', 1);
		}, 50);
		
		$modal.trigger('show');
	}
}

function modalHide($modal){
	if($modal.hasClass('active')){
		$modal.css('opacity', 0);
			
		setTimeout(function(){
			$modal.removeClass('active');
		}, 200);
		
		$modal.trigger('hide');
	}
}

/* END MODAL */