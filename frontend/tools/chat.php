<div class="slider slider-left text-left slider-top flex justify-content transition-5 show_chat p-2 pullout_view" data-pullout="chat">
	<i class="fa fa-comments" aria-hidden="true"></i>
</div>

<div class="pullout pullout-left flex column transition-5" data-pullout="chat">
	<div class="m-1">
	<div class="flex justify-between items-center mb-2 font-7">
			<div>
			<div class="onlinetext">
			<i class="fa fa-user text-colorss" aria-hidden="true"></i>

					<b><span id="isonline">0</span> online</b>
		</div>			</div>			
			<div class="pullout_view pointer" data-pullout="chat"><i class="fa fa-times" aria-hidden="true"></i></div>
		</div>


		<div class="grid split-column-full gap-1">
		<div class="flag rounded-1 flex items-center justify-center relative active" data-channel="en" data-name="English"><img  src="<?php echo $site['root'];?>template/img/lang/gb.svg?v=<?php echo time(); ?>"><div class="sop-medium-right bg-danger rounded-full flex justify-center items-center new-messages hidden">0</div></div>
		<div class="flag rounded-1 flex items-center justify-center relative active" data-channel="tr" data-name="Turkish"><img  src="<?php echo $site['root'];?>template/img/lang/tr.svg?v=<?php echo time(); ?>"><div class="sop-medium-right bg-danger rounded-full flex justify-center items-center new-messages hidden">0</div></div>
		<div class="flag rounded-1 flex items-center justify-center relative active" data-channel="id" data-name="Turkish"><img  src="<?php echo $site['root'];?>template/img/lang/id.svg?v=<?php echo time(); ?>"><div class="sop-medium-right bg-danger rounded-full flex justify-center items-center new-messages hidden">0</div></div>

		</div>
	</div>
	
	
	
	<div class="chat-group flex column">
		<div class="rain_panel p-3 hidden">
			<div class="inline-block">
				<i class="fa fa-cloud-showers-heavy"></i>
				<div class="rain-title">It's raining!</div>
			</div>
			


		</div>

		<div id="chat-area">
			<!-- here be dragons -->
		</div>
			
		<div class="">
			<?php
			$emojis = array('smile', 'smiley', 'grin', 'pensive', 'weary', 'astonished', 'rolling_eyes', 'relaxed', 'wink', 'woozy_face', 'zany_face', 'hugging', 'joy', 'sob', 'grimacing', 'rofl', 'face_monocle', 'thinking', 'pleading_face', 'sleeping', 'sunglasses', 'heart_eyes', 'smiling_hearts', 'kissing_heart', 'star_struck', 'nerd', 'innocent', 'face_vomiting', 'money_mouth', 'cold_sweat', 'partying_face', 'exploding_head', 'rage', 'hot_face', 'cold_face', 'smiling_imp', 'alien', 'clown', 'scream_cat', 'smiley_cat', 'robot', 'ghost', 'skull', 'poop', 'jack_o_lantern', '100', 'bell', 'birthday', 'gift', 'first_place', 'trophy', 'tada', 'crown', 'fire', 'heart', 'broken_heart', 'wave', 'clap', 'raised_hands', 'thumbsup', 'peace', 'ok_hand', 'muscle', 'punch', 'moneybag');
			
			?>
			
			<?php
			?>
			
			<?php
			?>
			
			<?php
			?>
			
			<?php
			?>
		</div>
			
		<div class="chat-input">
			<div style="position: relative;">
				<div class="emojis-smile-icon flex" data-type="show"><i class="fa fa-smile-o" aria-hidden="true"></i></div>
				<div class="emojis-smile-icon flex hidden" data-type="hide"><i class="fa fa-times" aria-hidden="true"></i></div>
			
				<form id="chat-input-form"><input type="text" class="chat-input-field" style="padding-right:43px" placeholder="Say something" id="chat_message" maxlength="200" autocomplete="off"></form>
				<div class="chat-input-scroll flex items-center justify-center hidden">Scroll to recent messages</div>
			</div>
		</div>
	</div>
</div>





				<!--<div class="section-menu" data-hidden="false" data-id="1">
					<h4 class="menu-section-title" onclick="toggleSideMenu(1)">
						<span>Esports</span>
						<i class="fa fa-caret-down"></i>
					</h4>

					<div class="links">
						<div class="header-menu-button">
							<a href="<?php echo $site['root'];?>esports/csgo">
								<div class="header-side-button flex items-center <?php if($paths[1] == 'csgo') echo 'active';?>">
									<img src="<?php echo $site['root'];?>template/img/side-bar/csgo.png">
									<div class="ml-1">CSGO</div>
								</div>
							</a>
						</div>

						<div class="header-menu-button">
							<a href="<?php echo $site['root'];?>esports/dota2">
								<div class="header-side-button flex items-center <?php if($paths[1] == 'dota2') echo 'active';?>">
									<img src="<?php echo $site['root'];?>template/img/side-bar/dota2.png">
									<div class="ml-1">Dota 2</div>
								</div>
							</a>
						</div>

						<div class="header-menu-button">
							<a href="<?php echo $site['root'];?>esports/lol">
								<div class="header-side-button flex items-center <?php if($paths[1] == 'lol') echo 'active';?>">
									<img src="<?php echo $site['root'];?>template/img/matches/league-of-legends.png">
									<div class="ml-1">League of Legends</div>
								</div>
							</a>
						</div>

						<div class="header-menu-button">
							<a href="<?php echo $site['root'];?>esports/ow">
								<div class="header-side-button flex items-center <?php if($paths[1] == 'ow') echo 'active';?>">
									<img src="<?php echo $site['root'];?>template/img/matches/overwatch.png">
									<div class="ml-1">Overwatch</div>
								</div>
							</a>
						</div>

						<div class="header-menu-button">
							<a href="<?php echo $site['root'];?>esports/hearthstone">
								<div class="header-side-button flex items-center <?php if($paths[1] == 'hearthstone') echo 'active';?>">
									<img src="<?php echo $site['root'];?>template/img/matches/hearthstone.png">
									<div class="ml-1">Hearthstone</div>
								</div>
							</a>
						</div>

						<div class="header-menu-button">
							<a href="<?php echo $site['root'];?>esports/sc2">
								<div class="header-side-button flex items-center <?php if($paths[1] == 'sc2') echo 'active';?>">
									<img src="<?php echo $site['root'];?>template/img/matches/starcraft-2.png">
									<div class="ml-1">StarCraft 2</div>
								</div>
							</a>
						</div>

						<div class="header-menu-button">
							<a href="<?php echo $site['root'];?>esports/valorant">
								<div class="header-side-button flex items-center <?php if($paths[1] == 'valorant') echo 'active';?>">
									<img src="<?php echo $site['root'];?>template/img/matches/valorant.png">
									<div class="ml-1">Valorant</div>
								</div>
							</a>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>
</div>