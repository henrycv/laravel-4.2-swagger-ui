# Laravel project Swagger

[![N|Henry](https://image4.owler.com/logo/gohenry_owler_20181119_120021_large.png)](https://about.me/henrycv)

An example of Swagger on Laravel 4.2
Generate interactive OpenAPI documentation for your RESTful API using doctrine annotations.

### Source:
[![zircote/swagger-php](https://github.githubassets.com/favicons/favicon.png)](https://github.com/zircote/swagger-php)
[![Medium](https://cdn-images-1.medium.com/fit/c/60/60/1*8I-HPL0bfoIzGied-dzOvA.png)](https://medium.com/@tatianaensslin/how-to-add-swagger-ui-to-php-server-code-f1610c01dc03) 

Here are the steps you can expect to follow in order to install swagger to your PHP server code.

* Download Swagger-Php Using Composer
* Add Annotations to Generate Documentation
* Generate Swagger JSON File
* Download Swagger-UI Package to your Project
* Connect Swagger-UI To Your Code
### Tech

This project uses a number of open source projects to work properly:

* [Docker](https://docs.docker.com/get-started/) - Docker is a tool designed to make it easier to create, deploy, and run applications by using containers. 
* [Docker Compose](https://docs.docker.com/compose/) - Compose is a tool for defining and running multi-container Docker applications. 
* [Laravel 4.2](https://laravel.com/docs/4.2/installation) - PHP framework.
* [Composer PHP](https://getcomposer.org/) - A Dependency Manager for PHP.
* [Swagger-PHP](https://zircote.github.io/swagger-php) - Generate interactive OpenAPI documentation for your RESTful API using doctrine annotations.

### Installation

This project requires [Docker](https://docs.docker.com/get-docker/) to run.

Clone project from Github:

```sh
$ git clone https://github.com/henrycv/laravel-4.2-swagger-ui.git
$ cd laravel-4.2-swagger-ui.git
```

Start the Docker container

```sh
$ docker-compose up
```

Enter to the PHP container

```sh
$ docker exec -it swagger-php5 sh
```

Scan and reload the Swagger JSON file

```sh
$ ./vendor/zircote/swagger-php/bin/swagger -o /var/www/pro-laravel-4-2/swagger.json
```

Navigate to http://localhost/api/v2/doc on you local environment.

### Todos

 - Add Authentication and Authorization
 - Write Tests
 - Add documentation

License
----

MIT


**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   [dill]: <https://github.com/joemccann/dillinger>
   [git-repo-url]: <https://github.com/joemccann/dillinger.git>
   [john gruber]: <http://daringfireball.net>
   [df1]: <http://daringfireball.net/projects/markdown/>
   [markdown-it]: <https://github.com/markdown-it/markdown-it>
   [Ace Editor]: <http://ace.ajax.org>
   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
   [@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
   [express]: <http://expressjs.com>
   [AngularJS]: <http://angularjs.org>
   [Gulp]: <http://gulpjs.com>

   [PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
   [PlGh]: <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
   [PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
   [PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>
   [PlMe]: <https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md>
   [PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>
