// $("#btn").on("click" , function(){
// 	// alert("xin chao, ban vua bam nut ! ");
// 	$("#header").css( "color" , "red" ).css("backgroundColor" , "blue")
// 									  .css("textDecoration" ,"underline" )
// 									  .css("fontSize" , "45px")
// 									  .slideUp("slow");
// 	// $("#header").slideToggle();
// 	// $("#header").fadeToggle();
// 	// $("#header").slideUp();


// });

// $("#btn2").on("click" , function(){
// 	$("#header").slideDown();
// });

// $("#btn2").on("hover" , function(){
// //hover vao 
// 	$("#header").css("backgroundColor" , "violet");
// },function(){
// //hover ra 
// 	$("#header").css("backgroundColor" , "green");
// });

// $("#btn2").hover(function(){
// 	$("#header").css("backgroundColor" , "violet");
// } , function(){
// $("#header").css("backgroundColor" , "red");
// });

$("#btn").on("click", function(){
	$(".header, .hed , .bg")
			.css("color" , "blue")
			.css("backgroundColor" , "yellow")
			.slideToggle("slow");
});