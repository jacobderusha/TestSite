/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function ($) {

        // Use this variable to set up the common and page specific functions. If you
        // rename this variable, you will also need to rename the namespace below.
        var Sage = {
            // All pages
            'common': {
                init: function () {

                    // JavaScript to be fired on all pages
                    console.log("this is a message from javascript");
                    $("h1").click(function () {
                        console.log("clicked an h1");

                    });



                },
                finalize: function () {
                    // JavaScript to be fired on all pages, after page specific JS is fired
                }
            },
            // Home page
            'home': {
                // JavaScript to be fired on the home page
            },
            'whos_better': {
                init: function clicked() {
                    if (document.getElementById("lm").checked === true) {
                        alert("You have selected Messi. Great Choice!");
                    } else if (document.getElementById("cr").checked === true) {
                        alert("OOPS!!! It seems you have figgited and clicked the wrong button. That's OK, we all make mistakes sometimes.");
                    } else if (document.getElementById("db").checked === true) {
                        alert("Uh Oh. Did you forget your glasses today? You didn't check Messi. Woops! That's OK we all mess up sometimes.");
                    } else if (document.getElementById("ney").checked === true) {
                        alert("I know I know it can be confusing when they are on the same team sometimes but Neymar is different than Messi. Neymar is not Messi though I am sorry. Don't worry though. You are forgiven for your mistake.");
                    }
                }
            };

            // The routing fires all common scripts, followed by the page specific scripts.
            // Add additional events for more control over timing e.g. a finalize event
            var UTIL = {
                fire: function (func, funcname, args) {
                    var fire;
                    var namespace = Sage;
                    funcname = (funcname === undefined) ? 'init' : funcname;
                    fire = func !== '';
                    fire = fire && namespace[func];
                    fire = fire && typeof namespace[func][funcname] === 'function';

                    if (fire) {
                        namespace[func][funcname](args);
                    }
                },
                loadEvents: function () {
                    // Fire common init JS
                    UTIL.fire('common');

                    // Fire page-specific init JS, and then finalize JS
                    $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function (i, classnm) {
                        UTIL.fire(classnm);
                        UTIL.fire(classnm, 'finalize');
                    });

                    // Fire common finalize JS
                    UTIL.fire('common', 'finalize');
                }
            };

            // Load Events
            $(document).ready(UTIL.loadEvents);

        })(jQuery); // Fully reference jQuery after this point.