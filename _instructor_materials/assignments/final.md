# Complete Responsive CMS Website

## CMS Website

Complete website with responsive design, all functionality, animation...etc

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
  - Include `wp_head()` in your [header.php](https://github.com/mrpaulphan/idm250/blob/master/wp-content/themes/portfolio-2023/header.php#L25vs) file
  - Include `wp_footer()` in your [footer.php](https://github.com/mrpaulphan/idm250/blob/master/wp-content/themes/portfolio-2023/footer.php#L2) file
  - Include `body_class()` to the `<body>` element in your [header](https://github.com/mrpaulphan/idm250/blob/master/wp-content/themes/portfolio-2023/header.php#L28)
  - Include at least one dynamic Navigation using `wp_nav_menu()` in your [theme](https://github.com/mrpaulphan/idm250/blob/master/wp-content/themes/portfolio-2023/components/header.php#L2) **or** use this custom [function called `get_theme_menu()`](https://github.com/mrpaulphan/idm250/blob/master/wp-content/themes/portfolio-2023/components/header.php#L2) to create your own custom navigation
  - Include a custom theme screenshot for your [theme](https://github.com/mrpaulphan/idm250/blob/master/wp-content/themes/portfolio-2023/screenshot.jpg). Here is an [article](https://wpism.com/wordpress-theme-screenshot/#:~:text=According%20to%20the%20WordPress%20Codex,of%20880%20x%20660%20pixels.) with the dimensions.
  - Include favicon into your `<head>`
  - Add dynamic [title](https://github.com/mrpaulphan/idm250/blob/master/wp-content/themes/portfolio-2023/header.php#L8) tags
  - Properly included your css/js files using `wp_enqueue_script()`/`wp_enqueue_style()` in your [theme](https://github.com/mrpaulphan/idm250/blob/master/wp-content/themes/portfolio-2023/includes/setup.php)
- WordPress Template Requirements (30/40 points)
  - [Front Page](https://developer.wordpress.org/themes/functionality/custom-front-page-templates/#custom-site-front-page-template)
      - On the site front page, WordPress will always use the front-page.php template file, if it exists. If front-page.php does not exist, WordPress will determine which template file to use, depending on the user configuration of Settings > Reading >Front page displays, as follows:
      - Check List
        - [ ] Template has a unique design
        - [ ] There is not static text in your code
        - [ ] You're pulling in dynamic content through wordpress or ACF.
  - Example of the front page template [here](https://github.com/mrpaulphan/idm250/blob/master/wp-content/themes/portfolio-2023/front-page.php)
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
    - Check List
        - [ ] Template has a unique design
        - [ ] There is not static text in your code
        - [ ] You're pulling in dynamic content through wordpress or ACF. Includes the components listed above.
  - Custom Page Template
    - Create a secondary page template for pages in your theme. You can use look at /templates/*
    - This can be an alternative to the general default page
        - Maybe the same as the default but with a sidebar
        - Maybe a page that's full width vs having a container
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
    - Check List
        - [ ] Template has a unique design
        - [ ] There is not static text in your code
        - [ ] You're pulling in dynamic content through wordpress or ACF. Includes the components listed above.
  - Single Post
    - Create a template for your single post. This can be a custom post type or a default post.
    - [blog single](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/singe.php)
    - [custom post type single](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/single-projects.php)
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
    - This template is usually your base default page when creating new blog post or new post from your custom post type.
    - Check List
        - [ ] Template has a unique design
        - [ ] There is not static text in your code
        - [ ] You're pulling in dynamic content through wordpress or ACF. Includes the components listed above.
    - 404 Page
      - Create a 404 page for your site
      - Check List
          - [ ] Template has a unique design
          - [ ] Static text is okay here but preferred to be dynamic. This can be done with ACF options page
  - Listing Page
    - Create a template that pulls in all of your posts or custom posts onto one page. You can use the [`archive.php`](https://github.com/mrpaulphan/idm250/blob/master/wp-content/themes/portfolio-2023/archive.php) or create a custom page template that runs WP_Query to pull in all your posts (Similar to [this](https://github.com/mrpaulphan/idm250/blob/master/wp-content/themes/portfolio-2023/components/recent-projects.php))
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
  - [404 (Not Found)](https://developer.wordpress.org/themes/functionality/404-pages/#creating-the-404-php-file)
    - A 404 page is important to add into your theme in case a user stumbles upon a page that doesn’t exist or hasn’t been created yet. It is also important that your 404 page gives your visitors a way to arrive at the right place.

    - Create a custom 404 page like [this](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/idm250/404.php)
- Code Quality
  Site is smartly coded using modules for repeating code segments
  Content is **NOT STATIC** and can be updated through the WordPress dashboard
  Code is clean. White spaces, comments, and proper indentation is used in the files.

### Extra Credit
- [ ] Create 3 custom blocks using ACF
- [ ] Create an ACF Options page that will allow me to update the logo, favicon, footer text, and 404 page.

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
