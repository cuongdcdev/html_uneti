(function($){


	$(document).ready(function(){
		console.log("dom ready! ");
		
		$("#load").on("click" , function(){
			console.log("ok,clicked");
			//ajax jquery 
			$.ajax({
				url : "abc.html",
				method: "GET",
				success : function(content){
					console.log(content);
					$("#content").html(content);
				},
				error : function(err){
					console.log(err);
					alert( "co loi xay ra: "  + err.status + " - " + err.statusText  );
				},
				complete: function(e){
					console.log(e);
					alert("yeu cau ajax da duoc gui thanh cong ! ");
				}

			});
		});


		$("#tinh").on("click" , function(){
			var phepTinh1 = $("#a").val();
			var phepTinh2 = $("#b").val();
			var phepTinh = $("select[name=tinh]").val();

			var data =  {
					a : phepTinh1 ,	
					b : phepTinh2,
					tinh : phepTinh
			};


			$.ajax({
				url : "process.php",
				method : "POST",
				data: data ,
				success : function(answer){

				}
			});



		});
	});


})(jQuery);
