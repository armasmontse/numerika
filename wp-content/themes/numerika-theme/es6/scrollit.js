import {$, w} from './constants';

w.load(() => {

    $('.card-solution').click(function (e) {

        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            e.preventDefault();
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 30
                }, 1000);
                return false;
            }
        }
    });

});
