$('.collapse').on('shown.bs.collapse', function(){
$(this).parent("#nestedPanel").first().find(".glyphicon-chevron-down").first().removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
}).on('hidden.bs.collapse', function(){
$(this).parent("#nestedPanel").first().find(".glyphicon-chevron-up").first().removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
});
