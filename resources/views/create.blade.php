<!doctype html>
<html lang="en">

<head>
    <title>Contact Form 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ url('') }}/assets/css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Resume Builder</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                                    <h3 class="mb-4">Write us</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="firstname"
                                                        id="firstname" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="lastname"
                                                        id="lastname" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email"
                                                        id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="jobtitle"
                                                        id="jobtitle" placeholder="Job Title">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="phone"
                                                        id="phone" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select id="country" name="country" class="form-control">
                                                        <option value="">Country</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="province"
                                                        id="province" placeholder="State/Province">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="zipcode"
                                                        id="zipcode" placeholder="Zip Code">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <h3 class="mb-4">Experience</h3>
                                            </div>
                                            <div class="experince-blk">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="exp_jobtitle_1"
                                                            id="exp_jobtitle_1" placeholder="Job Title">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            name="exp_company_1" id="exp_company_1"
                                                            placeholder="Company / Organization Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select id="exp_country_1" name="exp_country_1"
                                                            class="form-control">
                                                            <option value="">Country</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="exp_city_1"
                                                            id="exp_city_1" placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="row p-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select id="exp_startmnth_1" name="exp_startmnth_1"
                                                            class="form-control">
                                                            <option value="">Start Month</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                name="exp_city_1" id="exp_city_1" placeholder="City">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message"
                                                        class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                                    <h3>Contact information</h3>
                                    <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a
                                                    href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('') }}/assets/js/popper.js"></script>
    <script src="{{ url('') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ url('') }}/assets/js/jquery.validate.min.js"></script>
    <script src="{{ url('') }}/assets/js/main.js"></script>

</body>

</html>
