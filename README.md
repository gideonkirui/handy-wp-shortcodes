# Handy Wordpress Shortcodes (Wordpress Plugin)

I built this plugin for my own personal use. There might be similar plugins on the market, but I wanted a lean plugin that had only what I needed with nothing that I didn't. This plugin contains simple shortcodes that add functionality to any wordpress site.

## How to Install:

Download (or clone) this repository to your computer. Then install it like any other Wordpress Plugin. You can install either **via FTP** or through Wordpress' built in **plugin uploader** tool.

### Install via FTP

Naviagate to your `wp-contents/plugins/` folder and place the jac-shortcodes folder into that directory so that the new filestructure is `wp-contents/plugins/jac-shortcodes/`.

Now log into your _Wordpress Admin_ and select **Plugins** and find the _Jacurtis Shortcodes_ plugin and click _Activate_. You now have access to all shortcodes.

### Install via Uploader

If you wish to upload the plugin directly through the Wordpress Backend, then log into your _Wordpress Admin_ and navigate to **Plugins -> Add New**. Click the _Upload Plugin_ button on the top near the _Plugins_ header and find the **.zip file** (note: not the folder, but the .zip) and select it and upload.

With the plugin successfully uploaded, you will have an option to _Activate Plugin_. Select this option. You ow have access to all shortcodes.

## Shortcodes

Currently there are just 3 shortcodes with a few styles. This can be updated as more shortcodes are needed, for things like buttons, forms, tabs, etc.

### Word Highlighter

This highlights words like with a traditional highlighter on paper. Highlighting words is a nice way to bring attention to the words, without affecting SEO like bold and italizing words can do. You may also highlight them any color you would like by passing in an option. You can have as many different colors on the same page as you wish.

`[highlight]Your content here[/highlight]`

Options:
	
	1. Color: You can customize the color by passing in the `color=#hexval` parameter. The default is a natural light yellow color if nothing is passed.

		- Example: `[highlight color="#fff2d0"]My text will now be highlighted yellow[/highlight]


### Inline Syntax Code

Sometimes you need to show code syntax inline in paragraphs. This is strangely rarely supported in most themes. This is especially useful when highlighting quick lines of code, or file structures.

`[inline]Your content here[/inline]`

Options:
	
	1. Class: Need to add your own classes to the inline snippet? That is your business, go ahead and add them here, as many as you want and they will attached around the text.

		- Example: `[inline class="example-class"]code goes here[/inline]


### Syntax Code Block

Syntax code blocks are necessary for any developer with a blog. Of course there are more complicated plugins out there if you need the whole kitchen sink, but those are bloated, complex, and significantly slow down load time. This code block has no effect on load time (its only a couple of css styles, no JS) and in my opinion renders cleaner on screen. Of course maybe you do need syntax highlighting (which this doesn't support) in which case you would need a more advanced plugin. It is up to you.

    [well]
	    Your code block here
	    	Supports indentation
	    But not syntax highlighting
	[/well]

Options:

	1. Dark: Set this to `"true"` if you want to color of the well to be black background with white text (like a terminal). Not setting this attribute will output a light gray well with black text.

		- Example: `[well dark="true"]Black background with white text[/well]`
	
	1. Class: Add your own classes to this code block to enhance it even more.

		- Example: `[well class="example-class"]Custom Class added[/well]`

	1. Id: Add your own custom `id` to the code block. This is helpful if you need to target it with javascript, for example to syntax highlight or add hover effects or copy/paste functionality.

		- Example: `[well id="example-id"]Custom Id Attribute Added[/well]`


## FAQ

#### Q: How often is this plugin updated?

	- **A:** As often as I need new shortcodes, or I find a bug in the existing ones.

#### Q: Can you add _____________ shortcode to this plugin?

	- **A:** Make an issue on github and I will consider it.

#### Q: What is the reason to use this plugin instead of theme shortcodes?

	- **A:** Several reasons come to mind. First with this plugin you can rely on shortcodes to work even after switching themes. It is much more reliable to use the shortcodes in the plugin than those in your `functions.php` file of your theme.

#### Q: Are you planning on developing this for any other platforms or frameworks?

	- **A:** No.