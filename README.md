wordpress-theme-skeleton
========================

[Josh Benham](http://joshbenham.net)'s skeleton theme for wordpress

Overview
--------

A basic [Wordpress](http://wordpress.org) skeleton theme that is responsive out of the box by
harnessing [Zurb Foundation](http://foundation.zurb.com/)

Installation
------------

Install wordpress theme

```sh
$ cd wordpress-directory/wp-content/themes
$ git clone https://github.com/joshbenham/wordpress-theme-skeleton.git skeleton
$ cd skeleton
```

Install SASS and Compass

```sh
$ gem update --system
$ gem install sass
$ gem install compass
```

Install Grunt and Plugins (might need to use sudo)

```sh
$ npm install
```

Install the standalone Foundation

```sh
$ wget https://github.com/zurb/foundation/archive/scss-standalone.zip
$ unzip scss-standalone
$ mv foundation-scss-standalone foundation
$ rm scss-standalone.zip
```

Generating concatenated and combined CSS and Javascript files

```sh
$ grunt watch
```

Dependencies
------------

 - [Foundation](http://foundation.zurb.com/)
 - [Normalize](http://necolas.github.io/normalize.css/)
 - [Modernizr](http://modernizr.com/)
 - [jQuery](http://jquery.com/)
 - [Respond.js](https://github.com/scottjehl/Respond) 1.1.0
 - [Picturefill](https://github.com/scottjehl/picturefill) 1.2.0
