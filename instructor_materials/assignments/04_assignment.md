# Assignment Overview
The goal of this assignment is to take your Post Detail (single.php) design and develop it in WP.

## Single Page

#### If You have a Blog
Using [single.php](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/single.php) as an example, add this to your template and create a page that will dynamically pull in the page title, and page builder. Feel free to add any other additional content such as date, tags, categories, and featured image if you design has it. If you're feeling frisky, you can try messing around with [Advance Custom Fields](https://www.advancedcustomfields.com/) and adding custom fields that your design needs. 

This page should include the following components styles:
- Headings 1 - 6
- Unordered list
- Ordered List
- Paragraphs
- Pull Quotes
- Links
- Images with caption

#### If You have a Custom Post Type such as "Projects"
Using [single-{post-type-name}.php](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/single-projects.php) as an example, add this to your template and create a page that will dynamically pull in the page title, and page builder. Feel free to add any other additional content such as date, tags, categories, and featured image if you design has it. If you're feeling frisky, you can try messing around with [Advance Custom Fields](https://www.advancedcustomfields.com/) and adding custom fields that your design needs. 

This page should include the following components styles:
- Headings 1 - 6
- Unordered list
- Ordered List
- Tables
- Buttons
- Paragraphs
- Pull Quotes
- Links
- Images with caption 

You can register your custom post type [here](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/functions.php#L22)


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
- Link to an example single.php page on learn
- Link to your repo with the code

### Example Submission Format
```
Homepage: https://{your-domain}/idm250/{single-uri} (Root of your website)
Github: https://github.com/{username}
```

