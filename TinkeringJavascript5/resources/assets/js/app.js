
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$("#getuser").click(function () {

    $.ajax({
        // type: "GET",
        url: "http://localhost:8000/apicutre/user/1",
        success: function (result) {
            // console.log("Ajax OK!");
            // console.log(result);
            $("#user").val(result);
        },
        error:function () {
            console.log("Ha petat petició ajax");
        }
    });

});

// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// })

$("#postuser").click(function () {

    var parametros = {
        "valor1" : $("#userpost").val(),
    };

    $.ajax({
        type: "post",
        url: "http://localhost:8000/apicutre/user/1",
        data: parametros,
        success: function (result) {
            // console.log("Ajax OK!");

            // console.log(result);
            $("#resultpost").val(result);
        },
        error:function () {
            console.log("Ha petat petició ajax");
        }
    });

});