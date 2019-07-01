import {$, w} from './constants'
import './menu'
import './slider'
import './page-top'
import './modal'
import './animate-body'
// import './active-menu-section'
// import './masonry'
// import './scrollit'

w.load(() => {

});

$(document).ready(function() {
    //console.log('Hello world from El Cultivo!')
    new WOW().init();
    //console.log(location.hash);

})
