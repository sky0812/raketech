# GoldenComm's WordPress Starter Theme

 - Version 2.1.0

## Quick Start

1. Clone your project's repository and make sure it has the latest [Starter Theme](https://bitbucket.org/goldencomm/gc-wordpress-starter-theme/src/master/) code.
2. Make sure you have the [GoldenComm CLI](https://www.npmjs.com/package/@goldencomm/cli) installed by running `npm i -g @goldencomm/cli`
3. Rename the theme folder to match the name of the site you're building. 
  * Example: rename `wp-content\themes\gc-starter` to `wp-content\themes\new-website`
4. Open a terminal in your project's theme directory and run the `gc setup` command

## Changelog
### v.2.1.0

Released on 12 Mar 2021

 - **New Feature**: Adding Blocks config to theme. Check out the documentation in the GC WP Toolkit plugin for more info.
 - **Deprecation Warning**: Removing "ie11" from default browser support list.
 - Removing admin JS & CSS that are duplicated in the GC WP Toolkit plugin.
 - Minor fixes for Slick JS & CSS
 - Upgrading jQuery, Foundation, FontAwesome packages

### v.2.0.7
 - Upgrading jQuery to latest version (3.5)

### v.2.0.6
 - Added breadcrumb styling by default
 - Refactored & updated gutenberg editor styling
 - Updated Foundation

### v.2.0.5
 - Documentation updates
 - Adding [GC Toolkit](https://www.npmjs.com/package/@goldencomm/toolkit) and [GC Build Scripts](https://www.npmjs.com/package/@goldencomm/build-scripts)
 - Removing local dependency of gc-parent for development
 - Removing babel, postcss, and webpack config files
 - Removing JS & SCSS components that have been migrated to GC Toolkit
 - Updating admin scripts

### v.2.0.4
 - Adding SVG support to lazy images
 - Adding Gutenberg + Foundation styles
 - Adding theme_palette/theme_font_sizes/image sizes to config file
 - Optimizing JS component execution
 - Updating npm packages
 - Adding Optimizilla webpack module

### v.2.0.3
 - Adding README
 - Updating PWA to check for config flag and unregister if needed
 - Updating npm packages
