var Vue = require('vue');

Vue.use(require('vue-resource'));
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

var userManagerView = new Vue({
    el : '#UserManagerView',
    ready : function() {
        this.getAllUsers();
    },
    data : {
        modalCreateUser : {
            show      : false,
            firstname : null,
            lastname  : null,
            email     : null
        },
        modalEditUser : {
            show      : false,
            firstname : null,
            lastname  : null,
            email     : null
        },
        modalNewPassword : {
            show           : false,
            password_value : null
        },
        users : [],
        selectedUser : null,
    },
    methods : {
        showModalCreateUser : function() {
            this.cleanUpNewUser()
            this.modalCreateUser.show = true;
        },
        hideModalCreateUser : function() {
            this.modalCreateUser.show = false;
        },
        createUser : function() {
            var data = {
                'firstname' : this.modalCreateUser.firstname,
                'lastname'  : this.modalCreateUser.lastname,
                'email'     : this.modalCreateUser.email
            };

            this.$http.post('api/user/create', data, function(data) {
                this.users.push(data);
                this.hideModalCreateUser();
                this.cleanUpNewUser();
            });
        },
        showModalEditUser : function(user) {
            this.selectedUser = user;
            this.modalEditUser.firstname = user.firstname;
            this.modalEditUser.lastname = user.lastname;
            this.modalEditUser.email = user.email;
            this.modalEditUser.show = true;
        },
        hideModalEditUser : function() {
            this.modalEditUser.show = false;
        },
        editUser : function() {
            var data = {
                'firstname' : this.modalEditUser.firstname,
                'lastname'  : this.modalEditUser.lastname,
                'email'     : this.modalEditUser.email
            };

            this.$http.put('api/user/edit/'+this.selectedUser.id, data, function(data) {
                this.getAllUsers();
                this.hideModalEditUser();
                this.cleanUpNewUser();
            });
        },
        deleteUser : function(user, index) {
            this.$http.delete('api/user/delete/'+user.id, function() {
                this.users.splice(index, 1);
            })
        },
        getAllUsers : function() {
            this.$http.get('/api/users/all', function(data, status, request) {
                this.users = data;
            });
        },
        cleanUpNewUser : function() {
            this.modalCreateUser.firstname = null;
            this.modalCreateUser.lastname = null;
            this.modalCreateUser.email = null;
        },
        showModalNewPassword : function(user) {
            this.modalNewPassword.password_value = null;
            this.selectedUser = user;
            this.modalNewPassword.show = true;
        },
        hideModalNewPassword : function() {
            this.modalNewPassword.show = false;
        },
        createNewPassword : function(user) {
            var data = {
                'newPassword' : this.modalNewPassword.password_value
            };

            this.$http.put('api/user/password/'+user.id, data, function() {
                this.hideModalNewPassword();
                this.selectedUser = null;
                this.modalNewPassword.password_value = null;
            });
        }
    }
});