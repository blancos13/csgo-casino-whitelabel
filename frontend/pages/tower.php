<div class="flex responsive justify-center mt-2">
	<div class="width-12 responsive tower-container">
		<div class="width-12 " style="float:left">
			<div class="width-12 responsive flex justify-center">
				<div class="tower-grid">
					<?php for($i = 9; $i >= 0; $i--){ ?>
						<?php for($j = 1; $j <= 3; $j++){ ?>
					<div class="tile flex justify-center items-center rounded-0 disabled" id="tower_tile" data-stage="<?php echo $i; ?>" data-button="<?php echo $j; ?>"><div class="vertical-center" id="tower_tile_amount"></div></div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
				
			<div class="width-12 responsive">
			<div class="dice">


			<div class="inputssss">

				<div class="input_field bet_input_field transition-5" data-border="#de4c41">
					
					<div class="field_container">
						
						<div class="field_content">
							<input type="text" class="field_element_input" id="betamount_tower" oninput="checkAmountBet($(this).val(), 'tower')" value="0.20">
							

						</div>
						</div>

						</div>
						
						<div class="field_extras">
					<button class="balancess" id="tower_bet">
    <i class="fa fa-play"></i>
	&nbsp;

    <span>Play</span>
  </button>
  <button class="hidden balancess" id="tower_cashout">
    <i class="fa fa-pause"></i>
	&nbsp;

    <span>Cashout</span>
  </button>
						</div>

						<div class="field_extra">
							
						<button class="site-button betshort_action" data-game="tower" data-action="half">1/2</button>
						<button class="site-button betshort_action" data-game="tower" data-action="double">x2</button>
						<button class="site-button betshort_action" data-game="tower" data-action="max">Max</button>
						</div>
					</div>
											
					<div class="field_bottom">
						<div class="field_error" data-error="required">This field is required</div>
						<div class="field_error" data-error="number">This field must be a number</div>
						<div class="field_error" data-error="greater">You must enter a greater value</div>
						<div class="field_error" data-error="lesser">You must enter a lesser value</div>
					</div>
				</div>
				
				</div>
				</div>



		
		<div class="width-12 table-container">
			<div class="table-header">
				<div class="table-row">
					<div class="table-column text-left">User</div>
					<div class="table-column text-left">Bet</div>
					<div class="table-column text-left">Stage</div>
					<div class="table-column text-left">Profit</div>
				</div>
			</div>
			
			<div class="table-body" id="tower_history"></div>
		</div>
	</div>
</div>