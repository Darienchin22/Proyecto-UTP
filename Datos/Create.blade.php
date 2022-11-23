
@extends('layouts.app')

@section('Titulo', 'crear')





@section('content')
<!-- Edit Modal HTML -->

<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form  action="{{route('Datos.store')}}" method="POST"> 
				@csrf

					<div class="modal-header">						
						<h4 class="modal-title">Agregar nuevo Alumno</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label placeholder="Nombre" name="Nombre"
							>Nombre</label>
							<input type="text" class="form-control" required >
						</div>
						<div class="form-group">
							<label placeholder="Correo" name="Correo"
							>Correo</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label placeholder="Direccion" name="Direccion"
							>Direccion</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label placeholder="Telefono" name="Telefono"
							>Telefono</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Crear">
					</div>
					
				</form>
			</div>
		</div>
	</div>
	@endsection