<div class="content_area">
		<div id="left-panel">
			<div id="station-wrapper">
				<div class='station' id="favorite">
					<div>
								Your favorite songs
					</div>
				</div>
				<?php
				for ($i=0; $i < sizeof($stations); $i++) { 
					echo "<div class='station' id='cont-".$stations[$i]['id']."'>
							<div class='station-arrow' station=".$stations[$i]['id']." name='".$stations[$i]['name']."'></div>
							<div class='station-name' station=".$stations[$i]['id']." >
								".$stations[$i]['name']."
							</div>
						</div>";
				}
				?>
			</div>
			<div id="advertisement">
				
			</div>
		</div>
		<div id="right-panel">
			
			<div id="slidable">
				<div id="songInfoBar-wrapper">
					<div id="left-arrow">
						<img class="arrow-icon" src="<?=base_url();?>assets/images/left-arrow.png"/>
					</div>
					<div id="right-arrow">
						<img class="arrow-icon" src="<?=base_url();?>assets/images/right-arrow.png"/>
					</div>
					<div id="songCard-wrapper">
						<div class="scrolls">
							<div class="scrollDiv">
							</div>
						</div>
					</div>
					<div id="detail-info">
						
					</div>
				</div>
			</div>
			<div id="extra-info-wrapper">
				<div class="extra-info" id="now-playing">
					<div class="now-playing-con" id="lyrics-wrapper">
						<div class="section-head">Lyrics</div>
						<div class="info-con" id="lyrics"></div>
						
					</div>
					<div class="now-playing-con" id="share-options-wrapper">
						<div class="info-con" id="share-option">
							  
						</div>
					</div>
					<div class="now-playing-con" id="artist-info-wrapper">
						<div class="section-head">About Artist</div>
						<div class="info-con" id="artist-info"></div>
					</div>
					<div class="now-playing-con" id="similar-artists-wrapper">
						<div class="section-head">Similar Artists</div>
						<div class="info-con" id="similar-artists"></div>
					</div>
				</div>
				<div class="extra-info" id="settings">
					We will soon bring you with personalization options.
				</div>
				<div class="extra-info" id="about">
					<h3>About Palpasa</h3>
					<div class="info-con">
						Palpasa is free online Nepali radio. You can listen to your favourite music anytime and anywhere for free.
						You can choose from hundreds of artists or genres and we bring related music to you. You can like or dislike 
						songs for better experiences.  
					</div>
				</div>
				<div class="extra-info" id="contact">
					<h3>Contact us</h3>
					<div class="info-con">
						You can write to us at info[at]vumari.com <br>
						Please note that we need atleast a couple of business days to get back to you.
						<br>
						Thanks,<br>
						Palpasa Team
					</div>
				</div>
			</div>
		</div>
</div>