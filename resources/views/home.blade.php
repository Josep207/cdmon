@extends('admin.layout')

@section('maincontent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Readme.md</div>

                <div class="card-body">
                    <h1>Bienvenido al examen de Josep Cruz</h1>
                        
                    <p>Este proyecto está realizado con Laravel. Para levantar el proyecto he utilizado "php -S localhost:8888 -t public", ya que le puerto 8000 lo tengo ocupado.</p>
                        
                    <p>Aquí explicaré brevemente el desarrollo de los dos ejercicios: </p>

                    <p><strong>Ejercicio 1</strong></p>
                    <p>En este ejercicio, he creado un controlador llamado "MultiplesController", donde en la función "index" realizo todo el desarrollo y se lo envío a la vista.
                    </p>
                    <p>He generado la función "isMultiple" en el modelo "Multiples" ya que he considerado que debía realizar una función genérica en base al número y al multiplo que se le envía por parámetro. Con esta función he evitado realizar una función por cada multiplo, reduciendo todo ese código a una simple función. Además ahora podriamos utilizar cualquier número como múltiplo y no solo el 3 y el 5.</p>

                    <p><strong>Ejercicio 2</strong></p>
                    <p>En este ejercicio he intentado realizar la API con Blueprint y Dredd para realizar los tests.</p>
                    <p>He generado el fichero "api-description.apib" y he lanzado por terminal "dredd" (he generado el dredd.yml) pero solo obtenía el siguiente error <i>"error: API description parser error in C:\Users\Josep\Documents\Proyectos\cdmon\api-description.apib:1 (line 1 column 11): the use of carriage return(s) '\r' in source data isn't currently supported, please contact makers"</i> y después de revisar varios tutoriales y vídeos he decidido utilizar Postman.</p>
                    <p>He creado un controlador llamado "HostController" donde se encuentran todos los métodos necesarios (index,store,show,update,destroy). También he generado una nueva ruta en "api.php" con el contenido <i>Route::apiResource('hosts', 'HostController');</i>. A su vez, he generado la migración necesaria para la tabla de "hosts".</p>
                    <p>Las pruebas que he realizado han sido:</p>

                     <table class="table table-stripe" style="font-size:13px;">
                        <thead>
                        <tr>
                            <th>Método</th>
                            <th>Función</th>
                            <th>URL</th>
                            <th>Data</th>
                            <th>Respuesta</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>POST</td>
                                <td>store</td>
                                <td>http://localhost:8888/api/hosts</td>
                                <td>{
                                        "nombre": "Host 1",
                                        "cores" : "100",
                                        "memoria": "200",
                                        "disco" : "300"
                                    }
                                </td>
                                <td>{
                                        "success": true,
                                        "code": 201,
                                        "message": "Host Added Successfully"
                                    }
                                </td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>index</td>
                                <td>http://localhost:8888/api/hosts</td>
                                <td>-</td> 
                                <td>{
                                        "success": true,
                                        "code": 200,
                                        "data": [
                                            {
                                                "id": 5,
                                                "nombre": "Host 1",
                                                "cores": "100",
                                                "memoria": "200",
                                                "disco": "300",
                                                "created_at": "2019-11-06 18:22:36",
                                                "updated_at": "2019-11-06 18:22:36"
                                            }
                                        ]
                                    }
                                </td>
                            </tr>
                            <tr>
                                <td>GET</td>
                                <td>show</td>
                                <td>http://localhost:8888/api/hosts/5</td>
                                <td>-</td> 
                                <td>{
                                        "success": true,
                                        "code": 200,
                                        "data": [
                                            {
                                                "id": 5,
                                                "nombre": "Host 1",
                                                "cores": "100",
                                                "memoria": "200",
                                                "disco": "300",
                                                "created_at": "2019-11-06 18:22:36",
                                                "updated_at": "2019-11-06 18:22:36"
                                            }
                                        ]
                                    }
                                </td>
                            </tr>
                            <tr>
                                <td>PATCH</td>
                                <td>update</td>
                                <td>http://localhost:8888/api/hosts/5</td>
                                <td>{
                                        "nombre": "Host 1 NEW",
                                        "cores" : "1",
                                        "memoria": "2",
                                        "disco" : "3"
                                    }
                                </td> 
                                <td>{
                                        "success": true,
                                        "code": 200,
                                        "message": "Host Updated Successfully"
                                    }
                                </td>
                            </tr>
                            <tr>
                                <td>DELETE</td>
                                <td>destroy</td>
                                <td>http://localhost:8888/api/hosts/5</td>
                                <td>-</td> 
                                <td>{
                                        "success": true,
                                        "code": 200,
                                        "message": "Host Deleted"
                                    }
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
