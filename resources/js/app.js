require('./bootstrap');
require('./dashboard/app.js');

import Echo from 'laravel-echo';

let e = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'

});

//actualise /post
e.channel('chan-demo')
    .listen('PostCreatedEvent', function(e) {
        console.log(e)
    })

$('#demo').click(function(e) {
    e.preventDefault()
    $.get('/post')
})