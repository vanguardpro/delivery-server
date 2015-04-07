DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```


REQUIREMENTS
------------

The minimum requirement by this application template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install via git

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install the application using the following command:

~~~
git clone https://github.com/adjumpmedia/blog.git
Install composer if not installed:
curl -sS https://getcomposer.org/installer | php
php composer.phar global require "fxp/composer-asset-plugin:1.0.0"
php composer.phar update
~~~


GETTING STARTED
---------------

After you install the application, you have to conduct the following steps to initialize
the installed application. You only need to do these once for all.

1. Run command `php init` to initialize the application with a specific environment.
2. Create a new database and adjust the `components['mongodb']` configuration in `common/config/main-local.php` accordingly.
    'mongodb' => [
        'class' => '\yii\mongodb\Connection',
        'dsn' => 'mongodb://localhost:27017/blog',
    ]
3. Apply migrations with console command `yii mongodb-migrate`. This will create tables needed for the application to work.
4. Set document roots of your Web server:

- for frontend `/path/to/yii-application/frontend/web/` and using the URL `http://blog.lo/`
    <VirtualHost *:80>
        DocumentRoot c:/www/blog/frontend/web
        ServerName blog.lo
        <Directory c:/www/blog/frontend/web>
            AllowOverride All
        </Directory>
    </VirtualHost>
- for backend `/path/to/yii-application/backend/web/` and using the URL `http://admin.blog.lo/`
    <VirtualHost *:80>
        DocumentRoot c:/www/blog/backend/web
        ServerName admin.blog.lo
        <Directory c:/www/blog/backend/web>
            AllowOverride All
        </Directory>
    </VirtualHost>

To login into the application use login/password: admin/admin

5. api. Move api/web/.htpasswd to /etc/apache2
