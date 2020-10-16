
<div class="uk-container">
    <div class="section-heading none-border">
        <?php if ($data['byKelas'] > 0) {?>
            <h2>Cari berdasarkan tag <?= $data['tagByKelas'][0]['jenjang_kelas'] ?></h2>
            <p>Tracks provide a roadmap through different languages and common development stacks</p>
        <?php } else{ ?>
            <h2>Cari berdasarkan tag <?= $data['tagByMapel'][0]['nama_mapel'] ?></h2>
            <p>Tracks provide a roadmap through different languages and common development stacks</p>
        <?php } ?>
    </div>
    <div class="uk-margin uk-grid-macth" uk-grid>
        <?php if ($data['byKelas'] > 0) {?>
             
        <?php foreach ($data['tagByKelas'] as $tag): ?>
            
        <div class="uk-width-1-2@s uk-width-1-3@m">
            <div class="uk-card-default uk-card-hover card-tags uk-card-small">
                <div class="uk-padding-small card-tags-header" style="background:#313131">
                    <div uk-grid>
                        <div class="uk-width-3-5"> 
                            <h3 class="uk-light uk-margin-small-top" style="text-transform: capitalize;"> <?php echo $tag['nama_bab'] ?></h3>
                            <p><span class="uk-label"><?php echo $tag['jenjang_kelas'] ?></span> <span class="uk-label uk-label-success"><?php echo $tag['nama_mapel'] ?></span>
                                    </p>
                        </div>
                        <div class="uk-width-2-5 uk-padding-remove uk-flex uk-flex-middle"> 
                            <img alt="" class="uk-align-right" src="<?= BASEURL ?>/images/courses/tags/course-tags.jpg"> 
                        </div>
                    </div>                                 
                </div>
                <div class="uk-card-body"> 
                    <p><?php echo $tag['deskripsi_bab'] ?></p> 
                    <div class="uk-clearfix">
                        <div class="uk-float-left"> 
                            <a class="card-span-ex" href="#"> Lihat bab ini </a>
                        </div>
                        <div class="uk-float-right"> 
                            <a class="Course-tags Course-tags-more" href="Browse_all_webdevelopment.html"> </a> 
                        </div>
                    </div>
                </div>                             
            </div>
            <div class="buttom-shadow1"></div>
            <div class="buttom-shadow2"></div>                         
        </div>       

        <?php endforeach ?>

         <?php } else {?>
            <?php foreach ($data['tagByMapel'] as $tag): ?>
            
                <div class="uk-width-1-2@s uk-width-1-3@m">
                    <div class="uk-card-default uk-card-hover card-tags uk-card-small">
                        <div class="uk-padding-small card-tags-header" style="background:#313131">
                            <div uk-grid>
                                <div class="uk-width-3-5"> 
                                    <h3 class="uk-light uk-margin-small-top" style="text-transform: capitalize;"> <?php echo $tag['nama_bab'] ?></h3>
                                    <p><span class="uk-label"><?php echo $tag['jenjang_kelas'] ?></span> <span class="uk-label uk-label-success"><?php echo $tag['nama_mapel'] ?></span>
                                    </p>
                                </div>
                                <div class="uk-width-2-5 uk-padding-remove uk-flex uk-flex-middle"> 
                                    <img alt="" class="uk-align-right" src="<?= BASEURL ?>/images/courses/tags/course-tags.jpg"> 
                                </div>
                            </div>                                 
                        </div>
                        <div class="uk-card-body"> 
                            <p><?php echo $tag['deskripsi_bab'] ?></p> 
                            <div class="uk-clearfix">
                                <div class="uk-float-left"> 
                                    <a class="card-span-ex" href="#"> Lihat bab ini </a>
                                </div>
                                <div class="uk-float-right"> 
                                    <a class="Course-tags Course-tags-more" href="Browse_all_webdevelopment.html"> </a> 
                                </div>
                            </div>
                        </div>                             
                    </div>
                    <div class="buttom-shadow1"></div>
                    <div class="buttom-shadow2"></div>                         
                </div>       

                <?php endforeach ?>
         <?php } ?> 
    </div>                 
</div>