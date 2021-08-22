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
            <input type="text" name="codigo" value="{{$produto->codigo}}"><br>
            Data de nascimento:
            <input type="text" name="data_nasc" value="{{$produto->data_nasc}}"><br>
            sexo:
            <input type="text" name="sexo" value="{{$produto->sexo}}"><br>
            peso:
            <input type="text" name="peso" value="{{$produto->peso}}"><br>
            Data de pesagem:
            <input type="text" name="data_pesag"value="{{$produto->data_pesag}}"><br>
            Observações:
            <input type="text" name="observacoes"value="{{$produto->observacoes}}"><br>
            <input type="submit" name="Salvar"><br>
        </form>
            
    </body>
</html>
