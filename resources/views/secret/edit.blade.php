@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Secret Settings') }}</div>

                <div class="card-body">
                    <form action="{{ route('secret.store') }}"  method="POST">
                        @csrf

                        <div class="form-group is-invalid">
                            <label for="secret">Your secret</label>
                            <input id="secret" type="text" name="secret" class="form-control @error('secret') is-invalid @enderror" value="{{ old('secret') }}" aria-describedby="secret-help" required>
                            <div class="d-flex justify-content-between w-100">
                                <small id="secret-help" class="form-text text-muted @error('secret') is-invalid @enderror">We'll never share your secret with anyone else.</small>
                                @error('secret')<div class="invalid-feedback w-auto">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
