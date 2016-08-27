<validator name="validationUtensil">	
	<!-- Cost per quantity Field -->
	<div class="form-group col-sm-6">
	    <label for="quantity">Cantidad:</label>
	    <input type="text" class="form-control" v-model="row.pivot_utensil.quantity" v-validate:quantity="{ required: true, minlength: 1, maxlength: 13 }" data-type="text" />
	    <div v-if="$validationUtensil.quantity.invalid" class="alert alert-danger" role="alert">
			<div v-if="$validationUtensil.quantity.required">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				Custom rule(required) Message Here
			</div>
			{{-- <div v-if="$validationUtensil.quantity.unique">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				Custom rule(unique) Message Here
			</div> --}}
			<div v-if="$validationUtensil.quantity.minlength">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				Custom rule(minlength) Message Here
			</div>
			<div v-if="$validationUtensil.quantity.maxlength">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				Custom rule(maxlength) Message Here
			</div>
		
		</div>
	</div>

	<!-- utensil Id Field -->
	<div class="form-group col-sm-6" @click="getForeignData('{{ route('api.v1.kitchen.recipes.bases.utensils.available') }}/' + row.id, 'utensilOptions', 'utensil')" class="form-group col-sm-6">
	    <label for="utensil_id">Utensil:</label>
		<select class="form-control" v-model="row.pivot_utensil.utensil_id" v-validate:utensil_id="{ required: true }">
			<option selected="selected">-- Seleccione un utensilio --</option>
			<option v-for="(id, name) in foreignData.utensilOptions" 
				v-bind:selected="id == row.utensil.id"
				v-bind:value="id">		
				@{{ name }}
			</option>
		</select>
	    <div v-if="$validationUtensil.utensil_id.invalid" class="alert alert-danger" role="alert">
			<div v-if="$validationUtensil.utensil_id.required"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				El Utensilio es obligatorio
			</div>
		</div> 
	</div>			
</validator>	
