require('./bootstrap');
require('./dashboard/app.js');

import Echo from 'laravel-echo';

let e = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'

});

e.channel('chan-demo')
    .listen('PostCreatedEvent', (e) => {
        console.log(e)
    })
console.log('top')