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
- Using WP Hooks/Functions
    - Included `wp_head()` in your [header.php](https://github.com/mrpaulphan/idm250/blob/master/public/wp-content/themes/portfolio-theme/header.php#L19) file
    - Included `wp_footer()` in your footer.php file
    - Included `body_class()` to the body element
    - Dynamic Navigation using `wp_nav_menu()`
    - Include favicon
    - Added dynamic title tags
    - Properly included your css/js files using `wp_enqueue_script()`/`wp_enqueue_style()`
- Theme Requirements
        - Required Templates
            - Home (front-page.php)
              - Unique template for the homepage
              - This should be set properly by going to settings > reading > Static Homepage
            - General (page.php)
              - Default template when you create any new page
            - Post Listing (archive.php / Custom Theme)
              - Template that pulls in all of your post onto one page. The archive page can use the same template but should work when clicking on a category
            - Post Detail (single.php)
            - Search Results (search.php)
            - 404 Page (404.php)
            - Custom Template
              - One unique page
        - All other pages (about, contact, etc...) that exist on your site must be created and the data must be driven through WordPress. 
- Code Quality
    Site is smartly coded using modules for repeating code segments
    Content is **NOT STATIC** and can be updated through the WordPress dashboard
    Code is clean. White spaces, comments, and proper indentation is used in the files.


### Example Submission Format
```

Templates
--
404 Template: {protocol}://{your-domain}/idm250/{this-template-url}
Home Template: {protocol}://{your-domain}/idm250/{this-template-url}
Sidebar Template: {protocol}://{your-domain}/idm250/{this-template-url}
Post Listing Template: {protocol}://{your-domain}/idm250/{this-template-url}
Post Detail Template: {protocol}://{your-domain}/idm250/{this-template-url}
General Template: {protocol}://{your-domain}/idm250/{this-template-url}
Search Template: {protocol}://{your-domain}/idm250/{this-uri-with-the-search-query} (?q={searched word})
```