<div class="form-register">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h3>{{auth::user()->name}}</h3></div>

                @if(Auth::user()->user_type == '1')
                @include('user.dev-header')
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre Completo:') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                value="{{auth::user()->name}}" required autocomplete="name" autofocus <?= $disabled ? 'readonly' : ''?>>
                                    
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{auth::user()->email}}" required autocomplete="email" <?= $disabled ? 'readonly' : ''?>>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                    <label for="user_type" class="col-md-4 col-form-label text-md-right"> Tipo de Usuario:</label>
                    <div class="col-md-6" >
                    <select name="user_type" id="user_type" class="form-control" required <?= $disabled ? 'readonly' : ''?>>
                        <option <?= old('user_type') == 'Soy desarrollador' ? 'selected':null ?>
                            value="1">Soy desarrollador</option>
                        <option <?= old('user_type') == 'No soy desarrollador' ? 'selected':null ?>
                            value="2">No soy desarrollador</option>
                    </select>
                      </div>
                       </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" value="{{auth::user()->password}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" <?= $disabled ? 'readonly' : ''?>>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                               <button class="btn btn-warning" <?= $disabled ? 'readonly' : ''?>>
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>