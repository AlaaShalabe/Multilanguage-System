{{-- @extends('layout.app')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">
                {{ __('Update Category') }}
            </h1>
            <form action="{{ route('categories.update', $category) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label">{{ __('English Name') }}</label>
                    <div class="control">
                        <input class="input @error('en_name')is-danger @enderror" name="en_name"
                            value="{{ old('en_name', $category->translate('en')->name) }}" type="text"
                            placeholder="{{ __('Name') }}">
                        @error('en_name')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('Arabic Name') }}</label>
                    <div class="control">
                        <input class="input @error('ar_name')is-danger @enderror" name="ar_name"
                            value="{{ old('ar_name', $category->translate('ar')->name) }}" type="text"
                            placeholder="{{ __('Name') }}">
                        @error('ar_name')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('English Title') }}</label>
                    <div class="control">
                        <input class="input" name="en_title"
                            value="{{ old('en_title', $category->translate('en')->title) }}" type="text"
                            placeholder="{{ __('Title') }}">
                        @error('en_title')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('Arabic Title') }}</label>
                    <div class="control">
                        <input class="input" name="ar_title"
                            value="{{ old('ar_title', $category->translate('ar')->title) }}" type="text"
                            placeholder="{{ __('Title') }}">
                        @error('ar_title')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('English Content') }}</label>
                    <div class="control">
                        <textarea class="textarea" id="editor" name="en_content" placeholder="{{ __('Textarea') }}">{{ old('en_content', $category->translate('en')->content) }}</textarea>
                        @error('en_content')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('Arabic Content') }}</label>
                    <div class="control">
                        <textarea class="textarea" id="editor" name="ar_content" placeholder="{{ __('Textarea') }}">{{ old('ar_content', $category->translate('ar')->content) }}</textarea>
                        @error('ar_content')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">{{ __('Update') }}</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light">{{ __('Cancel') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection --}}
@extends('layout.app')
@section('content')
    <section class="section">
        <div class="container column is-three-fifths is-offset-one-fifth">
            <h1 class="title">
                {{ __('Update Category') }}
            </h1>
            <form action="{{ route('categories.update', $category) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label">{{ __('English Name') }}</label>
                    <div class="control">
                        <input class="input @error('en_name')is-danger @enderror" name="en_name"
                            value="{{ old('en_name', $category->translate('en')->name) }}" type="text"
                            placeholder="{{ __('Name') }}">
                        @error('en_name')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('Arabic Name') }}</label>
                    <div class="control">
                        <input class="input @error('ar_name')is-danger @enderror" name="ar_name"
                            value="{{ old('ar_name', $category->translate('ar')->name) }}" type="text"
                            placeholder="{{ __('Name') }}">
                        @error('ar_name')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('English Title') }}</label>
                    <div class="control">
                        <input class="input" name="en_title"
                            value="{{ old('en_title', $category->translate('en')->title) }}" type="text"
                            placeholder="{{ __('Title') }}">
                        @error('en_title')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('Arabic Title') }}</label>
                    <div class="control">
                        <input class="input" name="ar_title"
                            value="{{ old('ar_title', $category->translate('ar')->title) }}" type="text"
                            placeholder="{{ __('Title') }}">
                        @error('ar_title')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('English Content') }}</label>
                    <div class="control">
                        <textarea id="editor1" class="summernote" name="en_content" placeholder="{{ __('Content') }}">{{ old('en_content', $category->translate('en')->content) }}</textarea>
                        @error('en_content')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">{{ __('Arabic Content') }}</label>
                    <div class="control">
                        <textarea id="summernote" class="summernote" name="ar_content" placeholder="{{ __('Content') }}">{{ old('ar_content', $category->translate('ar')->content) }}</textarea>
                        @error('ar_content')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">{{ __('Update') }}</button>
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
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush
