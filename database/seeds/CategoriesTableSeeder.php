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
    include('CategoriesAttr/Computers_Laptop.php');
    // include('CategoriesAttr/TV_Audio.php');
    include('CategoriesAttr/Camera.php');
    include('CategoriesAttr/tv_audio_video_gaming.php');
    // include('CategoriesAttr/Home_Appliance.php');

		// dd($mobiles_tablets);

      \Baazar::insertRecords($mobiles_tablets);
      echo  'Mobiles & Tablets Done...<>';

      \Baazar::insertRecords($Computers_Laptop);
      echo  'Computers & Laptops Done....';

      \Baazar::insertRecords($tv_audio_video_gaming);
      echo  'TV, Audio , Video, Gaming Done...';

      \Baazar::insertRecords($camera);
      echo  'Camera Done....';

      // \Baazar::insertRecords($home_appliances);
      // echo  'Home Appliance Done....';

      // \Baazar::insertRecords($tv_audio);
      // echo  'TV, Audio  Done...';
   	}

  }
