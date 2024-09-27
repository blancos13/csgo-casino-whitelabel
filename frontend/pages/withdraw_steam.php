<?php
  $c1 = 'btc_shop';
  $c2 = 'Bitcoin';
  $c3 = 'BTC';

  if($paths[2] == 'eth') { 
    $c1 = 'eth_shop';
    $c2 = 'Ethereum';
    $c3 = 'ETH';
  } else if($paths[2] == 'ltc') { 
    $c1 = 'ltc_shop';
    $c2 = 'Litecoin';
    $c3 = 'LTC';
  } else if($paths[2] == 'bch') { 
    $c1 = 'Bitcoin_Cash 1';
    $c2 = 'Bitcoin Cash';
    $c3 = 'BCH';
  }

  echo "<script>const CRC='".$c3."';</script>";
?>

<div class="deposit">
  <div class="btns">
    <button class="back" onclick="window.location='/deposit';">
      <i class="fa fa-arrow-left"></i>
      <span>Back to options</span>
    </button>
  </div>

  <div class="c">
    <h3>
	<div class="title-page flex items-center justify-center mb-1">Withdraw Diamond Locks</div>
	<div class="flex row justify-center gap-1 mb-4">
                        <button class="site-button black switch_panel active" data-id="grow" data-panel="manually" style="top: 0px;">Manually</button>
                    </div>


    <div class="converter c2">
    	<div class="i">
        <input style="padding:0 15px;width:100%" type="text" placeholder="World Name" value="" id="currency_withdraw_address" />
      </div>
    	<div class="i">
        <input style="padding:0 15px;width:100%" type="text" placeholder="GrowID" value="" id="currency_withdraw_address" />
      </div>
      <div class="c">
		<div class="title-page flex items-center justify-center mb-1">Amount</div>
    
    <input style="padding:0 15px;width:100%;text-align:center" placeholder="0.00 " value="0.00" id="currency_coin_from" oninput="offers_calculateCurrencyValue('from', CRC)" />
      </div>
    </div>
    <div class="input">
	<button class="site-button black switch_panel active" data-id="grow" data-panel="manually" style="top: 0px;">Donation Box</button>
      <button id="crypto_withdraw" data-game="<?php echo $c3; ?>">Withdraw</button>
    </div>
  </div>
</div>