
<?php $baseImg = base_url().'assets/images/controls/';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/infoBar.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/welcome.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/controller.css">
<title>Palpasa.com</title>
</head>
<body>

<div id="wrapper">
	<div id="controller-wrapper">
		<div id="music_player">
			<div id="music-controller">
				<div id="controllers-icon">
					<img class="controller-icon" id="previous-icon" src="<?=$baseImg?>previous.png">
					<img class="controller-icon" id="play-icon" src="<?=$baseImg?>play.png">
					<img class="controller-icon" id="forward-icon" src="<?=$baseImg?>forward.png">
					<img class="controller-icon" id="volume-icon" src="<?=$baseImg?>volume.png">
				</div>
				<div id="playing-info">
					<div id="progress">
						<div id="prog"></div>
					</div>
				</div>
			</div>					
		</div>	
	</div>
	<div id="top"></div>