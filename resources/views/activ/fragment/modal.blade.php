<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="1" id="modal-delete-{{$acti->id}}">
	{{Form::Open(array('action'=>array('ActividadesCOntroller@destroy', $acti->id),'method'=>'delete'))}};
	<div class="modal-dialog">
		<div class="modal.content">
			<div class="model-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
				<h4 class="modal-title">Eliminar actividad</h4>
			</div>
			<div class="modal-body">
				<p color="#cc0000">Confirme si decea Eliminar la actividad</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>	
			</div>
		</div>
	</div> 
	{{Form::Close()}}
</div>