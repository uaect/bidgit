$(document).ready(function() {
    var max_users      = 5;
    var wrapper_users         = $(".add-more-users"); 
    var add_users      = $(".add-users"); 
  
    var x = 0; 
  var y = 0;
    $(add_users).click(function(e){ 
        e.preventDefault();
        if(x < max_branch){ 
            x++; 
      var options_con = '';
      
            $(wrapper_users).append('<div class="row">\
                            <div class="col-md-3">\
                              <div class="form-group">\
                                <label for="first_name" class="field-label">Upload Your Photo</label>\
                                <div class="custom-file upload-reg">\
                                  <input type="file" class="custom-file-input form-control field-control" id="inputGroupFile01">\
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>\
                                </div>\
                              </div>\
                            </div>\
                            <div class="col-md-3">\
                              <div class="form-group">\
                                <label for="first_name" class="field-label">Full Name:</label>\
                                <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">\
                              </div>\
                            </div>\
                            <div class="col-md-3">\
                              <div class="form-group">\
                                <label for="dob" class="field-label">DOB:</label>\
                                <input type="text" class="form-control field-control" name="dob" id="dob" value="" placeholder="" data-fv-field="dob">\
                              </div>\
                            </div>\
                            <div class="col-md-3">\
                              <div class="form-group">\
                                <label for="user_designation" class="field-label">Designation:</label>\
                                <input type="text" class="form-control field-control" name="user_designation" id="user_designation" value="" placeholder="" data-fv-field="user_designation">\
                              </div>\
                            </div>\
                          </div>\
                          <div class="row">\
                            <div class="col-md-3">\
                              <div class="form-group">\
                                <label for="user_mobile" class="field-label">Mobile Number:</label>\
                                <div class="full-wrap mobile-code">\
                                  <input type="text" class="form-control field-control col-md-2" placeholder="">\
                                  <input type="text" class="form-control field-control col-md-2" placeholder="">\
                                  <input type="text" class="form-control field-control col-md-8">\
                                </div>\
                              </div>\
                            </div>\
                            <div class="col-md-3">\
                              <div class="form-group">\
                                <label for="users_email" class="field-label">E-mail:</label>\
                                <input type="email" class="form-control field-control" id="users_email" name="users_email">\
                              </div>\
                            </div>\
                            <div class="col-md-3">\
                              <div class="form-group">\
                                <label for="users_password" class="field-label">Password:</label>\
                                <input type="text" class="form-control field-control" id="users_password" name="users_password">\
                              </div>\
                            </div>\
                            <div class="col-md-3">\
                              <div class="form-group">\
                                <label for="users_confirm_password" class="field-label">Confirm Password:</label>\
                                <input type="text" class="form-control field-control" id="users_confirm_password" name="users_confirm_password">\
                              </div>\
                            </div>\
                          </div>\
                          <div class="row">\
                            <div class="lg-reg reg-form col-md-12">\
                              <div class="full-wrap user-action-part mt-4">\
                                <div class="label-head"><img src="{{ URL::asset('front_end/images/icon/allow.png') }}" class="mr-1"><span class="d-inline-block">This user authorized to :</span></div>\
                                <div class="full-wrap mt-2">\
                                  <div class="custom-control custom-radio d-inline-block acc-choose mt-2">\
                                    <input type="radio" id="1" name="customRadioInline1" class="custom-control-input">\
                                    <label class="custom-control-label" for="1">Delegation of using all the businessid.net functions, facilities and actions.</label>\
                                  </div>\
                                  <div class="custom-control custom-radio d-inline-block acc-choose mt-2">\
                                    <input type="radio" id="2" name="customRadioInline1" class="custom-control-input">\
                                    <label class="custom-control-label" for="2">All E-commerce:</label>\
                                  </div>\
                                  <ul class="list-for-user">\
                                    <li>\
                                      <div class="checkbox-edit checkbox-primary">\
                                        <input id="e1" type="checkbox" checked="">\
                                        <label for="e1">Add product / Delete product / Manage Product / Edit product… etc.</label>\
                                      </div>\
                                    </li>\
                                    <li>\
                                      <div class="checkbox-edit checkbox-primary">\
                                        <input id="e2" type="checkbox">\
                                        <label for="e2">Sell product / Confirm order request/Track order/Delete order request / Edit the selling product / Edit Tracking Order / Edit order… etc.</label>\
                                      </div>\
                                    </li>\
                                    <li>\
                                      <div class="checkbox-edit checkbox-primary">\
                                        <input id="e3" type="checkbox">\
                                        <label for="e3">Buy from supplier /   product / Edit the buying order… etc. </label>\
                                      </div>\
                                    </li>\
                                    <li>\
                                      <div class="checkbox-edit checkbox-primary">\
                                        <input id="e4" type="checkbox">\
                                        <label for="e4">Create tender / accept tender / Delete tender / Edit tender… etc. </label>\
                                      </div>\
                                    </li>\
                                    <li>\
                                      <div class="checkbox-edit checkbox-primary">\
                                        <input id="e5" type="checkbox">\
                                        <label for="e5">Create Job vacancies / Accept CV / Accept appointments / Decline the appointment / Edit job vacancies … etc.</label>\
                                      </div>\
                                    </li>\
                                    <li class="ml-3">\
                                      <div class="checkbox-edit checkbox-primary">\
                                        <input id="e6" type="checkbox">\
                                        <label for="e6">Add advertising Post ( Buying a package from businessid.net to promote your account or product or service or your brand ) / add advertising video (Buying a package from businessid.net to promote your account or product or service or your brand ) / Delete your advertising package from  businessid.net / Edit your advertising package</label>\
                                      </div>\
                                    </li>\
                                  </ul>\
                                </div>\
                                <div class="full-wrap mt-2">\
                                  <div class="custom-control custom-radio d-inline-block acc-choose mt-2 ml-1">\
                                    <input type="radio" id="s0" name="customRadioInline1" class="custom-control-input">\
                                    <label class="custom-control-label" for="s0">All Social Media</label>\
                                  </div>\
                                  <ul class="list-for-user">\
                                    <li class="ml-3">\
                                      <div class="checkbox-edit checkbox-primary">\
                                        <input id="s1" type="checkbox" checked="">
                                        <label for="s1">Post video, Post photo, Follow, Un Follow, Change the name of company / background photo / Profile photo / Write comment / Like post / Share / Delete all type of post and comments / Edit all the posts in profile and in newsfeed… etc.</label>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="checkbox-edit checkbox-primary">
                                        <input id="s2" type="checkbox" checked="">
                                        <label for="s2">Chat / Send message</label>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="user-for-msg text-center"> <i class="fa fa-info-circle" aria-hidden="true"></i> All user will have a personal account with same user name and password </div>
                              </div>
                            </div>
                          </div>
                          <div class="full-wrap text-right send-author-wrap"> <span>* This user has to authorized by <a href="">[Name]</a></span>
                            <button class="btn send-author"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send For Authorization</button>
                          </div>'); 
        }
    });
   
  $(wrapper_users).on("click",".removebranch", function(e){ 
        e.preventDefault(); $(this).parent().parent().parent().remove(); x--;
    })
});