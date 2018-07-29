$("#shang").change(function(e){
    //获取目标文件
    var file = e.target.files||e.dataTransfer.files;
    //如果目标文件存在
    if(file){
        //定义一个文件阅读器
        var reader = new FileReader();
        //文件装载后将其显示在图片预览里
        reader.onload=function(){
            $("#pre").attr("src", this.result);
        }
        //装载文件
        reader.readAsDataURL(file[0]);
    }
});
$('#pre').click(function(){
  $('#shang').click();
});

