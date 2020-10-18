<div data-src="<?=  BASEURL ?>/images/home/Thumbnail.jpg" style="margin-top: -65px;" uk-img="" class="uk-height-large uk-background-norepeat  uk-background-center-center    uk-section uk-section-large uk-padding-remove-top uk-flex uk-flex-middle uk-background-cover">
    <div class="uk-width-1-1 uk-container uk-margin-large-top uk-padding-remove-bottom">
        <h1 class=" uk-text-bold uk-text-white uk-margin-large-left uk-margin-large-top"> <?php echo $data['sub']['judul_sub'] ?></h1>
        <p class="  uk-margin-large-left  uk-text-white">
                        Untuk kelas : <?php echo $data['sub']['jenjang_kelas'] ?> / <?php echo $data['sub']['nama_mapel'] ?> </p>
    </div>                 
</div>
<div class="uk-container-small uk-margin-auto uk-margin-medium-top">
    <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.</p>
    <p><?php echo $data['sub']['isi_sub'] ?></p>
    <a href="<?php echo BASEURL ?>/home/mulaiBab/<?php echo $data['sub']['id_bab'] ?>"><button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Lanjut ke materi selanjutnya</button></a>
</div>
