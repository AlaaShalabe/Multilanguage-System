@extends('layout.app')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">
                {{ __('New Category') }}
            </h1>
            {{-- <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul> --}}
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="field">
                    <label class="label">{{ __('English Name') }}</label>
                    <div class="control">
                        <input class="input @error('en_name')is-danger @enderror" name="en_name" value="{{ old('en_name') }}"
                            type="text" placeholder="Text input">
                        @error('en_name')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('Arabic Name') }}</label>
                    <div class="control">
                        <input class="input @error('ar_name')is-danger @enderror" name="ar_name"
                            value="{{ old('ar_name') }}" type="text" placeholder="Text input">
                        @error('ar_name')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('English Title') }}</label>
                    <div class="control">
                        <input class="input" name="en_title" value="{{ old('en_title') }}" type="text"
                            placeholder="Text input">
                        @error('en_title')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('Arabic Title') }}</label>
                    <div class="control">
                        <input class="input" name="ar_title" value="{{ old('ar_title') }}" type="text"
                            placeholder="Text input">
                        @error('ar_title')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('English Content') }}</label>
                    <div class="control">
                        <textarea class="textarea" id="editor" name="en_content" placeholder="Textarea">{{ old('en_content') }}</textarea>
                        @error('en_content')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('Arabic Content') }}</label>
                    <div class="control">
                        <textarea class="textarea" id="editor" name="ar_content" placeholder="Textarea">{{ old('ar_content') }}</textarea>
                        @error('ar_content')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">{{ __('Create') }}</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light">{{ __('Cancel') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
