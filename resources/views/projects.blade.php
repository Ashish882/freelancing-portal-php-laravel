@extends('common.header')

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>

$(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
});


</script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">

<style>

.view-projects{
    font-family: 'Kiwi Maru', serif;
    padding-top:100px;
    padding-bottom:100px

}

.card-pad {

    font-family: 'Kiwi Maru', serif;
    padding-bottom:10px;
}



</style>


<section class="view-projects">
<div class="container">
<div class="row">

<div class="col-3" style="min-height:500px;
background-color:#fff;">

<div class="card">
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Project Type </h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<form>
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				  Fixed Projects
				  </span>
				</label> <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				  Hourly Projects
				  </span>
				
				</label>  <!-- form-check.// -->
			</form>

			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->
	
	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Listing Types </h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			  Recruiter
			  </span>
			</label>
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			  Urgent
			  </span>
			</label>
			<label class="form-check">
			  <input class="form-check-input" type="radio" name="exampleRadio" value="">
			  <span class="form-check-label">
			  Fulltime
			  </span>
			</label>
			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->

	<article class="card-group-item">
		<header class="card-header">
			<h6 class="title">Skills</h6>
		</header>
		<div class="filter-content">
			<div class="card-body">
			<form>
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				  php
				  </span>
				</label> <!-- form-check.// -->
				<label class="form-check">
				  <input class="form-check-input" type="checkbox" value="">
				  <span class="form-check-label">
				  python
				  </span>
				
				</label>  <!-- form-check.// -->
			</form>

			</div> <!-- card-body.// -->
		</div>
	</article> <!-- card-group-item.// -->
	

	<article>
	<header class="card-header">
			<h6 class="title">Set Price </h6>
			
			<!-- Section: Price version 2 -->
    <section class="mb-4">

 
      <div class="slider-price d-flex align-items-center my-4">
        <span class="font-weight-normal small text-muted mr-2">$0</span>
        <form class="multi-range-field w-100 mb-1">
          <input id="multi" class="multi-range" type="range" />
        </form>
        <span class="font-weight-normal small text-muted ml-2">$100</span>
      </div>

    </section>

<script>

$('#multi').mdbRange({
  single: {
    active: true,
    multi: {
      active: true,
      rangeLength: 1
    },
  }
});
</script>
  
 
	</article>



	
</div> <!-- card.// -->







</div>

<div class="col-9" style="min-height:500px;">

<div class="card">
  <div class="card-header">

  <div class="input-group">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Contains</a></li>
                      <li><a href="#its_equal">It's equal</a></li>
                      <li><a href="#greather_than">Greather than ></a></li>
                      <li><a href="#less_than">Less than < </a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Anything</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="x" placeholder="Search term...">
                <span class="input-group-btn" >
                    <button class="btn btn-default" style="height:40px;" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span>
            </div>
</div>

  </div>

  

  <div class="card-body" style="border:1px solid rgba(0,0,0,.125);" >
  @foreach ($emp_project as $project)
  <div class="card card-pad " >
  <div class="card-header" style="font-weight: bold;">
  {{ $project->pname}}

  </div>
  <div class="card-body  ">
 
    <p class="card-text"  > {{ $project->dis }} <br><br>
    <i class="fa fa-cogs" aria-hidden="true"></i>{{ $project->pcat }} <br>
    <i class="fa fa-money" aria-hidden="true"></i> {{ $project->price  }}</p>
  <button type="button" class="btn btn-outline-primary">Open</button>

 
  </div>
</div>
<br>

@endforeach

  </div>
</div>




</div>

</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</section>






<!--



<table>
<tr>
<td>Id</td>
<td>pname</td>
<td>pcat</td>
<td>desc</td>
<td>price</td>
</tr>

@foreach ($emp_project as $project)
<tr>
<td>{{ $project->id }}</td>
<td>{{ $project->pname}}</td>
<td>{{ $project->pcat }}</td>
<td>{{ $project->dis }}</td>
<td>{{ $project->price }}</td>
<td><a href = 'view-project/{{ $project->id }}'>Preview</a></td>
<td><a href = 'apply_project/{{ $project->id }}'>Apply</a></td>
</tr>
@endforeach
</table>-->


@extends('common.footer')