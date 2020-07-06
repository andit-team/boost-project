<?php
//multi-select,select,text,checkbox,number

$motors = [
	[
        'Motors',
        'child' => [  
          [
            'Automotive',
            'child' => [ 
              [
                'Exterior Accessories',
                'child' => [ 
                  ['Covers'],
                  ['Horns & Accessories'],
                  ['Mirrors'],
                  ['Spoilers, Wings & Styling Kits'],
                  ['Bumpers & Bumper Accessories'],
                  ['Hood Scoops & Vents'],
                  ['Body Armor'],
                  ['Bumper Stickers, Decals & '],
                ]
              ],
              [
                'Interior Accessories',
                'child' => [ 
                  ['Air Fresheners'],
                  ['Steering Wheels & Accessories'],
                  ['Key Chains'],
                  ['Mirrors'],
                  ['Pedals & Pedal Accessories'],
                  ['Seat Covers & Accessories'],
                  ['Consoles & Organizers'],
                  ['Electrical Appliances'],
                  ['Floor Mats & Cargo Liners'],
                  ['Grab Handles'],
                ]
              ],
              ['Truck Parts & Accessories'],
              [
                'Auto Oils & Fluids',
                'child' => [ 
                  ['Additives'],
                  ['Oils'],
                  ['Transmission Fluids'],
                ]
              ],
              [
                'Performance Parts & Accessories',
                'child' => [
                  ['Brake System'],
                  ['Exhaust System'],
                  ['Filters'],
                  ['Fuel System'],
                  ['Ignition Parts'],
                  ['Shocks & Struts'],
                  ['Suspension'],
                 ]
              ],
              [
                'Auto Tools & Equipment',
                'child' => [
                  [
                    'Diagnostic & Test Tools',
                    'child' => [
                      ['Multimeters & Analyzers'],
                      ['Battery Testers'],
                      ['Air Bag Scan Tools & Simulat'],
                    ]
                  ],
                  [
                    'Engine Tools',
                    'child' => [
                      ['Exhaust Tools'],
                      ['Compression Gauges'],
                    ]
                  ],
                  ['Hand Tools'],
                  ['Jump Starters, Battery Chargers & Portable Power'],
                  ['Wheel & Tire Tools'],
                  ['Lockout Kits'],
                  ['Oxygen Sensor Removers'],
                  ['Electrical System Tools'],
                  [
                    'Garage DIY',
                    'child' => [
                      ['Lube Equipment'],
                      ['Emergency & Safety Equip'],
                    ]
                  ],
                  ['Brushes & Dusters'],
                  ['Cloths & Towels'],
                  [
                    'Body Repair Tools',
                    'child' => [
                      ['Windshield & Glass Repair Tools'],
                      ['Dent Removal Tools'],
                      ['Paint Tools & Equipment'],
                      ['Chains, Clamps & Hooks'],
                    ]
                  ],
                  ['Brake & Repair Tools'],
                  ['Spark Plug & Ignition Tools'],
                  ['Steering & Suspension Tools'],
                  ['Windshield Wiper Tools'],
                ]
              ],
              [
                'Auto Tires & Wheels',
                'child' => [
                  [
                    'Tire Accessories & Parts',
                    'child'=>[
                      ['Tire Pressure Monitoring Syst'],
                    ]
                  ],
                  [
                    'Wheels',
                    'child'=>[
                      ['Car'],
                    ]
                  ],
                  [
                    'Tires',
                    'child'=>[
                      ['Passenger Car'],
                    ]
                  ],
                  [
                    'Tire & Wheel Tools',
                    'child'=>[
                      ['Tire Repair Tools'],
                    ]
                  ],
                  [
                    'Wheel Accessories & Parts',
                    'child'=>[
                      ['Wheel Covers'],                                   
                  ],
                ]
              ],
              ['Convertibles'],
              ['Coupes'],
              ['SUVs'],
              ['Sedans'],
              ['Trucks'],
              [
                'Car Audio',
                'child' => [
                  ['Amplifiers'],
                  ['Speakers'],
                  ['Subwoofers'],
                  ['Car Stereo Receivers'],
                ]
              ],
              [
                'Car Video',
                'child' => [
                  ['In-Dash DVD & Video Receivers'],
                ]
              ],
              [
                'Car Safety & Security',
                'child' => [
                  ['Steering Wheel Locking Devices'],
                  ['Alarm Systems & Accessories'],
                ]
              ],
              [
                'Car Electronics Accessories',
                'child' => [
                  ['Cell Phone Accessories'],
                  ['Other Electronic Gadgets'],
                  ['CB Radios & Scanners'],
                  ['Audio & Video Accessories'],
                                  ]
              ],
              ['Vans'],
              ['Wagons'],
              ['Hybrids'],
              [
                'Batteries & Accessories',
                'child' => [
                  ['Batteries'],
                  ['Battery Accessories'],
                ]
                ]
              ],
              [
                'Auto Parts & Spares',
                'child' => [
                  [
                    'Ignition & Electrical',
                    'child'=>[
                      
                    ]
                  ],
                  [
                    'Lighting & Electrical',
                    'child'=>[
                      ['Cigarette Lighter & Parts'],
                      ['Flashers'],
                    ]
                  ],
                  [
                    'Shocks, Struts & Suspension',
                    'child'=>[
                      
                    ]
                  ],
                  [
                    'Alternators & Generators',
                    'child'=>[
                      ['Voltage Regulators'],
                      ['Generators'],
                    ]
                  ],
                  [
                    'Starters & Parts',
                    'child'=>[
                      ['Starters'],
                    ]
                  ],
                  [
                    'Steering System',
                    'child'=>[
                      
                    ]
                  ],
                  [
                    'Brake System',
                    'child'=>[
                      
                    ]
                  ],
                  ['Cables'],
                  [
                    'Engine Cooling & Climate Control',
                    'child'=>[
                      ['Heating'],
                    ]
                  ],
                  [
                    'Engine Parts',
                    'child'=>[
                      ['Air Filters'],
                      ['Fuel Filters'],
                    ]
                  ],
                  [
                    'Exhaust & Emissions',
                    'child'=>[
                      ['Pipes'],
                    ]
                  ],
                  [
                    'Fuel System',
                    'child'=>[
                      ['Power Steering In-Line'],
                    ]
                  ],
                  [
                    'Drive Train',
                    'child'=>[
                      ['Universal Joints & Parts'],
                    ]
                  ],
                  [
                    'Body Parts',
                    'child'=>[
                      ['Exterior Mirrors'],
                      ['Lighting Assemblies'],
                      ['Grilles'],
                    ]
                  ],
                  ['Windshield Wipers & Washers'],
                ]
              ],
              [
                'Exterior Vehicle Care',
                'child' => [
                  ['Car Polishes & Waxes'],
                  ['Cleaners and Kits'],
                ]
              ],
              [
                'Interior Vehicle Care',
                'child' => [
                  ['Vacuums
                  ',
                  'child'=>[
                  ]
                ],
                ]
              ],
              ['GPS'],
            ]
          ],
          ['Service & Installations',

        ],
          [
            'Motorcycle',
            'child' => [ 
              [
                'Moto Batteries & Accessories',
                'child'=>[
                  ['Batteries & Parts'],
                ]
              ],
              [
                'Moto Parts & Spares',
                'child'=>[
                  [
                    'Air Intake & Fuel Delivery',
                    'child'=>[
                      ['Air Filters'],
                      ['Fuel Filters'],
                      ['Throttle & Choke Cables'],
                      ['Other Intake & Fuel Systems'],
                    ]
                  ],
                  [
                    'Body & Frame',
                    'child'=>[
                      ['Windshields'],
                      ['Grips'],
                      ['Handle Bars, Levers, Mirrors'],
                      ['Pedals & Pegs'],
                    ]
                  ],
                  [
                    'Brakes & Suspension',
                    'child'=>[
                      ['Other Brakes & Suspension'],
                      ['Brake Cables'],
                      ['Brake Shoes'],
                    ]
                  ],
                  [
                    'Decals & Emblems',
                    'child'=>[
                      ['Accessories'],
                    ]
                  ],
                  [
                    'Drivetrain & Transmission',
                    'child'=>[
                      ['Chains, Sprockets & Parts'],
                      ['Clutch Cables'],
                      ['displayLights'],
                      ['Headlight Assemblies'],
                      ['Indicator Assemblies'],
                      ['License Plate Lights'],
                      ['Rear & Brake Light Assemblies'],
                      ['Other Lighting Parts'],
                      ['Pulleys & Tensioners'],
                      ['Other Transmission Parts'],
                      ['Bulbs, LEDs & HIDs'],
                      ['Clutch Plates'],
                    ]
                  ],
                  ['Mirrors'],
                  ['Exhaust & Accessories'],
                ]
              ],
              [
                'Moto oils & Fluids',
                'child'=>[
                  ['Cycle Engine Oil'],
                  ['Brake Fluid'],
                  ['Gear Oils'],
                  ['Lubricants & Solvents'],
                ]
              ],
              [
                'Moto Tools & Maintenance',
                'child'=>[
                  ['Air & Oil Filters'],
                  ['Batteries & Charges'],
                ]
              ],
              [
                'Moto Exterior Accessories',
                'child'=>[
                  ['Covers'],
                ]
              ],
              [
                'Riding Gear',
                'child'=>[
                  ['Chest & Back Protectors'],
                  ['Eyewear'],
                  ['Footwear'],
                  ['Gloves'],
                  ['Helmet'],
                  ['Helmets Accessories'],
                  ['Rain Boot Covers'],
                  ['Bandannas'],
                  ['Face Masks'],
                  ['Jackets & Vests'],
                  ['Jerseys'],
                  ['Rainwear'],
                ]
              ],
              ['Moto Electronics'],
              ['Electric Bikes'],
              ['Standard Bikes'],
              ['Underbone'],
              ['ATVs & UTVs'],
              ['Scooters'],
              ['Sportbikes'],
              ['Cruiser Bikes'],
              ['Offroad Bikes'],
              [
                'Moto Tires & Wheels',
                'child'=>[
                  ['Other Tire & wheel Parts'],
                  ['Tires & Tubes'],
                  ['Wheels & Rims'],
                ]
              ],
            ]
          ],
          [
            'Cars',
            'child' => [
              ['Automatic'],
              ['Imported Cars'],
              ['Manual'],
            ]
          ],
        ]    
     ], 
];
 