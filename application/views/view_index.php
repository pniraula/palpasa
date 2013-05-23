
<?php $baseImg = base_url().'assets/images/controls/';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/custom-query.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/libraries/jquery.nicescroll.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/welcome.js"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/index.css">
<title>Palpasa.com</title>
</head>
<body>
	<div id="wrapper">
		<div id="index_container">
			<div id="left-pane">
				<div id="logo">
					<img src="<?=base_url()?>/assets/images/logo.png"><br>
				</div>
				<div id="radio">
					<img src="<?=base_url()?>/assets/images/radio.png">
				</div>
				<div id="sign_in">
					<label class="gen-label">Sign In</label>
					<table>
						<tr class="cont">
							<td><div class="inputLabel">Username</div></td>
							<td><div class="input-wrap"><input class="inputBox signInInput" id="usernameInput" type="email" autocomplete="on" value=""/></div></td>
						</tr>
						<tr>
							<td><div class="inputLabel">Password</div></td>
							<td><input class="inputBox signInInput" id="passwordInput" type="password" autocomplete="off" value=""/></td>
						</tr>
						<tr>
							<td>
								<div class="">
									<label class="index-link">forgot password?</label>
								</div>
							</td>
							<td><button id="signInButton" class="index-button">Sign In</button></td>
						</tr>
					</table>
					<div class="errorMessage" id="signInError"></div>
				</div>
				<div id="sign_up">
					<label class="gen-label">Sign Up</label>
					<table>
						<tr class="cont">
							<td><div class="inputLabel">First Name</div></td>
							<td><div class="input-wrap"><input class="inputBox signUpInput" id="firstnameInputS" type="text" autocomplete="on" value=""/></div></td>
						</tr>
						<tr class="cont">
							<td><div class="inputLabel">Last Name</div></td>
							<td><div class="input-wrap"><input class="inputBox signUpInput" id="lastnameInputS" type="text" autocomplete="on" value=""/></div></td>
						</tr>
						<tr class="cont">
							<td><div class="inputLabel">Email Id</div></td>
							<td><div class="input-wrap"><input class="inputBox signUpInput" id="emailidInputS" type="email" autocomplete="on" value=""/></div></td>
						</tr>
						<tr class="cont">
							<td><div class="inputLabel">Password</div></td>
							<td><div class="input-wrap"><input class="inputBox signUpInput" id="passwordInputS" type="password" autocomplete="off" value=""/></div></td>
						</tr>
						<tr>
							<td><div class="inputLabel">Re-Password</div></td>
							<td><div class="input-wrap"><input class="inputBox signUpInput" id="repasswordInputS" type="password" autocomplete="off" value=""/></div></td>
						</tr>
						<tr>
							<td><input id="accept" type="checkbox"/><label>I agree terms </label></td>
							<td><label>and conditions of palpasa.com</label></td>
						</tr>
						<tr>
							<td><button id="clearButton" class="index-button">Clear</button></td>
							<td><button id="signUpButton" class="index-button">Sign Up</button></td>
						</tr>
					</table>
					<div class="errorMessage" id="signUpError"></div>
				</div>
				<div id="left-panel-footer">
					About
				</div>
			</div>
		</div>
