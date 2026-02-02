@extends('layouts.app')

@section('content')
    <div x-data="articleManager({ 
                                    articles: {{ Js::from($articles) }}, 
                                    search: '{{ $search ?? '' }}',
                                    createUrl: '{{ route('articles.store') }}',
                                    csrf: '{{ csrf_token() }}'
                                })" class="space-y-6">
        @include('articles.partials.header')

        @include('articles.partials.list')

        @include('articles.partials.modal')
    </div>
@endsection