<?php
$dob = '2001-07-26';

$year = (date('Y') - date('Y', strtotime($dob)));

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Muhd Wafiyuddin | My Portfolio</title>
        <link rel="stylesheet" href="CSS/swiper-bundle.min.css" />
        <link rel="stylesheet" href="CSS/newcss.css" />
        <link
            rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
            />
<style>


.column {
  float: left;
width: 50%;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
  
  
}
</style>
    </head>

    <body oncontextmenu="return false">


        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Muhd Wafiyuddin</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class="uil uil-estate nav__icon"></i>Home
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i>About Me
                            </a>
                        </li>


                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i>Skills
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#qualifications" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i>Qualifications
                            </a>
                        </li>


                        <li class="nav__item">
                            <a href="#testimonials" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i>Testimonials
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#projects" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i>Projects
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="https://terminal.wafiyuddin.name" target="_blank" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i><i class="fa-solid fa-terminal"></i>
                            </a>
                        </li>

                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i>Contact-Me
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>
                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>
        <!-- main-->

        <main class="main">
            <!--========================= Home =====================-->

<?php include 'allofmywork/home.php' ?>

            <!--======================= About========================-->

<?php include 'allofmywork/about.php' ?>


            <!--===================== SKILLS =====================-->

<?php include 'allofmywork/skills.php' ?>

            <!--==================== Qualifications ==================-->

<?php include 'allofmywork/qualification.php' ?>

            <!--=================== testimonials ===================-->

<?php include 'allofmywork/testimonials.php' ?>

            <!--=================== Projects ===================-->

<?php include 'allofmywork/projects.php' ?>

            <!--===================== Contact Me =====================-->

<?php include 'allofmywork/contact.php' ?>

        </main>

        <!--================== Footer ===============-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h1 class="footer__title">Muhd Wafiyuddin</h1>
                        <span class="footer__subtitle"
                              >A Cyber Security Student</span
                        >
                    </div>

                    <ul class="footer__links">
                        <li>
                            <a href="#qualification" class="footer__link">Qualification</a>
                        </li>
                        <li>
                            <a href="#projects" class="footer__link">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer__link">Contact-Me</a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a
                            href="https://www.linkedin.com/in/muhd-wafiyuddin-b6a48a189"
                            class="footer__social"
                            target="__blank"
                            >
                            <i class="fa-brands fa-linkedin"></i>
                        </a>

                        <a
                            href="https://github.com/WarriorWiras"
                            target="__blank"
                            class="footer__social"
                            >
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </div>
                </div>

                <p class="footer__copy">&#169; 2024 Muhd Wafiyuddin. All Rights Reserved.</p>
            </div>
        </footer>

        <!--================== SCROLL TOP ==================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>

        <script type="text/javascript" src="JS/swiper-bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/2205d59d52.js" crossorigin="anonymous"></script>
        <script src="JS/ptj.js"></script>
    </body>
</html>
