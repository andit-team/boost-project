<?php
//multi-select,select,text,checkbox,number

$camera = [
	[
        'Camera',
        'child' => [
                  [
                    'Point & Shoot',
										  'child' => [
											['Point & Shoots'],
											['Underwater Digital Cameras'],
										]
									],
                  [
										'Bridge',],
                  [
										'DSLR',
										'child' => [
										['Sets'],
                    ['Body Only'],
                    ]
									],
                  [
										'Instant Camera',
										'child' => [
										['Instant Cameras'],
										['Instant Camera Films'],
										['Instant Camera Accessories'],
									]
									],
                  ['Mirrorless'],
                  [
										'Gadgets & Other Cameras',
										'child' => [
                      ['Toy Cameras',],
                      ['Mini Cameras',],
                      ['Lomography',],
                      ['Spy Cameras',],
                 // 	['Gadgets Instant Camera'],
									// 	['Instant Camera Film'],
									// 	['Instant Camera Accessorie'],
									 ]
									],
                  [
                    'Video & Action Camcorder',
                    'child' => [
                      ['Sports & Action Camera'],
                      ['Video Camera'],
                      ['Professional Video Camera'],
                      ['Sports & Action Camera Accessories'],
                      ['360 Cameras'],
                     ]
                  ],
                  [
                    'Camera Accessories',
                    'child' => [
                        ['Batteries'],
                        ['Battery Chargers'],
                        ['Camera Cases Covers and Bags'],
                        ['Camera Remote Controls'],
                        ['Dry Box'],
                        ['Flashes'],
                        [
													'Lighting & Studio Equipment',
													  'child' => [
													['Light Meters & Color Calibrators'],
													['Studio Equipment'],
													['Photography & Studio Lighting'],
														]
												],
                        [
                          'Memory Cards',
                          'child' => [
                            ['SD & SDHC Cards'],
                            ['Compact Flash Cards'],
                            ['Micro SD Cards'],
                            ['Wifi SD Cards'],
                            ['Card Readers'],
                          ]
                        ],
                        ['Straps'],
                        [
                          'Tripods & Monopods',
                          'child' => [
                            ['Monopods'],
                            [' Tripods'],
                          ]
                        ],
                        [
                          'Sports & Action Camera Accessorie',
                          'child' => [
                            ['Accessory Kits'],
                            ['Mounts'],
                            ['Protective Lens'],
                            ['Action Camera Bags & Cases'],
                            ['Straps & Harnesses'],
                            ['Waterproof Cases & Housing'],
                            ['Other Action Camera Accessories'],
                          ]
                        ],
                        ['Camera Screen Protector'],
                        ['Viewfinders'],
                        ['Gimbals & Stabilizers'],
                        ['Gimbals & Stabilizers Accessories'],
                    ]
                  ],
                  ['Gopro Model'],
                  [
                    'Optics',
                    'child' => [
                      ['Monoculars'],
                      ['Telescopes'],
                      ['Binoculars'],
                      ['Optics Accessories'],
                    ]
                  ],
                  [
                    'Lenses',
                    'child' => [
                      ['DSLRs Lenses'],
                      ['Mirrorless Lenses'],
                      [
                        'Lens Accessories',
                        'child' => [
                            ['Lens Hoods'],
                            ['Lens Cleaners'],
                            ['Lens Caps'],
                            ['Filters'],
                            ['Lens Cases'],
                            ['Lens Adapters & Converters'],
                            ['Follow - Focus Levers'],
                            ['Matte Boxes'],
                            ['Extension Tubes'],
                            ['Other Lens Accessories'],
                        ]
                      ],
                      ['Other Lenses'],
                      ['Smartphone Lenses'],
                    ]
                  ],
                  ['Car Cameras'],
                  [
										'Security Cameras & Systems',
										  'child' => [
											['CCTV Security Cameras'],
											['IP Security Systems'],
											['CCTV Security Systems'],
											['IP Security Cameras'],
											['Dummy Cameras'],
										]
									],
                  [
                    'Drones',
                    'child' => [
                      ['Drone'],
                      [
                        'Drone Accessories',
                        'child' => [
                          ['Drone Bags and Cases'],
                          ['Drone Batteries'],
                          ['Remote Controllers & Accessories'],
                          ['Propellers & Parts'],
                        ]
                      ],
                    ]
                  ],
         ],
     ]
];
