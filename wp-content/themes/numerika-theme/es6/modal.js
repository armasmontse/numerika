import {$, w} from './constants';

w.load(() => {

    const modalOpen = $('.modalOpen')

    modalOpen.click(function() {
        // console.log('click modal');

        const modal = $('#modal')
        modal.css('display', 'flex')

        modal.click(function() {
            modal.css('display', 'none')
        })
    });

});