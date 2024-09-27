const fetch = require('node-fetch');
const fs = require('fs');
const { createHash, createHmac } = require('crypto');
const md5 = require('crypto-js/md5');
const merchantId = '';
const merchantKey = '';
const delay = 1500; // Delay in milliseconds
const providers = [
  'all'
];

const disabledGames = [];

const getAllProviderGames = () => {
  let list2 = [];

  console.log(`Start time: ${new Date().toGMTString()}`);

  this.getSingleGame = async (i, cb) => {
    for (let page = 1; page <= 5;) {
      const url = `https://staging.slotegrator.com/api/index.php/v1/games?page=${page}`;
      console.log(`Fetching data for page ${page}`);

      const nonce = md5(Math.random().toString());
      const time = Math.floor(Date.now() / 1000);

      const headers = {
        'X-Merchant-Id': merchantId,
        'X-Timestamp': time,
        'X-Nonce': nonce,
      };

      const requestParams = {
        page: page.toString(),
      };

      const mergedParams = { ...requestParams, ...headers };
      const sortedParams = Object.fromEntries(
        Object.entries(mergedParams).sort()
      );
      const hashString = new URLSearchParams(sortedParams).toString();

      const XSign = createHmac('sha1', merchantKey)
        .update(hashString)
        .digest('hex');

      const requestOptions = {
        method: 'GET',
        headers: {
          'X-Merchant-Id': merchantId,
          'X-Timestamp': time.toString(),
          'X-Nonce': nonce,
          'X-Sign': XSign,
          Accept: 'application/json',
          'Enctype': 'application/x-www-form-urlencoded',
        },
      };

      const response = await fetch(url, requestOptions);
      const gamesData = await response.json();

      if (gamesData.items && Array.isArray(gamesData.items)) {
        // Check if each game already exists in games array by comparing UUID
        for (const newGame of gamesData.items) {
          const isNewGame = games.every(
            (existingGame) => newGame.uuid !== existingGame.uuid
          );
          if (isNewGame) {
            const game = {
              name: newGame.name,
              identifier: newGame.uuid,
              identifier2: list[j].name,
              provider: newGame.vendor,
              producer: newGame.vendor,
              category: "slots",
              feature_group: "new"
            };

            if (providers.includes(game.provider) || providers.includes("all")) {
              if (disabledGames.includes(game.identifier) || disabledGames.includes(game.provider)) {
                console.log(`[${providers[i]}] Skipping ${game.title} (${game.identifier})`);
              } else {
                list2.push(game);
                console.log(`[${providers[i]}] Added game ${game.title} (${game.identifier})`);
              }
            }
          }
        }
      }

      await new Promise((resolve) => setTimeout(resolve, delay));
    }

    fs.writeFileSync(`b_games_all.json`, JSON.stringify(list2));
    fs.writeFileSync(`disabledGames.json`, JSON.stringify(disabledGames));

    console.log(`Loaded ${list2.length} games from ${providers[i]} (${list2.length} total)`);

    if (providers[i + 1]) {
      this.getSingleGame(i + 1, cb);
    } else {
      return cb(list2, disabledGames);
    }
  }

  this.getSingleGame(0, (games, disabledGames = []) => {
    games = [...games];

    fs.writeFileSync(`b_games_all.json`, JSON.stringify(games));
    fs.writeFileSync(`disabledGames.json`, JSON.stringify(disabledGames));

    console.log(`Done! Got a total of ${games.length} games from ${providers.length} providers`);
    console.log(`There is a total of ${disabledGames.length} not-working games:`);
    console.log(disabledGames);
  });
}

getAllProviderGames();
