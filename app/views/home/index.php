
<ul class="uk-switcher switcher-container"> 
    <li> 
        <!--  Web development -->                     
        <div class="uk-container"> 
            <div class="uk-clearfix boundary-align"> 
                <div class="uk-float-left section-heading none-border">
                    <h2>Cari semua kursus <?= $data['mapel'][0]['nama_mapel'] ?> yang ada!</h2> 
                    <p>Kami menyediakan kursus yang mantap.</p>
                </div>                             
                <div class="uk-float-right"> 
                    <a href="#" class="uk-link-reset uk-margin-small-right" uk-tooltip="title: Course card; pos: top-right"> <i class="fas fa-th-large"></i> </a> 
                    <a href="Course-list.html" class="uk-margin-small-right" uk-tooltip="title:Course list; pos: top-right"><i class="fas fa-th-list"></i> </a> 
                    <span class="uk-text-small uk-text-uppercase"> Sort by :</span> 
                    <button class="uk-button uk-button-default uk-background-default uk-button-small" type="button" uk-tooltip="title: Sort; pos: top-right"> Newest  </button>                                 
                    <div uk-dropdown="pos: top-right ;mode : click" class="uk-dropdown  uk-dropdown-top-right" style="left: -141px; top: -267px;"> 
                        <ul class="uk-nav uk-dropdown-nav"> 
                            <li class="uk-active"> 
                                <a href="#">Best Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Newest Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Most Courses takes </a> 
                            </li>                                         
                            <li> 
                                <a href="#">Oldest Courses</a> 
                            </li>                                         
                            <li class="uk-nav-divider"></li>                                         
                            <li> 
                                <a href="#">trending Courses</a> 
                            </li>                                         
                        </ul>                                     
                    </div>
                </div>                             
            </div>
            
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid> 
                <!-- Course 1 -->
                <?php foreach ($data['babMtk'] as $bab) { ?>
                <div> 
                    <div class="uk-card-default uk-card-hover uk-card-small Course-card uk-inline-clip uk-transition-toggle" tabindex="0"> 
                        <div class="uk-transition-slide-right-small uk-position-top-right uk-padding-small uk-position-z-index"> 
                            <a class="uk-button course-badge" href="#"> <i class="fas fa-heart icon-medium"></i> </a> 
                        </div>                                     
                        <div class="uk-transition-slide-right-medium uk-position-top-right uk-padding-small uk-margin-medium-right"> 
                            <a class="uk-button uk-margin-small-right course-badge" href="#"> <i class="far fa-check-square icon-medium"></i> </a> 
                        </div>                                     
                        <a href="Course-intro-one.html" class="uk-link-reset"> 
                            <img src="<?= BASEURL; ?>/images/courses/course-10.jpg" class="course-img"> 
                            <div class="uk-card-body"> 
                                <h4><?= $bab['nama_bab'] ?></h4> 
                                <p> <?= $bab['deskripsi_bab'] ?> </p> 
                                <hr class="uk-margin-remove-top"> 
                                <div class="uk-clearfix"> 
                                    <div class="uk-float-left"> 
                                        <a class="Course-tags uk-margin-small-right" href="Course-all-tags.html"> <?= $bab['jenjang_kelas'] ?> </a>                           
                                        <a class="Course-tags" href="Course-all-tags.html"> <?= $bab['nama_mapel'] ?> </a>
                                    </div>                                                 
                                    <div class="uk-float-right"> 
                                        <a class="Course-tags Course-tags-more" href="Browse_all_webdevelopment.html">   
                                    </div>                                                 
                                </div>                                             
                            </div>                                         
                        </a>                                     
                    </div>                                 
                </div>    
                <?php } ?>                     
            </div>                         
            <a href="Browse-courses-single-page.html" class="uk-align-center uk-text-center uk-margin-large uk-h4 uk-link-heading"> Browse more Courses </a> 
        </div>                     
    </li>                 
    <li> 
        <!--  Mobile app -->                     
        <div class="uk-container"> 
            <div class="uk-clearfix boundary-align"> 
                <div class="uk-float-left section-heading none-border"> 
                    <h2>Browse Mobile Apps courses</h2> 
                    <p>Adipisici elit, sed eiusmod tempor incidunt ut labore et</p> 
                </div>                             
                <div class="uk-float-right"> 
                    <a href="#" class="uk-link-reset uk-margin-small-right" uk-tooltip="title: list; pos: top-right"> <i class="fas fa-th-large"></i> </a> 
                    <a href="Course-list.html" class="uk-margin-small-right" uk-tooltip="title: list; pos: top-right"><i class="fas fa-th-list"></i> </a> 
                    <span class="uk-text-small"> Sort by :</span> 
                    <button class="uk-button uk-button-default uk-background-default uk-button-small" type="button" uk-tooltip="title: Sort; pos: top-right"> Newest  </button>                                 
                    <div uk-dropdown="pos: top-right ;mode : click" class="uk-dropdown  uk-dropdown-top-right" style="left: -141px; top: -267px;"> 
                        <ul class="uk-nav uk-dropdown-nav"> 
                            <li class="uk-active"> 
                                <a href="#">Best Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Newest Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Most Courses takes </a> 
                            </li>                                         
                            <li> 
                                <a href="#">Oldest Courses</a> 
                            </li>                                         
                            <li class="uk-nav-divider"></li>                                         
                            <li> 
                                <a href="#">trending Courses</a> 
                            </li>                                         
                        </ul>                                     
                    </div>                                 
                </div>                             
            </div>                         
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid> 
                <div> 
                    <div class="uk-card-default uk-card-hover  uk-card-small Course-card uk-inline-clip">
                        <a href="Course-intro-one.html" class="uk-link-reset"> 
                            <img src="<?= BASEURL; ?>/images/courses/course-1.jpg" class="course-img"> 
                            <div class="uk-card-body"> 
                                <h4>Build from Scratch</h4> 
                                <p> Lorem ipsum dolor sit amet tempor consectetur adipiscing elit, sed do eiusmod tempor ... </p> 
                                <hr class="uk-margin-remove-top"> 
                                <a class="Course-tags uk-margin-small-right tags-active" href="Course-all-tags.html"> JavaScript </a> 
                                <a class="Course-tags" href="Course-all-tags.html"> Beginner </a> 
                            </div>                                         
                        </a>                                     
                    </div>                                 
                </div>                      
            </div>                         
            <a href="Browse-courses-single-page.html" class="uk-align-center uk-text-center uk-margin-large uk-h4 uk-link-heading"> Browse more Courses </a> 
        </div>                     
    </li>                 
    <li> 
        <!--  Game development -->                     
        <div class="uk-container"> 
            <div class="uk-clearfix boundary-align"> 
                <div class="uk-float-left section-heading none-border"> 
                    <h2>Browse Game development courses</h2> 
                    <p>Adipisici elit, sed eiusmod tempor incidunt ut labore et</p> 
                </div>                             
                <div class="uk-float-right"> 
                    <a href="#" class="uk-link-reset uk-margin-small-right" uk-tooltip="title: list; pos: top-right"> <i class="fas fa-th-large"></i> </a> 
                    <a href="Course-list.html" class="uk-margin-small-right" uk-tooltip="title: list; pos: top-right"><i class="fas fa-th-list"></i> </a> 
                    <span class="uk-text-small"> Sort by :</span> 
                    <button class="uk-button uk-button-default uk-background-default uk-button-small" type="button" uk-tooltip="title: Sort; pos: top-right"> Newest  </button>                                 
                    <div uk-dropdown="pos: top-right ;mode : click" class="uk-dropdown  uk-dropdown-top-right" style="left: -141px; top: -267px;"> 
                        <ul class="uk-nav uk-dropdown-nav"> 
                            <li class="uk-active"> 
                                <a href="#">Best Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Newest Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Most Courses takes </a> 
                            </li>                                         
                            <li> 
                                <a href="#">Oldest Courses</a> 
                            </li>                                         
                            <li class="uk-nav-divider"></li>                                         
                            <li> 
                                <a href="#">trending Courses</a> 
                            </li>                                         
                        </ul>                                     
                    </div>                                 
                </div>                             
            </div>                         
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid> 
                <!-- Course  1  -->                             
                <div> 
                    <div class="uk-card-default uk-card-hover  uk-card-small Course-card uk-inline-clip">
                        <a href="Course-intro-one.html" class="uk-link-reset"> 
                            <img src="<?= BASEURL; ?>/images/courses/course-1.jpg" class="course-img"> 
                            <div class="uk-card-body"> 
                                <h4>Build from Scratch</h4> 
                                <p> Lorem ipsum dolor sit amet tempor consectetur adipiscing elit, sed do eiusmod tempor ... </p> 
                                <hr class="uk-margin-remove-top"> 
                                <a class="Course-tags uk-margin-small-right tags-active" href="Course-all-tags.html"> JavaScript </a> 
                                <a class="Course-tags" href="Course-all-tags.html"> Beginner </a> 
                            </div>                                         
                        </a>                                     
                    </div>                                 
                </div>                 
            </div>                         
            <a href="Browse-courses-single-page.html" class="uk-align-center uk-text-center uk-margin-large uk-h4 uk-link-heading"> Browse more Courses </a> 
        </div>                     
    </li>                 
    <li> 
        <!--  Software   -->                     
        <div class="uk-container"> 
            <div class="uk-clearfix boundary-align"> 
                <div class="uk-float-left section-heading none-border"> 
                    <h2>Browse Software courses</h2> 
                    <p>Adipisici elit, sed eiusmod tempor incidunt ut labore et</p> 
                </div>                             
                <div class="uk-float-right"> 
                    <a href="#" class="uk-link-reset uk-margin-small-right" uk-tooltip="title: list; pos: top-right"> <i class="fas fa-th-large"></i> </a> 
                    <a href="Course-list.html" class="uk-margin-small-right" uk-tooltip="title: list; pos: top-right"><i class="fas fa-th-list"></i> </a> 
                    <span class="uk-text-small"> Sort by :</span> 
                    <button class="uk-button uk-button-default uk-background-default uk-button-small" type="button" uk-tooltip="title: Sort; pos: top-right"> Newest  </button>                                 
                    <div uk-dropdown="pos: top-right ;mode : click" class="uk-dropdown  uk-dropdown-top-right" style="left: -141px; top: -267px;"> 
                        <ul class="uk-nav uk-dropdown-nav"> 
                            <li class="uk-active"> 
                                <a href="#">Best Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Newest Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Most Courses takes </a> 
                            </li>                                         
                            <li> 
                                <a href="#">Oldest Courses</a> 
                            </li>                                         
                            <li class="uk-nav-divider"></li>                                         
                            <li> 
                                <a href="#">trending Courses</a> 
                            </li>                                         
                        </ul>                                     
                    </div>                                 
                </div>                             
            </div>                         
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid> 
                <!-- Course  1  -->                             
                <div> 
                    <div class="uk-card-default uk-card-hover  uk-card-small Course-card uk-inline-clip">
                        <a href="Course-intro-one.html" class="uk-link-reset"> 
                            <img src="<?= BASEURL; ?>/images/courses/course-1.jpg" class="course-img"> 
                            <div class="uk-card-body"> 
                                <h4>Build from Scratch</h4> 
                                <p> Lorem ipsum dolor sit amet tempor consectetur adipiscing elit, sed do eiusmod tempor ... </p> 
                                <hr class="uk-margin-remove-top"> 
                                <a class="Course-tags uk-margin-small-right tags-active" href="Course-all-tags.html"> JavaScript </a> 
                                <a class="Course-tags" href="Course-all-tags.html"> Beginner </a> 
                            </div>                                         
                        </a>                                     
                    </div>                                 
                </div>                           
            </div>                         
            <a href="Browse-courses-single-page.html" class="uk-align-center uk-text-center uk-margin-large uk-h4 uk-link-heading"> Browse more Courses </a> 
        </div>                     
    </li>                 
    <li> 
        <!--  Development Tools -->                     
        <div class="uk-container"> 
            <div class="uk-clearfix boundary-align"> 
                <div class="uk-float-left section-heading none-border"> 
                    <h2>Browse Development Tools courses</h2> 
                    <p>Adipisici elit, sed eiusmod tempor incidunt ut labore et</p> 
                </div>                             
                <div class="uk-float-right"> 
                    <a href="#" class="uk-link-reset uk-margin-small-right" uk-tooltip="title: list; pos: top-right"> <i class="fas fa-th-large"></i> </a> 
                    <a href="Course-list.html" class="uk-margin-small-right" uk-tooltip="title: list; pos: top-right"><i class="fas fa-th-list"></i> </a> 
                    <span class="uk-text-small"> Sort by :</span> 
                    <button class="uk-button uk-button-default uk-background-default uk-button-small" type="button" uk-tooltip="title: Sort; pos: top-right"> Newest  </button>                                 
                    <div uk-dropdown="pos: top-right ;mode : click" class="uk-dropdown  uk-dropdown-top-right" style="left: -141px; top: -267px;"> 
                        <ul class="uk-nav uk-dropdown-nav"> 
                            <li class="uk-active"> 
                                <a href="#">Best Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Newest Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Most Courses takes </a> 
                            </li>                                         
                            <li> 
                                <a href="#">Oldest Courses</a> 
                            </li>                                         
                            <li class="uk-nav-divider"></li>                                         
                            <li> 
                                <a href="#">trending Courses</a> 
                            </li>                                         
                        </ul>                                     
                    </div>                                 
                </div>                             
            </div>                         
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid> 
                <!-- Course  1  -->                             
                <div> 
                    <div class="uk-card-default uk-card-hover  uk-card-small Course-card uk-inline-clip">
                        <a href="Course-intro-one.html" class="uk-link-reset"> 
                            <img src="<?= BASEURL; ?>/images/courses/course-1.jpg" class="course-img"> 
                            <div class="uk-card-body"> 
                                <h4>Build from Scratch</h4> 
                                <p> Lorem ipsum dolor sit amet tempor consectetur adipiscing elit, sed do eiusmod tempor ... </p> 
                                <hr class="uk-margin-remove-top"> 
                                <a class="Course-tags uk-margin-small-right tags-active" href="Course-all-tags.html"> JavaScript </a> 
                                <a class="Course-tags" href="Course-all-tags.html"> Beginner </a> 
                            </div>                                         
                        </a>                                     
                    </div>                                 
                </div>                           
            </div>                         
            <a href="Browse-courses-single-page.html" class="uk-align-center uk-text-center uk-margin-large uk-h4 uk-link-heading"> Browse more Courses </a> 
        </div>                     
    </li>                 
    <li> 
        <!--  Ecommerce  -->                     
        <div class="uk-container"> 
            <div class="uk-clearfix boundary-align"> 
                <div class="uk-float-left section-heading none-border"> 
                    <h2>Browse Ecommerce courses</h2> 
                    <p>Adipisici elit, sed eiusmod tempor incidunt ut labore et</p> 
                </div>                             
                <div class="uk-float-right"> 
                    <a href="#" class="uk-link-reset uk-margin-small-right" uk-tooltip="title: list; pos: top-right"> <i class="fas fa-th-large"></i> </a> 
                    <a href="Course-list.html" class="uk-margin-small-right" uk-tooltip="title: list; pos: top-right"><i class="fas fa-th-list"></i> </a> 
                    <span class="uk-text-small"> Sort by :</span> 
                    <button class="uk-button uk-button-default uk-background-default uk-button-small" type="button" uk-tooltip="title: Sort; pos: top-right"> Newest  </button>                                 
                    <div uk-dropdown="pos: top-right ;mode : click" class="uk-dropdown  uk-dropdown-top-right" style="left: -141px; top: -267px;"> 
                        <ul class="uk-nav uk-dropdown-nav"> 
                            <li class="uk-active"> 
                                <a href="#">Best Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Newest Courses</a> 
                            </li>                                         
                            <li> 
                                <a href="#">Most Courses takes </a> 
                            </li>                                         
                            <li> 
                                <a href="#">Oldest Courses</a> 
                            </li>                                         
                            <li class="uk-nav-divider"></li>                                         
                            <li> 
                                <a href="#">trending Courses</a> 
                            </li>                                         
                        </ul>                                     
                    </div>                                 
                </div>                             
            </div>                         
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid> 
                <!-- Course  1  -->                             
                <div> 
                    <div class="uk-card-default uk-card-hover  uk-card-small Course-card uk-inline-clip">
                        <a href="Course-intro-one.html" class="uk-link-reset"> 
                            <img src="<?= BASEURL; ?>/images/courses/course-1.jpg" class="course-img"> 
                            <div class="uk-card-body"> 
                                <h4>Build from Scratch</h4> 
                                <p> Lorem ipsum dolor sit amet tempor consectetur adipiscing elit, sed do eiusmod tempor ... </p> 
                                <hr class="uk-margin-remove-top"> 
                                <a class="Course-tags uk-margin-small-right tags-active" href="Course-all-tags.html"> JavaScript </a> 
                                <a class="Course-tags" href="Course-all-tags.html"> Beginner </a> 
                            </div>                                         
                        </a>                                     
                    </div>                                 
                </div>                       
            </div>                         
            <a href="Browse-courses-single-page.html" class="uk-align-center uk-text-center uk-margin-large uk-h4 uk-link-heading"> Browse more Courses </a> 
        </div>                     
    </li>                 
</ul>