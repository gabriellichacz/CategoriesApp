@extends('layouts.app')

@section('content')

<div class="container">
  <form action="/dashboard/{{ $node->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h2> Edit element </h2>
                    </div>

                    <div class="form-group row">
                        <label for="content" class="col-md-4 col-form-label"> Content </label>

                        <textarea id="content"
                            type="text"
                            class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}"
                            name="content"
                            autocomplete="list" autofocus> {{ old('content') ?? $node->content ?? '' }} 
                            </textarea>

                        @if ($errors->has('content'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="parent_id" class="col-md-4 col-form-label"> Parent_id </label>

                        <textarea id="parent_id"
                            type="text"
                            class="form-control{{ $errors->has('parent_id') ? ' is-invalid' : '' }}"
                            name="parent_id"
                            autocomplete="parent_id" autofocus> {{ old('parent_id') ?? $node->parent_id ?? '' }}
                        </textarea>

                        @if ($errors->has('parent_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('parent_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="row pt-4 text-center">
                        <button class="btn btn-link text-white text-decoration-none" style="background-color: blue"> Save edit </button>
                    </div>

                    <div class="row pt-4 text-center">
                        <button type="submit" onclick="return confirm('Do you want do delete this node?')" 
                            class="btn btn-link text-white text-decoration-none" style="background-color: blue"> 
                            <a href="/dashboard/{{ $node->id }}/delete" class="text-decoration-none text-white"> Delete element </a> 
                        </button>
                    </div>

                </div>
            </div>
  </form>
</div>

@endsection
