<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Glamping Blog</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
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
            <h2>Submit Your Recommendations</h2>
            <form action="submit_recommendation.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="recommendation">Recommendation:</label><br>
                <textarea id="recommendation" name="recommendation" rows="4" cols="50" required></textarea><br>
                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Glamping Blog</p>
    </footer>
</body>
</html>
