csgo casino

frontend file inside /frotnend 
unzip2.rar


![image](https://github.com/user-attachments/assets/052deb46-fc5b-46b5-a69f-39066cf2b4e7)

![image](https://github.com/user-attachments/assets/fc7770c5-77a4-46df-93a4-0f4a5ca60dd5)
![image](https://github.com/user-attachments/assets/5067e671-36f5-4cb2-849a-7f3e6fbd1db0)
![image](https://github.com/user-attachments/assets/bbbfb64e-c299-460a-8124-5a8dacd48395)
![image](https://github.com/user-attachments/assets/27e7cde2-9542-47bc-8ee3-0a00beb75d69)
![image](https://github.com/user-attachments/assets/72bf8f61-0053-4449-adbd-65b0d5bd43c8)


config/config.php


<?php
//SITE
$port = 2053;
$root = '/';
$path = $_GET['page'];
$sitename = '127.0.0.1';
$sitekeywords = 'betdls, growgamble, growbet, coinflip, growtopia, gambling, casino, growtopia casino, jackpot, g2g, growcasino, site, bloxflip, csgo, cs, go, global, offensive, cs:go, kingdom, bet, gambling, gamble, fair, best, great, csgoempire, csgoatse, csgo500, crypto, btc, eth, roulette, experience';
$siteauthor = '127.0.0.1';
$siteurl = 'http://127.0.0.1';
$sitedescription = $sitename . ' - The best gamecurrency gambling platform!';
$api = "";
$apiToken = ""; //

$names_pages = array(
	'landing' => 'Landing',
	'roulette' => 'Roulette', 
	'crash' => 'Crash', 
	'coinflip' => 'Coinflip', 
	'jackpot' => 'Jackpot', 
	'dice' => 'Dice',
	'unbox' => 'Unbox',
	'minesweeper' => 'Minesweeper',
	'tower' => 'Tower',
	'plinko' => 'Plinko',
	'profile' => 'Profile',
	'rewards' => 'Rewards',
	'deposit' => 'Deposit',
	'withdraw' => 'Withdraw',
	'tos' => 'Terms Of Service',
	'support' => 'Support',
	'fair' => 'Provably Fair',
	'faq' => 'Frequently Asked Questions',
	'maintenance' => 'Maintenance',
	'history' => 'History',
	'leaderboard' => 'Leaderboard',
	'banned' => 'Banned',
	'reset' => 'Reset Password',
	'home' => 'Home',
	'esport' => 'Esports',
	'esports' => 'Esports',
	'esports_csgo' => 'CS:GO Esports',
	'esports_dota2' => 'Dota 2 Esports',
	'slots' => 'Slots',
	'slots_game' => 'Slots'
);

$ranks_name = array('0' => 'member', '1' => 'admin', '2' => 'moderator', '3' => 'helper', '4' => 'veteran', '5' => 'pro', '6' => 'youtuber', '7' => 'streamer', '8' => 'developer', '100' => 'owner');

$banip_excluded = array('owner');
$ban_excluded = array('owner');
$maintenance_excluded = array('owner', 'developer', 'admin', 'moderator', 'helper');
$bonus_allowed = array('owner', 'admin');

$level_start = 500;
$level_next = 0.235;

$steam = array(
	'apikey' => '54F7F20FCBF2669DF84E03BD7813C21A'
);

$recaptcha = array(
	'sitekey' => '6LdR1dQnAAAAADOwmpnHoRniQnCZVgDef8w6_5eO'
);

$google = array(
	'client' => '',
	'secret' => ''
);

$rewards_amounts = array(
	'google' => 0.10,
	'facebook' => 0.10,
	'steam' => 0.00,
	'refferal_code' => 0.10,
	'daily_start' => 0.15,
	'daily_step' => 0.02
);

$referral_commission_deposit = 0.10;

$affiliates_requirement = array(0.00, 200.00, 500.00, 750.00, 1000.00, 2000.00, 3500.00, 5000.00, 7500.00, 10000.00);
$affiliates_commission = array('deposit' => 1, 'bet' => 2);

$info = $db->query('SELECT `maintenance`, `maintenance_message` FROM `info`');
$rowinfo = $info->fetch();
$maintenance = $rowinfo['maintenance'];
$maintenance_message = $rowinfo['maintenance_message'];

$bets1 = $db->query('SELECT SUM(`amount`) AS `bets` FROM `users_transactions` WHERE `userid` = '.$db->quote($user['userid']).' AND `amount` < 0');
$rowbets = $bets1->fetch();

//SOCIAL MEDIA
$link_steam = 'http://steamcommunity.com/groups/';
$link_twitter = 'https://twitter.com/';

//HAVE SUPPORTS ACTIVE
$sql_support = $db->query('SELECT COUNT(*) AS `countSupports` FROM `support_tickets` WHERE (`from_userid` = '.$db->quote($user['userid']).' || `to_userid` = '.$db->quote($user['userid']).') AND `closed` = 0 AND `from_userid` = (SELECT `userid` FROM `support_messages` WHERE `support_id` = support_tickets.id ORDER BY `id` DESC LIMIT 1)');
$row_support = $sql_support->fetchAll();

//TRANSITION
$sql_tWin = $db->query('SELECT SUM(`amount`) AS `win` FROM `users_transactions` WHERE `userid` = '.$db->quote($user['userid']).' AND `amount` > 0');
$row_tWin = $sql_tWin->fetch();

$sql_tBet = $db->query('SELECT SUM(`amount`) AS `bet` FROM `users_transactions` WHERE `userid` = '.$db->quote($user['userid']).' AND `amount` < 0');
$row_tBet = $sql_tBet->fetch();

//BINDS
$sql_binds = $db->query('SELECT `bind` FROM `users_binds` WHERE `removed` = 0 AND `userid` = '.$db->quote($user['userid']));
$row_binds = $sql_binds->fetchAll();

$user_binds = array('google' => false, 'facebook' => false, 'steam' => false);
foreach($row_binds as $key => $value) {
	$user_binds[$value['bind']] = true;
}

//CALLBACK
$rewards['amounts'] = $rewards_amounts;

$affiliates['requirement'] = $affiliates_requirement;
$affiliates['commission'] = $affiliates_commission;

$profile['binds'] = $user_binds;
$profile['bet'] = -$row_tBet['bet'];
$profile['win'] = $row_tWin['win'];
$profile['have_supports'] = $row_support[0]['countSupports'];
$profile['bets'] = -$rowbets['bets'];

$ip = $_SERVER['DOCUMENT_ROOT'];

$site['root'] = $root;
$site['port'] = $port;
$site['recaptcha'] = $recaptcha;
$site['path'] = $path;
$site['name'] = $sitename;
$site['ip'] = $ip;
$site['keywords'] = $sitekeywords;
$site['author'] = $siteauthor;
$site['url'] = $siteurl;
$site['description'] = $sitedescription;
$site['link_steam'] = $link_steam;
$site['link_twitter'] = $link_twitter;

$site['ranks_name'] = $ranks_name;
$site['permissions'] = array(
	'banip' => $banip_excluded,
	'ban' => $ban_excluded,
	'maintenance' => $maintenance_excluded,
	'bonus' => $bonus_allowed
);

?>
