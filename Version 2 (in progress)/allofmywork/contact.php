<!--
                  - #CONTACT
-->

<article class="contact" data-page="contact">

    <header>
        <h2 class="h2 article-title">Contact</h2>
    </header>

    <section class="mapbox" data-mapbox>
        <figure>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d173688.95673458453!2d103.80744726479678!3d1.3575598077251139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssg!4v1729143684114!5m2!1sen!2ssg"
                width="400" height="300" loading="lazy"></iframe>
        </figure>
    </section>

    <section class="contact-form">

        <h3 class="h3 form-title">Contact Form</h3>

        <form class="form" data-form onsubmit="sendMail(); return false;">

            <div class="input-wrapper">
                <input type="text" id="emailTitle" name="Title" class="form-input" placeholder="Title" required data-form-input>

            </div>

            <textarea name="message" id="emailMessage" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
                <ion-icon name="paper-plane"></ion-icon>
                <span>Send Message</span>
            </button>

        </form>

    </section>

    <script>
        function sendMail() {
            // Get the values of the Title and Message fields
            const title = document.getElementById('emailTitle').value;
            const message = document.getElementById('emailMessage').value;


            // Construct the mailto link with subject and body
            const mailtoLink = `mailto:muhdwafiyuddin5@gmail.com?subject=${encodeURIComponent(title)}&body=${encodeURIComponent(message)}`;

            // Open the mail client with prefilled details
            window.open(mailtoLink);

            // Reset the form fields after opening the mail client
            document.getElementById('contactForm').reset();
        }
    </script>  

</article>