<?php
/**
 * Fitness Fifteen Template File
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Fitness_Fifteen
 * @since Fitness Fifteen 1.0
 */ 
?> 

<?php get_header(); ?>
<nav class="navbar" id="top">
    <ul>
        <li><a class="page-scroll" href="#main">Home</a></li>
        <li><a class="page-scroll" href="#features">Features</a></li>
        <li><a class="page-scroll" href="#beta">Summer 16</a></li>
        <li><a class="page-scroll" href="#about">About</a></li>
        <li><a class="page-scroll" href="#blog">Blog</a></li>
    </ul>
</nav>
<div id="main" class="above-fold">
    <section id="home">
        <h1>FITNESS <span class="highlight">FIFTEEN</span></h1>
        <div id="description">
            <!--<div id="description-header">No More Freshman 15</div>-->
            <p id="description-sub">
                Custom workouts and campus-specific nutrition for college students, by college students.
            </p>
        </div>
    </section>
    <div class="bottom-banner">
        <div class="action">
            <div class="user-input-wrapper">
                <div class="user-input">
                    <input type="text" name="email" placeholder="john.doe@wustl.edu" autocomplete="off">
                    <div class="button">Start free trial</div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="features" class="section-body">
    <div class="section-content dual-panel">
        <div class="p-wrapper">
            <p>Fitness Fifteen was founded by three Wash U students that want to help college students maintain a healthy lifestyle. Our personalized online training and nutritional programs save students valuable time by providing enjoyable and efficient workouts with campus-specific, nutritional advice. By helping college students stay fit year-round, we eliminate the stigma of the “Freshman Fifteen” and mitigate the repercussions of the unhealthy college lifestyle.</p>
        </div>
        <div class="video-wrapper">
            <div class="video-container">
                <div class="video-player">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="beta" class="section-body">
    <h1 class="section-head">Summer 16</h1>
    <h1 class="sub-head">(Beta testers)</h1>
</section>
<section id="about" class="section-body">
    <h1 class="section-head">3 Guys</h1>
    <h1 class="sub-head">(And their advisors...)</h1>
</section>
<section id="blog" class="section-body">
    <h1 class="section-head">Blog</h1>
    <h1 class="sub-head">(We write stuff for you)</h1>
</section>
<div class="bottom-banner contact"></div>
<?php get_footer(); ?>
