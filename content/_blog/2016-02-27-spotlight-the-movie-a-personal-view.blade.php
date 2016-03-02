@extends('_includes.blog_post_base')

@section('post::title', 'Spotlight, the movie: A personal view')
@section('post::date', 'February 27, 2016')
@section('post::brief', 'We worked for five months on that first story. That was a big investment for the Boston Globe — four reporters for 20 or so weeks. But it’s the kind of investment that can be needed for investigative work, and it paid off, beyond our wildest dreams.')
@section('pageTitle')- @yield('post::title')@stop

@section('post_body')

    @markdown
    ![Look up](https://cdn-images-1.medium.com/max/2000/1*_9SDjff_XSe6Kl_LSJrsKg.jpeg)

    The easiest way to accomplish visual balance is to align elements and structure designs with a clear grid. It guides us in the right direction when placing elements and determine dimensions, and it makes it easier for the user to process the interface.

    > Design for change

    No design is ever finished or done. Don’t be afraid of throwing away work, features or designs, good design is always evolving and grows with the business. Design with change in mind will allow us to quickly adapt to new learnings and insights. Every feature or functionality that is introduced needs time to improve. Once something is launched, evaluating performance and iteration should be the focus.

    [Read the complete article on Medium](https://medium.com/@WdeB/digital-product-design-principles-8bc9eb6c080c)
    @endmarkdown

@stop