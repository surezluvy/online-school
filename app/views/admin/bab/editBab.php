<div class="admin-content-inner"> 
    <?php Flasher::flash(); ?>
    <div class="uk-card-small uk-card-default"> 
        <div class="uk-card-header uk-text-bold">
            <i class="fas fa-user uk-margin-small-right"></i> Ubah data <?php echo $data['bab']['nama_bab'] ?>
        </div>                     
        <div class="uk-card-body "> 
            <div uk-grid>                           
                <div class="uk-width-1-1@m"> 
                    <form class="uk-grid-small" uk-grid method="post" action="<?php echo BASEURL ?>/admin/prosesEditBab/">
                        <input type="hidden" value="<?php echo $data['bab']['id_bab'] ?>" name="id_bab">
                        <div class="uk-width-1-2"> 
                            <label> Id Bab </label>                                                 
                            <input disabled="" value="<?php echo $data['bab']['id_bab'] ?>" name="id_bab" class="uk-input uk-form-width-large" placeholder="Id Bab" type="number"> 
                        </div>  
                        <div class="uk-width-1-2">
                            <label> Nama Mapel </label>   
                            <select required="" class="uk-select" name="nama_mapel">
                                <option value="<?php echo $data['bab']['nama_mapel'] ?>"><?php echo $data['bab']['nama_mapel'] ?></option>
                                <option value="Matematika">Matematika</option>
                                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            </select>
                        </div>       
                        <div class="uk-width-1-2">
                            <label> Kelas </label>   
                            <select required="" class="uk-select" name="jenjang_kelas">
                                <option value="<?php echo $data['bab']['jenjang_kelas'] ?>"><?php echo $data['bab']['jenjang_kelas'] ?></option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                            </select>
                        </div>          
                        <div class="uk-width-1-2"> 
                            <label> Nama Bab </label>                                                 
                            <input required="" value="<?php echo $data['bab']['nama_bab'] ?>" name="nama_bab" class="uk-input uk-form-width-large" placeholder="Nama Bab" type="text"> 
                        </div>                
                        <div class="uk-width-1-1"> 
                            <label> Deskripsi Bab </label>                                                 
                            <textarea class="uk-textarea" name="deskripsi_bab" required="" placeholder="Deskripsi bab"><?php echo $data['bab']['deskripsi_bab'] ?></textarea>
                        </div>                                 
                </div>                             
            </div>                         
        </div>                     
    </div><br>
    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" type="submit" name="simpan">Simpan</button>

    </form>                   
</div>