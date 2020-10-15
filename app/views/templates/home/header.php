<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= BASEURL; ?>/images/favicon.png">
        <meta name="description" content="">
        <title> Selamat Datang </title>         
        <!-- Favicon -->
        <link href="<?= BASEURL; ?>/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Youive prer stylesheet-->
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/uikit.css"> 
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/main.css"> 
        <!-- font awesome -->                  
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/fontawesome.css">
        <!--  javascript -->
        <script src="<?= BASEURL; ?>/js/simplebar.js"></script>         
        <script src="<?= BASEURL; ?>/js/uikit.js"></script>  
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>       
    </head>     
    <body> 
        <!-- side nav-->         
        <div class="side-nav uk-animation-slide-left-medium" id="side-nav"> 
            <!--Mobile icon wiill close nav-side   -->             
            <span class="uk-animation-fade tm-mobile-close-icon" uk-toggle="target: #side-nav; cls: side-nav-active"> <i class="fas fa-times icon-large"></i></span> 
            <div id="side-nav"> 
                <div class="side-nav-bg"></div>                 
                <div class="uk-navbar-left uk-visible@s"> 
                    <a class="uk-logo" href="Homepage.html"> <i class="fas fa-graduation-cap"></i> </a> 
                </div>                 
                <ul>          
                    <li> 
                        <a href="books.html" uk-tooltip="title: Books ; delay: 500 ; pos: right ;animation: uk-animation-scale-up"> <i class="fas fa-book-open"></i> </a> 
                    </li>                 
                    <li> 
                        <a href="Discussion.html" class="active" uk-tooltip="title: Discussion ; delay: 500 ; pos: right ;animation:    uk-animation-scale-up"> <i class="fas fa-comment-alt"></i> </a> 
                    </li>                     
                    <li> 
                        <!-- blog -->                         
                        <a href="Blog.html" class="active" uk-tooltip="title: Blogs ; delay: 500 ; pos: right ;animation:   uk-animation-scale-up"> <i class="fas fa-file-alt"></i> </a> 
                    </li>                     
                    <li> 
                        <!-- Site pages -->                         
                        <a href="#"> <i class="fas fa-clone"></i> </a> 
                        <div class="side-menu-slide"> 
                            <div class="side-menu-slide-content"> 
                                <ul> 
                                    <li> 
                                        <a href="pages-about.html"> <i class="fas fa-question"></i>   About  </a> 
                                        <div uk-drop="pos: right-center;animation: uk-animation-slide-left-medium" class="uk-drop uk-drop-right-center"> 
                                            <div class="uk-card  uk-box-shadow-xlarge uk-card-default uk-maring-small-left"> 
                                                <img src="<?= BASEURL; ?>/images/demos/pages-about.jpg" alt=""> 
                                                <p class="uk-padding-small uk-margin-remove"> About Page is : ipsum dolor sit amet, consectetur adipiscing elit.. </p> 
                                            </div>                                             
                                        </div>                                         
                                    </li>                                     
                                    <li> 
                                        <a href="pages-faq.html"> <i class="fas fa-comment-alt"></i> FAQ  </a> 
                                        <div uk-drop="pos: right-center;animation: uk-animation-slide-left-medium" class="uk-drop uk-drop-right-center"> 
                                            <div class="uk-card  uk-box-shadow-xlarge uk-card-default uk-maring-small-left"> 
                                                <img src="<?= BASEURL; ?>/images/demos/pages-faq.jpg" alt=""> 
                                                <p class="uk-padding-small uk-margin-remove">  FAQ is : ipsum dolor sit amet, consectetur adipiscing elit </p> 
                                            </div>                                             
                                        </div>                                         
                                    </li>                                     
                                    <li> 
                                        <a href="pages-terms.html"> <i class="fas fa-comment-dots"></i>  Terms &amp; Services </a> 
                                        <div uk-drop="pos: right-center;animation: uk-animation-slide-left-medium" class="uk-drop uk-drop-right-center"> 
                                            <div class="uk-card  uk-box-shadow-xlarge uk-card-default uk-maring-small-left"> 
                                                <img src="<?= BASEURL; ?>/images/demos/pages-terms.jpg" alt=""> 
                                                <p class="uk-padding-small uk-margin-remove">  Term Services ipsum dolor sit amet, consectetur adipiscing elit </p> 
                                            </div>                                             
                                        </div>                                         
                                    </li>                                     
                                    <li> 
                                        <a href="pages-help.html"> <i class="fas fa-comments"></i> Help </a> 
                                        <div uk-drop="pos: right-center;animation: uk-animation-slide-left-medium" class="uk-drop uk-drop-right-center"> 
                                            <div class="uk-card  uk-box-shadow-xlarge uk-card-default uk-maring-small-left"> 
                                                <img src="<?= BASEURL; ?>/images/demos/pages-help.jpg" alt=""> 
                                                <p class="uk-padding-small uk-margin-remove">  help Page ipsum dolor sit amet, consectetur adipiscing elit </p> 
                                            </div>                                             
                                        </div>                                         
                                    </li>                                     
                                </ul>                                 
                            </div>                             
                        </div>                         
                    </li>                     
                </ul>                 
                <ul class="uk-position-bottom"> 
                    <li> 
                        <!-- Lunch information box -->                         
                        <a href="#" uk-tooltip="title: Lunch information box ; delay: 500 ; pos: right ;animation:  uk-animation-scale-up" uk-toggle="target: #infoBox; cls: infoBox-active"><i class="fas fa-question"></i> </a> 
                    </li>                     
                    <li> 
                        <!-- Night mode button  -->                         
                        <a href="#" uk-tooltip="title: Night mode ; delay: 500 ; pos: right ;animation: uk-animation-scale-up"> <i class="fas fa-moon"></i> </a> 
                        <div uk-drop="pos: right-bottom ;mode:click ; offset: 10;animation: uk-animation-slide-left-medium" class="uk-drop"> 
                            <div class="uk-card-small uk-box-shadow-xlarge uk-card-default uk-maring-small-left  border-radius-6"> 
                                <div class="uk-card uk-card-default border-radius-6"> 
                                    <div class="uk-card-header"> 
                                        <h5 class="uk-card-title uk-margin-remove-bottom">Swich to night mode</h5> 
                                    </div>                                     
                                    <div class="uk-card-body"> 
                                        <p>Turns the light surfaces of the page dark, creating an experience ideal for night. Try it!</p> 
                                        <p class="uk-text-small uk-align-left uk-margin-remove  uk-text-muted">DARK THEME </p> 
                                        <!-- night mode button -->                                         
                                        <div class="btn-night uk-align-right" id="night-mode"> 
                                            <label class="tm-switch"> 
                                                <div class="uk-switch-button"></div>                                                 
                                            </label>                                             
                                        </div>                                         
                                        <!-- end  night mode button -->                                         
                                    </div>                                     
                                </div>                                 
                            </div>                             
                        </div>                         
                    </li>                     
                </ul>                 
            </div>             
        </div>         
        <!-- PreLoader -->         
        <div id="spinneroverlay"> 
            <div class="spinner"></div>             
        </div>         
        <!-- Your app page -->         
        <div class="app"> 
            <!--  Top bar nav -->             
            <nav class="uk-navbar-transparent tm-mobile-header uk-animation-slide-top uk-position-z-index" uk-navbar> 
                <!-- mobile icon for side nav on nav-mobile-->                 
                <span class="uk-hidden@m tm-mobile-menu-icon" uk-toggle="target: #side-nav; cls: side-nav-active"><i class="fas fa-bars icon-large"></i></span> 
                <!-- mobile icon for user icon on nav-mobile -->                 
                <span class="uk-hidden@m tm-mobile-user-icon uk-align-right" uk-toggle="target: #tm-show-on-mobile; cls: tm-show-on-mobile-active"><i class="far fa-user icon-large"></i></span> 
                <!-- mobile logo -->                 
                <a class="uk-hidden@m uk-logo" href="index.html"> CoursePlus </a> 
                <div class="uk-navbar-left uk-visible@m"> 
                    <a class="uk-navbar-item back-to-dashboard uk-button-text " href="#" uk-tooltip="title: back-to-dashboard ; delay: 700 ; pos: bottom-left ;animation:   uk-animation-scale-up">My Dashboard</a> 
                    <a class="uk-navbar-item back-to-dashboard uk-button-text " href="#">Cari semua pelajaran</a> 
                </div>                 
                <div class="uk-navbar-right tm-show-on-mobile uk-flex-right" id="tm-show-on-mobile"> 
                    <!-- this will clouse after display user icon -->                     
                    <span class="uk-hidden@m tm-mobile-user-close-icon uk-align-right" uk-toggle="target: #tm-show-on-mobile; cls: tm-show-on-mobile-active"><i class="fas fa-times icon-large"></i></span> 
                    <ul class="uk-navbar-nav uk-flex-middle"> 
                        <li> 
                            <a href="#modal-full" uk-toggle><i class="fas fa-search icon-medium"></i></a> 
                        </li>                         
                        <li> 
                            <!-- your courses -->                             
                            <a href="#"> <i class="fas fa-play uk-hidden@m"></i> <span class="uk-visible@m"> Pelajaran saya</span> </a> 
                            <div uk-dropdown="pos: top-right ;mode : click; animation: uk-animation-slide-bottom-medium" class="uk-dropdown border-radius-6  uk-dropdown-top-right tm-dropdown-large uk-padding-remove"> 
                                <div class="uk-clearfix"> 
                                    <div class="uk-float-left"> 
                                        <h5 class="uk-padding-small uk-margin-remove uk-text-bold  uk-text-left">  Pelajaran saya </h5> 
                                    </div>                                     
                                    <div class="uk-float-right">   
                                        <i class="fas fa-check uk-align-right  uk-margin-remove uk-margin-remove-left  uk-padding-small uk-text-small"> Completed 3 / 5 </i> 
                                    </div>                                     
                                </div>                                 
                                <hr class=" uk-margin-remove"> 
                                <div class="uk-padding-smaluk-text-left uk-height-medium"> 
                                    <div class="demo1" data-simplebar> 
                                        <div class="uk-child-width-1-2@s  uk-grid-small uk-padding-small" uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 100 ;repeat: true" uk-grid> 
                                            <div> 
                                                <a href="Course-intro-one.html" class="uk-link-reset"> 
                                                    <div class="uk-padding-small uk-card-default"> 
                                                        <progress id="js-progressbar" class="uk-progress progress-green uk-margin-small-bottom" value="100" max="100" style="height: 7px;"></progress>                                                         
                                                        <img src="<?= BASEURL; ?>/images/courses/tags/css3.JPG" class="uk-align-left  uk-margin-small-right uk-margin-small-bottom  uk-width-1-3  uk-visible@s" alt=""> 
                                                        <p class="uk-text-bold uk-margin-remove">CSS3 Introduciton </p> 
                                                        <p class="uk-text-small uk-margin-remove"> by : Hamse mohamoud </p> 
                                                        <div class="uk-margin-small"> 
                                                            <a class="Course-tags uk-margin-small-right   border-radius-6" href="#"> <i class="fas fa-play"></i> Course resume</a> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                </a>                                                 
                                            </div>                                             
                                            <div> 
                                                <a href="Course-intro-one.html" class="uk-link-reset"> 
                                                    <div class="uk-padding-small uk-card-default"> 
                                                        <progress id="js-progressbar" class="uk-progress progress-coral  uk-margin-small-bottom" value="15" max="100" style="height: 7px !important;"></progress>                                                         
                                                        <img src="<?= BASEURL; ?>/images/courses/tags/html5.jpg" class="uk-align-left  uk-margin-small-right uk-margin-small-bottom  uk-width-1-3  uk-visible@s" alt=""> 
                                                        <p class="uk-text-bold uk-margin-remove">HTML5 Introduciton </p> 
                                                        <p class="uk-text-small uk-margin-remove"> by : Hamse mohamoud </p> 
                                                        <div class="uk-margin-small"> 
                                                            <a class="Course-tags uk-margin-small-right   border-radius-6" href="#"> <i class="fas fa-play"></i> Course resume</a> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                </a>                                                 
                                            </div>                                            
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                                <hr class=" uk-margin-remove"> 
                                <h5 class="uk-padding-small uk-margin-remove uk-text-bold uk-text-center"><a class="uk-link-heading" href="#"> See all </a> </h5> 
                            </div>                             
                        </li>                         
                        <li> 
                            <!-- messages -->                             
                            <a href="#"><i class="fas fa-envelope icon-large"></i></a> 
                            <div uk-dropdown="pos: top-right ;mode : click; animation: uk-animation-slide-bottom-small" class="uk-dropdown uk-dropdown-top-right  tm-dropdown-medium border-radius-6 uk-padding-remove uk-box-shadow-large angle-top-right"> 
                                <h5 class="uk-padding-small uk-margin-remove uk-text-bold  uk-text-left"> Messages </h5> 
                                <a href="#" class="uk-position-top-right uk-link-reset"> <i class="fas fa-trash uk-align-right   uk-text-small uk-padding-small"> Clear all</i> </a> 
                                <hr class=" uk-margin-remove"> 
                                <div class="uk-text-left uk-height-medium"> 
                                    <div uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 100" data-simplebar> 
                                        <hr class="uk-margin-remove uk-animation-slide-top-small"> 
                                        <div class=" uk-padding-small  uk-background-light uk-inline-clip uk-transition-toggle" tabindex="0"> 
                                            <div class="uk-transition-slide-right-small uk-position-top-right uk-position-z-index"> 
                                                <a class="uk-button uk-padding-small-right uk-padding-remove-left" href="#">    Delete </a> 
                                            </div>                                             
                                            <div class="uk-transition-slide-right-medium uk-position-top-right uk-margin-medium-right"> 
                                                <a class="uk-button uk-margin-small-right" href="#">    Replay </a> 
                                            </div>                                             
                                            <div class="uk-flex-middle uk-grid-small uk-grid" uk-grid=""> 
                                                <div class="uk-width-3-4"> 
                                                    <p class="uk-margin-remove-bottom uk-text-bold">John keni  </p> 
                                                    <p class="uk-margin-remove">Lorem ipsum dolor sit ame ..</p> 
                                                    <p class="uk-margin-remove-top uk-text-small uk-text-muted">25 min</p> 
                                                </div>                                                 
                                                <div class="uk-width-1-4 uk-flex-first uk-first-column"> 
                                                    <img src="<?= BASEURL; ?>/images/avatures/avature-3.png" alt="Image" class="uk-border-circle uk-animation-slide-left-small"> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>                                         
                                        <hr class=" uk-margin-remove"> 
                                        <div class=" uk-padding-small  uk-background-light uk-inline-clip uk-transition-toggle" tabindex="0"> 
                                            <div class="uk-transition-slide-right-small uk-position-top-right uk-position-z-index"> 
                                                <a class="uk-button uk-padding-small-right uk-padding-remove-left" href="#">    Delete </a> 
                                            </div>                                             
                                            <div class="uk-transition-slide-right-medium uk-position-top-right uk-margin-medium-right"> 
                                                <a class="uk-button uk-margin-small-right" href="#">    Replay </a> 
                                            </div>                                             
                                            <div class="uk-flex-middle uk-grid-small uk-grid" uk-grid=""> 
                                                <div class="uk-width-3-4"> 
                                                    <p class="uk-margin-remove-bottom uk-text-bold">John keni  </p> 
                                                    <p class="uk-margin-remove">Lorem ipsum dolor sit ame ..</p> 
                                                    <p class="uk-margin-remove-top uk-text-small uk-text-muted">25 min</p> 
                                                </div>                                                 
                                                <div class="uk-width-1-4 uk-flex-first uk-first-column"> 
                                                    <img src="<?= BASEURL; ?>/images/avatures/avature.jpg" alt="Image" class="uk-border-circle uk-animation-slide-left-small"> 
                                                </div>                                                 
                                            </div>                                             
                                        </div>                                           
                                    </div>                                     
                                </div>                                 
                                <hr class=" uk-margin-remove"> 
                                <h5 class="uk-padding-small uk-margin-remove uk-text-bold uk-text-center"><a class="uk-link-heading" href=""> See all </a> </h5> 
                            </div>                             
                        </li>                         
                        <li> 
                            <!-- Notivications -->                             
                            <a href="#"><i class="fas fa-bell icon-large"></i></a> 
                            <div uk-dropdown="pos: top-right ;mode : hover; animation: uk-animation-slide-bottom-small" class="uk-dropdown uk-dropdown-top-right  tm-dropdown-small border-radius-6 uk-padding-remove uk-box-shadow-large angle-top-right"> 
                                <h5 class="uk-padding-small uk-margin-remove uk-text-bold  uk-text-left"> Notivications </h5> 
                                <a href="#" class="uk-position-top-right uk-link-reset"> <i class="fas fa-trash uk-align-right   uk-text-small uk-padding-small"> Clear all</i></a> 
                                <hr class=" uk-margin-remove"> 
                                <div class="uk-padding-smaluk-text-left uk-height-medium"> 
                                    <div data-simplebar> 
                                        <div class="uk-padding-small" uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 100 ; repeat: true"> 
                                            <div class="uk-flex-middle uk-grid-small" uk-grid> 
                                                <div class="uk-width-3-4"> 
                                                    <p class="uk-margin-remove">Lorem ipsum dolor   ame ..</p> 
                                                    <p class="uk-margin-remove-top uk-text-small uk-text-muted">25 min</p> 
                                                </div>                                                 
                                                <div class="uk-width-1-5 uk-flex-first"> 
                                                    <img src="<?= BASEURL; ?>/images/avatures/avature-4.png" alt="Image" class="uk-border-circle"> 
                                                </div>                                                 
                                            </div>                                             
                                            <div class="uk-flex-middle uk-grid-small" uk-grid> 
                                                <div class="uk-width-3-4"> 
                                                    <p class="uk-margin-remove">Lorem ipsum dolor   ame ..</p> 
                                                    <p class="uk-margin-remove-top uk-text-small uk-text-muted">25 min</p> 
                                                </div>                                                 
                                                <div class="uk-width-1-5 uk-flex-first"> 
                                                    <img src="<?= BASEURL; ?>/images/avatures/avature-1.png" alt="Image" class="uk-border-circle"> 
                                                </div>                                                 
                                            </div>                                              
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                            </div>                             
                        </li>                         
                        <li> 
                            <!-- User profile -->                             
                            <a href="#"> 
                                <img src="<?= BASEURL; ?>/images/avatures/avature-2.png" alt="" class="uk-border-circle user-profile-tiny"> 
                            </a>                             
                            <div uk-dropdown="pos: top-right ;mode : click ;animation: uk-animation-slide-right" class="uk-dropdown  uk-dropdown-top-right  tm-dropdown-small border-radius-6 angle-top-right"> 
                                <div class="uk-grid-small uk-flex-middle uk-margin-small-bottom" uk-grid> 
                                    <div class="uk-width-1-4  uk-first-column"> 
                                        <img src="<?= BASEURL; ?>/images/avatures/avature-2.png" alt="Image" class="uk-align-center uk-border-circle"> 
                                    </div>                                     
                                    <div class="uk-width-3-4"> 
                                        <p class="uk-margin-remove-bottom uk-margin-small-top uk-text-bold"> Hamse Mohamoud  </p> 
                                        <p class="uk-margin-remove-top uk-text-small uk-margin-small-bottom"> Bankook China</p> 
                                    </div>                                     
                                </div>                                 
                                <ul class="uk-nav uk-dropdown-nav"> 
                                    <li> 
                                        <a href="Profile.html"> <i class="fas fa-user uk-margin-small-right"></i> Profile</a> 
                                    </li>                                     
                                    <li> 
                                        <a href="#"> <i class="fas fa-envelope uk-margin-small-right"></i> Messages </a> 
                                    </li>                                     
                                    <li> 
                                        <a href="#"> <i class="fas fa-share uk-margin-small-right"></i> Invite freind</a> 
                                    </li>                                     
                                    <li> 
                                        <a href="#"> <i class="fas fa-cog uk-margin-small-right"></i> Setting</a> 
                                    </li>                                     
                                    <li class="uk-nav-divider"></li>                                     
                                    <li> 
                                        <a href="#"> <i class="fas fa-sign-out-alt uk-margin-small-right"></i> Log out</a> 
                                    </li>                                     
                                </ul>                                 
                            </div>                             
                        </li>                         
                    </ul>                     
                </div>                 
                <!-- search box -->                 
                <div id="modal-full" class="uk-modal-full uk-modal uk-animation-scale-down" uk-modal> 
                    <div class="uk-modal-dialog uk-flex uk-flex-center" uk-height-viewport> 
                        <button class="uk-modal-close-full" type="button" uk-close></button>                         
                        <form class="uk-search uk-margin-xlarge-top uk-search-large uk-animation-slide-bottom-medium"> 
                            <i class="fas fa-search uk-position-absolute uk-margin-top icon-xxlarge"></i> 
                            <input class="uk-search-input uk-margin-large-left" type="search" placeholder="Search..." autofocus> 
                        </form>                         
                    </div>                     
                </div>                 
            </nav>             
            <ul class="uk-switcher switcher-container"> 
                <li> 
                    <div id="topic" class="topic1 hero-bg"> 
                        <div uk-grid> 
                            <div class="uk-width-1-2@m"> 
                                <h1 class="uk-animation-fade"> <?= $data['judul'] ?> </h1> 
                                <p> <?= $data['deskripsi'] ?> </p> 
                                <div class="uk-visible@m uk-animation-slide-bottom-small" uk-grid> 
                                    <div class="uk-width-1-3@m"> 
                                        <img src="<?= BASEURL; ?>/images/icons/Video.png" class="img-small"> 
                                        <span class="uk-text-middle uk-text-white"> <?= $data['jumlahGuru'] ?> Guru </span> 
                                    </div>                                     
                                    <div class="uk-width-1-3@m"> 
                                        <img src="<?= BASEURL; ?>/images/icons/students.png" class="img-small"> 
                                        <span class="uk-text-middle uk-text-white"> <?= $data['jumlahSiswa'] ?> Siswa </span> 
                                    </div>                                     
                                    <div class="uk-width-1-3@m"> 
                                        <img src="<?= BASEURL; ?>/images/icons/Discussion.png" class="img-small"> 
                                        <span class="uk-text-middle uk-text-white"> <?= $data['jumlahDiskusi'] ?> Diskusi </span> 
                                    </div>                                     
                                </div>                                 
                            </div>                             
                            <div class="uk-width-1-2@m uk-visible@m"> 
                                <img src="<?= BASEURL; ?>/images/courses/course-catagory-hero.jpg" alt="" class="uk-align-right img-xxlarge"> 
                            </div>                             
                        </div>                         
                    </div>                     
                </li>               
            </ul>             
            <!-- mobile catagory button-->             
            <button class="uk-button uk-hidden@m  mobile-catagory-button" type="button" uk-toggle="target: #tabs-moible; cls: tabs-moible"> Open subcatagory </button>             
            <ul class="uk-subnav uk-subnav-pill tabs-moible-hidden" uk-switcher="connect: .switcher-container" id="tabs-moible"> 
                <li class="uk-active"> 
                    <a href="#" id="page1"> Web development </a> 
                </li>                 
                <li> 
                    <a href="#">Mobile Apps </a> 
                </li>                 
                <li> 
                    <a href="#">Game development </a> 
                </li>                 
                <li> 
                    <a href="#">Software  </a> 
                </li>                 
                <li> 
                    <a href="#">Development Tools </a> 
                </li>                 
                <li> 
                    <a href="#">Ecommerce </a> 
                </li>                 
            </ul>