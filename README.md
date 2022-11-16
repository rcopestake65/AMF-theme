# Art Market Forum Developers Notes

## General Notes

## BBPress templates

Folder **bbpress** created in _wp-content/themes/redink/_
Any templates needing amends are copied from the original BBPress templates folder to _wp-content/themes/redink/bbpress_

**Important** - The BBPres loop begins with _content-archive-forum.php_ - this has been put into an if/else statement to determine whether the page is Home or other pages that use the loop. If the former, it pulls in the custom version of the loops for the homepage.

### Moving the search input:

The search input is in the loop in content-archive-forum.php. This has been copied to _wp-content/themes/redink/bbpress_ and **line 17** commented out. A shortcode - _<?php echo do_shortcode( '[bbp-search]'); ?>_ - has then been added to _section-user.php_ in _template-parts_ to bring the search back in the right place for the design.

## BBPress CSS

All overides and new CSS for BBPress items is in _sass/bbpress_

A lot of the forum styles require nesting inside #bbpress-forums to gain specificity

## General CSS / Layout

- max width on large screens set at 80rem and 95% on small
