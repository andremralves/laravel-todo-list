<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Todo List</title>
  </head>
  <body>
    <div class="form-container"> 

      <h1>To-do List</h1>

      @foreach ($listItems as $listItem)
      
        <div class="row mb-2">

          <div class="col-9">
            <p>Task: {{ $listItem->name }} </p> 
          </div>

          <div class="col-3">
              <form class="form-inline justify-content-end" action="{{ route('checkTask', $listItem->id) }}" method="POST" accept-charset="UTF-8">
                {{ csrf_field() }}
                <button class="btn btn-primary">Check!</button>
              </form>
          </div>

        </div>

      @endforeach

        <form class="form-groups" method="POST" action="{{ route('saveItem') }}" accept-charset="UTF-8">
          {{ csrf_field() }}

          <input type="text" id="item" name="item" class="form-control mb-2" placeholder="Add new task">
          <button value="Submit" class="btn btn-primary">Add</button>

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>