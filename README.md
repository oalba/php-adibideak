#PHP

[w3schools](http://www.w3schools.com/php/)

[http://php.net/manual/](http://php.net/manual/)

###Servers

MAC 

[https://bitnami.com/stack/mamp](https://bitnami.com/stack/mamp)

Windows 

[http://www.wampserver.com/](http://www.wampserver.com/)

[https://www.apachefriends.org](https://www.apachefriends.org)

Portable: [http://www.usbwebserver.net/en/](http://www.usbwebserver.net/en/) 

# Ubuntu server setup
```
sudo apt-get update
# apache + php + mysql
$ sudo apt-get install php5 mysql-server mysql-client php5-mysql

# port scanner
sudo apt-get install nmap
# nmap localhost
  
# git
sudo apt-get install git

# Sublime Text

## download http://www.sublimetext.com/2
#tar -xjvf Sublime\ Text\ 2.0.2.tar.bz2 
#cd Sublime\ Text\ 2/
##./sublime_text &

# OR
# http://www.ubuntuupdates.org/ppa/sublime_text_2
# http://www.ubuntuupdates.org/ppa/sublime_text_3

#sudo add-apt-repository ppa:webupd8team/sublime-text-3 
#sudo apt-get update
#sudo apt-get install <package name>

# chromium
sudo apt-get install chromium-browser
  
# config apache
cd /var/www/

sudo ln -s /home/zubiri/Documents/workspace/ workspace

# http://localhost/workspace

# PHP IDE: Aptana(eclipse + php) 
# java: http://openjdk.java.net/install/
$ sudo apt-get install openjdk-7-jre

# Download aptana http://www.aptana.com/  unzip and run

Restart apache:
$ sudo apache2ctl graceful

```
## PHP

Start PHP server:

```
$ php -S localhost:8000
```
Access using:
```
http://localhost:8000/filename.php
```

With Apache:
```
http://localhost/.../.../filename.php
```

## Xdebug

With SublimeText:

http://stackoverflow.com/questions/5504152/is-it-possible-to-use-xdebug-on-ubuntu

http://askubuntu.com/questions/503751/configure-xdebug-ubuntu-14-04

http://www.youtube.com/watch?v=Zk87LSbxLtw

https://github.com/martomo/SublimeTextXdebug

http://www.sitepoint.com/debugging-xdebug-sublime-text-3/

Install:
```
$ sudo apt-get install php5-xdebug
```
you should change your /etc/php5/apache2/conf.d/20-xdebug.iniand add this line:
```
  zend_extension=/path/to/your/xdebug.so 
  xdebug.remote_enable = 1
```
then
```
$ sudo service apache2 restart
```
Install xdebug in sublimetext using package manager

in sublime text, project -> save project as, and save in the root. Add this:

```
{
  "folders":
  [
    {
    "follow_symlinks": true,
    "path": "/home/../workspace"
    }
  ],
  "settings": {
      "xdebug": {
          "url": "http://localhost/",
      }
  }
}
```
