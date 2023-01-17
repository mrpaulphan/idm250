# Complete Responsive CMS Website (Beta)

## CMS Website

Complete website with responsive design, all functionality, animation...etc

## Grading checklist

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
  - Include `wp_head()` in your [header.php](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/header.php#L19) file
  - Include `wp_footer()` in your [footer.php](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/footer.php#L26) file
  - Include `body_class()` to the `<body>` element in your [header](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/header.php#L23)
  - Include at least one dynamic Navigation using `wp_nav_menu()` in your [theme](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/header.php#L29)
  - Include a custom theme screenshot for your [theme](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/screenshot.jpg). Here is an [article](https://wpism.com/wordpress-theme-screenshot/#:~:text=According%20to%20the%20WordPress%20Codex,of%20880%20x%20660%20pixels.) with the dimensions.
  - Include favicon into your `<head>`
  - Add dynamic [title](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/header.php#L13) tags
  - Properly included your css/js files using `wp_enqueue_script()`/`wp_enqueue_style()` in your [theme](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/lib/setup.php)
- Template Requirements (30/40 points)
  - Home
    - Create a unique template for the homepage
    - [Example](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/front-page.php)
  - General/Default
    - Create a default template for pages in your theme
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
    - [Example](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/page.php)
  - 404 Page (404.php)
    - Create a custom 404 page like [this](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/404.php)
- Code Quality
  Site is smartly coded using modules for repeating code segments
  Content is **NOT STATIC** and can be updated through the WordPress dashboard
  Code is clean. White spaces, comments, and proper indentation is used in the files.

### Submission Example

```
Website: {protocol}://{your-domain}
Github: {direct-link-to-the-repo}

Templates
--
404 Template: {protocol}://{your-domain}/idm250/{this-template-url}
Github: {direct-link-to-the-file}

Home Template: {protocol}://{your-domain}/idm250/{this-template-url}
Github: {direct-link-to-the-file}

General/Default Template: {protocol}://{your-domain}/idm250/{this-template-url}
Github: {direct-link-to-the-file}

```
