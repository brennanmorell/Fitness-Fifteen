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
        <!--<li><a class="page-scroll" href="#blog" onclick="hideNav()">Blog</a></li>-->
        <li id="menuIcon" class="icon">
            <a href="javascript:void(0);" style="font-size:15px;" onclick="navRespond()">☰</a>
        </li>
    </ul>
</nav>
<div id="main" class="above-fold">
    <section id="home">
        <div id="above-fold-content">
            <div id="logo-head"><img src="wp-content/themes/fitnessfifteen/images/logo-package/Fitness-3.svg"></div>
        </div>
    </section>
    <div class="bottom-banner">
        <div class="action">
            <div class="user-input-wrapper">
                <div class="user-input">
                    <input id="email-init" type="text" name="email" placeholder="john.doe@college.edu" autocomplete="off">
                    <div id="start-init" class="button">Start for free</div>
                </div>
                <div id="init-message">Enter valid .edu email to continue</div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="userSignupForm" role="dialog">
    <div class="modal-dialog">  
    <!-- Modal content-->
    <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title start">Get it.</div>
            <div class="modal-title confirmation">Stoked to have you.</div>
          </div>
          <div class="modal-body">
            <form role="form">
                <div class="form-group">
                    <label for="email">Email <span class="highlight">*</span></label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="first">First <span class="highlight">*</span></label>
                    <input type="text" class="form-control" id="first">
                </div>
                <div class="form-group">
                    <label for="last">Last <span class="highlight">*</span></label>
                    <input type="text" class="form-control" id="last">
                </div>
            </form>
            <div id="signup-wrapper">
                <div id="signup-error-msg"></div>
                <div id="signup" type="submit">Submit</div>
            </div>
          </div>
          <div class="signup-confirmation">
            <div class="signup-confirmation-message">
                We'll reach out in a bit with a survey and some info to get your trial started. 
                If it takes us a bit, don't fret. We're probably at the gym.
            <div class="signup-signoff"><span class="highlight">-</span>Fitness 15 Team</div>
            </div>
          </div>
          <div class="modal-footer">
            By signing up for Fitness Fifteen, you agree to our site's <a href="terms.html">terms of use</a>.
          </div>
      </div>
    </div>
</div>
<section id="features" class="section-body">
    <div class="section-content">
        <!-- Personalized Workouts, Campus-Specific Nutrition, Immediate Feedback, Flexibility -->
        <div class="content-header">NO MORE FRESHMAN 15.</div>
        <hr>
        <div class="p-wrapper">
            <p>
               <i>We help eliminate all the bs and misconceptions popularized by the fitness industry to ensure that your time in the gym actually makes a difference. Sign-up for a two week free trial that includes a personalized workout program, college-specific nutritional advice and workout logs to track your progress.</i>
            </p>
        </div>
       <!-- <div id="quote-by"><span class="highlight">-Your Chancellor</span></div> -->
        <hr>
    </div>
    <div id="features-list">
        <div class="featureContainer outer-left">
            <div class="circleBase feature-icon workouts"></div>
            <div class="feature-name">Personalized Workouts</div>
            <p class="feature-description">Wondering if those booty blaster workouts you’ve been doing in your dorm room have been working? Well considering you’re reading this, they probably haven’t been. Unlike most online fitness companies, we’ll create customized workout programs for you based on your specific preferences and fitness goals in order to help you get the body you've always dreamed of.</p>
        </div>
        <div class="featureContainer ">
            <div class="circleBase feature-icon nutrition"></div>
            <div class="feature-name">Flexible Nutrition</div>
            <p class="feature-description">With limited dining options available, it’s tough to find healthy meals the night of and the morning after. In order to make your life easier, Fitness15 teaches you simple ways to balance out your diet. Now you can go out and drink without worrying about getting fat. In fact, we actually want you to get absolutely smashed every weekend. Remember, we put the flex back in flexible dieting.</p>
        </div>
        <div class="featureContainer">
            <div class="circleBase feature-icon feedback outer-right"></div>
            <div class="feature-name">Immediate Feedback</div>
            <p class="feature-description">Are you ever too scared to ask for advice from that huge guy in the gym? Well, so are we but our certified personal trainers can answer any fitness-related questions you may have. Feel free to send us a video of you working out and we will critique your form. Guaranteed response within 24 hours otherwise we will gift you a free rack of natty if you are of age (or not).</p>
        </div>
       <!-- <div class="featureContainer outer-right">
            <div class="circleBase feature-icon flexibility"></div>
            <div class="feature-name">Flexibility</div>
            <p class="feature-description">The purpose of our service isn’t to have fitness take over your life, but to help you integrate healthy habits into the college lifestyle. You can still drink natty. You can still eat Chiptole.</p>
        </div> -->
    </div>
</section>
<section id="beta" class="section-body">
   <!-- <div class="image-cover-lg">
        <h1 class="section-head">Summer 16</h1>
        <h1 class="sub-head highlight">( Got fit and loved our sh*t )</h1>
    </div> -->

   <!-- <div class="w3-content w3-display-container">
      <img class="mySlides" src="wp-content/themes/fitnessfifteen/images/sorority-beach.jpg" style="width:100%">
      <img class="mySlides" src="wp-content/themes/fitnessfifteen/images/fraternity-beach.jpg" style="width:100%">
      <img class="mySlides" src="wp-content/themes/fitnessfifteen/images/fraternity-beach.jpg" style="width:100%">
      <div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
        <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      </div>
    </div> -->
    <div class="w3-content w3-display-container">
        <h1 class="section-head slide">Summer 16</h1>
        <h1 class="sub-head highlight slide">( Got fit and loved our sh*t )</h1>
        <img class="mySlides w3-animate-fading" src="wp-content/themes/fitnessfifteen/images/sorority-beach.jpg" style="width:100%">
        <img class="mySlides w3-animate-fading" src="wp-content/themes/fitnessfifteen/images/gronk-shredded.jpg" style="width:100%">
        <img class="mySlides w3-animate-fading" src="wp-content/themes/fitnessfifteen/images/arnold-alcohol.jpg" style="width:100%">
        <div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
            <!-- <div class="w3-left w3-padding-left w3-hover-text-khaki">&#10094;</div>
            <div class="w3-right w3-padding-right w3-hover-text-khaki">&#10095;</div> -->
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white"></span>
        </div>
    </div>

   <!-- <div id="clients-container">
        <table class="client-grid">
            <tbody>
                <tr><td class="client-image-delim"></td><td class="client-text-delim"><div class="client-text">"Before Fitness Fifteen, I don't even know what to write. Honestly, I'm just making this up as I go along. But I love it. Fitness Fifteen that is. They helped me become the man I am today."</div></td></tr>
            </tbody>
        </table>
        <table class="client-grid">
            <tbody>
                <tr><td class="client-image-delim"></td><td class="client-text-delim"><div class="client-text">"Before Fitness Fifteen, I don't even know what to write. Honestly, I'm just making this up as I go along. But I love it. Fitness Fifteen that is. They helped me become the man I am today."</div></td></tr>
            </tbody>
        </table>
        <table class="client-grid">
            <tbody>
                <tr><td class="client-image-delim"></td><td class="client-text-delim"><div class="client-text">"Before Fitness Fifteen, I don't even know what to write. Honestly, I'm just making this up as I go along. But I love it. Fitness Fifteen that is. They helped me become the man I am today."</div></td></tr>
            </tbody>
        </table>
    </div> -->
    <div id="clients-container">
        <div id="large-img-container">
            <div class="large-img-cover">
                <div id="client-feat-info" class="client-info">Loren, USC</div>
                <div id="client-feat-testimonial" class="client-testimonial">"Before Fitness Fifteen, I was tired of spending what seemed like all my free time doing cardio and getting no results in the gym so I signed up for a two week free trial. At first, I was hesitant to start their program because I’ve never lifted weights before; however, the trainers were supportive and the workouts were easy to follow. After two weeks, I noticed my body has gotten more toned and I’ve spent less time in the gym. I’m happy that I finally found something that works and fits into my hectic lifestyle."</div>
                <img src="wp-content/themes/fitnessfifteen/images/olivia-marcus.jpg">
            </div>
        </div>
        <div id="grid-container">
            <table class="client-grid">
                <tbody>
                    <tr>
                        <td id="dylan" class="client-image-delim">
                            <div id="client-1-info" class="client-info">Dylan, Washington University</div>
                            <div id="client-1-testimonial" class="client-testimonial">"I used to workout consistently, but didn’t make any noticeable progress. This past summer, I started a program with Fitness Fifteen and not only do I feel bigger, but I put 15lb on my bench in the first month."</div>
                            <img src="wp-content/themes/fitnessfifteen/images/dylan-slaughter.jpg">
                        </td>
                        <td id="claudia" class="client-image-delim">
                            <div id="client-2-info" class="client-info">Claudia, University of Florida</div>
                            <div id="client-2-testimonial" class="client-testimonial">"I had a body that most girls would kill for in high school but when I got to UF I let myself slip. By combining cardio and weights, Fitness Fifteen helped get me back on track and now girls ask me for advice when I’m at the gym!"</div>
                            <img src="wp-content/themes/fitnessfifteen/images/DevinFriend1.jpg">
                        </td>
                    </tr>
                    <tr>
                        <td id="jena" class="client-image-delim">
                            <div id="client-3-info" class="client-info">Jena, University of Florida</div>
                            <div id="client-3-testimonial" class="client-testimonial">"Transitioning from living with my parents to living on my own at UF, it was hard for me to maintain a healthy lifestyle. Pizza became my go-to dinner for my busy schedule. Since starting Fitness Fifteen, I’ve found myself feeling healthier, both physically and mentally."</div>
                            <img src="wp-content/themes/fitnessfifteen/images/DevinFriend2.jpg">
                        </td>
                        <td id="ed" class="client-image-delim">
                            <div id="client-4-info" class="client-info">Ed, Ohio University</div>
                            <div id="client-4-testimonial" class="client-testimonial">"I played football and lifted consistently in high school but started to slack come college. Fitness Fifteen gave me a program tailored to my goals, taught me how to diet correctly and got me absolutely shredded. "</div>
                            <img src="wp-content/themes/fitnessfifteen/images/ed-shelley.jpg">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="section-content">
        <hr>
        <hr>
        <div class="p-wrapper">
            <p>
               <i>"I'm pretty sure there's a lot more to life than being really, really, ridiculously good looking. And I plan on finding out what that is."</i>
            </p>
        </div>
        <div id="quote-by"><span class="highlight">- Derek Zoolander</span></div>
        <hr>
        <div id="quote-commentary">Sign up to find out.</div>
        <div id="call-container">
            <div id="call-to-action">
                <input id="call-email" type="call-email" placeholder="email">
                <div id="call-signup">Start for free</div>
            </div>
            <div id="call-message">Enter valid .edu email to continue</div>
        </div>
        <hr>
        <hr>
    </div>
</section>
<section id="about" class="section-body">
    <h1 class="section-head">3 Guys</h1>
    <!-- TEAM MEMBERS -->
    <div id="team-members-list">
        <div class="teamMemberContainer outer-left">
            <div class="circleBase team-member-icon Brennan"></div>
            <div class="team-member-name">Brennan Morell, <span class="highlight">Tech</div>
            <p class="team-member-description">
            </p>
        </div>
        <div class="teamMemberContainer ">
            <div class="circleBase team-member-icon Devin"></div>
            <div class="team-member-name">Devin Goodkin, <span class="highlight">Product</div>
            <p class="team-member-description">Devin is a junior at Washington University in St. Louis studying Economics and Computer Science. In high school, he broke multiple athletic records, served as captain of his high school crew team and led his team to a state medal. As an ISSA certified Personal Trainer, he is passionate about fitness and helping others achieve their goals. He has trained multiple clients before joining Fitness Fifteen including competitive athletes, soccer moms and everyone in between.</p>
        </div>
        <div class="teamMemberContainer outer-right">
            <div class="circleBase team-member-icon Josh"></div>
            <div class="team-member-name">Joshua Zhou, <span class="highlight">Business</span></div>
            <p class="feature-description">Josh is a junior at Washington University in St. Louis majoring in Marketing and double minoring in Computer Science and Mathematics. He’s an active member of both a social fraternity and the Alpha Kappa Psi business fraternity, serves as a Wellness Specialist at the coworking space TechArtista, and owns one of the most popular on-campus businesses, Wash U Wash. Josh is an expert in nutrition and managed to lose 15 lbs of fat this past summer while continuing to go out every weekend.</p>
        </div>
    </div>
</section>
<div class="bottom-banner contact"></div>
<?php get_footer(); ?>
