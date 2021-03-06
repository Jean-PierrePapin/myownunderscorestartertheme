=== sassify2 ===

Contributors: automattic
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready

Requires at least: 4.5
Tested up to: 5.4
Requires PHP: 5.6
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE

A starter theme called sassify2.

== Description ==

Description

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

sassify2 includes support for WooCommerce and for Infinite Scroll in Jetpack.

== Changelog ==

= 1.1 - October 19 2020 =
* Update the CLI for the WP theme dev workflow

= 1.0 - May 12 2015 =
* Initial release

== Credits ==

* Based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2018 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)

// "watch": "node-sass sass/ -o ./ --source-map true --output-style expanded --indent-type tab --indent-width 1 -w"
// "compile:css": "node-sass sass/ -o ./ && stylelint '**/*.css' --fix || true && stylelint '*.css' --fix", || true && stylelint \"**/*.css\" --fix
"compile:css": "node-sass sass/ -o ./ && stylelint \"**/*.css\"",
    "checkerror:css": "npx stylelint \"**/*.css\"",
    "compile:rtl": "rtlcss style.css style-rtl.css",
    "lint:scss": "wp-scripts lint-style \"sass/**/*.scss\"",