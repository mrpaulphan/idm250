# Template Implementation
The goal of this assignment is to take your static website you built for your midterm and convert it to use PHP + WordPress to interact with the database and dynamically output data. 

## Assignment Overview
1. [404 Template](#404-template)
2. [Post Listing Template](#post-listing-template)
3. [Sidebar Template](#sidebar-template)
4. [Create Tag/Release](#creating-a-tag)
5. [Deploy Code](#deploy-code)

### 404 Template
You should have coded a 404 template for your midterm. Convert this into a [WordPress Template](https://github.com/mrpaulphan/idm250/blob/master/wordpress/wp-content/themes/class_demo/templates/template-404.php). The content for this page should be coming from the CMS.

### Post Listing Template
You should have coded a Post Listing template for your midterm. Convert this into a [WordPress Template](https://github.com/mrpaulphan/idm250/blob/master/wordpress/wp-content/themes/class_demo/templates/template-post-listing.php). The content for this page should be coming from the CMS.

### Sidebar
You should have coded a Sidebar template for your midterm. 
- [Register your sidebar](https://github.com/mrpaulphan/idm250/blob/master/wordpress/wp-content/themes/class_demo/functions.php#L59)
- Add widgets to your sidebar (From your WP Dashboard)
- Create a [sidebar.php](https://github.com/mrpaulphan/idm250/blob/master/wordpress/wp-content/themes/class_demo/sidebar.php) inside the root of your WP Theme
- Include that sidebar into yout [sidebar template](https://github.com/mrpaulphan/idm250/blob/master/wordpress/wp-content/themes/class_demo/templates/template-sidebar.php)

### Creating a tag
Make sure your code has been pushed to your repo and up to date.
Here's a [link](https://git-scm.com/book/en/v2/Git-Basics-Tagging) on how to create a git tag. Using your terminal/command line, get inside the folder where your project files are kept: cd `/path/to/my/codebase`. You want to 
1. Create a tag `git tag -l "v0.7.0"`
2. Annotate the tag `git tag -a v0.7.0 -m "v0.7.0"`
3. push the tag `git push origin v0.7.0`

### Creating a release
Use this article [here](https://help.github.com/articles/creating-releases/me) to create a github release. 

Release Info
- Tag Version = “v0.7.0”
- Title = “v0.7.0”

### Deployment
Once complete, copy your theme over to your remote server into the same exact spot. Assuming that `public_html` is the root of your server, the theme should be copied into `public_html/idm250/wp-content/themes/`. Login to your WordPress site and recreate the widget and pages. 

## Submission
- Link to your `v0.7.0` release
- Link to the 404, sidebar, post listing templates

### Example Submission Format
```
Github Release: https://github.com/mrpaulphan/idm250/releases/tag/v0.7.0

404 Template: {protocol}://{your-domain}/idm250/{this-template-url}
Post Listing Template: {protocol}://{your-domain}/idm250/{this-template-url}
Sidebar Template: {protocol}://{your-domain}/idm250/{this-template-url}
```


