<!DOCTYPE html>
<html>

<head>
    <title>User Details</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }

        .m-b-1em {
            margin-bottom: 1em;
        }

        .m-l-1em {
            margin-left: 1em;
        }

        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

    <!-- container -->
    <div class="container">


        <div class="page-header">
            <h1>Welcome, {{ auth()->user()->name  }} </h1>
            <br>

            @php
            // dd(session()->has('test'));
            echo session()->get('message');
            @endphp

            <br>


        </div>

        <a href="{{url('/user/logout')}}"> Logout</a> || <a href="{{url('/task')}}"> My tasks</a>

        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>action</th>
            </tr>


            @foreach ($data as $value )
            @if (isset(Auth::user()->id) && Auth::user()->id == $value->id)

            <tr>
                <td>{{ $value->id}}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->username }}</td>
                <td>{{ $value->email}}</td>

                <td>
                    <a href='{{url("/user/" . $value->id . "/edit")}}' class='btn btn-primary m-r-1em'>Edit</a>
                </td>
            </tr>
            @endif
            @endforeach

            <!-- end table -->
        </table>

    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>
