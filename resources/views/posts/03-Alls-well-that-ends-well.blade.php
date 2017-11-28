@extends('layouts.site')

@section('content')
@markdown
## All()'s well that ends well

Let's say we wanted to get every record in a table. We know in `sql` we would write something like `SELECT * FROM films` and then we would have some php code wrapping around it to actually delegate our `sql` to the database.

Eloquent allows us to accomplish this pretty easily. If we know the table we want records from, we can return all with this code `Film::all()` and Eloquent will translate that into the `sql` and also handle delagating the call to the database.

<i class="fa fa-code"></i> [See `all()` in action](/examples/three/returnAllData).

As you can see in the code example linked above, it returns all 1000 records in our `films` table. (The Symfony Var Dumper limits the amount of data that you can "see" because there is so much data.)

Which brings us to the next thing eloquent provides. What do you do when you don't want 1000 records, but only say 10.

This is kind of the first "query modifier" that we have encountered.

<i class="fa fa-code"></i> [See `limit(10)` in action](/examples/three/limitNumberOfRecords).
@endmarkdown
@stop
