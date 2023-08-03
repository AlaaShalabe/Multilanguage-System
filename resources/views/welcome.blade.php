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
    </section>
@endsection
