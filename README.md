
<div style="display:flex; align-items: center">
  <h1 style="position:relative; top: -6px" >Task Manager App</h1>
</div>

---
TaskMaster is a task management application that allows users to manage their tasks and stay organized.

Features:
    Create, view, edit, and delete tasks.

Each task includes:
    Task name
    Description
    Creation Date
    Due Date

Task Overview
    View all tasks in a list format.
    Identify overdue tasks based on their due dates and delete them if needed.

User Profile
    Update user details.
    Upload profile and cover images to personalize your account.


#
### Table of Contents              
* [Prerequisites](#prerequisites)
* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Migrations](#migration)
* [Development](#development)
* [Project Structure](#project-structure)
* [Resources](#resources)

#
### Prerequisites

* PHP: ^8.2
* Composer ^2.8.2
* SQLite ^3.45.1
* Node.js ^18.20.4
* Vite ^5.4.11


#
### Tech Stack

* laravel/framework: ^11.9
* laravel/tinker: ^2.9
* spatie/laravel-translatable: ^6.8
* fakerphp/faker: ^1.23 
* laravel/sail: ^1.26 
* mockery/mockery: ^1.6 
* tailwindcss ^3.4.15


#
### Getting Started
1\. First of all you need to clone E Space repository from github:
```sh
git clone https://github.com/RedberryInternship/salome-gogishvili-todo.git
```

2\. Next step requires you to run *composer install* in order to install all the dependencies.
```sh
composer install
```

3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:
```sh
npm install
```

and also:
```sh
composer run dev
```

4\. Now we need to set our env file. Go to the root of your project and execute this command.
```sh
cp .env.example .env
```
And now you should provide **.env** file all the necessary environment variables:

#
**APP:**
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost
APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US
APP_MAINTENANCE_DRIVER=file
PHP_CLI_SERVER_WORKERS=4
BCRYPT_ROUNDS=12

#
**LOG:**
LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

#
**DB:**
DB_CONNECTION=sqlite


after setting up **.env** file, execute:
```sh
php artisan config:cache
```
in order to cache environment variables.

##### Now, you should be good to go!


#
### Migration
if you've completed getting started section, then migrating database if fairly simple process, just execute:
```sh
php artisan migrate
```

#
### Development

You can run Laravel's built-in development server by executing:

```sh
  php artisan serve
```

#
### Project Structure

```bash
├── app
    ├── Http
        ├── Controllers
        ├── Middleware
        ├── Requests
    ├── Models
    ├── Policies
    ├── Providers
├── bootstrap
├── config
├── database
    ├── factories
    ├── migrations
    ├── seeders
├── lang
├── public
├── resources
    ├── css
    ├── js
    ├── lang
    ├── views
        ├── components
        ├── tasks
        ├── vendor/pagination
├── routes
├── storage
├── tests
├── vendor
├── .env
├── .env.example
├── .gitattributes
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── phpunit.xml
├── README.md
├── vite.config.js
```

Project structure is fairly straitforward(at least for laravel developers)...

For more information about project standards, take a look at these docs:
* [Laravel](https://laravel.com/docs/6.x)


#
### RESOURCES
* [Figma](https://www.figma.com/design/HkL8NHL7914PBgdYb6D3zN/Laravel-Dev?node-id=0-1&node-type=canvas&t=sZNxtfGcjQrSEvuE-0)
