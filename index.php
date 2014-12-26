<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>JUMBO | Verano</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?r=<?php echo rand(1,999); ?>">
	
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script type="text/javascript" src="js/vendor/jquery.Rut.min.js"></script>
	<script type="text/javascript" src="js/vendor/jquery.placeholder.js"></script>
</head>
	<body>
		
		<div class="wrapper">
			<div class="header">
				<div class="header_content">
					<div class="header_logo">
						<a href="http://www.jumbo.cl/" target="_blank"><img src="images/logo_head.jpg"></a>
					</div>
					<div class="header_sociales">
						<div class="facebook_head">
							<a href="https://www.facebook.com/jumbochile" target="_blank"><img src="images/faceHead.jpg"></a>
						</div>
						<div class="twitter_head">
							<a href="https://twitter.com/jumbochile" target="_blank"><img src="images/twittHead.jpg"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="slider">
				<img src="images/slide.jpg">
			</div>
			<div class="despacho">
				<div class="despacho_top">
					<a href="#form"><img src="images/despacho.jpg" alt="" /></a>
				</div>
				<div class="despacho_text">
					<div class="title">Inscr&iacute;bete y disfruta tu verano  </div>
					<div class="text">
						V&aacute;lido solamente para una compra durante este verano al lugar de tus vacaciones.<br/>
						¡Estamos donde tus vacaciones est&aacute;n, este a&ntilde;o nuevos despachos, Rapel y Vichuqu&eacute;n!
					</div>
				</div>
				<div class="despacho_bottom">
					<img src="images/camion.jpg" alt="" />
				</div>
			</div>
			<div class="formulario" id="form">
				<div class="formulario_left">
					<form name="despacho" id="despacho" action="" type="POST">
						<input type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido*"/>
						<input type="text" name="rut" id="rut" placeholder="Rut*"/>
						<input type="text" name="email" id="email" placeholder="E-mail*"/>
						<select name="celular_d" id="celular_d">
							<option value="">cel</option>
							<option value="+56.9.9">+56.9.9</option>
							<option value="+56.9.8">+56.9.8</option>
							<option value="+56.9.7">+56.9.7</option>
							<option value="+56.9.6">+56.9.6</option>
							<option value="+56.9.5">+56.9.5</option>
						</select>
						<input type="text" name="celular" id="celular" placeholder="Celular*" maxlength="7" />
						<input type="text" name="lugar" id="lugar" placeholder="Direcci&oacute;n de despacho*"/>
						<select name="region" class="primero" id="id_region">
							<option value="">Selecciona Regi&oacute;n</option> 
							<option value="4">Coquimbo</option> 
							<option value="5">Valpara&iacute;so</option> 
							<option value="6">O'Higgins</option> 
							<option value="7">Maule</option> 
							<option value="9">Araucan&iacute;a</option> 
							<option value="14">Los R&iacute;os</option> 
							<option value="10">Los Lagos</option> 
						</select>
						<select name="comuna" id="id_comuna">
							<option value="" selected="">Selecciona Comuna</option> 
						</select>
						<span class="obligatorio">Campos Obligatorios <b>*</b></span>
						<div class="errorinfo">
							Por favor completa los campos o corrige la informaci&oacute;n ingresada.
						</div>
						<input type="submit" value="ENVIAR" class="btn"/>
					</form>
				</div>
				<div class="formulario_right">
					<div id="maps"></div>
				</div>
				<div class="formulario_bottom">
					*Todo usuario que complete el formulario obtendr&aacute; servicio/despacho a $1, que podr&aacute; usar en la primera compra con despacho a su lugar de vacaciones de verano.
					El correo ser&aacute; enviado a partir del 29 de diciembre de 2014, en forma de cup&oacute;n de descuento al correo electr&oacute;nico inscrito en el formulario.
				</div>
			</div>
			<div class="gracias">
				<p>
					<img src="images/ok.jpg">
				</p>
				<b> Tu inscripci&oacute;n ha sido realizada con &eacute;xito.</b><br/>
					Enviaremos el cup&oacute;n de descuento a tu mail <br/>
					para que utilices al momento de pagar en jumbo.cl
			</div>
			<div class="cobertura">
				<div class="cobertura_title">
					<img src="images/title.jpg" alt="" />
				</div>
				<div class="cobertura_text">
					<b>La Serena</b> · Coquimbo · Totoralillo  · <b>Las Tacas · Morrillos</b> · Guanaqueros · <b>Playa Blanca · Puerto Velero·
					Vi&ntilde;a del Mar · Re&ntilde;aca · Con Con</b> · Quintero · <b>Maitencillo · Cachagua · Papudo · Zapallar</b> · Marbella · <b>Puchuncav&iacute;·
					Santo Domingo </b>· Quintay · Tunqu&eacute;n · <b>Algarrobo</b> · Santa Mar&iacute;a del Mar · Las Brisas · Quilpu&eacute; · Villa Alemana ·
					Curauma · Valpara&iacute;so · Limache · Olmu&eacute; · Casa Blanca · Laguna Verde · <b>Marina Lago Rapel · Lago Vichuqu&eacute;n·
					Colico · Puc&oacute;n · Villarrica </b>· Freire · <b>Caburgua </b>· Lican Ray · Co&ntilde;aripe · Pitrufqu&eacute;n · <b>Panguipulli · Calafqu&eacute;n </b>· Valdivia ·
					<b>Puerto Montt · Puerto Varas · Frutillar </b>· Llanquihue · Puerto Octay · Marina Rupanco · El Islote · Osorno
				</div>
			</div>
			<div class="box">
				<div class="box_1">
					<div class="box_title">
						<img src="images/productos.jpg">
					</div>
					<div class="box_text">
						Los productos viajan siempre
						refrigerados hasta la puerta de tus vacaciones  para que disfrutes con total tranquilidad.
					</div>
				</div>
				<div class="box_2">
					<div class="box_title">
						<img src="images/surtido.jpg">
					</div>
					<div class="box_text">
						Todos los productos que buscas y las
						mejores marcas. La calidad que s&oacute;lo
						encuentras en Jumbo ahora en
						Jumbo.cl
					</div>
				</div>
				<div class="box_3">
					<div class="box_title">
						<img src="images/garantizada.jpg">
					</div>
					<div class="box_text">
						Te aseguramos llegar a tiempo con
						el pedido a tu lugar de descanso, Si no, te regalamos 5.000 puntos
						Cencosud.
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="footer_content">
					<div class="footer_social">
						<a href="https://www.facebook.com/jumbochile"><div class="footer_face"><img src="images/face.jpg"></div></a>
						<a href="https://twitter.com/jumbochile"> <div class="footer_twitt"><img src="images/twitt.jpg"></div></a>
					</div>
					<div class="footer_text">
						Fono compras 600 400 3000<br/>
						Todos los derechos reservados<br/>
						www.jumbo.cl
					</div>
					<a href="http://www.jumbo.cl"><div class="footer_logo"><img src="images/logo_foot.jpg"></a></div>
				</div>
			</div>
		</div>
		
		<!-- MAIN -->
		<script type="text/javascript" src="js/main.js?j=<?php echo rand(1,999); ?>"></script>
		
	</body>
</html>