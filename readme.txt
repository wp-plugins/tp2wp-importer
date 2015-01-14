=== TP2WP Importer ===
Contributors: ReadyMadeWeb
Donate link: http://tp2wp.com
Tags: importer, wordpress, typepad, movabletype, attachments, import, uploads, transfer
Requires at least: 3.0
Tested up to: 4.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The TP2WP importer uses XML files created by the TP2WP conversion service to import Typepad or MoveableType data into WordPress.

== Description ==

The TP2WP importer uses XML files created by the TP2WP conversion service to import Typepad or MoveableType data into WordPress.

The importer uses a three-step process to check your server, import your data, and then import your attachments:

1. Status Check - To ensure a smooth import of your converted Typepad or MoveableType data, the plugin checks your server configuration. The status checkers will check your memory limit, maximum execution time, XML extension, permalink structure, theme, and plugin configuration.
2. Import Content - This step in the process handles the import of your WXR (WordPress eXtended RSS) file, which you can create at [tp2wp.com](http://tp2wp.com). This imports all text-based data like posts titles, post bodies, authors, comments, tags, and categories.
3. Import Attachments - The final step in the process handles importing of attachments. This relies on your Typepad or Moveable type site being up and running. You will specify all domains or subdomains associated with your site before the import begins. 

These three steps combined with the file conversion process at [tp2wp.com](http://tp2wp.com) allow for as much data as possible to be moved from Typepad or MovableType blogs without manually reconstruction of data. Pages, sidebars, and other content outside of posts are not preserved as part of this process.

NOTE: The [ReadyMade WordPress Importer](https://wordpress.org/plugins/readymade-wordpress-importer-061/) should now be considered deprecated and superseded by this plugin.


== Installation ==

The quickest method for installing the importer is:

1. Upload the `tp2wp-importer` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Click on 'TP2WP Importer' menu which should appear near the bottom of the left sidebar.

= Minimum Hosting Requirements =

*PHP memory limit of at least 256MB
*PHP execution time of at least 180 seconds
*PHP XML extension

If your host does not meet these minimum requirements, you should consider moving to dedicated or virtual dedicated hosting. Many discount or shared hosts do not meet these minimum requirements.

== Changelog ==

= 1.0.0 =
Initial release of new plugin. The [ReadyMade WordPress Importer](https://wordpress.org/plugins/readymade-wordpress-importer-061/) should now be considered deprecated and superseded by this plugin.

= WordPress Importer =

Step 2 of our import process is a branch of the default WordPress importer. Our version modifies the default in three ways:

1. If there is an attachment in the WXR and the importer is not able to determine the file type from the file name (ie missing extension), the patched version will make a light (body-less) request to the web server where the file is hosted for information we can use about the file. The things we're interested in are file type, size, and filename.
2. If the importer is processing an attachment under the above situation, and it is able to determine the file type, then it will rewrite the local version of the file to have the appropriate file extension.
3. When moving from one host to another, or from WordPress.com to a self-hosted site, you may setup hosting for your domain, let's call it "yourdomain.com" for example, before publicly directing the DNS to the new server. This is the correct thing to do if importing using WXR files. However, some hosts will then process references to "yourdomain.com" as internal references, rather than links to outside resources. This means that the importation process is essentially short circuited, with the public version of "yourdomain.com" being invisible to your new server. The ReadyMade WordPress Importer solves this problem by using TW2WP.com servers to identify the public IP of the source server and then uses that IP, rather than the domain, to import files.

== Frequently Asked Questions ==

More Info: [WordPress Codex: Importing Content](http://codex.wordpress.org/Importing_Content#Before_Importing)

More Info: [tp2wp.com/faq](http://tp2wp.com/faq)