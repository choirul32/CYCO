/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// require('./bootstrap');
// import Vue from 'vue'
// new Vue({
//     el: '#app',
//     data: {
//         id: document.querySelector('meta[name="user_id"]').content,
//         search: '',
//         messages: [],
//         users: [],
//         form: {
//             to_id: '',
//             content: ''
//         },
//         isActive: null,
//         notif: 0
//     },
//     mounted() {
//         this.fetchUsers() // memanggil semua user yang di chat
//         this.fetchPusher() // untuk menjalankan laravel echo dan pusher
//     },
//     methods: {
//         // mengeluarkan semua pengguna
//         fetchUsers() {
//             let q = _.isEmpty(this.search) ? 'all' : this.search
//             axios.get('/message/user/' + q).then(({ data }) => {
//                 this.users = data
//             })
//         },
//         // mengeluarkan semua messages dari user yang dipilih
//         fetchMessages(id) {
//             this.form.to_id = id
//             axios.get('/message/user-message/' + id).then(({ data }) => {
//                 this.messages = data
//                 this.isActive = this.users.findIndex((s) => s.id === id)
//                 this.users[this.isActive].count = 0
//                 this.notif--
//             })
//         },
//         // mengirim pesan yang dikirim
//         sendMessage() {
//             axios.post('message/user-message', this.form).then(({ data }) => {
//                 this.pushMessage(data, data.to_id)
//                 this.form.content = ''
//                 this.search = ''
//             })
//         },
//         // fungsi untuk push laravel echo dan pusher
//         fetchPusher() {
//             Echo.channel('user-message.' + this.id)
//                 .listen('MessageEvent', (e) => {
//                     this.pushMessage(e, e.from_id, 'push')
//                 })
//         },
//         // semua akan di eksekusi disini
//         pushMessage(data, user_id, action = '') {
//             let index = this.users.findIndex((s) => s.id === user_id)
//             if (index != -1 && action == 'push') {
//                 this.users.splice(index, 1) // menghapus user
//             }
//             /**
//              * if untuk pesan submit
//              */
//             if (action == '') {
//                 this.users[index].content = data.content
//                 this.users[index].to_id = data.to_id
//                 let user = this.users[index]
//                 this.users.splice(index, 1)
//                 this.users.unshift(user)
//             }
//             /**
//              * else untuk pesan dari laravel echo
//              */
//             else {
//                 this.users.unshift(data) // menambahkan user baru ke atas
//             }
//             /**
//              * Jika dia melihat pesan user yang dipilih
//              */
//             if (this.form.to_id != '') {
//                 index = this.users.findIndex((s) => s.id === this.form.to_id)
//                 this.users[index].count = 0
//                 this.isActive = index
//                 if (this.form.to_id == user_id) {
//                     this.messages.push({
//                         avatar: data.avatar,
//                         content: data.content,
//                         created_at: data.created_at,
//                         from_id: data.from_id,
//                     })
//                     axios.get('/message/user-message/' + user_id + '/read')
//                 }
//             }
//         },
//         // agar scroll ke arah pesan yang baru
//         scrollToEnd: function () {
//             let container = this.$el.querySelector("#card-message-scroll");
//             container.scrollTop = container.scrollHeight;
//         }
//     },
//     watch: {
//         search: _.debounce( function() {
//             this.fetchUsers()
//         }, 500),
//         // untuk menambahakan jumlah notifikasi berdasarkan perubahan variable users
//         users: _.debounce( function() {
//             this.notif = 0
//             this.users.filter(e => {
//                 if (e.count) {
//                     this.notif++
//                 }
//             })
//         }),
//         // setiap ada pesan baru akan memanggil this.scrollToEnd()
//         messages: _.debounce( function() {
//             this.scrollToEnd()
//         }, 10)
//     }
// })

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\Github\Laravel\sim_bk\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! D:\Github\Laravel\sim_bk\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });