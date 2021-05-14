@extends('app')
@section('content')
<div class="page parallel">
    <div class="d-flex row">
        <div class="col-md-4 white">
            <div class="p-5 mt-5 col-10 offset-1">
                <img src="assets/img/app/logo.png" alt="logo" class="logo"/>
            </div>
            <div class="p-5 login-form">
                <h3>Bienvenido</h3>
                <p>Tenemos muchas cosas nuevas esperando por ti</p>
                {!! Form::open(['route'=>'login','method'=>'POST']) !!}
                    {{ csrf_field() }}
                    <div class="form-group has-icon">
                        <i class="icon-envelope-o"></i>
                        {!! Form::email('email', null, ['class'=>'form-control form-control-lg', 'placeholder'=>'Email', 'require']) !!}
                        @error('email')
                        <span class="help-block text-danger">
                            {{ $message }}
                        </span>
                        @enderror 
                    </div>
                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                        {!! Form::password('password', ['class'=>'form-control form-control-lg', 'placeholder'=>'password', 'require']) !!}
                        @error('password')
                        <span class="help-block text-danger">
                            {{ $message }}
                        </span>
                        @enderror 
                    </div>
                    <a href="#" onclick="mostrarForm('passwordReset')">
                        <p class="forget-pass">¿ Olvidastes tu clave ?</p>
                    </a>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Autenticar">
                {!! Form::close() !!}
            </div>
            <div class="p-5 form-passwordReset" style="display:none;" > 
                @include('auth.passwords.email')
            </div>
        </div>
        <div class="col-md-8  height-full blue accent-3 align-self-center text-center" data-bg-repeat="false"
             data-bg-possition="center"
             style="background: url('./assets/img/app/bgLogin.jpg') #FFEFE4; background-position: center center; background-repeat: no-repeat;
    background-size: cover;">
        </div>
    </div>
</div>
<script>
  function mostrarForm(key){ 
      switch (key) {
        case 'passwordReset':
            $(".login-form").hide();
            $(".form-passwordReset").show('fast');
        break;
        case 'register':
            $(".login-form").hide();
            $(".form-passwordReset").hide();
            $(".form-register").show('fast');
        break;
        case 'login':
            $(".form-passwordReset").hide();
            $(".form-register").hide();
            $(".login-form").show('fast');
        break;
      }
  }
</script>
@endsection