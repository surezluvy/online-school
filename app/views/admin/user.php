<div class="admin-content-inner"> 
    <div class="uk-flex-inline uk-flex-middle"> 
        <i class="fas fa-user icon-large uk-margin-right"></i> 
        <h4 class="uk-margin-remove"> Users </h4> 
        <button class="uk-button uk-button-success uk-margin-medium-left admin-btn" href="#create-model" uk-tooltip="title: Create New User ; delay: 500 ; pos: top ;animation:	uk-animation-scale-up" uk-toggle> 
            <i class="fas fa-user-plus"></i> add new 
        </button>                     
        <!-- model -->                     
        <div id="create-model" uk-modal> 
            <div class="uk-modal-dialog"> 
                <button class="uk-modal-close-default uk-padding-small" type="button" uk-close></button>                             
                <div class="uk-modal-header"> 
                    <h4> Create New User   </h4> 
                </div>                             
                <div class="uk-modal-body"> 
                    <div uk-grid> 
                        <div class="uk-width-1-3@m"> 
                            <form action="/file-upload" class="dropzone  id=" y-awesome-dropzone""> 
                                <div class="fallback"> 
                                    <input name="file" type="file" multiple/> 
                                </div>                                             
                            </form>                                         
                            <div class="uk-margin"> 
                                <span class="uk-text-middle uk-text-small"> Recomended 50 x 50</span> 
                                <div uk-form-custom="" class="uk-form-custom"> 
                                    <input type="file"> 
                                    <span class="uk-link">upload</span> 
                                </div>                                             
                            </div>                                         
                        </div>                                     
                        <div class="uk-width-2-3@m"> 
                            <form> 
                                <div class="uk-margin"> 
                                    <label> Name </label>                                                 
                                    <input class="uk-input uk-form-width-large" placeholder="Name" type="text"> 
                                </div>                                             
                                <div class="uk-margin"> 
                                    <label> Username </label>                                                 
                                    <input class="uk-input uk-form-width-large" placeholder="Username" type="text"> 
                                </div>                                             
                                <div class="uk-margin"> 
                                    <label> Email </label>                                                 
                                    <input class="uk-input uk-form-width-large" placeholder="name@example.com" type="text"> 
                                </div>                                             
                                <div class="uk-margin"> 
                                    <label> Password </label>                                                 
                                    <input class="uk-input uk-form-width-large" placeholder="password" type="password"> 
                                </div>                                             
                                <div class="uk-margin"> 
                                    <label> Level</label>                                                 
                                    <select class="uk-select"> 
                                        <option> Begginers </option>                                                     
                                        <option> Intermediate </option>                                                     
                                        <option> Advance </option>                                                     
                                    </select>                                                 
                                </div>                                             
                            </form>                                         
                        </div>                                     
                    </div>                                 
                </div>                             
                <div class="uk-modal-footer uk-text-right"> 
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>                                 
                    <button class="uk-button uk-button-primary" type="button">Save</button>                                 
                </div>                             
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
                    <th></th> 
                    <th>Avature</th> 
                    <th>Name</th> 
                    <th>Email</th> 
                    <th>Created</th> 
                    <th>Membership</th> 
                    <th>Role</th> 
                    <th>Expand + Link</th> 
                </tr>                             
            </thead>                         
            <tbody> 
                <tr> 
                    <td>
                        <input class="uk-checkbox" type="checkbox">
                    </td>                                 
                    <td>
                        <img class="uk-preserve-width uk-border-circle user-profile-small" src="../assets/images/avatures/avature-1.png" width="50" alt="">
                    </td>                                 
                    <td> username  </td> 
                    <td> Username @gmail.com </td> 
                    <td> 12/12/2020 </td> 
                    <td>Paid</td> 
                    <td>Administrater</td> 
                    <td class="uk-flex-inline uk-flex-middle"> 
                        <button class="uk-button uk-button-success admin-table-btn"> 
                            <i class="fas fa-eye uk-visible@m"></i> View 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Edit 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Delelt 
                        </button>                                     
                    </td>                                 
                </tr>                             
                <tr> 
                    <td>
                        <input class="uk-checkbox" type="checkbox">
                    </td>                                 
                    <td>
                        <img class="uk-preserve-width uk-border-circle user-profile-small" src="../assets/images/avatures/avature-4.png" width="50" alt="">
                    </td>                                 
                    <td> username  </td> 
                    <td> Username @gmail.com </td> 
                    <td> 12/12/2020 </td> 
                    <td> Free  </td> 
                    <td>Registered</td> 
                    <td class="uk-flex-inline uk-flex-middle"> 
                        <button class="uk-button uk-button-success admin-table-btn"> 
                            <i class="fas fa-eye uk-visible@m"></i> View 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Edit 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Delelt 
                        </button>                                     
                    </td>                                 
                </tr>                             
                <tr> 
                    <td>
                        <input class="uk-checkbox" type="checkbox">
                    </td>                                 
                    <td>
                        <img class="uk-preserve-width uk-border-circle user-profile-small" src="../assets/images/avatures/avature-2.png" width="50" alt="">
                    </td>                                 
                    <td> username  </td> 
                    <td> Username @gmail.com </td> 
                    <td> 12/12/2020 </td> 
                    <td> Paid  </td> 
                    <td> moderator </td> 
                    <td class="uk-flex-inline uk-flex-middle"> 
                        <button class="uk-button uk-button-success admin-table-btn"> 
                            <i class="fas fa-eye uk-visible@m"></i> View 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Edit 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Delelt 
                        </button>                                     
                    </td>                                 
                </tr>                             
                <tr> 
                    <td>
                        <input class="uk-checkbox" type="checkbox">
                    </td>                                 
                    <td>
                        <img class="uk-preserve-width uk-border-circle user-profile-small" src="../assets/images/avatures/avature-3.png" width="50" alt="">
                    </td>                                 
                    <td> username  </td> 
                    <td> Username @gmail.com </td> 
                    <td> 12/12/2020 </td> 
                    <td> Free  </td> 
                    <td> Registered </td> 
                    <td class="uk-flex-inline uk-flex-middle"> 
                        <button class="uk-button uk-button-success admin-table-btn"> 
                            <i class="fas fa-eye uk-visible@m"></i> View 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Edit 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Delelt 
                        </button>                                     
                    </td>                                 
                </tr>                             
                <tr> 
                    <td>
                        <input class="uk-checkbox" type="checkbox">
                    </td>                                 
                    <td>
                        <img class="uk-preserve-width uk-border-circle user-profile-small" src="../assets/images/avatures/avature-4.png" width="50" alt="">
                    </td>                                 
                    <td> username  </td> 
                    <td> Username @gmail.com </td> 
                    <td> 12/12/2020 </td> 
                    <td> Paid  </td> 
                    <td>editor</td> 
                    <td class="uk-flex-inline uk-flex-middle"> 
                        <button class="uk-button uk-button-success admin-table-btn"> 
                            <i class="fas fa-eye uk-visible@m"></i> View 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Edit 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Delelt 
                        </button>                                     
                    </td>                                 
                </tr>                             
                <tr> 
                    <td>
                        <input class="uk-checkbox" type="checkbox">
                    </td>                                 
                    <td>
                        <img class="uk-preserve-width uk-border-circle user-profile-small" src="../assets/images/avatures/avature-5.png" width="50" alt="">
                    </td>                                 
                    <td> username  </td> 
                    <td> Username @gmail.com </td> 
                    <td> 12/12/2020 </td> 
                    <td> Free  </td> 
                    <td>Registered</td> 
                    <td class="uk-flex-inline uk-flex-middle"> 
                        <button class="uk-button uk-button-success admin-table-btn"> 
                            <i class="fas fa-eye uk-visible@m"></i> View 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Edit 
                        </button>                                     
                        <button class="uk-button uk-button-danger admin-table-btn"> 
                            <i class="fas fa-trash uk-visible@m"></i> Delelt 
                        </button>                                     
                    </td>                                 
                </tr>                             
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