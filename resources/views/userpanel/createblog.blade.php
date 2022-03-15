<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body>
    <!-- if validation in the controller fails, show the errors -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div>

        <form action="" method="post" enctype="multipart/form-data">
            <!-- Add CSRF Token -->
            @csrf
            <div class="form-group">
                <label>blogtitle</label>
                <input type="text" class="form-control" name="blogtitle" required>
            </div>
            <div class="form-group">
                <label>blogtext</label>
                <input type="text" class="form-control" name="blogtext" required>
            </div>
            <div class="form-group">
                <label>buttomlink</label>
                <input type="text" class="form-control" name="buttonlink" required>
            </div>


            <div class="form-group">
                <input type="file" name="blogimage" required>
            </div>
            <button type="submit">Submit</button>
        </form>

    </div>
</body>

</html>