# WP-GTM
Files and code samples for my Google Tag Manager for WordPress talk.

## Plugin
The .zip file is the GTM for Hackers WordPress plugin. Existing plugins either don't add the code in the right place or they do but also have too many features that make getting exactly what we want into GTM more difficult.

If you'd rather give up flexibility for ease of use, then I highly recommend the [DuracellTomi plugin](https://en-ca.wordpress.org/plugins/duracelltomi-google-tag-manager/).

In GTM for Hackers, the **Standard Placement** method uses Yaniv Friedensohn's [GTM for Wordpress hack](https://www.affectivia.com/blog/placing-the-google-tag-manager-in-wordpress-after-the-body-tag/) to place the code.

The **Wordpress 5.0** method makes your existing WordPress install compatible with the new theme hook that is being added in 5.0 for the purpose of adding tag manager code. You will still need to add wp_body_open(); right after the opening body tag to make your child theme compatible with this plugin and when 5.0 is released.

## WP Code
These are just the code samples from the talk divided into section by section and amalgamated.