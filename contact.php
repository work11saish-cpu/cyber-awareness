<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberLearn - Contact</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h2>CyberLearn</h2>
        <p>Get in Touch</p>
    </header>

    <nav>
        <a href="index.html">Home</a>
        <a href="lessons.html">Lessons</a>
        <a href="quiz.html">Quiz</a>
        <a href="about.html">About Us</a>
        <a href="contact.html">Contact</a>
        <a href="blog.html">Blog</a>
    </nav>

    <div class="container">
        <h1>Contact Us</h1>

        <div class="lesson-box">
            <p>Have questions or feedback? Fill out the form below and we will get back to you!</p>

            <form action="#" method="post" style="margin-top: 20px;">

                <label for="name"><strong>Your Name</strong></label><br>
                <input type="text" id="name" name="name" required
                    style="width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;">

                <label for="email"><strong>Your Email</strong></label><br>
                <input type="email" id="email" name="email" required
                    style="width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;">

                <label for="message"><strong>Message</strong></label><br>
                <textarea id="message" name="message" rows="5" required
                    style="width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc;"></textarea>

                <button type="submit"
                    style="background: #596e84; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; transition: 0.3s;">
                    Submit
                </button>
            </form>
        </div>
    </div>

    <footer>
        © 2025 CyberLearn | SDG 4 – Quality Education <br>
        Project Team — Aarti F | Saish G | Parth G | Ayush G
    </footer>

</body>

</html>
