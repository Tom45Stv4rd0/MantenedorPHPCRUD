    <h1 class="bold"> {{$modo}} Empleado  </h1>
    <h2>Formulario de contacto</h2>
    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach( $errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach   
            </ul>
        </div>
    @endif

    <div class=" form-group">
        <label for="Nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{ isset($empleado->nombre)?$empleado->nombre:old('nombre') }}" id="nombre">
        
    </div>    
    <div class=" form-group">
        <label for="Correo">Correo</label>
        <input type="text" class="form-control" name="mail" value="{{ isset($empleado->mail)?$empleado->mail:old('mail')}}" id="mail">
        
    </div>
    <div class=" form-group">
        <label for="Password">Password</label>
        <input type="text" class="form-control" name="password" value="{{ isset($empleado->password)?$empleado->password:old('password') }}" id="password">
        
    </div>
    <div class=" form-group">
        <label for="Rut">Rut (formato 12345678-9)</label>
        <input type="text" class="form-control" name="rut" value="{{ isset($empleado->rut)?$empleado->rut:old('rut')}}" id="rut">
        
    </div>
    <div class=" form-group">
        <label for="Edad">Edad</label>
        <input type="text" class="form-control" name="edad" value="{{ isset($empleado->edad)?$empleado->edad:old('edad') }}" id="edad">
        
    </div>
    <div class=" form-group">
        <label for="Cargo">Cargo</label>
        <input type="text" class="form-control" name="cargo" value="{{ isset($empleado->cargo)?$empleado->cargo:old('cargo') }}" id="cargo">
        
    </div>
    <div class=" form-group">
        <label for="Fecha">Fecha de Ingreso</label>
        <input type="date" class="form-control" name="fecha_ingreso" value="{{ isset($empleado->fecha_ingreso)?$empleado->fecha_ingreso:old('fecha_ingreso') }}" id="fecha_ingreso">
        <br>
    </div>   

    <input class="btn btn-success" type="submit" value="{{$modo}} Datos">
    <a class="btn btn-primary" href="{{ url('usuario/create') }}">Regresar</a>