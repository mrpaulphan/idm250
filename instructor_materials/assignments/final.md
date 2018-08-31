# Complete Responsive CMS Website

## CMS Website
Complete website with responsive design, all functionality, animation...etc

## Github Release
Make sure your the theme has been pushed to your repository. Once you've done that, you will need to create a release for this. 

### Creating a tag

Here's a [link](https://git-scm.com/book/en/v2/Git-Basics-Tagging) on how to create a git tag. Using your terminal/command line, get inside the folder where your project files are kept: cd `/path/to/my/codebase`. You want to 
1. Create a tag `git tag -l "v1.0.0"`
2. Annotate the tag `git tag -a v1.0.0 -m "v1.0.0"`
3. push the tag `git push origin v1.0.0`

### Creating a release
Use this article [here](https://help.github.com/articles/creating-releases/me) to create a github release. 

Release Info
- Tag Version = “v1.0.0”
- Title = “v1.0.0”

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
    - Included `wp_head()` in your header.php file
    - Included `wp_footer()` in your footer.php file
    - Included `body_class()` to the body element
    - Properly included your css/js files using `wp_enqueue_script()`/`wp_enqueue_style()`
    - Theme Requirements
        - Dynamic Navigation using `wp_nav_menu()`
        - Required Templates
            - Home
            - General
            - Post Listing
            - Post Detail
            - Search
            - Archive/Category Page
            - 404 Page
        - All other pages (about, contact, etc...) that exist on your site must be created and the data must be driven through WordPress. 
- Code Quality
    Site is smartly coded using modules for repeating code segments
    Content is **NOT STATIC** and can be updated through the WordPress dashboard
    Code is clean. White spaces, comments, and proper indentation is used in the files.

## Extra Credit (.5 Point Each)
- Add favicon
- Add custom logo to login screen (`/wp-admin`)
- Using `add_image_size()` and display custom image sizes
- Add custom logo to WordPress theme customizer and display it
  

## Submission
- Link to your `v1.0.0` release

### Example Submission Format
```
Releases
--
Github Release: https://github.com/mrpaulphan/idm250/releases/tag/v1.0.0

Templates
--
404 Template: {protocol}://{your-domain}/idm250/{this-template-url}
Home Template: {protocol}://{your-domain}/idm250/{this-template-url}
Sidebar Template: {protocol}://{your-domain}/idm250/{this-template-url}
Post Listing Template: {protocol}://{your-domain}/idm250/{this-template-url}
Post Detail Template: {protocol}://{your-domain}/idm250/{this-template-url}
General Template: {protocol}://{your-domain}/idm250/{this-template-url}
Search Template: {protocol}://{your-domain}/idm250/{this-template-url}
Archive/Category Page Template: {protocol}://{your-domain}/idm250/{this-template-url}
404 Page Template: {protocol}://{your-domain}/idm250/{this-template-url}

```
