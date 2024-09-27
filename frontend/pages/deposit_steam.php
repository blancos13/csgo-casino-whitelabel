<div class="flex column height-full width-full">
	<div class="wrapper-page flex row">
		<div class="flex column height-full width-full p-2">
			<div class="flex justify-start">
				<a href="<?php echo $site['root']; ?>deposit"><button class="site-button black"><i class="fa fa-arrow-left mr-1"></i> Back to Options</button></a>
			</div>

			<div class="flex justify-center mt-4 overflow-a">
				<div class="bg-light-transparent rounded-1 b-d2 p-4 width-8 responsive currency-panel">
					<div class="title-page flex items-center justify-center mb-1">Deposit With Diamond Locks</div>

					<div class="switch_content" data-id="grow" data-panel="panel1">
						<div class="width-8 responsive m-a">
							<div class="input_field bet_input_field transition-5" data-border="#de4c41">
								<div class="field_container">
                  
									<div class="field_content">
                    
                  <input type="text" class="field_element_input" name="growid1" placeholder="<?php ($user['tradelink']);?>" id="steam_tradelink" />

									</div>

									<div class="field_extra"></div>
                  
								</div>

								<div class="field_bottom">
									<div class="field_sucess" data-error="required">Enter Your Growtopia GrowID</div>
								</div>
							</div>
						</div>
						
						<div class="mt-4">
						<button id="save_steam_tradelink" name="submit" class="site-button purple switch_panel" data-id="grow" data-panel="panel2">Deposit</button>
						</div>
					</div>
					
					<div class="switch_content hidden" data-id="grow" data-panel="panel2">
						<div class="mb-2">You will receive the DLS automatically on the website after Put DLS in Donation Box go to the world name displayed below.</div>

						<div class="mb-2">Enter the world and make sure the bot is in the world</div>
						<div class="mb-2">Place the amount of wl, dl, bgl you want to deposit and type your GrowBet username</div>

						<div>
							<div class="width-8 responsive m-a">
								<div class="input_field bet_input_field transition-5" data-border="#de4c41">
									<div class="field_container">
										<div class="field_content">
											<input type="text" class="field_element_input" id="worldname" value="growbet54" readonly>

											<div class="field_label transition active">World name</div>
										</div>

										<div class="field_extra">
											<button type="button" class="site-button purple" data-copy="input" data-input="worldname">Copy</button>
										</div>
									</div>

									<div class="field_bottom my-2">
										<div class="field_error" data-error="required">Enter Your Growid</div>
									</div>
								</div>
							</div>
							
							<div class="mt-5">
								<button type="button" class="site-button purple" id="counter-cont">Bot Status: <span id="log">Online</span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
