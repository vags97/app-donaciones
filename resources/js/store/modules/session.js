const state =()=>({
    // String: contiene el token con el que se identifica el usuario frente al servidor
    token: localStorage.getItem('access_token') || null,
    // Boolean: indica si la pagina esta cargando algun recurso y activa el componente Spinner
    isLoading: false,
    // Obj: diccionario que tiene el tipo de alerta y el mensaje a entregar
    alertMessage: {'type': '', 'message': '', show: false},
    usuario: {usuario: 'test'},
})

const getters ={
    loggedIn(state) {
        return state.token !== null
    },
}

const actions = {
    retrieveToken(context, credentials) {
        context.commit('retreiveIsLoading', true);
        return new Promise((resolve, reject) => {
            axios.post('/api/login', {
                username: credentials.username,
                password: credentials.password,
            }).then(response => {
                //console.log(response)
                const token = response.data.access_token;
                context.commit('retrieveToken', token);
                context.commit('retreiveIsLoading', false);
                resolve(response)
            }).catch(error => {
                context.commit('retreiveIsLoading', false);
                reject(error);
            });
        })
    },
    destroySession(context) {
        if (context.getters.loggedIn) {
            return new Promise((resolve, reject) => {
                axios.post('/api/logout', '', {
                    headers: {Authorization: "Bearer " + context.state.token}
                }).then(response => {
                    //console.log(response)
                    context.commit('destroyToken');
                    resolve(response)
                }).catch(error => {
                    //console.log(error)
                    context.commit('destroyToken');
                    reject(error)
                });
            })

        }
    },
}

const mutations = {
    retrieveToken(state, token) {
        localStorage.setItem('access_token', token);
        state.token = token
    },
    destroyToken(state) {
        localStorage.removeItem('access_token');
        state.token = null;
    },
    retreiveIsLoading(state, isLoading) {
        state.isLoading = isLoading;
    },
    retreiveAlertMessage(state, {type, message, time = 3000}) {
        state.alertMessage.type = type;
        state.alertMessage.message = message;
        state.alertMessage.show = true;
        const self = this;
        setTimeout(function () {
            self.commit("session/destroyAlertMessage");
        }, time);
    },
    destroyAlertMessage(state){
        state.alertMessage.show = false;
        state.alertMessage.type = '';
        state.alertMessage.message = '';
    },
}

export default {
    namespaced: true,
    state,
    actions,
    getters,
    mutations
}
