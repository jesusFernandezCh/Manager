<!-- Modal -->
{!! Form::open(['route'=>'empleados.store','method'=>'POST', 'class'=>'formlDinamics', 'id'=>'guardarRegistros']) !!}
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
							<div class="col-12 text-primary">
								Datos Personales
								{{-- <hr> --}}
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-3" id="p_nombre_group">
								{!! Form::text('p_nombre', null, ['class'=>'form-control r-0 light s-12',  'id'=>'p_nombre', 'onclick'=>'inputClear(this.id)', 'placeholder'=>'Primer Nombre']) !!}
								<span class="p_nombre_span"></span>
							</div>
							<div class="form-group col-3" id="p_apellido_group">
								{!! Form::text('p_apellido', null, ['class'=>'form-control r-0 light s-12', 'id'=>'p_apellido', 'placeholder'=>'Primer Apellido']) !!}
								<span class="p_apellido_span"></span>
							</div>
							<div class="form-group col-3" id="s_nombre_group">
								{!! Form::text('s_nombre', null, ['class'=>'form-control r-0 light s-12',  'id'=>'s_nombre', 'onclick'=>'inputClear(this.id)','placeholder'=>'Segundo Apellido']) !!}
								<span class="s_nombre_span"></span>
							</div>
							<div class="form-group col-3" id="s_apellido_group">
								{!! Form::text('s_apellido', null, ['class'=>'form-control r-0 light s-12', 'id'=>'p_apellido', 'placeholder'=>'Segundo Nombre']) !!}
								<span class="s_apellido_span"></span>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-row">
							<div class="form-group col-3 m-0" id="cedula_group">
								{!! Form::text('cedula', null, ['class'=>'form-control r-0 light s-12',  'id'=>'cedula', 'onclick'=>'inputClear(this.id)', 'placeholder'=>'N° de Cédula']) !!}
								<span class="cedula_span"></span>
							</div>
							<div class="form-group col-3 m-0" id="fecha_nacimiento_group">
								{!! Form::text('fecha_nacimiento', null, ['class'=>'form-control r-0 light s-12 datepicker',  'id'=>'fecha_nacimiento', 'onclick'=>'inputClear(this.id)', 'placeholder'=>'Fecha Nacmiento']) !!}
								<span class="fecha_nacimiento_span"></span>
							</div>
							<div class="form-group col-3 m-0" id="sexo_group">
								{!! Form::select('sexo', ['F'=>'Femenino','M'=>'Masculino'], null, ['class'=>'form-control r-0 light s-12', 'id'=>'sexo', 'onclick'=>'inputClear(this.id)', 'placeholder'=>'Sexo']) !!}
								<span class="sexo_span"></span>
							</div>
							<div class="form-group col-3 m-0" id="grupo_sanguineo_group">
								{!! Form::select('grupo_sanguineo', $grupoSanguineo, null, ['class'=>'form-control r-0 light s-12', 'id'=>'grupo_sanguineo', 'onclick'=>'inputClear(this.id)', 'placeholder'=>'Grupo Sanguineo']) !!}
								<span class="grupo_sanguineo_span"></span>
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
							<div class="form-group col-2" id="talla_camisa_group">
								{!! Form::select('talla_camisa', $tallaCamisa, null, ['class'=>'form-control r-0 light s-12', 'id'=>'talla_camisa', 'onclick'=>'inputClear(this.id)', 'placeholder'=>'Camisa']) !!}
								<span class="talla_camisa_span"></span>
							</div>
							<div class="form-group col-2" id="talla_pantalon_group">
								{!! Form::select('talla_pantalon', $tallaPantalon, null, ['class'=>'form-control r-0 light s-12', 'id'=>'talla_pantalon', 'onclick'=>'inputClear(this.id)', 'placeholder'=>'Pantalon']) !!}
								<span class="talla_pantalon_span"></span>
							</div>
							<div class="form-group col-2" id="talla_calzado_group">
								{!! Form::select('talla_calzado', $tallaCalzado, null, ['class'=>'form-control r-0 light s-12', 'id'=>'talla_calsado', 'onclick'=>'inputClear(this.id)', 'placeholder'=>'Calzado']) !!}
								<span class="talla_calzado_span"></span>
							</div>
							<div class="form-group col-2" id="estado_group">
								{!! Form::select('estado', $estados, null, ['class'=>'form-control r-0 light s-12', 'id'=>'estado', 'onclick'=>'inputClear(this.id)', 'onchange'=>"cargarCombo(108,this.value,'municipio')"]) !!}
								<span class="estado_span"></span>
							</div>
							<div class="form-group col-2" id="municipio_group">
								{!! Form::select('municipio', $municipios, null, ['class'=>'form-control r-0 light s-12', 'id'=>'municipio', 'onclick'=>'inputClear(this.id)', 'onchange'=>"cargarCombo(109,this.value,'parroquia')",'placeholder'=>'Municipio']) !!}
								<span class="municipio_span"></span>
							</div>
							<div class="form-group col-2" id="parroquia_group">
								{!! Form::select('parroquia', $parroquias, null, ['class'=>'form-control r-0 light s-12', 'id'=>'parroquia', 'onclick'=>'inputClear(this.id)', 'placeholder'=>'Parroquia']) !!}
								<span class="parroquia_span"></span>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-3" id="telefono_group">
								{!! Form::text('telefono', null, ['class'=>'form-control r-0 light s-12',  'id'=>'telefono', 'onclick'=>'inputClear(this.id)','placeholder'=>'N° Telefónico']) !!}							
								<span class="telefono_span"></span>
							</div>
							<div class="form-group col-3" id="telefono2_group">
								{!! Form::text('telefono2', null, ['class'=>'form-control r-0 light s-12',  'id'=>'telefono_movil', 'onclick'=>'inputClear(this.id)','placeholder'=>'N° Telefónico Alternativo']) !!}							
								<span class="telefono2_span"></span>
							</div>
							<div class="form-group col-6" id="detalles_group">
								{!! Form::text('detalles', null, ['class'=>'form-control r-0 light s-12',  'id'=>'detalles', 'onclick'=>'inputClear(this.id)','placeholder'=>'Calle, Edificio/Casa, Torre, Piso, Letra, N° Apartamento']) !!}
								<span class="detalles_span"></span>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-row">
							<div class="col-12 text-primary">
								Datos de Empleado
								{{-- <hr> --}}
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-3" id="ct_group">
								{!! Form::text('ct', null, ['class'=>'form-control r-0 light s-12',  'id'=>'ct', 'onclick'=>'inputClear(this.id)','placeholder'=>'N° Credencial']) !!}							
								<span class="ct_span"></span>
							</div>
							<div class="form-group col-3" id="cargo_group">
								{!! Form::select('cargo', $cargos, null, ['class'=>'form-control r-0 light s-12', 'id'=>'cargo', 'onclick'=>'inputClear(this.id)', 'placeholder'=>'Cargo']) !!}
								<span class="cargo_span"></span>
							</div>
							<div class="form-group col-3" id="correo_group">
								{!! Form::text('correo', null, ['class'=>'form-control r-0 light s-12',  'id'=>'correo', 'onclick'=>'inputClear(this.id)','placeholder'=>'Correo']) !!}
								<span class="correo_span"></span>
							</div>
							<div class="form-group col-3" id="correo2_group">
								{!! Form::text('correo2', null, ['class'=>'form-control r-0 light s-12',  'id'=>'correo2', 'onclick'=>'inputClear(this.id)','placeholder'=>'Correo Alternativo']) !!}
								<span class="correo2_span"></span>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-3" id="fecha_ingreso_group">
								{!! Form::text('fecha_ingreso', null, ['class'=>'form-control r-0 light s-12 datepicker',  'id'=>'fecha_ingreso', 'onclick'=>'inputClear(this.id)','placeholder'=>'Feha de Ingreso']) !!}
								<span class="fecha_ingreso_span"></span>
							</div>
							<div class="form-group col-3" id="fecha_ingreso_group">
								{!! Form::text('honorarios', null, ['class'=>'form-control r-0 light s-12',  'id'=>'honorarios', 'onclick'=>'inputClear(this.id)','placeholder'=>'Honorarios']) !!}
								<span class="honorarios_span"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-12 text-primary">
						Datos Persona Contacto
						{{-- <hr> --}}
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-3" id="p_nombre2">
						{!! Form::text('p_nombre2', null, ['class'=>'form-control r-0 light s-12',  'id'=>'p_nombre', 'onclick'=>'inputClear(this.id)', 'placeholder'=>'Primer Nombre']) !!}
						<span class="name_span"></span>
					</div>
					<div class="form-group col-3" id="p_apellido2">
						{!! Form::text('p_apellido2', null, ['class'=>'form-control r-0 light s-12', 'id'=>'p_apellido', 'placeholder'=>'Primer Apellido']) !!}
						<span class="code_span"></span>
					</div>
					<div class="form-group col-3" id="telefono2_group">
						{!! Form::text('telefono2', null, ['class'=>'form-control r-0 light s-12',  'id'=>'telefono2', 'onclick'=>'inputClear(this.id)','placeholder'=>'N° Telefónico']) !!}							
						<span class="telefono_span2"></span>
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