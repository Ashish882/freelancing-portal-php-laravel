<!--**********************************
    Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by Webchaser</a> 2021</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->

<!--**********************************
Support ticket button start
***********************************-->

<!--**********************************
Support ticket button end
***********************************-->


</div>
<!--**********************************
Main wrapper end
***********************************-->

<!--**********************************
Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('xhtml/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('xhtml/vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('xhtml/js/custom.min.js') }}"></script>
<script src="{{ asset('xhtml/js/deznav-init.js') }}"></script>
<script src="{{ asset('html/vendor/owl-carousel/owl.carousel.js') }}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('xhtml/vendor/peity/jquery.peity.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('xhtml/vendor/apexchart/apexchart.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('xhtml/js/dashboard/dashboard-1.js') }}"></script>
	<!-- Datatable -->
	<script src="{{ asset('xhtml/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script>
function carouselReview(){
    /*  testimonial one function by = owl.carousel.js */
    jQuery('.testimonial-one').owlCarousel({
        loop:true,
        autoplay:true,
        margin:30,
        nav:false,
        dots: false,
        left:true,
        navText: ['', ''],
        responsive:{
            0:{
                items:1
            },
            800:{
                items:1
            },	
            991:{
                items:2
            },			
            
            1200:{
                items:2
            },
            1600:{
                items:3
            }
        }
    })			
}
jQuery(window).on('load',function(){
    setTimeout(function(){
        carouselReview();
    }, 1000); 
});
</script>
<script>
		(function($) {
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		})(jQuery);
	</script>
	




</body>

</html>