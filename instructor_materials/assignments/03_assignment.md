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

### Dynamic Footer
- Create a [footer.php](hhttps://github.com/mrpaulphan/idm250/tree/master/public/wp-content/themes/idm250/footer.php) file at the root of your theme
- Style this to match your final design.

### Dynamic Menu
The menu on your website should be dynamically driven through WordPress.
- Create the pages you need through the Wordpress dashbaord. Here's a [tutorial](https://codex.wordpress.org/WordPress_Menu_User_Guide) on how to do that
- [Register your menus](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/functions.php#L55)
- [Display your menu](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/header.php#L22)
- Style this to match your final design.
- Should be responsive and functional (mobile menus etc.)

### Deployment
Once complete, copy your theme over to your remote server into the same exact spot. Assuming that `public_html` is the root of your server, the theme should be copied into `public_html/idm250/wp-content/themes/`. Login to your WordPress site and copy your local menu and pages.

#### Avoiding  DB conflicts
To avoid conflicts when exporting and importing your DB, add these lines of code to your `wp-config.php` file right under `define( 'WP_DEBUG', false );` on **both** your **local** and **production** environment

```
define( 'WP_HOME', 'http://example.com' );
define( 'WP_SITEURL', 'http://example.com' );
```

Replace `http://example.com` with your domain


## Submission
- Link to your homepage (front-page.php) on learn
- Link to your repo with your code
  - Your grade will be determined by this link.

### Example Submission Format
```
Homepage: https://{your-domain}/idm250/ (Root of your WordPress Site)
Github: https://github.com/{username}
```

