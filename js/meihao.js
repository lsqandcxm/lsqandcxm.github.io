$('.mui-tab-item:eq(0)').click(function(){
	location='index.php';
});
$('.mui-tab-item:eq(1)').click(function(){
	location='pengyouquan.html';
});
$('.mui-tab-item:eq(2)').click(function(){
	location='shezhi.html';
});
$('.xie').click(function(){
	location='xieriji.php';
});
$('.delete').click(function(){
	cf=confirm('确认删除？');
	if(!cf){
		return false;
	}
});