
@extends('layout3')

@section('content')


      <form role="form" action="{{ route('login') }}" method="post" class="login-form">
                   
                        {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label class="sr-only" for="email">Email</label>

                                        <div>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email..." required autofocus>


                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                   </div>
                                    </div>
                                   

                                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label class="sr-only" for="password">Password</label>

                                        <div>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Password..." required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                    </div>
                                    </div>

                                  <button type="submit" class="btn  btn-info animated fadeInUpBig"><i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>&nbsp; ENTRAR</a></button>
                               
                               

                                <!--- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvido la contraseña? </a> ---->
                                 </form>
        



@endsection