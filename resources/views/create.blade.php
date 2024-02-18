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
{{-- {{$countries}} --}}
<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Resume Builder</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-12 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                                    <h3 class="mb-4">Personal Details</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div>
                                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                        @csrf
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
                                                    <select id="country" name="country" class="form-control country">
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
                                                <div class="first-blk first-blk-1">
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
                                                            class="form-control country">
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
                                                                class="form-control month">
                                                                <option value="">Start Month</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select id="exp_startyear_1" name="exp_startyear_1"
                                                                class="form-control">
                                                                <option value="">Start Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row p-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select id="exp_endmnth_1" name="exp_endmnth_1"
                                                                class="form-control month">
                                                                <option value="">End Month</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select id="exp_endyear_1" name="exp_endyear_1"
                                                                class="form-control">
                                                                <option value="">End Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="checkbox" name="exp_current_1"
                                                            id="exp_current_1"><label for="exp_current_1">I currently
                                                            work here</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="exp_responsiblity_1" class="form-control" id="exp_responsiblity_1" cols="30" rows="6"
                                                            placeholder="Responsibilities"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div id="extra-exp"></div>
                                            <button type="button" id="add-exp">Add Experience</button>

                                            <div class="col-md-12">
                                                <h3 class="mb-4">Education</h3>
                                            </div>
                                            <div class="education-blk">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="school_1"
                                                            id="school_1" placeholder="School">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="course_1"
                                                            id="course_1" placeholder="Degree/Course">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="major_1"
                                                            id="major_1" placeholder="Major/Field of study">
                                                    </div>
                                                </div>
                                                <div class="row p-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select id="grad_mnth_1" name="grad_mnth_1"
                                                                class="form-control month">
                                                                <option value="">Graduation Month</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select id="grad_yr_1" name="grad_yr_1"
                                                                class="form-control">
                                                                <option value="">Graduation Year</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <h3 class="mb-4">Certifications</h3>
                                            </div>
                                            <div class="cert-blk">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="certification_1"
                                                            id="certification_1" placeholder="Licence/Certification">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <h3 class="mb-4">Skills</h3>
                                            </div>
                                            <div class="skill-blk">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="skill_1"
                                                            id="skill_1" placeholder="Skill">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <h3 class="mb-4">Career Objective</h3>
                                            </div>
                                            <div class="skill-blk">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="career_objective" class="form-control" id="career_objective" cols="30" rows="6" placeholder="Career Objective"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <h3 class="mb-4">References</h3>
                                            </div>
                                            <div class="reference-blk">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="reference_1" class="form-control" id="reference_1" cols="30" rows="6" placeholder="Reference Details"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <h3 class="mb-4">Languages</h3>
                                            </div>
                                            <div class="language-blk">
                                                <div class="row p-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="lang_1"
                                                            id="lang_1" placeholder="Language">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="proficiency_1"
                                                            id="proficiency_1" placeholder="Proficiency">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <h3 class="mb-4">Additional Information</h3>
                                            </div>
                                            <div class="reference-blk">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="additional_info" class="form-control" id="additional_info" cols="30" rows="6" placeholder="Additional Details"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="submit" name="submit"
                                                        class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{-- <div class="col-md-6 d-flex align-items-stretch">
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
                            </div> --}}
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
    <script src="{{ url('') }}/assets/js/webfront.js"></script>
    {{-- <script src="{{ url('') }}/assets/js/main.js"></script> --}}

</body>

</html>
