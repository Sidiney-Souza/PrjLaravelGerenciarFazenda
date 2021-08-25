@extends('animal/layort')
        
@section('titulo', "lista dos animais cadastrados")

    @section('conteudo')  
        <h1>Todos os animais presentes</h1>
        @if($errors->any())
            @foreach($errors->all() as $erro)
            <p>
                {{$erro}}
            </p>
            @endforeach
        @endif
        <br><a href="{{route('animal.create')}}">cadastrar um novo animal</a><br><br>
        
        @if(session('msg'))
            {{session('msg')}}<br><br>
        @endif
        
        @foreach($animal as $animal)      
          
         Id: {{$animal->id}},
         Código: {{$animal->codigo}} - 
        <a href='{{route('animal.show', ['animal'=>$animal])}}'>Mais detalhes</a>
        <a href='{{route('animal.edit', ['animal'=>$animal])}}'>Editar este animal</a>
        <br>
        <form method="post" action="{{route('animal.destroy', ['animal'=>$animal])}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Deletar Animal"><br>
        </form>
        
        @endforeach
    @endsection
        
        
