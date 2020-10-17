
<div class="course-intro uk-text-center topic4">
	<!-- <pre> <?php var_dump($data['pilihan']) ?></pre> -->
                <h2 class="uk-light uk-text-uppercase uk-text-bold uk-text-white uk-margin-top"> <?= $data['bab']['nama_bab'] ?>   </h2>
                <p class="uk-light uk-text-bold"><?= $data['bab']['deskripsi_bab'] ?></p>
                <p class="uk-light uk-text-bold uk-text-small"> <i class="fas fa-user icon-small uk-margin-small-right"></i> <?= $data['pilihan']['COUNT(*)'] ?> siswa terdaftar</p>
                <a class="uk-button uk-button-white" href="Course-dhashboard.html" uk-tooltip="title: Start this course now ; delay: 200 ; pos: top ;animation:	uk-animation-scale-up"> Mulai Belajar</a> 
            </div>
            <!-- navigation-->
            <ul class="uk-tab uk-flex-center  uk-margin-remove-top uk-background-default  uk-sticky" uk-sticky="animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up ; media: @s;" uk-tab>
                <li aria-expanded="true" class="uk-active">
                    <a href="#"> Pendahuluan kursus  </a>
                </li>                 
                <li>
                    <a href="#"> Guru pelajar </a>
                </li>       
                <li>
                    <a href="#"> Siswa terdaftar </a>
                </li>                 
            </ul>
            <ul class="uk-switcher uk-margin uk-padding-small uk-container-small uk-margin-auto  uk-margin-top"> 
                <!-- tab 1 About the course -->
                <li class="uk-active">
                    <h3> About this Course</h3>
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim   laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                    <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequa mod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    <p>Magna  consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore  aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat </p>
                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci </p>
                    <b> Interdum et malesuada fames ipsum </b>
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim   laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad n ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                    <h4> Elementum tellus id mauris faucibus</h4>
                    <ul class="uk-list uk-list-bullet">
                        <li>At vero eos et accusam et justo .</li>
                        <li>Consetetur sadipscing elitr, eirmod tempor invidunt .</li>
                        <li>Lorem ipsum dolor sit amet .</li>                         
                    </ul>
                    <h4>Uismod tincidunt ut laoreet dolore </h4>
                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim   laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
                </li>

                <!-- tab 2 About the instructor -->
                <li>
                    <h2 class="uk-heading-line uk-text-center"><span> Guru Pengajar  </span></h2>
                    <div class="uk-grid-small  uk-margin-medium-top uk-padding-small" uk-grid> 
                        <div class="uk-width-1-4@m uk-first-column"> 
                            <img alt="Image" class="uk-width-2-3 uk-margin-small-top uk-margin-small-bottom uk-border-circle uk-box-shadow-large  uk-animation-scale-up" src="<?= BASEURL ?>/images/avatures/instructor.jpg">
                            <div class="uk-text-small uk-margin-small-top">
                                <p> <i class="fas fa-star"></i> <?= $data['pilihan']['COUNT(*)'] ?> Total Point </p>
                                <p> <i class="fas fa-comment-dots"></i>  89,072 Reviews </p>
                                <p> <i class="fas fa-user"></i> <?= $data['pilihan']['COUNT(*)'] ?> Students </p>
                                <p> <i class="fas fa-play"></i> Mengajar mata pelajaran <?= $data['guru']['mengajar_mapel'] ?> </p>
                            </div>                             
                        </div>
                        <div class="uk-width-3-4@m uk-padding-remove-left"> 
                            <h4 class="uk-margin-remove"> <?= $data['guru']['nama_lengkap'] ?> </h4> 
                            <span class="uk-text-small">  <?= $data['guru']['mengajar_mapel'] ?> </span> 
                            <hr class="uk-margin-small">
                            <p class="uk-margin-remove-top uk-margin-small-bottom">
                            	<b>Alamat :</b><br>
                            	<?= $data['guru']['alamat'] ?>
                            </p> 
                            <b>Tentang: </b>
                            <p> <?= $data['guru']['tentang'] ?> </p>
                        </div>                         
                    </div>                   
                </li>
              
                <!-- tab 3 Students -->
                <li> 
                    <h3 class="uk-heading-line uk-margin-small-bottom"><span> Siswa yang telah terdaftar </span></h3> 
                    <p class="uk-margin-remove-top"> dibawah ini adalah daftar siswa yang telah terdaftar di kursus ini.</p>
                    <div class="uk-child-width-1-4@m uk-child-width-1-2" uk-scrollspy="target: > div; cls:uk-animation-scale-up; delay: 200" uk-grid>
                    	<?php foreach ($data['siswa'] as $siswa): ?>
                        <div>
                            <a href="Profile.html" class="uk-link-reset">
                                <div class="uk-padding-remove uk-card-hover uk-card-body uk-width-large border-radius-6 uk-text-center"> 
                                    <img alt="Image" class="uk-width-1-2 uk-margin-top uk-margin-small-bottom uk-border-circle uk-align-center uk-box-shadow-large" src="<?= BASEURL ?>/images/avatures/avature-3.png">
                                    <h4 class="uk-margin-remove-bottom uk-margin-remove-top ">
                                        <?php 
                                            $pisah = preg_split("/(,?\s+)|((?<=[a-z])(?=\d))|((?<=\d)(?=[a-z]))/i", $siswa['nama_lengkap']);
                        $nama_panggilan = $pisah[0];
                        echo $nama_panggilan;
                                         ?>
                                    </h4>
                                    <h6 class="uk-margin-small-bottom uk-margin-remove-top "> <?= $siswa['jenjang_kelas'] ?></h6> 
                                </div>                                 
                            </a>                             
                        </div>
                    	<?php endforeach ?>
                    </div>
                </li>
            </ul>