
<ul class="uk-switcher switcher-container"> 
    <li> 
        <!--  Matematika -->                     
        <div class="uk-container"> 
            <div class="uk-clearfix boundary-align"> 
                <div class="uk-float-left section-heading none-border">
                    <h2>Cari semua kursus <?= $data['mapel'][0]['nama_mapel'] ?> yang ada!</h2> 
                    <p>Kami menyediakan kursus yang mantap.</p>
                </div>                      
            </div>
            
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid> 
                <!-- Course 1 -->
                <?php foreach ($data['babMtk'] as $bab) { ?>
                <div> 
                    <div class="uk-card-default uk-card-hover uk-card-small Course-card uk-inline-clip uk-transition-toggle" tabindex="0">                                
                        <a href="<?= BASEURL ?>/home/bab/<?= $bab['id_mapel'] ?>/<?= $bab['id_bab'] ?>" class="uk-link-reset"> 
                            <img src="<?= BASEURL; ?>/images/home/Matematika.png" class="course-img"> 
                            <div class="uk-card-body"> 
                                <h4><?= $bab['nama_bab'] ?></h4> 
                                <p> <?= $bab['deskripsi_bab'] ?> </p> 
                                <hr class="uk-margin-remove-top"> 
                                <div class="uk-clearfix"> 
                                    <div class="uk-float-left"> 
                                        <a class="Course-tags uk-margin-small-right" href="<?= BASEURL ?>/home/tag/<?= $bab['id_kelas'] ?>/0/"> <?= $bab['jenjang_kelas'] ?> </a>                           
                                        <a class="Course-tags" href="<?= BASEURL ?>/home/tag/0/<?= $bab['id_mapel'] ?>/"> <?= $bab['nama_mapel'] ?> </a>
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
        <!--  Bahasa Indonesia -->                     
        <div class="uk-container"> 
            <div class="uk-clearfix boundary-align"> 
                <div class="uk-float-left section-heading none-border">
                    <h2>Cari semua kursus <?= $data['mapel'][1]['nama_mapel'] ?> yang ada!</h2> 
                    <p>Kami menyediakan kursus yang mantap.</p>
                </div>                            
            </div>
            
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid> 
                <?php foreach ($data['babBi'] as $bab) { ?>
                <div> 
                    <div class="uk-card-default uk-card-hover uk-card-small Course-card uk-inline-clip uk-transition-toggle" tabindex="0">                                 
                        <a href="<?= BASEURL ?>/home/bab/<?= $bab['id_mapel'] ?>/<?= $bab['id_bab'] ?>" class="uk-link-reset"> 
                            <img src="<?= BASEURL; ?>/images/home/Indonesia.jpg" class="course-img"> 
                            <div class="uk-card-body"> 
                                <h4><?= $bab['nama_bab'] ?></h4> 
                                <p> <?= $bab['deskripsi_bab'] ?> </p> 
                                <hr class="uk-margin-remove-top"> 
                                <div class="uk-clearfix"> 
                                    <div class="uk-float-left"> 
                                        <a class="Course-tags uk-margin-small-right" href="<?= BASEURL ?>/home/tag/<?= $bab['id_kelas'] ?>/0/"> <?= $bab['jenjang_kelas'] ?> </a>                           
                                        <a class="Course-tags" href="<?= BASEURL ?>/home/tag/0/<?= $bab['id_mapel'] ?>/"> <?= $bab['nama_mapel'] ?> </a>
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
</ul>