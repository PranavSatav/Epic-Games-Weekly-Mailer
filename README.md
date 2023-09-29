# [SETUP FOR V2] Epic-Games-Weekly-Mailer v2
1. Goto your favourite hosting [000webhost RECOMMENDED]
2. Upload all files from V2 Folder onto root directory.
3. Goto [RapidAPI](https://rapidapi.com/), make an account, search "Free Epic Games"
4. Subscribe to API (it's free!) 
5. Select API Language to PHP > cURL
6. Replace only these lines in api.php<br><br>
            "X-RapidAPI-Host: epic-free-games.p.rapidapi.com",<br>
            "X-RapidAPI-Key: ---------------"<br>
7. Goto mail.php, replace with your own email id..
   [ See V1 Documentation for CronJob ]

8. Structure - <br>
   --> api.php (Calls API)<br>
   --> mail.php (Sends Mail)<br>
   --> index.php (Displays Frontend)<br>
   --> epic_games_data.php (Saves API Response)<br>
<pre>
What's new in v2 :
            - New Homepage UI 
            - Now Game list is updated only on button click and not everytime
            - Everytime games are fetched, they are fetched offline without any API Call
            - Mail UI Redesigned</pre>
[SCREENSHOTS]<br><br>
<img src="https://i.imgur.com/ARdL063.png" width="80%"><br><h2>Email UI</h2>
<img src="https://i.imgur.com/LMcWLL2.png" width="30%">


# [SETUP FOR V1] Epic-Games-Weekly-Mailer
Get a mail of free Epic Games for the week.

🎲 How to set-up -
1. Goto your favourite hosting [000webhost RECOMMENDED]
2. Upload index.php, api.php, staticapi.php [optional] onto root directory.
3. Goto [RapidAPI](https://rapidapi.com/), make an account, search "Free Epic Games"
4. Subscribe to API (it's free!) 
5. Select API Language to PHP > cURL
6. Copy code, paste in api.php in directory.
7. Goto index.php, replace the api.php url link with the text 'PUT YOUR LINK HERE' [4 Places]
8. Replace abc@gmail.com, xyz@gmail.com with your own mail at last lines :)
9. Goto https://cron-job.org/en/ Sign Up, Create a Cron for every Week..

🪄 How to create a CRON -
1. Click on CREATE CRONJOB
2. Give title, put index.php link in URL => it will look like this [xyz.webhostapp.com/index.php]
3. Select CUSTOM >> Press & Hold CTRL and Select 1 & 7 & 14 & 21 & 28 Days
4. Press & Hold CTRL, Select all weeks, Select all Months
5. Press & Hold CTRL, Select 9 Hours & 30 Minutes
6. Done, Create the CRON, Enjoy with Lifetime Weekly Updates on your mail..

📟 Note - [ Note Depreceated ]
1. RapidAPI has HARD LIMIT of 10 Calls per Month (But we will call the api only 4 times a month)
2. Dont ever access index.php directly in your browser, as it will use 1 API CALL / 10 per month.
3. Check Email in SPAM, mark as Safe!
 
📡 For Developers -
--> Included staticapi.php file, a clone of actual api, where you can show your magic and make a website out of it..
