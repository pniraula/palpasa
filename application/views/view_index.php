
<?php $baseImg = base_url().'assets/images/controls/';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/custom-query.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/index.css">
<title>Palpasa.com</title>
</head>
<body>
	<div id="wrapper">
		<div id="index_container">
			<div id="left-pane">
				<div id="logo">
					<img src="<?=base_url()?>/assets/images/logo.png">
				</div>
				<div id="sign_in">
					<label class="gen-label">Sign In</label>
					<table>
						<tr class="cont">
							<td><div class="inputLabel">Username</div></td>
							<td><div class="input-wrap"><input class="inputBox" id="usernameInput" type="email" autocomplete="on" value=""/></div></td>
						</tr>
						<tr>
							<td><div class="inputLabel">Password</div></td>
							<td><input class="inputBox" id="passwordInput" type="password" autocomplete="off" value=""/></td>
						</tr>
						<tr>
							<td>
								<div class="">
									<label class="index-link">forgot password?</label>
								</div>
							</td>
							<td><button id="sign-in" class="index-button">Sign In</button></td>
						</tr>
					</table>
				</div>
				<div id="sign_up">
					<label class="gen-label">Sign Up</label>
					<table>
						<tr class="cont">
							<td><div class="inputLabel">First Name</div></td>
							<td><div class="input-wrap"><input class="inputBox" id="firstnameInput" type="text" autocomplete="on" value=""/></div></td>
						</tr>
						<tr class="cont">
							<td><div class="inputLabel">Last Name</div></td>
							<td><div class="input-wrap"><input class="inputBox" id="lastnameInput" type="text" autocomplete="on" value=""/></div></td>
						</tr>
						<tr class="cont">
							<td><div class="inputLabel">Email Id</div></td>
							<td><div class="input-wrap"><input class="inputBox" id="emailidInput" type="email" autocomplete="on" value=""/></div></td>
						</tr>
						<tr class="cont">
							<td><div class="inputLabel">Password</div></td>
							<td><div class="input-wrap"><input class="inputBox" id="spasswordInput" type="password" autocomplete="off" value=""/></div></td>
						</tr>
						<tr>
							<td><div class="inputLabel">Re-Password</div></td>
							<td><input class="inputBox" id="srepasswordInput" type="password" autocomplete="off" value=""/></td>
						</tr>
						<tr>
							<td><input type="checkbox"/><label>I agree terms </label></td>
							<td><label>and conditions of palpasa.com</label></td>
						</tr>
						<tr>
							<td><button id="sign-in" class="index-button">Clear</button></td>
							<td><button id="sign-in" class="index-button">Sign Up</button></td>
						</tr>
					</table>
				</div>
				<div id="left-panel-footer">
					<div>Palpasa is a product of <a href="http://vumari.com">vumari</a>.</div>
				</div>
			</div>
			<div id="right-pane">
				<h1>Listen to free Nepali Music</h1>
				<div id="radio-cont">
					<img id="radio" src="<?=base_url()?>/assets/images/radio.png">
				</div>
				<div id="information">
					<table>
						<tr>
							<td><img class="info-ico" src="<?=base_url()?>/assets/images/free.png"/></td>
							<td>No money, no problem. Palpasa is free and always will be free.</td>
						</tr>
						<tr>
							<td><img class="info-ico" src="<?=base_url()?>/assets/images/unlimited.png"/></td>
							<td>Get instant access to thousands of Nepali songs, lyrics and videos.</td>
						</tr>
						<tr>
							<td><img class="info-ico" src="<?=base_url()?>/assets/images/personalize.png"/></td>
							<td>Creating unlimited stations and personalizing them is easy.</td>
						</tr>
						<tr>
							<td><img class="info-ico" src="<?=base_url()?>/assets/images/likedislike.png"/></td>
							<td>Like/dislike songs for better experience.</td>
						</tr>
						<tr>
							<td><img class="info-ico" src="<?=base_url()?>/assets/images/share.png"/></td>
							<td>Share music with your friends and family.</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
