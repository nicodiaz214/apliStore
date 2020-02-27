<div class="form-register">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h3>{{auth::user()->name}}</h3></div>

                @if(Auth::user()->user_type == '1')
                @include('user.dev-header')
                @else
                @include('user.client-header')
                @endif

                <div class="card-body">
                    <form method="" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><strong> Nombre:</strong></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                value="{{auth::user()->name}}" required autocomplete="name" autofocus <?= $disabled ? 'readonly' : ''?>>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><strong> E-mail:</strong></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{auth::user()->email}}" required autocomplete="email" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                    <label for="user_type" class="col-md-4 col-form-label text-md-right"><strong> Tipo de Usuario:</strong></label>
                    <div class="col-md-6" >
                    <select name="user_type" id="user_type" class="form-control" required disabled>
                        <option <?= old('user_type') == 'Soy desarrollador' ? 'selected':null ?>
                            value="1">Soy desarrollador</option>
                        <option <?= old('user_type') == 'No soy desarrollador' ? 'selected':null ?>
                            value="2">Cliente</option>
                    </select>
                      </div>
                       </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" disabled><strong> Contraseña:</strong></label>

                            <div class="col-md-6">
                                <input id="password" type="password" value="{{auth::user()->password}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" <?= $disabled ? 'readonly' : ''?>>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                               <button class="btn btn-warning" disabled>
                                    {{ __('Editar') }}
                                </button>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>

   