<?php
/**
 * Automatically fill a SemanticForms input field based on the (live) input of other fields
 *
 * For more info see http://mediawiki.org/wiki/Extension:RelativePageLinks
 *
 * @file
 * @ingroup Extensions
 * @package MediaWiki
 *
 * @links https://github.com/Fannon/RelativePageLinks/blob/master/README.md Documentation
 * @links https://www.mediawiki.org/wiki/Extension_talk:RelativePageLinks Support
 * @links https://github.com/Fannon/RelativePageLinks/issues Bug tracker
 * @links https://github.com/Fannon/RelativePageLinks Source code
 *
 * @author Simon Heimler (Fannon), 2015
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 */

//////////////////////////////////////////
// VARIABLES                            //
//////////////////////////////////////////

$dir         = dirname( __FILE__ );
$dirbasename = basename( $dir );


//////////////////////////////////////////
// CREDITS                              //
//////////////////////////////////////////

$wgExtensionCredits['other'][] = array(
   'path'           => __FILE__,
   'name'           => 'RelativePageLinks',
   'author'         => array( 'Simon Heimler' ),
   'version'        => '0.1.0',
   'url'            => 'https://www.mediawiki.org/wiki/Extension:RelativePageLinks',
   'descriptionmsg' => 'relativepagelinks-desc',
   'license-name'   => 'MIT'
);


//////////////////////////////////////////
// RESOURCE LOADER                      //
//////////////////////////////////////////

$wgResourceModules['ext.RelativePageLinks'] = array(
   'scripts' => array(
      'lib/RelativePageLinks.js',
   ),
   'localBasePath' => __DIR__,
   'remoteExtPath' => 'RelativePageLinks',
);



//////////////////////////////////////////
// LOAD FILES                           //
//////////////////////////////////////////

// Register hooks
$wgHooks['BeforePageDisplay'][] = 'RelativePageLinksOnBeforePageDisplay';

// Register extension messages
$wgMessagesDirs['RelativePageLinks'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['RelativePageLinks'] = __DIR__ . '/RelativePageLinks.i18n.php';


//////////////////////////////////////////
// HOOK CALLBACKS                       //
//////////////////////////////////////////

/**
* Add plastic.js library to all pages
*/
function RelativePageLinksOnBeforePageDisplay(OutputPage &$out, Skin &$skin) {

  // Add as ResourceLoader Module
  $out->addModules('ext.RelativePageLinks');

  return true;
}
