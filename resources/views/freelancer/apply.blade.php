@extends('freelancer.header')

<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">		
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		
    
		<div class="row">
			<div class="col-lg-12">
      
      <div class="offset-md-2 col-md-6" style="padding-top:50px;">

      <form   method="POST" enctype="multipart/form-data">
    @csrf

  <div class="form-group">

    <label style="padding-bottom:10px;" for="exampleFormControlTextarea1">Cover Letter</label><br>
  
    <textarea class="form-control" name="ctext" id="exampleFormControlTextarea1" rows="3" style="width:500px;resize: none";></textarea>
  </div>

  <div class="form-group"><p>Add your resume  (optional)</p>
    <label for="exampleFormControlFile1"></label>
    <input type="file" class="form-control-file"  name="file">
    <p>You may attach up to 5 files under 100 MB each
    </p>
  </div>

  <p>
<p>
        Enter your estimated budget
</p>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">$</span>
  
  </div>
  <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
</div>



<div class="but">
           <input  class="btn btn-primary" type="submit" value="Submit" style="margin-left:250px;">
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

@extends('freelancer.footer')




<!--
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row justify-content-center">
    <form   method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Your resume</label>
      <input type="file" name="file" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Cover letter</label>
      <input type="text" class="form-control" name="ctext">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Your Budget</label>
    <input type="number" class="form-control" name="price" >
  </div>

  <button type="submit" class="btn btn-primary">Apply</button>
</form>--->

