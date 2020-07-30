Apache and PHP on MAC
1. Load PHP files into /Library/WebServer/Documents
2. vi /etc/apache2/httpd.conf
3. Add index.php to DirectoryIndex
Example: DirectoryIndex index.html index.php
4. Make sure php load module is not commented out.
Example: LoadModule php7_module libexec/apache2/libphp7.so
Restart Apache: sudo apachectl restart

My SQL
1. Login to myql: mysql -u root -p


Find php.ini location
1. Create a php file.
2. Add: <?php phpinfo(); ?>
3. Restart Apache
