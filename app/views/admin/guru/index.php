
<div class="admin-content-inner"> 
    <?php Flasher::flash(); ?>
    <div class="uk-flex-inline uk-flex-middle"> 
        <i class="fas fa-user icon-large uk-margin-right"></i> 
        <h4 class="uk-margin-remove"> Guru </h4> 
        <button class="uk-button uk-button-success uk-margin-medium-left admin-btn" href="#create-model" uk-tooltip="title: Create New User ; delay: 500 ; pos: top ;animation: uk-animation-scale-up" uk-toggle> 
            <i class="fas fa-user-plus"></i> tambah baru 
        </button>                     
        <!-- model -->                     
        <div id="create-model" uk-modal> 
            <div class="uk-modal-dialog"> 
                <button class="uk-modal-close-default uk-padding-small" type="button" uk-close></button>                             
                <div class="uk-modal-header"> 
                    <h4> Tambah guru baru   </h4> 
                </div>                             
                <div class="uk-modal-body"> 
                    <div uk-grid>                                    
                        <div class="uk-width-2-1@m"> 
                            <form method="POST" action="<?php echo BASEURL ?>/admin/tambahGuru"> 
                                <input readonly="" type="hidden" name="poin" value="0">
                                <input readonly="" type="hidden" name="tanggal_daftar" value="<?php echo date("Y-m-d") ?>">
                                <div class="uk-margin"> 
                                    <label> Nama Lengkap </label>                                                 
                                    <input required="" name="nama_lengkap" class="uk-input uk-form-width-large" placeholder="Nama Lengkap" type="text"> 
                                </div>  
                                <div class="uk-margin"> 
                                    <label> Username </label>                                                 
                                    <input required="" name="username" class="uk-input uk-form-width-large" placeholder="Username" type="text"> 
                                </div>                   
                                <div class="uk-margin"> 
                                    <label> Email </label>                                                 
                                    <input required="" name="email" class="uk-input uk-form-width-large" placeholder="Email" type="email"> 
                                </div>                
                                <div class="uk-margin"> 
                                    <label> Password </label>                                                 
                                    <input required="" name="password" class="uk-input uk-form-width-large" placeholder="Password" type="text"> 
                                </div>        
                                <div class="uk-margin">
                                    <label> Mengajar Kelas </label>   
                                    <select required="" class="uk-select" name="mengajar_kelas">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                    </select>
                                </div>        
                                <div class="uk-margin">
                                    <label> Mengajar Mapel </label>   
                                    <select required="" class="uk-select" name="mengajar_mapel">
                                        <option value="Matematika">Matematika</option>
                                        <option value="Bahasa Indonesa">Bahasa Indonesa</option>
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
                <form method="post" action="cariGuru"> 
                    <input name="keyword" class="uk-input uk-form-width-medium" type="text" placeholder="Cari guru"> 
                    <button class="uk-button uk-button-grey admin-btn" type="submit">Cari</button>                          
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
                    <th>Mengajar kelas/mapel</th> 
                    <th>Nama Lengkap</th>
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
                    foreach ($data['guru'] as $guru):
                ?>
                    
                    <tr> 
                        <td>
                            <?php echo $no; ?>
                        </td>                                             
                        <td class="uk-align-center"> <?php echo $guru['tanggal_daftar'] ?>  </td> 
                        <td> <?php echo $guru['poin'] ?> </td> 
                        <td><?php echo $guru['mengajar_kelas'] ?>/<?php echo $guru['mengajar_mapel'] ?></td>
                        <td> <?php echo $guru['nama_lengkap'] ?> </td> 
                        <td><?php 
                                $pisah = preg_split("/[,]+/", $guru['alamat']);
                                $alamatSingkat = $pisah[0];
                                echo $alamatSingkat;
                            ?></td> 
                        <td><?php echo $guru['username'] ?></td>
                        <td><?php echo $guru['email'] ?></td>
                        <td><?php echo $guru['password'] ?></td>    
                        <td class="uk-flex-inline uk-flex-middle"> 
                            <button class="uk-button uk-button-primary" type="button">Aksi</button>
                            <div uk-dropdown>
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li class="uk-nav-header">Pilih aksi (<?php echo $guru['id_guru'] ?>):</li>
                                    <li><a href="<?php echo BASEURL ?>/admin/editGuru/<?php echo $guru['id_guru'] ?>">1. Edit</a></li>
                                    <li><a href="<?php echo BASEURL ?>/admin/hapusGuru/<?php echo $guru['id_guru'] ?>">2. Hapus</a></li>
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