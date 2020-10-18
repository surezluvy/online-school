<div class="course-dhashboard topic2">
    <div uk-grid>
        <div class="uk-width-1-2@m uk-padding-remove-left uk-visible@m">
            <div class="course-video-demo uk-position-relative">
                <div class="video-responsive">
                    <iframe src="https://www.youtube.com/embed/nOCXXasdHGMezU" class="uk-padding-remove" uk-video="automute: true" frameborder="0" allowfullscreen uk-responsive></iframe>
                </div> 
                <!--  Local video
                <video loop muted playsinline controls uk-video="autoplay: inview"> 
                    <source src="videos/course-intro.mp4" type="video/mp4"> 
                </video> 
                -->
            </div>                         
        </div>                     
        <div class="uk-width-1-2@m uk-padding">
            <h2 class="uk-light uk-text-uppercase uk-text-bold uk-text-white"> <?php echo $data['bab']['nama_bab'] ?>   </h2>
            <p class="uk-light uk-text-bold"><span class="uk-label"><?php echo $data['bab']['jenjang_kelas'] ?></span> <span class="uk-label uk-label-success"><?php echo $data['bab']['nama_mapel'] ?></span></p>
            
            <!-- students images  -->                         
            <div class="avatar-group uk-margin" uk-scrollspy="target: > img; cls:uk-animation-slide-right; delay: 200">
                <img src="<?=  BASEURL ?>/images/avatures/avature-1.png" alt=""> 
                <img src="<?=  BASEURL ?>/images/avatures/avature.jpg" alt=""> 
                <img src="<?=  BASEURL ?>/images/avatures/avature-2.png" alt=""> 
                <span class="uk-text-bold uk-light">  <?php echo $data['pilihan']['COUNT(*)'] ?> + siswa terdaftar </span>  
            </div>                         
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-auto">
                    <a class="uk-button uk-button-white uk-float-left" href="Course-lesson.html" uk-tooltip="title: Star This course now  ; delay: 300 ; pos: top ;animation:   uk-animation-slide-bottom-small"> Lanjutkan belajar</a>
                </div>
                <div class="uk-width-expand"> 
                    <span class="uk-light uk-text-small uk-text-bold"> Progres ku </span>
                    <progress id="js-progressbar" class="uk-progress progress-green uk-margin-small-bottom uk-margin-small-top" value="50" max="100" style="height: 8px;"></progress>
                </div>
            </div>                         
        </div>                     
    </div>                 
</div>             
<ul class="uk-child-width-expand course-dhashboard-subnav" uk-tab>
    <li class="uk-active">
        <a href="#" class="tablinks" onclick="openTabs(event, 'Discription')"> Deskripsi  </a>
    </li>
    <li>
        <a href="#" class="tablinks" onclick="openTabs(event, 'Course-Videos')"> <span class="uk-visible@m"> Daftar </span>  Sub bab </a>
    </li>
    <li>
        <a href="#" class="tablinks" onclick="openTabs(event, 'Discussions')"> Discussions </a>
    </li>
    <li>
        <a href="#" class="tablinks" onclick="openTabs(event, 'Exercise-Files')"><span class="uk-visible@m"> Daftar </span>  File </a>
    </li>                 
</ul>
<div class="uk-container tm-hero">
    <div uk-grid>
        <!-- page contant -->
        <div class="uk-width-2-3@m uk-first-column">
            <!-- Discription tab  -->                         
            <div id="Discription" class="tabcontent tab-default-open animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                <h3> Tentang kursus ini</h3>
                <p><?php echo $data['bab']['deskripsi_bab'] ?></p>
                
            </div>
            <!-- Course-Videos tab  -->
            <div id="Course-Videos" class="tabcontent  animation: uk-animation-slide-right-medium">
                <ul class="uk-accordion"> 
                    <li class="uk-open tm-course-lesson-section uk-background-default"> 
                        <a class="uk-accordion-title uk-padding-small" href="#"><h6> Daftar sub bab</h6> <h4 class="uk-margin-remove"> Selesaikan sub bab yang terbuka dahulu untuk membuka sub bab selanjutnya.</h4> </a> 
                        <div class="uk-accordion-content uk-margin-remove-top"> 
                            <div class="tm-course-section-list">
                                <ul> 
                                    <?php foreach ($data['sub'] as $sub): ?>
                                    <li>
                                        <a href="<?php echo BASEURL ?>/home/mulaiSub/<?php echo $sub['id_sub'] ?>" class="uk-link-reset"> 

                                            <span class="uk-icon-button icon-play"> <i class="fas fa-play icon-small"></i> </span>
                                                                           
                                            <div class="uk-panel uk-panel-box uk-text-truncate uk-margin-medium-right"><?php echo $sub['judul_sub'] ?>  </div>
                                            <!-- preview link -->
                                        </a>
                                        <a class="uk-link-reset uk-position-right uk-padding-small uk-text-small uk-visible@s" href="<?php echo BASEURL ?>/home/mulaiSub/<?php echo $sub['id_sub'] ?>" uk-toggle> <i class="fas fa-play icon-small uk-text-grey"></i> Mulai  </a>
                                    </li>       
                                    <?php endforeach ?>                                               
                                </ul>
                            </div>                                         
                        </div>                                     
                    </li>                                 
                                                    
                </ul>
                
                
            </div>
            <!-- Discussions tab  -->
            <div id="Discussions" class="tabcontent animation:uk-animation-fade">
                <h3>Discussions</h3>                            
                <div class="uk-padding-small uk-background-light uk-position-relative">
                    <div class="uk-flex-middle uk-grid-small uk-grid-stack" uk-grid> 
                        <div class="uk-width-1-6 uk-flex-first uk-first-column">
                            <img src="<?=  BASEURL ?>/images/avatures/avature-3.png" alt="Image" class="uk-width-1-2 uk-border-circle">
                        </div>
                        <div class="uk-width-5-6"> 
                            <p class="uk-margin-remove-bottom uk-text-bold uk-text-small">John keniss  </p> 
                            <p class="uk-margin-remove">Etiam sit amet augue non velit aliquet consectetur. Proin gravida, odio in facilisis pharetra, neque enim aliquam eros,.</p> 
                        </div>                                     
                    </div>                                 
                </div>                             
                <div class="uk-padding-small uk-background-light uk-position-relative">
                    <div class="uk-flex-middle uk-grid-small uk-grid-stack" uk-grid> 
                        <div class="uk-width-1-6 uk-flex-first uk-first-column">
                            <img src="<?=  BASEURL ?>/images/avatures/avature-5.png" alt="Image" class="uk-width-1-2 uk-border-circle">
                        </div>
                        <div class="uk-width-5-6"> 
                            <p class="uk-margin-remove-bottom uk-text-bold uk-text-small">John keniss  </p> 
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                        </div>                                     
                    </div>                                 
                </div>                             
                <div class="uk-padding-small uk-background-light uk-position-relative">
                    <div class="uk-flex-middle uk-grid-small uk-grid-stack" uk-grid> 
                        <div class="uk-width-1-6 uk-flex-first uk-first-column">
                            <img alt="Image" src="<?=  BASEURL ?>/images/avatures/avature.jpg" class="uk-width-1-2 uk-border-circle">
                        </div>
                        <div class="uk-width-5-6"> 
                            <p class="uk-margin-remove-bottom uk-text-bold uk-text-small">John keniss  </p> 
                            <p class="uk-margin-remove">Maecenas vel dolor sit amet ligula interdum tempor id eu ipsum. Suspendisse pharetra risus ut metus elementum pulvinar. Mauris eget varius tellus. Cras et lorem vel nunc gravida porttitor.</p> 
                        </div>                                     
                    </div>                                 
                </div>                             
                <div class="uk-padding-small uk-background-light uk-position-relative">
                    <div class="uk-flex-middle uk-grid-small uk-grid-stack" uk-grid> 
                        <div class="uk-width-1-6 uk-flex-first uk-first-column">
                            <img src="<?=  BASEURL ?>/images/avatures/avature-1.png" alt="Image" class="uk-width-1-2 uk-border-circle">
                        </div>
                        <div class="uk-width-5-6"> 
                            <p class="uk-margin-remove-bottom uk-text-bold uk-text-small">John keniss  </p> 
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                        </div>                                     
                    </div>                                 
                </div>                             
                <div class="uk-padding-small uk-background-light uk-position-relative">
                    <div class="uk-flex-middle uk-grid-small uk-grid-stack" uk-grid> 
                        <div class="uk-width-1-6 uk-flex-first uk-first-column">
                            <img src="<?=  BASEURL ?>/images/avatures/avature-2.png" alt="Image" class="uk-width-1-2 uk-border-circle">
                        </div>
                        <div class="uk-width-5-6"> 
                            <p class="uk-margin-remove-bottom uk-text-bold uk-text-small">John keniss  </p> 
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                        </div>                                     
                    </div>                                 
                </div>
                <div class="uk-padding-small uk-background-light uk-position-relative">
                    <div class="uk-flex-middle uk-grid-small uk-grid-stack" uk-grid> 
                        <div class="uk-width-1-6 uk-flex-first uk-first-column">
                            <img src="<?=  BASEURL ?>/images/avatures/avature-4.png" alt="Image" class="uk-width-1-2 uk-border-circle">
                        </div>
                        <div class="uk-width-5-6"> 
                            <p class="uk-margin-remove-bottom uk-text-bold uk-text-small">John keniss  </p> 
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                        </div>                                     
                    </div>                                 
                </div>
                <div class="uk-padding-small uk-background-light uk-position-relative">
                    <div class="uk-flex-middle uk-grid-small uk-grid-stack" uk-grid> 
                        <div class="uk-width-1-6 uk-flex-first uk-first-column">
                            <img src="<?=  BASEURL ?>/images/avatures/avature-3.png" alt="Image" class="uk-width-1-2 uk-border-circle">
                        </div>
                        <div class="uk-width-5-6"> 
                            <p class="uk-margin-remove-bottom uk-text-bold uk-text-small">John keniss  </p> 
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                        </div>                                     
                    </div>                                 
                </div>
                <div class="uk-padding-small uk-background-light uk-position-relative">
                    <div class="uk-flex-middle uk-grid-small uk-grid-stack" uk-grid> 
                        <div class="uk-width-1-6 uk-flex-first uk-first-column">
                            <img src="<?=  BASEURL ?>/images/avatures/avature-4.png" alt="Image" class="uk-width-1-2 uk-border-circle">
                        </div>
                        <div class="uk-width-5-6"> 
                            <p class="uk-margin-remove-bottom uk-text-bold uk-text-small">John keniss  </p> 
                            <p class="uk-margin-remove">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                        </div>                                     
                    </div>                                 
                </div>                             
            </div>
            <!-- Exercise-Files  -->
            <div id="Exercise-Files" class="tabcontent animation: uk-animation-slide-right-medium">
                <div uk-grid class="uk-grid-stack">
                    <div class="uk-width-1-1@m uk-margin-bottom">
                        <ul uk-accordion="" class="uk-accordion"> 
                            <li class="tm-course-lesson-section uk-background-default uk-open"> 
                                <a class="uk-accordion-title uk-padding-small" href="#"> <h6> Daftar file</h6> <h4 class="uk-margin-remove">  Kalian bisa download file yang di lampurkan guru disini</h4></a> 
                                <div class="uk-accordion-content uk-margin-remove-top" aria-hidden="false"> 
                                    <!-- Exerice files-->                                                 
                                    <ul class="uk-active uk-background-default uk-accordion" uk-accordion=""> 
                                        <?php foreach ($data['sub'] as $sub): ?>
                                        <li class="uk-open tm-course-lesson-section"> 
                                            <a class="uk-accordion-title uk-padding-small uk-background-muted uk-padding-remove-bottom" href="#"> <h6> <i class="fas fa-folder"></i>   <?php echo $sub['judul_sub'] ?> </h6> </a> 
                                            <div class="uk-accordion-content uk-margin-remove-top" aria-hidden="false"> 
                                                <div class="tm-course-section-list">
                                                    <ul> 
                                                        <li> 
                                                            <i class="fas fa-file-alt uk-margin-small-right icon-medium"></i>
                                                            File satu
                                                            <a class="uk-icon-button uk-margin-small-right uk-button-success uk-position-center-right" href="#"> <i class="fas fa-download icon-small"></i> </a>
                                                        </li>                                                                     
                                                        <li> 
                                                            <i class="fas fa-file-alt uk-margin-small-right icon-medium"></i>
                                                            File dua
                                                            <a class="uk-icon-button uk-margin-small-right uk-button-success uk-position-center-right" href="#"> <i class="fas fa-download icon-small"></i> </a>
                                                        </li>                                                                     
                                                    </ul>
                                                </div>                                                             
                                            </div>                                                         
                                        </li>   
                                            
                                        <?php endforeach ?>                                                 
                                    </ul>                                                 
                                </div>                                             
                            </li>
                        </ul>
                    </div>
                </div>
            </div>                         
        </div>
        <!-- side contant -->
        <div class="uk-width-1-3@m uk-visible@m"> 
            <h3 class="uk-text-bold"> Kursus Serupa </h3>
            <?php foreach ($data['related'] as $related): ?>
                
            <div class="uk-card-default uk-card-hover uk-card-small Course-card uk-inline-clip uk-margin-medium-bottom">
                <a href="Course-intro-one.html" class="uk-link-reset"> 
                    <img src="<?=  BASEURL ?>/images/home/Thumbnail.jpeg" class="course-img"> 
                    <div class="uk-card-body"> 
                        <h4><?php echo $related['nama_bab'] ?></h4> 
                        <p> <?php echo $related['deskripsi_bab'] ?> </p> 
                        <hr class="uk-margin-remove-top"> 
                        <a class="Course-tags uk-margin-small-right tags-active" href="Course-all-tags.html"> <?php echo $related['jenjang_kelas'] ?> </a> 
                        <a class="Course-tags" href="Course-all-tags.html"> <?php echo $related['nama_mapel'] ?> </a> 
                    </div>                                 
                </a>                             
            </div> 
            <?php endforeach ?>
        </div>
    </div>
</div>