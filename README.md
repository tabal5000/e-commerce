# e-commerce

cp .env.example .env
php artisan key:generate

chmod -R 755 /home/ep/Documents/e-commerce/public


# /etc/hosts
127.0.0.1 localhost
127.0.0.1 app.localhost
127.0.1.1 youssouf-Latitude-E6410

sudo service apache2 restart


<!-- laravel.conf
<VirtualHost *:80>
    ServerAdmin admin@superduperbeer.com
    ServerName superduperbeer.com
    ServerAlias www.superduperbeer.com
    DocumentRoot /home/ep/NetBeansProjects/e-commerce/public

    <Directory "/home/ep/NetBeansProjects/e-commerce/public">
      Require all granted
      AllowOverride all
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

-->

<!-- /etc/hosts
127.0.0.1	localhost
127.0.1.1	ep

#Virtual Hosts
127.0.1.1 superduperbeer.com

# The following lines are desirable for IPv6 capable hosts
::1     ip6-localhost ip6-loopback
fe00::0 ip6-localnet
ff00::0 ip6-mcastprefix
ff02::1 ip6-allnodes
ff02::2 ip6-allrouters
-->
