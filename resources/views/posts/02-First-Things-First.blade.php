@extends('layouts.site')

@section('heading', 'First Things First')


@section('content')
@markdown
## First Generate a Model

Eloquent ORM is the topic of this series, but for some of you, do you know what the ORM stands for?

It simply means, Object Relational Mapping, which is a fancy way of saying objects that interact with your database. Eloquent follows the Active Record pattern, which generally can be thought of as, one row in your db is represented by an object in your code. Though that may be a little over simplified. Essentially, you have an object that allows you to grab data from a table, that data is then available to you as an object, which you can do tons of things with.

Out of the box, Laravel comes with a User model. This is to help show people some basics, and because Laravel provides some simple authentication, I think there are a few things that the User model needs special. But other than that it is simply an Eloquent Model.

Using the term Model there, comes from the application architecture pattern of MVC. Which stands for, Model View Controller. The model is where the main logic of your application happens...though don't get caught up on it being a single type of object, it's a little higher than that. But this series isn't going into the Architecture of Laravel, it's about Eloquent.

Let's generate a model already...Ok, in the terminal, navigate to your install of Eloquent101 and run this command:

`php artisan make:model Film`

We are doing this because we want to use the data in our `films` table and so we create a model called `Film`. This might seem a little weird, the table is called `films` but the model is called, singular, `Film`. This is because our table will have many records, it's plural, where our model, is one row from the table. This is that "Active Record" pattern I mentioned above.

The command will create an object in your `app` directory, it's contents should look like this:

```
namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
}
```

Which is pretty minimal, in fact there's really nothing in here. But because we followed the Laravel conventions we have everything we need to execute some queries on the `films` table.

Over the next couple lessons we will take a look at some of the first queries you will probably want to execute. Those would probably be `first()`, `all()`, `where()` and `find()`.

## First things first()

We can write `Film::first()` and are returned the first record in the `films` table as an object.

<i class="fa fa-code"></i> [Code Sample: See `first()` in action](/examples/two/retrieveFirstRecord).

The link above, shows you the Eloquent code that is executed and the resulting object (dumped with Symfony's Var Dumper package). Eloquent models use magic methods `__get()` or `__call` to provide some convenient ways to access the data on the returned object. You can access any piece of data as if it were a property on the object.

Like this: `$film->title`

<i class="fa fa-code"></i> [Code Sample: See the property accessor, `$film->title` in action](/examples/two/accessDataAsAProperty).

If you noticed in the first code example the `created_at` and `updated_at` fields look like simple dates. However, if you access those as a property you get back an instance of [Carbon](http://carbon.nesbot.com/docs/). [Carbon](http://carbon.nesbot.com/docs/) is a wrapper around PHP's [DateTime](http://php.net/manual/en/class.datetime.php) class, with some additional (and very helpful) functionality.

<i class="fa fa-code"></i> [Code Sample: `$film->created_at`](/examples/two/createdAtReturnsCarbon).

This means that you can then format the date however you like:

<i class="fa fa-code"></i> [Code Sample: `$film->created_at->format('Y-m-d')`](/examples/two/formatCarbon).

> Remember, so far all we have done is generated a model and all of this behavior is available to us.

@endmarkdown
@stop
