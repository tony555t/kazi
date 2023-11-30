{{--adding dependencies--}}

<h1>{{$heading}}</h1>
@if (count ($listings)==0)
@endif
<p> no listings found</p>
{{-- looping through each listing in the listing array--}}

@foreach ($listings as $listing)
<h2>
    {{$listing['title']}}
</h2>
<p>
     {{$listing['description']}}
</p>

@endforeach