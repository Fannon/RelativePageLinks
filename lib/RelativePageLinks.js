/**
 * AutoFillFormField Extension
 *
 * https://www.mediawiki.org/wiki/Extension:AutoFillFormField
 *
 * @author  Simon Heimler
 */
(function (mw, $) {

    'use strict';

    /** Namespace */
    mw.libs.relativePageLinks = {};



    // Register JavaScript Hook on DOM ready
    jQuery(document).ready(function() {

        try {

            console.info('relativePageLinks exec')


        } catch (e) {
            console.error('RelativePageLinks crashed on init!');
            console.error(e);
        }

    });

}(mediaWiki, jQuery));