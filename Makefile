
.PHONY : all apache2

all:

	
apache2:
	sudo cp -rf ./apache2/sites-available/* /etc/apache2/sites-available/
	sudo cp -rf ./apache2/ports.conf /etc/apache2/ports.conf
	sudo cp -f ./apache2/php5/apache2/php.ini /etc/php5/apache2/
	sudo a2enmod rewrite 
	sudo service apache2 restart
	sudo apt-get install php5-pgsql php5-cli
