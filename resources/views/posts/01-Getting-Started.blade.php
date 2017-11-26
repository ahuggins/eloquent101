@extends('layouts.site')

@section('heading', 'Getting Started')



@section('content')
@markdown
## Welcome to Eloquent 101

Hi, my name is Andy Huggins and I am a web developer from Lexington, Ky. I have been a big fan of Laravel for the last 4 years, and one of my favorite parts is the [Eloquent ORM](https://laravel.com/docs/master/eloquent) that comes bundled with it.

I see a lot of questions in the [Laracasts Forum](https://laracasts.com/discuss) that involve "how do I do this in Eloquent?" And that is why I am putting this series together.

So let's just start getting to it!!

To begin, you need to have a local environment where you can play with the same code I use in the videos. I am hoping that if you are looking into a series on Eloquent you already know how to do this, but here are the basics.

### Install Eloquent 101
Navigate to where your projects are located on your system, then run:

`git clone https://github.com/ahuggins/eloquent101`

Then `cd eloquent101` and run `composer install`. At this point you should have Laravel installed. If you are using [Laravel Valet](https://laravel.com/docs/master/valet), you should be able to view the site [Eloquent101](http://eloquent101.dev) in your browser. If not, you will need to determine how you will access your install.

### Create and Connect a DB
I use [Sequel Pro](https://www.sequelpro.com/) to connect to my db's locally. So I use it to create a new db, call it `eloquent101` and give the `root` user permissions to make changes to the db.

![Sequel Pro Settings for Valet](/images/sequel-pro-settings.png "Sequel Pro Settings for Valet")

![Sequel Pro Permissions](/images/sequel-pro-permissions.png "Sequel Pro Permissions")

### Create a `.env` file and generate an application key

When you clone a repo and run `composer install`, it does not execute some of the commands that it does when you are creating a project for the first time. So when cloning, you need create a `.env` file.

Simply run `cp .env.example .env` to copy the example `.env` file.

Another command that is not run is the Application key.

We need to run `php artisan key:generate`. This creates an encryption key in your `.env` file which Laravel uses to encrypt passwords and other things. Once that is done move on to the next section.

### Now update your .env file

Remember to update your `.env` file with your db credentials so that Laravel can actually connect to your db. These should work for most Valet installations:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eloquent101
DB_USERNAME=root
DB_PASSWORD=
```

> Be sure to save your changes in the `.env` file.

### Now we need to structure the DB

The good news here, is that I have done most of the work for you.

In the terminal you need to run `php artisan migrate`. This is going to take the migrations in the `database/migrations/` folder in the application and create the tables in the database.

Then we actually want some data to use. I took the Sakila database and modified it a bit to follow some of the Laravel conventions for making it easy for us to learn those conventions.

This means all you need to do is run `php artisan db:seed`.

Assuming this all goes smoothly, you should now have some data tables in your db and most should have data in them.

@endmarkdown
@stop
