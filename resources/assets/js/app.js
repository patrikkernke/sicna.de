var Vue = require('vue');

Vue.use(require('vue-resource'));
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

var userManagerView = new Vue({
    el : '#UserManagerView',
    ready : function() {
        this.getAllUsers();
    },
    data : {
        'modalCreateUser' : {
            show : false
        },
        'modalNewPassword' : {
            show : false
        },
        'users' : [],
        'newUser' : {
            'firstname' : null,
            'lastname'  : null,
            'email'     : null
        },
        'selectedUser' : null,
        'newPassword' : null
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
        },
        showModalNewPassword : function(user) {
            this.newPassword = null;
            this.selectedUser = user;
            this.modalNewPassword.show = true;
        },
        hideModalNewPassword : function() {
            this.modalNewPassword.show = false;
        },
        getAllUsers : function() {
            this.$http.get('/api/users/all', function(data, status, request) {
                this.users = data;
            });
        },
        createUser : function() {
            this.$http.post('api/user/create', this.newUser, function(data) {
                this.users.push(data);
                this.hideModalCreateUser();
                this.cleanUpNewUser();
            });
        },
        deleteUser : function(user, index) {
            this.$http.delete('api/user/delete/'+user.id, function() {
                this.users.splice(index, 1);
            })
        },
        createNewPassword : function(user) {
            var data = {
                'newPassword' : this.newPassword
            };

            this.$http.put('api/user/password/'+user.id, data, function() {
                this.hideModalNewPassword();
                this.selectedUser = null;
                this.newPassword = null;
            });
        }
    }
});