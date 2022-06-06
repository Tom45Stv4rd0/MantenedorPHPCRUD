<?php 
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment: filename= usuarios.xls");
    
?>  
<table >
                <thead >
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Password</th>
                        <th>Rut</th>
                        <th>Edad</th>
                        <th>Cargo</th>
                        <th>Fecha</th>
                        <th>Acciones</th>

                    </tr>   
                </thead>
                <tbody>
        
                    <tr>
                        @foreach( $empleados as $empleado )
                        <td>{{ $empleado->id}}</td>
                        <td>{{ $empleado->nombre}}</td>
                        <td>{{ $empleado->mail}}</td>
                        <td>{{ $empleado->password}}</td>
                        <td>{{ $empleado->rut}}</td>
                        <td>{{ $empleado->edad}}</td>
                        <td>{{ $empleado->cargo}}</td>
                        <td>{{ $empleado->fecha_ingreso}}</td>
                        
            
                    </tr>
                        @endforeach
        
                </tbody>
            </table>
