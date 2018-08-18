@include('front_end.modules.header-hero-nav')
@include('front_end.modules.hero-header')
<link rel="stylesheet" href="{{ URL::asset('front_end/css/prism.css') }}">
<link rel="stylesheet" href="{{ URL::asset('front_end/css/intlTelInput.css') }}">
<link rel="stylesheet" href="{{ URL::asset('front_end/css/isValidNumber.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('front_end/css/reg-wizard.css') }}">
<style type="text/css">
  .store-cat-nav{
    display: none;
  }
  .masthead .nav-container {
    top: 5px;
  }
</style>
<div class="container-fluid">
<div class="row">
  <div class="full-wrap bg-store pb-4">
    <div class="cmn-container-reg">
      <div class="row"> 
        <!-- Top content -->
        <div class="top-content">
          <div class="head">Please Follow the step for registration :</div>
          <div class="row">
            <div class="col-md-12 form-box f1">
              <div class="f1-steps">
                <div class="f1-progress">
                  <div class="f1-progress-line" data-now-value="6" data-number-of-steps="4" style="width: 6%;"></div>
                </div>
                <div class="f1-step active">
                  <div class="f1-step-icon"><i class="fa fa-copyright" aria-hidden="true"></i></div>
                  <p>Company Main Info</p>
                </div>
                <div class="f1-step">
                  <div class="f1-step-icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></div>
                  <p>Licence Info</p>
                </div>
                <div class="f1-step">
                  <div class="f1-step-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                  <p>Location</p>
                </div>
                <div class="f1-step">
                  <div class="f1-step-icon"><i class="fa fa-id-card-o" aria-hidden="true"></i></div>
                  <p>Quick Registration</p>
                </div>
                <div class="f1-step">
                  <div class="f1-step-icon"><i class="fa fa-user-plus" aria-hidden="true"></i></div>
                  <p>Create Users</p>
                </div>
                <div class="f1-step">
                  <div class="f1-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                  <p>Owner / Share Holder Info</p>
                </div>
                <div class="f1-step">
                  <div class="f1-step-icon"><i class="fa fa-sitemap" aria-hidden="true"></i></div>
                  <p>Branches</p>
                </div>
                <div class="f1-step">
                  <div class="f1-step-icon"><i class="fa fa-upload" aria-hidden="true"></i></div>
                  <p>Upload Documents</p>
                </div>
                <div class="f1-step">
                  <div class="f1-step-icon"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                  <p>Verifiy</p>
                </div>
                <div class="f1-step">
                  <div class="f1-step-icon"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
                  <p>Payment</p>
                </div>
              </div>
              <fieldset>
                {{ Form::open(array('url' => 'register/post')) }}
                <div class="lg-reg reg-form">
                  <input type="hidden" name="tab" value="company_info">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="name" class="field-label">Company Name:</label>
                        <input type="text" class="form-control field-control" name="name" id="name" value="{{old('name')}}" placeholder="" data-fv-field="name">
                        @if ($errors->first('name'))
                        <div class="alert alert-danger">
                          <ul>
                            <li>{{ $errors->first('name') }}</li>
                          </ul>
                        </div>
                        @endif </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="category" class="field-label">Main Activity:</label>
                        <select class="form-control js-example-basic-single" id="category" name="category"  title="">
                          <option value="">- Select -</option>
                          
            
                                  @if(!empty($categories))
  @foreach($categories as $key => $value)
                            
            
            
                          <option value="{{ $key }}" <?php if(old('category')==$key) echo "selected"; ?>>{{ $value }}</option>
                          
            
            
  @endforeach
@endif
                          
          
          
                        </select>
                        @if ($errors->first('category'))
                        <div class="alert alert-danger">
                          <ul>
                            <li>{{ $errors->first('category') }}</li>
                          </ul>
                        </div>
                        @endif </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="activity" class="field-label">Sub Activity:</label>
                        <select class="form-control js-example-basic-single" id="activity" name="activity"  multiple="">
                          <option value="">- Select -</option>
                          
            
            
                            
                                  @if(!empty($activities))
  @foreach($activities as $value)
    
                            
            
            
                          <option value="{{ $value }}">{{ $value }}</option>
                          
            
            
                            
  @endforeach
@endif
                                
                          
          
          
                        </select>
                        @if ($errors->first('activity'))
                        <div class="alert alert-danger">
                          <ul>
                            <li>{{ $errors->first('activity') }}</li>
                          </ul>
                        </div>
                        @endif </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="company_email" class="field-label">E-mail:</label>
                        <input type="email" class="form-control field-control" id="company_email" name="company_email" value="{{old('company_email')}}">
                        @if ($errors->first('company_email'))
                        <div class="alert alert-danger">
                          <ul>
                            <li>{{ $errors->first('company_email') }}</li>
                          </ul>
                        </div>
                        @endif </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="company_mobile" class="field-label">Mobile Number:</label>
                        <input type="text" class="form-control field-control" name="company_mobile" id="company_mobile" value="{{old('company_mobile')}}" placeholder="" data-fv-field="company_mobile">
                        @if ($errors->first('company_mobile'))
                        <div class="alert alert-danger">
                          <ul>
                            <li>{{ $errors->first('company_mobile') }}</li>
                          </ul>
                        </div>
                        @endif </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="phone" class="field-label">Landline Number:</label>
                        <input type="text" class="form-control field-control" name="phone" id="phone" value="{{old('phone')}}" placeholder="" data-fv-field="phone">
                      </div>
                    </div>
                  </div>
                  <div class="full-wrap super-user-wrap">
                    <div class="full-wrap"> <img src="{{ URL::asset('front_end/images/icon/super.png') }}" class="d-inline-block"> <span class="super-user d-inline-block align-middle">Main User Details</span> </div>
                    <div class="row mt-3">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="user_first_name" class="field-label">First Name:</label>
                          <input type="text" class="form-control field-control" name="user_first_name" id="user_first_name" value="{{old('user_first_name')}}"  placeholder="" data-fv-field="user_first_name">
                          @if ($errors->first('first_name'))
                          <div class="alert alert-danger">
                            <ul>
                              <li>{{ $errors->first('first_name') }}</li>
                            </ul>
                          </div>
                          @endif </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="last_name" class="field-label">Last Name:</label>
                          <input type="text" class="form-control field-control" name="last_name" id="last_name" value="{{old('last_name')}}" placeholder="" data-fv-field="last_name">
                          @if ($errors->first('last_name'))
                          <div class="alert alert-danger">
                            <ul>
                              <li>{{ $errors->first('last_name') }}</li>
                            </ul>
                          </div>
                          @endif </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="gender" class="field-label">Gender : </label>
                          <div class="custom-radio-wrap">
                            <div class="custom-control custom-radio mr-3">
                              <input type="radio" id="gender" name="gender" class="custom-control-input" value="Male">
                              <label class="custom-control-label" for="gender">Male</label>
                            </div>
                            <div class="custom-control custom-radio pull-right">
                              <input type="radio" id="gender1" name="gender" class="custom-control-input" value="Female">
                              <label class="custom-control-label" for="gender1">Female</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="designation" class="field-label">Designation:</label>
                          <input type="text" class="form-control field-control" name="designation" id="designation" value="{{old('designation')}}" placeholder="" data-fv-field="designation">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="mobile" class="field-label">Mobile Number:</label>
                          <input type="text" class="form-control field-control" name="mobile" id="mobile" value="{{old('mobile')}}" placeholder="" data-fv-field="mobile">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="email" class="field-label">E-mail:</label>
                          <input type="email" class="form-control field-control" name="email" id="email" value="{{old('email')}}" placeholder="" data-fv-field="email">
                          @if ($errors->first('email'))
                          <div class="alert alert-danger">
                            <ul>
                              <li>{{ $errors->first('email') }}</li>
                            </ul>
                          </div>
                          @endif </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="email_confirmation" class="field-label">Confirm E-mail:</label>
                          <input type="email" class="form-control field-control" name="email_confirmation" id="email_confirmation" value="{{old('email_confirmation')}}" placeholder="" data-fv-field="confirmemail">
                          @if ($errors->first('email_confirmation'))
                          <div class="alert alert-danger">
                            <ul>
                              <li>{{ $errors->first('email_confirmation') }}</li>
                            </ul>
                          </div>
                          @endif </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="password" class="field-label">Password:</label>
                          <input type="password" class="form-control field-control" name="password" id="password" value="{{old('password')}}" placeholder="" data-fv-field="password">
                          @if ($errors->first('password'))
                          <div class="alert alert-danger">
                            <ul>
                              <li>{{ $errors->first('password') }}</li>
                            </ul>
                          </div>
                          @endif </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="password_confirmation" class="field-label">Confirm Password:</label>
                          <input type="password" class="form-control field-control" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}" placeholder="" data-fv-field="confirmpassword">
                          @if ($errors->first('password_confirmation'))
                          <div class="alert alert-danger">
                            <ul>
                              <li>{{ $errors->first('password_confirmation') }}</li>
                            </ul>
                          </div>
                          @endif </div>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-9 text-center mx-auto note-super"> 
                        <!-- <i class="fa fa-lock" aria-hidden="true"></i> --> 
                        <i class="fa fa-user-secret" aria-hidden="true"></i>
                        <p>This user has full limit  to use all facilities and functions in your company account in Businessid.net. In addition he can add and manage sub user who can manage your company account. </p>
                        <p>Businessid.net will generate a personal account for this user. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="f1-buttons">
                  <button type="button" class="btn btn-next">Next</button>
                </div>
                {{ Form::close() }}
              </fieldset>
              <fieldset>
                {{ Form::open(array('url' => 'register/post')) }}
                <input type="hidden" name="tab" value="license">
                <div class="lg-reg reg-form pb-5">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="legal_status" class="field-label">Legal Status:</label>
                        <select class="form-control js-example-basic-single" id="legal_status" name="legal_status">
                          <option value="" data-select2-id="12">Select Legal Status</option>
                          
                                    
                                 @if(!empty($legalstatus))
  @foreach($legalstatus as $key => $value)
  
  
                          <option value="{{ $key }}" <?php if(old('fk_country_id')==$key) echo "selected"; ?>>{{ $value }}</option>
                          
  
  @endforeach
@endif                        
  
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="license_no" class="field-label"> License No: </label>
                        <input type="text" class="form-control field-control" name="license_number" id="license_number" value="" placeholder="" data-fv-field="license_number">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="registration_no" class="field-label"> Registration No: </label>
                        <input type="text" class="form-control field-control" name="registration_number" id="registration_number" value="" placeholder="" data-fv-field="registration_number">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="inputGroupFile01" class="field-label"> Upload Trade Licence </label>
                        <div class="custom-file upload-reg">
                          <input type="file" class="custom-file-input form-control field-control" name="license_file" id="license_file">
                          <label class="custom-file-label" for="inputGroupFile01"> Choose file </label>
                          <span class="text-muted">*We will not share with this except the account holder </span> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="f1-buttons">
                  <button type="button" class="btn btn-previous"> Previous </button>
                  <button type="button" class="btn btn-next"> Next </button>
                </div>
                {{ Form::close() }}
              </fieldset>
              <fieldset>
                {{ Form::open(array('url' => 'register/post')) }}
                <div class="lg-reg reg-form">
                  <input type="hidden" name="tab" value="location">
                  <div class="row">
                    <div class="col-md-12 location-btns"> 
                      <!-- <button class="switch-acc">Add New</button> -->
                      <div class="get-current-location"><i class="fa fa-paper-plane" aria-hidden="true"></i>Use my current location</div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="country" class="field-label">Country:</label>
                        <select class="form-control js-example-basic-single" id="fk_country_id" name="fk_country_id"  title="Select Current Country">
                          <option value="">Select Country</option>
                          
            
            
                                  
                                  @if(!empty($countries))
  @foreach($countries as $key => $value)
    
                                  
            
            
                          <option value="{{ $key }}" <?php if(old('fk_country_id')==$key) echo "selected"; ?>>{{ $value }}</option>
                          
            
            
                                  
  @endforeach
@endif
                                
                                
          
          
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="city" class="field-label">City:</label>
                        <select class="form-control js-example-basic-single" id="fk_city_id" name="fk_city_id"  title="Select Current Location">
                          <option value="">Select City</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="location" class="field-label">Area:</label>
                        <select class="form-control js-example-basic-single" name="fk_area_id" id="fk_area_id">
                          <option value="">Select Area</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="pobox" class="field-label">P.O.Box:</label>
                        <input type="text" class="form-control field-control" name="pobox" id="pobox" value="" placeholder="" data-fv-field="pobox">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="fax" class="field-label">Fax Number:</label>
                        <input type="text" class="form-control field-control" name="fax" id="fax" value="" placeholder="" data-fv-field="fax">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="website" class="field-label">Website:</label>
                        <input type="email" class="form-control field-control" name="website" id="website" value="" placeholder="" data-fv-field="website">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="address" class="field-label">Address:</label>
                        <textarea class="form-control" name="address" id="address" placeholder=""></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="first_name" class="field-label">Drag Your Location:</label>
                        <div class="form-group bmd-form-group">
                          <label for="map_address" class="bmd-label-floating">Search Location:</label>
                          <input type="text" class="form-control col-sm-6" id="map_address" name="map_address" autocomplete="off">
                        </div>
                        <div class="col-sm-12" id="map" style="height:400px;"></div>
                        <input type="hidden" name="latitude" id="latitude">
                        <input type="hidden" name="longitude" id="longitude">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="button" class="btn btn-next">Next</button>
                </div>
                {{ Form::close() }}
              </fieldset>
              <fieldset>
                <div class="lg-reg reg-form">
                  <div class="row">
                    <div class="col-md-12 mx-auto">
                      <div class="row">
                        <div class="col-md-6 pr-0">
                          <div class="full-wrap full-register-box first"> <a href="" class="btn mx-auto complete-reg">Register Now</a>
                            <p class="first-desc"> If you registered with this stage you can't get BID's all facility ,and you will not verfied by us until complete necessary requirements.However you will get the basic facility of the BID. </p>
                            <div class="or-box"> 
                              <!-- <i class="fa fa-hand-o-right" aria-hidden="true"></i> -->OR </div>
                          </div>
                        </div>
                        <div class="col-md-6 pl-0">
                          <div class="full-wrap full-register-box border-left-0 second"> <a href="" class="btn mx-auto complete-reg">Go to, &nbsp;<span>Next Step</span></a>
                            <p class="first-desc pl-4"> If you willing for complete registration , You are able to use all facility , our support , and guidness (Some of other Facilities) </p>
                            <ul>
                              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Add Your Product</li>
                              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Manage Product</li>
                              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Dashboard</li>
                              <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Logistics Support</li>
                              <li><i class="fa fa-check-square-o" aria-hidden="true"></i> You can add Property, New Car , Used Car, Services, Wholesale ... </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="button" class="btn btn-next">Next</button>
                </div>
              </fieldset>
              <fieldset>
                <div class="lg-reg reg-form"> {{ Form::open(array('url' => 'register/post')) }}
                  <input type="hidden" name="tab" value="users">
                  <div class="user-for-msg text-center mt-2 mb-4 border-0"> 
                    <!-- <i class="fa fa-info-circle" aria-hidden="true"></i> --> 
                    ( You can add multiple users in your account with unlimited facilities for each user or you can specify the area where your user can work on it  …  If not you can <b>skip</b> from this step ) </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="first_name" class="field-label">Upload Your Photo</label>
                        <div class="custom-file upload-reg">
                          <input type="file" class="custom-file-input form-control field-control" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="first_name" class="field-label">Full Name:</label>
                        <input type="text" class="form-control field-control" name="first_name" id="first_name" value="" placeholder="" data-fv-field="first_name">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="dob" class="field-label">DOB:</label>
                        <input type="text" class="form-control field-control" name="dob" id="dob" value="" placeholder="" data-fv-field="dob">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="user_designation" class="field-label">Designation:</label>
                        <input type="text" class="form-control field-control" name="user_designation" id="user_designation" value="" placeholder="" data-fv-field="user_designation">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="user_mobile" class="field-label">Mobile Number:</label>
                        <div class="full-wrap mobile-code">
                          <input type="text" class="form-control field-control col-md-2" placeholder="">
                          <input type="text" class="form-control field-control col-md-2" placeholder="">
                          <input type="text" class="form-control field-control col-md-8">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="users_email" class="field-label">E-mail:</label>
                        <input type="email" class="form-control field-control" id="users_email" name="users_email">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="users_password" class="field-label">Password:</label>
                        <input type="text" class="form-control field-control" id="users_password" name="users_password">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="users_confirm_password" class="field-label">Confirm Password:</label>
                        <input type="text" class="form-control field-control" id="users_confirm_password" name="users_confirm_password">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="lg-reg reg-form col-md-12">
                      <div class="full-wrap user-action-part mt-4">
                        <div class="label-head"><img src="{{ URL::asset('front_end/images/icon/allow.png') }}" class="mr-1"><span class="d-inline-block">This user authorized to :</span></div>
                        <div class="full-wrap mt-2">
                          <div class="custom-control custom-radio d-inline-block acc-choose mt-2">
                            <input type="radio" id="1" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="1">Delegation of using all the businessid.net functions, facilities and actions.</label>
                          </div>
                          <div class="custom-control custom-radio d-inline-block acc-choose mt-2">
                            <input type="radio" id="2" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="2">All E-commerce:</label>
                          </div>
                          <ul class="list-for-user">
                            <li>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="e1" type="checkbox" checked="">
                                <label for="e1">Add product / Delete product / Manage Product / Edit product… etc.</label>
                              </div>
                            </li>
                            <li>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="e2" type="checkbox">
                                <label for="e2">Sell product / Confirm order request/Track order/Delete order request / Edit the selling product / Edit Tracking Order / Edit order… etc.</label>
                              </div>
                            </li>
                            <li>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="e3" type="checkbox">
                                <label for="e3">Buy from supplier /   product / Edit the buying order… etc. </label>
                              </div>
                            </li>
                            <li>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="e4" type="checkbox">
                                <label for="e4">Create tender / accept tender / Delete tender / Edit tender… etc. </label>
                              </div>
                            </li>
                            <li>
                              <div class="checkbox-edit checkbox-primary">
                                <input id="e5" type="checkbox">
                                <label for="e5">Create Job vacancies / Accept CV / Accept appointments / Decline the appointment / Edit job vacancies … etc.</label>
                              </div>
                            </li>
                            <li class="ml-3">
                              <div class="checkbox-edit checkbox-primary">
                                <input id="e6" type="checkbox">
                                <label for="e6">Add advertising Post ( Buying a package from businessid.net to promote your account or product or service or your brand ) / add advertising video (Buying a package from businessid.net to promote your account or product or service or your brand ) / Delete your advertising package from  businessid.net / Edit your advertising package</label>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="full-wrap mt-2">
                          <div class="custom-control custom-radio d-inline-block acc-choose mt-2 ml-1">
                            <input type="radio" id="s0" name="customRadioInline1" class="custom-control-input">
                            <label class="custom-control-label" for="s0">All Social Media</label>
                          </div>
                          <ul class="list-for-user">
                            <li class="ml-3">
                              <div class="checkbox-edit checkbox-primary">
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
                  </div>
                  <div class="row">
                    <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-2">
                      <button class="switch-acc">Delete</button>
                      <button class="switch-acc">Add</button>
                    </div>
                  </div>
                  <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                  {{ Form::close() }} </div>
              </fieldset>
              <fieldset>
                <div class="lg-reg reg-form">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="investor_name" class="field-label">Full Name:</label>
                        <input type="email" class="form-control field-control" name="investor_name" id="investor_name" value="" placeholder="" data-fv-field="investor_name">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="first_name" class="field-label">Type:</label>
                        <select class="form-control js-example-basic-single" name="" id="">
                          <option value="" data-select2-id="20">Select Type</option>
                          <option value="1" data-select2-id="1212">Local Sponsor</option>
                          <option value="2" data-select2-id="1213">Owner</option>
                          <option value="3" data-select2-id="1214">Partner</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="first_name" class="field-label">Percentage Of Share</label>
                        <input type="text" class="form-control field-control" name="percentage" id="percentage" value="" placeholder="" data-fv-field="percentage">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="first_name" class="field-label">Nationality:</label>
                        <select class="form-control js-example-basic-single" name="" id="">
                          <optgroup label="United Arab Emirates">
                          <option value="1" data-select2-id="953">Afghanistan</option>
                          <option value="2" data-select2-id="954">Albania</option>
                          <option value="3" data-select2-id="955">Algeria</option>
                          <option value="4" data-select2-id="956">American Samoa</option>
                          <option value="5" data-select2-id="957">Andorra</option>
                          <option value="6" data-select2-id="958">Angola</option>
                          <option value="7" data-select2-id="959">Anguilla</option>
                          <option value="8" data-select2-id="960">Antarctica</option>
                          <option value="9" data-select2-id="961">Antigua and Barbuda</option>
                          </optgroup>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="user_mobile" class="field-label">Mobile Number:</label>
                        <input type="text" class="form-control field-control" name="user_mobile" id="user_mobile" value="" placeholder="" data-fv-field="user_mobile">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="user_email" class="field-label">E-mail:</label>
                        <input type="email" class="form-control field-control" name="user_email" id="user_email" value="" placeholder="" data-fv-field="user_email">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="user_id_no" class="field-label">ID No:</label>
                        <input type="text" class="form-control field-control" name="user_id_no" id="user_id_no" value="" placeholder="" data-fv-field="user_id_no">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="first_name" class="field-label">Upload Your ID</label>
                        <div class="custom-file upload-reg">
                          <input type="file" class="custom-file-input form-control field-control" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          <span class="text-muted">*This will not be share with  anyone </span> </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-4">
                      <button class="switch-acc">Delete</button>
                      <button class="switch-acc">Add</button>
                    </div>
                  </div>
                </div>
                <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="button" class="btn btn-next">Next</button>
                </div>
              </fieldset>
              <fieldset>
                <div class="lg-reg reg-form">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="branch_name" class="field-label">Branch Name:</label>
                        <input type="text" class="form-control field-control" name="branch_name" id="branch_name" value="" placeholder="" data-fv-field="branch_name">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="branch_phone" class="field-label">Landline Number:</label>
                        <input type="text" class="form-control field-control" name="branch_phone" id="branch_phone" value="" placeholder="" data-fv-field="branch_phone">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="branch_mobile" class="field-label">Mobile Number:</label>
                        <input type="text" class="form-control field-control" name="branch_mobile" id="branch_mobile" value="" placeholder="" data-fv-field="branch_mobile">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="branch_fax" class="field-label">Fax Number:</label>
                        <input type="text" class="form-control field-control" name="branch_fax" id="branch_fax" value="" placeholder="" data-fv-field="branch_fax">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="branch_email" class="field-label">Email:</label>
                        <input type="email" class="form-control field-control" name="branch_email" id="branch_email" value="" placeholder="" data-fv-field="branch_email">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="branch_city" class="field-label">Location:</label>
                        <select class="form-control js-example-basic-single" id="branch_city" name="branch_city"  title="Select Current Location">
                          <option value="">Select Location</option>
                          <option value="Dubai" >Dubai</option>
                          <option value="Sharjah" >Sharjah</option>
                          <option value="Abu Dhabi" >Abu Dhabi</option>
                          <option value="Ras Al Khaimah" >Ras Al Khaimah</option>
                          <option value="Fujairah" >Fujairah</option>
                          <option value="Ajman" >Ajman</option>
                          <option value="Umm Al Qawain" >Umm Al Qawain</option>
                          <option value="Al Ain" >Al Ain</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="branch_address" class="field-label">Branch Address:</label>
                        <textarea class="form-control" name="branch_address" id="branch_address" placeholder=""></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 d-inline-block place-btn-wrap bottom-action-reg mt-1">
                      <button class="switch-acc">Delete</button>
                      <button class="switch-acc">Add</button>
                    </div>
                  </div>
                </div>
                <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="button" class="btn btn-next">Next</button>
                </div>
              </fieldset>
              <fieldset>
                <div class="lg-reg reg-form">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="first_name" class="field-label">Upload Logo</label>
                        <div class="custom-file upload-reg">
                          <input type="file" class="custom-file-input form-control field-control" id="inputGroupFile01">
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="f1-buttons">
                  <button type="button" class="btn btn-previous">Previous</button>
                  <button type="button" class="btn btn-next">Next</button>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('front_end.modules.footer') 
<script type="text/javascript">
  $(document).ready(function(e) {
    getCategory($("#category").val(),<?php echo @old('activity'); ?>);
  $('#category').change(function(e) {
    getCategory(this.value);
  });
  getCity($("#fk_country_id").val(),<?php echo @old('fk_city_id'); ?>);
  $('#fk_country_id').change(function(e){
  getCity(this.value,);
  });
  getArea($("#fk_city_id").val(),<?php echo @old('fk_area_id'); ?>);
  $('#fk_city_id').change(function(e){
  getArea(this.value,);
  });
  });
  function getCategory(category,activity='') {
  var token = $("input[name='_token']").val();
$.ajax({
          url: "<?php echo 'register/selectActivities'; ?>",
          method: 'POST',
          data: {category:category, _token:token,activity:activity},
          success: function(data) {
            //alert(data);
            $("select[name='activity'").html('');
            $("select[name='activity'").html(data.options);
            }
        });
}
  function getCity(countryid,cityid='') {
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo 'register/selectCities'; ?>",
          method: 'POST',
          data: {fk_country_id:countryid, _token:token,fk_city_id:cityid},
          success: function(data) {
            $("select[name='fk_city_id'").html('');
            $("select[name='fk_city_id'").html(data.options);
            }
      });
  }
  function getArea(cityid,areaid='') {
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo 'register/selectAreas'; ?>",
          method: 'POST',
          data: {fk_city_id:cityid, _token:token,fk_area_id:areaid},
          success: function(data) {
            $("select[name='fk_area_id'").html('');
            $("select[name='fk_area_id'").html(data.options);
            }
      });
  }

</script> 
<script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyCb8mnr3T1fcU8UgpCWylaH3rqfVdBsPbk&sensor=false&libraries=places'></script> 
<script src="{{ URL::asset('front_end/js/locationpicker.jquery.js') }}"></script> 
<script>
function updateControls(addressComponents) {
  $('#country').val(addressComponents.country);
}
initMap();
function initMap(lat='',lot=''){
  if(isNaN(lat)) lat=25.271452;
  if(isNaN(lot)) lot=55.3244922;
  $('#map').locationpicker({
    location: {
      latitude:lat,
      longitude:lot 
    },
    radius: 300,
    zoom: 15,
    onchanged: function (currentLocation, radius, isMarkerDropped) {
      var addressComponents = $(this).locationpicker('map').location.addressComponents;
      updateControls(addressComponents);
    },
    inputBinding: {
      latitudeInput: $('#latitude'),
      longitudeInput: $('#longitude'),
      radiusInput: $('#us3-radius'),
      locationNameInput: $('#map_address')
    },
    enableAutocomplete: true,
    oninitialized: function (component) {
      var addressComponents = $(component).locationpicker('map').location.addressComponents;
      updateControls(addressComponents);
    }
  });
}

// Get Current location //
$(document).on('click','.get-current-location',function(e){
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition);
    }else{ 
        x.innerHTML = "Geolocation is not supported by this mobile.";
    }
    function showPosition(position){
        var lat=position.coords.latitude;
        var lot=position.coords.longitude;
        initMap(lat,lot);
    }
});



</script> 
</script> 
<script src="{{ URL::asset('front_end/js/prism.js') }}"></script> 
<script src="{{ URL::asset('front_end/js/intlTelInput.js') }}"></script> 
<script src="{{ URL::asset('front_end/js/defaultCountryIp.js') }}"></script>
</body>
</html>