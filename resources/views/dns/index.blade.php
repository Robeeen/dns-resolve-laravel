<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNS Resolver</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
    <div class="container mt-5">
        
            <h1>DNS Resolver</h1>
            <form action="/resolve" method="POST">
                @csrf
                <div style="margin-bottom: 15px;">
                    <label for="domain" class="form-label">Type FQDN Domain</label>
                    <input type="url" class="form-control" id="domain" name="domain" required>
                </div>
                <button type="submit" class="btn btn-primary mt-5" >Resolve</button>
            </form>
        </div>
</div>
</body>
</html>
