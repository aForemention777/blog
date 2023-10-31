<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Micah Tidwell's Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- create a basic bootstrap navbar with two things: logo on left half, and a button on the right half -->
    <!-- for now just use a fake photo online, make sure the logo is all the way left and the button is all the way right -->

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Logo</a>
            <form class="d-flex">
                <a href="/admin" class="btn btn-outline-dark" type="submit">Admin</a>
            </form>
        </div>
    </nav>

    <!-- next, we want to do a foreach loop on $posts that was passed into this view -->
    <div class="post-container mt-5" style="min-width: 600px; max-width: 600px; width: 600px; margin: auto;">
        <div class="border border-2 mb-5 p-4 rounded">
            <h1 class="text-center">{{ $post->title }}</h1>
            <div class="d-flex justify-content-center">
                <!-- side by side: author name and publish date -->
                <p>By: {{ $post->author->name }}</p>
                <p>{{ $post->publish_date }}</p>
            </div>

            <!-- body -->
            <p>{{ $post->body }}</p>

            <!-- read more button -->
            <a href="/" class="btn btn-outline-dark d-flex text-center justify-content-center" type="submit">Back
                to Home ... </a>
        </div>
    </div>
</body>

</html>
