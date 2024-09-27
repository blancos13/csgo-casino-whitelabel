<div class="flex responsive justify-center mt-2">
  <div class="width-8 responsive">
    <div class="width-12 flex responsive row items-center mb-2 gap-2">
      <div class="width-6 responsive flex justify-end">
        <div class="minesweeper-grid justify-center" id="minesweeper_bombs">
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="0"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="1"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="2"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="3"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="4"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="5"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="6"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="7"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="8"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="9"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="10"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="11"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="12"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="13"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="14"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="15"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="16"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="17"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="18"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="19"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="20"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="21"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="22"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="23"></div>
          <div class="bomb flex justify-center items-center rounded-0 disabled" data-bomb="24"></div>
        </div>
      </div>
      <div class="width-6 responsive">
        <div class="input_field bet_input_field transition-5" data-border="#de4c41" style="border: 2px solid var(--site-color-bg-dark); color: unset;">
          <div class="field_container">
           <div class="field_content">
              <input type="text" class="betamount field_element_input" id="betamount_minesweeper" data-game="minesweeper" value="0.02">
              <div class="field_label transition-5 active"><div class="input_coins coins mr-1"></div>Bet Amount</div>
            </div>
            <div class="field_extra">
              <button class="site-button betshort_action" data-game="minesweeper" data-action="0.02">+0.01</button>
              <button class="site-button betshort_action" data-game="minesweeper" data-action="0.10">+0.10</button>
              <button class="site-button betshort_action" data-game="minesweeper" data-action="1.00">+1.00</button>
              <button class="site-button betshort_action" data-game="minesweeper" data-action="10.00">+10.00</button>
            </div>
          </div>
          <div class="field_bottom">
            <div class="field_error" data-error="required">This field is required</div>
            <div class="field_error" data-error="number">This field must be a number</div>
            <div class="field_error" data-error="greater">You must enter a greater value</div>
            <div class="field_error" data-error="lesser">You must enter a lesser value</div>
          </div>
        </div>
        <div class="input_field bet_input_field transition-5" data-border="#de4c41" style="border: 2px solid var(--site-color-bg-dark); color: unset;">
          <div class="field_container">
            <div class="field_content">
              <input type="text" class="field_element_input" id="bombsamount_minesweeper" value="5">
              <div class="field_label transition-5 active">Bombs Amount</div>
            </div>
            <div class="field_extra">
              <button class="site-button changeshort_action" data-fixed="0" data-action="-1">-1</button>
              <button class="site-button changeshort_action" data-fixed="0" data-action="1">+1</button>
            </div>
          </div>
          <div class="field_bottom">
            <div class="field_error" data-error="required">This field is required</div>
            <div class="field_error" data-error="number">This field must be a number</div>
            </div> 
            <h4 style="hidden margin-top:20px">-</h4>
    
    <div class="inputsss">
      
      <div class="button-group">
        <button class="balancess" id="minesweeper_bet">
          <i class="fa fa-play"></i>
          &nbsp;
          <span>Play</span>
        </button>
        <button class="balancess" id="minesweeper_cashout">
          <i class="fa fa-pause"></i>
          <span>Cashout</span>
        </button>
      </div>
      </div>

  </div>
  </div>
  </div>




    <div class="table-container">
      <div class="table-header">
        <div class="table-row">
          <div class="table-column text-left">User</div>
          <div class="table-column text-left">Bet</div>
          <div class="table-column text-left">Bombs</div>
          <div class="table-column text-left">Profit</div>
        </div>
      </div>
      <div class="table-body" id="minesweeper_history"></div>
    </div>
  </div>
</div>



