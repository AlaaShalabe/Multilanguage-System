@extends('layout.app')
@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">
                {{ __('Categories..') }}
            </h1>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th><abbr title="Position">{{ $categories->count() }}</abbr></th>
                            <th>{{ __('Name') }}</th>
                            <th><abbr title="Played">{{ __('Title') }}</abbr></th>
                            <th><abbr title="Won">{{ __('Content') }}</abbr></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th> </th>

                                <td>{{ $category->translate()->name }}</td>
                                <td>{{ $category->translate()->title }}</td>
                                <td>{{ $category->translate()->content }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
