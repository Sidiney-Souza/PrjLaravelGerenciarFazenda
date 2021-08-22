<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Alteralção do animal{{$animal->codigo}}</h1>
        <form action="{{route('animal.update', ['animal'=>$animal])}}" method="POST" >
            @csrf
            @method('PATCH')
            Código:
            <input type="text" name="codigo" value="{{$animal->codigo}}"><br>
            Data de nascimento:
            <input type="text" name="data_nasc" value="{{$animal->data_nasc}}"><br>
            sexo:
            <input type="text" name="sexo" value="{{$animal->sexo}}"><br>
            peso:
            <input type="text" name="peso" value="{{$animal->peso}}"><br>
            Data de pesagem:
            <input type="text" name="data_pesag"value="{{$animal->data_pesag}}"><br>
            Observações:
            <input type="text" name="observacoes"value="{{$animal->observacoes}}"><br>
            <input type="submit" name="Salvar"><br>
        </form>
            
    </body>
</html>
