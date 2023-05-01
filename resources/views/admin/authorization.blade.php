@extends('layout.app')
@section('title')
    Авторизация
@endsection
@section('main')
    <div class="container" id="AuthorizationPage">
        <form id="form" @submit.prevent="Authorization">
            <div class="mb-3">
                <label for="login" class="form-label">Логин</label>
                <input type="text" class="form-control" id="login" name="login" :class="errors.login ? 'is-invalid' : ''">
                <div :class="errors.login ? 'invalid-feedback' : ''" v-for="error in errors.login">
                    @{{ error }}
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" :class="errors.password ? 'is-invalid' : ''">
                <div :class="errors.password ? 'invalid-feedback' : ''" v-for="error in errors.password">
                    @{{ error }}
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Авторизация</button>
        </form>
    </div>
    <script>
        const AuthorizationScript = {
            data(){
                return{
                    errors:[],
                    message:'',
                }
            },
            methods:{
              async Authorization(){
                  const form = document.querySelector('#form');
                  const form_data = new FormData(form);
                  const response = await fetch('{{route('Author')}}', {
                     method: 'post',
                     headers: {
                         'X-CSRF-TOKEN':'{{csrf_token()}}'
                     },
                     body: form_data
                  });
                  if (response.status===400){
                      this.errors = await response.json();
                      setTimeout(()=>{
                          this.errors = [];
                      }, 5000)
                  }
                  if (response.status===200){
                      window.location = response.url
                  }
                  if (response.status===403){
                      this.message = await response.json();
                      setTimeout(()=>{
                          this.message = null;
                      }, 5000)
                  }
              }
            }
        }
        Vue.createApp(AuthorizationScript).mount('#AuthorizationPage')
    </script>
@endsection
