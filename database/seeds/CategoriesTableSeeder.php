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
   // include('CategoriesAttr/Fashion.php');
   // include('CategoriesAttr/Bags_Travels.php');
   // include('CategoriesAttr/Sports_Outdoors.php');
   // include('CategoriesAttr/Laundry_Cleaning.php');
   // include('CategoriesAttr/Kitchen_Dining.php');
   // include('CategoriesAttr/Stationery_Craft.php');
     
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

      // \Baazar::insertRecords($fashion);
      // echo  'Fashion Done....';

      // \Baazar::insertRecords($bags_travels);
      // echo  'Bags And Travels Done....';

       // \Baazar::insertRecords($sports_outdors);
      // echo  'Bags And Travels Done....';

      // \Baazar::insertRecords($laundry_cleaning);
      // echo  'Laundry & Cleaning Done....';

      // \Baazar::insertRecords($kitchen_dining);
      // echo  'Laundry & Cleaning Done....';

       // \Baazar::insertRecords($stationery_craft);
      // echo  'Sattinary & Craft  Done....';





      // \Baazar::insertRecords($tv_audio);
      // echo  'TV, Audio  Done...';
   	}

  }
