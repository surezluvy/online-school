<div class="uk-container">
                <h1> Blogs </h1>  
                <div class="section-heading uk-position-relative none-border uk-clearfix"> 
                    <div class="uk-float-left"> 
                        <?php if ($data['byKelas'] > 0) {?>
                            <h2 class="uk-margin-remove-bottom">Cari berdasarkan tag <?= $data['tagByKelas'][0]['jenjang_kelas'] ?></h2>
                            <p>Tracks provide a roadmap through different languages and common development stacks</p>
                        <?php } else{ ?>
                            <h2 class="uk-margin-remove-bottom">Cari berdasarkan tag <?= $data['tagByMapel'][0]['nama_mapel'] ?></h2>
                            <p>Tracks provide a roadmap through different languages and common development stacks</p>
                        <?php } ?>
                    </div>                     
                    <div class="uk-float-right"> 
                        <a href="blog-video-one.html" class="uk-button uk-button-default">Lihat lebih</a>                         
                    </div>                     
                </div>          
                <div class="uk-margin uk-grid-match uk-child-width-1-3@m" uk-scrollspy="target: > div; cls:uk-animation-slide-bottom-small; delay: 200" uk-grid> 
                    <?php if ($data['byKelas'] > 0) {?>
             
                        <?php foreach ($data['tagByKelas'] as $tag): ?>
                        <div> 
                            <a href="Blog-post-single.html">
                                <div class="uk-card-default uk-card-hover uk-card-small uk-margin-medium-bottom uk-inline-clip border-radius-6"> 
                                    <img src="<?=  BASEURL ?>/images/home/Thumbnail.jpeg"> 
                                    <div class="uk-card-body"> 
                                        <h4 class="uk-margin uk-margin-remove-bottom"> <?php echo $tag['nama_bab'] ?>  </h4> 
                                        <p><span class="uk-label"><?php echo $tag['jenjang_kelas'] ?></span> <span class="uk-label uk-label-success"><?php echo $tag['nama_mapel'] ?></span>
                                        </p>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et  </p>
                                    </div>                                 
                                </div>
                            </a>                         
                        </div>    
                        <?php endforeach ?>

                    <?php } else {?>
                    
                        <?php foreach ($data['tagByMapel'] as $tag): ?>
                        <div> 
                            <a href="Blog-post-single.html">
                                <div class="uk-card-default uk-card-hover uk-card-small uk-margin-medium-bottom uk-inline-clip border-radius-6"> 
                                    <img src="<?=  BASEURL ?>/images/home/Thumbnail.jpeg"> 
                                    <div class="uk-card-body"> 
                                        <h4 class="uk-margin uk-margin-remove-bottom"> <?php echo $tag['nama_bab'] ?>  </h4> 
                                        <p><span class="uk-label"><?php echo $tag['jenjang_kelas'] ?></span> <span class="uk-label uk-label-success"><?php echo $tag['nama_mapel'] ?></span>
                                        </p>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et  </p>
                                    </div>                                 
                                </div>
                            </a>                         
                        </div>   
                        <?php endforeach ?>

                    <?php } ?>                      
                </div>                 
                <ul class="uk-pagination uk-flex-center uk-margin-medium">
                    <li class="uk-active">
                        <span>1</span>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-ellipsis-h uk-margin-small-top"></i></a>
                    </li>
                    <li>
                        <a href="#">12</a>
                    </li>
                </ul>
            </div>