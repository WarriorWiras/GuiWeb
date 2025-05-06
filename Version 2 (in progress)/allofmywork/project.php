<!--
  - #PORTFOLIO
-->
<?php
$link = 'https://api.github.com/users/warriorwiras/repos';

// Set up cURL options
$curl = curl_init($link);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['User-Agent: PHP']);

// Execute cURL session and get the response
$response = curl_exec($curl);

// Close cURL session
curl_close($curl);

// Decode the JSON response
$repos = json_decode($response, true);

// Check if the response is an array
if (is_array($repos)) {
    $repoCount = 0;

    // Specify your GitHub username
    $yourUsername = 'WarriorWiras';

    // Count the number of repositories owned and created by you
    foreach ($repos as $repo) {
        // Check if the repository is not a fork and has public visibility
        if ($repo['fork'] === false && $repo['visibility'] === 'public' && $repo['owner']['login'] === $yourUsername) {
            $repoCount++;
        }
    }

    $final = $repoCount;
}
?>

<article class="portfolio" data-page="portfolio">

    <header>
        <h2 class="h2 article-title">Projects</h2>
            <p class="project-count" style="margin-top: 5px; font-size: 1rem; color: white;">
        Total Projects: <?php echo $final - 1; ?>
    </p>
    <br>
    </header>

    <section class="projects">

        <ul class="filter-list">

            <li class="filter-item">
                <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
                <button data-filter-btn>Cyber Security</button>
            </li>

            <li class="filter-item">
                <button data-filter-btn>Web</button>
            </li>

            <li class="filter-item">
                <button data-filter-btn>Programming</button>
            </li>

            <li class="filter-item">
                <button data-filter-btn>Cloud</button>
            </li>

            <li class="filter-item">
                <button data-filter-btn>Others</button>
            </li>

        </ul>

        <div class="filter-select-box">

            <button class="filter-select" data-select>

                <div class="select-value" data-selecct-value>Select category</div>

                <div class="select-icon">
                    <ion-icon name="chevron-down"></ion-icon>
                </div>

            </button>

            <ul class="select-list">

                <li class="select-item">
                    <button data-select-item>All</button>
                </li>

                <li class="select-item">
                    <button data-select-item>Cyber Security</button>
                </li>

                <li class="select-item">
                    <button data-select-item>Web</button>
                </li>

                <li class="select-item">
                    <button data-select-item>Programming</button>
                </li>
                
                               <li class="select-item">
                    <button data-select-item>Cloud</button>
                </li>
                
                               <li class="select-item">
                    <button data-select-item>Others</button>
                </li>

            </ul>

        </div>

        <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="others">
                <a href="https://github.com/WarriorWiras/Raspberrypi-Project" target="__blank">

                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>

                        <img src="./assets/images/Projects/Raspberry Pi 4.webp" alt="Raspberry Pi" loading="lazy">
                    </figure>

                    <h3 class="project-title">Project Pi</h3>

                    <p class="project-category">Others</p>

                </a>
            </li>



            <li class="project-item  active" data-filter-item data-category="cloud">
                <a href="https://github.com/WarriorWiras/AWS-Projects" target="__blank">

                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>

                        <img src="./assets/images/Projects/amazon-web-services-news.webp" alt="AWS" loading="lazy">
                    </figure>

                    <h3 class="project-title">Project AWS</h3>

                    <p class="project-category">Cloud</p>

                </a>
            </li>



            <li class="project-item  active" data-filter-item data-category="cyber security">
                <a href="https://github.com/WarriorWiras/IT-Security-C200" target="__blank">

                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>

                        <img src="./assets/images/Projects/RP Project.jpg" alt="IT Security" loading="lazy">
                    </figure>

                    <h3 class="project-title">Project IT Security</h3>

                    <p class="project-category">Cyber Security</p>

                </a>
            </li>



            <li class="project-item  active" data-filter-item data-category="cloud">
                <a href="https://github.com/WarriorWiras/Linode-Projects" target="__blank">

                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>

                        <img src="./assets/images/Projects/Linode.webp" alt="Linode" loading="lazy">
                    </figure>

                    <h3 class="project-title">Project Linode</h3>

                    <p class="project-category">Cloud</p>

                </a>
            </li>



            <li class="project-item  active" data-filter-item data-category="web">
                <a href="https://github.com/WarriorWiras/TerminalWeb" target="__blank">

                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>

                        <img src="./assets/images/Projects/Terminal.jpg" alt="Terminal Web" loading="lazy">
                    </figure>

                    <h3 class="project-title">Project Terminal Web</h3>

                    <p class="project-category">Web</p>
                    <div class="view-live-box">
                        <a href="https://terminal.wafiyuddin.name/" target="__blank">View Live</a>
                    </div>
                </a>
            </li>



            <li class="project-item  active" data-filter-item data-category="web">
                <a href="https://github.com/WarriorWiras/GuiWeb" target="__blank">

                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>

                        <img src="./assets/images/Projects/GUI.png" alt="GUI Web" loading="lazy">
                    </figure>

                    <h3 class="project-title">Project GUI Web</h3>

                    <p class="project-category">Web</p>
                    <div class="view-live-box">
                        <a href="https://www.wafiyuddin.name/" target="__blank">View Live</a>
                    </div>
                </a>
            </li>



            <li class="project-item  active" data-filter-item data-category="programming">
                <a href="https://github.com/WarriorWiras/Python-Projects" target="__blank">

                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>

                        <img src="./assets/images/Projects/Python-Project.jpeg" alt="Python Project" loading="lazy">
                    </figure>

                    <h3 class="project-title">Python Projects</h3>

                    <p class="project-category">Programming</p>

                </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="programming">
                <a href="https://github.com/WarriorWiras/Java-Projects" target="__blank">

                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>

                        <img src="./assets/images/Projects/Java.png" alt="Java Programming Image" loading="lazy">
                    </figure>

                    <h3 class="project-title">Java Projects</h3>

                    <p class="project-category">Programming</p>

                </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="cloud">
                <a href="https://github.com/WarriorWiras/GoogleCloud-Projects" target="__blank">

                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>

                        <img src="./assets/images/Projects/Google_Cloud.png" alt="Google Cloud Image" loading="lazy">
                    </figure>

                    <h3 class="project-title">Google Cloud Projects</h3>

                    <p class="project-category">Cloud</p>

                </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="cyber security">
                <a href="https://github.com/WarriorWiras/Networking-Projects" target="__blank">

                    <figure class="project-img">
                        <div class="project-item-icon-box">
                            <ion-icon name="eye-outline"></ion-icon>
                        </div>

                        <img src="./assets/images/Projects/Networkings.png" alt="Networking Project Image" loading="lazy">
                    </figure>

                    <h3 class="project-title">Networking</h3>

                    <p class="project-category">Cyber Security</p>

                </a>
            </li>

        </ul>

    </section>

</article>


