## Chronolabs Cooperative presents

# Licensing Repository Services API  - http://licenses.snails.email -

# BASIC INSTALLATION MANUAL

## by. Dr. Simon Antony Roberts (Sydney) <simon@snails.email>

### Version: Prealpha (Unreleased)

#### Demo: http://licenses.snails.email

# Foreword

In this manual we will take you through all the conditions which you will encounter in general Ubuntu or Debian environment setting up this API. It will include cronjobs as well as any basis of general configuration you will encounter with your API in configuring and definition operations parameters in most types of places you find Ubuntu or Debian.

Download the API archive of PHP files from: https://sourceforge.net/p/chronolabs-cooperative/files/licenses.labs.coop

# Setting up the environment
You will first have to set up the environment running the following script at root on Ubuntu or Debian Server it will install all the system environment variables you require to do an installation:-

    $ sudo apt-get install rar* p7zip-full unace unrar* zip unzip sharutils sharutils uudeview mpack arj cabextract file-roller tasksel nano bzip2 cpulimit -y
    

Now you will have to execute 'tasksel' in root with the 'sudo' precursor for this to install the LAMP environment; run the following command and install the LAMP environment.

    
    $ sudo tasksel

    
Now you have to make your paths for the system to operate from there is a few the following paths we will discuss. 


You will now need to make these paths or the paths you have decided and set them in the constants. The following commands will do this (We are assuming your user-name is 'web' in this example of calls to do on the ubuntu service.

We are going to assume for the fonting api runtime PHP files you are going to store them in /var/www/licenses.snails.email and this will be the path you have to unpack the downloaded archive from Chronolabs APIs on sourceforge.net into with the contants.php listed in the root of this folder.
Setting Up Apache 2 (httpd)

We are going to assume your domain your setting it up on is a sub-domain of mysite.com so the following example in installing and setting up Apache 2 examples will place this on the sub-domain of licenses.mysite.com.

You will have to make the file /etc/apache2/sites-available/licenses.mysite.com.conf which you can with the following command:-
$ sudo nano /etc/apache2/sites-available/licenses.mysite.com.conf
You need to put the following configuration in to run a standard site, there is more to add for SSL which is not included in this example but you can find many examples on what to add to this file for port 443 for SSL which is duplicated code for port 443 not 80 with the SSL Certificates included, use the following code as your measure of basis of what to configure for apache 2 (httpd):-

    
    <VirtualHost *:80>
           ServerName licenses.mysite.com
           ServerAdmin webmaster@mysite.com
           DocumentRoot /var/www/fonts-api
           ErrorLog /var/log/apache2/licenses.mysite.com-error.log
           CustomLog /var/log/apache2/licenses.mysite.com-access.log common
           <Directory /var/www/fonts-api>
                   Options Indexes FollowSymLinks MultiViews
                   AllowOverride All
                   Require all granted
           </Directory>
    </VirtualHost>
    

You need to now enable this website in apache the following command will do this from root:-

    
    $ sudo a2ensite licenses.mysite.com
    $ sudo service apache2 reload
    

This is all that is involved in configuring apache 2 httpd on Debian/Ubuntu, the next step is the database.

# Installing API

Copy the contents of this distribution to your visually routable path via http(s) etc. Then poll the path required and run the install;
