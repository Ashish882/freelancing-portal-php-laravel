
<!--@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row justify-content-center">
    <form  method="POST" action="addproject">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Project Name</label>
      <input type="text" class="form-control" name="pname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Project Category</label>
      <input type="text" class="form-control" name="pcat">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Description</label>
    <input type="text" class="form-control" name="dis" >
  </div>

  <div class="form-group">
    <label for="inputAddress">Price</label>
    <input type="number" class="form-control" name="price" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>-->

@extends('employee.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous"></script>
<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">


		
		<div class="row" >
			<div class="col-lg-12" >
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		

				<div class="d-flex flex-wrap search-row bg-white py-3 mb-3 rounded justify-content-between align-items-center">
					<div class="d-flex col-lg-12 col-sm-6 align-items-center">
						<div>

            <section>
<div class="card" >

<form  method="POST" action="addproject">
    @csrf
  

    <div class="form-group">
 <label style="padding-bottom:10px;font-size:20px;font-weight: bold;padding-top:20px;" for="pname">Choose a name for your project</label>
 <input type="text" class="form-control" name="pname" placeholder="Enter name of your job project" style="width:100%;height:50px;font-size:15px;">
  </div>

  <p  style="padding-bottom:10px;font-size:20px;font-weight: bold;padding-top:20px;">  What type of project do you have?
  </p>
  <div class="form-check">
 
   <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label " style="  font-size: 15px;color: black;" for="exampleRadios1">
    One Time Project
  </label>
</div>
<div class="form-check">
 <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2">
  <label class="form-check-label" style="  font-size: 15px;color: black;" for="exampleRadios2">
    Ongoing Project
  </label>
</div>
<div class="form-check">
 <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios3" value="option3">
  <label class="form-check-label" style="  font-size: 15px;color:black;" for="exampleRadios3">
    Complex Project
  </label>
</div>



<p style="padding-bottom:10px;font-size:20px;font-weight: bold;padding-top:20px;">What level of experience should your freelancer have?
</p>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios1" value="option1" >
  <label class="form-check-label" style="  font-size: 15px;color: black;" for="exampleRadios1">
    Entry Level
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="option2">
  <label class="form-check-label" style="  font-size: 15px;color: black;" for="exampleRadios2">
   Intermediate
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios3" value="option3" >
  <label class="form-check-label" style="  font-size: 15px;color: black;" for="exampleRadios3">
 Expert
  </label>
</div>





<div class="est" style="padding-bottom:10px;font-size:20px;font-weight: bold;padding-top:20px;" >
  <p>
        Enter your estimated budget
</p>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Rs</span>
  
  </div>
  <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
</div>

</div>






<div class="form-group"><p style="padding-bottom:10px;font-size:20px;font-weight: bold; ">Additional project files (optional)</p>
    <label for="exampleFormControlFile1"></label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
    <p style="  font-size: 15px;color: black;">You may attach up to 5 files under 100 MB each
    </p>
  </div>


  <div class="form-group">

<label style="padding-bottom:10px;font-size:20px;font-weight: bold;padding-top:20px;" for="exampleFormControlTextarea1">Tell us more about your project</label><br>

<textarea name="dis" class="form-control" style="resize:none;height:120px;" id="exampleFormControlTextarea1" rows="3" ></textarea>




<div class="form-group">
 <label style="padding-bottom:10px;font-size:20px;font-weight: bold;padding-top:20px;" for="pcat">Skills Required</label>
<input type="text" class="form-control" name="pcat" placeholder="Enter the skills" style="width:100%;height:50px;font-size:15px;">
</div>



<div class="but" style="padding-top:20px;width:250px;">
<input class="btn btn-primary" type="submit" value="Submit" style="padding-right: :500px">
</div>



    </div>

    </form>

</div>

</section>



					</div>
		</div>
					
	
				</div>

		
				<!------------------------------------------------------->

			
				</div>
					
			</div>
		</div>
	</div>
</div>
<!--**********************************
	Content body end
***********************************-->

@extends('employee.footer')

