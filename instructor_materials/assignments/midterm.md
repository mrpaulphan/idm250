# Midterm
Convert your designs into a fully functional responsive static site. Place your static site inside a folder on your server called `static`. Your url should look like `https://yourdomain.com/idm250/static/`. All template pages are required as well as any other pages you want to include into your final project. 

## Not Required
- Sidebar/widget section should be coded out but does not have to function/link to any page. 
- Search functionality does not need to work.

All link should work, content is real, and images should be high quality. All post can link to the same `single` (post detail) page template. No need to make a different page for every post. For example, if you have 8 projects listed, you can link them to 1 single project detail page. 

## Github Release
Make sure your theme has been pushed to your repository. Once you've done that, you will need to create a release for this. 

### Creating a tag
Here's a [link](https://git-scm.com/book/en/v2/Git-Basics-Tagging) on how to create a git tag. Using your terminal/command line, get inside the folder where your project files are kept: cd `/path/to/my/codebase`. You want to 
1. Create a tag `git tag -l "v0.5.0"`
2. Annotate the tag `git tag -a v0.5.0 -m "v0.5.0"`
3. push the tag `git push origin v0.5.0`

### Creating a release
Use this article [here](https://help.github.com/articles/creating-releases/me) to create a github release. 

Release Info
- Tag Version = “v0.5.0”
- Title = “v0.5.0”

## Grading checklist
- Responsive design
    - All pages are responsive and working at all screen sizes
- Functionality
    - All functionality (drop downs, menus, videos, lightboxes, carousels, etc…) are working
- Design & Content
    - Images are final and high quality
    - All content is real and final
    - All content is properly labels, makes sense, and purposeful
    - Content and design clearing indicate the purpose of the website and it’s goal
    - Padding and space is consistent
    - There is a clear visual hierarchy
- Code Quality
    - Code is clean. White spaces, comments, and proper indentation is used in the files.

## Submission
- Link to your `v0.5.0` release
- Link to your static site + templates

### Example Submission Format
```
Github Release: {github-repo-url}/releases/tag/v0.5.0
Static Site: {protocol}://{your-domain}/static

Theme Templates
Home: {protocol}://{your-domain}/idm250/static/ 
General: {protocol}://{your-domain}/idm250/static/{template-url}
Sidebar: {protocol}://{your-domain}/idm250/static/{template-url}
Archive/Category (Post Listing): {protocol}://{your-domain}/idm250/static/{template-url}
Single (Post Detail): {protocol}://{your-domain}/idm250/static/{template-url}
Search: {protocol}://{your-domain}/idm250/static/{template-url}
404: {protocol}://{your-domain}/idm250/static/{template-url}
```

## Final Project Design

Design your final project with the idea of conversion for use with a database driven Content Management System. All of your static web page images should look exactly like you want your website pages to look like when the theme is complete.

If you’re using an existing website you’ve created, polish up your design and include any missing pages/templates


### Templates
Create/Design the following templates:
- Home (Front Page)
    - [Example](https://github.com/mrpaulphan/idm250/blob/master/static_site/index.html)
    - Design a comp at 1280px, 768px, 320px  wide
- General Styles (Page)
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
        - Video
    - [Example](https://github.com/mrpaulphan/idm250/blob/master/static_site/page.html)
    - Design a comp at 1280px wide
- General Styles w/ Sidebar (Page)
    - This page should be similar to the general styles page but have a sidebar
    - Include the same components you see on [this] page here in your comp. 
    - Design a comp at 1280px wide 
- Post Listing (Archive)
    - [Example](https://github.com/mrpaulphan/idm250/blob/master/static_site/blog.html)
    - Design a comp at 1280px wide
- Post Detail (Single)
    - [Example](https://github.com/mrpaulphan/idm250/blob/master/static_site/single.html)
    - Design a comp at 1280px wide
- Search Results (Search)
    - [Example](https://github.com/mrpaulphan/idm250/blob/master/static_site/search.html)
        Design a comp at 1280px wide
- 404
    - [Example](https://github.com/mrpaulphan/idm250/blob/master/static_site/404.html)
    - Design a comp at 1280px wide


To view the examples, I recommend you download the [static site project](https://github.com/mrpaulphan/idm250/blob/master/static_site) and open it up in  your browser. 

Please zip up all your files and follow the idm250-{section number}_{userid}_{file name}

**Submission Example**
```
- idm250-001_pp455_hwk01.zip
-- home_1280px.jpg
-- home_768px.jpg
-- home_320px.jpg
-- general_1280px.jpg
-- sidebar_1280px.jpg
-- search_1280px.jpg
-- 404_1280px.jpg
-- single_1280px.jpg
-- archive_1280px.jpg
```


## Github Release
Make sure your the wordpress starter theme has been pushed to github. Once you've done that, you will need to create a release for this. 

### Creating a tag

Here's a [link](https://git-scm.com/book/en/v2/Git-Basics-Tagging) on how to create a git tag. Using your terminal/command line, get inside the folder where your project files are kept: cd `/path/to/my/codebase`. You want to 
1. Create a tag `git tag -l "v0.0.1"`
2. Annotate the tag `git tag -a v0.0.1 -m "v0.0.1"`
3. push the tag `git push origin v0.0.1`

### Creating a release
Use this article [here](https://help.github.com/articles/creating-releases/me) to create a github release. 

Release Info
- Tag Version = “v0.0.1”
- Title = “v0.0.1”
- Description = "Starter Files"


## Reading
[Build Your Own Wicked WordPress Themes by Allan Cole Collingwood, Vic. : SitePoint Pty. Ltd., 2010](http://www.library.drexel.edu/cgi-bin/r.cgi?url=http://library.books24x7.com/library.asp?^B&bookid=41318)
- Ch.2 Planning Your Theme
- Ch. 3 Theme Design 101

## Project Overview
- Create a `readme.md` file at the root of your project. In this file, write a short description about your project and explain what it is (using [markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)). This will help remind myself/others what your final project is. 


## How to Submit
Submit two links via Blackboard under one submission
- Upload your zipped file via your Wordpress website and send me a direct link to download it. 
    - Example: `http://idm250.local/wp-content/uploads/2018/07/idm250-001-pp455-hwk01.zip`
- URL to your Github release. 
    - Example: `https://github.com/mrpaulphan/idm250/releases/tag/v0.0.1`







