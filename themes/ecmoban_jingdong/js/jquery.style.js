
$(function(){
     zl_select($(".zl_select"));
    //tabs切换
    $('.list_01').hide();
    $('.tabs').each(function(){
        $(this).find('.tabs_tit').eq(0).addClass('selected');
        $(this).find('.list_01').eq(0).show();
    });
    $('.tabs .tabs_tit').hover(function(){
        var _index=$(this).index();
        $(this).addClass('selected').siblings().removeClass('selected');
        $(this).parent().siblings().children('.list_01').eq(_index).show().siblings().hide();
    });
    $('.mod_03 ul li:odd').addClass('bgnone');
    //热贸网-产品列表页
    var onOff = true;
    $('.skin_1').click(function(){
        if(onOff){
            $('.mod_07').hide();
            $(this).addClass('bg');
            $(this).text('展开筛选');
            onOff = false;
        } else {
            $('.mod_07').show();
            $(this).removeClass('bg');
            $(this).text('收起筛选');
            onOff = true;
        }
    })
	
	
    $('.mod_07 ul li:last').addClass('bnone');
    $('.skin_2 a').click(function(){
        $(this).toggleClass('on');
    })
    $('.mod_08 .con_1 a').click(function(){
        $(this).addClass('on').siblings().removeClass('on');
    })
    $('.mod_10 ul li').hover(function(){
        $(this).toggleClass('hover');
    })
    //
    $('.skin_3').each(function(){
        $(this).children('a').click(function(){
            $(this).addClass('bg').siblings().removeClass('bg');
        })
    })
    //购物车
    $(".all").click(function(){
        if(this.checked){
            $("#list :checkbox").attr("checked", true);
        }else{
            $("#list :checkbox").attr("checked", false);
        }
    })
    //核对信息添加地址
    $('.skin_6').click(function(){
        $(this).toggle();
        $('.skin_7').toggle();
    })
    //发票
    $('.skin_8').click(function(){
        $(this).toggle();
        $('.skin_9').toggle();
    })
})



function zl_select(select) {
    for (var i = 0; i < select.length; i++) {
        select.eq(i).find("input").attr("value", select.eq(i).find(".selected").attr("title"));
        var txt = select.eq(i).find(".selected a").html();
        if (txt == null) txt = "商品";
        select.eq(i).find("span").html(txt);
    }

    $(".zl_select span").click(function (event) {
        $(this).parent().find('ul').fadeIn(0);
    });

    $(".zl_select ul").mouseover(function (event) {
        $(this).fadeIn(0);
    });

    $(".zl_select ul").mouseout(function (event) {
        $(this).fadeOut(1);
    });

    $(".zl_select .option").click(function (event) {
        $(this).parent().fadeOut(0);
        $(this).parent().parent().find('input').attr("value", $(this).attr("title"));
        $(this).parent().parent().find('span').html($(this).find("a").html());
    });
}