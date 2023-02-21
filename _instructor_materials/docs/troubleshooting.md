# Troubleshooting
Here are some common issues you may run into when working with WordPress. Before you start troubleshooting, make sure you've tried the following
- Check to make sure you're on in correct environment. For example, if you're working on your local environment, make sure you're not logged into your production server.
- Re-save you permalinks by going to `Settings > Permalinks` and click `Save Changes`

## I'm getting a white screen
- To fix this, you need to enable `WP_DEBUG` in your `wp-config.php` file. You can do this by adding the following line to your `wp-config.php` file
```  
define('WP_DEBUG', true);
```
If you're debugging production, make sure you turn this off after you've found the root cause. 

## I'm not seeing my changes
- Make sure you've cleared your cache. You can do this by going to `Settings > Permalinks` and click `Save Changes`
- Make sure you've pushed your code to github and your code is deployed to your server.
- Make sure your theme is activated. You can do this by going to `Appearance > Themes` and click `Activate` on your theme.
- Make sure you're working in the correct environment. For example, if you're working on your local environment, make sure you're not logged into your production server and viewing that site.
- Manually check if your new changes are on your server. You can do this by going to `Appearance > Editor` and click `Theme Functions` and check if your changes are there.


