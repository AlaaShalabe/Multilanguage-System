@extends('layout.app')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">
                {{ __('Categories') }}
            </h1>
            @if (Session::get('status'))
                <div class="container">
                    <div class="notification is-info">
                        <div>
                            {{ Session::get('status') }}
                        </div>
                    </div>
                </div>
            @endif
            {{-- <ul class="has-background-info">
                @if (Session::get('status'))
                    <div>
                        {{ Session::get('status') }}
                    </div>
                @endif
            </ul> --}}
            <div class="table-container">

                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('Name') }}</th>
                            <th><abbr title="Played">{{ __('Title') }}</abbr></th>
                            <th><abbr title="Won">{{ __('Content') }}</abbr></th>
                            <th></th>
                            <th> <a class="button is-info is-outlined"
                                    href="{{ route('categories.create') }}">{{ __('Add Category') }}</a></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>


                                <td>{{ $category->translate()->name }}</td>
                                <td>{{ $category->translate()->title }}</td>
                                <td>{{ $category->translate()->content }}</td>
                                <td>
                                    <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                        @csrf
                                        @method('Delete')
                                        <a class="button is-success is-outlined"
                                            href="{{ route('categories.edit', $category) }}">{{ __('Edit') }}</a>
                                        <button class="button is-danger is-outlined"
                                            type="submit">{{ __('Delete') }}</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
