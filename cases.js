const cases = {
	'garbage': {
		name: "Garbage",
		main_item: 0,
		price: 9.32,
		category: 2,
		items: [
			{
				name: " ★ Asiimov ★",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhjxszFJQJD_9W7m5a0mvLwOq7c2GlUucFwjruR9t7231DmrRc_NW7yItCRcVNoYVHS-APrwbzu0JK-78nXiSw0EnwDRM0",
				price: 269.56,
				chance:  0.01
			}, {
				name: " ★ Bloodsport ★",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhnwMzJemkV0966m4-PhOf7Ia_ummJW4NE_3rnHpdujjgK28kE5Y2Gid9WWdQ44YVHS-VS9wr--jJG6tJrAzCBh6D5iuyjdE47G3Q",
				price: 141.452,
				chance:  0.10
			}, {
				name: " ★ Asiimov ★",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FAR17PLfYQJD_9W7m5a0mvLwOq7c2G9SupUijOjAotyg3w2x_0ZkZ2rzd4OXdgRoYQuE8gDtyL_mg5K4tJ7XiSw0WqKv8kM",
				price: 129.98,
				chance:  0.50
			}, {
				name: "Redline",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FAR17PLfYQJB496klb-HnvD8J_XSkDkB68Ani-qQpNmkigC1-EM4azj7IIadc1NtZVvX-QLsl7-7gce4ot2XngYgmyTY",
				price: 79.01,
				chance:  1.50
			}, {
				name: "Ocean Drive",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PDdTjlH7du6kb-AnuP3O4Tck29Y_cg_3OvC8Nyj2AHi8xFsYG76JI_BIQM3ZF3U_QXtxLi5h5LvuJXPy3UyuD5iuyh1arArOw",
				price: 46.35,
				chance:  2.00
			}, {
				name: "Corticera",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FAR17PXJZzhO7eO3g5C0m_7zO6-fwjgDscYh3r7E9N2t0Q2y-EtoZTjydY6UdwU3MwnSq1O5x-jq1JO46YOJlyV_32xwKg",
				price: 17.05,
				chance:  5.00
			}, {
				name: "Copper Galaxy",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLOzLhRlxfbGTjxP09-5hJCOhcjyP77SnXhu5Mx2gv2P8d70jgzl_xFrZW71J46dcgI5YQqD_VG9yLrqgJC16c_OzSBhvCkl7WGdwUJRJd5CYQ",
				price: 15.96,
				chance:  11.00
			}, {
				name: "Hades",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoor-mcjhoyszAcDlH_-O7kYSCgvq6ZbiBzm0HvcMoj7CXrImh0QHl8kRlZT31cIaRJwJsY1mD_Vm3lem-jYj84soWbPY2DA",
				price: 15.25,
				chance:  8.00
			}, {
				name: "Asiimov",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6rwOANf1OD3fC0X09qzh5SCgfb4DL_Dn3tu5cB1g_zMu9n33waw-hZqMmvxLNLAJwBqYViDrFO8yObugZ_vtZmcyHcw7HYm5CrD30vg0FG2818",
				price: 3.60,
				chance:  22.00
			}, {
				name: "Pole Position",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotaDyfgZf0Ob3cicVueOmhoWInuT9PLXummJW4NE_i7nFpYn00VDt-RU6ajr2J4PGIFJvMFGD-lbvwL_mgMe5vZXImHph6D5iuyh7hT4MJQ",
				price: 0.72,
				chance:  31.89
			}
		]
	},

	'10_knife': {
		name: "10% Knife",
		main_item: 0,
		price: 36.55,
		category: 2,
		items: [
			{
				name: "★ Butterfly Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq4GaqPH7IbjUklRd4cJ5nqeQ8Nmn2gHtrUs-N2-hJ9WXdgRtNAyC-AW-kObojMO16s7IziBk6yIh-z-DyPjXSPu8",
				price: 1134.82,
				chance:  0.10
			}, {
				name: "★ StatTrak™ Flip Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1f_BYQJF_-OwmImbqPbhJ7TFhGRf4cZOhuDG_Zi70Azmr0NtYTylJdOSdw5taA3T-FLqleu7g5S8vs7NwCQx7ygr4Srdmgv3308RsNJJvQ",
				price: 517.50,
				chance:  0.10
			}, {
				name: "★ StatTrak™ Flip Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1f_BYQJD4eO7lZKJm_LLNbrVk1Rd4cJ5nqeUoo2s0Qe1qUVqYGuhddSSdgRqMlHWr1nrk7u705-0uJrKnyNm6CQq-z-DyE8NXPC5",
				price: 929.79,
				chance:  0.10
			}, {
				name: "★ StatTrak™ Stiletto Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfwOfBfThW-NOJlY20k_jkI7fUhFRB4MRij7r--YXygED6r0ZqZGv2JtKXJgc-ZlCG_1C2wOa6gZe4vs-cmyFrvyUr5S2LzRO10AYMMLIC5GArWw",
				price: 744.47,
				chance:  0.10
			}, {
				name: "★ StatTrak™ Bowie Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfwObaZzRU7dCJlo-cnvLLMrrukGpV7fp9g-7J4cLzjAzhrkA4aj-hcI6Sd1VvY13V-wO9xuvn05O_u5mcynE3uyYlsy2LgVXp1uhoh_bX",
				price: 849.97,
				chance:  0.10
			}, {
				name: "★ Bowie Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJfwObaZzRU7dCJlo-cnvLLMK7ulGRG4cBOhubT8LP5gVO8v11kYGn6JdDBJwc6MgrVrgTvyevnhZO7u5TNy3JgsidwsSvcl0axgBpKcKUx0hLQRnjW",
				price: 970.00,
				chance:  0.10
			}, {
				name: "★ Nomad Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf3ObcdTJN_uO3hb-EnvvxN4Tdn2xZ_Isoi-3Fpo2t0VCw-xZsYDr7IdCQcANsZ1HQ_AK7wrq5jZS17s6awXpmpGB8sjAKo-eb",
				price: 715.42,
				chance:  0.10
			}, {
				name: "Sticker",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulReQ0HdUuqkw9aDARJ_Kw1Rs7mpPgUugqebJjwTu4rikoSIk6TwZbmEkG4IvsRziL2UrdXxjAHg8xFuMjuncpjVLFGISpIKAA",
				price: 1.06,
				chance:  90.00
			}
		]
	},

	'10_glover': {
		name: "10% Glove",
		main_item: 0,
		price: 41.49,
		category: 2,
		items: [
			{
				name: "★ Sport Gloves",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DAQ1JmMR1osbaqPQJz7ODYfi9W9eOxhoWOmcj4OrzZglRd6dd2j6eSoNrzjgLm8kZoMm2nd4WRIVI_Nw3Sr1K3lOnv08Tuv8zKzXRruiYh-z-DyGOjExbS",
				price: 3923.00,
				chance:  0.05
			}, {
				name: "★ Sport Gloves",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DAQ1JmMR1osbaqPQJz7ODYfi9W9eO0mJWOqOf9PbDummJW4NFOhujT8om72FC1_Bc_MD-ncYaRcAA2MFzS8ljvleq9g8W8vMzLyiNiuCRz433Zygv3308allD_ww",
				price: 3681.00,
				chance:  0.05
			}, {
				name: "★ Specialist Gloves",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DAQ1h3LAVbv6mxFABs3OXNYgJR_Nm1nYGHnuTgDL7ck3lQ5MFOnezDyoD8j1yglB89IT6mOobEIQNoM16F_wfvl-7ujZC87szNyyZj6SMh4nfemRzjgxhKOuM7hfOACQLJqRHb_i0",
				price: 3582.00,
				chance:  0.05
			}, {
				name: "★ Sport Gloves",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DAQ1JmMR1osbaqPQJz7ODYfi9W9eO6nYeDg8j2P67UqWdY781lteXA54vwxlWw_EM-MW-hIIPHJwJqNVGGrwfswOe70Me-tJzAnyAyuCcit3jdnRepwUYbcIIuwIc",
				price: 2757.00,
				chance:  0.05
			}, {
				name: "★ Driver Gloves",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DAX1R3LjtQurWzLhRfwP_BcjZ95t2xgYGZqOD8Oq_UqWZU7Mxkh6fDoNzwjlCxqEQ5NmD2JNedcVBoMAvTrFLrlO68jcLq786dnXMyvyYg-z-DyEEZggY6",
				price: 809.45,
				chance:  0.15
			}, {
				name: "★ Specialist Gloves",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DAQ1h3LAVbv6mxFABs3OXNYgJR_Nm1nYGHnuTgDL7ck3lQ5MFOnezDyoHwjF2hpl0_N2D0cNeUewVoNFDX_QXqlbjvgJS6tZSfznZqv3Ir43aOzBWwiBgYcKUx0nVYY5H7",
				price: 699.00,
				chance:  0.15
			}, {
				name: "Driver Gloves",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DAX1R3LjtQurWzLhRfwP_BcjZ9_8i_gIODkvPLMbfQlWBu59dwhO7EyoD8j1yg5UU_N2j3d4OUIA9oY1vZrFS5krjthZC8v8zIyiNr7Clw4iqLzRG11ExSLrs4O1U5jwo",
				price: 318.75,
				chance:  0.35
			}, {
				name: "★ Moto Gloves",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DeXEl7NwdOtbagFABs3OXNYgJP48i5hoOSlPvxDK_Dn2xD4cFOiOXU8LP4jVC9vh5yYGmiIIGXegM8M1yF_le2lL3vjcK97ZTJz3JjuyEksHjZl0G2hB5Kb_sv26KrcNZLJg",
				price: 213.00,
				chance:  1.70
			}, {
				name: "Sealed Graffiti",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0qeODGEv7ZyTBPW-LSl1rSeJZN27f-TGgtrvBE27KReEuFlhRf6QB8mBANZvdPBJr1dNf5XW2kAJ-ERonYMhTfBuy2ngKbOVynHVGcZssHeVt",
				price: 0.03,
				chance:  90.00
			}
			
		]
	},
	'howling_case': {
		name: "Howling Case",
		main_item: 0,
		price: 329.38,
		category: 2,
		items: [
			{
				
				name: "StatTrak™ M4A4",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhjxszFJTwT09S5g4yCmfDLP7LWnn8f65Mli7DH9tXziQTgqUY4YmmnINSUJwQ-YVnT_wS7yOzngMW07ZrOmmwj5HeObpQQtA",
				price: 7953.00,
				chance:  0.50
			}, {
				name: "AWP",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FAZh7PLfYQJE7dizq4yCkP_gfe_UzzwJ7ZQiibqSrNr22VblrkBuNmD6J9fDIAI4YwuDqwK7xLrojZWi_MOeU-VNNgU",
				price: 1759.18,
				chance:  3.00
			}, {
				name: "Bright Water",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf1ObcTjVb09O1kYGFqPz6Or3UqWZU7Mxkh6eWotz3iVXn-RU6YDz0I9fDe1U7N1qD-FLtk-fs0ZC-75yayiBruSZ2-z-DyI5k6X-1",
				price: 1266.52,
				chance:  2.00
			}, {
				name: "M4A1-S",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uO3mr-ZkvPLPu_Qx3hu5Mx2gv2P8I-g0VHtqUNlNmimLdCRdFdoYFCErwC4xLu6jJbpuc-dnydq73Jw5GGdwULhEbgmIQ",
				price: 1057.90,
				chance:  4.90
			}, {
				name: "Sticker",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulReQ0HdUuqkw9aDAhJ8KhNbv7SiFANhxP2GcG5EvYmzzYXSz_TwMerQwj8HupAkj-3D99rwjQGwqhdlZjryJobDJhh-Pw8Cxs9Ybw",
				price: 70.00,
				chance:  50.00
			}, {
				name: "Howl Pin",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9Q1LO5kNoBhSQl-fROuh28rQR1R2KQFoprOrFA9vxP-GID8U6YTlltSIx6XwNe-BwD4Du5co2OqUpdv3jlLj8hY_N23ydYSUdBh-Pw8jlSKLgA",
				price: 70.00,
				chance:  39.15
		
			}
		]
	},
	'chemical_case': {
		name: "Chemical case",
		main_item: 0,
		price: 747.37,
		category: 2,
		items: [
			{
				name: "★ StatTrak™ M9 Bayonet",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5wOuqzNQhqKzvAALlRUvAuywD1NjA36tRcWN6x_685JV2t49fYNuJ5YtFEGZKFWKWGMF38u01s1PRbfMaK9inp3Xu7Oz8OCRTs8mkHzPjH5OVNhzgQCA",
				price: 10661.00,
				chance:  2.00
			}, {
				name: "★ StatTrak™ Butterfly Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq4GFqOP9NL7DqWRD6ct2j9bN_Iv9nBrmrRY_NmmhJIDEegJtNFqCqFfrwOu6gsXov8zKziRnuiB0537VlhG3n1gSOW5JgsIr",
				price: 1725.00,
				chance:  5.00
			}, {
				name: "★ Specialist Gloves",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DAQ1h3LAVbv6mxFABs3OXNYgJR_Nm1nYGHnuTgDL3Qkm5u5Mx2gv2PrN-l0AS3-ENsZzimJ4DEIwM8YQzY_Qfqwb2615a4uJvKy3trviUhtmGdwUI6U-OVuA",
				price: 3127.00,
				chance:  5.00
			}, {
				name: "★ Butterfly Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq4GKqPH1N77ummJW4NFOhujT8om7igW1qUY6MWqmcIadcw47MFrW_FK9xbzpgZ607Z7PzSAxuXYg53-Llwv330-D9XTwcQ",
				price: 1750.00,
				chance:  5.00
			}, {
				name: "Sticker",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulReX0vfFrTi0MPbVWJkJBRSpPT9f1BlhavMdTlE7Yjjl4Pfz6f2Zu3XzzoF7sN02OyYrNqk0QHs-0U_fSmtc3DzaKcx",
				price: 0.04,
				chance:  75.20
			}
		]
	},
		'clown_case': {
		name: "Clown Case",
		main_item: 0,
		price: 1330.70,
		category: 2,
		items: [
			{
				name: "★ Butterfly Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq4GGqOXhMaLum2pD6sl0g_PE8bP5gVO8v11kYjjzJ9KcIFI5YliDqAXoxbrsgpC9up_BmCM17nYh4SndzRLl1xwdcKUx0pRZROip",
				price: 26631.32,
				chance:  0.30
			}, {
				name: "★ Sport Gloves",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DAQ1JmMR1osbaqPQJz7ODYfi9W9eO0mJWOqOf9PbDummJW4NE_2u3Aooj2i1KwrkNoYW_7dYKXeg9vNVyC_AK-wb_thse9vpmYz3Bn7z5iuyh6Nk1_Sw",
				price: 17769.00,
				chance:  0.50
			}, {
				name: "★ Butterfly Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZYMUrsm1j-9xgEObwgfEh_nvjlWhNzZCveCDfIBj98xqodQ2CZknz5wOuqzNQhlZxDWBLJYUOwF_BHTHiIw-_hvXdC-44QKKE644ZzOZrN9M95KF5HYXPGONw2uv04-0qNbKJDapiq72ni6PD8NXhXj-GxVhqbZ7T7USzse",
				price: 9117.00,
				chance:  1.00
			}, {
				name: "★ StatTrak™ Butterfly Knife",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq4GGqPP7I6vdk3lu-M1wmeyTyo7KhF2zowdyYmqicYedI1NoYAvR-FK5yevmg5S6us_MnSFjuSYm4ivaykDigBtIa_sv26I7TRzdOw",
				price: 7803.00,
				chance:  1.50
			}, {
				name: "StatTrak™ AWP",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FAZt7P_BdjVW4tW4k7-KgOfLP7LWnn8fu5In27GYod2l21Gx-xU5MGDzddCRdw83Y1DW-VS3wu291JS76Z7PnWwj5Hc0AjJzVA",
				price: 1241.00,
				chance:  5.00
			}, {
				name: "Sealed Graffiti",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulReQ0HdUuqkw9bsXlRsdVUYsqiwLBBhweXNZThQ7dL4wNPTwPOhZb_QwmgJ65Z337HApNqijgewrRdpNmz1do-UegJqYFnR_k_-n7nVN0J7RA",
				price: 7.15,
				chance:  10.00
			}, {
				name: "Sealed Graffiti",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBGp8bDdU3mjaWaKfnTdSgZqTbNYPTmN-mL27OWXFzHLRb4kSl0BeqZQoGwYPZyOahVu3JlLpWL-lEtxEQQlZ8lSeR-30ykRYOkhnCURSO3h1Q",
				price: 2.16,
				chance:  10.00
			}, {
				name: "Sealed Graffiti",
				quality: "Covert",
				image: "https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulReQ0HdUuqkw9bsXlRsdVUYvbuyKg5p2PrEfThQoo7nw4PawPOgYuLTxTIJ7pco2LrE9o3x2wXh8hBtMDz0cdDGdgVqaQ3Oug_pgivBNf0",
				price: 2.59,
				chance:  11.40
			}
		]
	},
}
	module.exports = cases;