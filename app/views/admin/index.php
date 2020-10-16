<div class="admin-content-inner"> 
    <div class="uk-child-width-1-3@m uk-child-width-1-2 uk-grid-match " uk-grid> 
        <div> 
            <div class="uk-background-cover uk-light dashboard-card" data-src="<?= BASEURL; ?>/images/admin/cards-bg.jpg" uk-img> 
                <i class="fas fa-play icon-xxlarge uk-visible@m"></i> 
                <h3> <?php echo $data['jumlahGuru']['COUNT(*)'] ?> Guru </h3> 
                <p> Total <?php echo $data['jumlahGuru']['COUNT(*)'] ?> guru terdaftar pada website ini. </p> 
                <a href="#"> View All </a>
            </div>                         
        </div>                     
        <div> 
            <div class="uk-background-cover uk-light dashboard-card" data-src="<?= BASEURL; ?>/images/admin/cards-bg.jpg" uk-img> 
                <i class="far fa-user icon-xxlarge uk-visible@m"></i> 
                <h3> <?php echo $data['jumlahBab']['COUNT(*)'] ?> Bab </h3> 
                <p> Total <?php echo $data['jumlahBab']['COUNT(*)'] ?> bab terdaftar pada website ini. </p> 
                <a href="#"> View All </a>
            </div>                         
        </div>                     
        <div> 
            <div class="uk-background-cover uk-light dashboard-card" data-src="<?= BASEURL; ?>/images/admin/cards-bg.jpg" uk-img> 
                <i class="fas fa-code icon-xxlarge uk-visible@m"></i> 
                <h3> <?php echo $data['jumlahSiswa']['COUNT(*)'] ?> Siswa </h3> 
                <p> Total <?php echo $data['jumlahSiswa']['COUNT(*)'] ?> siswa terdaftar pada website ini. </p> 
                <a href="#"> View All </a>
            </div>                         
        </div>                     
    </div>
    
    <div uk-grid>
        <div class="uk-width-1-2@m"> 
            <div class="uk-card-small uk-card-default"> 
                <div class="uk-card-header uk-text-bold">
                    <i class="fas fa-users uk-margin-small-right"></i> Siswa terakhir mendaftar
                </div>                                 
                <div class="uk-card-body uk-padding-remove-top"> 
                    <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid-collapse uk-flex-center"  uk-scrollspy="target: > div; cls:uk-animation-scale-up; delay: 100" uk-grid>
                        <?php foreach ($data['siswaTerbaru'] as $siswa): ?>
                        <div>
                            <a href="Profile.html" class="uk-link-reset">
                                <div class="uk-padding-remove   uk-text-center"> 
                                    <img alt="Image" class="uk-width-2-3 uk-margin-top uk-margin-small-bottom uk-border-circle uk-align-center uk-box-shadow-large" src="<?= BASEURL; ?>/images/avatures/avature-1.png">
                                        <h5 class="uk-margin-remove-bottom uk-margin-remove-top "><?php echo $siswa['nama_panggilan'] ?></h5>  
                                </div> 
                            </a>                          
                        </div> 
                        <?php endforeach ?>
                    </div>
                </div>                                 
            </div>                             
        </div> 
        <div class="uk-width-1-2@m">
            <div class="uk-card-small uk-card-default"> 
                <div class="uk-card-header uk-text-bold">
                    <i class="fas fa-comment uk-margin-small-right"></i> Latest  Comments   
                </div>                                 
                <div class="uk-card-body">
                    <img class="user-profile-medium uk-align-left uk-margin-small-right uk-margin-small-bottom" src="<?= BASEURL; ?>/images/avatures/avature-1.png" width="60"  alt="Example image"> 
                    <p class="uk-margin-remove-top">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>  
                    <hr>
                    <img class="user-profile-medium uk-align-left uk-margin-small-right uk-margin-small-bottom" src="<?= BASEURL; ?>/images/avatures/avature-1.png" width="60" alt="Example image"> 
                    <p class="uk-margin-remove-top">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p> 
                    <hr>
                    <img class="user-profile-medium uk-align-left uk-margin-small-right uk-margin-small-bottom" src="<?= BASEURL; ?>/images/avatures/avature-1.png" width="60"  alt="Example image"> 
                    <p class="uk-margin-remove-top">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>  
                                           
                </div>
            </div>
        </div>
    </div>
    

</div>