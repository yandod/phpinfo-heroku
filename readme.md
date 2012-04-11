# What is this?
This is sample application which is running on Heroku.
Pure Heroku php doesn't support mbstring.

This sample is challenging to use mbstring as shared library.


# What I did

	mkdir tmp
	cd tmp
	git clone https://github.com/php/php-src.git
	cd php-src
	git checkout php-5.3.10
	cd ext/mbstring
	/app/php/bin/phpize
	./configure --with-php-config=/app/php/bin/php-config
	make

# Get library

https://github.com/yandod/heroku-libraries
