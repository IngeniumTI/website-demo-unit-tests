# My project's README

Guzzle setup notes

# old skool code unit test

# NOTE:  if you're using an AMI, you'll need to install php
`
yum -y install php70 php70-zip
`

# install is super easy
`
mkdir guzzle-demo ; cd guzzle-demo
curl -sS https://getcomposer.org/installer | php
php composer.phar require guzzlehttp/guzzle:^6.1 phpunit/phpunit:^5.0
`

# that will create the composer.json and download phpunit & guzzle, now off to test stuff ...

# create / edit test.php file, run like so
`
vendor/bin/phpunit test.php  ; echo $?
`
# notes for setting up repo (not done yet)

# use gitignore for vendor dir, composer will handle it

