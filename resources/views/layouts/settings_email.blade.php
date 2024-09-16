@extends('layouts.app')

@section('styles')
<style>
/*Main page style by message*/

@import url(http://fonts.googleapis.com/css?family=Open+Sans);

:root{
		--primary-color: #091429;
		--secondary-color: #0ABAB5;
		--dark-color: #262626;
		--light-color: #B1B1B1;
}


	 /****************************/
	/*------- main styles ------*/
 /****************************/


.text-primary{
		color: var(--primary-color) !important;
}
.text-secondary{
		color: var(--secondary-color) !important;
}
.text-dark{
		color: var(--dark-color) !important;
}
.text-light{
		color: var(--light-color) !important;
}
.bg-primary{
		background-color: var(--primary-color) !important;
}
.bg-secondary{
		background-color: var(--secondary-color) !important;
}
.bg-light{
		background-color: var(--light-color) !important;
}
.bg-dark{
		background-color: var(--dark-color) !important;
}
.btn{
		border: none !important;
		display: inline-block;
		position: relative;
		overflow: hidden;
		transition: all ease-in-out .5s;
}
.btn::after {
		content: "";
		display: block;
		position: absolute;
		top: 0;
		left: 25%;
		height: 100%;
		width: 40%;
		background-color: #000;
		border-radius: 50%;
		opacity: 0;
		pointer-events: none;
		transition: all ease-in-out 1s;
		transform: scale(5, 5);
}
.btn:active::after {
		padding: 0;
		margin: 0;
		opacity: .2;
		transition: 0s;
		transform: scale(0, 0);
}
.btn-primary{
		background-color: var(--primary-color) !important;
}
.btn-secondary{
		background-color: var(--secondary-color) !important;
}
.btn-primary-outline{
		background-color: transparent !important;
		color: var(--primary-color)  !important;
		border: 1px solid var(--primary-color)  !important;
}
.btn-secondary-outline{
		background-color: transparent !important;
		color: var(--secondary-color)  !important;
		border: 2px solid var(--secondary-color)  !important;
}
.btn-primary:hover, .btn-secondary:hover, .btn-primary-outline:hover, .btn-secondary-secondary:hover{
		border-color: inherit !important;
		opacity: 0.8 !important;
}

/*------Nav bar---------*/
#pageNav{
		min-height: 50px;
}

.topNavbarDashboardButton {
		background: none !important;
		border: 0px;
		margin-left: 10px
}

.topNavbarDashboardButton:hover {
		background: #F5F5F5 !important;
		border: 0px;
		margin-left: 10px
}


a,
a:hover,
a:focus {
	color: inherit;
	text-decoration: none;
	transition: all 0.3s;
}
.navbar {
	padding-top: 0px;
	padding-bottom: 0px;
	background-color: #fff;
	border: none;
	border-radius: 0;
	margin-bottom: 10px;
	box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}
.navbar-btn {
	box-shadow: none;
	outline: none !important;
	border: none;
}
.navbar-nav .nav-item .nav-link:hover{
	transition: 0.25s;
	background-color: #ecf3ff;
}
.line {
	width: 100%;
	height: 1px;
	border-bottom: 1px dashed #ddd;
	margin: 40px 0;
}

.wrapper #content{

}
/* ---------------------------------------------------
		SIDEBAR STYLE
----------------------------------------------------- */
.wrapper {
	display: flex;
	width: 100%;
	align-items: stretch;
	perspective: 1500px;
}
#sidebar {
	min-width: 250px;
	max-width: 250px;
	background: var(--primary-color);
	color: #fff;
	transition: all 0.6s cubic-bezier(0.945, 0.020, 0.270, 0.665);
	transform-origin: bottom left;
}
#sidebar.active {
	margin-left: -250px;
	transform: rotateY(100deg);
}
#sidebar .sidebar-header {
	padding: 20px;
	background: var(--primary-color);
}
#sidebar ul.components {
	padding: 20px 0;
	border-bottom: 1px solid var(--primary-color);
}
#sidebar ul p {
	color: #fff;
	padding: 10px;
}
#sidebar ul li a {
	padding: 10px;
	font-size: 1em;
	font-weight: 600;
	display: block;
	transition: 0.4;
}
#sidebar ul li a:hover {
	color: #ffffff;
	background: rgba(19, 41, 82, 1);
}
#sidebar ul li a img {
		margin-top: -4px !important;
		margin-left: 4px;
		margin-right: 4px;
}
#sidebar.active ul li a span {
		vertical-align: text-bottom !important;
}
#sidebar ul li.active > a {
	color: #fff;
	background: rgba(19, 41, 82, 1);
}
a[data-toggle="collapse"] {
	position: relative;
}
.dropdown-toggle::after {
	display: block;
	position: absolute;
	top: 50%;
	right: 20px;
	transform: translateY(-50%);
}
ul ul a {
	font-size: 0.9em !important;
	padding-left: 30px !important;
	background: rgba(19, 41, 82, 1);;
}
ul.CTAs {
	padding: 20px;
}
ul.CTAs a {
	text-align: center;
	font-size: 0.9em !important;
	display: block;
	border-radius: 5px;
	margin-bottom: 5px;
}
a.download {
	background: #fff;
	color: #7386D5;
}
a.article,
a.article:hover {
	background: rgba(19, 41, 82, 1) !important;
	color: #fff !important;
}
/* ---------------------------------------------------
		CONTENT STYLE
----------------------------------------------------- */
#content {
	width: 100%;
	min-height: 100vh;
	transition: all 0.3s;
}
#sidebarCollapse {
	width: 40px;
	height: 40px;
	background: #f5f5f5;
	cursor: pointer;
}
#sidebarCollapse span {
	width: 80%;
	height: 2px;
	margin: 0 auto;
	display: block;
	background: #555;
	transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
	transition-delay: 0.2s;
}
#sidebarCollapse span:first-of-type {
	transform: rotate(45deg) translate(2px, 2px);
}
#sidebarCollapse span:nth-of-type(2) {
	opacity: 0;
}
#sidebarCollapse span:last-of-type {
	transform: rotate(-45deg) translate(1px, -1px);
}
#sidebarCollapse.active span {
	transform: none;
	opacity: 1;
	margin: 5px auto;
}

.alert.alert-primary.py-0.px-2.small.m-0.pending{
		color: #F67A06;
		font-weight: bold;
		background-color: rgba(201, 133, 70,0.3);
		border-color: rgba(201, 133, 70,0.3);
}

.alert.alert-primary.py-0.px-2.small.m-0.active{
		color: #179615;
		font-weight: bold;
		background-color: #76D874;
		border-color:  #76D874;
}

.formsContainer {
		max-width: 900px;
}

#updateButton {
		background-color: #0ABAB5 !important;
		min-width: 150px;
}

.settingsNavDiv {
		max-width: 270px;
		min-width: 270px;
		margin-right: 20px;
		margin-bottom: 30px;
		margin-right: auto;
		margin-left: auto;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		
}

.settingsNavDiv a:hover {
		color: #0ABAB5;
}

.settingsNavDivImg {
		width: 100%;
		background-color: #091429;
		height: 50px;
		border-radius: 4px 4px 0px 0px;
}

#addressSettingToggle > a[aria-expanded="true"] > span.up {
		display: inline;
}

#addressSettingToggle > a[aria-expanded="true"] > span.down {
		display: none;
}

#addressSettingToggle > a[aria-expanded="false"] > span.up {
		display: none;
}

#addressSettingToggle > a[aria-expanded="false"] > span.down {
		display: inline;
}



#changePasswordToggle > a[aria-expanded="true"] > span.up {
		display: inline;
}

#changePasswordToggle > a[aria-expanded="true"] > span.down {
		display: none;
}

#changePasswordToggle > a[aria-expanded="false"] > span.up {
		display: none;
}

#changePasswordToggle > a[aria-expanded="false"] > span.down {
		display: inline;
}

#userInfoForm {
		border: px solid #C4C4C4;
}

#userInfoForm textArea {
		font-size: 0.85em;
}

#defaultAutoMessage label {
		font-size: 0.85em;
}

#overallMainContentWrapper {
		max-width: 1200px
}

/* ---------------------------------------------------
		MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
	#sidebar {
		margin-left: -250px;
		transform: rotateY(90deg);
	}
	#sidebar.active {
		margin-left: 0;
		transform: none;
	}
	#sidebarCollapse span:first-of-type,
	#sidebarCollapse span:nth-of-type(2),
	#sidebarCollapse span:last-of-type {
		transform: none;
		opacity: 1;
		margin: 5px auto;
	}
	#sidebarCollapse.active span {
		margin: 0 auto;
	}
	#sidebarCollapse.active span:first-of-type {
		transform: rotate(45deg) translate(2px, 2px);
	}
	#sidebarCollapse.active span:nth-of-type(2) {
		opacity: 0;
	}
	#sidebarCollapse.active span:last-of-type {
		transform: rotate(-45deg) translate(1px, -1px);
	}
}



/* ---------------------------------------------------
		Table
----------------------------------------------------- */
/*
table.project-table{
	border-collapse:separate; 
	border-spacing: 0 1em;
}

table.project-table tbody tr{
	padding-bottom: 10px !important;
}

table.project-table tbody tr td span.text-small{
	font-size: 8px;
} 

table.project-table tbody tr td, table.project-table thead tr th {
		max-width: 200px;
		overflow: hidden;
		text-overflow: ellipsis;
		white-space: nowrap;
}

.dropleft .dropdown-toggle::before{
	display: none;
}
*/

/*------------floating button---------*/
</style>
@endsection


@section('content')
<nav class="navbar navbar-expand-lg navbar-light shadow-sm container-fluid" id="pageNav">
	<div class="container-fluid">
			<div class="topNavbarDashboardButton nav-item" style="margin-left: -8px"><a href="/dashboard" class="nav-link"><i class="fas fa-chevron-left" style="opacity: 0.54;font-size: 12px"></i><span style="font-weight: bold">&nbsp; DASHBOARD</span></a></div>
			
			<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fas fa-align-justify"></i>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="nav navbar-nav ml-auto">
						 <form class="form-inline my-2 ml-3 mr-4">
									<div class="input-group">
											<div class="input-group-prepend">
													<span class="input-group-text border-right-0 bg-white" id="basic-addon1"><i class="fas fa-search"></i></span>
											</div>
											<input class="form-control border border-left-0 searchBox" type="text" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
									</div>
							</form>
							<li class="nav-item active">
									<a class="nav-link p-3" href="/contact"><img src="https://lancer-app.000webhostapp.com/images/svg/help.svg" height="25" width="auto"> <span class="d-lg-none d-xl-none"> You need help?</span></a>
							</li>
							<li class="nav-item">
									<a class="nav-link border-left p-3" href="#"><img src="https://lancer-app.000webhostapp.com/images/svg/alarm-clock.svg" height="25" width="auto"> <span class="d-lg-none d-xl-none"> Reminder</span></a>
							</li>
							<li class="nav-item">
									<a class="nav-link border-left p-3" href="/notifications"><img src="https://lancer-app.000webhostapp.com/images/svg/notification.svg" height="25" width="auto"> <span class="d-lg-none d-xl-none"> Notification</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link border-left p-3" href="/dashboard/profile">
										@if(Auth::user()->profile_picture !== 'user-default.png')
										<img  src="{{ asset(Auth::user()->profile_picture) }}" style="width: 30px; height: 30px; border-radius: 10%; pointer: finger;" alt="Profile Image">
										@endif
										@if(Auth::user()->profile_picture == 'user-default.png')
										<img  src="{{ asset('images/user-default.jpg') }}" style="width: 30px; height: 30px; border-radius: 10%; pointer: finger;" alt="Profile Image">
										@endif
										</a>
										<!-- <a class="nav-link border-left p-3" href="/dashboard/profile/settings"><span class="border rounded-circle p-1 font-weight-bold">
												{{strtoupper(explode(" ", auth()->user()->name)[0][0])}}
										</span> <span class="d-lg-none d-xl-none"> Hello {{explode(" ", auth()->user()->name)[0]}}</span></a> -->
								</li>
					</ul>
			</div>
	</div>
</nav>

@yield('main-content')

 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <!-- Popper.JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 <!-- Bootstrap JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
 <script type="text/javascript">
		 $(document).ready(function () {
				 $('#sidebarCollapse').on('click', function () {
						 $('#sidebar').toggleClass('active');
						 $(this).toggleClass('active');
				 });

				 const searchBox = document.querySelector('.searchBox');
				 const status = document.querySelector('.status');
				 const filterNames =()=>{
						 const titles = document.querySelectorAll('.titles');
						 const searchBoxValue = searchBox.value.toLowerCase();
				 
						 titles.forEach(title=>{
								 if(!title.textContent.toLowerCase().includes(searchBoxValue)){
										 title.parentElement.style.display = "none"
								 }else{
										 title.parentElement.style.display = "";
								 }
						 })
				 }

				 const filterStatus =()=>{
						 const statusText = document.querySelectorAll('.alert-primary')
						 
						 statusText.forEach(text => {
								 if(status.value !== 'All'){
										 if(status.value === text.textContent){
												 text.parentElement.parentElement.style.display = ""
										 }else{
												 text.parentElement.parentElement.style.display = "none"
										 }
									}else{
										 text.parentElement.parentElement.style.display = ""
									}
						 })  
				 }

				 searchBox.addEventListener('keyup', filterNames);

				 status.addEventListener('change', filterStatus);
						
		 });
 </script>
@endsection
