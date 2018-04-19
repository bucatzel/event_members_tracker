<!-- resources/views/cars/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('cars') }}">Car Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('cars') }}">View All Cars</a></li>
            <li><a href="{{ URL::to('cars/create') }}">Create a Car</a>
        </ul>
    </nav>

    <h1>All the Cars</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Make</td>
            <td>Model</td>
            <td>Year</td>
            <td>Reg. No.</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->make }}</td>
                <td>{{ $value->model }}</td>
                <td>{{ $value->year }}</td>
                <td>{{ $value->registration_number }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the car (uses the destroy method DESTROY /cars/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the car (uses the show method found at GET /cars/{id} -->
                    {{--<a class="btn btn-small btn-success" href="{{ URL::to('cars/' . $value->id) }}">Show this Car</a>--}}

                    <!-- edit this car (uses the edit method found at GET /cars/{id}/edit -->
                    {{--<a class="btn btn-small btn-info" href="{{ URL::to('cars/' . $value->id . '/edit') }}">Edit this Car</a>--}}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>