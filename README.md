# WP Allowed Hosts
This plugin has been created after the vulnerability known as `CVE-2017-8295` has been disclosed, 
this plugin will protect you from that attack with no hassle, just add simple line to your `wp-config.php` .

# Usage
Just add the following line to your `wp-config.php`
```php
// WP Allowed Hosts Plugin
define( 'WP_ALLOWED_HOSTS', 'mysit.com' );
```

You can also add multiple host names as following
```php
// WP Allowed Hosts Plugin
define( 'WP_ALLOWED_HOSTS', 'site1.com,site2.com' );
```
