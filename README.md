# IDM250: Content Management Systems

## Overview
- [Course Syllabus](https://github.com/mrpaulphan/idm250/blob/master/instructor_materials/syllabus.md)

## Initial Setup
### Installing WordPress
- WordPress needs a database to store all website data, so you will need to create a database before we install WordPress. Don’t worry, it’s not as hard as it sounds.
- Create a Database for your current environment. For example, `local_idm250_wp`
- Download the latest version of WP from [wordpress.org](https://wordpress.org/download/)
- First you need to visit the WordPress.org website to download a copy of WordPress. After downloading the file, you need to unzip it.

Next, copy the wordpress folder inside and paste it into your servers root folder.

- Go to `http://{your-local-domain-here}/wp-admin`
-

## Getting Started Locally

### Using MAMP like services
[Tutorial here](https://www.wpbeginner.com/wp-tutorials/how-to-install-wordpress-locally-on-mac-using-mamp/)

### Using Docker
- Run `cp env.example .env`
- Run `cp docker-compose.example.yml docker-compose.yml`
- Fill out your new `.env` and `docker-compose.yml`
- Run `docker-compose up -d`


## Deploying your theme
- Once you get WP installed on your server, you should only need to transfer your theme files onto your server.
