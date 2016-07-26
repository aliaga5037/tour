@foreach($test as $t)

{{  $t->id  }}

@foreach($t->tour as $ta)

{{  $ta->id }}

@endforeach

@endforeach
