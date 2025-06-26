import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import Usuarios from './components/Usuarios/Usuarios.vue';
import '../css/app.css';

const app = createApp({});
app.component('example-component', ExampleComponent);
app.component('usuarios-component', Usuarios);
app.mount('#app');