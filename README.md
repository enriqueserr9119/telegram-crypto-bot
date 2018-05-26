# Telegram Crypto-Currencies Bot
Simple **bot** to be aware of the top crypto-currencies values. The user will receive this info every *X* hours/minutes/seconds, as this parameter is configurable.

## Author
* **Enrique Serrano** - *Telecommunications Engineering student*

## APIs

* [Telegram](https://core.telegram.org/bots)
* [CoinMarketCap](https://coinmarketcap.com/api)

## Create a Telegram bot
1. Start a chat with **BotFather** on Telegram.
2. Create a new bot using the */newbot* command and follow the required steps.
![Create bot](https://preview.ibb.co/ieDWVo/first.png)
3. You will be given a token to access the Telegram API.
![Create bot](https://preview.ibb.co/g0TbwT/second.png)
4. Now start a chat with **get id** user on Telegram.
5. Get your chat ID using the */my_id* command.
![Get chat ID](https://preview.ibb.co/nyU5qo/third.png)

6. Congratulate yourself! You just created a new bot!

## Server work
1. Update the *index.php* file:
    * Put your bot **token** in the *$TOKEN* variable
    * Put your **chat ID** in the *CHAT_ID* variable
2. Upload all PHP files to your server.

## Connect your new bot and your server
1. A web hook must be set using the **setWebhook** Telegram API method:
**ht<span>tps://api.telegram.org:443/bot<<span>TOKEN>/setWebhook?url=<<span>WEBHOOK>**
2. Suppose yout token is **987654321:B5gf68Jfs4OpQ1xYWz7dE1bCj6sQRmTa3l8** and your server URL is **ht<span>tps://mydomain.com/index.php**
3. Your web hook would be: **ht<span>tps://api.telegram.org:443/bot987654321:B5gf68Jfs4OpQ1xYWz7dE1bCj6sQRmTa3l8/setWebhook?url=ht<span>tps://mydomain.com/index.php**
4. Copy/paste your link in a browser, press enter and let the magic happen.
5. You should receive this response:
{"ok":true,"result":true,"description":"Webhook was set"}
6. Cool! Now everything is ready.

## Make the bot start to work
![Get crypto-currencies info](https://preview.ibb.co/iPzibT/fourth.png)

## Terms & Conditions
All code in this project is provided for illustrative and educational purposes only. The code has not been thoroughly tested under all conditions. Therefore, no reliability is guaranteed and any damage resulting from using this tool is disclaimed. 
All code is provided to you "AS IS" without any warranties of any kind. You can redistribute it and/or modify it under your responsability.

