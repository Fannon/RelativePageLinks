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

            var pageName = mw.config.get('wgPageName');
            pageName = pageName.split('_').join(' ') + '/';

            // Iterate all links within the mediawiki content area
            $('#mw-content-text a').each(function() {

                // If the link name contains the page name, substitute it with a '.'
                if (this.innerHTML.indexOf(pageName) > -1) {
                    this.innerHTML = this.innerHTML.replace(pageName, './')
                }
            });


        } catch (e) {
            console.error('RelativePageLinks crashed on init!');
            console.error(e);
        }

    });

}(mediaWiki, jQuery));