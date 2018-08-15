# Template Implementation
The goal of this assignment is to take your static website you built for your midterm and convert it to use PHP + WordPress to interact with the database and dynamically output data. 

## Assignment Overview
1. [Create Theme](#create-a-theme-folder)
2. [Dynamic Header](#dynamic-header)
3. [Dynamic Menu](#dynamic-menu)
4. [Dynamic Footer](#dynamic-footer)
5. [General Styles Template](#general-styles-template)
6. [Create Tag/Release](#creating-a-tag)
7. [Deploy Code](#deploy-code)

### Create a theme folder
Inside your theme folder, `{your-project-root-folder}/wp-content/themes`, create a folder and name it whatever you want. I usually title folder to match the domain (MrPaulPhan.com -> mrpaulphan or cnn.com -> cnn). Make sure these the index.php and style.css file are included (Theme should now display under your dashboard).

Make sure you fill out your [style.css](https://github.com/mrpaulphan/idm250/blob/master/wordpress/wp-content/themes/class_demo/style.css) with your information. 

Once that is done, go to Dashboard and click on `Appearance -> Themes`. Go to theme you just installed (at mouse-over you will see the Activate button — click on it).

### Dynamic Header
- Create a [header.php](https://github.com/mrpaulphan/idm250/blob/master/wordpress/wp-content/themes/class_demo/header.php) file at the root of your theme
- Move your static global header content into this file
  
### Dynamic Menu
The menu on your website should be dynamiclly driven through Wordpress. 
- Create the pages you need through the Wordpress dashbaord.Here's a [tutorial](https://codex.wordpress.org/WordPress_Menu_User_Guide) on how to do that 
- [Register your menus](https://github.com/mrpaulphan/idm250/blob/master/wordpress/wp-content/themes/class_demo/functions.php#L37)
- [Display your menu](https://github.com/mrpaulphan/idm250/blob/master/wordpress/wp-content/themes/class_demo/header.php#L68)

### Dynamic Footer
- Create a [footer.php](https://github.com/mrpaulphan/idm250/blob/master/wordpress/wp-content/themes/class_demo/footer.php) file at the root of your theme
- Move your static footer header content into this file

### General Styles Template
You should have coded a general styles template for your midterm. Convert this into a [WordPress Template](https://github.com/mrpaulphan/idm250/blob/master/wordpress/wp-content/themes/class_demo/templates/template-general.php). The content for this page should be coming from the CMS. 

### Creating a tag
Make sure your code has been pushed to your repo and up to date.
Here's a [link](https://git-scm.com/book/en/v2/Git-Basics-Tagging) on how to create a git tag. Using your terminal/command line, get inside the folder where your project files are kept: cd `/path/to/my/codebase`. You want to 
1. Create a tag `git tag -l "v0.6.0"`
2. Annotate the tag `git tag -a v0.6.0 -m "v0.6.0"`
3. push the tag `git push origin v0.6.0`

### Creating a release
Use this article [here](https://help.github.com/articles/creating-releases/me) to create a github release. 

Release Info
- Tag Version = “v0.6.0”
- Title = “v0.6.0”

### Deployment
Once complete, copy your theme over to your remote server into the same exact spot. Assuming that `public_html` is the root of your server, the theme should be copied into `public_html/idm250/wp-content/themes/`. Login to your wordpress site and copy your local menu and pages. 


## Submission
- Link to your `v0.6.0` release
- Link to your static site + templates

### Example Submission Format
```
Github Release: https://github.com/mrpaulphan/idm250/releases/tag/v0.6.0

Wordpress Site: https://{your-domain}.com/idm250

General Styles Page: https://{your-domain}.com/idm250/{template-url}
```


