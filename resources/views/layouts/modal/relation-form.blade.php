<modal
	title="{{ $modalTitle }}" 
	:show.sync="localModals.{{ $modalSync }}" 
	effect="fade" 
	width="800"
>
	<div slot="modal-header" class="modal-header">
		<h4 class="modal-title">
		  <b>{{ $modalTitle }}</b>
		</h4>
	</div>	
	<div slot="modal-body" class="modal-body">
		<div class="content">
			@include('layouts.flash')
			<div class="box box-primary">
				<div class="box-body">
					<div class="row">
						{!! $content !!} {{-- @yield('modal-relation-form-content') --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<div slot="modal-footer" class="modal-footer">
		<button type="button" class="btn btn-default" 
			@click="closeModal('{{ $modalClose }}')"
		>Close</button>
		<button type="button" class="btn btn-success" 
			v-if="{{  '$validation' . $model }}.valid"
			@click="submit('{{ ( $model ? lcfirst($model) : 'null' ) }}', '{{ $type or 'null' }}', {{ $related or 'null' }})"
		>Save</button>
	</div>	
</modal>