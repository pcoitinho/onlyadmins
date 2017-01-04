=== Only Admins ===
Contributors: pcoitinho
Tags: Staging, Development, Security
Donate Link: http://informationandculture.com
Requires at least: 4.3
Tested up to: 4.7
Stable tag: 1.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html


Only Admins is a minimal plugin that restricts your entire WordPress site to Admins.

== Description ==

Only Admins is a minimal plugin that restricts your entire WordPress site to Admins.

Best used as a MU-Plugin on Development and Staging sites.

== Installation ==

= Plugin Directory =

Install Only Admins as you would any other plugin.

1. Go to Plugins > Add New.
2. Search for Only Admins.
3. Download and activate.

= Must-Use Plugin =

Only Admins works really well as a Must-Use Plugins. MU-Plugins cannot be disabled or edited by mistake.

To install Only Admins as a MU Plugin:

1. Download the source.
2. Create a `mu-plugins` folders in your `wp-content` directory (if doesn't already exist).
3. Copy `onlyadmins.php` (not its enclosing folder) to mu-plugins.

== Frequently Asked Questions ==

= Can I change the required user role? =

Only Admins has no configuration, so there is no interface to change the user role.

That being said, you can simply edit it (its only a few lines long).

Simply change `current_user_can( 'administrator' )` to whichever role or capability you'd like.

== Screenshots ==

1. Not logged in Error Notice

== Changelog ==

= 1.1 =
* Require ABSPATH
* Typo fix

== Upgrade Notice ==

= 1.1 =
Enhanced security

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above.  This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation."  Arbitrary sections will be shown below the built-in sections outlined above.
