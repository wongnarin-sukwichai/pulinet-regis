import { createStore } from "vuex";
import createPersistedState from 'vuex-persistedstate'
import user from './modules/user';
import upload from './modules/upload';

const store = createStore({
    plugins:[
        createPersistedState()
    ],
    modules:{
        user,
        upload
    }
})

export default store