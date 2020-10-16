<ul class="uk-switcher switcher-container"> 
    <?php foreach ($data['mapel'] as $mapel) { ?>
    <li> 
        <div class="topic1 hero-bg"> 
            <div uk-grid> 
                <div class="uk-width-1-2@m"> 
<<<<<<< Updated upstream
                    <h1 class="uk-animation-fade"> <?= $mapel['nama_mapel'] ?> </h1> 
=======
                    <h1 class="uk-animation-fade"> <?= $mapel['nama_mapel']?> </h1> 
>>>>>>> Stashed changes
                    <p> <?= $mapel['deskripsi_mapel'] ?> </p> 
                    <div class="uk-visible@m uk-animation-slide-bottom-small" uk-grid> 
                        <div class="uk-width-1-3@m"> 
                            <img src="<?= BASEURL; ?>/images/icons/Video.png" class="img-small"> 
                            <span class="uk-text-middle uk-text-white"> <?= $data['jumlahGuru']['COUNT(*)'] ?> Guru </span> 
                        </div>                                     
                        <div class="uk-width-1-3@m"> 
                            <img src="<?= BASEURL; ?>/images/icons/students.png" class="img-small"> 
                            <span class="uk-text-middle uk-text-white"> <?= $data['jumlahSiswa']['COUNT(*)'] ?> Siswa </span> 
                        </div>                                     
                        <div class="uk-width-1-3@m"> 
                            <img src="<?= BASEURL; ?>/images/icons/Discussion.png" class="img-small"> 
                            <span class="uk-text-middle uk-text-white"> <?= $data['jumlahDiskusiMtk'] ?> Diskusi </span> 
                        </div>                                     
                    </div>                                 
                </div>                             
                <div class="uk-width-1-2@m uk-visible@m"> 
                    <img src="<?= BASEURL; ?>/images/courses/course-catagory-hero.jpg" alt="" class="uk-align-right img-xxlarge"> 
                </div>                             
            </div>                         
        </div>                     
<<<<<<< Updated upstream
    </li>       
=======
    </li>   
>>>>>>> Stashed changes
    <?php } ?>
</ul>             
<!-- mobile catagory button-->             
<button class="uk-button uk-hidden@m  mobile-catagory-button" type="button" uk-toggle="target: #tabs-moible; cls: tabs-moible"> Open subcatagory </button>             
<ul class="uk-subnav uk-subnav-pill tabs-moible-hidden" uk-switcher="connect: .switcher-container" id="tabs-moible"> 
    <?php foreach ($data['mapel'] as $mapel) { ?>
    <li class="uk-active"> 
        <a href="#"> <?= $mapel['nama_mapel'] ?> </a> 
    </li>                
    <?php } ?>         
</ul>