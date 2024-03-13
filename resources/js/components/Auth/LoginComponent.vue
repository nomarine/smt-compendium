<template>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form method="POST" action="" @submit.prevent="login($event)">
                        <input type="hidden" name="_token" :value="csrf_token">
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: [
            'csrf_token'
        ],
        components: {
            
        },
        data () {
            return {
                email: '',
                password: ''
            }
        },
        methods: {
            login(e) {
                let url = 'http://127.0.0.1:8000/api/login';
                let settings = {
                    'method': 'POST',
                    'body': new URLSearchParams({
                        'email': this.email,
                        'password': this.password
                    })
                }
                fetch(url, settings)
                    .then(response => response.json())
                    .then(data => {
                        if(data.token){
                            document.cookie = 'token='+data.token
                        }
                        e.target.submit()
                    })
            }
        }
    }
</script>
