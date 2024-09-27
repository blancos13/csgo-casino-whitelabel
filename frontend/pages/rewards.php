<div class="p-2">
	<div class="flex responsive column gap-1">
		<div class="grid responsive split-column-3 gap-1">

			<div class="bg-light-transparent rounded-1 b-l2 p-2">
				<div class="flex column justify-between height-full">
					<div class="text-bold font-8">Referral code</div>
					
					<div class="mt-2 mb-2">
						<div class="text-gray mb-2">Use any referral code and receive <span class="text-color"><?php echo getFormatAmountString($rewards['amounts']['refferal_code']); ?> Dls</span></div>
						
						<div class="input_field bet_input_field transition" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<?php if($rewards['rewards']['collected_code']) { ?>
									<input type="text" class="field_element_input" id="referral_redeem_code" value="Referred by <?php echo $rewards['rewards']['referral_owner']; ?>" readonly="">
									<?php } else { ?>
									<input type="text" class="field_element_input" id="referral_redeem_code" value="">
									<?php } ?>
									
									<div class="field_label transition">Referral Code</div>
								</div>
								
								<div class="field_extra">
								</div>
							</div>
							
							<div class="field_bottom">
								<?php if(!$rewards['rewards']['collected_code']) { ?>
								<div class="field_error" data-error="minimum_6_characters">This field must be a text with minimum 6 characters</div>
								<div class="field_error" data-error="only_letters_numbers">This field must contain only letters and numbers</div>
								<?php } ?>
							</div>
						</div>
					</div>
					
					<?php if($rewards['rewards']['collected_code']) { ?>
					<button class="site-button disabled purple width-full">Collected</button>
					<?php } else { ?>
					<button class="site-button purple width-full" id="collect_reward_referral_redeem">Collect</button>
					<?php } ?>
				</div>
			</div>
			
			<div class="bg-light-transparent rounded-1 b-l2 p-2">
				<div class="flex column justify-between height-full">
					<div class="text-bold font-8">Create referral code</div>
					
					<div class="mt-2 mb-2">
						<div class="text-gray">Create and share your referral code to give <span class="text-color"><?php echo getFormatAmountString($rewards['amounts']['refferal_code']); ?> Dls</span></div>
						
						<div class="input_field bet_input_field transition" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="text" class="field_element_input" id="referral_create_code" value="<?php if($rewards['rewards']['referral_have']) echo $rewards['rewards']['referral_code']; ?>">
									
									<div class="field_label transition">Create Code</div>
								</div>
								
								<div class="field_extra">
								</div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="minimum_6_characters">This field must be a text with minimum 6 characters</div>
								<div class="field_error" data-error="only_letters_numbers">This field must contain only letters and numbers</div>
							</div>
						</div>
					</div>
					
					<?php if($rewards['rewards']['referral_have']){ ?>
					<button class="site-button purple width-full" id="collect_reward_referral_create">Update</button>
					<?php } else { ?>
					<button class="site-button purple width-full" id="collect_reward_referral_create">Create</button>
					<?php } ?>
				</div>
			</div>
			
			<div class="bg-light-transparent rounded-1 b-l2 p-2">
				<div class="flex column justify-between height-full">
					<div class="text-bold font-8">Bonus code</div>
					
					<div class="mt-2 mb-2">
						<div class="input_field bet_input_field transition" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="text" class="field_element_input" id="bonus_redeem_code" value="">
									
									<div class="field_label transition">Bonus Code</div>
								</div>
								
								<div class="field_extra">
								</div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="minimum_6_characters">This field must be a text with minimum 6 characters</div>
								<div class="field_error" data-error="only_letters_numbers">This field must contain only letters and numbers</div>
							</div>
						</div>
					</div>
					
					<button class="site-button purple width-full" id="collect_reward_bonus_redeem">Collect</button>
				</div>
			</div>
			
			<?php if(in_array($site['ranks_name'][$user['rank']], $site['permissions']['bonus'])){ ?>
			<div class="bg-light-transparent rounded-1 b-l2 p-2">
				<div class="flex column justify-between height-full">
					<div class="text-bold font-8">Create bonus code</div>
					
					<div class="mt-2 mb-2">
						<div class="input_field bet_input_field transition" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="text" class="field_element_input" id="bonus_create_code" value="">
									
									<div class="field_label transition">Bonus Code</div>
								</div>
								
								<div class="field_extra">
									<button class="site-button" onclick="generate_code('#bonus_create_code', 6)"><i class="fa fa-random" aria-hidden="true"></i></button>
								</div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="minimum_6_characters">This field must be a text with minimum 6 characters</div>
								<div class="field_error" data-error="only_letters_numbers">This field must contain only letters and numbers</div>
							</div>
						</div>
						
						<div class="input_field bet_input_field transition" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="text" class="field_element_input" id="bonus_create_amount" value="0.01">
									
									<div class="field_label transition">Amount [0.01 - 10.00]</div>
								</div>
								
								<div class="field_extra">
									<button class="site-button changeshort_action" data-id="bonus_create_amount" data-fixed="1" data-action="+0.01">+0.01</button>
									<button class="site-button changeshort_action" data-id="bonus_create_amount" data-fixed="1" data-action="+0.10">+0.10</button>
									<button class="site-button changeshort_action" data-id="bonus_create_amount" data-fixed="1" data-action="+1.00">+1.00</button>
									<button class="site-button changeshort_action" data-id="bonus_create_amount" data-fixed="1" data-action="+10.00">+10.00</button>
								</div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="number">This field must be a number</div>
								<div class="field_error" data-error="greater">You must enter a greater value</div>
								<div class="field_error" data-error="lesser">You must enter a lesser value</div>
							</div>
						</div>
						
						<div class="input_field bet_input_field transition" data-border="#de4c41">
							<div class="field_container">
								<div class="field_content">
									<input type="text" class="field_element_input" id="bonus_create_uses" value="100">
									
									<div class="field_label transition">Maximum Users [1 - 500]</div>
								</div>
								
								<div class="field_extra">
									<button class="site-button changeshort_action" data-id="bonus_create_uses" data-fixed="0" data-action="+1">+1</button>
									<button class="site-button changeshort_action" data-id="bonus_create_uses" data-fixed="0" data-action="-1">-1</button>
									<button class="site-button changeshort_action" data-id="bonus_create_uses" data-fixed="0" data-action="+10">+10</button>
									<button class="site-button changeshort_action" data-id="bonus_create_uses" data-fixed="0" data-action="-10">-10</button>
								</div>
							</div>
							
							<div class="field_bottom">
								<div class="field_error" data-error="required">This field is required</div>
								<div class="field_error" data-error="number">This field must be a number</div>
							</div>
						</div>
					</div>
					
					<button class="site-button purple width-full" id="collect_reward_bonus_create">Create</button>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>