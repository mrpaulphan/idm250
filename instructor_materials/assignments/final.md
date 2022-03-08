# Complete Responsive CMS Website

## CMS Website

Complete website with responsive design, all functionality, animation...etc

- **Zoom Recording** [link](https://drexel.zoom.us/rec/share/qPQkMswmgIrPTheMuV5GPoPdatqB7uCF2EP8tKrmYxHi2jPMpXFwYON2Fn_z6W63.cTYcW4tn4P-M_gVp)
- Make sure you update your BETA assignment with your final version too.

## Grading checklist (40 points)

- Responsive design
  - All pages are responsive and working at all screen sizes
- Functionality
  - All functionality (drop downs, menus, videos, lightboxes, carousels, etc…) are working
- Design & Content
  - Images are final and high quality
  - All content is **real** and final
  - All content is properly labels, makes sense, and purposeful
  - Content and design clearing indicate the purpose of the website and it’s goal
  - Padding and Space is consistent
  - There is a clear visual hierarchy
- Using WP Hooks/Functions requirements
  - Include `wp_head()` in your [header.php](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/header.php) file
  - Include `wp_footer()` in your [footer.php](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/footer.php) file
  - Include `body_class()` to the `<body>` element in your [header](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/header.php)
  - Include at least one dynamic Navigation using `wp_nav_menu()` in your [theme](https://github.com/mrpaulphan/idm250/blob/master/public%2Fwp-content%2Fthemes%2Fidm250%2Fcomponents%2Fheader.php) **or** use this custom [function called `idm_render_menu()`](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/includes/setup.php) to create your own custom navigation
  - Include a custom theme screenshot for your [theme](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/screenshot.jpg). Here is an [article](https://wpism.com/wordpress-theme-screenshot/#:~:text=According%20to%20the%20WordPress%20Codex,of%20880%20x%20660%20pixels.) with the dimensions.
  - Include favicon into your `<head>`
  - Add dynamic [title](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/header.php) tags
  - Properly included your css/js files using `wp_enqueue_script()`/`wp_enqueue_style()` in your [theme](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/includes/setup.php)
- Template Requirements (30/40 points)
  - Home - Create a unique template for the homepage using `front-page.php` - [Example](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/front-page.php) - Make sure you set the homepage by going to settings > reading >
    Your homepage displays. Set the homepage to be a page on your site.
  - General/Default
    - Create a default template for pages in your theme. You can use `page.php`
    - [Example](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/page.php)
    - This page should include the following components styles:
      - Headings 1 - 6
      - Unordered list
      - Ordered List
      - Tables
      - Buttons
      - Paragraphs
      - Pull Quotes
      - Links
      - Images with caption
      - Video Embed
    - This page is usually your base default page when creating new pages on your site.
    - [Visual Example](http://f.happycog.com/tLufRt/eCUQo8aBkU)
    - [Visual Example 2](http://f.happycog.com/FtBQBd/St9b84qMQh)
  - Post Listing
    - Create a template that pulls in all of your post onto one page. You should have both an `archive.php` that will list your post by category and a page that will list them all.
    - The archive page can use the same template but should work when clicking on a category
    - [Archive Example](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/archive.php)
    - The post listing should be a custom WP template you create to list all of your posts.
    - [Post Listing Template Example](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/template-project-listing.php)
  - Post Detail
    - Create a detail page for your custom post type
    - [Example of default post detail](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/single.php)
    - [Example of a custom post type detail page](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/single-idm-projects.php)
    - [How to create a custom post type single page](https://developer.wordpress.org/themes/template-files-section/custom-post-type-template-files/)
  - Search Results
    - Create a search listing page like [this](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/search.php)
    - Make sure you have a search form like [this](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/components/search-form.php)
  - 404 Page (404.php)
    - Create a custom 404 page like [this](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/404.php)
  - Custom Template
    - Create one custom template that's different from your default `page.php`
    - This can be a template for a custom design you have for a specific page
    - This can be an alternative to the general default page
      - Maybe the same as the default but with a sidebar
      - Maybe a page that's full width vs having a container
    - You can reference [this](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/template-narrow.php)
- Code Quality
  Site is smartly coded using modules for repeating code segments
  Content is **NOT STATIC** and can be updated through the WordPress dashboard
  Code is clean. White spaces, comments, and proper indentation is used in the files.

### Submission Example

```
Website: {link-to-project}
Github: {link-to-project-repo-fully-updated}
Description: {short description about what your site is and anything extra you added}


Templates
--
404 Template: {example-link-of-a-page-using-the-404-page}
Github: {direct-link-to-the-file}

Home Template: {example-link-of-home-page}
Github: {direct-link-to-the-file}

Post Listing Template: {example-link}
Github: {direct-link-to-the-file}

Archive Page: {example-link}
Github: {direct-link-to-the-file}

Project Detail Template: {example-link}
Github: {direct-link-to-the-file}

General/Default Template: {example-link}
Github: {direct-link-to-the-file}

Search Template: {example-link}
Github: {direct-link-to-the-file}

Custom Template: {example-link}
Github: {direct-link-to-the-file}
```
