@extends('freelancer.header')



<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">		
	<section class="das">
<div class="container"  style="background: #fff; padding:50px;">
<div class="row"  style="border:1px solid silver;border-radius: 25px;text-align:center;width:100%;font-size:100%;padding-top:0px;padding-left:0px;padding-right:0px;">
<div class="col-md-8">

@foreach ($preview_project as $project)
 

<div class="form-group" style="font-size:25px";>
   <p><h2 style="font-size: 30px;
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
  
        </form>
       



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
        <button type="button" class="btn btn-success" style="width:200px;">Submit Proposal</button>
        </div>


<div>



<style>
        .mul-select{
            width: 100%;
        }
    </style>
    <div class="container-fluid h-100 bg-light text-dark">
        <div class="row justify-content-center align-items-center">
            <h1>Select Multilpe</h1>    
        </div>
        <br>
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="form-group">
                    <select class="mul-select" multiple="true">
                        <option value="MYSQL">MYSQL</option>
                        <option value="C">C</option>
                        <option value="C++">C++</option>
                        <option value="Ruby">Ruby</option>
                        <option value="Python">Python</option>
                        <option value="Java">Java</option>
                        <option value="PHP">PHP</option>
                    </select>
                </div> 
           </div>
        </div>
    </div>
     
    <script>
        $(document).ready(function(){
            $(".mul-select").select2({
                    placeholder: "select language", //placeholder
                    tags: true,
                    tokenSeparators: ['/',',',';'," "] 
                });
            })
    </script>

</div>









  </div><!-- end of container-->  
  
</section>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->

@extends('freelancer.footer')


<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">