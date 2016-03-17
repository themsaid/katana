@extends('_includes.base')

@section('body')

    <div class="welcome">
        <div class="wrapper">
            <h1>Welcome Home!</h1>
            <span>{{ $siteDescription }}</span>
        </div>
    </div>


    <div class="left-side">
        @markdown

        Simplicity is the key to great user experiences. Create fewer features, but make them great instead of just good.
        Show fewer elements, use simplistic styling to reduce cognitive load. Dare to say ‘No’ to prevent the core
        functionality from being lost in the noise.

        > Don’t go for ‘WOW’, go for ‘of course’

        Never chase the **‘wow-effect’**. Product design succeeds when it solves the problem or need of our users in the best possible way.
        Design the product effective & delightful. The reaction we are after from our users is “Of course, that is obvious”.

        I wrote down some design _principles_ for our team to help us make design decisions:

        - Define the problem first
        - Create more value by creating less
        - Strive for consistency
        - Focus the user on one primary action at a time
        - Use your user’s language
        - Minimize user input

        ---

        Check the complete post here:

        https://medium.com/@WdeB/digital-product-design-principles-8bc9eb6c080c

        @endmarkdown
    </div>

    <div class="right-side">
        @include('_includes.sidebar')
    </div>

@stop