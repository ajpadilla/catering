<?php 
	extract([
            'modalTitle'    => 'Edit {{ row.utensil.name }} for {{ row.name }}',
            'modalSync'     => 'utensilEDIT',
            'modalClose'    => 'utensilEDIT',
            'model'         => 'Utensil',
            'related'       => true,
            'type'			=> 'store',
            'content'       => view('kitchen.recipes.bases.utensils.fields')
	]);
?>
@include('layouts.modal.relation-form')
