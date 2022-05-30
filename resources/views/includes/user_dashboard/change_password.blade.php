

       
            <div class="card border-0">
                <!--div class="card-header">Laravel - Change Password with Current Password Validation Example - ItSolutionStuff.com</div-->
  
                <div class="card-body">
                    <form method="" id="change_password">
                        <div id="change_pass" class="alert alert-success change_pass" style="display:none;"></div> 
                        @csrf 
   
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
  
                        <div class="form-group row">
                            <!--label for="password" class="col-md-12 col-form-label text-md-right">Current Password</label-->
  
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password" placeholder="Current Password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <!--label for="password" class="col-md-12 col-form-label text-md-right">New Password</label-->
  
                            <div class="col-md-12">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password" placeholder="New Password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <!--label for="password" class="col-md-12 col-form-label text-md-right">New Confirm Password</label-->
    
                            <div class="col-md-12">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password" placeholder="New Confirm Password">
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      
