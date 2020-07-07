<?php

namespace App\Imports;

use App\Models\InventoryAttribute;
use App\Models\InventoryAttributeOption;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

use Maatwebsite\Excel\Concerns\ToModel;

class InventoryImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
      // dd($row);
      $cat = explode('/',$row['category_slug']);
      // dd($cat[1]);
      $catId = Category::where('slug',$cat[1])->first()->id;
      $inAttr = [
        'name'  => $row['name']
      ];
      $attr = InventoryAttribute::create($inAttr);

      if(!empty($row['inventory_value'])){
        $vals = explode(',',$row['inventory_value']);
        $option = [];
        foreach($vals as $val){
          $option[] = [
            'option'  => $val,
            'inventory_attribute_id'  => $attr->id
          ];
        }
        DB::table('inventory_attribute_options')->insert($option);
      }
      $relation = [
        'category_id' => $cat[1],
        'inventory_attribute_id'  => $attr->id,
      ];
    DB::table('inventory_attribute_category')->insert($relation);
    }
}
