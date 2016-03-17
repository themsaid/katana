@extends('_includes.base')

@section('pageTitle', '- Blog')

@section('body')

    <div class="left-side">
        @foreach($paginatedBlogPosts as $post)

            <article>
                <p>
                    <a href="@url($post->path)">{{ $post->title }}</a>
                    <br>
                    <small>{{ $post->date }}</small>
                    <br>
                    {{ str_limit($post->brief, 130) }}
                </p>
            </article>

        @endforeach

        @include('_includes.blog_paginator')
    </div>

    <div class="right-side">
        @include('_includes.sidebar')
    </div>

@stop