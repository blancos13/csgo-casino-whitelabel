<div class="modal medium" id="modal_battles">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1" style="display:block">
			<div class="modal-body text-left" style="display:block;height:auto;overflow:visible;float:left;width:100%">
				<h2>Creating a new Slot Arena</h2>

				<label>Game</label>
				<div class="gc">
					<!-- <input type="text" placeholder="Search by title" /> -->

					<div class="c" id="bonus_game" data-selected="">
						<img data-id="pragmaticexternal:FruitParty1" onclick="bonusBattlesSelectGame('pragmaticexternal:FruitParty1')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/FruitParty1.png" alt="" />

						<img data-id="pragmaticexternal:FruitParty2" onclick="bonusBattlesSelectGame('pragmaticexternal:FruitParty2')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/FruitParty2.png" alt="" />

						<img data-id="pragmaticexternal:SweetBonanza" onclick="bonusBattlesSelectGame('pragmaticexternal:SweetBonanza')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/SweetBonanza.png" alt="" />

						<img data-id="pragmaticexternal:SweetBonanzaXmas" onclick="bonusBattlesSelectGame('pragmaticexternal:SweetBonanzaXmas')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/SweetBonanzaXmas.png" alt="" />

						<img data-id="pragmaticexternal:GatesOfOlympus1" onclick="bonusBattlesSelectGame('pragmaticexternal:GatesOfOlympus1')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/GatesOfOlympus1.png" alt="" />

						<img data-id="pragmaticexternal:GemsBonanza1" onclick="bonusBattlesSelectGame('pragmaticexternal:GemsBonanza1')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/GemsBonanza1.png" alt="" />

						<img data-id="pragmaticexternal:TheDogHouseMegaways1" onclick="bonusBattlesSelectGame('pragmaticexternal:TheDogHouseMegaways1')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/TheDogHouseMegaways1.png" alt="" />

						<img data-id="pragmaticexternal:BuffaloKingMegaways1" onclick="bonusBattlesSelectGame('pragmaticexternal:BuffaloKingMegaways1')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/BuffaloKingMegaways1.png" alt="" />

						<img data-id="pragmaticexternal:ReleasetheKraken" onclick="bonusBattlesSelectGame('pragmaticexternal:ReleasetheKraken')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/ReleasetheKraken.png" alt="" />

						<img data-id="pragmaticexternal:MadameDestinyMegaways1" onclick="bonusBattlesSelectGame('pragmaticexternal:MadameDestinyMegaways1')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/MadameDestinyMegaways1.png" alt="" />

						<img data-id="pragmaticexternal:WildWestGold" onclick="bonusBattlesSelectGame('pragmaticexternal:WildWestGold')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/WildWestGold.png" alt="" />

						<img data-id="pragmaticexternal:PowerofThorMegaways" onclick="bonusBattlesSelectGame('pragmaticexternal:PowerofThorMegaways')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/PowerofThorMegaways.png" alt="" />

						<img data-id="pragmaticexternal:TheHandOfMidas" onclick="bonusBattlesSelectGame('pragmaticexternal:TheHandOfMidas')" src="https://cdn.softswiss.net/i/s4/pragmaticexternal/TheHandOfMidas.png" alt="" />
					</div>
				</div>

				<label style="margin-top:20px">Amount</label>
				<select data-selected="0" id="bonus_amount">
					<option value="0">20.00</option>
					<option value="1">40.00</option>
					<option value="2">60.00</option>
					<option value="3">80.00</option>
					<option value="4">100.00</option>
					<option value="5">120.00</option>
					<option value="6">140.00</option>
					<option value="7">160.00</option>
					<option value="8">180.00</option>
					<option value="9">200.00</option>
					<option value="10">240.00</option>
					<option value="11">280.00</option>
					<option value="12">300.00</option>
					<option value="13">360.00</option>
					<option value="14">400.00</option>
					<option value="15">420.00</option>
					<option value="16">480.00</option>
					<option value="17">500.00</option>
					<option value="18">540.00</option>
					<option value="19">600.00</option>
					<option value="20">700.00</option>
					<option value="21">800.00</option>
					<option value="22">900.00</option>
					<option value="23">1000.00</option>
					<option value="24">1200.00</option>
					<option value="25">1400.00</option>
					<option value="26">1600.00</option>
					<option value="27">1800.00</option>
					<option value="28">2000.00</option>
					<option value="29">2400.00</option>
					<option value="30">2800.00</option>
					<option value="31">3000.00</option>
					<option value="32">3200.00</option>
					<option value="33">3600.00</option>
					<option value="34">4000.00</option>
					<option value="35">5000.00</option>
					<option value="36">6000.00</option>
					<option value="37">7000.00</option>
					<option value="38">8000.00</option>
					<option value="39">9000.00</option>
					<option value="40">10000.00</option>
				</select>
				<!--<div class="amounts" data-selected="1" id="bonus_amount" style="max-height:130px;overflow:auto;">
					<div data-id="0" onclick="bonusBattlesSelectAmount(0)" data-selected="true">$20.00</div>
					<div data-id="1" onclick="bonusBattlesSelectAmount(1)">$40.00</div>
					<div data-id="2" onclick="bonusBattlesSelectAmount(2)">$60.00</div>
					<div data-id="3" onclick="bonusBattlesSelectAmount(3)">$80.00</div>
					<div data-id="4" onclick="bonusBattlesSelectAmount(4)">$100.00</div>
					<div data-id="5" onclick="bonusBattlesSelectAmount(5)">$120.00</div>
					<div data-id="6" onclick="bonusBattlesSelectAmount(6)">$140.00</div>
					<div data-id="7" onclick="bonusBattlesSelectAmount(7)">$160.00</div>
					<div data-id="8" onclick="bonusBattlesSelectAmount(8)">$180.00</div>
					<div data-id="9" onclick="bonusBattlesSelectAmount(9)">$200.00</div>
					<div data-id="10" onclick="bonusBattlesSelectAmount(10)">$240.00</div>
					<div data-id="11" onclick="bonusBattlesSelectAmount(11)">$280.00</div>
					<div data-id="12" onclick="bonusBattlesSelectAmount(12)">$300.00</div>
					<div data-id="13" onclick="bonusBattlesSelectAmount(13)">$360.00</div>
					<div data-id="14" onclick="bonusBattlesSelectAmount(14)">$400.00</div>
					<div data-id="15" onclick="bonusBattlesSelectAmount(15)">$420.00</div>
					<div data-id="16" onclick="bonusBattlesSelectAmount(16)">$480.00</div>
					<div data-id="17" onclick="bonusBattlesSelectAmount(17)">$500.00</div>
					<div data-id="18" onclick="bonusBattlesSelectAmount(18)">$540.00</div>
					<div data-id="19" onclick="bonusBattlesSelectAmount(19)">$600.00</div>
					<div data-id="20" onclick="bonusBattlesSelectAmount(20)">$700.00</div>
					<div data-id="21" onclick="bonusBattlesSelectAmount(21)">$800.00</div>
					<div data-id="22" onclick="bonusBattlesSelectAmount(22)">$900.00</div>
					<div data-id="23" onclick="bonusBattlesSelectAmount(23)">$1000.00</div>
					<div data-id="24" onclick="bonusBattlesSelectAmount(24)">$1200.00</div>
					<div data-id="25" onclick="bonusBattlesSelectAmount(25)">$1400.00</div>
					<div data-id="26" onclick="bonusBattlesSelectAmount(26)">$1600.00</div>
					<div data-id="27" onclick="bonusBattlesSelectAmount(27)">$1800.00</div>
					<div data-id="28" onclick="bonusBattlesSelectAmount(28)">$2000.00</div>
					<div data-id="29" onclick="bonusBattlesSelectAmount(29)">$2400.00</div>
					<div data-id="30" onclick="bonusBattlesSelectAmount(30)">$2800.00</div>
					<div data-id="31" onclick="bonusBattlesSelectAmount(31)">$3000.00</div>
					<div data-id="32" onclick="bonusBattlesSelectAmount(32)">$3200.00</div>
					<div data-id="33" onclick="bonusBattlesSelectAmount(33)">$3600.00</div>
					<div data-id="34" onclick="bonusBattlesSelectAmount(34)">$4000.00</div>
					<div data-id="35" onclick="bonusBattlesSelectAmount(35)">$5000.00</div>
					<div data-id="36" onclick="bonusBattlesSelectAmount(36)">$6000.00</div>
					<div data-id="37" onclick="bonusBattlesSelectAmount(37)">$7000.00</div>
					<div data-id="38" onclick="bonusBattlesSelectAmount(38)">$8000.00</div>
					<div data-id="39" onclick="bonusBattlesSelectAmount(39)">$9000.00</div>
					<div data-id="40" onclick="bonusBattlesSelectAmount(40)">$10000.00</div>
				</div>-->

				<label style="margin-top:20px">Participants (2-10)</label>
				<input type="number" value="2" min="2" max="10" id="bonusbattle_players" />

				<!-- <div class="ss2">
					<div></div>
					<p>Start the battle with incomplete participants</p>
				</div> -->

				<button type="button" class="login" onclick="createBonusBattle()" id="create_bonus_battle">Create</button>

				<div id="rb_error"></div>
			</div>
		</div>
	</div>
</div>

<div class="modal medium" id="modal_rake">
<div class="modal-dialog flex justify-center items-center">
	<div class="modal-contentddd rounded-1 width25" style="display:block">
			<div class="modal-bodydd text-left" style="display:block;height:auto;overflow:visible;float:left;width:100%">

				<p><i style="margin-right:5px;" class="coins mr-1" aria-hidden="true"></i>Withdraw Ethereum (1 USDT = 0.00061 Ethereum)</p>
				
				<input type="text" class="chat-input-field" style="padding-right:43px;margin-bottom:7px;font-family: 'Kanit';font-size: 15;font-weight: 500;" placeholder="Ethereum Address" id="currency_withdraw_address" maxlength="200" autocomplete="off">
				<label for="valorant_pointss">Withdraw amount</label>
					<div> 
					<input class="balanceinput" placeholder="0.00 " value="0.00" id="currency_coin_from" oninput="offers_calculateCurrencyValue('from', CRC)" style="width:100%;background: #1c1e26;font-family: 'Kanit';font-weight: 900;font-size: 15;"> 

				</div>

				<a role="button" id="crypto_withdraw" style="width:100%;float:left;line-height: 20px;margin: 15px 0px;display: flex;-webkit-box-align: center;align-items: center;-webkit-box-pack: center;justify-content: center;border-radius: 3px;padding: 0px 14px;transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;border-width: 0px 0px 2px;border-top-style: initial;border-right-style: initial;border-left-style: initial;border-image: initial;border-bottom-style: solid;font-size: 14px;white-space: nowrap;overflow: hidden;cursor: pointer;border-color: rgb(143 20 32);box-shadow: #ff303036 0px 4px 4px;line-height: 30px;background-color: #dd3f4d !important;font-weight: 600;" class="rb">Withdraw</a>

			
			</div>
		</div>

	</div>
	</div>
	</div>

  </div>
</div>

<style>
  #world_name_input,
  #currency_withdraw_address {
    width: 100%;
    min-width: 0;
    /*height: 45px;*/
    padding: 15px;
    color: var(--site-color-text);
    border: none;
    font-size: 12px;
    z-index: 2;
    background-color: #1c1e26;
	/*box-shadow: -9px 1px 22px 0px #ff3030 */
	border-radius: 0.5rem;

  }

  #world_name_input::placeholder,
  #grow_id_input::placeholder {
    color: #999;
  }

  #currency_withdraw_address {
    font-size: 24px;
  }

  #currency_coin_from {
	border-radius: 6px;
	padding: 0.5rem;
	width: 100%;
	font-weight: 500;
	background-color: transparent;
	outline: none;
	border: none;
	color: rgb(230, 230, 230);
	font-size: 15px;
	background-color: rgb(47, 50, 65);
	display: flex;
	justify-content: space-around;
	align-items: center;
	transition: all 0.3s ease 0s;
	text-align: center;
  }

  #currency_coin_from::placeholder {
    color: #999;
  }

  #crypto_withdraw {
	border-radius: 6px;
	padding: 0.5rem;
	width: 100%;
	font-weight: 500;
	background-color: transparent;
	outline: none;
	border: none;
	color: rgb(230, 230, 230);
	font-size: 15px;
	background-color: rgb(47, 50, 65);
	display: flex;
	justify-content: space-around;
	align-items: center;
	transition: all 0.3s ease 0s;
	text-align: center;
  }

  #crypto_withdraw:hover {
    background-color: #00913a;
  }
</style>
<style>
        .container {
            display: flex;
            justify-content: center; /* Yatayda ortala */
            align-items: center; /* Dikeyde ortala */
        }
        img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>

<div class="modal medium" id="modal_rakes">
<div class="modal-dialog flex justify-center items-center">
	<div class="modal-content rounded-1 width25" style="display:block">
			<div class="modal-bodydd text-left" style="display:block;height: auto;overflow:visible;float:left;width:100%">
            <div class="switch_content" data-id="grow" data-panel="panel1">
				<p><i style="margin-right:5px;" class="fas fa-wallet" aria-hidden="true"></i>Deposit</p>
				
				<input type="text" class="chat-input-field" name="growid1" placeholder="Enter your Wallet Address" id="steam_tradelink" />
				<label for="valorant_pointss">Select Deposit Amount</label>
					<div> 
					
						<select name="valorant_pointss" id="valorant_pointss" style="width:100%;background: #1c1e26;font-family: 'Kanit';font-weight: 900;font-size: 15;">

						

																						<option value="450">0.01 Ethereum </option>
																<option value="960">0.02 Ethereum</option>
																<option value="1965">0.05 Ethereum</option>
																<option value="3555">0.10 Ethereum</option>
																<option value="5180">1.00 Ethereum</option>
																<option value="10515">10.00 Ethereum</option>
												  </select>
				</div>
				<div class="mt-4 flex justify-center"> <!-- Added flex justify-center classes here -->

				<button id="save_steam_tradelink" name="submit" class="balancebutton switch_panel" data-id="grow" data-panel="panel2" style="float: right; margin-top: -10px; width: 220px; height: 40px; font-size: 16px;">Start Deposit</button>
				</div>
            </div>
			</div>

            <div class="switch_content hidden" data-id="grow" data-panel="panel2">
			<div style class="mb-2 text-center">Send the amount ethereum you want to deposit and you will receive <span class="text-green">automatically after block confirmations</span></div>

              <div>
			  <div class="modal-bodydd text-left" style="display:block;height: auto;overflow:visible;float:left;width:100%">

                  <div class="input_field transition-5" data-border="#00adff">
                    <div class="field_container">
                      <div class="field_content">
                        <input type="text" class="field_element_input" id="worldname" value="0x22eEDcc3f7c63001b9750A6523220697757a4544" readonly>
                        <div class="field_label transition active">Address:</div>
                      </div>
					  
                      <div class="field_extra">
                        <button type="button" class="site-button purple" data-copy="input" data-input="worldname">Copy</button>
                      </div>
					  </div>
					  </div>

				<div class="container">
        <img src="https://chart.googleapis.com/chart?chs=200x200&amp;cht=qr&amp;chl=0x22eEDcc3f7c63001b9750A6523220697757a4544" alt="">

		</div>
		</div>
		</div>

			  
			  &nbsp;&nbsp;&nbsp;&nbsp;
			  &nbsp;&nbsp;&nbsp;&nbsp;
			  &nbsp;&nbsp;&nbsp;&nbsp;
			  &nbsp;&nbsp;&nbsp;&nbsp;
			  &nbsp;&nbsp;&nbsp;&nbsp;
			  &nbsp;&nbsp;&nbsp;&nbsp;

    </div>
  </div>
  </div>
  </div>






<script type="text/javascript">
	function collectRb() {
		send_request_socket({
			'type': 'rb_collect',
		});
	}
</script>














<div class="modal medium" id="modal_auth">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper"></div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			
			<div class="modal-body text-left">
				<div class="grid split-column-2 gap-1 mb-2">
					<button class="site-button black switch_panel active" data-id="auth" data-panel="login">LOGIN</button>
					<button class="site-button black switch_panel" data-id="auth" data-panel="register">REGISTER</button>
				</div>
				
				<div class="switch_content" data-id="auth" data-panel="login">
					<div class="grid split-column-3 gap-2 mr-2 ml-2">
					</div>
					
					<div class="title-text width-full flex items-center justify-center mt-1 mb-1">or</div>
				
					<form class="form_auth" autocomplete="login" method="POST" action="<?php echo $site['root'];?>auth/login?return=<?php echo $site['path'];?>">
						<div class="flex column items-center gap-2">
							<div class="input_field bet_input_field transition-5" data-border="#de4c41">
								<div class="field_container">
									<div class="field_content">
										<input type="text" class="field_element_input" name="username" value="" autocomplete="email">
										
										<div class="field_label">Username / E-mail</div>
									</div>
									
									<div class="field_extra"></div>
								</div>
								
								<div class="field_bottom">
									<div class="field_error" data-error="required">This field is required</div>
									<div class="field_error" data-error="username_email">This field must be a username or a email</div>
								</div>
							</div>
							
							<div class="input_field bet_input_field transition-5" data-border="#de4c41">
								<div class="field_container">
									<div class="field_content">
										<input type="password" class="field_element_input" name="password" value="" autocomplete="password">
										
										<div class="field_label">Password</div>
									</div>
									
									<div class="field_extra"></div>
								</div>
								
								<div class="field_bottom">
									<div class="field_error" data-error="required">This field is required</div>
									<div class="field_error" data-error="password">At least 8 characters, one uppercase, one lowercase, one number and one symbol</div>
								</div>
							</div>
							
							<div class="flex justify-start width-full mt-2">
								<div class="text-gray pointer font-6" data-modal="show" data-id="#modal_auth_recover">Recover password</div>
							</div>
							
							<button type="submit" class="site-button purple mt-1">Submit</button>
						</div>
					</form>
				</div>
				
				<div class="switch_content hidden" data-id="auth" data-panel="register">
					<form class="form_auth" autocomplete="register" method="POST" action="<?php echo $site['root'];?>auth/register?return=<?php echo $site['path'];?>">
						<div class="flex column items-center gap-2">
							<div class="input_field bet_input_field transition-5" data-border="#de4c41">
								<div class="field_container">
									<div class="field_content">
										<input type="text" class="field_element_input" name="email" value="" autocomplete="email">
										
										<div class="field_label">E-mail</div>
									</div>
									
									<div class="field_extra"></div>
								</div>
								
								<div class="field_bottom">
									<div class="field_error" data-error="required">This field is required</div>
									<div class="field_error" data-error="email">This field must be a email</div>
								</div>
							</div>
							
							<div class="input_field bet_input_field transition-5" data-border="#de4c41">
								<div class="field_container">
									<div class="field_content">
										<input type="text" class="field_element_input" name="username" value="" autocomplete="username">
										
										<div class="field_label">Username</div>
									</div>
									
									<div class="field_extra"></div>
								</div>
								
								<div class="field_bottom">
									<div class="field_error" data-error="required">This field is required</div>
									<div class="field_error" data-error="username">At least 6 characters, only lowercase, numbers and underscore are allowed</div>
								</div>
							</div>
							
							<div class="input_field bet_input_field transition-5" data-border="#de4c41">
								<div class="field_container">
									<div class="field_content">
										<input type="password" class="field_element_input" name="password" value="" autocomplete="password">
										
										<div class="field_label">Password</div>
									</div>
									
									<div class="field_extra"></div>
								</div>
								
								<div class="field_bottom">
									<div class="field_error" data-error="required">This field is required</div>
									<div class="field_error" data-error="password">At least 8 characters, one uppercase, one lowercase, one number and one symbol</div>
								</div>
							</div>
							
							<button type="submit" class="site-button purple mt-1">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal medium" id="modal_auth_initializing">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">Account Settings</div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			
			<div class="modal-body text-left">
				<form class="form_auth" autocomplete="initializing" method="POST" action="<?php echo $site['root'];?>auth/initializing?return=<?php echo $site['path'];?>">
					<div class="flex column items-center gap-2">
						<div class="input_field bet_input_field transition-5" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="text" class="field_element_input" name="username" value="<?php echo $user['username']; ?>">
									
									<div class="field_label">Username</div>
								</div>
								
								<div class="field_extra"></div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="username">At least 6 characters, only lowercase, numbers and underscore are allowed</div>
							</div>
						</div>
						
						<div class="input_field bet_input_field transition-5" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="text" class="field_element_input" name="email" value="<?php echo $user['email']; ?>">
									
									<div class="field_label">E-mail</div>
								</div>
								
								<div class="field_extra"></div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="email">This field must be a email</div>
							</div>
						</div>
						
						<div class="input_field bet_input_field transition-5" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="password" class="field_element_input" name="password" value="">
									
									<div class="field_label">Password</div>
								</div>
								
								<div class="field_extra"></div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="password">At least 8 characters, one uppercase, one lowercase, one number and one symbol</div>
							</div>
						</div>
						
						<div class="input_field bet_input_field transition-5" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="password" class="field_element_input" name="confirm_password" value="">
									
									<div class="field_label">Confirm Password</div>
								</div>
								
								<div class="field_extra"></div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="password">At least 8 characters, one uppercase, one lowercase, one number and one symbol</div>
							</div>
						</div>
						
						<button type="submit" class="site-button purple mt-1">Sumbit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal medium" id="modal_auth_settings">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">Account Settings</div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			
			<div class="modal-body text-left">
				<form class="form_auth_settings" autocomplete="settings">
					<div class="flex column items-center gap-2">
						<div class="input_field bet_input_field transition-5" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="text" class="field_element_input" name="username" value="<?php echo $user['username']; ?>">
									
									<div class="field_label">Username</div>
								</div>
								
								<div class="field_extra"></div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="username">At least 6 characters, only lowercase, numbers and underscore are allowed</div>
							</div>
						</div>
						
						<div class="input_field bet_input_field transition-5" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="text" class="field_element_input" name="email" value="<?php echo $user['email']; ?>">
									
									<div class="field_label">E-mail</div>
								</div>
								
								<div class="field_extra"></div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="email">By changing your email, you need to verify your profile again</div>
							</div>
						</div>
						
						<div class="flex column items-start width-full">
							<button type="button" class="site-button black" data-modal="show" data-id="#modal_auth_change_password">Change password</button>
						</div>
						
						<button type="submit" class="site-button purple mt-1">Sumbit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal medium" id="modal_auth_change_password">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">Change Password</div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			
			<div class="modal-body text-left">
				<form class="form_auth" autocomplete="change_password" method="POST" action="<?php echo $site['root'];?>auth/change_password">
					<div class="flex column items-center gap-2">
						<div class="input_field bet_input_field transition-5" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="password" class="field_element_input" name="current_password" value="">
									
									<div class="field_label">Current password</div>
								</div>
								
								<div class="field_extra"></div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="password">This field must be a password</div>
							</div>
						</div>
						
						<div class="input_field bet_input_field transition-5" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="password" class="field_element_input" name="password" value="">
									
									<div class="field_label">New password</div>
								</div>
								
								<div class="field_extra"></div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="password">At least 8 characters, one uppercase, one lowercase, one number and one symbol</div>
							</div>
						</div>
						
						<div class="input_field bet_input_field transition-5" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="password" class="field_element_input" name="confirm_password" value="">
									
									<div class="field_label">Confirm new password</div>
								</div>
								
								<div class="field_extra"></div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="password">At least 8 characters, one uppercase, one lowercase, one number and one symbol</div>
							</div>
						</div>
						
						<button type="submit" class="site-button purple mt-1">Sumbit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modal_auth_recover">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">Recover password</div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			<div class="modal-body text-left font-8">
				<form class="form_auth_recover" autocomplete="recover">
					<div class="flex column items-center">
						<div class="input_field bet_input_field transition-5" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="text" class="field_element_input" name="username" value="" autocomplete="username">
									
									<div class="field_label">Username / E-mail</div>
								</div>
								
								<div class="field_extra"></div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="username_email">This field must be a username or a email</div>
							</div>
						</div>
						
						<button type="submit" class="site-button purple mt-1">Sumbit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal small" id="modal_auth_logout">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">LOGOUT</div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			
			<div class="modal-body text-left">
				<div class="text-center mb-2">Do you wish to log out?</div>
			
				<div class="grid split-column-2 gap-1 mb-2">
					<button class="site-button black" data-modal="hide">CANCEL</button>
					
					<a href="<?php echo $site['root'];?>auth/logout?devices=0&return=<?php echo $site['path'];?>">
						<button class="site-button purple width-full">LOGOUT</button>
					</a>
				</div>
				
				<a class="width-full" href="<?php echo $site['root'];?>auth/logout?devices=1&return=<?php echo $site['path'];?>">
					<button class="site-button purple width-full">LOGOUT FROM ALL DEVICES</button>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="modal small" id="modal_offers_pending">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">Offer Pending Status</div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			<div class="modal-body text-left">
				<div class="offers_pending_method hidden" data-method="p2p">
					<div class="offers_pending_type hidden" data-type="deposit">
						<div class="offers_pending_status hidden" data-status="-1">
							<div class="bundle_items_pending">
							</div>
							
							<div class="mt-2 font-8">
								<div>This trade has expired or canceled. If you sent the trade offer to buyer, please cancel it now.</div>
								<div>If the trade was already completed and you have received your coins after an hour, contact support.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
						
						<div class="offers_pending_status hidden" data-status="0">
							<div class="bundle_items_pending">
							</div>
							
							<div class="bg-main-transparent rounded-1 b-l2 flex items-center justify-center mt-2 text-center font-9 width-full inline-block">
								<div class="counter_content m-1">Waiting for <span class="counter">00:00</span></div>
							</div>
							
							<div class="mt-2 font-8">Your deposit has been listed on the withdraw page. Please wait for another user to withdraw yout items. It could happen at any time so be ready!</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button black" id="cancel_p2p_listing" data-listing="0" data-modal="hide">Cancel Trade</button>
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
						
						<div class="offers_pending_status hidden" data-status="1">
							<div class="bundle_items_pending">
							</div>
							
							<div class="bg-main-transparent rounded-1 b-l2 flex items-center justify-center mt-2 text-center font-9 width-full inline-block">
								<div class="counter_content m-1">Expire in <span class="counter">00:00</span></div>
							</div>
							
							<div class="bg-light rounded-1 b-l2 flex items-center justify-center mt-2 text-center p-1 font-9 width-full inline-block">
								<div class="flex column gap-2">
									<a class="offer_buyer_profile flex gap-2 justify-center items-center" href="" target="_blank">
										<div class="avatar-field relative">
											<img class="avatar icon-medium rounded-full" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fe/fef49e7fa7e1997310d705b2a6158ff8dc1cdfeb_full.jpg">
										</div>
										<div>None</div>
									</a>
								</div>
							</div>
							
							<div class="mt-2 font-8">
								<div>A buyer has been found and you must to confirm to start the tracking. You will see the buyer's informations after your confirmation.</div>
								<div>Are you ready to start the trade?</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-1">
								<button type="button" class="site-button purple" id="confirm_p2p_listing" data-listing="0" data-modal="hide">Yes, I'm Ready</button>
							</div>
						</div>
					
						<div class="offers_pending_status hidden" data-status="2">
							<div class="bundle_items_pending">
							</div>
							
							<div class="bg-main-transparent rounded-1 b-l2 flex items-center justify-center mt-2 text-center font-9 width-full inline-block">
								<div class="counter_content m-1">Expire in <span class="counter">00:00</span></div>
							</div>
							
							<div class="bg-light rounded-1 b-l2 flex items-center justify-center mt-2 text-center p-1 font-9 width-full inline-block">
								<div class="flex column gap-2">
									<a class="offer_buyer_profile flex gap-2 justify-center items-center" href="" target="_blank">
										<div class="avatar-field relative">
											<img class="avatar icon-medium rounded-full" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fe/fef49e7fa7e1997310d705b2a6158ff8dc1cdfeb_full.jpg">
										</div>
										<div>None</div>
									</a>
									
									<a class="trade_link_offer" href="" target="_blank"><button type="button" class="site-button purple">Trade Link</button></a>
								</div>
							</div>
							
							<div class="mt-2 font-8">
								<div>A buyer has been found. Please send the items to buyer.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
						
						<div class="offers_pending_status hidden" data-status="3">
							<div class="bundle_items_pending">
							</div>
							
							<div class="bg-main-transparent rounded-1 b-l2 flex items-center justify-center mt-2 text-center font-9 width-full inline-block">
								<div class="counter_content m-1">Expire in <span class="counter">00:00</span></div>
							</div>
							
							<div class="bg-light rounded-1 b-l2 flex items-center justify-center mt-2 text-center p-1 font-9 width-full inline-block">
								<div class="flex column gap-2">
									<a class="offer_buyer_profile flex gap-2 justify-center items-center" href="" target="_blank">
										<div class="avatar-field relative">
											<img class="avatar icon-medium rounded-full" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fe/fef49e7fa7e1997310d705b2a6158ff8dc1cdfeb_full.jpg">
										</div>
										<div>None</div>
									</a>
									
									<a class="trade_link_offer" href="" target="_blank"><button type="button" class="site-button purple">Trade Link</button></a>
								</div>
							</div>
							
							<div class="mt-2 font-8">
								<div>Trade offer successfully sent. To complete the withdraw please wait until the buyer accept the offer.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
						
						<div class="offers_pending_status hidden" data-status="4">
							<div class="bundle_items_pending">
							</div>
							
							<div class="mt-2 font-8">
								<div>Trade offer successfully completed. You delivered the items to buyer.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
					</div>
					
					<div class="offers_pending_type hidden" data-type="withdraw">
						<div class="offers_pending_status hidden" data-status="-1">
							<div class="bundle_items_pending">
							</div>
							
							<div class="mt-2 font-8">
								<div>This trade has canceled. Your coins was refunded.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
						
						<div class="offers_pending_status hidden" data-status="0">
							<div class="bundle_items_pending">
							</div>
							
							<div class="mt-2 font-8">
								<div>This trade has expired. Your coins was refunded.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
						
						<div class="offers_pending_status hidden" data-status="1">
							<div class="bundle_items_pending">
							</div>
							
							<div class="bg-main-transparent rounded-1 b-l2 flex items-center justify-center mt-2 text-center font-9 width-full inline-block">
								<div class="counter_content m-1">Expire in <span class="counter">00:00</span></div>
							</div>
							
							<div class="mt-2 font-8">
								<div>Your withdrawl request has bees sent to seller.</div>
								<div>The seller must to confirm the request!</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
					
						<div class="offers_pending_status hidden" data-status="2">
							<div class="bundle_items_pending">
							</div>
							
							<div class=" bg-main-transparent rounded-1 b-l2 flex items-center justify-center mt-2 text-center font-9 width-full inline-block">
								<div class="counter_content m-1">Expire in <span class="counter">00:00</span></div>
							</div>
							
							<div class="mt-2 font-8">
								<div>Wait for a trade offer, always check the Steam offers to see if you received new offers from seller and check if the offer contain the correct items.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
						
						<div class="offers_pending_status hidden" data-status="3">
							<div class="bundle_items_pending">
							</div>
							
							<div class="bg-main-transparent rounded-1 b-l2 flex items-center justify-center mt-2 text-center font-9 width-full inline-block">
								<div class="counter_content m-1">Expire in <span class="counter">00:00</span></div>
							</div>
							
							<div class="mt-2 font-8">
								<div>The seller successfully sent a trade offer with your items. To complete the withdraw please accept the offer.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<a class="trade_link_offer" href="" target="_blank"><button type="button" class="site-button black">Trade Offer</button></a>
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
						
						<div class="offers_pending_status hidden" data-status="4">
							<div class="bundle_items_pending">
							</div>
							
							<div class="mt-2 font-8">
								<div>Trade offer successfully completed. You received the items.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
					</div>
				</div>
			
				<div class="offers_pending_method hidden" data-method="steam">
					<div class="offers_pending_type hidden" data-type="deposit">
						<div class="offers_pending_status hidden" data-status="-1">
							<div class="bundle_items_pending">
							</div>
							
							<div class="mt-2 font-8">
								<div>Your deposit trade offer with id <span class="text-color">#<span class="offer_id"></span></span> was declined/canceled.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">OK</button>
							</div>
						</div>
					
						<div class="offers_pending_status hidden" data-status="1">
							<div class="bundle_items_pending">
							</div>
							
							<div class="bg-main-transparent rounded-1 b-l2 flex items-center justify-center mt-2 text-center font-9 width-full inline-block">
								<div class="counter_content m-1">Expire in <span class="counter">00:00</span></div>
							</div>
							
							<div class="mt-2 font-8">
								<div>Your deposit trade offer with id <span class="text-color">#<span class="offer_id"></span></span> and with security code <span class="text-color offer_code"></span> was sent. Please accept the trade offer until the time expires.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<a class="offer_trade" href="" target="_blank"><button type="button" class="site-button black">Trade Offer</button></a>
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
						
						<div class="offers_pending_status hidden" data-status="2">
							<div class="bundle_items_pending">
							</div>
							
							<div class="mt-2 font-8">
								<div>Your deposit trade offer with id <span class="text-color">#<span class="offer_id"></span></span> was successfully accepted. You received <span class="offer_coins"></span> coins.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">OK</button>
							</div>
						</div>
					</div>
					
					<div class="offers_pending_type hidden" data-type="withdraw">
						<div class="offers_pending_status hidden" data-status="-1">
							<div class="bundle_items_pending">
							</div>
							
							<div class="mt-2 font-8">
								<div>Your withdraw trade offer with id <span class="text-color">#<span class="offer_id"></span></span> was declined/canceled. You received <span class="offer_coins"></span> coins refund.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">OK</button>
							</div>
						</div>
						
						<div class="offers_pending_status hidden" data-status="0">
							<div class="bundle_items_pending">
							</div>
							
							<div class="mt-2 font-8">
								<div>Your withdraw trade offer with id <span class="text-color">#<span class="offer_id"></span></span> and with security code <span class="text-color offer_code"></span> was created and must Steam Guard confirmation. Please wait for bot Steam Guard confirmation.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
					
						<div class="offers_pending_status hidden" data-status="1">
							<div class="bundle_items_pending">
							</div>
							
							<div class="bg-main-transparent rounded-1 b-l2 flex items-center justify-center mt-2 text-center font-9 width-full inline-block">
								<div class="counter_content m-1">Expire in <span class="counter">00:00</span></div>
							</div>
							
							<div class="mt-2 font-8">
								<div>Your withdraw trade offer with id <span class="text-color">#<span class="offer_id"></span></span> and with security code <span class="text-color offer_code"></span> was sent. Please accept the trade offer until the time expires.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<a class="offer_trade" href="" target="_blank"><button type="button" class="site-button black">Trade Offer</button></a>
								<button type="button" class="site-button purple" data-modal="hide">Close</button>
							</div>
						</div>
						
						<div class="offers_pending_status hidden" data-status="2">
							<div class="bundle_items_pending">
							</div>
							
							<div class="mt-2 font-8">
								<div>Your withdraw trade offer with id <span class="text-color">#<span class="offer_id"></span></span> was successfully accepted.</div>
							</div>
							
							<div class="flex justify-center gap-1 mt-2">
								<button type="button" class="site-button purple" data-modal="hide">OK</button>
							</div>
						</div>
					</div>
				</div>
				
				<div class="offers_pending_method hidden" data-method="currency">
					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal medium" id="modal_select_bundle">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">Select Bundle</div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			<div class="modal-body text-left">
				<div class="bundle-items">
					
				</div>
			</div>
			<div class="modal-footer text-center">
				<div class="bg-light rounded-1 flex items-center justify-center mt-2 text-center inline-block">
					<div class="m-1">Bundle Total <div class='coins mr-1'></div><span id="bundle_total_amount">0</span> coins</div>
				</div>
				<button type="button" class="site-button purple" id="select_bundle" data-bundle="0" data-modal="hide">SELECT</button>
			</div>
		</div>
	</div>
</div>

<div class="modal medium" id="modal_view_bundle">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">View Bundle</div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			<div class="modal-body text-left">
				<div class="bundle-items">
					
				</div>
			</div>
			<div class="modal-footer text-center">
				<button type="button" class="site-button purple" data-modal="hide">CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modal_send_coins">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">Send Coins</div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			<div class="modal-body text-left">
				<div class="input_field bet_input_field transition" data-border="#de4c41">
					<div class="field_container">
						<div class="field_content">
							<input type="text" class="field_element_input" id="send_coins_amount" value="0.01">
							
							<div class="field_label transition">Send Amount</div>
						</div>
						
						<div class="field_extra">
						</div>
					</div>
					
					<div class="field_errors">
						<div class="field_error" data-error="required">This field is required</div>
						<div class="field_error" data-error="number">This field must be a number</div>
						<div class="field_error" data-error="greater">You must enter a greater value</div>
						<div class="field_error" data-error="lesser">You must enter a lesser value</div>
					</div>
				</div>
			</div>
			<div class="modal-footer text-center">
				<button type="button" class="site-button purple" data-modal="hide" id="send_coins_to_user" data-user="0">SEND</button>
				<button type="button" class="site-button purple" data-modal="hide">CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal medium" id="modal_unbox_result">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">Skins form <span id="unbox_result_case">none</span></div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			<div class="modal-body">
				<div class="flex row responsive">
					<div class="width-4 responsive">
						<img class="m-2" id="unbox_result_image" src="" style="width: calc(100% - 20px);">
					</div>
					
					<div class="width-8 responsive" style="word-break: break-all;">
						<div class="font-10" id="unbox_result_winning">none</div>
						
						<div class="mt-2 font-6">
							<div>Hash: <span id="unbox_result_hash">none</span></div>
							<div>Secret: <span id="unbox_result_secret">none</span></div>
							<div>Percentage: <span id="unbox_result_percentage">none</span>%</div>
							<div>Ticket: <span id="unbox_result_ticket">none</span></div>
							
							<button class="site-button purple mt-2" id="unbox_result_price" disabled="">0 coins</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="site-button purple" data-modal="hide">CLOSE</button>
			</div>
		</div>
	</div>
</div>

<div class="modal small" id="modal_self_exclusion">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">SELF EXCLUSION</div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			<div class="modal-body text-left">
				<div class="text-center mb-2">Do you wish to self exclusion?</div>
			
				<div class="grid split-column-2 gap-1 mb-2">
					<button class="site-button black" data-modal="hide">CANCEL</button>
					<button class="site-button purple" id="self_exclision" data-exclusion="" data-modal="hide">YES</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modal_recaptcha">
	<div class="modal-dialog flex justify-center items-center">
		<div class="modal-content rounded-1">
			<div class="modal-header flex items-center justify-between">
				<div class="modal-title text-upper">Verify Recaptcha</div>
				<div class="modal-close flex justify-center items-center rounded-0" data-modal="hide"><i aria-hidden="true" class="fa fa-times"></i></div>
			</div>
			<div class="modal-body font-8">
				<div class="flex justify-center" id="g-recaptcha"></div>
			</div>
		</div>
	</div>
</div>