
<div class="admin-content-inner"> 
    <?php Flasher::flash(); ?>
    <div class="uk-flex-inline uk-flex-middle"> 
        <i class="fas fa-user icon-large uk-margin-right"></i> 
        <h4 class="uk-margin-remove"> Siswa </h4> 
        <button class="uk-button uk-button-success uk-margin-medium-left admin-btn" href="#create-model" uk-tooltip="title: Create New User ; delay: 500 ; pos: top ;animation: uk-animation-scale-up" uk-toggle> 
            <i class="fas fa-user-plus"></i> tambah baru 
        </button>                     
        <!-- model -->                     
        <div id="create-model" uk-modal> 
            <div class="uk-modal-dialog"> 
                <button class="uk-modal-close-default uk-padding-small" type="button" uk-close></button>                             
                <div class="uk-modal-header"> 
                    <h4> Tambah siswa baru   </h4> 
                </div>                             
                <div class="uk-modal-body"> 
                    <div uk-grid>                                    
                        <div class="uk-width-2-1@m"> 
                            <form method="POST" action="<?php echo BASEURL ?>/admin/tambahSiswa"> 
                                <input readonly="" type="hidden" name="poin" value="0">
                                <input readonly="" type="hidden" name="tanggal_daftar" value="<?php echo date("Y-m-d") ?>">
                                <div class="uk-margin"> 
                                    <label> Nama Lengkap </label>                                                 
                                    <input required="" name="nama_lengkap" class="uk-input uk-form-width-large" placeholder="Nama Lengkap" type="text"> 
                                </div>  
                                <div class="uk-margin"> 
                                    <label> Username </label>                                                 
                                    <input required="" name="username" class="uk-input uk-form-width-large" placeholder="Nama Lengkap" type="text"> 
                                </div>                   
                                <div class="uk-margin"> 
                                    <label> Email </label>                                                 
                                    <input required="" name="email" class="uk-input uk-form-width-large" placeholder="Nama Lengkap" type="email"> 
                                </div>                
                                <div class="uk-margin"> 
                                    <label> Password </label>                                                 
                                    <input required="" name="password" class="uk-input uk-form-width-large" placeholder="Nama Lengkap" type="text"> 
                                </div>        
                                <div class="uk-margin">
                                    <label> Kelas </label>   
                                    <select required="" class="uk-select" name="jenjang_kelas">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                    </select>
                                </div>                                         
                        </div>                                     
                    </div>                                 
                </div>                             
                <div class="uk-modal-footer uk-text-right"> 
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Batal</button>                                 
                    <button class="uk-button uk-button-primary" type="submit" name="simpan">Simpan</button>                                 
                </div>      

                </form>                       
            </div>                         
        </div>                     
    </div>                 
    <div class="uk-background-default uk-margin-top uk-padding"> 
        <div uk-grid> 
            <div class="uk-width-expand@m"> 
                <form class=" uk-flex-inline uk-flex-middle uk-text-small"> 
                    <p class="uk-margin-remove-bottom uk-margin-right"> Show entries :  </p> 
                    <select class="uk-select uk-width-small" id="form-horizontal-select"> 
                        <option>10 page </option>                                     
                        <option>20 page </option>                                     
                        <option>30 page </option>                                     
                        <option>50 page </option>                                     
                    </select>                                 
                </form>                             
            </div>                         
            <div class="uk-width-auto@m uk-text-small"> 
                <form> 
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Search user"> 
                    <button class="uk-button uk-button-grey admin-btn">Search</button>                                 
                </form>                             
            </div>                         
        </div>                     
    </div>                 
    <div class="uk-overflow-auto"> 
        <table class="uk-table uk-table-hover uk-table-middle uk-table-divider"> 
            <thead> 
                <tr class="uk-text-small uk-text-bold"> 
                    <th>No</th> 
                    <th>Tanggal Daftar</th>
                    <th>Poin</th>
                    <th>Kelas</th>  
                    <th>Nama Lengkap</th>
                    <th>JK</th> 
                    <th>Alamat</th> 
                    <th>Username</th> 
                    <th>Email</th> 
                    <th>Password</th>
                    <th></th>
                </tr>                             
            </thead>                         
            <tbody> 
                <?php
                    $no = 1; 
                    foreach ($data['siswa'] as $siswa):
                ?>
                    
                    <tr> 
                        <td>
                            <?php echo $no; ?>
                        </td>                                             
                        <td class="uk-align-center"> <?php echo $siswa['tanggal_daftar'] ?>  </td> 
                        <td> <?php echo $siswa['poin'] ?> </td> 
                        <td><?php echo $siswa['jenjang_kelas'] ?></td>
                        <td> <?php echo $siswa['nama_lengkap'] ?> </td> 
                        <td><?php echo $siswa['jenis_kelamin'] ?></td> 
                        <td><?php echo $siswa['alamat'] ?></td> 
                        <td><?php echo $siswa['username'] ?></td>
                        <td><?php echo $siswa['email'] ?></td>
                        <td><?php echo $siswa['password'] ?></td>    
                        <td class="uk-flex-inline uk-flex-middle"> 
                            <button class="uk-button uk-button-primary" type="button">Aksi</button>
                            <div uk-dropdown>
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-nav-header">Pilih aksi (<?php echo $siswa['id_siswa'] ?>):</li>
                                    <li><a href="<?php echo BASEURL ?>/admin/editSiswa/<?php echo $siswa['id_siswa'] ?>">1. Edit</a></li>
                                    <li><a href="<?php echo BASEURL ?>/admin/hapusSiswa/<?php echo $siswa['id_siswa'] ?>">2. Hapus</a></li>
                                </ul>
                            </div>   
                        </td>                                 
                    </tr>  

                <?php 
                    $no++; 
                    endforeach 
                ?>                    
            </tbody>                         
        </table>                     
    </div>                 
    <div class="uk-padding uk-background-default"> 
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
        <p> you are showing 1 to 12 entries</p> 
    </div>                 
</div>