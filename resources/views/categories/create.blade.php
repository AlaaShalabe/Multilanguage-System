@extends('layout.app')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">
                New post information
            </h1>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="field">
                    <label class="label">English Title</label>
                    <div class="control">
                        <input class="input" name="en_title" value="{{ old('en_title') }}" type="text"
                            placeholder="Text input">
                        @error('en_title')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">Arabic Title</label>
                    <div class="control">
                        <input class="input" name="ar_title" value="{{ old('ar_title') }}" type="text"
                            placeholder="Text input">
                        @error('ar_title')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input @error('name')is-danger @enderror" name="name" value="{{ old('name') }}"
                            type="text" placeholder="Text input">
                        @error('name')
                            <div class="help is-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label class="label">Content</label>
                    <div class="control">
                        <textarea class="textarea" id="editor" name="en_content" placeholder="Textarea">{{ old('content') }}</textarea>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Content</label>
                    <div class="control">
                        <textarea class="textarea" id="editor" name="ar_content" placeholder="Textarea">{{ old('content') }}</textarea>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
