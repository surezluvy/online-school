<div class="admin-content-inner"> 
    <?php Flasher::flash(); ?>
    <div class="uk-card-small uk-card-default"> 
        <div class="uk-card-header uk-text-bold">
            <i class="fas fa-user uk-margin-small-right"></i> Ubah data <?php echo $data['mapel']['nama_mapel'] ?>
        </div>                     
        <div class="uk-card-body "> 
            <div uk-grid>                           
                <div class="uk-width-1-1@m"> 
                    <form class="uk-grid-small" uk-grid method="post" action="<?php echo BASEURL ?>/admin/prosesEditMapel/">
                        <input type="hidden" value="<?php echo $data['mapel']['id_mapel'] ?>" name="id_mapel">
                        <div class="uk-width-1-2"> 
                            <label> Nama Mapel </label>                                                 
                            <input class="uk-input" name="nama_mapel" required="" placeholder="nama mapel" value="<?php echo $data['mapel']['nama_mapel'] ?>">
                        </div>       
                        <div class="uk-width-1-2">
                            <label> Kelas </label>   
                            <select required="" class="uk-select" name="jenjang_kelas">
                                <option value="<?php echo $data['mapel']['jenjang_kelas'] ?>"><?php echo $data['mapel']['jenjang_kelas'] ?></option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                            </select>
                        </div>                  
                        <div class="uk-width-1-1"> 
                            <label> Deskripsi Mapel </label>                                                 
                            <textarea class="uk-textarea" name="deskripsi_mapel" required="" placeholder="Deskripsi mapel"><?php echo $data['mapel']['deskripsi_mapel'] ?></textarea>
                        </div>                                 
                </div>                             
            </div>                         
        </div>                     
    </div><br>
    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" type="submit" name="simpan">Simpan</button>

    </form>                   
</div>