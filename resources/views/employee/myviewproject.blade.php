@extends('employee.header')
<!--**********************************
	Content body start
***********************************-->

<div class="content-body">
<!-- row -->
<div class="container-fluid">		




<section class="das">
<div class="container" style="background: #fff; padding:50px;">
<div class="row" style="border:1px solid silver;border-radius: 25px;text-align:center;width:100%;font-size:100%;padding-top:0px;padding-left:0px;padding-right:0px;">
<div class="col-md-8">

@foreach ($preview_project as $project)
 

<div class="form-group" style="font-size:25px";>
   <p>
   
   <h2 style="font-size: 30px;
    line-height: var(--line-height-h2);
    font-weight: var(--heading-weight);
    letter-spacing: var(--heading-letter-spacing-h2);">{{  $project->pname }}</h2>
    
   </p>
   
  

  </div>

  <div class="form-group">
   <p> {{  $project->pcat }}
   </p>
   
   <p><i class="fa fa-bullhorn" aria-hidden="true"></i>&nbsp;&nbsp; {{$project->dis}}
   </p>
   <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp; India</p>
   
  <hr>
 
 

  

  <div class="col-12">
  

  <div class="row">
  <div class="col-4" >

  <p style="border: 1px solid;
    padding: 13px;
    border-radius: 60px;
    background-color: #4f5ca4;
    color: #fff;">
   30 hrs/week Hourly
  </p>
  </div>

  <div class="col-4">

  <p style="border: 1px solid;
    padding: 13px;
    border-radius: 60px;
    background-color: #4f5ca4;
    color: #fff;">
    Less than a month
  </p>


  
  </div>

  <div class="col-4">

  <p style="border: 1px solid;
    padding: 13px;
    border-radius: 60px;
    background-color: #4f5ca4;
    color: #fff;">
  Intermediate
  </p>

  
  
  </div>
  
  
  
  </div>
  
  
  </div>

<br>

<hr>
<h3>Skills and Expertise</h3>
<br>
<a href="" style="border: 1px solid;padding: 6px;font-size: 13px;border-radius: 80px;background-color: #F2F2F2;color: #333;"  class="cfe-ui-job-skill up-skill-badge m-0-left m-0-top m-xs-bottom">Frontend Development</a>&nbsp;&nbsp;
<a href="" style="border: 1px solid;padding: 6px;font-size: 13px;border-radius: 80px;background-color: #F2F2F2;color: #333;"   class="cfe-ui-job-skill up-skill-badge m-0-left m-0-top m-xs-bottom">SEO expert</a>&nbsp;&nbsp;
<a href="" style="border: 1px solid;padding: 6px;font-size: 13px;border-radius: 80px;background-color: #F2F2F2;color: #333;"  class="cfe-ui-job-skill up-skill-badge m-0-left m-0-top m-xs-bottom">Backend Development</a>&nbsp;&nbsp;
<a href="" style="border: 1px solid;padding: 6px;font-size: 13px;border-radius: 80px;background-color: #F2F2F2;color: #333;"  class="cfe-ui-job-skill up-skill-badge m-0-left m-0-top m-xs-bottom">Full stack Developer</a>&nbsp;&nbsp;

<div class="form-group" style="font-size:25px,padding-top:50px";>
<br>

   
  </div>



  </label>

  @endforeach
  


  
</div>



        </div><!-- end of row-->   
        
        <div class="col-md-4" style="border-left: 1px solid silver;height: 600px;right: 10px;padding-top:10px;" >

       
     <b>
        <h7>
        About the client</h7></b>
 <br> <p>Payment is verified</p>
<hr >
 <p><b>United States</b></p>
 <p>Atlanta 02:35 pm
</p>
<hr>
<p><b>445 jobs posted</b></p>
 <p>8% hire rate, 20 open jobs
</p>
<p><b>37.09 /hr avg hourly rate paid</b></p>
 <p>4 hours
</p>
<hr>

<div>



  </div><!-- end of container-->  
  
</section>









<div class="container-fluid">
<div class="d-flex flex-wrap mb-4 align-items-center search-filter">
<div class="mr-auto mb-2 pr-2">
<h6 class="text-black fs-16 font-w600 mb-1">All the application proposal </h6>
<span class="fs-14">Based your preferences</span>
</div>
<!--
    
    <div class="custom-control check-switch custom-checkbox mr-4 mb-2">
<input type="checkbox" class="custom-control-input" id="customCheck9">
<label class="custom-control-label" for="customCheck9">Fulltime</label>
</div>
<div class="custom-control check-switch custom-checkbox mr-5 mb-2">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Freelance</label>
</div>
<div class="custom-control custom-switch toggle-switch text-right mr-4 mb-2">
<input type="checkbox" class="custom-control-input" id="customSwitch11">
<label class="custom-control-label" for="customSwitch11">Details</label>
</div>
<div class="custom-control custom-switch toggle-switch text-right mr-5 mb-2">
<input type="checkbox" class="custom-control-input" id="customSwitch12">
<label class="custom-control-label" for="customSwitch12">Salary</label>
</div>

-->

<a href="javascript:void(0);" class="mr-3 mb-2">
<span class="border border-primary rounded-circle d-block sharp-lg">
    <svg class="scale5" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top:15px;">
        <path d="M6 7.5H3C2.17275 7.5 1.5 6.82687 1.5 6V3C1.5 2.17313 2.17275 1.5 3 1.5H6C6.82725 1.5 7.5 2.17313 7.5 3V6C7.5 6.82687 6.82725 7.5 6 7.5ZM3 3V6H6.00113L6 3H3ZM22.5 4.5C22.5 4.08544 22.1642 3.75 21.75 3.75H9.75C9.33581 3.75 9 4.08544 9 4.5C9 4.91456 9.33581 5.25 9.75 5.25H21.75C22.1642 5.25 22.5 4.91456 22.5 4.5ZM6 15H3C2.17275 15 1.5 14.3269 1.5 13.5V10.5C1.5 9.67313 2.17275 9 3 9H6C6.82725 9 7.5 9.67313 7.5 10.5V13.5C7.5 14.3269 6.82725 15 6 15ZM3 10.5V13.5H6.00113L6 10.5H3ZM22.5 12C22.5 11.5854 22.1642 11.25 21.75 11.25H9.75C9.33581 11.25 9 11.5854 9 12C9 12.4146 9.33581 12.75 9.75 12.75H21.75C22.1642 12.75 22.5 12.4146 22.5 12ZM6 22.5H3C2.17275 22.5 1.5 21.8269 1.5 21V18C1.5 17.1731 2.17275 16.5 3 16.5H6C6.82725 16.5 7.5 17.1731 7.5 18V21C7.5 21.8269 6.82725 22.5 6 22.5ZM3 18V21H6.00113L6 18H3ZM22.5 19.5C22.5 19.0854 22.1642 18.75 21.75 18.75H9.75C9.33581 18.75 9 19.0854 9 19.5C9 19.9146 9.33581 20.25 9.75 20.25H21.75C22.1642 20.25 22.5 19.9146 22.5 19.5Z" fill="#40189D"></path>
    </svg>
</span>
</a>
<a href="javascript:void(0);" class="mb-2">
<span class="bg-primary rounded-circle d-block sharp-lg">
    <svg class="scale5" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top:15px;">
        <path d="M10 1H2C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H10C10.2652 11 10.5196 10.8946 10.7071 10.7071C10.8946 10.5196 11 10.2652 11 10V2C11 1.73478 10.8946 1.48043 10.7071 1.29289C10.5196 1.10536 10.2652 1 10 1ZM9 9H3V3H9V9Z" fill="white"></path>
        <path d="M22 1H14C13.7348 1 13.4804 1.10536 13.2929 1.29289C13.1054 1.48043 13 1.73478 13 2V10C13 10.2652 13.1054 10.5196 13.2929 10.7071C13.4804 10.8946 13.7348 11 14 11H22C22.2652 11 22.5196 10.8946 22.7071 10.7071C22.8946 10.5196 23 10.2652 23 10V2C23 1.73478 22.8946 1.48043 22.7071 1.29289C22.5196 1.10536 22.2652 1 22 1ZM21 9H15V3H21V9Z" fill="white"></path>
        <path d="M10 13H2C1.73478 13 1.48043 13.1054 1.29289 13.2929C1.10536 13.4804 1 13.7348 1 14V22C1 22.2652 1.10536 22.5196 1.29289 22.7071C1.48043 22.8946 1.73478 23 2 23H10C10.2652 23 10.5196 22.8946 10.7071 22.7071C10.8946 22.5196 11 22.2652 11 22V14C11 13.7348 10.8946 13.4804 10.7071 13.2929C10.5196 13.1054 10.2652 13 10 13ZM9 21H3V15H9V21Z" fill="white"></path>
        <path d="M22 13H14C13.7348 13 13.4804 13.1054 13.2929 13.2929C13.1054 13.4804 13 13.7348 13 14V22C13 22.2652 13.1054 22.5196 13.2929 22.7071C13.4804 22.8946 13.7348 23 14 23H22C22.2652 23 22.5196 22.8946 22.7071 22.7071C22.8946 22.5196 23 22.2652 23 22V14C23 13.7348 22.8946 13.4804 22.7071 13.2929C22.5196 13.1054 22.2652 13 22 13ZM21 21H15V15H21V21Z" fill="white"></path>
    </svg>
</span>
</a>
</div>
<div class="row">
<div class="col-xl-12" style="   padding-left: 100px;">
<div class="table-responsive">
    <div id="example5_wrapper" class="dataTables_wrapper no-footer">
    













<!--
<tr>
<td>
    
</td>
<td>#APL-0002</td>
<td>June 1, 2020, 08:22 AM</td>
<td>
    <div class="media">
        <svg class="mr-3" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#D3D3D3"/>
            <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#4B58CF"/>
            <path d="M12.889 12.8887C14.4642 11.3134 16.3344 10.0639 18.3926 9.21132C20.4508 8.35878 22.6567 7.91999 24.8845 7.91999C27.1123 7.91999 29.3183 8.35878 31.3765 9.21132C33.4347 10.0639 35.3048 11.3134 36.8801 12.8887C38.4554 14.464 39.7049 16.3341 40.5575 18.3923C41.41 20.4505 41.8488 22.6565 41.8488 24.8843C41.8488 27.1121 41.41 29.318 40.5575 31.3762C39.7049 33.4344 38.4554 35.3046 36.8801 36.8798L30.8823 30.8821C31.6699 30.0944 32.2947 29.1594 32.721 28.1303C33.1473 27.1011 33.3667 25.9982 33.3667 24.8843C33.3667 23.7704 33.1473 22.6674 32.721 21.6383C32.2947 20.6092 31.6699 19.6741 30.8823 18.8865C30.0947 18.0989 29.1596 17.4741 28.1305 17.0478C27.1014 16.6215 25.9984 16.4021 24.8845 16.4021C23.7706 16.4021 22.6676 16.6215 21.6385 17.0478C20.6094 17.4741 19.6744 18.0989 18.8867 18.8865L12.889 12.8887Z" fill="#8FD7FF"/>
            <path d="M12.889 36.8798C9.70754 33.6984 7.92024 29.3835 7.92024 24.8843C7.92023 20.385 9.70754 16.0701 12.889 12.8887C16.0704 9.70727 20.3853 7.91997 24.8845 7.91996C29.3837 7.91996 33.6987 9.70726 36.8801 12.8887L30.8823 18.8865C29.2916 17.2958 27.1341 16.4021 24.8845 16.4021C22.6349 16.4021 20.4774 17.2958 18.8867 18.8865C17.296 20.4772 16.4024 22.6346 16.4024 24.8843C16.4024 27.1339 17.296 29.2913 18.8867 30.882L12.889 36.8798Z" fill="white"/>
        </svg>
        <div class="media-body text-nowrap">
            <h6 class="text-black font-w600 fs-16 mb-0">Funk Inc.</h6>
            <span class="fs-14">IT Department</span>
        </div>
    </div>
</td>
<td>PART TIME</td>

<td>
    <div class="d-flex">
        <a class="contact-icon"  href="#"><i class="las la-envelope" style="margin-top:10px;" ></i></a>
    </div>
</td>
<td>
    <div class="d-flex align-items-center">
        <a class="btn rounded btn-outline-warning mr-3 ml-auto" href="#">On-Hold</a>
        <div class="dropdown float-right custom-dropdown mb-0">
            <div class="" data-toggle="dropdown">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
            </div>
        </div>
    </div>
</td>
</tr>
<tr>
<td>
    
</td>
<td>#APL-0003</td>
<td>June 1, 2020, 08:22 AM</td>
<td>
    <div class="media">
        <svg class="mr-3" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#D3D3D3"/>
            <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#F0780A"/>
            <path d="M12.8885 12.8887C14.4638 11.3134 16.3339 10.0639 18.3921 9.21132C20.4503 8.35878 22.6563 7.91999 24.884 7.91999C27.1118 7.91999 29.3178 8.35878 31.376 9.21132C33.4342 10.0639 35.3043 11.3134 36.8796 12.8887C38.4549 14.464 39.7045 16.3341 40.557 18.3923C41.4095 20.4505 41.8483 22.6565 41.8483 24.8843C41.8483 27.1121 41.4095 29.318 40.557 31.3762C39.7045 33.4344 38.4549 35.3046 36.8796 36.8798L30.8818 30.8821C31.6695 30.0944 32.2942 29.1594 32.7205 28.1303C33.1468 27.1011 33.3662 25.9982 33.3662 24.8843C33.3662 23.7704 33.1468 22.6674 32.7205 21.6383C32.2942 20.6092 31.6695 19.6741 30.8818 18.8865C30.0942 18.0989 29.1591 17.4741 28.13 17.0478C27.1009 16.6215 25.9979 16.4021 24.884 16.4021C23.7701 16.4021 22.6672 16.6215 21.6381 17.0478C20.609 17.4741 19.6739 18.0989 18.8863 18.8865L12.8885 12.8887Z" fill="white"/>
            <path d="M12.8885 36.8798C9.70705 33.6984 7.91975 29.3835 7.91975 24.8843C7.91975 20.385 9.70705 16.0701 12.8885 12.8887C16.0699 9.70727 20.3848 7.91997 24.884 7.91996C29.3832 7.91996 33.6982 9.70726 36.8796 12.8887L30.8818 18.8865C29.2911 17.2958 27.1336 16.4021 24.884 16.4021C22.6344 16.4021 20.477 17.2958 18.8863 18.8865C17.2955 20.4772 16.4019 22.6346 16.4019 24.8843C16.4019 27.1339 17.2955 29.2913 18.8863 30.882L12.8885 36.8798Z" fill="white"/>
        </svg>
        <div class="media-body text-nowrap">
            <h6 class="text-black font-w600 fs-16 mb-0">Mosciski Inc.</h6>
            <span class="fs-14">Creative Design Agency</span>
        </div>
    </div>
</td>
<td>FREELANCE</td>

<td>
    <div class="d-flex">
        <a class="contact-icon mr-3" href="#"><i class="fa fa-phone" style="margin-top:10px;"  aria-hidden="true"></i></a>
        <a class="contact-icon"   href="#"><i class="las la-envelope" style="margin-top:10px;" ></i></a>
    </div>
</td>
<td>
    <div class="d-flex align-items-center">
        <a class="btn rounded btn-outline-dark mr-3 ml-auto" href="#">Pending</a>
        <div class="dropdown float-right custom-dropdown mb-0">
            <div class="" data-toggle="dropdown">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </div>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
            </div>
        </div>
    </div>
</td>
</tr>
<tr>
<td>
    
</td>
<td>#APL-0004</td>
<td>June 1, 2020, 08:22 AM</td>
<td>
    <div class="media">
        <svg class="mr-3" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#D3D3D3"/>
            <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#BB1D85"/>
            <path d="M12.8883 36.8797C11.313 35.3045 10.0635 33.4343 9.21092 31.3761C8.35839 29.3179 7.91959 27.112 7.91959 24.8842C7.91959 22.6564 8.35839 20.4504 9.21092 18.3922C10.0635 16.334 11.313 14.4639 12.8883 12.8886C14.4636 11.3133 16.3337 10.0638 18.3919 9.21123C20.4501 8.3587 22.6561 7.9199 24.8839 7.9199C27.1117 7.9199 29.3176 8.3587 31.3758 9.21123C33.434 10.0638 35.3042 11.3133 36.8794 12.8886L30.8817 18.8864C30.094 18.0988 29.159 17.474 28.1299 17.0477C27.1008 16.6214 25.9978 16.402 24.8839 16.402C23.77 16.402 22.667 16.6214 21.6379 17.0477C20.6088 17.474 19.6737 18.0988 18.8861 18.8864C18.0985 19.674 17.4737 20.6091 17.0474 21.6382C16.6211 22.6673 16.4017 23.7703 16.4017 24.8842C16.4017 25.9981 16.6211 27.1011 17.0474 28.1302C17.4737 29.1593 18.0985 30.0943 18.8861 30.882L12.8883 36.8797Z" fill="white"/>
            <path d="M36.8795 36.8797C33.6981 40.0612 29.3832 41.8485 24.8839 41.8485C20.3847 41.8485 16.0698 40.0612 12.8884 36.8797C9.70697 33.6983 7.91966 29.3834 7.91966 24.8842C7.91966 20.385 9.70696 16.0701 12.8884 12.8886L18.8862 18.8864C17.2955 20.4771 16.4018 22.6346 16.4018 24.8842C16.4018 27.1338 17.2955 29.2913 18.8862 30.882C20.4769 32.4727 22.6343 33.3663 24.8839 33.3663C27.1335 33.3663 29.291 32.4727 30.8817 30.882L36.8795 36.8797Z" fill="white"/>
        </svg>
        <div class="media-body text-nowrap">
            <h6 class="text-black font-w600 fs-16 mb-0">Mosciski Inc.</h6>
            <span class="fs-14">Creative Design Agency</span>
        </div>
    </div>
</td>
                <td>FREELANCE</td>
             
<td>
<div class="d-flex">
    <a class="contact-icon" href="#"><i class="fa fa-phone" style="margin-top:10px;"  aria-hidden="true"></i></a>
</div>
</td>
<td>
<div class="d-flex align-items-center">
    <a class="btn rounded btn-outline-dark mr-3 ml-auto" href="#">Pending</a>
    <div class="dropdown float-right custom-dropdown mb-0">
        <div class="" data-toggle="dropdown">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="javascript:void(0);">Details</a>
            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
        </div>
    </div>
</div>
</td>
</tr>
<tr>
<td>
<
</td>
<td>#APL-0005</td>
<td>June 1, 2020, 08:22 AM</td>
<td>
<div class="media">
    <svg class="mr-3" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#D3D3D3"/>
        <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#31B52F"/>
        <path d="M12.8885 12.8887C14.4638 11.3134 16.3339 10.0639 18.3921 9.21132C20.4503 8.35878 22.6563 7.91999 24.884 7.91999C27.1118 7.91999 29.3178 8.35878 31.376 9.21132C33.4342 10.0639 35.3043 11.3134 36.8796 12.8887C38.4549 14.464 39.7045 16.3341 40.557 18.3923C41.4095 20.4505 41.8483 22.6565 41.8483 24.8843C41.8483 27.1121 41.4095 29.318 40.557 31.3762C39.7045 33.4344 38.4549 35.3046 36.8796 36.8798L30.8818 30.8821C31.6695 30.0944 32.2942 29.1594 32.7205 28.1303C33.1468 27.1011 33.3662 25.9982 33.3662 24.8843C33.3662 23.7704 33.1468 22.6674 32.7205 21.6383C32.2942 20.6092 31.6695 19.6741 30.8818 18.8865C30.0942 18.0989 29.1591 17.4741 28.13 17.0478C27.1009 16.6215 25.9979 16.4021 24.884 16.4021C23.7701 16.4021 22.6672 16.6215 21.6381 17.0478C20.609 17.4741 19.6739 18.0989 18.8863 18.8865L12.8885 12.8887Z" fill="white"/>
        <path d="M12.8885 36.8798C9.70705 33.6984 7.91975 29.3835 7.91975 24.8843C7.91975 20.385 9.70705 16.0701 12.8885 12.8887C16.0699 9.70727 20.3848 7.91997 24.884 7.91996C29.3832 7.91996 33.6982 9.70726 36.8796 12.8887L30.8818 18.8865C29.2911 17.2958 27.1336 16.4021 24.884 16.4021C22.6344 16.4021 20.477 17.2958 18.8863 18.8865C17.2955 20.4772 16.4019 22.6346 16.4019 24.8843C16.4019 27.1339 17.2955 29.2913 18.8863 30.882L12.8885 36.8798Z" fill="white"/>
    </svg>
    <div class="media-body text-nowrap">
        <h6 class="text-black font-w600 fs-16 mb-0">Highspeed Studios</h6>
        <span class="fs-14">Creative Design Agency</span>
    </div>
</div>
</td>
<td>FULLTIME</td>

<td>
<div class="d-flex">
    <a class="contact-icon mr-3" href="#"><i class="fa fa-phone"  style="margin-top:10px;"  aria-hidden="true"></i></a>
    <a class="contact-icon" href="#"><i class="las la-envelope" style="margin-top:10px;" ></i></a>
</div>
</td>
<td>
<div class="d-flex align-items-center">
    <a class="btn rounded btn-success mr-3 ml-auto" href="#">Candidate</a>
    <div class="dropdown float-right custom-dropdown mb-0">
        <div class="" data-toggle="dropdown">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="javascript:void(0);">Details</a>
            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
        </div>
    </div>
</div>
</td>
</tr>
<tr>
                <td>
                    
                </td>
                <td>#APL-0006</td>
                <td>June 1, 2020, 08:22 AM</td>
                <td>
                    <div class="media">
                        <svg class="mr-3" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#D3D3D3"/>
                            <path d="M0 7.27273C0 3.25611 3.25611 0 7.27273 0H42.7273C46.7439 0 50 3.25611 50 7.27273V42.7273C50 46.7439 46.7439 50 42.7273 50H7.27273C3.25611 50 0 46.7439 0 42.7273V7.27273Z" fill="#515151"/>
                            <path d="M12.889 12.8887C14.4642 11.3134 16.3344 10.0638 18.3926 9.21131C20.4508 8.35877 22.6567 7.91998 24.8845 7.91998C27.1123 7.91998 29.3183 8.35878 31.3765 9.21131C33.4347 10.0638 35.3048 11.3134 36.8801 12.8887C38.4554 14.464 39.7049 16.3341 40.5575 18.3923C41.41 20.4505 41.8488 22.6565 41.8488 24.8843C41.8488 27.1121 41.41 29.318 40.5575 31.3762C39.7049 33.4344 38.4554 35.3046 36.8801 36.8798L30.8823 30.882C31.6699 30.0944 32.2947 29.1593 32.721 28.1302C33.1473 27.1011 33.3667 25.9982 33.3667 24.8843C33.3667 23.7704 33.1473 22.6674 32.721 21.6383C32.2947 20.6092 31.6699 19.6741 30.8823 18.8865C30.0947 18.0988 29.1596 17.4741 28.1305 17.0478C27.1014 16.6215 25.9984 16.4021 24.8845 16.4021C23.7706 16.4021 22.6676 16.6215 21.6385 17.0478C20.6094 17.4741 19.6744 18.0988 18.8867 18.8865L12.889 12.8887Z" fill="white"/>
                            <path d="M36.8801 12.8887C40.0615 16.0701 41.8488 20.385 41.8488 24.8842C41.8488 29.3835 40.0615 33.6984 36.8801 36.8798C33.6987 40.0612 29.3837 41.8485 24.8845 41.8485C20.3853 41.8485 16.0704 40.0612 12.889 36.8798L18.8867 30.882C20.4775 32.4727 22.6349 33.3664 24.8845 33.3664C27.1341 33.3664 29.2916 32.4727 30.8823 30.882C32.473 29.2913 33.3667 27.1339 33.3667 24.8842C33.3667 22.6346 32.473 20.4772 30.8823 18.8865L36.8801 12.8887Z" fill="white"/>
                        </svg>
                        <div class="media-body text-nowrap">
                            <h6 class="text-black font-w600 fs-16 mb-0">Funk Inc.</h6>
                            <span class="fs-14">IT Department</span>
                        </div>
                    </div>
                </td>
                <td>PART TIME</td>
           
                <td>
                    <div class="d-flex">
                        <a class="contact-icon"   href="#"><i class="fa fa-phone" style="margin-top:10px;"  aria-hidden="true"></i></a>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <a class="btn rounded btn-outline-warning mr-3 ml-auto" href="#">On-Hold</a>
                        <div class="dropdown float-right custom-dropdown mb-0">
                            <div class="" data-toggle="dropdown">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>-->
       
       
       
       
       
       <!--Table-->
<table class="table table-striped w-auto" >

<!--Table head-->
<thead>
  <tr>

    <th>Name</th>
    
    <th>Budget</th>
   
    <th>Description</th>
    <th>Cover Letter</th>
  </tr>

</thead>
<!--Table head-->

<!--Table body-->
<tbody>
  <tr class="table-info">
  
    <td>Ashish</td>
   
    <td>56Rs</td>
   
    <td style="
    width: 500px;
">
  <div class="form-group shadow-textarea">

  <textarea disabled class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..."style="height:100px;resize: none;">We just updated the name of our company and transferred to a new domain. Hoping to find an SEO expert to redirect the old links to the new site to help improve SEO</textarea>
</div>
  </td>
<td>

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Auto width -->
<button class="btn"><i class="fa fa-download"></i> Download</button>
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

</style>

</td>

  </tr>
  <tr>
    
    <td>Shivam</td>
   
    <td>25RS</td>
  
    <td style="
    width: 500px;
">
  <div class="form-group shadow-textarea">
 
  <textarea disabled class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..."style="height:100px;resize: none;">I'm looking for someone to convert an image into an HTML email.  Will need the help uploading the images to my server and then adjusting the tags to match the links accordingly.</textarea>
</div>
  </td>
  
  <td>

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Auto width -->
<button class="btn"><i class="fa fa-download"></i> Download</button>
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

</style>

</td>

  </tr>
  <tr class="table-info">
   
    <td>Shivom</td>
   
    <td>20RS</td>
    
    <td>
  <div class="form-group shadow-textarea">

  <textarea disabled class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..."style="height:100px;resize: none;">It is important that you understand that I DO NOT want all links created in one day.
I need a constant feed of links. 
</textarea>
</div>
  </td>
  <td>

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Auto width -->
<button class="btn"><i class="fa fa-download"></i> Download</button>
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

</style>

</td>
  </tr>
 
  
</tbody>
<!--Table body-->


</table>
<!--Table-->
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       </div>
</div>
</div>
</div>
</div>








	</d     iv>
</div>










<!--**********************************
	Content body end
***********************************-->
@extends('employee.footer')