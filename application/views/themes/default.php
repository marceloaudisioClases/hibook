<html lang="es">
	<head>
		<title><?php echo $title; ?></title>
		<meta name="resource-type" content="document" />
		<meta name="robots" content="all, index, follow"/>
		<meta name="googlebot" content="all, index, follow" />
		<meta charset="utf-8"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<?php
	/** -- Para un nuevo tema, copiar desde acá -- */
	if(!empty($meta))
	foreach($meta as $name=>$content){
		echo "\n\t\t";
		?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
			 }
	echo "\n";

	if(!empty($canonical))
	{
		echo "\n\t\t";
		?><link rel="canonical" href="<?php echo $canonical?>" /><?php

	}
	echo "\n\t";
	?>
	<!-- Estilos -->
	<link href="<?php echo base_url(); ?>/assets/tabler/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <?php
	foreach($css as $file){
	 	echo "\n\t\t";
		?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	} echo "\n\t";
	?>
	<link href="<?php echo base_url(); ?>assets/themes/default/css/custom.css" rel="stylesheet">
	<!-- JScript -->
	<script src="<?php echo base_url(); ?>assets/jquery/jquery-3.7.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/tabler/js/tabler.min.js?1684106062" defer></script>
	<?php
	foreach($js as $file){
			echo "\n\t\t";
			?><script src="<?php echo $file; ?>"></script><?php
	} echo "\n\t";

	/** -- hasta Acá -- */
?>
    <!-- Fav icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/themes/default/images/favicon.png" type="image/x-icon"/>
	<meta property="og:image" content="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png"/>
	<link rel="image_src" href="<?php echo base_url(); ?>assets/themes/default/images/facebook-thumb.png" />
</head>

  <body>
  <?php echo $this->load->get_section('navbar'); ?>
  <?php echo $output;?>


<footer>
	<div class="row">
        <div class="col-12">
			&nbsp;
        </div>
    </div>
</footer>

</body>
</html>
