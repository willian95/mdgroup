@extends('layouts.login')

@section('content')
    <div class="login_admin " id="dev-login">

        <div class="row">
            <div class="login100-more mask col-md-6"
                style="background-image: url('images/main.jpg');">


               <!---- <p>Bienvenido a Aidacaceres CMS</p>--->
            </div>
            <div class="login100-form validate-form col-md-6">
                <span class="login100-form-title p-b-43 pb-4">
                    <img class="logo-admin" src="https://www.aidacaceresart.com/assets/img/logo-blue.png" alt="">
                </span>

                <p> Content Management System </p>


                <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" v-model="email">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                    <small style="color: red;" v-if="errors.hasOwnProperty('email')" v-cloak>@{{ errors['email'][0] }}</small>
                </div>


                <div class="wrap-input100 validate-input mt-2">
                    <input class="input100" type="password" v-model="password">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                    <small style="color: red;" v-if="errors.hasOwnProperty('password')" v-cloak>@{{ errors['password'][0] }}</small>
                </div>




                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" @click="login()">
                        Entrar
                    </button>
                </div>

            </div>


        </div>

    </div>
@endsection


@push("scripts")

<script type="text/javascript">
const app = new Vue({
    el: '#dev-login',
    data() {
        return {
            email: "",
            password: "",
            errors:[]
        }
    },
    methods: {

        login() {
            this.errors = []
            axios.post("{{ url('/login') }}", {
                    email: this.email,
                    password: this.password
                })
                .then(res => {

                    if (res.data.success == true) {

                        swal({
                            title: "Excelente!",
                            text: res.data.msg,
                            icon: "success"
                        });
                        this.email = ""
                        this.password = ""

                        if (res.data.role_id == 2) {

                            window.location.href = "{{ url('/') }}"


                        } else if (res.data.role_id == 1)
                            window.location.href = res.data.url

                    } else {
                        alert(res.data.msg)
                    }

                })
                .catch(err => {

                    this.loading = false
                    this.errors = err.response.data.errors
                })

        }

    },
    created() {


    }
});
</script>

@endpush