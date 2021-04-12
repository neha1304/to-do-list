//when the task is completed
$('ul').on("click",'li',function(){               //all li present in ul 
	$(this).toggleClass("done");
	
});

//user wants to delete a task
$('ul').on("click",'span',function(event){
	$(this).parent().fadeOut(100,function(){
		$(this).remove();
	});
	event.stopPropagation();
});
//to toggle input area
$('#op').click(function(){
	$('input[type="text"]').fadeToggle();    
	$("i", this).toggleClass("fa fa-plus");
	$("i", this).toggleClass("fa fa-minus ");

});

//to add new task in list
$('input[type="text"]').keypress(function(event){
	if (event.which===13 && $(this).val()!=="") {
		let task=$(this).val();
		$("ul").append('<li><span><i class="fa fa-trash" aria-hidden="true"></i></span>'+task+"</li>");
		$(this).val("");
	}
})
