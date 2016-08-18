var objectRow = {            
	id: "",
	name: "",
	servings_quantity: "",
	quantity: "",
	description: "",
	photo: "",
	type_id: "",
	type_name: ""
};

var tableColumns = [
	{
	    name: 'id',
	    sortField: 'id',
	    visible: false,
	},
	{
	    name: 'code',
	    sortField: 'code',
	    visible: true,
	    title: 'Código'
	},
	{
	    name: 'name',
	    sortField: 'name',
	    visible: true,
	    title: 'Nombre'
	},
	{
	    name: 'servings_quantity',
	    sortField: 'servings_quantity',
	    visible: true,
	    title: "Cantidad por ración"
	},
	{
	    name: 'quantity',
	    sortField: 'quantity',
	    visible: true,
	    title: 'Cantidad'
	},
	{
	    name: 'description',
	    sortField: 'description',
	    visible: false,
	    title: 'Descripción'
	},
	{
	    name: 'photo',
	    sortField: 'photo',
	    visible: false,
	    title: 'Foto'
	},
	{
	    name: 'type_name',
	    sortField: 'type_id',
	    visible: true,
	    title: 'Tipo'
	},       
    {
        name: '__actions',
        dataClass: 'center aligned',
        callback: null
    }        
];

var actions = [
            { name: 'view-item', label: '', icon: 'glyphicon glyphicon-zoom-in', class: 'btn btn-info', extra: {'title': 'View', 'data-toggle':"tooltip", 'data-placement': "left"} },
            { name: 'edit-item', label: '', icon: 'glyphicon glyphicon-pencil', class: 'btn btn-warning', extra: {title: 'Edit', 'data-toggle':"tooltip", 'data-placement': "top"} },
            { name: 'delete-item', label: '', icon: 'glyphicon glyphicon-remove', class: 'btn btn-danger', extra: {title: 'Delete', 'data-toggle':"tooltip", 'data-placement': "right" } }
];