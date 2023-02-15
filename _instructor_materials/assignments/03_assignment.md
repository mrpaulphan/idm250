# Template Implementation
The goal of this assignment is to take your midterm and convert it to use PHP + WordPress to interact with the database and dynamically output data.

## Assignment Overview
  - [Assignment Overview](#assignment-overview)
    - [Dynamic Header](#dynamic-header)
    - [Dynamic Menu](#dynamic-menu)
    - [Dynamic Footer](#dynamic-footer)
    - [Deployment](#deployment)
  - [Submission](#submission)
    - [Example Submission Format](#example-submission-format)


### Dynamic Header
- Create a [header.php](hhttps://github.com/mrpaulphan/idm250/tree/master/public/wp-content/themes/idm250/header.php) file at the root of your theme
- Style this to match your final design.
- Add title tag to your header.php file. Example code `<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>`
- Add the [wp_head()](https://codex.wordpress.org/Function_Reference/wp_head) function to your header.php file
- Add `body_class()` to your body tag. Example code `<body <?php body_class(); ?>>`
- Add `wp_body_open` to your body tag. Example code `<body <?php body_class(); ?> <?php wp_body_open(); ?>>`
- Should be responsive and functional (mobile menus etc.)


### Dynamic Footer
- Create a [footer.php](hhttps://github.com/mrpaulphan/idm250/tree/master/public/wp-content/themes/idm250/footer.php) file at the root of your theme
- Style this to match your final design.
- Add the [wp_footer()](https://codex.wordpress.org/Function_Reference/wp_footer) function to your footer.php file
- Should be responsive and functional (mobile menus etc.)
- Include dynamic copyright year. Example code `<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>`

### Dynamic Menu
The menu on your website should be dynamically driven through WordPress.
- Create the pages you need through the Wordpress dashbaord. Here's a [tutorial](https://codex.wordpress.org/WordPress_Menu_User_Guide) on how to do that
- In code make sure you've registered your menu + added it to your theme. You an learn more https://codex.wordpress.org/Navigation_Menus 
- Style this to match your final design.
- Should be responsive and functional (mobile menus etc.)

### Deployment
Once complete, push your code to github and our automated deployment will take care of the rest. To keep your databases in sync, you can export your local database and import it into your production environment. Here's a [tutorial](https://www.wpbeginner.com/wp-tutorials/how-to-import-and-export-wordpress-database/) on how to do that.


## Tips and Tricks
- If your design requires you to add an image, you can use get_template_directory_uri() to get the path to your theme. Example code `<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">`
- To prevent redoing the work you did on the backend of wordpress, you can export your local database and import it into your production environment. 
-- [Export database from phpmyadmin from local ](https://help.dreamhost.com/hc/en-us/articles/214395738-phpMyAdmin-How-to-backup-or-export-a-database-or-table)
-- [Import database into phpmyadmin on production ](https://help.one.com/hc/en-us/articles/115005588189-How-do-I-import-a-database-to-phpMyAdmin-)
## Submission
- Link to your homepage (front-page.php) with the required elements
- Link to your repo with your code
  - Your grade will be determined by this link.

### Example Submission Format
```
Homepage: https://{your-domain}/idm250/ (Root of your WordPress Site)
Github: https://github.com/{username}
```

