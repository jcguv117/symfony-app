# Symfony App

## Setup 

**Download Composer dependencies**

Make sure you have [Composer installed](https://getcomposer.org/download/)
and run:

```
composer install
```

Install symfony or download binary to run the follow steps.
"Downloading the Symfony client" instructions found
here: https://symfony.com/download

**Database Schema**

Check the file .env and use your creedential of mysql.
To actually *create* the database and get some tables, run:

```
symfony console doctrine:database:create
symfony console doctrine:schema:update --force
symfony console doctrine:fixtures:load
```

**Start the symfony web server**

Start the web server, open a terminal, move into the
project, and run:

```
symfony serve -d
```

**Access the endpoints**

When the server starts, check your host and port provided and access on this routes in your browser.

 *list of products*
    
    http://{host}:{port}/api/products  

*most sold products*

    http://{host}:{port}/api/orders     

## Definition of Done.

The application contains forms to capture records and display the requested report.

The architecture is an MVC with simple but pleasant frontend design for the user.

I implement CRUD functions for products and orders records.

I use bootstrap to give the frontend a nice design, I include it via CDN.

I use Mysql as a database management system.

In the backend I use the version of symfony 6 and php 8.

I added buttons to test the apis, using javascript to call the API.

The json format is the response of the API data.