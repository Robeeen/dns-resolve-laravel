<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNS Results for {{ $domain }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron jumbotron-fluid">

    <div class="container mt-5">
        <h1>DNS Results for {{ $domain }}</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Host</th>
                    <th>TTL</th>
                    <th>Class</th>
                    <th>IP Address</th>
                </tr>
            </thead>
            <tbody>
                @if($dnsRecords)
                @foreach($dnsRecords as $record)
                <tr>
                    <td>{{ $record['type'] }}</td>
                    <td>{{ $record['host'] }}</td>
                    <td>{{ $record['ttl'] }}</td>
                    <td>{{ $record['class'] }}</td>
                    <td>{{ $record['ip'] }}</td>
                </tr>
                @endforeach
                @else
                     DNS not found                
                @endif
            </tbody>
        </table>
        
        <a href="/dns" class="btn btn-primary mb-3">Back</a>
    </div>
</div>
</div>
</body>
</html>
