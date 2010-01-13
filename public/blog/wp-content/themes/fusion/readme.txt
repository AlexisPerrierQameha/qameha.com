

--- Fusion Wordpress template ---

Project page: http://digitalnature.ro/projects/fusion/
(report any bugs or suggest improvements here)

Theme is licensed under GPL, please see http://www.opensource.org/licenses/gpl-license.php


CREDITS:
--------

- Design, coding and romanian translation (v2.6) by digitalnature (M. Popovici), http://digitalnature.ro
- Spanish translation, v2.1, bug-reports and improvements to comments by Miguel <boletin@almendron.com>
- Danish translation, v2.0 by Hans Cz. Jørgensen <hans.c.jorgensen@gmail.com>
- French translation, v2.0 by Olivier Despont, http://www.semageek.com
- German translation, v2.1 by Michael Liebwein, <michael.liebwein@googlemail.com>
- Croatian translation, v2.1 by phobos, http://phobos.byethost22.com
- Italian translation, v2.5 by Gabriele Brosulo, http://gabo.homelinux.com
- Alternate Italian translation, v2.2 by Gianni Diurno, http://gidibao.net
- Norwegian translation, v2.0 by Dagfinn, http://afoto.com
- Hungarian translation, v2.0 by Bálint Vereskuti, http://www.juventus-sopron.info
- Portuguese (Brazilian) translation, v2.3 by Jonatã Bolzan
- Korean translation, v2.3 by Jong-In Kim, http://incommunity.codex.kr/wordpress
- Bengali translation (front-end), v2.3 by Sajid Muhaimin Choudhury, <robinboss@gmail.com>
- Dutch translation, v2.5 by Jesse Klaasse, <jesseklaasse@hotmail.com>
- Russian translation (front-end), v2.5 by ptath, http://ptath.ru/
- javascript quote functions by mg12, http://www.neoease.com

To change the language, edit wp-config.php:
  define ('WPLANG', 'ro_RO');
(ro_RO is the Romanian language file from the theme lang folder)


If you wish to contribute by translating the theme please write me a email to hello@digitalnature.ro
Thanks to all who support this theme!



CHANGE LOG:
-----------

 -  5-apr-2009: v2.6  - important localization updates - removed some strings, added variables to others etc; translations before 2.6 will show as incomplete!
                      - updated Romanian translation to 2.6 changes
                      - updated Italian translation to 2.5
                      - added Dutch translation (2.5), thanks Jesse!
                      - fixed small bug in tab menus
                      - added Russian translation (2.5), front-end only, thanks Ptath
                      - removed ie7.css, not needed anymore since I found a alternative to the IE7 comment bug

 - 16-mar-2009: v2.5  - added Korean translation, thanks Kim!
                      - added Bengali translation, thanks Sajid!
                      - added a subtle background to form fields

 - 14-mar-2009: v2.4  - changed the basic layout structure and made sidebars fluid (34% and 20% of the page width)
                      - added Portuguese translation, thanks Jonatã!
                      - author page bug-fix (missing info if perma-links are enabled)
                      - fixed a clearing issue for left or right aligned elements inside a post or page
                      - fixed IE7 cleartype bug after fade in/out tabs
                      - fixed IE7 Peekaboo bug on post entries
                      - fixed IE5.5 page centering issue
                      - no-sidebar template bug fix (forgot to open a php tag)

 -  3-mar-2009: v2.3  - added Norwegian translation, thanks Dagfinn
                      - added Italian translations, thanks Gabriele and Gianni!
                      - added Hungarian translation, thanks Bálint!
                      - fixed indent on comments when avatars are disabled
                      - fixed small bug which made page-controls to not work with left sidebar and fluid width
                      - added file check for logo image and renamed default logo to preserve changes on update
                      - meta keywords and description are only present now if keywords exist in the theme options (because some people prefer SEO plugins, even if they are useless :)
                      - styled calendar widget

 - 22-feb-2009: v2.2  - added Author profile page
                      - updated Spanish translation
                      - added French translation, thanks Olivier!
                      - added German translation, thanks Michael!
                      - added Croatian translation, thanks Phobos!
                      - removed "comments are closed" message on pages that have comments closed and no comments written before that.
                      - small css/image optimizations
                      - for the sake of compatibility, now loading js with wp_enqueue_script (revert to the Wordpress bundled jquery - 1.2.6)

 - 15-feb-2009: v2.1  - added support for threaded comments (instead of reply button); make sure you have threaded comments enabled in WP-Admin
                      - added optional 2nd sidebar and page templates: "page without sidebar", "3-column page", "archives" and "links" templates (to apply, see "template" attribute when editing a page)
                      - added Danish translation, thanks Hans!
                      - added post count to the default sidebar Archives block
                      - added theme option for user CSS code
                      - changed spacing unit from px to em, where possible
                      - added visitor ability to change font size (layout control)
                      - moved possible plugin content above the submit button (on the comment pages)
                      - removed 'rss subscribe' link for comments (there already is one in the footer)
                      - fixed a small bug in the tab navigation (was not extending on fluid width)
                      - some javascript improvements

 - 12-feb-2009: v2.0  - added theme option to allow sidebar position change
                      - complete localization support
                      - added Spanish translation, thanks Miguel!
                      - updated Romanian translation
                      - changed widget look and fixed spacing (removed .box style since was causing problems with some widgets)
                      - stylesheets load now with @import (so the theme degrades to simple text in older browsers like NS4, IE4...)
                      - added IE 6 fix for transparent 24bit PNGs

 - 31-jan-2009: v1.83 - support for WP-PageNavi plugin
                      - removed whitespace:no-wrap for PRE tag
                      - updated jQuery to latest version (1.3.1)

 - 29-jan 2009: v1.82 - theme language support (testing)
                      - added translation: Romanian

 - 27-jan 2009: v1.81 - replaced "tags" text with a tag graphic icon
                      - added quote/reply buttons (instead of RE/Q text), only visible when mouse over a comment & when comments are open
                      - changed comment submit input with button link (nicer, but won't work on browsers with js disabled)

 - 25-jan 2009: v1.8  - added theme options; see: WP-Admin > Appearance > Fusion options
                      - added some jQuery fx to various elements
                      - various fixes and improvements to comment pages (thanks Miguel)

 - 23-jan-2009: v1.71 - fixed bug in comments (sidebar misplaced or not showing up if comments are closed and there are 1 or more comments posted), thanks again Miguel :)

 - 23-jan-2009: v1.7  - added trackbacks; moved both comments and trackbacks into tabs, visible only if comments>0
                      - added sub-menus for tabs (if nested pages exist)
                      - added rss links for categories in the sidebar
                      - changed the search box design a little
                      - styled pagination
                      - changes to Archives page
                      - replaced some of the hardcoded messages for automatic translation
                      - added subtle border to avatars
                      - fixed some small bugs in functions.php, thanks Miguel :)

 - 17-jan-2009: v1.6  - fixed image captions in posts
                      - more margin/padding adjustments
                      - small changes to the sidebar lists

 - 14-jan-2009: v1.5  - added comment time and date (sorry I missed that)
                      - made admin comment look different than the rest
                      - made homepage tab appear only if there are posts
                      - fixed a small ie6 bug in comments

 - 10-jan-2009: v1.4  - fixed "Headers already sent..." php error; thanks Brian :)
                      - removed border and spacing from smiley images
                      - made tabs show inside the header if they don't fit horizontally (instead of hide them in the sidebar or extend below the header)

 -  6-jan-2009: v1.3  - added IE 6 support (also degrades decently in IE 5.5); thanks Marc for the "IETester" link :)
                      - fixed Archives (tags were at the top of the post)
                      - some margin/padding adjustments
                      - added "posted by [author]"

 -  4-jan-2009: v1.2  - changes to the sidebar/widget design; categories and search are now visible when widgets are used
                      - fixed small bug in sidebar categories (corectly aligned lists if text is long)
                      - added page width control (allow user to switch from fixed to fluid layout)
                      - added border+padding for images inside .post
                      - moved "tags" at the bottom of the post
                      - switched colors for "no/comments"
                      - changed reply/quote icons to text
                      - fixed some IE7 bugs in comments

 - 30-dec-2008: v1.1  - replaced logo image with heading text
                      - added custom styles for usual HTML elements, tables, lists, forms...
                      - fixed Gravatars
                      - some changes to "Archives" page layout
                      - small CSS fixes to the comments section

 - 22-dec-2008: Initial release - 1.0


