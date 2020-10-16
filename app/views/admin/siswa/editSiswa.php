<div class="admin-content-inner"> 
    <?php Flasher::flash(); ?>
    <div class="uk-card-small uk-card-default"> 
        <div class="uk-card-header uk-text-bold">
            <i class="fas fa-user uk-margin-small-right"></i> Ubah data <?php echo $data['siswa']['nama_lengkap'] ?>
        </div>                     
        <div class="uk-card-body "> 
            <div uk-grid>                           
                <div class="uk-width-1-1@m"> 
                    <form class="uk-grid-small" uk-grid method="post" action="<?php echo BASEURL ?>/admin/prosesEditSiswa/"> 
                        <input type="hidden" name="id_siswa" value="<?php echo $data['siswa']['id_siswa'] ?>">
                        <div class="uk-width-1-2"> 
                            <div class="uk-form-label"> Nama Lengkap  </div>                                         
                            <input name="nama_lengkap" class="uk-input" type="text" value="<?php echo $data['siswa']['nama_lengkap'] ?>"> 
                        </div>                                     
                        <div class="uk-width-1-2"> 
                            <div class="uk-form-label"> Username   </div>                                         
                            <input name="username" class="uk-input" type="text" value="<?php echo $data['siswa']['username'] ?>"> 
                        </div>                                     
                        <div class="uk-width-1-2"> 
                            <div class="uk-form-label"> Email  </div>                                         
                            <input name="email" class="uk-input" type="email" value="<?php echo $data['siswa']['email'] ?>"> 
                        </div>                                     
                        <div class="uk-width-1-2"> 
                            <div class="uk-form-label"> Password  </div>                                         
                            <input name="password" class="uk-input" type="text" value="<?php echo $data['siswa']['password'] ?>"> 
                        </div>                                     
                        <div class="uk-width-1-1"> 
                            <div class="uk-form-label"> Kelas  </div>    
                            <select class="uk-select" name="jenjang_kelas">
                                <option value="<?php echo $data['siswa']['jenjang_kelas'] ?>" selected><?php echo $data['siswa']['jenjang_kelas'] ?></option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                            </select>
                        </div>                                
                </div>                             
            </div>                         
        </div>                     
    </div><br>
    <button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom" type="submit" name="simpan">Simpan</button>

    </form>                   
</div>