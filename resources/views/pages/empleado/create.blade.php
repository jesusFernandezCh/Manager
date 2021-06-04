<!-- Modal -->
{!! Form::open(['route'=>'empleados.store','method'=>'POST', 'class'=>'formlDinamic', 'id'=>'guardarRegistro']) !!}
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><i class="icon icon-group"></i> Nuevo Registro</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<div class="form-row">
					<div class="col-md-12">
						<div class="form-row">
							<div class="col-6 text-primary">
								Datos Personales
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-3 m-0" id="password_group">
								{{-- <i class="icon-file-text mr-2"></i> --}}
								{!! Form::label('p_nombre', 'Primer Nombre', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('p_nombre', null, ['class'=>'form-control r-0 light s-12',  'id'=>'p_nombre', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="name_span"></span>
							</div>
							<div class="form-group col-3 m-0">
								{{-- <i class="icon-key4 mr-2"></i> --}}
								{!! Form::label('p_apellido', 'Primer Apellido', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('p_apellido', null, ['class'=>'form-control r-0 light s-12', 'id'=>'p_apellido']) !!}
								<span class="code_span"></span>
							</div>
							<div class="form-group col-3 m-0" id="password_group">
								{{-- <i class="icon-file-text mr-2"></i> --}}
								{!! Form::label('s_nombre', 'Segundo Nombre', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('s_nombre', null, ['class'=>'form-control r-0 light s-12',  'id'=>'s_nombre', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="name_span"></span>
							</div>
							<div class="form-group col-3 m-0">
								{{-- <i class="icon-key4 mr-2"></i> --}}
								{!! Form::label('s_apellido', 'Segundo Apellido', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('s_apellido', null, ['class'=>'form-control r-0 light s-12', 'id'=>'p_apellido']) !!}
								<span class="code_span"></span>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-3 m-0" id="password_group">
								{{-- <i class="icon-text_fields mr-2"></i> --}}
								{!! Form::label('cedula', 'Cedula', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('cedula', null, ['class'=>'form-control r-0 light s-12',  'id'=>'cedula', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="symbol_span"></span>
							</div>
							<div class="form-group col-3 m-0">
								{{-- <i class="icon-cogs mr-2"></i> --}}
								{!! Form::label('fecha_nacimiento', 'Fecha Nacimiento', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('fecha_nacimiento', null, ['class'=>'form-control r-0 light s-12',  'id'=>'fecha_nacimiento', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="active_span"></span>
							</div>
							<div class="form-group col-3 m-0" id="password_group">
								{{-- <i class="icon-text_fields mr-2"></i> --}}
								{!! Form::label('sexo', 'Sexo', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('sexo', [], null, ['class'=>'form-control r-0 light s-12', 'id'=>'sexo', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="symbol_span"></span>
							</div>
							<div class="form-group col-3 m-0">
								{{-- <i class="icon-cogs mr-2"></i> --}}
								{!! Form::label('grupo_sanguineo', 'Grupo Sanguineo', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('grupo_sanguineo', $grupoSanguineo, null, ['class'=>'form-control r-0 light s-12', 'id'=>'grupo_sanguineo', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="active_span"></span>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-row">
							<div class="col-6">
								<br>
								Tallas
							</div>
							<div class="col-6">
								<br>
								Dirección Habitación
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-2 m-0" id="password_group">
								{{-- <i class="icon-text_fields mr-2"></i> --}}
								{!! Form::label('talla_camisa', 'Camisa', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('talla_camisa', $tallaCamisa, null, ['class'=>'form-control r-0 light s-12', 'id'=>'talla_camisa', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="symbol_span"></span>
							</div>
							<div class="form-group col-2 m-0">
								{{-- <i class="icon-cogs mr-2"></i> --}}
								{!! Form::label('talla_pantalon', 'Pantalón', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('talla_pantalon', $tallaPantalon, null, ['class'=>'form-control r-0 light s-12', 'id'=>'talla_pantalon', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="talla_pantalon"></span>
							</div>
							<div class="form-group col-2 m-0" id="password_group">
								{{-- <i class="icon-text_fields mr-2"></i> --}}
								{!! Form::label('talla_calzado', 'Calzado', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('talla_calzado', $tallaCalzado, null, ['class'=>'form-control r-0 light s-12', 'id'=>'talla_calsado', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="talla_calzado_span"></span>
							</div>
							<div class="form-group col-2 m-0" id="password_group">
								{{-- <i class="icon-text_fields mr-2"></i> --}}
								{!! Form::label('estado', 'Estado', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('estado', $estados, null, ['class'=>'form-control r-0 light s-12', 'id'=>'estado', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="estado_span"></span>
							</div>
							<div class="form-group col-2 m-0">
								{{-- <i class="icon-cogs mr-2"></i> --}}
								{!! Form::label('municipio', 'Municipio', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('municipio', $municipios, null, ['class'=>'form-control r-0 light s-12', 'id'=>'municipio', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="municipio_span"></span>
							</div>
							<div class="form-group col-2 m-0" id="password_group">
								{{-- <i class="icon-text_fields mr-2"></i> --}}
								{!! Form::label('parroquia', 'Parroquia', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('parroquia', $parroquias, null, ['class'=>'form-control r-0 light s-12', 'id'=>'parroquia', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="parroquia_span"></span>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-3 m-0" id="password_group">
								{!! Form::label('telefono', 'N° Telefonico Local', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('telefono', null, ['class'=>'form-control r-0 light s-12',  'id'=>'telefono', 'onclick'=>'inputClear(this.id)','placeholder'=>'000 000-00-00']) !!}							
								<span class="telefono_span"></span>
							</div>
							<div class="form-group col-3 m-0" id="password_group">
								{!! Form::label('telefono', 'N° Telefonico Móvil', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('telefono', null, ['class'=>'form-control r-0 light s-12',  'id'=>'telefono_movil', 'onclick'=>'inputClear(this.id)','placeholder'=>'000 000-00-00']) !!}							
								<span class="telefono_movil_span"></span>
							</div>
							<div class="form-group col-6 m-0" id="password_group">
								{!! Form::label('direccion', 'Dirección', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('direccion', null, ['class'=>'form-control r-0 light s-12',  'id'=>'direccion', 'onclick'=>'inputClear(this.id)','placeholder'=>'Calle, Edificio/Casa, Torre, Piso, Letra, N° Apartamento']) !!}
								<span class="direccion_span"></span>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-row">
							<div class="col-6 text-primary">
								<br>
								Datos de Empleado
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-3 m-0" id="password_group">
								{!! Form::label('ct', 'Credenciales', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('ct', null, ['class'=>'form-control r-0 light s-12',  'id'=>'ct', 'onclick'=>'inputClear(this.id)','placeholder'=>'CT0000']) !!}							
								<span class="ct_span"></span>
							</div>
							<div class="form-group col-3 m-0" id="password_group">
								{!! Form::label('cargo', 'Cargo', ['class'=>'col-form-label s-12']) !!}
								{!! Form::select('cargo', $cargos, null, ['class'=>'form-control r-0 light s-12', 'id'=>'parroquia', 'onclick'=>'inputClear(this.id)']) !!}
								<span class="cargo_span"></span>
							</div>
							<div class="form-group col-3 m-0" id="password_group">
								{!! Form::label('correo', 'Correo', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('correo', null, ['class'=>'form-control r-0 light s-12',  'id'=>'correo', 'onclick'=>'inputClear(this.id)','placeholder'=>'direccion@email.com']) !!}
								<span class="correo_span"></span>
							</div>
							<div class="form-group col-3 m-0" id="password_group">
								{!! Form::label('correo2', 'Correo Alternativo', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('correo2', null, ['class'=>'form-control r-0 light s-12',  'id'=>'correo2', 'onclick'=>'inputClear(this.id)','placeholder'=>'direccion@email.com']) !!}
								<span class="correo2_span"></span>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-3 m-0" id="password_group">
								{!! Form::label('fecha_ingreso', 'Fecha Ingreso', ['class'=>'col-form-label s-12']) !!}
								{!! Form::text('fecha_ingreso', null, ['class'=>'form-control r-0 light s-12',  'id'=>'fecha_ingreso', 'onclick'=>'inputClear(this.id)','placeholder'=>'']) !!}
								<span class="fecha_ingreso_span"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">{{ __('Close')}}</button>
				<button type="submit" class="btn btn-primary"><i class="icon-save mr-2"></i>{{ __('Save data')}}</button>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}