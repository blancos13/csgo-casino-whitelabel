<style>
  .navigation-bar {
    display: none; /* Başlangıçta gizlenmiş */
  }

  @media only screen and (max-width: 768px) {
    /* Sadece Android cihazlarda görünür hale getirilir */
    .navigation-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      bottom: 0;
      left: 0;
      width: 99%;
      height: 70px;
      background-color: rgb(24, 25, 33);
      box-shadow: rgba(0, 0, 0, 0.518) 2px 2px 30px 0px;
      color: rgb(220, 220, 220);
      z-index: 15;
    }


  .navigation-bar__menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-grow: 1;
  }

  .navigation-bar__menu-item {
    margin-left: 10px;
    display: flex;
    align-items: center;
  }

  .navigation-bar__menu-item button {
    background: none;
    border: none;
    color: inherit;
    cursor: pointer;
    font: inherit;
    padding: 0;
    text-decoration: none;
    font-size: 24px;
  }

  .navigation-bar__menu-item.button-bars {
    margin-right: 10px;
  }

  .navigation-bar__menu-item.button-bars button {
    font-size: 32px;
  }

  .navigation-bar__menu-item.button-comments button {
    font-size: 32px;
  }

  .navigation-bar__menu-item.button-wallet {
    flex-grow: 1;
    display: flex;
    justify-content: center;
  }
</style>
<?php if($user){ ?>
	<div class="header-panel rounded-1 flex items-center justify-center">

<div class="navigation-bar">
  <div class="navigation-bar__menu">
    <div class="navigation-bar__menu-item button-comments">
      <button class="site-button pullout_view" data-pullout="chat" onclick="openChat()"><i class="fa fa-comments" aria-hidden="true"></i></button>
    </div>
    <div class="navigation-bar__menu-item button-wallet">
      <button class="site-button" data-modal="show" data-id="#modal_rakes"><i class="fa fa-wallet"></i></button>
    </div>
    <div class="navigation-bar__menu-item button-bars">
      <button class="site-button pullout_view" data-pullout="menu"><i class="fa fa-bars" aria-hidden="true"></i></button>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="modal_rakes" class="modal">
  <div class="modal-content">
    <span class="close" data-modal="hide">&times;</span>
    <p>Modal content for Cüzdan</p>
  </div>
</div>

<script>
  function openChat() {
    // Burada chat açılışıyla ilgili işlemleri gerçekleştirin
    console.log("Chat açıldı!");
  }
</script>
</div>

<?php } ?>

<div class="header-max">
	<div class="header layout flex">
		<div class="header-logo flex justify-center items-center">
			<a class="flex justify-center items-center" href="<?php echo $site['root']; ?>">
				<img src="<?php echo $site['root']; ?>template/img/logo.png?v=<?php echo time(); ?>">
			</a>
		</div>
		
		<div class="header-menu-top flex items-center justify-between">
			<div class="inline-block">

			</div>

		</div>
		
		<div class="header-menu-bottom flex items-center justify-between">
			<div class="flex items-center gap-4 height-full" id="favorite_game">
				<div class="main-game header-menu-button hidden" data-game="crash">
					<a href="<?php echo $site['root']; ?>crash">
						<div class="header-side-button flex items-center <?php if($paths[0] == 'crash') echo 'active'; ?>">
							<img src="<?php echo $site['root']; ?>template/img/menu/crash.png?v=<?php echo time(); ?>">
							<div class="ml-1">Crash</div>
						</div>
					</a>
				</div>
				<div class="main-game header-menu-button hidden" data-game="jackpot">
					<a href="<?php echo $site['root']; ?>jackpot">
						<div class="header-side-button flex items-center <?php if($paths[0] == 'jackpot') echo 'active'; ?>">
							<img src="<?php echo $site['root']; ?>template/img/menu/jackpot.png?v=<?php echo time(); ?>">
							<div class="ml-1">Jackpot</div>
						</div>
					</a>
				</div>
				<div class="main-game header-menu-button hidden" data-game="coinflip">
					<a href="<?php echo $site['root']; ?>coinflip">
						<div class="header-side-button flex items-center <?php if($paths[0] == 'coinflip') echo 'active'; ?>">
							<img src="<?php echo $site['root']; ?>template/img/menu/coinflip.png?v=<?php echo time(); ?>">
							<div class="ml-1">Coinflip</div>
						</div>
					</a>
				</div>
				<div class="main-game header-menu-button hidden" data-game="unbox">
					<a href="<?php echo $site['root']; ?>unbox">
						<div class="header-side-button flex items-center <?php if($paths[0] == 'unbox') echo 'active'; ?>">
							<img src="<?php echo $site['root']; ?>template/img/menu/unbox.png?v=<?php echo time(); ?>">
							<div class="ml-1">Unbox</div>
						</div>
					</a>
				</div>
				<div class="main-game header-menu-button hidden" data-game="tower">
					<a href="<?php echo $site['root']; ?>tower">
						<div class="header-side-button flex items-center <?php if($paths[0] == 'tower') echo 'active'; ?>">
							<img src="<?php echo $site['root']; ?>template/img/menu/tower.png?v=<?php echo time(); ?>">
							<div class="ml-1">Tower</div>
						</div>
					</a>
				</div>
				
				<div class="header-menu-button">
					<div class="header-button-games flex items-center">
					<i class="fa fa-dice" style="margin-right: 5px;"></i> 
						<div class="mr-1">games</div>
						<i class="fa fa-caret-down" aria-hidden="true"></i>
						<div class="header-games">
							<div class="header-list-games bg-dark items-center justify-center p-2">
								<a href="<?php echo $site['root']; ?>roulette">
									<div class="header-list-game flex items-center justify-center rounded-1 transition-2">
										<img src="<?php echo $site['root']; ?>template/img/Roulette_Icon.svg?v=<?php echo time(); ?>">
										<div class="ml-1">Roulette</div>
									</div>
								</a>

								<a href="<?php echo $site['root']; ?>dice">
									<div class="header-list-game flex items-center justify-center rounded-1 transition-2">
										<img src="<?php echo $site['root']; ?>template/img/Dice_Icon.svg?v=<?php echo time(); ?>">
										<div class="ml-1">Dice</div>
									</div>
								</a>
								
								<a href="<?php echo $site['root']; ?>coinflip">
									<div class="header-list-game flex items-center justify-center rounded-1 transition-2">
										<img src="<?php echo $site['root']; ?>template/img/Coin_Icon.svg?v=<?php echo time(); ?>">
										<div class="ml-1">Coinflip</div>
									</div>
								</a>
								<a href="<?php echo $site['root']; ?>minesweeper">
									<div class="header-list-game flex items-center justify-center rounded-1 transition-2">
										<img src="<?php echo $site['root']; ?>template/img/Mines_Icon.svg?v=<?php echo time(); ?>">
										<div class="ml-1">Minesweeper</div>
									</div>
								</a>
								<a href="<?php echo $site['root']; ?>unbox">
									<div class="header-list-game flex items-center justify-center rounded-1 transition-2">
										<img src="<?php echo $site['root']; ?>template/img/Case_Icon.svg?v=<?php echo time(); ?>">
										<div class="ml-1">Unbox</div>
									</div>
								</a>
								<a href="<?php echo $site['root']; ?>tower">
								
									<div class="header-list-game flex items-center justify-center rounded-1 transition-2">
										<img src="<?php echo $site['root']; ?>template/img/Tower_Icon.svg?v=<?php echo time(); ?>">
										<div class="ml-1">Tower</div>
									</div>
								</a>
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

				<div class="header-menu-button">
					<a href="<?php echo $site['root']; ?>leaderboard">
						<div class="header-side-button flex items-center <?php if($paths[0] == 'leaderboard') echo 'active'; ?>">
						<i class="fa fa-trophy" style="margin-right: 5px;"></i> 
							<div class="ml-1">LeaderBoard</div>
						</div>
					</a>
				</div>

<div class="header-menu-button">
<div class="header-button-games flex items-center">
<i class="fa fa-gift" style="margin-right: 5px;"></i> 
<div class="mr-1">Rewards</div>
<i class="fa fa-caret-down" aria-hidden="true"></i>
<div class="header-games">
<div class="header-list-games bg-dark items-center justify-center p-2">
<div class="header-menu-button">
<a href="/rewards">
<div class="header-list-game flex items-center justify-center rounded-1 transition-2">
<div class="ml-1">Referral</div>
</div>
</a>
</div>

					<?php if($user['rank'] == 100 && in_array($user['userid'], $site['access']['admin'])){ ?><div class="header-menu-button inline-block mr-2"><a href="<?php echo $site['root']; ?>admin" class="text-success <?php if($paths[0] == 'admin') echo 'active'; ?>">Admin</a></div><?php } ?>
					<?php if($user['rank'] == 100 && in_array($user['userid'], $site['access']['dashboard'])){ ?><div class="header-menu-button inline-block mr-2"><a href="<?php echo $site['root']; ?>dashboard" class="text-success <?php if($paths[0] == 'dashboard') echo 'active'; ?>">Dashboard</a></div><?php } ?>



</div>
</div>
</div>
</div>


			</div>


			<div class="flex items-center gap-2 height-full pr-2">
				<?php if($user){ ?>
				<!-- <a class="header-panel" href="<?php echo $site['root'];?>deposit">
					<div class="bg-light rounded-1 b-l2 pl-2 pr-2 flex items-center justify-center height-full">
						<div class="coins mr-1" ></div>
						<span class="balance">0.00</span>
					</div>
				</a> -->
				<div class="header-panel bg-light rounded-1 flex items-center justify-center">
				</div>
				<a role="button" style="float:left;line-height: 20px;margin: 15px 0px;display: flex;-webkit-box-align: center;align-items: center;-webkit-box-pack: center;justify-content: center;border-radius: 3px;padding: 0px 14px;transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;border-width: 0px 0px 2px;border-top-style: initial;border-right-style: initial;border-left-style: initial;border-image: initial;border-bottom-style: solid;font-size: 14px;white-space: nowrap;overflow: hidden;cursor: pointer;border-color: rgb(41, 149, 84);box-shadow: rgb(51 193 108 / 15%) 0px 4px 4px;line-height: 30px;background-color: #00b549 !important;font-weight: 600;" class="rb" id="rake" data-modal="show" data-id="#modal_rake">Withdraw</a>
				<div class="balance-box">
					<div style="float:left; margin: 9px 0">
						<i class="mr-1 coins" style='width: 16px; height: 16px; margin-left: 10px; margin-top: 3px;'></i>
						<span class="balance">0.00</span>
						<span class="balance-hidden" style="display:none">(In play)</span>
					</div>

					<a class="rbs" data-modal="show" data-id="#modal_rakes"">
						<i class="fa fa-plus"></i>
					</a>
				</div>
						<div class="flex items-center gap-2 height-full pr-2">
				<?php if($user){ ?>
				<div class="level-bar flex items-center gap-1">
					<div class="text-bold">Lvl. <span id="level_count">0</span></div>
					
					<div class="progress-container rounded-0">
						<div class="progress-bar transition-2 linear rounded-0" id="level_bar" style="width: 0%;"></div>
						<div class="progress-content flex justify-center items_center text-bold"><span id="level_have">0</span> / <span id="level_next">100</span></div>
					</div>
				</div>
				
				<div class="pointer" data-modal="show" data-id="#modal_auth_settings"><i class="fa fa-cog white" aria-hidden="true"></i></div>
				
				<div class="pointer" data-modal="show" data-id="#modal_auth_logout"><i class="fa fa-sign-out text-colors" aria-hidden="true"></i></div>
				<?php } ?>
			</div>

				<a class="header-panel" href="<?php echo $site['root']; ?>profile">

					<div class="bg-main-transparent rounded-1 b-l2 pl-2 pr-2 flex items-center justify-center height-full">
						<img class="rounded-full" src="<?php echo $user['avatar']; ?>">
						
						<div class="ml-2"><?php echo $user['name']; ?></div>
					</div>
				</a>
				
				<?php }else{ ?>
				<div class="header-panel bg-light rounded-1 b-l2 flex items-center justify-center">
					
					<button class="site-button black height-full flex justify-center items-center pt-0 pb-0" data-modal="show" data-id="#modal_auth">LOGIN</button>
				</div>
				
				<?php } ?>
			</div>
		</div>
	</div>
</div>

<div class="header-min">
	<div class="header layout flex">
		<div class="header-logo justify-center">
			<a class="justify-center flex" href="<?php echo $site['root']; ?>">
				<img src="<?php echo $site['root']; ?>template/img/logo.png?v=<?php echo time(); ?>">
			</a>
		</div>
		
		<div class="flex items-center justify-end gap-2 height-full pr-2">
			<?php if($user){ ?>
					<div class="header-panel rounded-1 flex items-center justify-center">
					&nbsp;&nbsp;&nbsp;					&nbsp;&nbsp;&nbsp;


				</div>
				<a role="button" class="balancesss height-auto flex justify-center items-center pt-0 pb-0" style="line-height:30px; !important;font-weight:600" class="rb" data-modal="show" data-id="#modal_rake">Withdraw</a>

				<div class="header-menu-button" data-modal="show" data-id="#modal_rakes">
				<div class="balances bg-light rounded-1 b-l15 pl-2 pr-2 flex row items-center justify-center height-full relative">
						
							<div class="mr-1 coins"></div>
							<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
							<span class="balance" style="font-weight: 700; font-family: 'Roboto', sans-serif;">0.00</span>
						</div>
						</div>


			</a>
			<?php }else{ ?>
			<div class="header-panel rounded-1 flex items-center justify-center">
				<button class="site-button black height-full flex justify-center items-center pt-0 pb-0" data-modal="show" data-id="#modal_auth">LOGIN</button>
			</div>
			<?php } ?>
		
		</div>
	</div>
</div>