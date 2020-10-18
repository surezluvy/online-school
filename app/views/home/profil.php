<!-- <pre><?php var_dump($data['profil']) ?></pre> -->
<div class="uk-container uk-margin-medium-top">
                <div uk-grid>
                    <div class="uk-width-1-4@m">
                        <div class="uk-card uk-card-default border-radius-6 uk-card uk-padding-small  uk-box-shadow-medium" uk-sticky="offset: 90; bottom: true; media: @m;">
                            <div class=" uk-width-1-3 uk-width-1-4@s uk-width-1-2@m  uk-margin-small-bottom  uk-margin-medium-top uk-margin-auto uk-visible-toggle uk-position-relative uk-border-circle uk-overflow-hidden uk-light">
                                <img class="uk-width-1-1" src="<?=  BASEURL ?>/images/avatures/avature-3.png">
                                <a class="uk-link-reset uk-overlay-primary uk-position-cover uk-hidden-hover" href="#">
                                    <div class="uk-position-center">
                                        <i class="fas fa-camera icon-large"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-h4 uk-margin-remove uk-text-center uk-margin-small-top"><?php echo $data['profil']['nama_lengkap'] ?></div>
                            <div class="uk-text-meta uk-text-center">Bergabung pada <?php echo $data['profil']['tanggal_daftar'] ?></div>
                            <div class="uk-margin-medium-bottom  uk-margin-top  uk-text-center">
                                <a class="Course-tags uk-margin-small-right border-radius-6 tags-active" href="#"><i class="fas fa-envelope"></i>  Send </a>
                                <a class="Course-tags uk-margin-small-right border-radius-6 tags-bg-danger" href="#"><i class="fas fa-sign-out-alt"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-3-4@m"> 
                        <h3 class="uk-heading-line uk-text-center"><span>Terdaftar Kursus </span></h3>
                        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-2 uk-grid-small" uk-grid>
                            <?php foreach ($data['profilBab'] as $profilBab): ?>
                            <div class="uk-first-column"> 
                                <a href="<?= BASEURL ?>/home/bab/<?= $profilBab['id_mapel'] ?>/<?= $profilBab['id_bab'] ?>">
                                    <div class="uk-card-default uk-padding-small border-radius-6 uk-inline-clip uk-transition-toggle" tabindex="0">
                                        <progress id="js-progressbar" class="uk-progress uk-margin-small-bottom" value="70" max="100" style="    height: 7px;"></progress>                                     
                                        <img src="<?=  BASEURL ?>/images/home/Thumbnail.jpeg" alt=""> 
                                        <p class="uk-margin-small-top uk-margin-remove-bottom uk-text-bold"> <?php echo $profilBab['nama_bab'] ?></p>
                                        <p class="uk-text-small uk-margin-remove">  <?php echo $profilBab['deskripsi_bab'] ?></p>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach ?>                         
                        </div>
                                              
                    </div>                     
                </div>
            </div>