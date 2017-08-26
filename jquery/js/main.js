



$("#btn2").click(function(){
    $("#h2").append( $("#inputName").val() );
    // console.log("gender val: " + $("input[name=gender]:checked").val() );

    $("#ten").val(( "giới tính: " +$("input[name=gender]:checked").val()  ));
     console.log($( "div#wrap-input" ).html());

    $("#text").text("<b>Tuấn ml</b>");
})


$("#btn").click(function(){
    $("#h2").prepend( $("#inputName").val() ); 
})