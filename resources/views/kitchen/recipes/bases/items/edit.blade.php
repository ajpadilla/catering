<?php 
	extract([
            'modalTitle'    => 'Edit @{{ row.item.name }} for {{ row.name }}',
            'modalSync'     => 'itemEDIT',
            'modalClose'    => 'itemEDIT',
            'model'         => 'Item',
            'related'       => 'item',
            'type'			=> 'store',
            'content'       => view('kitchen.recipes.bases.items.fields')
	]);
?>
@include('layouts.modal.relation-form')
