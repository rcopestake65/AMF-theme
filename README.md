Art Market Forum Developers Notes

General Notes

BBPress templates
Folder bbpress created in wp-content/themes/redink/
Any templates needing amends are copied from the original BBPress templates folder to wp-content/themes/redink/bbpress

Moving the search input: The search input is in the loop in content-archive-forum.php. This i has been copied to wp-content/themes/redink/bbpress and line 17 commented out. A shortcode - <?php echo do_shortcode( '[bbp-search]'); ?> - has then been added to section-user.php in template-parts to bring the search back in the right place for the design.
BBPress CSS

General CSS / Layout
