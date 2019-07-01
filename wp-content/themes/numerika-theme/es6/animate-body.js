import {$, w} from './constants';

w.load(() => {

    // var menu = $("#menu-header-menu");
    // var menuItems = menu.find("a");
    // var allItems = menuItems.map(function(){
    //     var itemMenu = $(this).attr("href");
    //     // console.log(itemMenu);
    //     if (itemMenu.length) {
    //         return itemMenu;
    //     }
    // });

    $('#link-planteamiento').click(function(){
        var offset = $("#planteamiento").offset( ).top
        var offset = (offset - 120)
        
        $('html, body').animate({
            scrollTop: offset
        }, 2000);
    });

    $('#link-solucion').click(function(){
        var offset = $("#solucion").offset( ).top
        var offset = (offset - 120)

        $('html, body').animate({
            scrollTop: offset
        }, 2000);
    });

    $('#link-resultados').click(function(){
        var offset = $("#resultados").offset( ).top
        var offset = (offset - 120)

        $('html, body').animate({
            scrollTop: offset
        }, 2000);
    });

});