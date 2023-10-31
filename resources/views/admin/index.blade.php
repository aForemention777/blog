<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        body {
            padding: 20px;
        }

        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light mb-5">
        <div class="container-fluid">
            <a class="navbar-brand">Logo</a>
            <form action="{{ route('logout') }}" method="POST" class="d-flex">
                @csrf
                @if (Auth::check())
                    <button class="btn btn-outline-dark" type="submit">Logout</button>
                @endif
            </form>
        </div>
    </nav>

    <!-- co pilot, make a basic form labeled with a heading tag of "Create New Post" -->
    <!-- the fields that should be captured are title, body, summary, published_at -->
    <!-- the form should be submitted to the store method of the AdminController -->
    <!-- the form should be submitted using the POST method -->
    <!-- the form should have a submit button -->
    <!-- the form should be using standard bootstrap 5 form styling -->

    <!-- check if a session variable called "success" exists -->
    <!-- if it does, display the value of the session variable -->
    <!-- this session variable will be set in the store method of the AdminController -->
    <!-- the test will be Post Created Successfully -->
    <!-- let's use bootstrap 5 alert styling to display the message -->
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="">Create New Post</h2>

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group mb-4 mt-4">
            <label for="title">Title</label>
            <input class="form-control" type="text" placeholder="Title" name="title" id="title">
        </div>
        <div class="form-group mb-4 mt-4">
            <label for="body">Body</label>
            <textarea class="form-control" placeholder="Body" name="body" id="body" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group mb-4 mt-4">
            <label for="summary">Summary</label>
            <textarea class="form-control" placeholder="Summary" name="summary" id="summary" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group mb-4 mt-4">
            <label for="published_at">Published At</label>
            <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01"
                max="2018-12-31" />
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="/" class="btn btn-secondary" type="submit">back to homepage</a>
    </form>
</body>

</html>
