import axios from 'axios';
window.axios = axios;
//importar framework boostrap
import 'bootstrap';

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
