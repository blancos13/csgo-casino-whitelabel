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
  } else if($paths[2] == 'sol') { 
    $c1 = 'Solana_logo';
    $c2 = 'Solana';
    $c3 = 'SOL';
  }
  else if($paths[2] == 'sol') { 
  $c1 = 'Solana_logo';
  $c2 = 'Diamond Locks';
  $c3 = 'DL';
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
      Deposit with
      <?php if($paths[2] == 'btc') { echo 'Bitcoin'; } ?>
      <?php if($paths[2] == 'eth') { echo 'Ethereum'; } ?>
      <?php if($paths[2] == 'ltc') { echo 'Litecoin'; } ?>
      <?php if($paths[2] == 'bch') { echo 'Bitcoin Cash'; } ?>
      <?php if($paths[2] == 'sol') { echo 'Solana'; } ?>
    </h3>

    <p class="desc">
      You will receive coins automatically after sending funds to the address displayed below.
    </p>

    <div class="input">
      <input type="text" readonly value="<?php if($addresses[$c3] == null) { echo 'Not generated yet'; } else { echo $addresses[$c3]; } ?>" id="crypto_address" onClick="this.setSelectionRange(0, this.value.length)" />
      <?php if($addresses[$c3] == null) { ?>
      	<button id="generate_address" data-currency="<?php echo $c3; ?>">Generate</button>
      <?php } ?>
    </div>

    <?php if($addresses[$c3] !== null) { ?>
    	<img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=<?php echo $addresses[$c3]; ?>" alt="" />
    <?php } else { ?>
    	<div id="qr_code_container"></div>
    <?php } ?>

  </div>
</div>