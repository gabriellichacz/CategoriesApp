@extends('layouts.app')

@section('content')

<div class="container">
<form action="/dashboard" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h2> Add element </h2>
                </div>

                <div class="form-group row">
                    <label for="content" class="col-md-4 col-form-label">Content</label>

                    <input id="content"
                           type="text"
                           class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}"
                           name="content"
                           value="{{ old('content') }}"
                           autocomplete="content" autofocus>

                    @if ($errors->has('content'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group row">
                    <label for="parent_id" class="col-md-4 col-form-label">Parent_id</label>

                    <textarea id="parent_id"
                           type="text"
                           class="form-control{{ $errors->has('parent_id') ? ' is-invalid' : '' }}"
                           name="parent_id"
                           autocomplete="parent_id" autofocus> {{ old('parent_id') }} </textarea>

                    @if ($errors->has('parent_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('parent_id') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-link text-white text-decoration-none m-3" style="background-color: blue"> Add new element </button>
                </div>

            </div>
        </div>
</form>

@endsection