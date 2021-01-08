<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <meta name="description" content="Login with your registered credentials">
    <meta name="author" content="Zubair Hasan">
    <!-- Linking Stylesheet -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wrapper w-100 h-100 flex justify-center align-center">
    <div class="shadow rounded px-1">
        <h1>Register</h1>
        <p>Register with your details.</p>
        <form action="/register-post.php" method="POST">
            <input type="text" name="name" placeholder="Enter your name here..." class="w-100" required>
            <input type="email" name="email" placeholder="Enter your email here..." class="w-100" required>
            <input type="password" name="password" placeholder="Enter your password here..." class="w-100" required>
            <button type="submit">Register</button>
        </form>
    </div>
</section>
</body>
</html>