function statusBarHide(str){
    var sub_menu = document.getElementById(str);
    var dis_v = sub_menu.style.display;
    
    if(dis_v == "none")
        sub_menu.style.display = "block";
    
        
}
function checkData(i){    /*checkData()的JS脚本函数，以便我们在将表单数据提交到服务器前，能对表单中填写的部分数据的合法性进行必要的检验*/

    
    document.getElementById("content").innerHTML = "操作功能"+i+"输出结果"; 

}
function check(i){
        var r = checkData(i); 
        return r;
}

function url(){
    var ret=prompt("想访问的URL？");
    open(ret);
    

}
