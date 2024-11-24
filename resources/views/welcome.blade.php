<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Socials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .hero {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            padding: 80px 20px;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        footer {
            background: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Welcome to Socials</h1>
        <p>Your gateway to seamless social media messaging.</p>
        <!-- Redirects to the messages page -->
        <a href="{{ route('messages') }}" class="btn btn-light btn-lg">View Messages</a>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Socials. All rights reserved.</p>
    </footer>

</body>
</html>
