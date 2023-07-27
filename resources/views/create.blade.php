
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="https://cdn.pixabay.com/photo/2020/03/03/13/38/cupcake-4898766__340.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Сладки изкушения</title>

@extends('layout')

@section('content')

<style>
body{
    background-color: #444444;
  }
  .uper {

    margin-top: 40px;
    background-color:#d1e7dd;

  }

</style>


<div class="card uper">

  <div class="card-header h5 text-center">

    Оценка

  </div>

  <div class="card-body">

    @if ($errors->any())

      <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

              <li>{{ $error }}</li>

            @endforeach

        </ul>

      </div><br />

    @endif

      <form method="post" action="{{ route('desserts.store') }}">

          <div class="form-group">

              @csrf

              <label for="potr">Име на потребител:</label>

              <input type="text" class="form-control" name="potr"/>

          </div>

          <div class="form-group">

              <label for="name">Име на десерт:</label>

              <input type="text" class="form-control" name="name"/>

          </div>

          <div class="form-group">

              <label for="score">Оценка:</label>

              <input id="pi_input" type="range" min="0" max="100" value="55" name="score" />
<p>Точки: <output id="value"></output></p>
<script>
const value = document.querySelector("#value")
const input = document.querySelector("#pi_input")
value.textContent = input.value
input.addEventListener("input", (event) => {
  value.textContent = event.target.value
})
</script>

          </div>
		  <div class="text-center d-grid">
          <button type="submit" class="btn btn-success mt-3 btn-lg">Добави оценка</button>
</dov>
      </form>

  </div>

</div>

@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
