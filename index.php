<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Landing page for a product or service">
    <meta name="keywords" content="landing page, product, service, responsive, SEO">
    <meta name="author" content="Your Name">
    <title>Simple Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to Our Service</h1>
        <p>Your solution for [Product/Service] excellence</p>
        <a href="#contact" class="cta-button">Get Started</a>
    </header>

    <section class="about">
        <h2>Why Choose Us?</h2>
        <p>We offer the best solution for your needs, with expert guidance and exceptional support.</p>
    </section>

    <section id="contact" class="contact">
        <h2>Contact Us</h2>
        <form action="/submit" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </footer>
</body>
</html>
