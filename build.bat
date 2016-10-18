php composer.phar install
php app/console doctrine:database:create
php app/console doctrine:schema:update --force
php app/console assets:install
php app/console cache:clear --env=dev