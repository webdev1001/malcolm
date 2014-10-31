# Malcolm child theme

## Installation

1. Upload the Malcolm child theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)

2. Go to your WordPress dashboard and select Appearance.

3. Activate the Malcolm child theme.

4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

## Note

After you download and unarchive the theme from GitHub, you may want to rename the malcolm-master folder to malcolm. (optional)

## Widgets

The frontpage features 9 custom widget areas:

1. Slider. For use with the Genesis Responsive Slider plugin.

2. Home Top Message. Use a text widget here to display a welcome message etc. You could also use the Genesis Featured Posts widget or Genesis eNews Extended widget.

3. Home Action. Use a text widget here to display the "call to action" banner.

4. Home Middle 1. Use the Genesis Featured Page widgets here. You could also use Genesis Featured Posts widget.

5. Home Middle 2. Use the Genesis Featured Page widgets here. You could also use Genesis Featured Posts widget.

6. Home Middle 3. Use the Genesis Featured Page widgets here. You could also use Genesis Featured Posts widget.

7. Home Signup. For use with the Genesis eNews Extended widget.

8. Pre Footer 1. Use the Genesis Featured Posts widget. You could also use a text widget or Genesis eNews Extended widget.

9. Pre Footer 2. You can use various widgets here such as the Genesis eNews Extended plugin, Simple Social Icons plugin, Recent Posts widget, Search widget etc.

Additionally, Malcolm comes with 2 other widget areas, Before Entry and After Entry. They appear before/after posts on single post pages.

## Widget Page Template

Malcolm comes with a widget Page Template. To use it, publish an empty page using the Widget Page Template from the drop down menu then start adding widgets
to it. Refer to the Demo site for an example.

## Configuring the widgets as seen on the Demo site

**Genesis Responsive Slider:**

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

**Home Top Message:**

1. Text widget. No special configuration.

2. Genesis eNews Extended widget. Configure as you normally would.

3. Genesis Featured Posts widget. For image size choose featured-post (100x100). For image alignment choose left or right if using featured image.

**Home Action:**

1. Use a text widget. Configure as follows ... 

		<div class="three-fourths first">Draw the attention of your visitors to this "call to action" banner!</div>
		<div class="one-fourth"><a class="button alignright" href="#">Contact Us Today</a></div>

**Home Bottom 1, Home Bottom 2, Home Bottom 3: Genesis Featured Page widget**

1. Enter title and select the page you want featured from the drop down menu.

2. Check "Show Featured Image"

3. Select "feature-page (346x150)" image size from drop down menu. Choose "None" for Image Alignment.

4. Check "Show Page Content" and enter number in "Content Character Limit" field. Demo site uses 200.

5. Enter some text in "More Text" field. Demo site uses read more.

**Home Bottom 1, Home Bottom 2, Home Bottom 3: Genesis Featured Posts widget**

1. Enter title.

2. Number of Posts to Show: 1

3. Check "Show Featured Image"

4. Select "feature-page (346x150)" image size from drop down menu. Choose "None" for Image Alignment.

5. Select "Show Content Limit" from drop down menu and enter number in "Limit content to x character" field. Demo site uses 200.

6. Enter some text in "More Text" field. Demo site uses read more.

**Home Signup:**

For exclusive use with Genesis eNews Extended widget. Make sure to display only the email field.

**Pre Footer 1: Genesis Featured Posts widget**

1. Select Category from drop down menu.

2. Number of Posts to Show: Whatever you like.

3. Check "Show Featured Image" box.

4. Select "featured-post (100x100)" image size or "mini-square (80x80)" image size.

5. Image Alignment, choose left or right from the drop down menu.

6. Check "Show Post Title". Optional - check "Show Post Info"

7. Select "Show Content Limit" from drop down menu.

8. Enter number of characters in "Limit content to" box. Demo site uses 200.

9. Enter text in "More Text" field. Demo site uses read more.

If you wish to display multiple feature posts here use multiple widgets.

**Pre Footer 2:**

Use various widgets here, text widget, search widget etc. Demo site uses Genesis eNews Extended and Simple Social Icon plugins.

Additionally, the Archive Page and 404 Error Page of the demo site makes use of 2 plugins which allows you to add content to those pages via widgets.
Those plugins are listed further down this page under the section **Recommended Plugins**.

## Primary Navigation Extras

As of Genesis 2.1, the Primary Navigation Extras options have been removed for new installs. (upgrades of current installs to 2.1 will not lose the Primary Navigation Extras settings) The prefered method of adding custom links like Twitter or RSS is to use a custom menu item and give it a CSS class of right.

In this version of Malcolm, Dashicons have been dropped for Twitter & RSS links in favour of Genericons icon fonts. The list of supported icon fonts are:

1. CodePen
2. Dribble
3. Email
4. Facebook
5. Flickr
6. Foursquare
7. GitHub
8. Google+
9. Instagram
10. LinkedIn
11. Pinterest
12. Reddit
13. RSS
14. StumbleUpon
15. Tumblr
16. Twitter
17. Vimeo
18. WordPress
19. YouTube

For example, to add a Twitter link, add a custom link to your menu and in the CSS Classes input field enter right twitter. Refer to the theme docs for details.

## Content Boxes:

The custom content boxes make use of DIV classes. For example ...

	<div class="content-box-blue">some random text</div>

There are 8 styles to choose from. Refer to the style sheet for details.

## Gradient Buttons:

Each button has a unique class. For example ...

	<a class="button-green" href="#">Link Text</a> 

The above will render the Green button. There are 11 styles to choose from. Refer to the style sheet for details.

## Header Area Image

Malcolm uses a logo in the header area which you will find in the theme's image folder. Create a new image with the same dimensions. To display it navigate to
Genesis > Theme Settings and select "Image logo" from the drop down menu.

## Recommended Plugins

1. [Genesis Responsive Slider](http://wordpress.org/extend/plugins/genesis-responsive-slider)

2. [Genesis eNews Extended](http://wordpress.org/extend/plugins/genesis-enews-extended/)

3. [Genesis Widgetized Archive](http://wordpress.org/plugins/genesis-widgetized-archive/)

4. [Genesis Widgetized Not Found & 404](http://wordpress.org/plugins/genesis-widgetized-notfound/)

5. [Simple Social Icons](http://wordpress.org/plugins/simple-social-icons/)

6. [Regenerate Thumbnails](http://wordpress.org/extend/plugins/regenerate-thumbnails/)

## Credit

1. [Content Boxes by StudioPress](http://www.studiopress.com/design/colored-content-boxes-buttons.htm)

2. [Gradient Buttons by StudioPress](http://www.studiopress.com/design/colored-content-boxes-buttons.htm)

3. [Icons for eNews and Search input fields by iconmonstr](http://iconmonstr.com/)

4. [Responsive Menus by Ozzy Rodriguez](http://ozzyrodriguez.com/tutorials/genesis/genesis-responsive-menu-2-0/)

5. Based on [ThemeCore](https://github.com/bradpotter/themecore) by Brad Potter

## Further

1. [Theme Release Page](http://wpcanada.ca/our-themes/malcolm/)

2. [Theme Documentation](http://docs.wpcanada.ca/docs/malcolm/)

3. [Theme Demo](http://demo.wpcanada.ca/malcolm/)

4. Download from [GitHub](https://github.com/lenkutchma/malcolm)

## Bug Reports

https://github.com/lenkutchma/malcolm/issues

## Support

Support is limited to helping you get your theme up and running just like you see on the demo site. **Support does not include customizations.**

Enjoy!