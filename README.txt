MALCOLM CHILD THEME

INSTALLATION

	1. Upload the Malcolm child theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well).
	2. Go to your WordPress dashboard and select Appearance.
	3. Activate the Malcolm child theme.
	4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

Note: After you download and unarchive the theme from GitHub, you may want to rename the malcolm-master folder to malcolm.

WIDGETS

The frontpage features 9 custom widget areas:

	1. Slider. For use with the Genesis Responsive Slider plugin.
	2. Home Top Message. Use a text widget here to display a welcome message etc.
	3. Home Action. Use a text widget here to display the "call to action" banner.
	4. Home Bottom 1, Home Bottom 2 and Home Bottom 3. Use the Genesis Featured Page widgets here.
	5. Pre Footer 1. Use the Genesis Featured Posts widget or a text widget here.
	6. Pre Footer 2. You can use various widgets here such as the Genesis eNews plugin, Simple Social Icons plugin, Recent Posts widget, Search widget etc.
	7. Malcolm Footer. This new widget area replaces the default footer.

Additionally, Malcolm comes with 2 other widget areas, Before Entry and After Entry. They appear before/after posts on single post pages.

WIDGET PAGE TEMPLATE
	Malcolm comes with a widget Page Template. To use it, publish an empty page using the Widget Page Template from the drop down menu then start adding widgets
	to it. Refer to the Demo site for an example.

CONFIGURING THE WIDGETS AS SEEN ON THE DEMO SITE

Genesis Responsive Slider:
	1. Maximum Slider Width = 1160
	2. Maximum Slider Height = 350
	3. Check "Display Next/Previous Arrows" in Slider?
	4. Check "Display Pagination" in Slider?
	5. Check "Display Post/Page Title" in Slider?
	6. Check "Display Content" in Slider?
	7. Select "Display post content" from drop menu.
	8. Enter 100 into "Limit content to" text field.
	9. Slider Excerpt Width = 50
	10. Excerpt Location vertical = Bottom
	11. Excerpt Location horizontal = Left

Home Top Message:
	Use a text widget. No special configuration.

Home Action:
	Use a text widget. Configure as follows ... 

	<div class="three-fourths first">Draw the attention of your visitors to this "call to action" banner!</div>

	<div class="one-fourth"><a class="action-button alignright" href="#">Contact Us Today</a></div>

Home Bottom 1, Home Bottom 2, Home Bottom 3:
	1. Enter title and select the page you want featured from the drop down menu.
	2. Check "Show Featured Image"
	3. Select "feature-page (340x160)" image size from drop down menu. Choose "None" for Image Alignment.
	4. Check "Show Page Content" and enter number in "Content Character Limit" field. Demo site uses 200.
	5. Enter some text in "More Text" field. Demo site uses read more.

Pre Footer 1:
	1. Select Category from drop down menu.
	2. Enter number of posts you would like to show. Demo site uses 2.
	3. Check "Show Featured Image" box.
	4. Select "featured-post (100x100)" image size or "thumbnail (150x150)" image size.
	5. Image Alignment, choose left or right from the drop down menu.
	6. Check "Show Post Title". Optional - check "Show Post Info"
	7. Select "Show Content Limit" from drop down menu.
	8. Enter number of characters in "Limit content to" box. Demo site uses 450.
	9. Enter text in "More Text" field. Demo site uses [Read More ...]

Pre Footer 2:
	Use various widgets here, text widget, search widget etc. Demo site uses Genesis eNews and Simple Social Icon plugins.

Malcolm Footer
	This new widget area replaces the default footer and makes editing the footer area super easy. Simply add whatever text you want including HTML to a text widget and pop it into
	the Malcolm Footer widget area. You can even use the Simple Social Icons plugin here if you want.

	If you're using some text here be sure to tick the box that says "Automatically add paragraphs".

Additionally, the Archive Page and 404 Error Page of the demo site makes use of 2 plugins which allows you to add content to those pages via widgets.
Those plugins are listed further down this page under the section Recommended Plugins.

PRIMARY NAVIGATION EXTRAS
	As of Genesis 2.1, the Primary Navigation Extras options have been removed for new installs. (upgrades of current installs to 2.1 will not lose the Primary Navigation Extras settings)
	The prefered method of adding custom links like Twitter or RSS is to use a custom menu item and give it a CSS class of right.

	In this version of Malcolm, images have been dropped for Twitter & RSS links in favour of Genericons icon fonts. The list of supported icon fonts are:

	- dribble
	- email
	- facebook
	- flickr
	- github
	- googleplus
	- instagram
	- linkedin
	- pinterest
	- tumblr
	- twitter
	- vimeo
	- wordpress
	- youtube

	For example, to add a Twitter link, add a custom link to your menu and in the CSS Classes input field enter right twitter. Refer to the theme docs for details.

CONTENT BOXES
	The custom content boxes make use of DIV classes. For example ...

	<div class="content-box-blue">some random text</div>

	There are 7 styles to choose from. Refer to the style sheet for details.

GRADIENT BUTTONS
	Each button has a unique class. For example ...

	<a class="button-green" href="#">Link Text</a> 

	The above will render the Green button. There are 11 styles to choose from. Refer to the style sheet for details.

HEADER AREA IMAGE
	Malcolm uses a logo in the header area which you will find in the theme's image folder. Create a new image with the same dimensions. To display it navigate to
	Genesis > Theme Settings and select "Image logo" from the drop down menu.

RECOMMENDED PLUGINS
	1. Genesis Responsive Slider - http://wordpress.org/extend/plugins/genesis-responsive-slider/
	2. Genesis eNews Extended - http://wordpress.org/extend/plugins/genesis-enews-extended/
	3. Genesis Widgetized Archive - http://wordpress.org/plugins/genesis-widgetized-archive/
	4. Genesis Widgetized Not Found & 404 - http://wordpress.org/plugins/genesis-widgetized-notfound/
	5. Simple Social Icons - http://wordpress.org/plugins/simple-social-icons/
	6. Regenerate Thumbnails - http://wordpress.org/extend/plugins/regenerate-thumbnails/

CREDIT
	1. Content Boxes by StudioPress - http://www.studiopress.com/design/colored-content-boxes-buttons.htm/
	2. Gradient Buttons by StudioPress - http://www.studiopress.com/design/colored-content-boxes-buttons.htm/
	3. Icons for eNews and Search input fields by iconmonstr - http://iconmonstr.com/
	4. Responsive Menus by Ozzy Rodriguez - http://wpbacon.com/tutorials/genesis-responsive-menu-2-0/
	5. Based on ThemeCore by Brad Potter https://github.com/bradpotter/themecore/

FURTHER
	1. Theme Release Page - http://wpcanada.ca/our-themes/malcolm/
	2. Theme Documentation - http://docs.wpcanada.ca/docs/malcolm/
	3. Theme Demo - http://demo.wpcanada.ca/malcolm/
	4. Download from GitHub - https://github.com/lenkutchma/malcolm

BUG REPORTS
	https://github.com/lenkutchma/malcolm/issues

SUPPORT
	Support is limited to helping you get your theme up and running just like you see on the demo site. Support does not include customizations.

Enjoy!