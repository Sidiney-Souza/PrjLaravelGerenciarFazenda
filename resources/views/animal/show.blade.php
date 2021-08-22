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
        <h1>Detalhes do animal</h1>
        Id: {{$animal->id}}<br>
        Código:{{$animal->codigo}}<br>
        Data de nascimento: {{$animal->data_nasc}}<br>
        sexo: {{$animal->sexo}}<br>
        peso: {{$animal->peso}}<br>
        Data de pesagem: {{$animal->data_pesag}}<br>
        Observações: {{$animal->observacoes}}<br>
        Data do cadastro: {{$animal->created_at}}<br>
        hora de atualização: {{$animal->update_at}}<br>
        <br><br>
        <a href='{{route('animal.index')}}'>Voltar</a>
    </body>
</html>
