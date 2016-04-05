<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?= $template['title'] ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="" /> 
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css?v=' . filemtime(FCPATH ."node_modules/bootstrap/dist/css/bootstrap.min.css")); ?>" />
</head>
<body>
	<div class="container">
	
	<?php echo $template['body']; ?>
	
	</div>

	<script src="<?= base_url('node_modules/jquery/dist/jquery.min.js?v='. filemtime(FCPATH ."node_modules/jquery/dist/jquery.min.js")); ?>"></script>
	<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js?v='. filemtime(FCPATH ."node_modules/bootstrap/dist/js/bootstrap.min.js")); ?>"></script>
	<!-- Append additional scripts from view -->
    <?php echo $template['metadata']; ?>
</body>
</html>