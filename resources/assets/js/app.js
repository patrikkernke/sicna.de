var Vue = require('vue');

Vue.use(require('vue-resource'));
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

var test = document.querySelector('#token').getAttribute('value');

console.log(Vue.http.headers);

var userManagerView = new Vue({
    el : '#UserManagerView',
    ready : function() {
        this.getAllUsers();
    },
    data : {
        'modalCreateUser' : {
            show : false
        },
        'users' : [],
        'newUser' : {
            'firstname' : null,
            'lastname'  : null,
            'email'     : null,
            'rights'    : {
                'configUsers'  : false,
                'configPrices' : false,
                'configCars'   : false,
            } 
        }
    },
    methods : {
        showModalCreateUser : function() {
            this.cleanUpNewUser()
            this.modalCreateUser.show = true;
        },
        hideModalCreateUser : function() {
            this.modalCreateUser.show = false;
        },
        cleanUpNewUser : function() {
            this.newUser.firstname = null;
            this.newUser.lastname = null;
            this.newUser.email = null;
            this.newUser.rights.configUsers = false;
            this.newUser.rights.configPrices = false;
            this.newUser.rights.configCars = false;
        },
        getAllUsers : function() {
            this.$http.get('/api/users/all', function(data, status, request) {
                this.users = data;
            });
        },
        createUser : function() {
            this.$http.post('api/user/create', this.newUser, function() {
                this.users.push(this.newUser);
                this.hideModalCreateUser;
                this.cleanUpNewUser;
            });
        }
    }
});