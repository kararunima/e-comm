$(document).ready(function () {
	brands();
	categories();
	products();

	//categories visibility
	function categories() {
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {
				categories: 1
			},
			success: function (data) {

				$("#categories").html(data);
			}
		});

	}

	//brands visibilty
	function brands() {
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {
				brands: 1
			},
			success: function (data) {

				$("#brands").html(data);
			}
		});

	}



//products show 
	function products() {
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {
				products: 1
			},
			success: function (data) {

				$("#products").html(data);
			}
		});

	}

	//brand onclick product show
	$("body").delegate(".brand ", "click", function (event) {

		event.preventDefault();
		var bid = $(this).attr("bid");
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {
				getbrand: 1,
				bid:bid
			},
			success: function (data) {

				$("#products").html(data);
			}
		});

	});

});

//categories onclick product show
$("body").delegate(".categories","click", function (event) {
	
	event.preventDefault();
	var cid = $(this).attr("cid");
	$.ajax({
		url: "action.php",
	    method: "POST" ,
		data: {
			getcategories: 1 ,
			cid:cid
		},
		success: function (data) {

				
			}
		});

	//search onclick
$("#search_btn").click(function(e){
	
	e.preventDefault();
	
	var keyword=$("#search").val();
	$.ajax({
		url: "action.php",
	    method: "POST" ,
		data: {
			search: 1 ,
			keyword:keyword
		},
		success: function (data) {

				$("#products").html(data);		
			}
	

	
});
	
	});

	});
