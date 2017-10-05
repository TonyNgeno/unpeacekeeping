<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration- UN Peace Keeping - KE</title>

    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Register to be a peace ambassador">
    <meta name="author" content="Emmanuel Gathage & Brian Okinyi">
    <meta name="keywords" content="un, United Nations, UN Peace Keeping, peace, Kenya, register">
    <meta name="twitter:description" content="UN Peace Keeping Ke - Register">
    <meta name="twitter:title" content="Register- UN Peace Keeping - KE">
    <meta name="twitter:site" content="unpeacekeeping.co.ke">
    <meta name="twitter:image" content="../img/hero.jpg">
    <meta name="twitter:creator" content="Emmanuel Gathage & Brian Okinyi">
    <meta name="country" content="Kenya">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="Registration">
    <meta property="og:description" content="Register as an Ambassador">
    <meta property="og:url" content="unpeacekeeping.co.ke">
    <meta property="og:site_name" content="UN PeaceKeeping KE unpeacekeeping.co.ke">
    <meta property="og:image" content="../img/hero.jpg">

    <meta property="article:publisher" content="Emmanuel & Brian">
    <meta property="article:author" content="Emmanuel & Brian">
    <meta property="article:section" content="Registration of Ambassadors">
    <meta property="article:published_time" content="2017-10-16T09:00:53+00:00">
    <meta property="article:modified_time" content="2017-10-16T09:00:53+00:00">
    <meta property="article:updated_time" content="2017-10-16T09:00:53+00:00">

 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login-style.css">

    <link rel="shortcut icon" type="image/icon" href="../img/favicon.png">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pull-right">
                            <li><a href="#" title="Post"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title="Post"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="Post"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" title="Post"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="tel:+254742796000"><i class="fa fa-phone"></i>0742796000</a></li>
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a href="index.html" class="navbar-brand">
                    <img src="img/un_logo.png" alt="Post">
                </a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li><a href="index.html" title="">HOME</a></li>
                        <li><a href="category.html" title="">NEWS</a></li>
                        <li><a href="index.html#services" title="">OUR MISSION</a></li>
                        <li><a href="#" title=""></a></li>
                        <li><a href="#" title=""></a></li>
                    </ul>  
                    <ul class="nav navbar-nav main-navbar-nav navbar-right">
                      <li><a href="index.html#apply"><span class="glyphicon glyphicon-user"></span>&nbsp;Become an ambassador</a></li>
                    </ul>                         
                </div><!-- /.navbar-collapse -->                
                <!-- END MAIN NAVIGATION -->
            </div>
        </nav>        
    </header>
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html" title="Home">Home</a></li>
                        <li class="active">Member registration</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-9">
                    <h2 class="page-title">Become an ambassador</h2>
                    <div class="entry">
                        <form name="registration-form" id="registration-form" method="POST" action="scripts/register_member.php">
                            <div class="row">
                              <h4>Account Details</h4>

                              <div class="input-group input-group-icon" style="width: 80%;">
                                <input type="text" placeholder="Full Name" name="name" required="required" />
                                <div class="input-icon"><i class="fa fa-user"></i></div>
                              </div>

                              <div class="input-group input-group-icon" style="width: 80%;">
                                <input type="email" placeholder="Email Adress" name="email" required />
                                <div class="input-icon"><i class="fa fa-envelope"></i></div>
                              </div>

                              <div class="input-group input-group-icon" style="width: 80%;">
                                <input type="text" placeholder="Phone Number" name="phone" required />
                                <div class="input-icon"><i class="fa fa-phone"></i></div>
                              </div>
                            </div>

                            <div class="row">
                                <h4>Personal Details</h4>

                                <div class="input-group input-group-icon" style="width: 80%;">
                                    <input type="text" placeholder="ID number" name="id_number" minlength="7" maxlength="8" required="required" />
                                    <div class="input-icon"><i class="fa fa-id-card"></i></div>
                                </div>

                                <div class="input-group input-group-icon" style="width: 80%;">
                                    <input list="county" name="county" placeholder="County of residence" />
                                        <datalist id="county">
                                            <option value="Baringo"></option>
                                            <option value="Bomet"></option>
                                            <option value="Busia"></option>
                                            <option value="Elgeyo-Marakwet"></option>
                                            <option value="Embu"></option>
                                            <option value="Garisa"></option>
                                            <option value="Homa Bay"></option>
                                            <option value="Isiolo"></option>
                                            <option value="Kajiado"></option>
                                            <option value="Kakamega"></option>
                                            <option value="Kericho"></option>
                                            <option value="Kiambu"></option>
                                            <option value="Kilifi"></option>
                                            <option value="Kirinyaga"></option>
                                            <option value="Kisii"></option>
                                            <option value="Kisumu"></option>
                                            <option value="Kitui"></option>
                                            <option value="Kwale"></option>
                                            <option value="Laikipia"></option>
                                            <option value="Lamu"></option>
                                            <option value="Machakos"></option>
                                            <option value="Makueni"></option>
                                            <option value="Mandera"></option>
                                            <option value="Marsabit"></option>
                                            <option value="Meru"></option>
                                            <option value="Migori"></option>
                                            <option value="Mombasa"></option>
                                            <option value="Murang'a"></option>
                                            <option value="Nairobi"></option>
                                            <option value="Nakuru"></option>
                                            <option value="Nandi"></option>
                                            <option value="Narok"></option>
                                            <option value="Nyamira"></option>
                                            <option value="Nyandarua"></option>
                                            <option value="Nyeri"></option>
                                            <option value="Samburu"></option>
                                            <option value="Siaya"></option>
                                            <option value="Taita-Taveta"></option>
                                            <option value="Tana River"></option>
                                            <option value="Tharaka-Nithi"></option>
                                            <option value="Trans Nzoia"></option>
                                            <option value="Turkana"></option>
                                            <option value="Uasin Gishu"></option>
                                            <option value="Vihiga"></option>
                                            <option value="Wajir"></option>
                                            <option value="West Pokot"></option>
                                        </datalist>
                                <div class="input-icon"><i class="fa fa-map-marker fa-1x"></i></div>
                              </div>

                                <h5>Postal address</h5>
                                <div class="input-group input-group-icon" style="width: 80%;">
                                    <input type="text" placeholder="eg. 16037-20100 Nakuru" name="post_addr"/>
                                    <div class="input-icon"><i class="fa fa-address-book"></i></div>
                                </div>

                              <div class="col-half" >
                                <h5>Date of birth</h5>
                                <div class="input-group">
                                  <div class="col-third">
                                    <input type="number" placeholder="DD" name="dd" required="" min="1" max="31" />
                                  </div>
                                  <div class="col-third">
                                    <input type="number" placeholder="MM" name="mm" required="" min="1" max="12" />
                                  </div>
                                  <div class="col-third">
                                    <input type="number" placeholder="YYYY" name="yyyy" required="" min="1900" max="2017" />
                                  </div>
                                </div>
                              </div>

                              <div class="col-half">
                                <h5>Gender</h5>
                                <div class="input-group">
                                  <input type="radio" name="gender" value="male" id="gender-male" required="" />
                                  <label for="gender-male">Male</label>
                                  <input type="radio" name="gender" value="female" id="gender-female" required="" />
                                  <label for="gender-female">Female</label>
                                </div>
                              </div>
                            </div>

                            <!-- Education background -->
                            <div class="row">
                              <h4>Education background</h4>
                                <div class="">
                                  <h5>KCSE Grade</h5>
                                  <div class="input-group input-group-icon">
                                    <div style="width: 400px;">
                                        <select name="KCSE_grade">
                                            <option value="A">A</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B">B</option>
                                            <option value="B-">B-</option>
                                            <option value="C+">C+</option>
                                            <option value="C">C</option>
                                            <option value="C-">C-</option>
                                            <option value="D+">D+</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                  </div>
                                </div>

                                <h5>Brief explanation about your education background</h5>
                                <div class="input-group input-group-icon" style="width: 80%;">
                                    <textarea name="education_desc" cols="" rows="5" placeholder="Short about your education"></textarea>
                              </div>

                            </div>

                            <!-- //Education background -->

                            <div class="row">
                              <h4>Payment Details</h4>
                              <h5>Please Enter Transaction Code. The code you receive after Paying Registration Fees</h5>
                                <div class="input-group input-group-icon" style="width: 80%;">
                                    <input type="text" placeholder="eg. LIR1EVIXIY" name="mpesa" required="required" minlength="10" maxlength="10" />
                                    <div class="input-icon"><i class="fa fa-envelope-open fa-1x"></i></div>
                              </div>
                            </div>

                            <div class="row">
                              <h4>Terms and Conditions</h4>
                              <div class="input-group">
                                <input type="checkbox" id="terms" name="terms" />
                                <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
                              </div>
                            </div>


                              <div class="row">
                                  <span class="col-md-3 col-sm-3 col-xs-6 center"><input type="submit" name="registration_submit" value="Apply" id="apply" class="btn btn-primary" /></span>

                              </div>
                          </form>
           
                    </div>
                </section>
                <aside class="sidebar col-sm-3">
                    <div class="widget">
                        <h4>SERVICES</h4>
                        <ul>
                            <li class="current"><a href="#" title="">Register</a></li>
                            <li><a href="category.html" title="">News</a></li>
                        </ul>
                    </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
   <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>UNPEACEKEEPINGKE</h4>
                    <p class="text">The primary, the fundamental, the essentila purpose of the UNPEACEKEEPINGKE is to keep peace.</p>
                    <ul class="list-inline">
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Linked in"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" title="Google +"><i class="fa fa-google-plus"></i></a></li>                       
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>ORGANISATION</h4>
                    <ul class="big">
                        <li><a href="#" title="Register">Register</a></li>
                        <li><a href="#" title="">&nbsp;</a></li>
                        <li><a href="category.html" title="News">News</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>UPDATES</h4>
                    <ul class="big">
                        <li><a href="index.html#login-form" title="">Subscribe</a></li>
                        <li><a href="#" title="">&nbsp;</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4>CONTACT US</h4>
                    <p class="text">UNPEACEKEEPINGKE</p>
                    <p><a href="tel:+254742796000"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>0742796000</a></p>
                    <p><a href="mailto:iletisim@agrisosgb.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>unpeacekeepingke@gmail.com</a></p>
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" title="UN PeaceKeepingKE"><p class="pull-left">&copy; 2017 UN PeaceKeepingKE</p></a>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-inline navbar-right">
                            <li><a href="index.html" title="Home">HOME</a></li>
                            <li><a href="category.html">NEWS</a></li>
                            <li><a href="index.html#services" title="Our Mission">OUR MISSION</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>