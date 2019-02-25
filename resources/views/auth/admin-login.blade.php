@extends("layouts.log")

@section('content')
    <div class="container">
        <div class="row center-block">
            <div class="col m2"></div>
            <div class="col m8">
                <div class="card">
                    <div class="card-title teal">{{ __('Admin Login') }}</div>
                    <div class="card-content">
                        <form action="{{ route('admin.login.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" name="email" class="validate" value="{{ old('email') }}" required autofocus>
                                    <label for="email">{{ __('Adresse Email') }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" name="password" class="validate" required>
                                    <label for="password">{{ __('Mot de passe') }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label>
                                        <input type="checkbox" class="filled-in"/>
                                        <span>{{ __('Se souvenir de moi') }}</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col m2"></div>
        </div>
    </div>
@stop