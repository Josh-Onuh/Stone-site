<!doctype html>
<html class="no-js" lang="en">

<?php include('head.php')?>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Loading Area -->
        <div class="loading">
            <div class="text-center middle">
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- Loading Area End Here -->

        <!-- Begin Tim's jewelry Header Main Area -->
        <?php include('header.php')?>
        <!-- Tim's jewelry Header                        Main Area End Here -->
        <!-- Begin Contact Main Page Area -->
        <div class="contact-main-page">
            <div class="container">
                <div id="google-map"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                        <div class="contact-page-side-content">
                            <h3 class="contact-page-title">Contact Us</h3>
                            <p class="contact-page-message">For high quality jewelries made from pure metals,<br>
                                We provide professional services to the satisfaction of our esteemed customers.
                                </p>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-fax"></i> Address</h4>
                                <p>Sparkling Junction, Jos, Plateau State. – Nigeria</p>
                            </div>
                            <div class="single-contact-block">
                                <h4><i class="fa fa-phone"></i> Phone</h4>
                                <p>Mobile: <a href="tel://+2348136938100">+234 813 693 8100</a></p>
                                <p>Hotline: <a href="tel://+23480xxxxxxx">+234 80x xxx xxxx</a></p>
                            </div>
                            <div class="single-contact-block last-child">
                                <h4><i class="fa fa-envelope-o"></i> Email</h4>
                                <p><a href="mailto://info@Timsjewelry.com">info@Timsjewelry.com</a></p>
                                <p><a href="mailto://support@Timsjewelry.com">support@Timsjewelry.company</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                        <div class="contact-form-content">
                            <h3 class="contact-page-title">Tell Us Your Message</h3>
                            <div class="contact-form">
                                <form id="contact-form" action="http://hasthemes.com/file/mail.php" method="post">
                                    <div class="form-group">
                                        <label>Your Name <span class="required">*</span></label>
                                        <input type="text" name="con_name" id="con_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Email <span class="required">*</span></label>
                                        <input type="email" name="con_email" id="con_email" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="con_subject" id="con_subject">
                                    </div>
                                    <div class="form-group form-group-2">
                                        <label>Your Message</label>
                                        <textarea name="con_message" id="con_message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" value="submit" id="submit" class="alsita-contact-form_btn" name="submit">send</button>
                                    </div>
                                </form>
                            </div>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Main Page Area End Here -->
        <?php include('footer.php')?>

</body>

</html>