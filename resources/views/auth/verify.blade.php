@extends('layouts.app')

@section('title','Verify Email')

@section('content')
<div class="row justify-content-center">
        <!-- left column -->
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="box box-warning">
            <div class="box-header">{{ __('Verify Your Email Address') }}</div>

            <div class="box-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
