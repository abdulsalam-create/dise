<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3e7e9; /* Light pink background */
            color: #333; /* Dark text color */
            padding: 20px;
        }

        .container {
            background-color: #fff; /* White container background */
            border-radius: 8px; /* Rounded corners */
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Box shadow for container */
        }

        p {
            margin-bottom: 10px; /* Add spacing between paragraphs */
        }
    </style>
</head>
<body>
    <div class="container">
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Message:</strong> {{ $messages }}</p>
    </div>
</body>
</html>
