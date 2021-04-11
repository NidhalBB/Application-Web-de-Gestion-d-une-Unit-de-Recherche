@extends('Dashbored.Home.home')

 @section('formulaire')
 @include('inc.message')
	<div class="container">
        <div class="row justify-content-center" >
            <div class="col-md-8" >
                <div class="card">
                    <div class="card-header">@lang("home.S'inscrire")</div>
    
                    <div class="card-body">
                        {!! Form::open(['action' => 'UsersController@create',  'method' => 'GET','enctype' => 'multipart/form-data']) !!}
                        <form>   
                        @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">@lang('home.Nom')</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">@lang('home.Email')</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="naissance" class="col-md-4 col-form-label text-md-right">@lang('home.Naissance')</label>
    
                                <div class="col-md-6">
                                    <input id="naissance" type="date" class="form-control @error('naissance') is-invalid @enderror" name="naissance" >
    
                                    @error('naissance')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">@lang('home.Description')</label>
    
                                <div class="col-md-6">
                                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Describe your self"></textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">@lang('home.Mot de Passe')</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"> @lang('home.Confirmez le mot de passe')</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        @lang("home.S'inscrire")
                                    </button>
                                </div>
                            </div>
                        </form>
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection