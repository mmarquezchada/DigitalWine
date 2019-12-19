@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
	#tel{
	 margin-right:16px;	
	}
</style>
 
</head>
<body>
		
 
	<div class="container well">
		<div class="row">
				<div class="col-xs-12"><h2>Tu Perfil</h2></div>
			</div>
		<br /><br />
 
		<form class="form-horizontal">
 
 
					<div class="form-group">
					    <label class="col-sm-2 control-label" for="formGroup">Nombre</label>
					    <div class="col-sm-4">
					      <input class="form-control" type="text" id="formGroup" placeholder="Tu nombre">
					    </div>
					  </div>
 
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="formGroup">Apellidos</label>
					    <div class="col-sm-4">
					      <input class="form-control" type="text" id="formGroup">
					    </div>
					  </div>
 
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="formGroup" id="tel">Teléfono</label>
 
					    <div class="input-group col-sm-3">
					      <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
					      <input class="form-control" type="text" id="formGroup">
					      
					    </div>
					  </div>
 
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="formGroup" id="tel">Correo electrónico</label>
					    <div class="input-group col-sm-3">
					      <span class="input-group-addon">@</span>
					      <input class="form-control" type="text" id="formGroup">
					      
					    </div>
					  </div>
 
					  <div class="form-group">
					    <label class="col-sm-2 control-label" for="formGroup">Información biográfica</label>
					    <div class="col-sm-4">
					      
					      <textarea class="form-control" rows="4"></textarea>
					      
					    </div>
					  </div>
 
					  </div>
			
 
					  </div>
 
						<br />
 
						<div class="form-group">
					    <label class="col-sm-2 control-label" for="formGroup"></label>
					    <div class="col-sm-4">
					      
							<button type="submit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar</button>
							
							<button type="button" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
 
 
					    </div>
					  </div>
 
 
 
		</form>	
 
 
 
	</div>	
	
	
 
 
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

