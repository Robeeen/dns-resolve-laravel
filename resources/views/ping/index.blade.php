<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ping Utility</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
    <div class="container mt-5">
                <h1 class="display-4">Ping Utility</h1>
                <form action="{{ route('ping.ping') }}" method="post" class="mt-4">
                    @csrf
                    <div style="margin-bottom: 15px;">
                    <label for="host" class="form-label">Enter Hostname or IP Address:</label>
                    <input type="text" id="host" name="host" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5" >Ping It</button>                    
                </form>               
            </div>
        </div>
    </div>
</body>
</html>
