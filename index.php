<?php
include "connect.php"; // Ensure this includes your database connection
include "Includes/templates/header.php";
include "Includes/templates/navbar.php";

// Fetch room offers from the database
$stmt = $con->prepare("SELECT * FROM room_offers");
$stmt->execute();
$room_offers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Home Section -->
<section class="home_section">
    <div class="section-header">
        <div class="section-title" style="font-size:50px; color:white">
            <!-- Home Section Title -->
        </div>
        <hr class="separator">
        <div class="section-tagline">
            <!-- Home Section Tagline -->
        </div>
    </div>
</section>

<!-- Our Rooms Section -->
<section class="our-rooms" id="Rooms">
    <div class="container">
        <div class="section-header">
            <div class="section-title">
                Our Rooms
            </div>
            <hr class="separator">
            <div class="section-tagline">
                We offer the best Room in NLU
            </div>
        </div>
        <div class="row">
            <?php foreach ($room_offers as $room_offer): ?>
                <div class="col-md-4">
                    <div class="room_offers" style="background-image: url('admin/Uploads/<?php echo $room_offer['room_image']; ?>');">
                        <div class="type_description">
                            <h3><?php echo $room_offer['type_label']; ?></h3>
                            <p><?php echo $room_offer['type_description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
?>




<!-- Include VueJS CDN -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<script>
new Vue({
    el: "#contact_ajax_form",
    data: {
        name: '',
        email: '',
        subject: '',
        message: ''
    },
    methods:{
        checkForm: function(event){
            if( this.name && this.email && this.subject && this.message)
            {
                return true;
            }
            
            if (!this.name)
            {
                this.name = null;
            }

            if (!this.email)
            {
                this.email = null;
            }

            if (!this.subject)
            {
                this.subject = null;
            }

            if (!this.message)
            {
                this.message = null;
            }
            
            event.preventDefault();
        },
    }
})
</script>

<!-- Include additional scripts or jQuery as needed -->




<!-- CONTACT SECTION -->
<section class="contact-section" id="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-padding">
                <div class="contact-info">
                    <h2>
                        Get in touch with us & 
                        <br>send us a message today!
                    </h2>
                    <p>
                        Getting dressed up and traveling with good friends makes for a shared, unforgettable experience.
                    </p>
                    <h3>
                        198 West 21th Street, Suite 721 
                        <br>
                        New York, NY 10010
                    </h3>
                    <ul>
                        <li>
                            <span style="font-weight: bold">Email:</span> 
                            contact@yahyacarrental.com
                        </li>
                        <li>
                            <span style="font-weight: bold">Phone:</span> 
                            +88 (0) 101 0000 000
                        </li>
                        <li>
                            <span style="font-weight: bold">Fax:</span> 
                            +88 (0) 202 0000 001
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="contact-form">
                    <div id="contact_ajax_form" class="contactForm">
                        <div class="form-group column-row row">
                            <div class="col-sm-6">
                                <input type="text" id="contact_name" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" id="contact_subject" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="contact_message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="contact_send" class="contact_send_btn">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<section class="widget_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <a class="navbar-brand" href="">
                        G<span style="color:#04DBC0">Camp</span>&nbsp;Resort
                    </a>
                    <p>
                        Getting dressed up and traveling with good friends makes for a shared, unforgettable experience.
                    </p>
                    <ul class="widget_social">
                        <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-2x"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fab fa-google-plus-g fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <h3>Contact Info</h3>
                    <ul class="contact_info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>962 Fifth Avenue, 3rd Floor New York, NY10022
                        </li>
                        <li>
                            <i class="far fa-envelope"></i>contact@barbershop.com
                        </li>
                        <li>
                            <i class="fas fa-mobile-alt"></i>+123 456 789 101
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer_widget">
                    <h3>Newsletter</h3>
                    <p style="margin-bottom:0px">Don't miss a thing! Sign up to receive daily deals</p>
                    <div class="subscribe_form">
                        <form action="#" class="subscribe_form" novalidate="true">
                            <input type="email" name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address...">
                            <button type="submit" class="submit">SUBSCRIBE</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BOTTOM FOOTER -->
<?php include "Includes/templates/footer.php"; ?>

<!-- Include VueJS CDN -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<script>
new Vue({
    el: "#contact_ajax_form",
    data: {
        name: '',
        email: '',
        subject: '',
        message: ''
    },
    methods:{
        checkForm: function(event){
            if( this.name && this.email && this.subject && this.message)
            {
                return true;
            }
            
            if (!this.name)
            {
                this.name = null;
            }

            if (!this.email)
            {
                this.email = null;
            }

            if (!this.subject)
            {
                this.subject = null;
            }

            if (!this.message)
            {
                this.message = null;
            }
            
            event.preventDefault();
        },
    }
})
</script>
