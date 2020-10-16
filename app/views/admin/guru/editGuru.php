<div class="admin-content-inner"> 
    <?php Flasher::flash(); ?>
    <div class="uk-card-small uk-card-default"> 
        <div class="uk-card-header uk-text-bold">
            <i class="fas fa-user uk-margin-small-right"></i> Ubah data <?php echo $data['guru']['nama_lengkap'] ?>
        </div>                     
        <div class="uk-card-body "> 
            <div uk-grid>                           
                <div class="uk-width-1-1@m"> 
                    <form class="uk-grid-small" uk-grid method="post" action="<?php echo BASEURL ?>/admin/prosesEditGuru/"> 
                        <input type="hidden" name="id_guru" value="<?php echo $data['guru']['id_guru'] ?>">
                        <div class="uk-width-1-2"> 
                            <div class="uk-form-label"> Nama Lengkap  </div>                                         
                            <input name="nama_lengkap" class="uk-input" type="text" value="<?php echo $data['guru']['nama_lengkap'] ?>"> 
                        </div>                                     
                        <div class="uk-width-1-2"> 
                            <div class="uk-form-label"> Username   </div>                                         
                            <input name="username" class="uk-input" type="text" value="<?php echo $data['guru']['username'] ?>"> 
                        </div>                                     
                        <div class="uk-width-1-2"> 
                            <div class="uk-form-label"> Email  </div>                                         
                            <input name="email" class="uk-input" type="email" value="<?php echo $data['guru']['email'] ?>"> 
                        </div>                                     
                        <div class="uk-width-1-2"> 
                            <div class="uk-form-label"> Password  </div>                                         
                            <input name="password" class="uk-input" type="text" value="<?php echo $data['guru']['password'] ?>"> 
                        </div>                                     
                        <div class="uk-width-1-1"> 
                            <div class="uk-form-label"> Mengajar Kelas  </div>    
                            <select class="uk-select" name="mengajar_kelas">
                                <option value="<?php echo $data['guru']['mengajar_kelas'] ?>" selected><?php echo $data['guru']['mengajar_kelas'] ?></option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                            </select>
                        </div>                                
                        <div class="uk-width-1-1"> 
                            <div class="uk-form-label"> Mengajar Mapel  </div>    
                            <select class="uk-select" name="mengajar_mapel">
                                <option value="<?php echo $data['guru']['mengajar_mapel'] ?>" selected><?php echo $data['guru']['mengajar_mapel'] ?></option>
                                <option value="Matematika">Matematika</option>
                                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            </select>
                        </div>                                
                </div>                             
            </div>                         
        </div>                     
    </div><br>
    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" type="submit" name="simpan">Simpan</button>

    </form>                   
</div>