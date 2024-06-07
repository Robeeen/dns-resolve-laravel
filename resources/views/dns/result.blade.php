<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNS Results for {{ $domain }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>DNS Results for {{ $domain }}</h1>
        <a href="/" class="btn btn-secondary mb-3">Back</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Host</th>
                    <th>TTL</th>
                    <th>Class</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dnsRecords as $record)
                <tr>
                    <td>{{ $record['type'] }}</td>
                    <td>{{ $record['host'] }}</td>
                    <td>{{ $record['ttl'] }}</td>
                    <td>{{ $record['class'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
