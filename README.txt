=== SendThisFile Button ===
Contributors: sendthisfile
Tags: sendthisfile
Requires at least: 4.7
Requires PHP: 5.6
Tested up to: 6.1.1
Stable tag: 1.0.6
License: GPLv3

A WordPress plugin that allows your visitors to send you files on your pages and posts using a SendThisFile website button.

== Description ==

Installing this plugin in Wordpress will give you the ability to add a [sendthisfile] shortcode to your content.  Placing a [sendthisfile] shortcode on your pages or posts will cause a button to be rendered.  When clicked, that button will allow the visitor to your site to send you files.

The plugin requires you to add a `buttonid`, that you obtain when you create a "Website Button" at <a href="https://sendthisfile.com">SendThisFile</a>. 

== Installation ==

## Getting Started

To get this WordPress plugin running, follow these simple steps.

### Prerequisites

1. Sign into SendThisFile.  If you don't have an account, [it's free to create one](https://app.sendthisfile.com/signup).  However, you will need a business plan with one user to create a Website Button.
2. Navigate to Integrations -> Website Button.
3. Add a new button, if you don't already have one.
4. Make sure you have added at least one recipient, and set the button to "Active".
5. In the "Button Code" section you will see a reference to a "buttonid".  Copy that buttonid to your clipboard. For example, given this "Button Code" content ...
   
   ```html
   <sendthisfile-button label="Send files" buttonid="ABCD-1234-88FE-77D3"></sendthisfile-button>
   ```
   you would copy the `ABCD-1234-88FE-77D3` id to your clipboard.

### Installation

1. Install this plugin using WordPress' Plugins admin tool.
2. Activate the plugin.
3. In the WP Admin, navigate to "SendThisFile".
4. Enter your button id into the "Default Buttonid" field and save it.

You are now ready to use your [sendthisfile] shortcode.


== Changelog ==

= 1.0.6 =
* Correct version mismatch in main plugin source

= 1.0.5 =
* Refactor .wordpress-org folder and simplify yml

= 1.0.4 =
* Fixed assets reference in workflow

= 1.0.3 =
* Implementation of github action

= 1.0.2 =
* Fix shortcode case discrepancy

= 1.0.1 =
* Initial release of plugin