based on course [https://www.udemy.com/wordpress-development-with-nodejs-gulpjs-composer-sass-more/learn/v4/](https://www.udemy.com/wordpress-development-with-nodejs-gulpjs-composer-sass-more/learn/v4/) but with a mix of vagrantup

Instructions:

- cd into vm folder and run
```bash
vagrant up
```
- cd into data/wpjs folder and run:
```bash
composer install
npm install
gulp
```

- Go to [http://wpdev.com/wpjs](http://wpdev.com/wpjs) and install WordPress

- Edit wp_options table change option_value of option named "home" to: [http://wpdev.com/wpjs](http://wpdev.com/wpjs) user and password are "remoto" without quotes.

- While developing run gulp serve for browser sync
