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
        <h1>Novo Produto</h1>
        
        
        
        
        @if(session('msg'))
            <p>{{session('msg')}}</p>
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
        
        
        
        <form method="post" action="{{route('animal.store')}}" >
            @csrf
            Código:<br>
            <input type="text" name="codigo"><br><br>
            data de nascimento:<br>
            <input type="text" name="data_nasc"><br><br>
            sexo:<br>
            <input type="text" name="sexo"><br><br>
            peso:<br>
            <input type="text" name="peso"><br><br>
            data de pesagem:<br>
            <input type="text" name="data_pesag"><br><br>
            Observações:<br>
            <textarea type="text" name="observacoes"></textarea><br><br>
            <input type="submit" name="Salvar"><br>
        </form>
            
    </body>
</html>
