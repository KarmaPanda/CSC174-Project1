<?php
$customCSS="";
$customNav="";
include "inc/html-top.php";
?>
<body>
<header>
    <?php include "inc/nav.php"; ?>
</header>
<div class="container">
    <main>
        <article>
            <h1>City Team: Seoul</h1>
        </article>

        <article class="section">
            <h2>Joshua Choi</h2>
            <figure class="fig">
                <img src="images/josh.jpg" alt="Joshua Choi">
            </figure>
            <p>
                My name is Joshua Choi and I'm a junior at the University of Rochester double majoring in computer science and digital media studies. I'm from Closter, New Jersey, which isn't known for anything special besides being right next to New York City. I'm a very visually-oriented person and enjoy doing digital art and photography in my free time. I also grew up playing music and can play the clarinet, saxophone, and the cello.
            </p>
            <a href="1.php">
                <p class="read">Read More...</p>
            </a>
        </article>

        <article class="section">
            <h2>Desmond Lai</h2>
            <figure class="fig">
                <img src="images/desmond.jpg" alt="Desmond Lai">
            </figure>
            <p>
                I am a rising junior at the University of Rochester majoring in Computer Science (BA). I am from Staten Island, New York, which is one of the five boroughs of New York City. I started my passion for coding since high school where I learned C#, Java, and Python, and continued to learn more during college.
            </p>
            <a href="2.php">
                <p class="read">Read More...</p>
            </a>
        </article>

        <article class="section">
            <h2>Jason Katzner</h2>
            <figure class="fig">
                <img class="size" src="images/jason.jpg" alt="Jason Katzner">
            </figure>
            <p>
                Jason Katzner (he/him) is a member of the University of Rochester class of 2021 majoring in Computer Science. He is also in the GRADE program, studying Online Teaching & Learning. He also studies Linguistics and Technical Theater. Outside of his studies, he lives on the Computer Interest Floor, plays tabletop roleplaying games, and LARPs.
            </p>
            <a href="3.php">
                <p class="read">Read More...</p>
            </a>
        </article>

        <footer>
            <p>CSC 174: Advanced Front-end Web Design and Development</p>
        </footer>
    </main>
</div>

<?php include "inc/scripts.php"; ?>
</body>
</html>