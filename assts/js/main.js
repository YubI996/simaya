(function ($) {
 "use strict";
	
	// checkbox di admin
	$("#koreksi").change(function() {
		if(this.checked) {
			$("#catatan").attr("class", "");
		}
	});

	/*----------------------------
	 jQuery MeanMenu
	------------------------------ */
	jQuery('nav#dropdown').meanmenu();	
	/*----------------------------
	 jQuery myTab
	------------------------------ */
	$('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		});
		$('#myTab3 a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		});
		$('#myTab4 a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		});

	  $('#single-product-tab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		});
	
	$('[tooltip-toggle="tooltip"]').tooltip(); 
	
	$('#sidebarCollapse').on('click', function () {
					$('#sidebar').toggleClass('active');
					
				});
		// Collapse ibox function
			$('#sidebar ul li').on('click', function () {
				var button = $(this).find('i.fa.indicator-mn');
				button.toggleClass('fa-plus').toggleClass('fa-minus');
				
			});
	/*-----------------------------
			Menu Stick
		---------------------------------*/
		$(".sicker-menu").sticky({topSpacing:0});
			
		$('#sidebarCollapse').on('click', function () {
			$("body").toggleClass("mini-navbar");
		});
		$(document).on('click', '.header-right-menu .dropdown-menu', function (e) {
			  e.stopPropagation();
			});
 
/*----------------------------
 mobile sidebar menu
------------------------------ */
$(".back-to-top").on('click', function () {
	 $('.left-sidebar-pro').toggleClass('active');
});
/*----------------------------
 wow js active
------------------------------ */
 new WOW().init();
 
/*----------------------------
 owl active
------------------------------ */  
  $("#owl-demo").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 4,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
  }); 
	   
/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 	   
 
})(jQuery); 
addCat = function () {
	 		var form = this.document.forms;
            
            var formData = {};
            $(form).find("input[name]").each(function (index, node) {
                formData[node.name] = node.value;
            });
			console.log(formData);
            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'catatan' : 1,
					'data':formData,
                },
				success: function(data){
					plPutNotif(data);
                } 
            });
        }