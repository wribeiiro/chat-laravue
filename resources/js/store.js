import axios from 'axios';
import { Store } from 'vuex';

export default new Store({
    state: {
        user: {}
    },
    mutations: {
        setUserState: (state, value) => state.user = value
    },
    actions: {
        userStateAction: ({commit}) => {
            axios.get('api/user/me').then(response => {
                commit('setUserState', response.data.user);
            })
        }
    }
})