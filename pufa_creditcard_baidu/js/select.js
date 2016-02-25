$(function(){
    $(".radio-select .item").click(function(e){
        e.preventDefault();
        var element=$(this);
        var parent=element.parent();
        parent.siblings().removeClass("selected");
        var selected=parent.hasClass("selected");
        setCheckboxStatus(parent,!selected,"selected");
    })
    var setCheckboxStatus=function(element,selected,classname){
        if(selected===true){
            element.addClass(classname)
        }else{
            element.removeClass(classname)
        }
    }
})
