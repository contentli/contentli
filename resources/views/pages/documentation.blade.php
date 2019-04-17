@extends('layouts.app')

@section('hero-title', 'Contentli CMS')
@section('hero-subtitle' ,'Documentation')

@section('content')

<div class="columns">
    <div class="column is-narrow">
        @include('pages.shared.documentation-sidebar')
    </div>
    <div class="column">
        <h1 class="title">Documentation</h1>
        <div class="content">
            <p>Stuff..</p>
        </div>
    </div>
</div>


@endsection
