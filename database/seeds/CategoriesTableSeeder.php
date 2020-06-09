<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
		include('CategoriesAttr/Mobiles_Tablets.php');

		// dd($mobiles_tablets);

    	\Baazar::insertRecords($mobiles_tablets);
   	}

  }
