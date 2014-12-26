$(document).on('ready', function(){
	
	$('input, textarea').placeholder();
	
	$('.despacho_top').on('click', function(e){
		e.preventDefault();
		$("html, body").animate({ scrollTop: $('#form').offset().top }, 1000);
	});
	
	$('#rut').Rut({
	  format_on: 'keyup'
	});
	
	$('#lugar').on('blur', function(){
		searchAddr();
	});
	
	$('#despacho').on('keyup','input[type=text]', function(){
		if ( $(this).hasClass('error') ) $(this).removeClass('error');
	});

	$('select#id_region').on('change', function(){
	
		if ( $(this).hasClass('error') ) $(this).removeClass('error');
	
		var id = $(this).val();
		
		$.ajax({
			method : 'POST',
			data : { idRegion : id },
			url  : 'php/select.comunas.php',
			success : function(options)
			{
				$('#id_comuna').html(options);
			}
		});
		
		searchAddr();
		
	});
	
	$('select#id_comuna').on('change', function(){
	
		if ( $(this).hasClass('error') ) $(this).removeClass('error');
	
		searchAddr();
	});
	
	// Validacion 
	$('#form').on('submit','#despacho', function(){
		var valido = true;
		var fields = $('input[type=text], select',this);
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;  
		
		$.each(fields, function(key,el){
			$el = $(el);
			if ( $.trim($el.val()) == '' )
			{
				$el.addClass('error');
				valido = false;
			} else {
				if ( $el.attr('id') == 'rut' )
				{
					if ( !$.Rut.validar($el.val()) )
					{
						$el.addClass('error');
						valido = false;
					}
				} else {
					if ( $el.attr('id') == 'email' )
					{
						if ( !emailReg.test($el.val()))
						{
							$el.addClass('error');
							valido = false;
						}
					} else {
						if ( $el.attr('id') == 'celular' )
						{
							if ( isNaN($el.val()) || $el.length > 7 )
							{
								$el.addClass('error');
								valido = false;
							}
						}
					}
				}
			}
		});
		
		$('.error').first().focus();
		
		if ( valido )
		{
			ga('send', 'event', 'KPI', 'Completo', 'clic', 1);
			$('div.errorinfo').hide();
			sendForm();
		} else {
			$('div.errorinfo').show();
		}
		
		return false;
	});
	
});

var marker = null;
var map = null;
 
function initialize() {
 
  var positioninit = new google.maps.LatLng(-36.173357, -70.488281);
   
  var mapOptions = {
	zoom: 8,
	center: positioninit,
	mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  map = new google.maps.Map(document.getElementById('maps'),
	  mapOptions);
 
}

google.maps.event.addDomListener(window, 'load', initialize);

/*function showLocation(){
	alert('Latitude: ' + marker.position.lat() + '\nLongitude: ' + marker.position.lng());
}*/
function searchAddr(){

	var region = $('select#id_region').val()==''?'':$('select#id_region option:selected').text();
	var comuna = $('select#id_comuna').val()==''?'':$('select#id_comuna option:selected').text();
	var lugar = $('#lugar').val();
	
	if ( $.trim($('#lugar').val()) != '' )
	{
		if ( $('#lugar').val().toLowerCase() == 'marina rupanco' )
		{
			if ( region != '' )
			{
				lugar = 'Marina Rupanco';
			} else {
				lugar = 'Marina Rupanco Los Lagos'
			}
		}
	}
	
	if ( comuna == "Marina Rupanco" )
	{
		addrInput = "Lodge Patagonia, Puyehue, Los Lagos";
	} else if( comuna == "Tunquelen" ) {
		addrInput = "hualañe el maule, chile";
	} else if( comuna == "Bahía Mansa" ) {
		addrInput = "K-636, Maule, Maule, Chile";
	} else if( comuna == "La Península" ) {
		addrInput = "vichuquen el maule, chile";
	} else if( comuna == "Punta del Litre" ) {
		addrInput = "vichuquen el maule, chile";
	} else {
		addrInput = lugar + ' ' + region + ' ' + comuna + ' , Chile';
	}
	
	console.log(addrInput);
	
	
	new google.maps.Geocoder().geocode( { 'address': addrInput}, function(results, status) {
	  if (status == google.maps.GeocoderStatus.OK) {
		if(!marker){
			marker = new google.maps.Marker({
			map: map,
			draggable: true
		  });
		 //google.maps.event.addListener(marker, 'click', showLocation);
		}
		
		
		marker.setPosition(results[0].geometry.location);
		map.setCenter(results[0].geometry.location);
		map.setZoom(9)
		addrInput.value = results[0].formatted_address;
	  } else {
		//alert("Geocode was not successful for the following reason: " + status);
	  }
	});
}

function sendForm()
{
	var nombreCompleto = $('#nombre').val()
	var rut = $('#rut').val();
	var email = $('#email').val();
	var celular = $('#celular_d').val() + $('#celular').val();
	var region = $('#id_region option:selected').text();
	var comuna = $('#id_comuna option:selected').text();
	var lugar = $('#lugar').val();
	
	$.ajax({
		method : 'POST',
		url    : 'php/register.form.php',
		data   : { action : 'registrar' ,nombre : nombreCompleto, rut : rut, email : email, celular : celular, region : region, comuna: comuna, lugar: lugar },
		beforeSend : function(){
			$('#form').hide();
			var url = "/jumbo/verano-2015/gracias";
			ga('send', 'pageview', url);
		},
		success : function(done){
			if ( done == 1 )
			{
				document.location.href="gracias.php#gracias";
				$('#despacho')[0].reset();
			} else {
				alert('Ocurrio un error');
			}
		}
	})
	
}
