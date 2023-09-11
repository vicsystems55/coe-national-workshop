<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-33.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 08:37:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>COE NATIONAL WORKSHOP 2023</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout33">
        <div class="fxt-content-wrap">
            <div class="fxt-heading-content">

                <div style="height: 100%;" class="fxt-inner-wrap fxt-transformX-R-50 fxt-transition-delay-3">
                    <div class="d-flex justify-content-between">
                        <div class="c">
                            <img style="height: 60px;" src="img/bursars.jpeg" alt="Logo">
                        </div>
                        <div class="c">
                            <img style="height: 60px;" src="img/ncc.jpeg" alt="Logo">
                        </div>
                    </div>
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">

                        <div style="" class="fxt-sub-title py-2">THE COMMITTEE OF BURSARS</div>

                    </div>
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                        <div class="fxt-middle-content">
                            <div style="font-size: 12pt;" class="fxt-sub-title ">An integrated Executive Workshop Series</div>
                            <div style="font-size: 12pt;" class="fxt-sub-title ">Date:  23 - 26 October, 2023</div>

                            <div style="font-size: 12pt;" class="fxt-sub-title ">Venue: B.O Ukeje Hall Jibril Aminu House, National Commision for Colleges of Education (NCCE), Central Business District, FCT-Abuja</div>

                            <h3 style="font-weight: ;" class="fxt-sub-title pt-2 text-danger font-weight-bold">NATIONAL WORKSHOP FOR COMMITTEE OF FEDERAL BURSARS' IN COLLABORATION WITH ALL STATES AND PRIVATE
                                OWNED COLLEGES OF EDUCATION IN NIGERIA
                            </h3>
                            <p  style="font-size: 12pt;" class="fxt-description">Reducing Cost and Delivering Result</p>

                            <p  style="font-size: 12pt;" class="fxt-description">Account Name: Committee of Bursars <br>

                                Bank: Zenith bank <br>
                                Account Number: 1013478989 </br>
                                </p>




                        </div>
                    </div>
                    <div class="fxt-transformX-R-50 fxt-transition-delay-10">
                        <div class="fxt-switcher-description"><a href="login-33.html" class="fxt-switcher-text"></a></div>
                    </div>
                </div>
            </div>
            <div class="fxt-form-content">
                <div class="fxt-main-form">
                    <div class="fxt-inner-wrap fxt-opacity fxt-transition-delay-13">
                        <h2 class="fxt-page-title text-success">Sign Up for the event</h2>
                        <p class="fxt-description text-danger">
                            NOTE: All participants are expected to register online on or before 29th September, 2023
                            to enable the committee put together all their workshop packages and certificates.
                        </p>

                        @if(Session::has('msg'))
                        <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif


                        <form action="/register" method="POST" class="row">
                            {{ csrf_field() }}
                            <div class="form-group col-lg-6">
                                <label for="surname" class="fxt-label">Surname</label>
                                <input type="text" id="surname" class="form-control" name="surname" placeholder="Enter your surname" required="required">
                            <span> (As it should be on certificate)</span>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="fname" class="fxt-label">First Name</label>
                                <input type="text" id="fname" class="form-control" name="fname" placeholder="Enter your first name" required="required">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="middlename" class="fxt-label">Middle Name</label>
                                <input type="text" id="middlename" class="form-control" name="middlename" placeholder="Enter your middlename" required="required">
                            </div>

                           <div class="col-lg-6">
                            <label for="middlename" class="fxt-label">Gender</label>
                             <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="male" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                  Male
                                </label>
                              </div>
                              <div class="form-check" >
                                <input class="form-check-input" type="radio" name="gender" value="female" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                  Female
                                </label>
                              </div>
                           </div>




                            <div class="form-group col-lg-12">
                                <label for="institutionname" class="fxt-label">Name of Institution</label>
                                <input type="text" id="institutionname" class="form-control" name="institutionname" placeholder="Enter your institution name" required="required">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="address" class="fxt-label">Address</label>
                                <input type="text" id="address" class="form-control" name="address" placeholder="Address" required="required">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="currentposition" class="fxt-label">Current Position in your institution</label>
                                <input type="text" id="currentposition" class="form-control" name="currentposition" placeholder="Enter your current position" required="required">
                            </div>
                            {{-- <div class="form-group col-lg-6">
                                <label for="password" class="fxt-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Enter Password" required="required">
                            </div> --}}
                            {{-- <div class="form-group col-lg-6">
                                <div class="fxt-checkbox-box">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1" class="ps-4">I agree with Terms of Service. Terms Of Payments and Privacy Policy</label>
                                </div>
                            </div> --}}
                            <div class="form-group col-lg-12 mb-3">
                                <button type="submit" class="fxt-btn-fill">Register</button>
                            </div>
                        </form>
                        <div class="fxt-divider-text">
                            ©Committee of Bursars of Federal Colleges of Education in Nigeria (COBFCOEN), 2023
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="js/jquery-3.5.0.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-33.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 08:37:34 GMT -->
</html>
