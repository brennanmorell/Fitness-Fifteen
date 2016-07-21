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
    <ul id="navUL">
        <li><a class="page-scroll" href="#main" onclick="hideNav()">Home</a></li>
        <li><a class="page-scroll" href="#features" onclick="hideNav()">Features</a></li>
        <li><a class="page-scroll" href="#beta" onclick="hideNav()">Summer 16</a></li>
        <li><a class="page-scroll" href="#about" onclick="hideNav()">About</a></li>
        <li><a class="page-scroll" href="#blog" onclick="hideNav()">Blog</a></li>
        <li id="menuIcon" class="icon">
            <a href="javascript:void(0);" style="font-size:15px;" onclick="navRespond()">☰</a>
        </li>
    </ul>
</nav>
<div id="main" class="above-fold">
    <section id="home">
        <div id="above-fold-content">
            <h1>FITNESS <span class="highlight">FIFTEEN</span></h1>
            <div id="description">
                <!--<div id="description-header">No More Freshman 15</div>-->
                <!--Custom workouts and campus-specific nutrition for college students, by college students.-->
                <!--<p id="description-sub">-->
                    PERSONALIZED WORKOUTS <span class="highlight division">|</span> CAMPUS-SPECIFIC NUTRITION
                <!--</p>-->
            </div>
        </div>
        <div id="above-fold-head">
            <div class="stacked one">For College Students.</div>
            <div class="button">Video</div>
        </div>
    </section>
    <div class="bottom-banner">
        <div class="action">
            <div class="user-input-wrapper">
                <div class="user-input">
                    <input type="text" name="email" placeholder="john.doe@wustl.edu" autocomplete="off">
                    <div class="button">Start for free</div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="features" class="section-body">
    <div class="section-content dual-panel">
        <!-- Personalized Workouts, Campus-Specific Nutrition, Immediate Feedback, Flexibility 
        http://metalab.co/company/ -->
        <div class="left-panel">
            <div class="content-header">NO MORE<br>FRESHMAN FIFTEEN.</div>
            <div class="p-wrapper">
                <p>
                    In a market where personal training is neither affordable nor practical, 
                    Fitness Fifteen provides the tailored services college students need to 
                    integrate healthy choices into their current lifestyle.
                </p>
            </div>
        </div>
        <div class="right-panel">
            <div class="video-container">
                <div class="video-player">
                    <!--<img src="wp-content/themes/fitnessfifteen/images/">-->
                </div>
            </div>
        </div>
    </div>
    <div id="features-list">
        <div class="featureContainer outer-left">
            <div class="circleBase feature-icon workouts"></div>
            <div class="feature-name">Personalized Workouts</div>
            <p class="feature-description">We create workout programs that are catered to your preferences and fitness goals to help you optimize your time spent in the gym.</p>
        </div>
        <div class="featureContainer ">
            <div class="circleBase feature-icon nutrition"></div>
            <div class="feature-name">Campus-Specific Nutrition</div>
            <p class="feature-description">With so many dining options on-campus, it’s tough to decide which choices are healthy, let alone what to eat for each meal. We make it simple by offering healthy suggestions for every meal anywhere on-campus.</p>
        </div>
        <div class="featureContainer">
            <div class="circleBase feature-icon feedback"></div>
            <div class="feature-name">Immediate Feedback</div>
            <p class="feature-description">Have a question about your form on a particular exercise or anything fitness-related? Ask our personal trainers via text/e-mail and get a response within 24 hours.</p>
        </div>
        <div class="featureContainer outer-right">
            <div class="circleBase feature-icon flexibility"></div>
            <div class="feature-name">Flexibility</div>
            <p class="feature-description">The purpose of our service isn’t to have fitness take over your life, but to help you integrate healthy habits into the college lifestyle. You can still drink natty. You can still eat Chiptole.</p>
        </div>
    </div>
    <!--<div class="section-content dual-panel">
        <div class="left-panel">
            <div class="video-container">
                <div class="video-player">
                    <img src="wp-content/themes/fitnessfifteen/images/Video-Watermark-fiverr.png">
                </div>
            </div>
        </div>
        <div class="right-panel">
            <div class="content-header">NO MORE<br>FRESHMAN FIFTEEN.</div>
            <div class="p-wrapper">
                <p>
                    In a market where personal training is neither affordable nor practical, 
                    Fitness Fifteen provides the tailored services college students need to 
                    integrate healthy choices into their current lifestyle.
                </p>
            </div>
        </div>
    </div>
    <div class="section-content dual-panel">
        <div class="left-panel">
            <div class="content-header">NO MORE<br>FRESHMAN FIFTEEN.</div>
            <div class="p-wrapper">
                <p>
                    In a market where personal training is neither affordable nor practical, 
                    Fitness Fifteen provides the tailored services college students need to 
                    integrate healthy choices into their current lifestyle.
                </p>
            </div>
        </div>
        <div class="right-panel">
            <div class="video-container">
                <div class="video-player">
                    <img src="wp-content/themes/fitnessfifteen/images/Video-Watermark-fiverr.png">
                </div>
            </div>
        </div>
    </div>-->
</section>
<section id="beta" class="section-body">
    <h1 class="section-head">Summer 16</h1>
    <h1 class="sub-head">(Beta testers)</h1>
</section>
<section id="about" class="section-body">
    <h1 class="section-head">3 Guys</h1>
    <h1 class="sub-head">(And their advisors...)</h1>
    <!-- TEAM MEMBERS -->
    <div id="team-members-list">
        <div class="teamMemberContainer outer-left">
            <div class="circleBase team-member-icon Josh"></div>
            <div class="team-member-name">Joshua Zhou, <span class="highlight">CEO</span></div>
            <p class="feature-description">Joshua Zhou is a pretty cool guy but he hasnt written his bio yet so we are going to 
            fill some space until he gets on that. Waiting on you Josh.</p>
        </div>
        <div class="teamMemberContainer ">
            <div class="circleBase team-member-icon Devin"></div>
            <div class="team-member-name">Devin Goodkin, <span class="highlight">COO</div>
            <p class="team-member-description">Devin is busy writing 108 workout programs so he hasn't gotten to his bio yet either. Hopefully he has one written by the site's launch.</p>
        </div>
        <div class="teamMemberContainer outer-right">
            <div class="circleBase team-member-icon Brennan"></div>
            <div class="team-member-name">Brennan Morell, <span class="highlight">CTO</div>
            <p class="team-member-description">An all around beast, Brennan is waiting to unveil his beautifully crafted bio once
            the other team members have finished their's up.</p>
        </div>
    </div>
    <!-- ADVISORS -->
    <div id="advisors-list">
        <div class="advisorContainer outer-left">
            <div class="circleBase advisor-icon advisor1"></div>
            <div class="advisor-name">Advisor 1, <span class="highlight">POSITION</span></div>
            <p class="advisor-description">This is a description about this advisors startup history/expertise/certifications. Also mentioned is what this advisor brings to the table.</p>
        </div>
        <div class="advisorContainer ">
            <div class="circleBase advisor-icon advisor2"></div>
            <div class="advisor-name">Advisor 2, <span class="highlight">POSITION</div>
            <p class="advisor-description">This is a description about this advisors startup history/expertise/certifications. Also mentioned is what this advisor brings to the table.</p>
        </div>
        <div class="advisorContainer">
            <div class="circleBase advisor-icon advisor3"></div>
            <div class="advisor-name">Advisor 3, <span class="highlight">POSITION</div>
            <p class="advisor-description">This is a description about this advisors startup history/expertise/certifications. Also mentioned is what this advisor brings to the table.</p>
        </div>
        <div class="advisorContainer outer-right">
            <div class="circleBase advisor-icon advisor4"></div>
            <div class="advisor-name">Advisor 4, <span class="highlight">POSITION</div>
            <p class="advisor-description">This is a description about this advisors startup history/expertise/certifications. Also mentioned is what this advisor brings to the table.</p>
        </div>
    </div>
</section>
<section id="blog" class="section-body">
    <h1 class="section-head">Blog</h1>
    <h1 class="sub-head">(We write stuff for you)</h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>">
            <span class="title">
                <strong>Title:</strong>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </span>
            <span class="author">
                Author:
                <?php the_author(); ?> 
            </span>
            <span class="date">
                Date:
                <?php echo get_the_date(); //date has to be echoed?> 
            </span>
            <span>
                Excerpt:
                <?php echo get_the_excerpt() ?> 
            </span>
        </div>
        <br><br> <!-- get rid of these when styling!!! -->
    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</section>
<div class="bottom-banner contact"></div>
<?php get_footer(); ?>
