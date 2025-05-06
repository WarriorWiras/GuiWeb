<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Muhd Wafiyuddin | My Portfolio</title>

        <!--
          - favicon
        -->
        <link rel="shortcut icon" href="./assets/images/Logo.png" type="image/x-icon">

        <!--
          - custom css link
        -->
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />

        <!--
          - google font link
        -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
            />
        <style>
            .row {
                display: flex;
                justify-content: center; /* Center the columns horizontally */
                align-items: flex-start; /* Align tops of images */
                flex-wrap: wrap; /* Stack on smaller screens */
                margin: 0 auto;
            }

            .column {
                flex: 0 0 auto;
                max-width: 39.3%;
            }

            .column img {
                width: 100%;
                height: auto;
            }

            @media screen and (max-width: 768px) {
                .column {
                    max-width: 100%; /* Makes each image nearly full width */
                    margin-bottom: 20px; /* Adds space between stacked images */
                }
            }



        </style>
    </head>

    <body>

        <!--
          - #MAIN
        -->

        <main>

            <!--
              - #SIDEBAR
            -->

            <aside class="sidebar" data-sidebar>

                <div class="sidebar-info">

                    <figure class="avatar-box">
                        <img src="./assets/images/Avatar/my-avatar.jpg" alt="Richard hanrick" width="80">
                    </figure>

                    <div class="info-content">
                        <h1 class="name" title="Muhd Wafiyuddin">Muhd Wafiyuddin</h1>

                        <p class="title">Cyber Security Enthusiasts</p>
                    </div>

                    <button class="info_more-btn" data-sidebar-btn>
                        <span>Show Contacts</span>

                        <ion-icon name="chevron-down"></ion-icon>
                    </button>

                </div>

                <div class="sidebar-info_more">

                    <div class="separator"></div>

                    <ul class="contacts-list">

                        <li class="contact-item">

                            <div class="icon-box">
                                <ion-icon name="mail-outline"></ion-icon>
                            </div>

                            <div class="contact-info">
                                <p class="contact-title">Email</p>

                                <a href="mailto:muhdwafiyuddin5@gmail.com" class="contact-link">muhdwafiyuddin5@gmail.com</a>
                            </div>

                        </li>

                        <li class="contact-item">

                            <div class="icon-box">
                                <ion-icon name="send-sharp"></ion-icon>
                            </div>

                            <div class="contact-info">
                                <p class="contact-title">Telegram</p>

                                <a href="https://t.me/WarriorWiras" class="contact-link" target="__blank">t.me/WarriorWiras</a>
                            </div>

                        </li>


                        <li class="contact-item">

                            <div class="icon-box">
                                <ion-icon name="location-outline"></ion-icon>
                            </div>

                            <div class="contact-info">
                                <p class="contact-title">Location</p>

                                <address>Singapore</address>
                            </div>

                        </li>

                    </ul>

                    <div class="separator"></div>

                    <ul class="social-list">

                        <li class="social-item">
                            <a href="https://github.com/WarriorWiras" class="social-link" target="__blank">
                                <ion-icon name="logo-github"></ion-icon>
                            </a>
                        </li>

                        <li class="social-item">
                            <a href="https://www.linkedin.com/in/muhd-wafiyuddin" class="social-link" target="__blank">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>

                        <li class="social-item">
                            <a href="https://www.instagram.com/__why0wafi__/" class="social-link" target="__blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

            </aside>





            <!--
              - #main-content
            -->

            <div class="main-content">

                <!--
                  - #NAVBAR
                -->

                <nav class="navbar">

                    <ul class="navbar-list">

                        <li class="navbar-item">
                            <button class="navbar-link  active" data-nav-link>About</button>
                        </li>

                        <li class="navbar-item">
                            <button class="navbar-link" data-nav-link>Resume</button>
                        </li>

                        <li class="navbar-item">
                            <button class="navbar-link" data-nav-link>Portfolio</button>
                        </li>

                        <li class="navbar-item">
                            <button class="navbar-link" data-nav-link>Contact</button>
                        </li>

                    </ul>

                </nav>






                <!--========================= Resume =====================-->

                <?php include 'allofmywork/about.php' ?>


                <!--========================= Resume =====================-->

                <?php include 'allofmywork/resume.php' ?>



                <!--========================= Projects =====================-->

                <?php include 'allofmywork/project.php' ?>


                <!--========================= Projects =====================-->

                <?php include 'allofmywork/contact.php' ?>



            </div>

        </main>


        <!--================== SCROLL TOP ==================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>


        <!--
          - custom js link
        -->
        <script src="./assets/js/script.js"></script>
        <script type="text/javascript" src="./assets/js/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="./assets/js/ptj.js"></script>


        <!--
          - ionicon link
        -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    </body>

</html>