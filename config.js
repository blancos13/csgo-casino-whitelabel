const config = {
	is_prod: false,
	
	config_site: {
		name: '127.0.0.1',
		
		url: 'http://127.0.0.1',
		root: '/',

		flood: {
			time: 1000,
			count: 10
		},
		
		mailer: {
			service: '',
			email: '',
			password: ''
		},
		
		profile: {
			cooldown_verify: 2 * 10
		},
		
		recaptcha: {
			private_key: '6LeOvoMpAAAAANNwPhYre9Y7IEuSIibTE4Z0XXqn'
		},
		
		steam: {
			apikey: '54F7F20FCBF2669DF84E03BD7813C21A',
		},
	
		server_port: 2053,
		
		database: {
			database : 'growbet',
			host : '127.0.0.1',
			user : 'root',
			password : ''
		},
		
		level: {
			start: 500,
			next: 0.235,
		},
		
		level_send_coins: 100,
		
		rain: {
			start: 0.0000001,
			cooldown_start: 1 * 30,
			timeout_interval: { min: 10 * 30, max: 30 * 30 }
		},
		
		multiplier_wager_withdraw: 3 / 4,
		
		interval_amount: {
			roulette: { min: 0.000001, max: 10.00 },
			crash: { min: 0.000001, max: 10000.00 },
			jackpot: { min: 0.000001, max: 10.00 },
			coinflip: { min: 0.02, max: 1.00 },
			dice: { min: 0.000001, max: 10.00 },
			minesweeper: { min: 0.000001, max: 10.00 },
			tower: { min: 0.000001, max: 10.00 },
			plinko: { min: 0.02, max: 10.00 },
			send_coins: { min: 0.000001, max: 10.00 },
			tip_rain: { min: 0.000001, max: 10.00 },
			deposit_p2p: { min: 0.000001, max: 10.00 },
			deposit_skins: { min: 0.000001, max: 10.00 },
			withdraw_skins: { min: 0.000001, max: 10.00 },
			withdraw_crypto: { min: 0.000001, max: 10.00 }
		},
		
		interval_items: {
			deposit: { min: 1, max: 20 },
			withdraw: { min: 1, max: 20 },
			p2p: { min: 1, max: 20 }
		},
		
		rewards_amount: {
			google: 0.00,
			facebook: 0.00,
			steam: 0.00,
			
			refferal_code: 0.000001,
			
			daily_start: 0.00,
			daily_step: 0.00
		},
		
		affiliates_requirement: [0.00, 200.00, 500.00, 750.00, 1000.00, 2000.00, 3500.00, 5000.00, 7500.00, 10000.00],
		affiliates_commission: {
			deposit: 1,
			bet: 2
		},
		
		daily_requirements: {
			amount: 0.00,
			time: 7 * 24 * 60 * 60
		}
	},
	
	config_offers: {
		steam: {
			time_cancel_trade: 5 * 60,
			time_remove_pending: 1 * 60,
		
			cooldown_inventory: 1 * 60,
			
			withdraw_offset: 10,
			deposit_offset: 0,
			
			bots: [{
				active: false,
				steamid: '76561197963827564',
				password: '3th3rn3tR-',
				identity_secret: '0zwwKJroA9IcaUIqIPW7xfeuwko=',
				shared_secret: 'bPVe2tucFblfhwZnfTA4LCgQoi8=',
				can_trade: true,
				can_info: true,
				can_apikey: true
			}
				/*active: true,
				steamid: '76561198358180924',
				username: 'intense_acc_1',
				password: 'MM22ww11qq33!!',
				identity_secret: '+hX3OfLW+WNIrsDuo49APOAufL0=',
				shared_secret: '+LcU9I80f//8kH4jC/K6KtI/zmc=',
				can_trade: true,
				can_info: true,
				can_apikey: true
			}*/
			],
			
			prices: {
				apikey: {
					key: '7e2eedb8-bfb4-48a7-bb33-1763c562de5e',
					secret: 'T7S5V3QBMNTRRVZB'
				},
				
				cooldown_load: 1 * 60 * 60
			},
			
			games: {
				csgo: { game: { appid: 730, contextid: 2 } },
				dota2: { game: { appid: 570, contextid: 2 } },
				h1z1: { game: { appid: 433850, contextid: 1 } },
				rust: { game: { appid: 252490, contextid: 2 } },
				tf2: { game: { appid: 440, contextid: 2 } }
			},
			
			blacklist_items: {
				csgo: [],
				dota2: [],
				h1z1: [],
				rust: [],
				tf2: []
			}
		},
	
		coinpayments: {
			apikey: {
				public_key: '99ea1fa438462653190231481ca91757aceb636e7aa4fa423fcc8787cb2d5dbb',
				private_key: '090E7Fab08d17953015f504d5ef0fA10Ac8BD08d58cc7df28A69A731F016e190'
			},
			
			prices: {
				cooldown_load: 1 * 60 * 60
			},
			
			cooldown_check: 1 * 60,
			
			games: ['BTC', 'ETH', 'LTC', 'BCH', 'SOL']
		},
		
		p2p: {
			timer_confirm: 1 * 60,
			timer_send: 10 * 60
		}
	},
	
	config_games: {
		winning_to_chat: 100.00,
		
		games: {
			roulette: {
				active: true,
				timer: 20,
				cooldown_rolling: 10,
				total_bets: 2,
				normal_multiplier: 2,
				color_multiplier: 14,
			},
			
			crash: {
				active: true,
				timer: 5,
				max_profit: 100000.00,
				instant_chance: 10
			},
			
			coinflip: {
				active: true,
				commission: 10,
				cancel: true,
				timer_cancel: 1 * 15 * 15,
				timer_wait_start: 10,
				timer_delete: 1 * 10
			},
			
			jackpot: {
				active: true,
				commission: 5,
				timer: 30,
				total_bets: 5,
			},
			
			dice: { active: true},
			plinko: { active: false },
			
			unbox: {
				active: true,
				cases: require('./cases.js'),
			},
			
			minesweeper: { active: true },
			tower: { active: true },
			betMatches: { active: false },
			slots: { active: false }
		}
	},
	
	config_chat: {
		max_messages: 40,
		
		cooldown_massage: 1,
		
		channels: ['en', 'tr', 'lt', 'ru', 'fi', "id"],
	
		support: {
			message: 'If you find bugs contact us as soon as possible to solve them! With all due respect, the GrowBet.cc team.',
			cooldown: 24 * 60 * 60,
		},
		
		greeting: 'Please contact us if you need help. We don\'t resolve issues in the chat. Type /help for chat commands. With all due respect, the GrowBet.cc team.',
		
		message_double_xp: 'Weekly Double XP! Get double XP betting on our games until Sunday at 23:59PM GTM.',
		
		alerts: [
			 //'We added P2P trading system and loading the CSGO items wear. Check it out.'
		],
		
		notifies: [
			//'Before Deposit Please Set Your GrowID First on Profile Page.'
		]
	}
}

module.exports = config;