<?php

/**
 * Setup.
 */
$svn_username = getenv( 'SVN_USERNAME' );
$svn_password = getenv( 'SVN_PASSWORD' );
$svn_path     = getenv( 'SVN_PATH' );
$wp_slug      = getenv( 'WP_SLUG' );

$svn_path = empty( $svn_path ) ? 'trunk' : $svn_path;

$svn_url = "https://plugins.svn.wordpress.org/$wp_slug";

$readme_file = getcwd() . '/readme.txt';

$svn_checkout_dir = tempnam( sys_get_temp_dir(), '' );

unlink( $svn_checkout_dir );

mkdir( $svn_checkout_dir );

/**
 * Start.
 */
echo '🚀 Deploy readme.txt to WordPress.org', PHP_EOL;

echo '- Subversion URL: ', $svn_url, PHP_EOL;
echo '- Subversion username: ', $svn_username, PHP_EOL;
echo '- Subversion password: ', $svn_password, PHP_EOL;
echo '- Subversion checkout directory: ', $svn_checkout_dir, PHP_EOL;
echo '- Path readme.txt: ', $readme_file, PHP_EOL;

/**
 * Subversion.
 * 
 * @link https://stackoverflow.com/a/122291
 */
passthru( "svn checkout $svn_url/$svn_path/ $svn_checkout_dir --depth empty" );

chdir( $svn_checkout_dir );

passthru( 'svn up readme.txt' );

copy( $readme_file, 'readme.txt' );

passthru( "svn commit --message 'Update readme.txt' --non-interactive --username '$svn_username' --password '$svn_password'" );

/**
 * Cleanup.
 */
passthru( "rm -f -R $svn_checkout_dir" );
