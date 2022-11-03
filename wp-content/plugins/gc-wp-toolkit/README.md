# GoldenComm WordPress Toolkit Plugin

- Version 1.2.9

### WordPress plugin for adding additional, developer-friendly functionality to a site. This includes JSON config file based functionality for Custom Post Types, Metaboxes, Theme Customizer, and more.

## Documentation

- [Custom Post Types](./lib/Setup/README.md)
- [Metaboxer](./lib/Metaboxer/README.md)
- [Customizer](./lib/Customizer/README.md)
- [Lazy Images](./lib/Core/README.md)
- [Helpers](./lib/Assets/README.md)

## Changelog

### v1.2.9

Release date: 3 Oct 2022

- Bug Fix: Remove enhancement from v1.1.9 that adds `loading="lazy"` to all `gc_lazy_image()` elements. Safari has trouble handling both the JS and native lazy loading.

### v1.2.8

Release date: 10 Dec 2021

- Other: Force noindex gc-media post type - singular and archive.

### v1.2.7

Release date: 17 Nov 2021

- Other: Add version parameters to jquery and jquery migrate.

### v1.2.6

Release date: 5 Nov 2021

- Enhancement: Force `blog_public` option to false for sites with gscadmin.com, //dev., //stage., or //staging. in the URL.

### v1.2.5

Release date: 21 Sept 2021

- Bug Fix: Provide default object if goldencommBlocksConfig doesn't exist.

### v1.2.4

Release date: 16 Sept 2021

- Bug Fix: Correctly check the theme version, and only do breadcrumbs if they are enabled in the Yoast settings.

### v1.2.3

Release date: 21 Apr 2021

- Update: Adding proper grammar to gallery control button
- Update: Removing PHP 7.1 class attributes in LocalDevelopment
- Bug Fix: Fixing bug in Customizer regarding poorly configured group attributes
- Bug Fix: Adding description to Metaboxer Checkboxes type & sub-types

### v1.2.2

Release date: 4 Feb 2021

- Documentation: Initial documentation for using the blocks config.

### v1.2.1

Release date: 15 Jan 2021

- Bug Fix: Only display published posts in the block post fields.

### v1.2.0

Release date: 08 Jan 2021

- **New Feature**: Blocks API. By using the blocks.json file in your theme's config folder, you can add custom Gutenberg blocks to the editor
- Enhancement: Adding support for Yoast breadcrumbs in the `gc_breadcrumb()` function
- Enhancement: Auto-selected OG images are now overridden by the site's default OG image (if available). This makes for a more consistent social sharing experience
- Enhancement: Local Dev logic has been updated for yoast breadcrumbs, srcset attributes, and wpcf7 mail skipping
- Update: Updating jQuery Migrate script to 3.3.2
- Update: removing ie11 from the browserslist array. This plugin _no longer supports Internet Explorer_ out of the box.
- Bug Fix: Fixing the `noindex, nofollow` meta tag bug that was recently introduced by an update in the Yoast SEO plugin

### v1.1.10

- Enhancement: Adding support for re-sorting metaboxes with WYSIWYGs in post admin screen
- Enhancement: Adding image src filters for upcoming local development setup
- Other: Fixing layout issues with metaboxes caused by WP core 5.5.1 update

### v1.1.9

- Enhancement: Metaboxer now supports taxonomies! Check the documentation for more info
- Enhancement: Adding ability to create a filter for a CustomPostTypes taxonomy in the admin menu table
- Enhancement: Adding `shortcodeOrHelper()` functionality to Metaboxer's Post and MultiPost query settings as well as the `fields` property for Metaboxes and Gallery fields
- Enhancement: Adding the `doing_breadcrumb` state value to the `gc_toolkit` container in the `gc_breadcrumb()` function
- Enhancement: Adding `gc_breadcrumb_home` filter
- Enhancement: Adding `hide_from_rest` property for Customizer and Metaboxer fields
- Enhancement: Adding `gc_metaboxer_type_classes` filter to add custom type classes for Metaboxer
- Enhancement: Adding `gc_metaboxer_gallery_tab_title` filter to change the default tab title text in Gallery layout
- Enhancement: Adding `loading="lazy"` attribute to all `gc_lazy_image()` elements
- Enhancement: Adding updated styling to Metaboxer
- Update: Updating jquery-migrate to v3.3.1
- Update: Updating lazy-media.js to v1.0.1
- Bug Fix: Fixing default value logic with Checkbox/Radio fields in Metaboxer
- Bug Fix: Fixing issues with WYSIWYG editors in Metaboxer Gallery tabs
- Bug Fix: Fixing asset versioning for assets in the plugin directory
- Bug Fix: Fixing AJAX logic in Metaboxer for radio/checkboxes in Gallery tabs
- Bug Fix: Fixing some logic in `gc_breadcrumb()`

### v1.1.8

- Enhancement: Add function to detect if on an amp page
- Other: Prevent Gutenberg-related JS from being loaded in the head

### v1.1.7

- Other: Removing `register_rest_route` warning in RestAPI (Introduced in WordPress v5.4.2)
- Other: Cleaning up unneeded code in Metaboxer

### v1.1.6

- Bug Fix: Metaboxer image IDs not being set properly in admin (Introduced in v1.1.4)

### v1.1.5

- Bug Fix: JavaScript error when WordPress added a .wp-editor-area textbox without adding the wp-tinymce script dependency
- Bug Fix: `gc_lazy_image` no longer adds empty width or height attributes to the outputted HTML

### v1.1.4

- Enhancement: AJAX metabox refreshing works in the Block Editor now
- Enhancement: AJAX metabox refreshing works for metaboxes with WYSIWYG fields
- Updating jQuery & jQuery Migrate to their newest versions (3.5.1 & 3.2)
- Bug Fix: Fixing serialization of gallery, checkbox, & radio fields in AJAX Metaboxer handler
- Bug Fix: Gallery Metaboxer tabs broke when count was over 10. Not anymore!
- Bug Fix: Radios Metaboxer fields were rendered as checkboxes (Introduced in v1.1.0)

### v1.1.3

- Enhancement: Filtering robots.txt & `<meta name="robots">` contents to discourage crawling and indexing by bots
- Enhancement: Improved behavior for placeholder option for Select and Post type fields in Metaboxer
- Bug Fix: Metaboxer fields are now initialized after CustomPostTypes registers everything

### v1.1.2

- **Possible Breaking Change**: Updated PHP minimum requirement from `5.5.12` to `5.6`
- Enhancement: Added taxonomy, search, and 404 support to GC Breadcrumb
- Documentation: Added Helpers documentation, fixed BitBucket's broken internal links
- Bug Fix: Customizer Select2 field type placeholder & pre-selected option
- Other: Changed all `<?php echo ?>` commands in Customizer to `<?= ?>`

### v1.1.1

- Added readme.txt file
- Bug Fix: GC Breadcrumb issue with Blog/Posts page

### v1.1.0

- Metaboxer, Custom Post Type, & Lazy Images documentation
- Metaboxer max_items enhancement in gallery type
- Adding gc_lazy_option and gc_lazy_meta helper functions
- Adding title attribute to lazy svg images
- Adding custom $crumbs array to gc_breadcrumb helper function
- Switching build tools to new @goldencomm/build-scripts package, which updated the lazy-media assets
- Bug Fixes: remove jquery-migrate function, metaboxer post type initial value, metaboxer default helper/shortcode values, custom post type singular & labels values, gc_partial parent theme w/ prefix

### v1.0.9

- Customizer documentation
- Metaboxer gallery image field value retrieval bug fix

### v1.0.8

- Hot fixing jQuery Migrate bug

### v1.0.7

- Adding SVG support to lazy images
- Fixing jQuery Migrate bug
- Updating NPM packages

### v1.0.6

- Using `<span>` instead of `<i>` for social font-awesome icons

### v1.0.5

- Fixing admin wysiwyg bugs and jquery-migrate bug
- Adding filter args for Customizer & Metaboxer

### v1.0.4

- GC Shortcode rendered added. Disabled by default. Needs to be turned on in config.json

### v1.0.3

- Admin media uploader text bug fix and metaboxer enhancements

### v1.0.2

- Adding lazy loading for WP Gutenberg Block Styles CSS file

### v1.0.1

- Adding README

### v.1.0.0

- Initializing plugin
