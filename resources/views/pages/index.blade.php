@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    {{-- <h5 class="card-header">{{ __('') }}</h5> --}}
                    <div class="card-body">
                        <form action="{{ route('page.store') }}" method="POST" enctype="multipart/form-data"
                            class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label for="formFile" class="form-label">{{ __('Upload File') }}</label>
                                <input @class(['form-control', 'is-invalid' => $errors->has('file')]) name="file" type="file" id="formFile">

                                @error('file')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">{{ __('Upload') }}</button>
                            </div>
                        </form>
                        {{-- {{ dd($errors) }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
