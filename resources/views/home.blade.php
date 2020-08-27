@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card mb-5">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{ __('You are logged in!') }}
                </div>
            </div>

            <div class="card mb-5">
                <div class="card-body text-center">
                    @if (auth()->user()->secret)
                        {{ auth()->user()->secret }}
                    @else
                        You don't have any secret yet, <a href="{{ route('secret.edit') }}" title="Edit secret">add one.</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
