@extends('freelancer.header')	

<!--**********************************
	Content body start
***********************************-->
<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="d-flex align-items-center flex-wrap search-job bg-white rounded py-3 px-md-3 px-0 mb-4">
		
			<div class="col-lg-12 d-md-flex">
				<input class="form-control input-rounded mr-auto mb-md-0 mb-3" type="text" placeholder="Search by Title, Company or any jobs keyword...">
				<a href="javascript:void(0);" class="btn rounded btn-danger light mr-3">
				<svg class="mr-3" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 4H12C12 4.53043 12.2107 5.03914 12.5858 5.41421C12.9609 5.78929 13.4696 6 14 6H16C16.5304 6 17.0391 5.78929 17.4142 5.41421C17.7893 5.03914 18 4.53043 18 4H19C19.2652 4 19.5196 3.89464 19.7071 3.70711C19.8946 3.51957 20 3.26522 20 3C20 2.73478 19.8946 2.48043 19.7071 2.29289C19.5196 2.10536 19.2652 2 19 2H18C18 1.46957 17.7893 0.960859 17.4142 0.585786C17.0391 0.210714 16.5304 0 16 0H14C13.4696 0 12.9609 0.210714 12.5858 0.585786C12.2107 0.960859 12 1.46957 12 2H1C0.734784 2 0.48043 2.10536 0.292893 2.29289C0.105357 2.48043 0 2.73478 0 3C0 3.26522 0.105357 3.51957 0.292893 3.70711C0.48043 3.89464 0.734784 4 1 4ZM14 2H16V3V4H14V2ZM19 9H10C10 8.46957 9.78929 7.96086 9.41421 7.58579C9.03914 7.21071 8.53043 7 8 7H6C5.46957 7 4.96086 7.21071 4.58579 7.58579C4.21071 7.96086 4 8.46957 4 9H1C0.734784 9 0.48043 9.10536 0.292893 9.29289C0.105357 9.48043 0 9.73478 0 10C0 10.2652 0.105357 10.5196 0.292893 10.7071C0.48043 10.8946 0.734784 11 1 11H4C4 11.5304 4.21071 12.0391 4.58579 12.4142C4.96086 12.7893 5.46957 13 6 13H8C8.53043 13 9.03914 12.7893 9.41421 12.4142C9.78929 12.0391 10 11.5304 10 11H19C19.2652 11 19.5196 10.8946 19.7071 10.7071C19.8946 10.5196 20 10.2652 20 10C20 9.73478 19.8946 9.48043 19.7071 9.29289C19.5196 9.10536 19.2652 9 19 9ZM6 11V9H8V10V11H6ZM19 16H16C16 15.4696 15.7893 14.9609 15.4142 14.5858C15.0391 14.2107 14.5304 14 14 14H12C11.4696 14 10.9609 14.2107 10.5858 14.5858C10.2107 14.9609 10 15.4696 10 16H1C0.734784 16 0.48043 16.1054 0.292893 16.2929C0.105357 16.4804 0 16.7348 0 17C0 17.2652 0.105357 17.5196 0.292893 17.7071C0.48043 17.8946 0.734784 18 1 18H10C10 18.5304 10.2107 19.0391 10.5858 19.4142C10.9609 19.7893 11.4696 20 12 20H14C14.5304 20 15.0391 19.7893 15.4142 19.4142C15.7893 19.0391 16 18.5304 16 18H19C19.2652 18 19.5196 17.8946 19.7071 17.7071C19.8946 17.5196 20 17.2652 20 17C20 16.7348 19.8946 16.4804 19.7071 16.2929C19.5196 16.1054 19.2652 16 19 16ZM12 18V16H14V17V18H12Z" fill="#F94687"/>
				</svg>
				FILTER</a>
				<a href="javascript:void(0);" class="btn btn-primary rounded"><i class="las la-search scale5 mr-3"></i>FIND</a>
			</div>
		</div>

		<div class="d-flex flex-wrap mb-4 align-items-center search-filter">
			<div class="mr-auto mb-2 pr-2">
				<h6 class="text-black fs-16 font-w600 mb-1">Showing 10 project Results</h6>
				<span class="fs-14">Based your preferences</span>
			</div>
			<div class="custom-control check-switch custom-checkbox mr-3 mb-2">
				<input type="checkbox" class="custom-control-input" id="customCheck9">
				<label class="custom-control-label" for="customCheck9">Fixed</label>
			</div>
			<div class="custom-control check-switch custom-checkbox mr-4 mb-2">
				<input type="checkbox" class="custom-control-input" id="customCheck1">
				<label class="custom-control-label" for="customCheck1">Hourly</label>
			</div>
			<div class="custom-control custom-switch toggle-switch text-right mr-3 mb-2">
				<input type="checkbox" class="custom-control-input" id="customSwitch11">
				<label class="custom-control-label" for="customSwitch11">Details</label>
			</div>
			<div class="custom-control custom-switch toggle-switch text-right mr-4 mb-2">
				<input type="checkbox" class="custom-control-input" id="customSwitch12">
				<label class="custom-control-label" for="customSwitch12">Verified</label>
			</div>
		

		</div>
		<div class="row">
			<div class="col-lg-12">
			
			@foreach ($emp_project as $project)

			<?php $aldapply = App\Http\Controllers\freelancer\DashboardController::check_if_already_apply($project->id) ?>

			@if ($aldapply == 1)

				<div class="d-flex flex-wrap search-row bg-white py-3 mb-3 rounded justify-content-between align-items-center">
					<div class="d-flex col-lg-12 col-sm-6 align-items-center">
						<div>
							<h2 class="title"><a href="viewproject/{{ $project->id}}" class="text-black"> {{ $project->pname}}</a></h2>
							<span class="text-primary">{{ $project->pcat }}</span>
							<p class="pt-4">

							{{ $project->dis }} 

							</p>
						</div>
					</div>
					<div class="d-flex col-lg-4 col-sm-6 align-items-center pt-4">
						<svg class="mr-3 ml-lg-0 ml-sm-auto ml-0 mt-sm-0 mt-3" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="54" height="54" rx="15" fill="#2BC155"/>
							<g clip-path="url(#clip6)">
							<path d="M27.0001 19.84C23.5987 19.84 20.6536 22.2024 19.9157 25.5229L17.4992 36.397C17.4815 36.4768 17.4725 36.5583 17.4725 36.64C17.4725 37.2585 17.974 37.76 18.5925 37.76H35.4077C35.4894 37.76 35.5709 37.751 35.6507 37.7333C36.2545 37.5991 36.6352 37.0008 36.501 36.397L34.0846 25.5229C33.3467 22.2024 30.4016 19.84 27.0001 19.84ZM27.0001 17.6C31.4515 17.6 35.3056 20.6916 36.2712 25.037L38.6877 35.9111C39.0902 37.7226 37.9481 39.5174 36.1366 39.92C35.8973 39.9731 35.6529 40 35.4077 40H18.5925C16.7369 40 15.2325 38.4956 15.2325 36.64C15.2325 36.3948 15.2594 36.1504 15.3126 35.9111L17.729 25.037C18.6947 20.6916 22.5488 17.6 27.0001 17.6Z" fill="white"/>
							<path d="M29.2402 24.32C29.8588 24.32 30.3602 24.8214 30.3602 25.44C30.3602 26.0585 29.8588 26.56 29.2402 26.56H26.4402C26.1309 26.56 25.8802 26.8107 25.8802 27.12C25.8802 27.4292 26.1309 27.68 26.4402 27.68H27.5602C29.1066 27.68 30.3602 28.9336 30.3602 30.48C30.3602 32.0264 29.1066 33.28 27.5602 33.28H24.7602C24.1416 33.28 23.6402 32.7785 23.6402 32.16C23.6402 31.5414 24.1416 31.04 24.7602 31.04H27.5602C27.8695 31.04 28.1202 30.7892 28.1202 30.48C28.1202 30.1707 27.8695 29.92 27.5602 29.92H26.4402C24.8938 29.92 23.6402 28.6664 23.6402 27.12C23.6402 25.5736 24.8938 24.32 26.4402 24.32H29.2402Z" fill="white"/>
							<path d="M25.8802 23.2C25.8802 22.5814 26.3817 22.08 27.0002 22.08C27.6188 22.08 28.1203 22.5814 28.1203 23.2V25.44C28.1203 26.0586 27.6188 26.56 27.0002 26.56C26.3817 26.56 25.8802 26.0586 25.8802 25.44V23.2Z" fill="white"/>
							<path d="M28.1203 34.4C28.1203 35.0186 27.6188 35.52 27.0002 35.52C26.3817 35.52 25.8802 35.0186 25.8802 34.4V32.16C25.8802 31.5414 26.3817 31.04 27.0002 31.04C27.6188 31.04 28.1203 31.5414 28.1203 32.16V34.4Z" fill="white"/>
							<path d="M25.8001 18.304C26.0298 18.8784 25.7504 19.5302 25.1761 19.7599C24.6018 19.9896 23.95 19.7103 23.7203 19.136L21.4803 13.536C21.1163 12.626 22.0141 11.7204 22.9272 12.0766C23.7659 12.4037 24.391 12.56 24.7602 12.56C24.8521 12.56 24.9283 12.5404 25.0946 12.4697C25.1387 12.4509 25.1906 12.428 25.3122 12.3742C25.8915 12.1203 26.3491 12 27.0002 12C27.6497 12 28.1146 12.1206 28.6957 12.3721C28.8432 12.4366 28.9021 12.4623 28.9542 12.4838C29.0978 12.5429 29.1669 12.56 29.2402 12.56C29.5878 12.56 30.2185 12.4023 31.0812 12.0735C31.9932 11.7258 32.8825 12.6298 32.5201 13.536L30.2801 19.136C30.0503 19.7103 29.3985 19.9896 28.8242 19.7599C28.2499 19.5302 27.9705 18.8784 28.2003 18.304L29.6096 14.7807C29.4808 14.7936 29.3578 14.8 29.2402 14.8C28.8314 14.8 28.4927 14.7162 28.1013 14.5551C28.0241 14.5232 27.9394 14.4863 27.8064 14.4279C27.4822 14.2877 27.2985 14.24 27.0002 14.24C26.7048 14.24 26.5313 14.2856 26.2114 14.4258C26.1015 14.4745 26.0319 14.5052 25.9706 14.5313C25.5512 14.7095 25.2002 14.8 24.7602 14.8C24.6419 14.8 24.5189 14.7939 24.3911 14.7816L25.8001 18.304Z" fill="white"/>
							</g>
							<defs>
							<clipPath id="clip6">
							<rect width="28" height="28" fill="white" transform="translate(13 12)"/>
							</clipPath>
							</defs>
						</svg>
						<div>
							<h4 class="sub-title text-black">{{ $project->price  }} Rs - {{ $project->price  }} Rs</h4>
							<span>Budget</span>
						</div>
					</div>
					
					<div class="col-xxl-3 text-xl-right text-lg-left text-sm-right col-lg-12 col-sm-6 mt-xl-0 mt-3">
						<a href="apply_project/{{ $project->id }} " class="btn btn-sm btn-outline-primary rounded mr-2">Apply Now</a>
					
					</div>
				</div>

				@endif

				@endforeach
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