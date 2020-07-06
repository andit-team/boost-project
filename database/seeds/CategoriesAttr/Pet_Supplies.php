<?php
//multi-select,select,text,checkbox,number,

$pet_supplies = [
	[
        'Pet Supplies',
        'child' => [  
          [ 
            'Small Pet',
            'child' => [
              ['Habitats & Accessories'],
              ['Grooming & Health'],
              ['Food'],
             ] 
          ],
          [
            'Fish',
            'child' => [ 
              [
                'Aquariums, Tanks & Bowls',
                'child' => [
                  ['Aquariums'],
                  ['Starter Kits'],    
                  ['Bowls'],
                ]
              ],
              ['Food'],
              [
                'Aquariums Accessories',
                'child' => [
                  ['Air Pumps & Accessories'],
                  ['Water pumps'],
                  ['Temperature control supplies'],
                  ['Cleaning tools'],
                  ['CO2 Equipment'],
                  ['Feeders'],
                  ['Filters & Accessories'],
                  ['Decorations'],
                  ['Lightings'],
                ]
              ],
            ] 
          ],
          [   
            'Bird',
            'child' => [ 
              ['Food'],
              ['Cages & Accessories'],
              ['Grooming & Health'],
            ] 
          ],
          ['Reptile'],
          [           
            'Dog & Cat',
            'child' => [ 
              ['Dog & Cat Cages, Crates & Doors'],
              ['Leashes, Collars & Muzzles'],
              ['Grooming'],
              ['Bowls & Feeders'],
              ['Carriers & Travel'],
              ['Dog & Cat Beds, Mats & Ho'],
            ] 
          ],
          ['Others'],
          [         
            'Dog',
            'child' => [
              [
                'Dental & Healthcare',
                'child'=>[
                  [
                    'Dental Care',
                    'child'=>[
                      ['Toothbrush'],
                    ]
                  ],
                  ['Supplements & Vitamins'],
                ]
              ],
              [
                'Dog Flea & Tick',
                'child'=>[
                  ['Spot Treatments'],
                  ['Collars'],
                  ['Oral Treatments'],
                  ['Sprays'],
                  ['Shampoos'],
                ]
              ],
              [
                'Carriers & Travel',
                'child'=>[
                  ['Bicycle Accessories'],
                  ['Strollers'],
                  ['Carriers Purses'],
                  ['Carrier Backpacks'],
                  ['Car Accessories'],
                ]
              ],
              [
                'Training Aids',
                'child'=>[
                  ['Bark Control & Remote Training'],
                  ['Leashes & Collars'],
                  ['Fence Systems'],
                ]
              ],
              [
                'Technology',
                'child'=>[]
              ],
              [
                'Beds, Mats & Houses',
                'child'=>[
                  ['Beds'],
                  ['Mats'],
                  ['Houses'],
                ]
              ],
              [
                'Cages, Crates & Doors',
                'child'=>[
                  ['Cages & Crates'],
                  ['Pens'],
                  ['Pet Doors'],
                ]
              ],
              [
                'Clothing, Shoes & Accessories',
                'child'=>[
                  ['Costumes'],
                  ['Dresses'],
                  ['Hair Accessories'],
                  ['Backpacks'],
                  ['Boots, Socks & Paw Protecto'],
                ]
              ],
              [
                'Bowls & Feeders',
                'child'=>[
                  ['Feeding Mats'],
                  ['Automatic Feeders'],
                  ['Food Storage'],
                  ['Bowls & Diners'],
                ]
              ],
              [
                'Leashes Collars & Muzzles',
                'child'=>[
                  ['Leashes'],
                  ['Harnesses'],
                  ['Muzzles'],
                  ['Head Collars'],
                  ['GPS tracker'],
                  ['Collars'],
                  ['Training Collars'],
                ]
              ],
              [
                'Beds & Feeding Accessories',
                'child'=>[]
              ],
              [
                'Collars & Harnesses',
                'child'=>[]
              ],
              [
                'Dog Food',
                'child'=>[
                  ['Dog Milk Replacers'],
                  ['Dog Dry Food'],
                  [
                    'Dog Wet Food',
                    'child'=>[
                      ['Canned'],
                      ['Pouches'],
                      ['Rolls'],
                    ]
                  ],
                  ['Dog Food Toppers'],
                  ['Dog Veterinary Diets'],
                ]
              ],
              [
                'Dog Treats',
                'child'=>[
                  ['Cookies, Biscuits & Snacks'],
                  ['Jerky'],
                  ['Rawhides'],
                  ['Bones'],
                ]
              ],
              [
                'Dog Toys',
                'child'=>[]
              ],
              [
                'Grooming',
                'child'=>[
                  ['Shampoos & Bath Accessories'],
                  ['Brushes & Combs'],
                  ['Claw Care'],
                  ['Perfume / Deodorizers'],
                  ['Shower Gel & Bath Accessories'],


                ]
              ],
              [
                'Health Supplies',
                'child'=>[
                  ['Ear Care'],
                  ['Eye Care'],
                  ['Itch Remedies'],
                  ['Medications'],
                  ['Flea, Lice & Tick Control'],
                  ['Supplements & Vitamins'],
                  ['Wormers'],
                ]
              ],
              [
                'Dog Carriers',
                'child'=>[]
              ],
              [
                'Clean up & Toilet',
                'child'=>[
                  ['Diapers'],
                  ['Odor & Strain Removers'],
                  ['Training Pads & Trays'],
                  ['Urine Detectors'],
                  ['Pooper Scoopers & Bags'],
                ]
              ],
             ] 
          ],
          [          
            'Cat',
            'child' => [
              [
                'Bowls & Feeders',
                'child' => [
                  ['Bowls & Diners'],
                  ['Feeding Mats'],
                  ['Automatic Feeders'],
                  ['Feeders & Wateners'],
                  ['Food Storage'],
                ]
              ],
              ['Clothing, Shoes & Accessories'],
              [
                'Leashes & Collars',
                'child' => [
                  ['Collars'],
                  ['Leashes & Harnesses'],
                  ['GPS tracker'],
                ]
              ],
              [
                'Dental & Healthcare',
                'child' => [
                  ['Dental Care'],
                ]
              ],
              ['Cat Flea & Tick'],
              [
                'Carriers & Travel',
                'child' => [
                  ['Strollers'],
                  ['Carriers Purses'],
                  ['Carrier Backpacks'],
                  ['Car Accessories'],
                  ['Bicycle Accessories'],
                ]
              ],
              ['Technology'],
              ['Trees, Condos & Scratchers'],
              [
                'Beds, Mats & Houses',
                'child' => [
                  ['Beds'],
                  ['Mats'],
                  ['Houses'],
                ]
              ],
              ['Cages, Crates & Doors'],
              ['Beds & Feeding Accessories'],
              ['Collars & Harnesses'],
              [
                'Cat Food',
                'child' => [
                  ['Cat Dry Food'],
                  [
                    'Cat Wet Food',
                    'child' => [
                      ['Canned'],
                      ['Pouches'],
                    ]
                  ],
                  ['Cat Milk Replacers'],
                ]
              ],
              [
                'Cat Treats',
                'child' => [
                  ['Snacks'],
                ]
              ],
              [
                'Grooming',
                'child' => [
                  ['Shampoos & Bath Accessories'],
                  ['Brushes & Combs'],
                  ['Claw Care'],
                  ['Perfume / Deodorizers'],
                  ['Shower Gel & Bath Accessories'],


                ]
              ],
              ['Cat Toys'],
              [
                'Health Supplies',
                'child' => [
                  ['Ear Care'],
                  ['Eye Care'],
                  ['Hairball Remedies'],
                  ['Itch Remedies'],
                  ['Wormers'],
                  ['Recovery Collars & Cones'],
                  ['Supplements & Vitamins'],
                  ['Flea, Lice & Tick Control'],
                ]
              ],
              ['Cat Carriers'],
              [
                'Litter & Toilet',
                'child' => [
                  ['Diapers'],
                  ['Litters'],
                  ['Litter Boxes'],
                  ['Litter Scoops'],
                  ['Odor & Strain Removers'],
                  ['Urine Detectors'],
                ]
              ],
             ] 
          ],
        ]
     ], 
];
