
<div class="flex row responsive gap-2 m-2">
	<div class="flex column gap-2 width-9 justify-center responsive">
		<div class="flex row gap-1 width-full" id="crash_history"></div>
		
		<div class="crash-graph relative bl-d4 bb-d4 p-2">
			<canvas id="crash_canvas"></canvas>
			
			<div class="crash-messages flex justify-center items-center">
				<div class="crash-message starting">
					<div class="font-10">Next round in...</div>
					<div class="font-25 text-bold"><span id="crash_timer">5.00</span>s</div>
				</div>
				<div class="crash-message progress">
					<div class="font-15">Crashed at</div>
					<div class="font-25 text-bold"><span id="crash_crash">1.00</span>x</div>
				</div>
			</div>
			
			<div class="crash-button flex justify-center items-center">
				<div class="flex justify-center items-center">
				<button class="site-button purple width-full snow" id="crash_bet">PLACE BET</button>

					<button class="site-button pink hidden width-full" id="crash_cashout">PLACE BET</button>
				</div>
			</div>
			
			<div class="crash-info">
			</div>
			
			<script type="text/javascript" src="<?php echo $site['root'];?>template/js/graph.js?v=<?php echo time();?>"></script>
		</div>
		
		<div class="flex gap-1 responsive">
			<div class="width-5 responsive">
				<div class="input_field bet_input_field transition-5" data-border="#de4c41">
					<div class="field_container">
						<div class="field_content">
							<input type="text" class="field_element_input" id="betamount_crash" oninput="checkAmountBet($(this).val(), 'crash')" value="0.02">
							
							<div class="field_label transition-5"><div class="input_coins coins mr-1"></div>Bet Amount</div>
						</div>
						
						<div class="field_extra">
						<button class="site-button betshort_action" data-game="crash" data-action="half">1/2</button>
						<button class="site-button betshort_action" data-game="crash" data-action="double">x2</button>
						<button class="site-button betshort_action" data-game="crash" data-action="max">Max</button>
						</div>
					</div>
					
					<div class="field_bottom">
						<div class="field_error" data-error="required">This field is required</div>
						<div class="field_error" data-error="number">This field must be a number</div>
						<div class="field_error" data-error="greater">You must enter a greater value</div>
						<div class="field_error" data-error="lesser_crash">You must enter a lesser value</div>
					</div>
				</div>
			</div>
			
			<input type="hidden" id="betauto_crash" value="0.00" />
			<div class="width-4 responsive">
<div class="input_field bet_input_field transition-5" data-border="#de4c41" style="border: 2px solid var(--site-color-bg-dark); color: unset;">
<div class="field_container">
<div class="field_content">
<input type="text" class="field_element_input" id="betauto_crash" value="0.00">
<div class="field_label transition-5 active">Auto Cashout (0 = disabled)</div>
</div>
<div class="field_extra">
          <!-- <button class="site-button changeshort_action" data-id="betauto_crash" data-fixed="1" data-action="-10.00">-10.00</button> -->
</div>
</div>
<div class="field_bottom">
<div class="field_error" data-error="required">This field is required</div>
<div class="field_error" data-error="number">This field must be a number</div>
</div>
</div>
</div>
		
			<div class="width-3 responsive">
				<div class="input_field bet_input_field width-3 transition-5" data-border="#de4c41">
					<div class="field_container">
						<div class="field_content">
							<input type="text" class="field_element_input" id="crash_info_public_seed" value="hidden" readonly>
							
							<div class="field_label transition-5">Public Seed</div>
						</div>
						
						<div class="field_extra">
							<button class="site-button" data-copy="input" data-input="#crash_info_public_seed">Copy</button>
						</div>
					</div>
					
					<div class="field_errors"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="width-3 responsive">
		<div class="table-container">
			<div class="table-header">
				<div class="table-row">
				<div class="table-column text-left">User</div>
					<div class="table-column text-left">@</div>
					<div class="table-column text-left">Bet</div>
					<div class="table-column text-left">Profit</div>
				</div>
			</div>
			
			<div class="table-body" id="crash_betlist">
				<div class="table-row history_message">
					<div class="table-column">No users in game</div>
					
				</div>
			</div>
		</div>
	</div>
</div>