$(function(){
    $(".radio-select .item").click(function(e){
        e.preventDefault();
        var element=$(this);
        var parent=element.parent();
        parent.siblings().removeClass("selected");
        var selected=parent.hasClass("selected");
        setCheckboxStatus(parent,!selected,"selected");
    })
    $(".checkbox-blue").click(function(){
        var element=$(this);
        var selected=$(this).hasClass("checked");
        $(this).addClass("checked");
        setCheckboxStatus(element,!selected,"checked");
    })
    var setCheckboxStatus=function(element,selected,classname){
        if(selected===true){
            element.addClass(classname)
        }else{
            element.removeClass(classname)
        }
    }

    //¹ö¶¯Í¼Æ¬

    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 30
    });


})

