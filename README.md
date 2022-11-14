# Art Market Forum Developers Notes

## General Notes

## BBPress templates

Folder **bbpress** created in _wp-content/themes/redink/_
Any templates needing amends are copied from the original BBPress templates folder to _wp-content/themes/redink/bbpress_

The main loop for the home page includes
_content-archive-forum.php_
_loop-forums-home.php_
_loop-single-forums-home.php_

_content-archive-forum.php_ contains an if statement looking for the homepage as the forum loop is used on other pages back up the breadcrumb trail. So these are run by the BBPress standard loop (excepting the CSS styling). Hence the naming of the loops with the suffix _home_

### Moving the search input:

The search input is in the loop in content-archive-forum.php. This has been copied to _wp-content/themes/redink/bbpress_ and **line 17** commented out. A shortcode - _<?php echo do_shortcode( '[bbp-search]'); ?>_ - has then been added to _section-user.php_ in _template-parts_ to bring the search back in the right place for the design.

## BBPress CSS

All overides and new CSS for BBPress items is in _sass/bbpress_

A lot of the forum styles require nesting inside #bbpress-forums to gain specificity

## General CSS / Layout

- max width on large screens set at 80rem and 95% on small
