function setting__init(){
    $('a').click(function(e){
        e.preventDefault();
        e.stopPropagation();
        return false;
    })
}







// 지연함수
$(function(){
    setting__init()
})