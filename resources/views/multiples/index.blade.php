@extends('admin.layout')

@section('title')
    <h1 class="mainTitle">Ejercicio Número 1</h1>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active">Ejercicio Número 1</li>
    </ol>
@endsection

@section('maincontent')
 <div class="row mt50">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de múltiplos</div>
                <div class="panel-body">
                    <table class="table table-stripe" style="font-size:13px;">
                        <thead>
                        <tr>
                            <th>Número</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($arFinal) > 0)
                            @foreach($arFinal as $numbers)
	                            <tr>
	                                <td>{{ $numbers }}</td>                  
	                             </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" class="text-danger">Sin resultados.</td>
                            </tr>
                       @endif
                        </tbody>
                    </table>
             </div>
         </div>
     </div>
@endsection