@extends('layout.app')
@section('content')
    <section class="section">
        <div class="container">
            @if (Session::get('warning'))
                <div class="container">
                    <div class="notification is-info">
                        <div>
                            {{ Session::get('warning') }}<a href="{{ route('categories.create') }}" class='alert-link'>
                                {{ __('here') }}</a>..
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="columns is-multiline">
            @foreach ($categories as $category)
                <div class="column is-4">
                    <div class="card ">
                        <header class="card-header">
                            <p class="card-header-title">
                                {{ $category->translate()->name }}
                            </p>
                            <button class="card-header-icon" aria-label="more options">
                                <span class="icon">
                                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                                </span>
                            </button>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                <strong> {{ $category->translate()->title }}</strong>
                                <br>
                                <p>
                                    {!! $category->translate()->content !!}
                                </p>

                                <time style="color: rgb(118, 118, 195)"
                                    datetime="2016-1-1">{{ $category->created_at->format('d M Y') }}</time>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
