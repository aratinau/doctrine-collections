# Notes

### ManyToMany - reverse side

Owning is always the ManyToOne side

## Doctrine Extensions Bundle
 
    composer require stof/doctrine-extensions-bundle

https://github.com/Atlantic18/DoctrineExtensions/tree/v2.4.x/doc

## clear doctrine cache

    php bin/console doctrine:cache:clear-result
    php bin/console doctrine:cache:clear-query
    php bin/console doctrine:cache:clear-metadata

## lancer SQL

`bin/console doctrine:query:sql 'SELECT * FROM genus'`

## git grep

`git grep genus_show`

# Joyful Development with Symfony

Well hi there! This repository holds the code and script
for the Symfony course on KnpUniversity.

## Setup

If you've just downloaded the code, congratulations!

To get it working, follow these steps:

**Setup parameters.yml**

First, make sure you have an `app/config/parameters.yml`
file (you should). If you don't, copy `app/config/parameters.yml.dist`
to get it.

Next, look at the configuration and make any adjustments you
need (like `database_password`).

**Download Composer dependencies**

Make sure you have [Composer installed](https://getcomposer.org/download/)
and then run:

```
composer install
```

You may alternatively need to run `php composer.phar install`, depending
on how you installed Composer.

**Setup the Database**

Again, make sure `app/config/parameters.yml` is setup
for your computer. Then, create the database and the
schema!

```
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load
```

If you get an error that the database exists, that should
be ok. But if you have problems, completely drop the
database (`doctrine:database:drop --force`) and try again.

**Start the built-in web server**

You can use Nginx or Apache, but the built-in web server works
great:

```
php bin/console server:run
```

Now check out the site at `http://localhost:8000`

Have fun!

## Have some Ideas or Feedback?

And as always, thanks so much for your support and letting us do what
we love!

If you have suggestions or questions, please feel free to
open an issue or message us.

<3 Your friends at KnpUniversity
