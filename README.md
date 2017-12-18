# eXamples tutorial
In this stories we will cover development of simple (yet great) extension based on **X** library by JoomlPlace.

And to begin with it we will need to prepare our Joomla! CMS environment.

#### Joomla! CMS installation
You can do it by yourself or using vagrant.
To use vagrant simply type 
```
vagrant init thealex7r/joomla-dev; vagrant up
```
into you command line and hit enter. You will be able to access Joomla files with `./html/`

#### Setup the Joomplace\X library
Next step is to set up library itself. There is 2 ways:
- use installable package;
- use source files and install dependencies with composer;

For the first one - `link is comming soon` will get you installable package.

And to go with second one go to command line (I'll cover `vagrant` environment which is accessed by `vagrant ssh` 
command).

Navigate to libraries folder: `cd /var/www/html/libraries`;

Execute download and unzip src files: 
```
wget https://github.com/joomplace/X/archive/laravel-it.zip
unzip laravel-it.zip
mv ./X-laravel-it/ ./JoomplaceX
rm -f laravel-it.zip 
cd ./JoomplaceX/
composer install
```
Ok, we did download and install the library itself, but you would like to install autoloader for it.
```
cd ../../tmp/
wget https://github.com/joomplace/Xautoloader/archive/master.zip
unzip master.zip -d ./../plugins/system/
rm -f master.zip
cd ../plugins/system
mv Xautoloader-master joomplaceXautoloader
```
And now we only have to go to admin (l: `admin`,p: `qweasd`) and discover and enable the plugin.

Ok, we are ready for action! 