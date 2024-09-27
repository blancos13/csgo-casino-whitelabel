<div class="p-2">
	<?php if(in_array($site['ranks_name'][$user['rank']], $site['profile']) || !$response['looking'] || !$response['profile']['private']){ ?>
	</div>
	
	<?php
	
	$level = calculateLevel($user['xp']);	
	$level_class = array('tier-steel', 'tier-bronze', 'tier-silver', 'tier-gold', 'tier-diamond')[intval($level['level'] / 25)];
	$rank_name = $site['ranks_name'][$user['rank']];	
	?>
	
	<div class="switch_content" data-id="profile" data-panel="summary">
		<div class="flex column responsive gap-1">
			<div class="grid split-column-2 responsive gap-1">
				<div class="flex column gap-2 bg-light-transparent rounded-1 b-l2 p-2">
					<div class="flex column justify-center gap-2">
						<div class="avatar-field <?php echo $level_class; ?>">
							<div class="inline-block relative">
								<img class="avatar icon-large rounded-full" src="<?php echo $user['avatar']; ?>" alt="" class="avatar" />
							</div>
						</div>
						
						<div>
							<div class="flex justify-center gap-2 text-upper text-bold ellipsis">
								<div class="chat-link-<?php echo $rank_name; ?>"><?php echo $rank_name; ?></div>
								
								<div><?php if($response['profile']['anonymous'] && !in_array($site['ranks_name'][$user['rank']], $site['permissions']['profile']) && $response['looking']) { ?>[anonymous]<?php } else { ?><?php echo $response['profile']['name']; ?><?php } ?></div>
							</div>
							
							<div class="ellipsis font-6"><?php echo $user['name']; ?> (<?php echo $user['userid']; ?>)</div>
						</div>
					</div>
					
					<div class="flex justify-center">
					</div>
					
					<div class="flex responsive justify-center items-center">
						<div class="flex column items-center justify-center">
							<div class="text-color font-10"><?php echo getFormatAmountString($profile['win']);?></div>
							<div>WIN</div>
						</div>
						
						<div class="bg-main-transparent rounded-full b-m2 p-3 ml-2 mr-2 flex justify-center items-center text-bold font-8"><div class="absolute">-</div></div>
						
						<div class="flex column items-center justify-center">
							<div class="text-color font-10"><?php echo getFormatAmountString($profile['bet']);?></div>
							<div>BET</div>
						</div>
						
						<div class="bg-main-transparent rounded-full b-m2 p-3 ml-2 mr-2 flex justify-center items-center text-bold font-8"><div class="absolute">=</div></div>
						
						<div class="flex column items-center justify-center">
							<div class="text-color font-10"><?php echo getFormatAmountString($profile['win'] - $profile['bet']);?></div>
							<div>PROFIT</div>
						</div>
					</div>
				</div>
				
				<div class="bg-light-transparent rounded-1 b-l2 p-2">
					<div class="text-left">
						<?php if(!$response['looking']){ ?>
							<div class="font-8">Gain xp by playing any of our games!</div>
							<div class="font-12">Lvl <?php echo $level['level']; ?>.</div>
							
							<div class="font-8">You got <?php echo $level['have']; ?> / <?php echo $level['next']; ?> of the xp needed to level up.</div>
							<div class="font-8">Level completion status: <?php echo number_format(roundedToFixed(($level['have'] - $level['start']) / ($level['next'] - $level['start']) * 100, 2), 2, '.', ''); ?>%.</div>
						<?php } else { ?>
							<div class="font-12"><?php if($response['profile']['anonymous'] && !in_array($site['ranks_name'][$user['rank']], $site['permissions']['profile']) && $response['looking']) { ?>[anonymous]<?php } else { ?><?php echo $response['profile']['name']; ?><?php } ?> Lvl <?php echo $level['level']; ?>.</div>
							
							<div class="font-8"><?php if($response['profile']['anonymous'] && !in_array($site['ranks_name'][$user['rank']], $site['permissions']['profile']) && $response['looking']) { ?>[anonymous]<?php } else { ?><?php echo $response['profile']['name']; ?><?php } ?> has <?php echo $level['have']; ?> / <?php echo $level['next']; ?> xp needed for the next level.</div>
							<div class="font-8">Level completion status: <?php echo number_format(roundedToFixed(($level['have'] - $level['start']) / ($level['next'] - $level['start']) * 100, 2), 2, '.', ''); ?>%.</div>
						<?php } ?>
					</div>
					
					<div class="progress-container small width-full rounded-0 mt-2">
						<div class="progress-bar rounded-0" style="width: <?php echo number_format(roundedToFixed(($level['have'] - $level['start']) / ($level['next'] - $level['start']) * 100, 2), 2, '.', ''); ?>%"></div>
					</div>
				</div>
			</div>

			<div class="grid split-column-2 responsive gap-1">
				<div class="bg-light-transparent rounded-1 b-l2 p-2">
					<div class="title-page flex items-center justify-center mb-2">Profile Overview</div>
					
					<?php if(!$response['looking']){ ?>
					<div class="flex column items-start gap-1">
						
						
						<div class="flex column items-start gap-1">
							<div class="text-left font-8">Profile Status - <?php if($response['profile']['verified']) { ?><span class="text-success">Verified</span><?php } else { ?><span class="text-danger">Unverified</span><?php } ?></div>
							<?php if(!$response['profile']['verified']) { ?>
							<div class="text-left">If you haven't not recieved a verification e-mail you can resend it.</div>
							<button class="site-button purple" id="resend_verify">Send verification e-mail</button>
							<?php } ?>
						</div>
					
						<div class="flex row gap-2">
							<div class="switch_field height-full transition-5">
								<div class="field_container">
									<div class="field_content">
										<input type="checkbox" class="field_element_input change-setting" data-setting="sounds">
										
										<div class="field_switch">
											<div class="field_switch_bar"></div>
										</div>
										
										<div class="field_label active transition-5">Sounds</div>
									</div>
									
									<div class="field_extra"></div>
								</div>
								
								<div class="field_bottom"></div>
							</div>
							
							<div class="text-left mt-2">If enabled, Game sounds will be ON.</div>
						</div>
					
						
						<div class="flex column items-start gap-1 width-full">
							<div class="text-left font-8">Self Exclusion - <?php if($response['profile']['exclusion'] > time()) { ?><span class="text-success">Active - Expires <?php echo makeDate($response['profile']['exclusion']); ?></span><?php } else { ?><span class="text-danger">Inactive</span><?php } ?></div>
							
							<div class="grid split-column-3 gap-1 width-full">
								<button class="site-button purple self_exclision" data-exclusion="24hours">24 hours</button>
								<button class="site-button purple self_exclision" data-exclusion="7days">7 days</button>
								<button class="site-button purple self_exclision" data-exclusion="30days">30 days</button>
							</div>
							
							<div class="flex column items-start gap-1 text-left">
								<div class="text-indent-1">By enabling self exclusion you will not be able to claim rewards, place bets or deposit until the restriction expires.</div>
								<div>The chat option and Withdrawals will remain as usual. Use this option if you would like to take a break for some time. If you wish to do custom restrictions please contact us on Discord by creating a ticket or on the website.</div>
								<div class="text-danger">While active, we will NOT remove the self exclusion for ANY reason, even if you change your mind.</div>
							</div>
						</div>
					</div>
					<?php } else { ?>
					<div class="flex column items-start gap-2">
						<div class="text-left font-8">Registed - <?php echo makeDate($response['profile']['time_create']) ?></div>
						
						<?php if(in_array($site['ranks_name'][$user['rank']], $site['permissions']['profile'])){ ?>
						<div class="text-left font-8">Balance - <span class="text-success"><?php echo getFormatAmountString($response['balance']); ?></span></div>
						<?php } ?>
						
						<?php if(in_array($site['ranks_name'][$user['rank']], $site['permissions']['profile'])){ ?>
						<div class="text-left font-8">Available Withdraw - <span class="text-success"><?php echo getFormatAmountString($response['profile']['available']); ?></span></div>
						<?php } ?>
						
						<?php if(in_array($site['ranks_name'][$user['rank']], $site['permissions']['profile'])){ ?>
						<div class="text-left font-8">Profile Status - <?php if($response['profile']['verified']) { ?><span class="text-success">Verified</span><?php } else { ?><span class="text-danger">Unverified</span><?php } ?></div>
						<div class="text-left font-8">Anonymous - <?php if($response['profile']['anonymous']) { ?><span class="text-danger">Active</span><?php } else { ?><span class="text-success">Inactive</span><?php } ?></div>
						<div class="text-left font-8">Private Mode - <?php if($response['profile']['private']) { ?><span class="text-danger">Private</span><?php } else { ?><span class="text-success">Public</span><?php } ?></div>
						
						<div class="text-left font-8">Bind Account Steam - <?php if($response['user_binds']['steam']['bind']) { ?><a class="text-success" href="https://steamcommunity.com/profiles/<?php echo $response['user_binds']['steam']['bindid']; ?>" target="_blank">Yes (<?php echo $response['user_binds']['steam']['bindid']; ?>)</a><?php } else { ?><span class="text-danger">No</span><?php } ?></div>
						<div class="text-left font-8">Bind Account Google - <?php if($response['user_binds']['google']['bind']) { ?><span class="text-success">Yes (<?php echo $response['user_binds']['google']['bindid']; ?>)</span><?php } else { ?><span class="text-danger">No</span><?php } ?></div>
						<div class="text-left font-8">Bind Account Facebook - <?php if($response['user_binds']['facebook']['bind']) { ?><span class="text-success">Yes (<?php echo $response['user_binds']['facebook']['bindid']; ?>)</span><?php } else { ?><span class="text-danger">No</span><?php } ?></div>
						
						<?php if($response['profile']['exclusion'] > time()) { ?>
						<div class="text-left font-8 text-success">Self Exclusion Active - Expires <?php echo makeDate($response['profile']['exclusion']); ?></div>
						<?php } else { ?>
						<div class="text-left font-8 text-danger">Self Exclusion Inactive</div>
						<?php } ?>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
				
				<?php if(!$response['looking']){ ?>
				<div class="bg-light-transparent rounded-1 b-l2 p-2">
					<div class="title-page flex items-center justify-center mb-2">Wallet Settings</div>
				
					<div class="flex column items-start gap-2">
						<div class="input_field transition" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="text" class="field_element_input" id="steam_tradelink" value=<?php echo ($user['tradelink']);?>>
									<div class="field_label transition">Wallet Address</div>
								</div>
								
								<div class="field_extra">
									<button class="site-button purple" id="save_steam_tradelink">Confirm</button>
								</div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	
	
	<div class="switch_content hidden" data-id="profile" data-panel="stats">
		<div class="flex responsive gap-1">
			<div class="width-6 responsive text-left">
				<div class="text-color mb-1 font-8">Games Stats</div>
				
				<div class="table-container">
					<div class="table-header">
						<div class="table-row">
							<div class="table-column text-left">Game</div>
							<div class="table-column text-left">Bets</div>
							<div class="table-column text-left">Wins</div>
							<div class="table-column text-left">Profit</div>
						</div>
					</div>
					
					<div class="table-body">
						<div class="table-row">
							<?php $profit_roulette = $response['games_stats']['roulette']['win'] - $response['games_stats']['roulette']['bet']; ?>
							
							<div class="table-column text-left">Roulette</div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['roulette']['bet']); ?></div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['roulette']['win']); ?></div>
							<div class="table-column text-left <?php echo $profit_roulette > 0 ? 'text-success' : 'text-danger'; ?>"><?php echo getFormatAmountString($response['games_stats']['roulette']['win'] - $response['games_stats']['roulette']['bet']); ?></div>
						</div>
						
						<div class="table-row">
							<?php $profit_crash = $response['games_stats']['crash']['win'] - $response['games_stats']['crash']['bet']; ?>
							
							<div class="table-column text-left">Crash</div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['crash']['bet']); ?></div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['crash']['win']); ?></div>
							<div class="table-column text-left <?php echo $profit_crash > 0 ? 'text-success' : 'text-danger'; ?>"><?php echo getFormatAmountString($response['games_stats']['crash']['win'] - $response['games_stats']['crash']['bet']); ?></div>
						</div>
						
						<div class="table-row">
							<?php $profit_jackpot = $response['games_stats']['jackpot']['win'] - $response['games_stats']['jackpot']['bet']; ?>
							
							<div class="table-column text-left">Jackpot</div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['jackpot']['bet']); ?></div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['jackpot']['win']); ?></div>
							<div class="table-column text-left <?php echo $profit_jackpot > 0 ? 'text-success' : 'text-danger'; ?>"><?php echo getFormatAmountString($response['games_stats']['jackpot']['win'] - $response['games_stats']['jackpot']['bet']); ?></div>
						</div>
						
						<div class="table-row">
							<?php $profit_coinflip = $response['games_stats']['coinflip']['win'] - $response['games_stats']['coinflip']['bet']; ?>
							
							<div class="table-column text-left">Coinflip</div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['coinflip']['bet']); ?></div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['coinflip']['win']); ?></div>
							<div class="table-column text-left <?php echo $profit_coinflip > 0 ? 'text-success' : 'text-danger'; ?>"><?php echo getFormatAmountString($response['games_stats']['coinflip']['win'] - $response['games_stats']['coinflip']['bet']); ?></div>
						</div>
						
						<div class="table-row">
							<?php $profit_unbox = $response['games_stats']['unbox']['win'] - $response['games_stats']['unbox']['bet']; ?>
							
							<div class="table-column text-left">Unbox</div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['unbox']['bet']); ?></div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['unbox']['win']); ?></div>
							<div class="table-column text-left <?php echo $profit_unbox > 0 ? 'text-success' : 'text-danger'; ?>"><?php echo getFormatAmountString($response['games_stats']['unbox']['win'] - $response['games_stats']['unbox']['bet']); ?></div>
						</div>
						
						<div class="table-row">
							<?php $profit_tower = $response['games_stats']['tower']['win'] - $response['games_stats']['tower']['bet']; ?>
							
							<div class="table-column text-left">Tower</div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['tower']['bet']); ?></div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['games_stats']['tower']['win']); ?></div>
							<div class="table-column text-left <?php echo $profit_tower > 0 ? 'text-success' : 'text-danger'; ?>"><?php echo getFormatAmountString($response['games_stats']['tower']['win'] - $response['games_stats']['tower']['bet']); ?></div>
						</div>
					</div>
					
					<div class="table-footer">
						<div class="table-row">
							<?php $profit_total = ($response['games_stats']['roulette']['win'] + $response['games_stats']['crash']['win'] + $response['games_stats']['jackpot']['win'] + $response['games_stats']['coinflip']['win'] + $response['games_stats']['coinflip']['refund']) - ($response['games_stats']['roulette']['bet'] + $response['games_stats']['crash']['bet'] + $response['games_stats']['jackpot']['bet'] + $response['games_stats']['coinflip']['bet'] + $response['games_stats']['unbox']['bet'] + $response['games_stats']['tower']['bet']); ?>
							
							<div class="table-column text-left">Total:</div>
							<div class="table-column text-left text-color"><?php echo getFormatAmountString($response['games_stats']['roulette']['bet'] + $response['games_stats']['crash']['bet'] + $response['games_stats']['jackpot']['bet'] + $response['games_stats']['coinflip']['bet'] + $response['games_stats']['unbox']['bet'] + $response['games_stats']['tower']['bet']); ?></div>
							<div class="table-column text-left text-color"><?php echo getFormatAmountString($response['games_stats']['roulette']['win'] + $response['games_stats']['crash']['win'] + $response['games_stats']['jackpot']['win'] + $response['games_stats']['coinflip']['win'] + $response['games_stats']['coinflip']['refund'] + $response['games_stats']['unbox']['win'] + $response['games_stats']['tower']['win']); ?></div>
							<div class="table-column text-left <?php echo $profit_total > 0 ? 'text-success' : 'test-danger'; ?>"><?php echo getFormatAmountString($profit_total); ?></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="width-6 responsive text-left">
				<div class="text-color mb-1 font-8">Offers stats</div>
				
				<div class="table-container">
					<div class="table-header">
						<div class="table-row">
							<div class="table-column text-left">Offer</div>
							<div class="table-column text-left">Count</div>
							<div class="table-column text-left">Total</div>
						</div>
					</div>
					
					<div class="table-body">
						<div class="table-row">
							<div class="table-column text-left">Deposit</div>
							<div class="table-column text-left"><?php echo $response['offers_stats']['deposit']['count']; ?></div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['offers_stats']['deposit']['total']); ?></div>
						</div>
						
						<div class="table-row">
							<div class="table-column text-left">Withdraw</div>
							<div class="table-column text-left"><?php echo $response['offers_stats']['withdraw']['count']; ?></div>
							<div class="table-column text-left"><?php echo getFormatAmountString($response['offers_stats']['withdraw']['total']); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } else { ?>
	<div>This profile is private.</div>
	<?php } ?>