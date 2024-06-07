<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ping Utility </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
        <div class="md:flex">
            <div class="p-8">
                

                @if (isset($output))
                    <h2 class="mt-4 text-lg leading-tight font-medium text-black">Ping Results for {{ $host }}:</h2>
                    <pre class="bg-gray-100 p-4 rounded-md">{{ implode("\n", $output) }}</pre>
                @elseif (isset($result) && $result !== 0)
                    <p class="mt-4 text-red-500">Ping request failed.</p>
                @endif
            </div>
                <a href="/ping" class="btn btn-primary mb-3">Back</a>
        </div>
    </div>
</body>
</html>
