const fs = require("fs");

const files = fs.readdirSync(`./pages`);

 console.log(files); // Log the content of assets folder
