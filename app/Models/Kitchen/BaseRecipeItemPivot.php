<?php

namespace App\Models\Kitchen;

use App\Models\Kitchen\Item;
use App\Models\Kitchen\Recipe\BaseRecipe;
use Illuminate\Database\Eloquent\Relations\Pivot;
 
class BaseRecipeItemPivot extends Pivot {
	// let's use date mutator for a field
	
	protected $appends = [
        'total_quantity',
        'total_quantity_format',
        'cost',
        'cost_format'
	];

    public function base()
    {
        return $this->hasOne(BaseRecipe::class, 'id', 'base_id')->whereId($this->base_id);
    }

    public function item()
    {
        return $this->hasOne(Item::class, 'id', 'item_id');
    }

    public function getTotalQuantityAttribute()
    {
        $divisor = (1 - ($this->decrease / 100));
        return ($divisor == 0) ? 0 : $this->servings_quantity / $divisor;
    }

    public function getTotalQuantityFormatAttribute()
    {
        return number_format($this->totalQuantity, 2, ',', '.');
    }      

    public function getCostAttribute()
    {
        if ($this->purchase_quantity == 0)
            return 0;
        return $this->totalQuantity * $this->item->cost / $this->purchase_quantity;
    }   

    public function getCostFormatAttribute()
    {
        return number_format($this->cost, 2, ',', '.');
    }   

}