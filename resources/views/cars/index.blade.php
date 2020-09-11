<h1>Cars list</h1>
<div>
  <a href="{{route('cars.create')}}">Add new car</a>
</div>
<br>
<br>
@foreach ($cars as $car)
  <div>
    <a href="{{ route('cars.show', $car)}}" >{{$car->manifacturer}} {{ $car->engine}}</a>
    <a href="{{ route('cars.edit', $car)}}">modifica la tua auto</a>

    <form action="{{route('cars.destroy', $car->id)}}" method="post">
      @csrf
      @method('DELETE')
 
      <input type="submit" value="elimina">
    </form>

  </div>
@endforeach
