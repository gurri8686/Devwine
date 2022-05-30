
<html>
<head>
    <title>Vendor Page</title>
    <style type="text/css">
.vendor-form{
    flex: 0 0 auto;
    width: 100%;
    display: flex;
    margin-right: auto;
    margin-left: auto;
    position: relative;
}
    </style>
</head>
<body>
    @include('includes.header')
    <div class="container">
        <div class="col-md-12 vendor-form">
            <div class="col-md-4">
                <form action="{{route('regiter.form')}}" method="POST">
                    @csrf
                    <h2 >Wine Industry Vendor</h2>

                    <div class="form-group">
                    <label for="">Company Name</label>
                        <input type="text" class="form-control required" id="WineCompanyName" name="company_name" placeholder="Company Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Company Address</label>
                        <input type="text" class="form-control" name="company_add" id="WineCompanyAdd" placeholder="Company Address" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Company Phone</label>
                        <input type="text" class="form-control" id="WineCompanyPhone" name="company_phone" placeholder="Company Phone" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Website Url</label>
                        <input type="text" class="form-control" id="WineWebsiteUrl" name="company_website_url" placeholder="Website Url" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Social Media Handles</label>
                        <input type="text" class="form-control" id="WineSocialMedia" name="social_media" 
                            placeholder="Social Media Handles - Facebook | Instagram | Twitter | LinkedIn" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Contact Name</label>
                        <input type="text" class="form-control" name="contact_name" id="WineContactName" placeholder="Contact Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Contact Phone</label>
                        <input type="text" class="form-control" name="contact_phone" id="WineContactPhone" placeholder="Contact Phone" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Contact E-mail</label>
                        <input type="email" name="contact_email" class="form-control" id="WineContactEmail" placeholder="Contact Email" value="">
                    </div>
                    <div class="form-group">
                        <label for="">Describe Your Winery</label>
                        <input type="text" class="form-control" name="describe_winery" id="WineDescription" placeholder="Describe Winery " value="">
                    </div>
                    <button class="btn btn-primary btn-submit">Submit Application</button>
                </form>
            </div>
            <div class="col-md-4">
                <!-- Register Form for excursion vendor -->

                <form action="{{route('excursion.form')}}" method="POST">
				 @csrf
                    <h2>Excursion Vendor</h2>    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Name</label>
                        <input type="text" class="form-control" id="CompanyName" name="excursion_company_name" placeholder="Company Name" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Address</label>
                        <input type="text" class="form-control" id="CompanyName" placeholder="Company Address" name="excursion_company_address" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Phone</label>
                        <input type="text" class="form-control" id="CompanyPhone" name="excursion_company_phone" placeholder="Company Phone" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Website Url</label>
                        <input type="text" class="form-control" id="WebsiteUrl" name="excursion_website_url" placeholder="Website Url" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Social Media Handles</label>
                        <input type="text" class="form-control" id="SocialMedia"
                            placeholder="Social Media Handles - Facebook | Instagram | Twitter | LinkedIn" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact Name</label>
                        <input type="text" class="form-control" id="ContactName" name="excursion_contact_name" placeholder="Contact Name" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact Phone</label>
                        <input type="text" class="form-control" id="ContactPhone" name="excursion_contact_phone_no" placeholder="Contact Phone" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact E-mail</label>
                        <input type="email" class="form-control" id="ContactPhone" placeholder="Contact Email" name="excursion_contact_email" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Describe Your Winery</label>
                        <input type="text" class="form-control" id="ContactPhone" name="excursion_description" placeholder="Describe Your Winery" value="" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
            </div>
			  
			
            <div class="col-md-4">
                <form  action="{{route('accomodation.form')}}" method="POST">
				@csrf
                    <h2>Accomodation Vendor</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Name</label>
                        <input type="text" class="form-control" id="CompanyName" name="accom_company_name" placeholder="Company Name" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Address</label>
                        <input type="text" class="form-control" id="CompanyAdd" name="accom_company_add" placeholder="Company Name" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Phone</label>
                        <input type="text" class="form-control" id="CompanyPhone" name="accom_company_phone" placeholder="Company Phone" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Website Url</label>
                        <input type="text" class="form-control" id="WebsiteUrl" name="accom_company_website_url" plname="accom_company_website_url"aceholder="Website Url" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Social Media Handles</label>
                        <input type="text" class="form-control" id="SocialMedia"
                            placeholder="Social Media Handles - Facebook | Instagram | Twitter | LinkedIn" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact Name</label>
                        <input type="text" class="form-control" id="ContactName" name="accom_contact_name" placeholder="Contact Name" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact Phone</label>
                        <input type="text" class="form-control" id="ContactPhone" name="accom_company_phone" placeholder="Contact Phone" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact E-mail</label>
                        <input type="email" class="form-control" id="ContactPhone" name="accom_company_email" placeholder="Contact E-mail" value=""
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Describe Your Winery</label>
                        <input type="email" class="form-control" id="ContactPhone" name="accom_description" placeholder="Contact Phone" value=""
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
            </div>
        </div>
    </div>
	@include('includes.footer')
</body>

</html>