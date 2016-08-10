# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

# Laravel + Angular JS Test

Caliber requires a tool that helps measure the quality of websites for SEO purposes. This tool will be used on daily basis by internal and external staff.  

The tool requires the following metrics to be collected about the various domains:
* Trust flow value [tf]
* Citation flow value [cf]
* CQS value [cqs]
* External Backlinks [ebl]
* Referring Domains [rd]
* Related topics [ttf_*]
* Social signals

The provided API call returns the required information in a structured JSON Object, in a single call. API credits are not infinite, so care should be taken to create efficiencies where possible.

## Your Task
Build a simple RESTfull web application based on the following requirements:
* Laravel MVC framework should be used for the back-end, which should work as an RESTfull API;
* Angular JS should be used for the front-end, which will make HTTP requests to the backend to fetch required data;

1. Clone our laravel-test repository from GitHub and use it as your starting point
2. Build the project using composer
3. Add new routes in the backend so it is able to respond to **localhost/api/v1/toolbar/domain.com** and return a JSON object using the [ToolbarController](https://github.com/caliberi/laravel-test/tree/master/app/Http/Controllers/ToolbarController.php) class. *we encourage you to use Laravel 5.* documentation to complete the task*
4. Visualise the returned data in a meaningful way
5. AngularJS must be used for the front-end. Please use [ngResource](https://docs.angularjs.org/api/ngResource/service/$resource) to fetch the data. **Do not use jQuery**

The API KEY should be provided and should be recorded in the toolbar [config](https://github.com/caliberi/laravel-test/tree/master/config/toolbar.php) file.

