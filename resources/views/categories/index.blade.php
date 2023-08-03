@extends('layout.app')
@section('content')
    <section class="section">
        <div class="container">

            @if (Session::get('status'))
                <div class="container column is-11 is-offset-1">
                    <div class="notification is-info">
                        <div>
                            {{ Session::get('status') }}
                        </div>
                    </div>
                </div>
            @endif
            <h1 class="title column is-11 is-offset-1">
                {{ __('All Categories') }}
            </h1>
            <div class="table-container column is-11 is-offset-1">

                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('Created at') }}</th>
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
                                <td> {{ $category->created_at->format('d M Y') }}</td>
                                <td>{{ $category->translate()->name }}</td>
                                <td>{{ $category->translate()->title }}</td>
                                <td>{!! $category->translate()->content !!}</td>
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
