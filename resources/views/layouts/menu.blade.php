<li class="{{ Request::is('providers*') ? 'active' : '' }}">
    <a href="{!! route('kitchen.providers.index') !!}"><i class="fa fa-edit"></i><span>Providers</span></a>
</li>

<li class="{{ Request::is('presentations*') ? 'active' : '' }}">
    <a href="{!! route('presentations.index') !!}"><i class="fa fa-edit"></i><span>Presentations</span></a>
    
<li class="{{ Request::is('units*') ? 'active' : '' }}">
    <a href="{!! route('units.index') !!}"><i class="fa fa-edit"></i><span>Units</span></a>
</li>

<li class="{{ Request::is('families*') ? 'active' : '' }}">
    <a href="{!! route('families.index') !!}"><i class="fa fa-edit"></i><span>Families</span></a>
</li>

<li class="{{ Request::is('subFamilies*') ? 'active' : '' }}">
    <a href="{!! route('subFamilies.index') !!}"><i class="fa fa-edit"></i><span>SubFamilies</span></a>
</li>

<li class="{{ Request::is('items*') ? 'active' : '' }}">
    <a href="{!! route('kitchen.items.index') !!}"><i class="fa fa-edit"></i><span>Almacen</span></a>
</li>

<li class="{{ Request::is('utensils.categories*') ? 'active' : '' }}">
    <a href="{!! route('kitchen.utensils.categories.index') !!}"><i class="fa fa-edit"></i><span>UtensilCategories</span></a>
</li>

<li class="{{ Request::is('utensils*') ? 'active' : '' }}">
    <a href="{!! route('kitchen.utensils.index') !!}"><i class="fa fa-edit"></i><span>Utensils</span></a>
</li>

<li class="{{ Request::is('recipes.types*') ? 'active' : '' }}">
    <a href="{!! route('kitchen.recipes.types.index') !!}"><i class="fa fa-edit"></i><span>RecipeTypes</span></a>
</li>

<li class="{{ Request::is('recipes.bases*') ? 'active' : '' }}">
    <a href="{!! route('kitchen.recipes.bases.index') !!}"><i class="fa fa-edit"></i><span>BaseRecipes</span></a>
</li>

<li class="{{ Request::is('recipes*') ? 'active' : '' }}">
    <a href="{!! route('kitchen.recipes.index') !!}"><i class="fa fa-edit"></i><span>Recipes</span></a>
</li>

