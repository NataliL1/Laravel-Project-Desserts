
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

    Редакция на оценките

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

      <form method="post" action="{{ route('desserts.update', $desserts->id) }}">

          <div class="form-group">

              @csrf

              @method('PATCH')

              <label for="potr">Име на потребител:</label>

              <input type="text" class="form-control" name="fn" value="{{ $desserts->potr }}"/>

          </div>

          <div class="form-group">

              <label for="name">Име на десерт:</label>

              <input type="text" class="form-control" name="name" value="{{ $desserts->name }}"/>

          </div>
          <div class="form-group">

              <label for="score">Оценка:</label>

              <input type="text" class="form-control" name="score"  value="{{ $desserts->score }}"/>

          </div>
          <div class="text-center d-grid">
            <button type="submit" class="btn btn-success mt-3 btn-lg">Актуализирай</button>
</div>
      </form>

  </div>

</div>

@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
