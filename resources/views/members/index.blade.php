<!-- resources/views/members/index.blade.php -->

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
            <a class="navbar-brand" href="{{ URL::to('members') }}">Member Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('members') }}">View All Members</a></li>
            <li><a href="{{ URL::to('members/create') }}">Create a Member</a>
        </ul>
    </nav>

    <h1>All the Members</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->first_name }}</td>
                <td>{{ $value->last_name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the member (uses the destroy method DESTROY /members/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the member (uses the show method found at GET /members/{id} -->
                    {{--<a class="btn btn-small btn-success" href="{{ URL::to('members/' . $value->id) }}">Show this Member</a>--}}

                    <!-- edit this member (uses the edit method found at GET /members/{id}/edit -->
                    {{--<a class="btn btn-small btn-info" href="{{ URL::to('members/' . $value->id . '/edit') }}">Edit this Member</a>--}}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>