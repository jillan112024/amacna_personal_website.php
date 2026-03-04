<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jillan G. Amacna | Professional Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "includes/nav.php" ?>
<script>
 document.addcslashesEventListener("DOMContentLoaded"' function() {
    const text= 'JILLAN GARCIA AMACNA'
    const header = document.getElementById("animated-text");
    header.textContent = ""; // clear initial text

    let i = 0;
    fumction typeEffect() {
        if (I < text.length) {
            header.Content += text.charAt (i);
            i++;
            setTimeout(typeEffedct, 150); // speed of animation (ms)
        }
    }
    </script>
   

    <div class="main-container">
        <header class="hero-header">
            <div class="header-overlay">
                <h1 class="glow-name">JILLAN AMACNA</h1>
                <div class="accent-bar"></div>
                <p class="hero-subtitle">IT STUDENT | ASPIRING DEVELOPER</p>
            </div>
        </header>

        <main class="content-area">
            
            <section id="about" class="glass-section">
                
                <h2>ABOUT ME</h2>
                <div class="text-content">
                    <p>Hello! I'm <strong>Jillan G. Amacna</strong>, an aspiring professional currently focused on technology and development. I specialize in systems management and have a strong foundation in networking and basic programming concepts.</p>
                </div>
            </section>

          <section id="hobbies" class="glass-section solid-card">
    <h2>HOBBIES & INTERESTS</h2>
    <ul class="standard-list">
        <li>Singing</li>
        <li>Dancing</li>
        <li>Exploring New Tech</li>
    </ul>
</section>

<section id="skills" class="glass-section solid-card">
    <h2>MY SKILLS</h2>
    <ul class="skills-list">
        <li>Front-end Development</li>
        <li>HTML5 & CSS</li>
        
    </ul>
</section>

            <section id="contact" class="glass-section solid-card">
                <h2>CONTACT</h2>
                <div class="contact-grid">
                    <div class="contact-node">
                        <div class="node-icon">✉</div>
                        <div class="node-info">
                            <strong>EMAIL ADDRESS</strong>
                            <p>amacnajillan11@gmail.com</p>
                        </div>
                    </div>

                    <div class="contact-node">
                        <div class="node-icon">f</div>
                        <div class="node-info">
                            <strong>FACEBOOK</strong>
                            <p><a href="https://www.facebook.com/dlenechaii.owh" target="_blank" class="fb-link">Visit Jillan Amacna</a></p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="bootstrap" class="glass-section solid-card">
    <h2>MY BOOTSTRAP ACTIVITIES</h2>
    <ul class="skills-list">
        <li><a href="amacna_bootstrap_activities/activity1.html">Activity 1</a></li>
        <li><a href="amacna_bootstrap_activities/activity2.html">Activity 2</a></li>
        <li><a href="amacna_bootstrap_activities/activity3.html">Activity 3</a></li>
        <li><a href="amacna_bootstrap_activities/activity4.html">Activity 4</a></li>
        <li><a href="amacna_bootstrap_activities/activity5.html">Activity 5</a></li>
        
        
    </ul>
</section>


<section id="javascript" class="glass-section solid-card">
    <h2>MY JAVASCRIPT ACTIVITIES</h2>
    <ul class="skills-list">
       <li><a href="amacna-js-activities/activity1.html">Activity 1</a></li>
       <li><a href="amacna-js-activities/activity2.html">Activity 2</a></li>
       <li><a href="amacna-js-activities/activity3.html">Activity 3</a></li>
       <li><a href="amacna-js-activities/activity4.html">Activity 4</a></li>
       <li><a href="amacna-js-activities/activity5.html">Activity 5</a></li>
       <li><a href="amacna-js-activities/activity6.html">Activity 6</a></li>
       <li><a href="amacna-js-activities/activity7.html">Activity 7</a></li>
       <li><a href="amacna-js-activities/activity8.html">Activity 8</a></li>
       
        
    </ul>
</section>


        </main>
        
        <?php include('includes/footer.php'); ?>
    </div>

</body>
</html>