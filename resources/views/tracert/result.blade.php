<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tracert Utility </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container mt-5">
                <p><strong>IP Address:</strong> {{ $ipInfo['ip'] }}</p>
                <p><strong>City:</strong> {{ $ipInfo['city'] }}</p>
                <p><strong>Region:</strong> {{ $ipInfo['region'] }}</p>
                <p><strong>Country:</strong> {{ $ipInfo['country'] }}</p>
                <p><strong>Location:</strong> {{ $ipInfo['loc'] }}</p>
                <p><strong>Organization:</strong> {{ $ipInfo['org'] }}</p>
                <p><strong>Timezone:</strong> {{ $ipInfo['timezone'] }}</p>         
                <a href="/tracert" class="btn btn-primary mb-3">Back to Home</a>
            </div>
        </div>
    </body>
</html>
