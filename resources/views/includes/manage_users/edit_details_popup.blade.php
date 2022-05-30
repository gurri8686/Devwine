<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Role</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="gust-reward-div">
                           <form method="" id="assign_role">
                            <input type="hidden" name="id"  id="user_id">
                              <input type="hidden" name="_token" value="2BKtipOtEooPWuxv7QBSIV051xOHbc5k3CC8d796">                              <div class="row mb-3">
                                 <!-- <label for="name" class="col-md-4 col-form-label text-md-end">Name</label> -->
                                 <div class="col-lg-6">
                                    <input type="hidden" name="new_user" value="new_user">
                                    <input id="name" type="text" class="form-control" name="name" value="" autocomplete="name" placeholder="First Name">
                                    <div class="alert alert-danger firstname msg" style="display:none;"></div>
                                                                     </div>
                              <!-- <label for="name" class="col-md-4 col-form-label text-md-end">Name</label> -->
                                 <div class="col-lg-6">
                                    <input id="lastname" type="text" class="form-control " name="lastname" value="" autocomplete="lastname" placeholder="Last Name">
                                    <div class="alert alert-danger lastname msg" style="display:none;"></div>
                                                                     </div>
                              </div>
                              <div class="row mb-3">
                                 <!-- <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label> -->
                                 <div class="col-lg-12">
                                    <input id="email" type="email" class="form-control" placeholder="Email Address" name="email" value="" autocomplete="email">
                                    <div class="alert alert-danger email msg" style="display:none;"></div>
                                                                     </div>
                              </div>
                              <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDisabled">
                            <label class="form-check-label" for="flexRadioDisabled">
                            Super Admin
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioCheckedDisabled">
                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                            System Admin
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioCheckedDisabled">
                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                            Marketing Team
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioCheckedDisabled">
                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                            Travel Service
                            </label>
                            </div>
                                 <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioCheckedDisabled">
                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                            Registered User Admin
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioCheckedDisabled">
                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                            Registered User Admin
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioCheckedDisabled">
                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                            Suspend
                            </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                           </form>
                         </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $("#assign_role").submit(function(ee){
    var form = $('#assign_role')[0]; 
    var formValues = new FormData(form);
    
    $.ajax({
           type:'POST',
           url:"{{ route('assign_role.form') }}",
            data:formValues, 
            contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
            processData: false, 
            success:function(data){
           }                        
        });    

        ee.preventDefault();  
        return false;   
    });  
</script>