@extends('layouts.app')



@section('content')

    <!--begin::Signin-->
    <div class="m-login__signin">
        <div class="m-login__title">
            <h3>{{__('admin.Create_an_account')}}</h3>
        </div>

        <!--begin::Form-->
        <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group m-form__group">
                <input class="form-control m-input @error('email') is-invalid @enderror" type="email" placeholder="{{__('admin.Email')}}" name="email" required  value="{{ old('email') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group m-form__group">
                <input class="form-control m-input m-login__form-input--last @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password" placeholder="{{__('admin.Password')}}" >
                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!--begin::Action-->
            <div class="m-login__action">
                <a class="m-link" href="{{ route('password.request') }}">
                    {{ __('admin.Forgot_Your_Password') }}
                </a>
                <button  type="submit" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">{{ __('admin.Login') }}</button>

            </div>
            <!--end::Action-->
        </form>
        <!--end::Form-->


        <!--begin::Divider-->
        <div class="m-login__form-divider">
            <div class="m-divider">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!--end::Divider-->

        <!--begin::Options-->
        <!--<div class="m-login__options">
            <a href="login-6.html#" class="btn btn-primary m-btn m-btn--pill  m-btn  m-btn m-btn--icon">
						<span>
							<i class="fab fa-facebook-f"></i>
							<span>فیس بوک</span>
						</span>
            </a>

            <a href="login-6.html#" class="btn btn-info m-btn m-btn--pill  m-btn  m-btn m-btn--icon">
						<span>
							<i class="fab fa-twitter"></i>
							<span>توئتر</span>
						</span>
            </a>

            <a href="login-6.html#" class="btn btn-danger m-btn m-btn--pill  m-btn  m-btn m-btn--icon">
						<span>
							<i class="fab fa-google"></i>
							<span>گوگل</span>
						</span>
            </a>
        </div>-->
        <!--end::Options-->
    </div>
    <!--end::Signin-->
@endsection
