<h1><?php{{$heading}}?></h1>
@foreach ($listings as $listing)
<h2><?php  $listing['title'];?></h2>
<p><?php echo $listing['description'];?></p>

@endforeach