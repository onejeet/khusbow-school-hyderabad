<?php
include_once('inquiry_mail.php');
include_once('modal.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Khusbow Vidya Niketan School</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
</head>

<body>

     <div class="brand">Khusbow Vidya Niketan</div>
    <div class="address-bar"> Banjara Hills, Hyderabaad | Telangana 500034</div>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Khusbow School</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li><a href="about.php">About Us</a>
                    </li>
                    <li><a href="gallery.php">Gallery</a>
                    </li>
                    <li><a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact <strong>Khusbow Vidya Niketan</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
               <!--    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe> -->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7613.737021309113!2d78.42705035777605!3d17.418096762191077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb972994af3a53%3A0x5f63400d91a43116!2sKhusbow+Vidya+Nikethan+School!5e0!3m2!1sen!2sin!4v1486960323155" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>




                </div>
                <div class="col-md-4">
                    <p>Phone: <strong>098492 04764</strong>
                    </p>
                    <p>Email: <strong>khusbowschool@gmail.com</strong>
                    </p>
                    <p>Address:<br/> <strong>Khusbow Vidya Niketan School, <br/>Road No.14, Noor Nagar, Nandi Nagar, <br/>Banjara Hills, Hyderabad, <br/>Telangana 500034</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact <strong>Us</strong>
                    </h2>
                    <hr>
                    <p>Drop a note to us. We don't spam, feel free to contact us regarding any kind of query.</p>
                    <form role="form" action="<?php basename($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" name="name" required class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" name="email" required class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" name="tel" required class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" required name="message" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" name="submit_email" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; Khusbow Vidya Niketan School 2017<br/>
                    <small>Website Designed by <a href="https://about.me/jeet_sharma"> Dots Created</a></small></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
