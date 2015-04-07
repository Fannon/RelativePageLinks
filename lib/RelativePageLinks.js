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
            pageName = pageName.split('_').join(' ');

            // Iterate all links within the mediawiki content area
            $('#mw-content-text a').each(function() {

                var linkName = this.innerHTML;

                // If the link name contains the page name, substitute it with a '.'
                if (linkName.indexOf(pageName) > -1) {

                    var newTitle = this.innerHTML.replace(pageName, '.')

                    this.title = newTitle;
                    this.innerHTML = newTitle;
                }
            });


        } catch (e) {
            console.error('RelativePageLinks crashed on init!');
            console.error(e);
        }

    });

}(mediaWiki, jQuery));