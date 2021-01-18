@extends('layouts.app')
@section('content')
  @include('partials.page-header')
  <div class="search-content">
  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>
    {!! get_search_form(false) !!}
  @endif
  @while(have_posts()) {{ the_post() }}
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!}
  </div>
@endsection
