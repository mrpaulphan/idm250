## Server Website Setup

## Overview
Setup WordPress site on your server and have a live theme activated. Visiting your domain should lead me to a blank that says "IDM250" on it.

Setting up WP on your server
- Create a folder called idm250 on your server
	Example: `{domain}/idm250`
- Create a Database
  - Blueshost.com -> Advanced tab ->   MySQL Databases 
  -  Create new database and name it whatever you want. Mine is called "idm250_wp"
  -  Go back to Blueshost.com -> Advanced tab ->   MySQL Databases 
  -  Go down to users
  -  You can either create a new user or choose an existing user 
  -  This will be the database credentials for you wp.config file so don't forget this!  
-  Creating a new user
	- Hit create user
	- Go back
   - Go to add "user to database"
   -  Add the user you created to the new database 
   -  Grant all privilege 
   -  Save 
- Check DB
  -  Go back to Blueshost.com -> Advanced tab -> PHPmyAdmin
  - Check to see if your new DB has exist
-  Copy your local -> Server
   - Upload your local idm250 folder (With all the WP files) to the idm250 folder you created
once that's finished, download the `wp-config.php` file from your server and edit that with your new DB Credentials (credentials you created above) and re-upload it
update the values in `DB_NAME`, `DB_USER`, `DB_PASSWORD`
- Server WP Install
  - Go to your URL `{your-domain}/idm250`. If you put in the correct credentials, you will go through the WP installation screen. If you are getting "Error connecting to database", your credentials are wrong.
  - Make sure you save your login info you created during the installation screen.

- Create starter theme
  - Example of the starter theme [here](https://github.com/mrpaulphan/idm250/tree/master/public/wp-content/themes/portfolio-theme-2)
  - Copy your local starter theme that you crated and copy it to your servers in `idm250/wp-content/themes/`
  - Go to `{your-domain}/wp-admin` to login
  - Go to Appearance > themes and activate your theme that you uploaded

## How to Submit
Submit a link to your new WordPress site under Assignment 1 on blackboard. When you visit the link, I should see a blank screen with just the text idm250 on it. I should also be able to go to your {domain}/idm250/wp-admin and see a WP login screen. 
