@extends('layout.app')
@section('content')
    <section class="section">
        <div class="container">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @if (session($key ?? 'warning'))
                <div class="alert alert-default" role="alert">
                    {{ session($key ?? 'warning') }}<a href="{{ route('categories.create') }}" class='alert-link'> here</a>..
                </div>
            @endif
        </div>
    </section>
@endsection
