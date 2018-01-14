######################################
Navodila za namestitev strežnika na
Ubuntu Virtualki, uporabljena na vajah:

sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install php7.1 php7.1-mcrypt php7.1-xml php7.1-gd php7.1-opcache php7.1-mbstring php7.1-ext-curl php7.1-mysql php7.1-curl


sudo apt install git
cd NetBeansProjects/
git clone https://github.com/tabal5000/e-commerce.git

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
composer update

######################################
Geslo za uvoz certifikatov: ep
######################################
Uporabniška imena in geslo

Admin:
    user -> admin@ep.si
    pass -> pass

Staff:
    user-> ana@ep.si
    pass-> pass

Customer:
    user-> ettie35@haag.com
    pass-> pass

    user-> scarlett.cassin@yahoo.com
    pass-> pass

    user-> morgan19@gmail.com
    pass-> pass
######################################
