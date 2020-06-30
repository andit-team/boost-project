<?php
//multi-select,select,text,checkbox,number

$sports_travels = [
	  [
        'Sports & Outdoors',
        'child' => [                                
              [
                'Exercise & Fitness',
                'child' => [
                  [
                    'Yoga',
                    'child' =>[
                      ['Foam Rollers'],
                      ['Yoga Mats'],
                    ]                  
                  ],
                  [
                    'Pilates',
                    'child' =>[
                      ['Fitness Circles'],
                    ]
                  ],
                  [
                    'Cardio Equipment',
                    'child' =>[
                      ['Elliptical Trainers'],
                      ['Exercise Bikes'],                     
                      ['Treadmills'],                     
                      ['Home Fitness Equipment'],
                    ]
                  ],
                  [
                    'Strength Training Equipment',
                    'child' =>[
                      ['Benches'],
                      ['Core & Abdominal Trainers'],                     
                      ['Hand Strengtheners'],                     
                      ['Home Gyms'],                     
                      ['Pull-Up & Push-Up Bars'],                                          
                     ]
                  ],
                  [
                    'Fitness Accessories',
                    'child' =>[
                      ['Aquatic Fitness Equipment'],
                      ['Exercise Balls'],                     
                      ['Exercise Bands'],                  
                      ['Jump Ropes'],                 
                      ['Twister Plates'],
                  ]
                  ],
                  [
                    'Running',
                    'child' =>[
                      ['Running Belt'],
                  ]
                  ],
                  [
                    'Weight',
                    'child' =>[
                      ['Body Weights'],
                      ['Dumbbells'],
                  ]
                  ],
                ]
              ],
              [
                'Racket Sports',
                'child' => [
                  [
                    'Tennis',
                    'child'=>[
                      ['Court Equipment'],
                     ]                
                  ],
                  [
                    'Table Tennis',
                    'child'=>[
                      ['Balls'],
                      ['Nets'],                     
                      ['Bags & Covers'],                     
                      ['Bats'],                    
                      ['Tables'],
                     ]
                  ],                  
                  [
                    'Badminton',
                    'child'=>[
                      ['Rackets'],
                      ['Nets'],                     
                      ['Strings'],                  
                      ['Shuttlecocks'],                
                      ['Grips & Tapes'],
                     ]
                  ],                 
                  [
                    'Squash',
                    'child'=>[
                      ['Balls'],
                     ]
                  ],
                ]
              ],       
              [
                'Team Sports',
                'child' => [
                  [
                    'Football',
                    'child'=>[
                    ['Footballs'],
                    ['Goalkeeper Gloves'],                   
                    ['Training Equipment'],                   
                    ['Fan shop & Collectibles'],
                    ]
                  ],
                  [
                    'Basketball',
                    'child'=>[
                      ['Basketballs'],
                    ]
                  ],
                  [
                    'Volleyball',
                    'child'=>[
                      ['Volleyballs'],
                    ]
                  ],                 
                  [
                    'Cricket',
                    'child'=>[
                      ['Apparel'],
                      ['Accessories'],
                  ]
                  ],                                 
                    ['Rugby' ],                                               
                  [
                    'Sepak Takraw',
                    'child'=>[
                      ['Nets'],

                    ]
                  ],                 
                  [ 'Cheerleading', ],                      
                  [
                    'Baseball',
                    'child'=>[
                      ['Baseballs'],
                    ]
                  ],                 
                  [
                    'Gymnastics',
                    'child'=>[
                      ['Accessories'],
                      ['Mats & Flooring'],                      
                      ['Training Equipment'],                                        
                    ]
                  ],                 
                  [
                    'Hockey',
                    'child'=>[
                    ['Hockey Sticks'],
                    ['Balls & Pucks'],
                    ]
                  ],                                 
                ]
              ],       
              [
                'Outdoor Recreation',
                'child' => [
                  [
                    'Camping & Hiking',
                    'child'=>[
                      ['Sleeping Gear'],
                      ['Footwear'],                 
                      ['Hiking Apparel'],                   
                      ['Tents'],                   
                      ['Backpacks'],                
                      ['Camp Furniture'],                
                      ['Camp Kitchen'],               
                      ['Lighting'],            
                      ['Survival kits'],
                     ]
                  ],
                  [
                    'Cycling',
                    'child'=>[
                      ['Bikes'],
                      ['Bike Accessories'],                  
                      ['Bikes Parts'],                   
                      ['Cycling Clothing'],
                     ]
                  ],                
                  [
                    'Climbing',
                    'child'=>[
                      ['Carabiners & Quickdraws'],
                      ['Climbing Gloves'],                  
                      ['Climbing Holds'],
                    ]
                  ],                 
                  [
                    'Scooters',
                  'child'=>[

                     ]
                  ],                 
                  [
                    'Skateboards',
                    'child'=>[
                    ['Skateboard Parts'],
                    ['Skateboards'],
                     ]
                  ],                
                  [
                    'Inline & Roller Skates',
                    'child'=>[
                      ['Inline Skates'],
                      ['Roller Skates'],
                     ]
                  ],                
                  [
                    'Fishing',
                    'child'=>[
                      ['Fishing Rods'],
                      ['GPS & Fishfinders'], 
                      ['Accessories'],
                       ]
                  ],                
                  [
                    'Golf',
                    'child'=>[
                      ['Clubs'],
                      ['Bags & Covers'],                    
                      ['Accessories'],                  
                      ['Gloves'],
                      ]
                  ],               
                  [
                    'Shooting',
                    'child'=>[
                      ['Air Guns'],
                      ['Airsoft Guns'],                     
                      ['Optics'],                  
                      ['Paintball'],
                      ]
                  ],              
                ]
              ],         
              [
                'Games',
                'child' => [
                  [
                    'Pool, Darts & Foosball',
                    'child' => [
                      ['Darts & Dartboards'],
                      ['Foosball Tables'],
                      ['Pool & Billiard'],
                       ]
                  ],
                ]
              ],          
              [
                'Shoes & Clothing',
                'child' => [
                  [
                    'Women',
                    'child'=>[
                      ['Shoes'],
                      ['Clothing'],
                      ['Accessories'],
                      ['Bags'],
                    ]
                  
                  ],
                  [
                    'Men',
                    'child'=>[
                      ['Shoes'],
                      ['Clothing'],
                      ['Accessories'],
                      ['Bags'],
                    ]
                  
                  ],                 
                  [
                    'Girls',
                    'child'=>[
                      ['Shoes'],
                      ['Clothing'],
                      ['Bags'],
                    ]
                  
                  ],                
                  [
                    'Boys',
                    'child'=>[
                      ['Shoes'],
                      ['Clothing'],
                      ['Accessories'],
                    ]                 
                  ],              
                  [
                    'Unisex',
                    'child'=>[
                      ['Shoes'],
                      ['Clothing'],
                      ['Accessories'],
                      ['Bags'],
                    ]
                  
                  ],
                ]
              ],          
              [
                'Accessories',
                'child' => [
                  ['Headbands'],
                  ['Performance & GPS Trackers'],                 
                  ['Supports & Braces'],
                ]
              ],          
              [
                'Fan Shop',
                'child' => [
                  ['Basketball'],
                  ['Tennis'],                 
                  [
                    'International Football Clubs',
                    'child'=>[
                      ['T-shirts & Tops'],
                    ]
                  ],                 
                  ['National Football Teams'],               
                  ['Formula 1'],                           
                ]
              ],          
              [
                'Water Sports',
                'child' => [
                  ['Boating'],
                  [
                    'Diving & Snorkeling',
                    'child' => [
                      ['Instruments'],
                      ['Diving Suits'],
                    ]
                  ],
                  [
                    'Swimming',
                    'child'=>[                     
                      ['Goggles'],
                      ['Swim Caps'],
                      ['Accessories'],
                      ['Training Equipment'],
                      ['Floaties'],
                      ['Swimwear'],
                    ]
                  ],                
                  ['Boarding'],                 
                  [
                    'Accessories',
                    'child'=>[   
                      ['Life Jackets'],
                    ]
                  ],
                ]
              ],          
              [
                'Boxing, Martial Arts & MMA',
                'child' => [
                  [ 'Gloves',
                     'child'=>[
                       ['Boxing Gloves'],
                     ] 
                  ],
                  ['Protective Gear'],                
                  ['Punching Bags & Accessories'],                 
                  ['Martial Art Equipment'],
                ]
              ],                                
            ]
       ],
];
