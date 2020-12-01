@extends('welcome')

@section('content')
    <div class="container">
        <h4>CREER UN POKEMON</h4>
        <form action="/store-pokemon" method="post" enctype="multipart/form-data">
            @csrf
            @if (session('status'))
            <div class="alert alert-danger">
            {{ session('status') }}
            </div>
            @endif
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
                <label for="name">NOM DU POKEMON</label>
                <input type="text" name="nom" id="nom">  
            </div>
            <label for="inputState">TYPE DE POKEMON:</label>
            <input type="text" name="type" id="">
           {{--  <select id="inputState" class="form-control" name="type_id">
            <option selected active>Choix</option>
                    @foreach ($type as $item)
                      <option value="{{$item->id}}">{{$item->nom}}</option>
                    @endforeach
            </select> --}}
            <div>
                <label for="src">FOTO DU POKEMON:</label>
                <input type="file" name="src" id="foto">  
            </div>
            <div>
                <label for="niveau">NIVEAU</label>
                <input type="number" name="niveau" id="foto">  
            </div>
            <button type="submit">CREER</button>
        </form>
    </div>
    
@endsection('content')