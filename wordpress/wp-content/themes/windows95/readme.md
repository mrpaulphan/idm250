# Usefull Wordpress Functions/Snippets

## Display Homepage Url
The home_url template tag retrieves the home URL for the current site, optionally with the $path argument appended. The function determines the appropriate protocol, "https" if is_ssl() and "http" otherwise. If the $scheme argument is "http" or "https" the is_ssl() check is overridden. 

#### Usage
`<?php echo home_url(); ?>`

#### Example 
`<h1><a href="<?php echo home_url(); ?>"><img src="logo-url"></a></h1>`

## Get Current Theme URI
Retrieve stylesheet directory URI for the current theme/child theme. Checks for SSL. 

#### Usage
Use the URI
`<?php get_stylesheet_directory_uri(); ?>`

Output the URI
`<?php echo get_stylesheet_directory_uri(); ?>`

#### Example 
`<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aternus.png" alt="" width="" height="" />`


