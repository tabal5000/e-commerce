# e-commerce

cp .env.example .env
php artisan key:generate


<VirtualHost *:80>
  ServerName app.localhost
  DocumentRoot "/home/ep/Documents/e-commerce/public"
  <Directory "/home/ep/Documents/e-commerce/public">
    Options Indexes FollowSymLinks
	Require all granted
	AllowOverride all
  </Directory>
</VirtualHost>

chmod -R 755 /home/ep/Documents/e-commerce/public


# /etc/hosts
127.0.0.1 localhost
127.0.0.1 app.localhost
127.0.1.1 youssouf-Latitude-E6410

sudo service apache2 restart