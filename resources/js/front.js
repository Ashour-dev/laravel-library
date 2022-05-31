window.axios=require('axios');
window.axios.defaults.headers.common['X-Reuested-With']='XMLHttpRequest';

import App from "./views/App";


const app = new Vue({
    el: '#root',
    render: h=>h(App),
});
