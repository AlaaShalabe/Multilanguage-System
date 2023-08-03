@extends('layout.app')
@section('content')
    <section class="section">
        <div class="container column is-three-fifths is-offset-one-fifth">
            <h1 class="title">
                {{ __('New Category') }}
            </h1>
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Name En --}}
                <div class="field">
                    <label>{{ __('English Name') }}</label>
                    <div class="control">
                        <input class="input @error('en_name')is-danger @enderror" name="en_name" value="{{ old('en_name') }}"
                            type="text" placeholder="{{ __('Name') }}">
                        @error('en_name')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Name Ar --}}
                <div class="field">
                    <label>{{ __('Arabic Name') }}</label>
                    <div class="control">
                        <input class="input @error('ar_name')is-danger @enderror" name="ar_name"
                            value="{{ old('ar_name') }}" type="text" placeholder="{{ __('Name') }}">
                        @error('ar_name')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Title en --}}
                <div class="field">
                    <label>{{ __('English Title') }}</label>
                    <div class="control">
                        <input class="input @error('en_title')is-danger @enderror" name="en_title"
                            value="{{ old('en_title') }}" type="text" placeholder="{{ __('Title') }}">
                        @error('en_title')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Title Ar --}}
                <div class="field">
                    <label>{{ __('Arabic Title') }}</label>
                    <div class="control">
                        <input class="input @error('ar_title')is-danger @enderror" name="ar_title"
                            value="{{ old('ar_title') }}" type="text" placeholder="{{ __('Title') }}">
                        @error('ar_title')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Content en --}}
                <div class="field">
                    <label for="editor1">{{ __('English Content') }}</label>
                    <div class="control">
                        <textarea id="editor1" class="summernote" name="en_content" placeholder="{{ __('Content') }}">{{ old('en_content') }}</textarea>
                        @error('en_content')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- Content Ar --}}
                <div class="field">
                    <label for="editor2">{{ __('Arabic Content') }}</label>
                    <div class="control">
                        <textarea id="summernote" class="summernote" name="ar_content" placeholder="{{ __('Content') }}">{{ old('ar_content') }}</textarea>
                        @error('ar_content')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- create/cancel --}}
                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-link">{{ __('Create') }}</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light">{{ __('Cancel') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $('.summernote').summernote({
            inheritPlaceholder: true,
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush
