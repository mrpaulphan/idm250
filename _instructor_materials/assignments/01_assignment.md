## Production WordPress Installation

## Overview
In this assignment, you will be setting up a WordPress site on your server and activating a live theme. The final outcome should be a default wordpress starter page

### Setting up WordPress on your server
- Create a folder called `idm250` on your server. Example: `{your-domain}/idm250`
- Create a Database:
  - Go to Bluehost.com -> Advanced tab -> MySQL Databases 
  - Create a new database and name it something meaningful. Example: "idm250_wp"
  - Go back to Bluehost.com -> Advanced tab -> MySQL Databases 
  - Scroll down to Users
  - Create a new user or choose an existing user 
  - This will be the database credentials for your wp-config.php file, so make sure to remember it!  
- Add user to database:
  - Go to Add User to Database
  - Add the user you created to the new database 
  - Grant all privileges 
  - Save 
- Verify the Database:
  - Go back to Bluehost.com -> Advanced tab -> PHPmyAdmin
  - Check if your new database exists
- Copy local files to the server:
   - Upload the local `idm250` folder (with all the WordPress files) to the `idm250` folder you created on your server.
   - Download the `wp-config.php` file from your server and edit it with your new database credentials (credentials you created above) and re-upload it.
   - Update the values in `DB_NAME`, `DB_USER`, `DB_PASSWORD`
- Server WordPress Installation:
  - Go to your URL `{your-domain}/idm250`. If you entered the correct credentials, you will go through the WordPress installation screen. If you get an "Error connecting to database" message, your credentials are incorrect.
  - Make sure to save the login information you created during the installation process.


### Brainstorm your final project
For your final project, you will be building and designing a fully custom WordPress theme.
Start by brainstorming ideas for your theme. Think about the audience it will serve, the features it will have, and the overall design aesthetic.
Once you have a few ideas, research similar websites to see what's already out there and what you can learn from them.
Write a short paragraph about your theme idea and include a few links to websites that inspire you.

## How to Submit
Submit a link to your new WordPress site under Assignment 1 on blackboard. When you visit the link, I should see a blank screen with just the text "idm250" on it. 

I should also be able to go to your {domain}/idm250/wp-admin and see a WP login screen. 

Example Submission 
```
Homepage: https://mrpaulphan.com/idm250
Login Page: https://mrpaulphan.com/idm250/wp-admin

Theme Brainstorm
* Write all your info here

Inspiration Example #1: 
Inspiration Example #2:
```
