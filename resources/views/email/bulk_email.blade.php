<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3e7e9; /* Light pink background */
            color: #333; /* Dark text color */
            padding: 20px;
            text-align: center; /* Center-align content */
        }

        h2 {
            color: #e6005c; /* Pink color for subject */
        }

        .container {
            background-color: #fff; /* White container background */
            border-radius: 8px; /* Rounded corners */
            padding: 20px;
            margin: 0 auto; /* Center container horizontally */
            max-width: 600px; /* Maximum width for better readability */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Box shadow for container */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $subject }}</h1>
        {!! $messages !!}
    </div>
</body>
</html>
