# Content Blocks WordPress Post Type

Creates a content-blocks custom post type and shortcode for display a single content block on the front end of a WordPress site. To be added to a WordPress child theme and included appropriately.

**Requires [dwalkr/wp-admin-utility](https://github.com/dwalkr/wp-admin-utility)**

## Usage

To be used in place of theme options or widgets for unique blocks of content which have no existing place in the admin, or for which creating a separate custom post type would be overkill. Content blocks are displayed via shortcode.

### Shortcode

`[content_block]`

**Available Options**

* **id** = post ID (required, default `''`)
* **view** = view name sans file extension, located in child theme /view dir (required, default `'content-block'`)

## Example Directory Structure

```
/view
    /admin
        page-creator.php
        /post-types
            content-blocks.yml
        /src
            ContentBlocks.php
    /tpl
        content-block.php
```
