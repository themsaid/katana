---
view::extends: _includes.base
view::yields: body
pageTitle: - Some Markdown
---

# {{ $siteName }}

While this is a pure `.md` **file**, you can still call variables the Blade way.

#### The following is a product of a Blade foreach loop working with a pure markdown syntax. 

@foreach(['Mon','Tues','Wednes'] as $word)
{{ $word }}**day**
@endforeach

<div style="color:blue;">
This markdown won't **work**.
<div>

<div style="color:blue;">
@markdown
But this will **work**.
@endmarkdown
<div>

