@include('includes.header')
<section class="login-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="banner-text">
					<h4>My account</h4>
					<ul>
						<li><a href="#">Home<i class="fa fa-angle-double-right" aria-hidden="true"></i><span> My account</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="login-form"> 
	<div class="container"> 
<div class="row">
	<div class="col-lg-5 m-auto">
		<div class="login-form-start">
			<h4 class="login-heading">Login</h4>
			<form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Username or email address</label>
    <input type="email" class="form-control" id="email" placeholder="" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="" name="pswd">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		</div>
	</div>
</div>
	</div>
</section>