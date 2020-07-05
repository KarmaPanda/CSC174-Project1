<?php
$customCSS="<link rel='stylesheet' type='text/css' href='css/2.css'>";
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
            <div class="split">
                <section>
                    <h1>Desmond Lai</h1>

                    <ul>
                        <li>University of Rochester, 2022</li>
                        <li>Computer Science</li>
                    </ul>
                </section>

                <section class="image">
                    <img src="images/desmond.jpg" alt="Desmond Lai">
                    <h1 class="text">Lai Desmond</h1>
                </section>
            </div>
            <section>
                <h2>About Me</h2>
                <p>I am a rising junior at the University of Rochester majoring in Computer Science (BA). I am from Staten Island, New York, which is one of the five boroughs of New York City. I started my passion for coding since high school where I learned C#, Java, and Python, and continued to learn more during college.</p>
            </section>
        </article>

        <article>
            <h2>Education</h2>

            <section>
                <h3>High School</h3>
                <p>As I am from Staten Island, New York, I graduated from Tottenville High School on June 2018. I have taken AP Computer Science A and AP Calculus BC here, which allowed me to skip several courses when I entered the University of Rochester.</p>

            </section>

            <section>
                <h3>Present</h3>
                <p>Currently, I am a rising junior at the University of Rochester studying Computer Science. Aside from computer science, I have taken the Production cluster, which includes classes in video production, photography, and computer graphics. Additionally, I have taken the Economics cluster covering Intermediate Micro and Macroeconomics.</p>
            </section>
        </article>

        <article>
            <h2>Computer Science</h2>


            <section>
                <h3>Past Projects</h3>
                <p>Back during High School, I participated in several hacakthons. Most notable of the hackathons were the CS4All Hackathon. This hackathon was elimination based, and as our team made it to the final round, we created a 3D Unity game where the player walks around a city to collect trash, otherwise they die from pollution. Press on the image above to be redirected to the game.</p>
                <p>Aside from video game development, I have created other programs such as a MotionTracker, which can be found on my GitHub. This was part of a summer program at Carleton College in Northfield, Minnesota where I worked in a pair to utilize the OpenCV library with Python. We experimented with various Computer Vision techniques to create a surveillance system that tracks and records people's motion and faces.</p>


            </section>

            <section>
                <h3>Present</h3>
                <p>At the University of Rochester, I have taken many computer science courses. I have taken CSC 170, 172, 173, 186, 210, 214, 273W. These courses have made me experienced in multiple computer science areas such as mobile application development, video game development, and backend web development.</p>

                <aside>
                    <h4>Programming Languages</h4>
                    <ul>
                        <li>C#</li>
                        <li>Python</li>
                        <li>Java</li>
                        <li>Kotlin</li>
                        <li>C</li>
                        <li>Javascript</li>
                    </ul>
                </aside>
            </section>
        </article>

    </main>
    <footer>
        Taken from <a href="http://csc174.org/lab01/dlai2/" target="_blank">csc174.org/lab01/dlai2</a>
        <p>CSC 174: Advanced Front-end Web Design and Development</p>
    </footer>
</div>

<?php include "inc/scripts.php"; ?>
</body>
</html>