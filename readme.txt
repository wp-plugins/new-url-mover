=== New URL Mover ===
Contributors: thoughtlabllc, lellimecnar
Tags: domain, url, bloginfo, home, path, change, move
Requires at least: 2.0.2
Tested up to: 3.1
Stable tag: trunk

Update your URL in the database automatically when you move your site to a new domain or location.

== Description ==

Sometimes you have to build a blog separately from the ain site, and then have to move the blog onto the main server. When you do, you have to update the database, which can be a pain. With this plugin, any time you navigate to the home page of your WordPress site, it will automatically check the location of your installation, and update the database for you if needed. It also adds a widget to your Dashboard to specify the url of your main site. We recommend, at the top of your functions.php file, that you add the following line: `<?php define('ROOT_URL',get_option('ROOT_URL')); ?>` You can then echo out the 'ROOT_URL' constant anywhere you need to link to the main site. For example: `<a href="<?php echo ROOT_URL; ?>/about">About Us</a>`

== Installation ==

1. Upload `new-url-mover` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Changelog ==

= 1.0 =
* First Release