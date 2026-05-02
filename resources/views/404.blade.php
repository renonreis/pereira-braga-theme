@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    @if (!have_posts())
        <x-paragraph>
            {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
        </x-paragraph>

        {!! get_search_form(false) !!}
    @endif
@endsection
