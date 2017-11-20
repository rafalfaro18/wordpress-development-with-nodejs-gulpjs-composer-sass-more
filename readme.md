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

- Edit wp_options table change option_value of option named "home" to: [http://wpdev.com/wpjs](http://wpdev.com/wpjs) . User and password are "remoto" without quotes. You can easily do that sshing the vm and running:

```bash
mysql -u remoto -premoto -e "UPDATE wp_js_course.wp_options SET option_value = 'http://wpdev.com/wpjs' WHERE option_id = '2';"
```

- For browser sync while coding run:
```bash
gulp serve
```
