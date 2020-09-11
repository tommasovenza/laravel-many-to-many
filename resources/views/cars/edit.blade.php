<h1>Modifica auto: {{ $car->manifacturer }}</h1>

{{-- Validazione form --}}
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div>
    <form action="{{ route('cars.update', $car->id) }}"   method="post">
        @csrf
        @method('PUT')

        <label>Manifacturer:</label><br>
        <input type="text" name="manifacturer" value="{{ $car->manifacturer }}" placeholder="manifacturer">
        <br>
        <br>
        <label>Year:</label><br>
        <input type="number" name="year" value="{{ $car->year }}" placeholder="year">
        <br>
        <br>
        <label>Engine:</label><br>
        <input type="text" name="engine" value="{{ $car->engine }}" placeholder="engine">
        <br>
        <br>
        <label>Plate:</label><br>
        <input type="text" name="plate" value="{{ $car->plate }}" placeholder="plate">
        <br>
        <br>
        <div class="checkboxes">
            <span>Type:</span>
            @foreach ($tags as $tag)
              <div>
                <input type="checkbox" name="tags[]" value="{{$tag->id}}">
                <label>{{$tag->name}}</label>
              </div>
            @endforeach
          </div>
          <br>
          <br>
          <div>
            <select name="user_id">
              @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
            </select> 
          </div>
          <br>
          <br>
        <input type="submit" name="" value="save">
    </form>
</div>