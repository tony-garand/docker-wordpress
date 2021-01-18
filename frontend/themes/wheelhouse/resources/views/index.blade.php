@extends('layouts.app')
@section('content')
@include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>
    {!! get_search_form(true) !!}
  @endif

  @while(have_posts()) {{ the_post() }}
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}

@endsection
@section('sidebar')
  @include('partials.sidebar')
@endsection
