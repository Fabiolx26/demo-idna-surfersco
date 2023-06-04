import './bootstrap';
import { createApp } from 'vue';
import Vuetify from 'vuetify';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

app.use(Vuetify);

app.mount('#app');
