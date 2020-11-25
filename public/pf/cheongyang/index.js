$('a').click(function(e){
    e.stopPropagation();
    e.preventDefault();
    return false;
})