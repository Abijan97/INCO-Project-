<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../styles.css">
    <title>GTCoding</title>
</head>

<body>
    <div class="wrapper">
        <div class="nav">
            <div id="logo-img">
                <a href="../homepage.php">
                    <img src="../img/logo2.png" alt="Logo">
                </a>
            </div>
            <div class="links">
                <a href="../learn.php" class="mainlink">IT knowledge</a>
                <a href="#" class="mainlink">Mentor</a>
                <a href="../Contact Us/contact.php">Contact us</a>
                <a href="../Sliding-Sign-In-Sign-Up/signin.php">Sign In</a>

            </div>
        </div>

        <div id="searchbox">
            <input type="text" placeholder="Search Here">
        </div>

        <main>

            <h2 class="page-heading">Blog Post Heading</h2>
            <div id="post-container">
                <section id="blogpost">
                    <div class="card">

                        <div class="card-image">
                            <img src="./img/1.jpg" alt="Card Image">
                        </div>
                        <div class="card-description">
                            <h3>The Introduction</h3>
                            <p>What you'll learn :
                                Learn the core Java skills needed to apply for Java developer positions in just 14
                                hours.
                                Be able to sit for and pass the Oracle Java Certificate exam if you choose.
                                Be able to demonstrate your understanding of Java to future employers.
                                Learn industry "best practices" in Java software development from a professional Java
                                developer who has worked in the language for 18 years.
                                Acquire essential java basics for transitioning to the Spring Framework, Java EE,
                                Android development and more.
                                Obtain proficiency in Java 8 and Java 11.</p>
                        </div>
                    </div>

                    <div id="comments-section">
                    <form action="https://localhost/chatapp">
                      <input type="submit" value="Live Chat with mentor" />
                    </form>
                    </div>
                </section>

                <aside id="sidebar">
                    <h3>Sidebar Heading</h3>
                    <p>Sidebar 1</p>
                </aside>
            </div>

            <div class="footer">
                <h2>IT Master</h2>
                <div class="footerlinks">
                    <a href="#">IT knowledge</a>
                    <a href="">Mentor</a>
                    <a href="">About Us</a>
                    <a href="">Contact Us</a>


                </div>
            </div>

        </main>

        <script src="./main.js"></script>
</body>

</html>