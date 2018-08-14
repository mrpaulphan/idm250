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
Github Release: https://github.com/mrpaulphan/idm250/releases/tag/v0.5.0
Static Site: https://idm250.local/static

Theme Templates
Home: https://{your-domain}/static/ 
General: https://{your-domain}/static/{template-url}
Sidebar: https://{your-domain}/static/{template-url}
Archive/Category (Post Listing): https://{your-domain}/static/{template-url}
Single (Post Detail): https://{your-domain}/static/{template-url}
Search: https://{your-domain}/static/{template-url}
404: https://{your-domain}/static/{template-url}
```
