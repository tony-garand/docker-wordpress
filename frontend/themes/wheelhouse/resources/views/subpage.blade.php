{{--
  Template Name: Sub Page
--}}
@extends('layouts.app')
@section('content')
  @while(have_posts()) {{the_post()}}
    @include('partials.sub-page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
