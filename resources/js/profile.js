import 'lodash';
import $ from 'jquery';
import Popper from 'popper.js';
import 'bootstrap';
import axios from 'axios';
import { loadProgressBar } from 'axios-progress-bar'
import toastr from 'toastr';

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

$(document).ready(function () {

    loadProgressBar({minimum: 0.1, showSpinner: false, parent: '#video-card', trickle: false, trickleRate: 0.01, trickleSpeed: 800});

    let toggler = $('#menu-toggle'),
        wrapper = $('#wrapper'),
        videofile = $('[data-video]'),
        videoplayer = $('#video-player'),
        body = $('body');

    toggler.click(function(e) {
        e.preventDefault();
        wrapper.toggleClass("toggled");
    });

    videofile.on('click', function (e) {
        e.preventDefault();
        videoplayer.attr('src', $(this).attr('href'));
        videoplayer.get(0).play();
        $(this).addClass('active').siblings('li a').removeClass('active');
    });

    videoplayer.bind('contextmenu',function() { return false; });
    body.bind('contextmenu', function () {
        videoplayer.attr('src', '');
        videoplayer.find('source').attr('src', '');
    });

    document.addEventListener ("keydown", function (zEvent) {
        if (zEvent.ctrlKey  &&  zEvent.shiftKey  &&  zEvent.code === "KeyI") {
            videoplayer.attr('src', '');
            videoplayer.find('source').attr('src', '');
        }
    } );

});
