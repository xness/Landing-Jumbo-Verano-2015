<?php 
	$comunas = array(
		//Comquimbo
		4 => array(
			81  => "Coquimbo",
			335 => "Guanaqueros",
			82  => "La Serena",
			333 => "Las Tacas",
			334 => "Morrillos",
			336 => "Playa Blanca",
			337 => "Puerto Velero",
			338 => "Tongoy",
			332 => "Totoralillo",
			355 => "Valle del Elqui",
			95  => "Vicu&ntilde;a"
		),
		5 => array(
			49 => "Algarrobo",
			31 => "Cachagua",
			32 => "Zapallar",
			41 => "Casablanca",
			38 => "Con Con",
			52 => "Curauma",
			53 => "Valparaiso",
			44 => "Laguna Verde",
			51 => "Las Brisas",
			284 => "Limache",
			32 => "Maitencillo",
			33 => "Puchuncav&iacute;",
			47 => "Mantagua",
			48 => "Ritoque",
			46 => "Marbella",
			287 => "Olmue",
			33 => "Papudo",
			//48 => "Puchuncavi",
			39 => "Quilpu&eacute;",
			42 => "Quintay",
			45 => "Quintero",
			37 => "Re&ntilde;aca",
			50 => "Santa Mar&iacute;a del Mar",
			30 => "Santo Domingo",
			43 => "Tunquen",
			36 => "Valpara&iacute;so",
			40 => "Villa Alemana",
			35 => "Vi&ntilde;a del Mar",
			34 => "Zapallar"
		),
		13 => array(
			297 => "C. de Tango",
			12  => "Chicureo",
			10  => "Colina",
			13  => "Est. Central",
			15  => "Huechuraba",
			1   => "La Florida",
			6   => "La Reina",
			4   => "Las Condes",
			7   => "Lo Barnechea",
			8   => "Lo Barnechea, Colorado",
			14  => "Lo Barnechea, Farellones",
			16  => "Lo Barnechea, La Parva",
			29  => "Lo Barnechea, Valle Nevado",
			18  => "Macul",
			352 => "Maipu, Alto Jahuel",
			351 => "Maipu, El Rosal",
			350 => "Maipu, La Farfana",
			20  => "&Ntilde;u&ntilde;oa",
			22  => "Pe&ntilde;alol&eacute;n",
			23  => "Pirque",
			3   => "Providencia",
			353 => "Pudahuel, Ciudad de los Valles",
			354 => "Pudahuel, Lomas de Lo Aguirre",
			25  => "Puente Alto",
			55  => "Quilicura, Lo Campino",
			27  => "San Miguel",
			2   => "Santiago",
			5   => "Vitacura"
		),
		6 => array(
			358 => "El Estero",
			357 => "El Manzano",
			360 => "Las Balsas",
			361 => "Llallauqu&eacute;n",
			359 => "Punta Verde"
		),
		7 => array(
			135 => "Lago Vichuqu&eacute;n",
			136 => "Aquelarre", 
			137 => "Paula",
			138 => "Tunquelen",
			139 => "4 Pantanos",
			140 => "Bah&iacute;a Mansa",
			141 => "Piedras Ballas",
			142 => "La Pen&iacute;nsula",
			143 => "La Queser&iacute;a",
			144 => "Punta del Litre"
		),
		9 => array(
			339 => "Caburgua",
			343 => "Calafquen",
			206 => "Cunco",
			208 => "Freire",
			340 => "Lago Colico Norte, Cunco",
			356 => "Lago Colico Sur, Cunco",
			341 => "Lican Ray",
			216 => "Pitrufqu&eacute;n",
			217 => "Puc&oacute;n",
			197 => "Temuco",
			225 => "Villarica"
		),
		14 => array(
			257 => "Valdivia",
			344 => "Panguipulli",
			342 => "Co&ntilde;aripe",
		),
		10 => array(
			344 => "El Islote",
			345 => "Puyehue",
			348 => "Ensenada",
			242 => "Frutillar",
			243 => "Llanquihue",
			347 => "Marina Rupanco",
			226 => "Osorno",
			//346 => "Piedras Negras, Puyehue",
			227 => "Puerto Montt",
			246 => "Puerto Octay",
			//345 => "Puerto Rico, Puyehue",
			247 => "Puerto Varas"
		)
	);


	
	if ( isset($_POST['idRegion']) )
	{
		$id = $_POST['idRegion'];
		$html = "<option value='' selected='selected'>Seleccione Comuna</option>";
		foreach ( $comunas[$id] as $key => $value )
		{
			$html.= "<option value='{$key}'>{$value}</option>";
		}
		
		echo $html;
		
	}


?>