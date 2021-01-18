{{--
  Template Name: Main Page
--}}
@extends('layouts.app')
@section('content')
  @while(have_posts()) {{the_post()}}
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
