<!DOCTYPE html>
<html>
<head>
    <title>Glamping Blog</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Welcome to My Glamping Blog</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>What is Glamping?</h2>
            <p>Glamping, short for glamorous camping, combines the adventure of camping with the luxury and amenities of a high-end getaway. Imagine sleeping under the stars in a cozy bed, with all the comforts of a hotel room.</p>
        </section>
        <section>
            <h2>What You'll Find Here</h2>
            <p>Discover the best glamping spots, tips, and experiences from around the world. Join our community of outdoor enthusiasts who love a touch of luxury with their nature adventures.</p>
        </section>
        <section>
            <h2>Sign Up for Our Newsletter</h2>
            <form action="signup.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <input type="submit" value="Sign Up">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Glamping Blog</p>
        <p>Anna Pierno CIST2351 PHP</p>
        <p>Session ID: <?php echo session_id(); ?></p>
    </footer>
</body>
</html>
