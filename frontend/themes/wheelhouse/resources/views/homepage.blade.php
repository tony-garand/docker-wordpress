{{--
  Template Name: Home Page
--}}
@extends('layouts.app')
@section('content')
  @while(have_posts()) {{the_post()}}
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
