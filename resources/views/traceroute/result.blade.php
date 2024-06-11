<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TraceRoute Utility </title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container mt-5">
                <h1>Traceroute Result</h1>
                <pre>{{ $output }}</pre>
                <a href="/traceroute" class="btn btn-primary mb-3">Back</a>
            </div>
        </div>
    </body>
</html>
