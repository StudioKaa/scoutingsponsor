@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="achternaam"
                                       class="col-md-4 col-form-label text-md-right">{{ __('achternaam') }}</label>

                                <div class="col-md-6">
                                    <input id="achternaam" type="achternaam"
                                           class="form-control @error('achternaam') is-invalid @enderror"
                                           name="achternaam" value="{{ old('achternaam') }}" required
                                           autocomplete="telfoon">

                                    @error('achternaam')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="addres"
                                       class="col-md-4 col-form-label text-md-right">{{ __('addres') }}</label>

                                <div class="col-md-6">
                                    <input id="addres" type="addres"
                                           class="form-control @error('addres') is-invalid @enderror" name="addres"
                                           value="{{ old('addres') }}" required autocomplete="addres">

                                    @error('addres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="postcode"
                                       class="col-md-4 col-form-label text-md-right">{{ __('postcode') }}</label>

                                <div class="col-md-6">
                                    <input id="postcode" type="postcode"
                                           class="form-control @error('postcode') is-invalid @enderror" name="postcode"
                                           value="{{ old('postcode') }}" required autocomplete="postcode">

                                    @error('postcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <label for="telfoon"
                                       class="col-md-4 col-form-label text-md-right">{{ __('telfoon') }}</label>

                                <div class="col-md-6">
                                    <input id="telfoon" type="telfoon"
                                           class="form-control @error('telfoon') is-invalid @enderror" telfoon="telfoon"
                                           value="{{ old('telfoon') }}" required autocomplete="telfoon">

                                    @error('telfoon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> -->


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
