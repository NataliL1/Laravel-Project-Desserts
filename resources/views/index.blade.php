
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
  .purvi{
    background-color: #444444;
  }
</style>

<script>

function f(x) {

        for(i = 0; i < x; i+=10)

                document.write('<img src="https://img.icons8.com/fluency/2x/christmas-star.png" width="10px"> ');

}

</script>

<div class="container purvi mt-5 mb-5 text-white">
  <div class="row">
    <div class="col mt-3">
      <div>
        <a href="http://127.0.0.1/kursova/public/dashboard" class=" btn btn-success">Назад към рецептите</a>
      </div>
    </div>
    <div class="col">
      <h4>Списък с оценки</h4>
    </div>
  </div>

<div class="row mt-4">
<div class="col">
<div class="uper">

  @if(session()->get('success'))

    <div class="alert alert-success">

      {{ session()->get('success') }}  

    </div><br />

  @endif

  @if(session()->get('error'))

    <div class="alert alert-danger">

      {{ session()->get('error') }}

    </div><br />

  @endif

<a href="{{ route('desserts.create')}}" class="btn btn-success">Добави</a>
</div>
<div class="col">
<div class="float-end mb-3">

 Данни потребител: {{ Auth::user()->name }} |-> {{ Auth::user()->email }} 

  <a class="btn btn-success" href="{{ route('logout') }}" class="btn btn-dark" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

    {{ __('Изход') }}

  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

    @csrf

  </form>
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col">

  <table class="table table-striped">

    <thead>

        <tr class="table-success">

          <td>Номер</td>

          <td>Име на потребител</td>

          <td>Име на десерт</td>
		      <td>Оценка</td>
          <td colspan="2"></td>

        </tr>

    </thead>

    <tbody>

        @foreach($desserts as $desserts)

        <tr class="table-dark text-white">

            <td>{{$desserts->id}}</td>

            <td>{{$desserts->potr}}</td>

            <td>{{$desserts->name}}</td>
			<td>{{$desserts->score}}<br />
			@for ($i = 0; $i < $desserts->score; $i+=10)

    <img src="https://img.icons8.com/fluency/2x/christmas-star.png" width="25px">

@endfor
<br />
<script>f( {{$desserts->score}} );</script> 
			
			
			</td>

            <td>
			@if(Auth::user()->isAdmin==1)
			<a href="{{ route('desserts.edit', $desserts->id)}}" class="btn btn-success">Редактирай</a>
		@endif
		</td>

            <td>
@if(Auth::user()->isAdmin==1)
                <form action="{{ route('desserts.destroy', $desserts->id)}}" method="post" onsubmit="return confirm('Записът ще бъде изтрит!');">

                  @csrf

                  @method('DELETE')

                  <button class="btn btn-danger" type="submit">Изтрий</button>

                </form>
@endif
            </td>

        </tr>

        @endforeach

    </tbody>

  </table>

</div>
</div>
</div>


@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
