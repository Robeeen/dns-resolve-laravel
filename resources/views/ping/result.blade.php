<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ping Utility </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container mt-5">
                @if (isset($output))
                    <h2 class="display-4">Ping Results for {{ $host }}:</h2>
                    <pre class="card-text">{{ implode("\n", $output) }}</pre>
                @elseif (isset($result) && $result !== 0)
                    <p class="card-text">Ping request failed.</p>
                @endif                
                <a href="/ping" class="btn btn-primary mb-3">Back</a>
            </div>
        </div>
    </body>
</html>
