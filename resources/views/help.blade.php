@extends('layouts.app')
@section('content')


        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <!-- <hr class="section-heading-spacer"> -->
                    <div class="clearfix"></div>
                    <h2 class="section-heading"> Help </h2>
                    <p class="lead"> 
						<p style="text-align: justify;">After getting to the home page of our website, you will be able to click to view Home, About us and you can contact us for any inquiries.to proceed to other pages, click on the <a href ="index.php">Get Started</a>button that will direct you to the login page.</p>						
                        <p style="text-align: justify;">On this page you must enter valid user details to login to your account access the services offered.</p>                        
                        <h3 style="text-align: justify;">To Register</h3>
                        <p style="text-align: justify;">If you are a first time user, click the register link to direct you to the register page, where you fill in every field mentioned.</p>
                        <h3 style="text-align: justify;">Creating a post</h3>
                        <p style="text-align: justify;">To create a post,you must login to your account first then click the <a href="{{ url('/create') }}"><button class="btn btn-primary btn-sm">Create Post</button></a> and fill in the required details, then click the submit button, and you are good to go!</p>
                        <h4 style="text-align: justify;">Security</h4>
                        <p style="text-align: justify;">When you are done, you must logout from your account to secure your account. For security purposes you should change your password frequently. You are also advised not to share your password.</p>      
                        
                        
					
                </div>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/images.jpg" alt="">
                </div>
            </div>

        </div>
@endsection

        <!-- </div> -->