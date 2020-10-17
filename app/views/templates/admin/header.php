<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="shortcut icon" href="<?= BASEURL; ?>/images/favicon.png"> 
        <meta name="description" content=""> 
        <title> Lesson </title>         
        <!-- Favicon -->         
        <link href="<?= BASEURL; ?>/img/brand/favicon.png" rel="icon" type="image/png"> 
        <!-- Your stylesheet-->         
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/uikit.css"> 
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/main.css"> 
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/admin.css"> 
        <!-- font awesome -->         
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/fontawesome.css"> 
        <!--  javascript -->         
        <script src="<?= BASEURL; ?>/js/simplebar.js"></script>         
        <script src="<?= BASEURL; ?>/js/uikit.js"></script>         
    </head>     
    <body> 
        <!-- sidebar -->         
        <div class="admin-side" id="admin-side"> 
            <a href="#" class="admin-logo"><i class="fas fa-graduation-cap"></i> CoursePlus</a> 
            <ul data-simplebar> 
                <li> 
                    <a href="<?php echo BASEURL ?>/admin"> <i class="fas fa-user"></i> Dashboard  </a>
                </li>                 
                <li> 
                    <a href="<?php echo BASEURL ?>/admin/siswa"> <i class="fas fa-user"></i> Siswa  </a>
                </li>                 
                <li> 
                    <a href="<?php echo BASEURL ?>/admin/guru"> <i class="fas fa-user"></i> Guru  </a>
                </li>               
                <li> 
                    <a href="<?php echo BASEURL ?>/admin/kelas"> <i class="fas fa-user"></i> Kelas  </a>
                </li>              
                <li> 
                    <a href="<?php echo BASEURL ?>/admin/mapel"> <i class="fas fa-user"></i> Mapel  </a>
                </li>                
                <li> 
                    <a href="<?php echo BASEURL ?>/admin/bab"> <i class="fas fa-user"></i> Bab  </a>
                </li>             
                <li> 
                    <a href="<?php echo BASEURL ?>/admin/sub"> <i class="fas fa-user"></i> Sub Bab  </a>
                </li>                      
                <li> 
                    <a href="admin-scripts.html"> <i class="fas fa-code"></i> Scripts    </a>
                </li>                 
                <li> 
                    <a href="admin-courses.html"> <i class="fas fa-play"></i> Courses    </a>
                </li>                 
                <li> 
                    <a href="admin-edite-profile.html"> <i class="fas fa-user"></i> edit profile    </a>
                </li>                 
                <ul class="uk-accordion" uk-accordion> 
                    <li class="uk-open"> 
                        <a href="ui-components.html" class="uk-accordion-title"> <i class="fas fa-layer-group"></i> sample link </a> 
                        <div class="uk-accordion-content uk-margin-remove-top" aria-hidden="false"> 
                            <a href="ui-elements.html">sample link 1</a> 
                            <a href="ui-elements.html">sample link 2</a> 
                            <a href="ui-elements.html">sample link 3</a> 
                        </div>                         
                    </li>                     
                    <li class=" uk-margin-remove-top"> 
                        <a href="ui-components.html" class="uk-accordion-title"> <i class="fas fa-layer-group"></i> sample link  </a> 
                        <div class="uk-accordion-content uk-margin-remove-top" hidden="" aria-hidden="true"> 
                            <a href="ui-components.html"> sample link  </a> 
                        </div>                         
                    </li>                     
                </ul>                 
                <li> 
                    <a href="admin-login.html"> <i class="fas fa-user"></i> Logut </a>
                </li>                 
            </ul>             
        </div>         
        <!-- mobile  header -->         
        <div class="admin-mobile-headder uk-hidden@m"> 
            <span uk-toggle="target: #admin-side; cls: admin-side-active" class="uk-padding-small uk-text-white uk-float-right"><i class="fas fa-bars"></i></span> 
            <a class="uk-logo" href="index.html"> <i class="fas fa-graduation-cap"> </i> CoursePlus </a> 
        </div>         
        <!-- main contant -->         
        <div class="admin-content"> 
            <nav class="uk-navbar"> 
                <!-- navbar -->                 
                <div class="uk-navbar-left"> 
                    <ul class="uk-navbar-nav"> 
                        <li class="uk-active"> 
                            <a href="index.html">Dashboard</a> 
                        </li>                         
                        <li> 
                            <a href='#'><?= $data['bagian'] ?></a> 
                        </li> 
                    </ul>                     
                </div>                 
                <!-- right navbar  -->                 
                <div class="uk-navbar-right"> 
                    <!-- User profile -->                     
                    <a href="#"> 
                        <img src="<?= BASEURL; ?>/images/avatures/avature-2.png" alt="" class="uk-border-circle user-profile-tiny"> 
                    </a>                     
                    <div uk-dropdown="pos: top-right ;mode : click ;animation: uk-animation-slide-bottom-small" class="uk-dropdown uk-padding-small angle-top-right uk-dropdown-bottom-right" > 
                        <p class="uk-margin-remove-bottom uk-margin-small-top uk-text-bold"> Hamse Mohamoud  </p>                                          
                        <ul class="uk-nav uk-dropdown-nav"> 
                            <li> 
                                <a href="Profile.html"> <i class="fas fa-user uk-margin-small-right"></i> Profile</a> 
                            </li>                                             
                            <li> 
                               <a href="admin-edite-profile.html"> <i class="fas fa-cog uk-margin-small-right"></i> Setting</a>                                 </li>                                             
                            <li class="uk-nav-divider"></li>                                             
                            <li> 
                                <a href="admin-login.html"> <i class="fas fa-sign-out-alt uk-margin-small-right"></i> Log out</a> 
                            </li>                                             
                        </ul>                                         
                    </div>                    
                </div>                 
            </nav>