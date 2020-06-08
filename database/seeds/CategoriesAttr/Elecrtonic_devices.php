<?php
$data = [
	[
        'Electronic Devices',
        'child' => [
            [
                'Mobiles',
                'child' => [
                    [
						'Xiaomi Phones',
						'attr'	=> [
							[
								'lebel'         => 'Chipset Manufacturer',
								'type'          => 'multi-select',
								'required'      => 1,
								'sessagetion'   => 'Brand of the product Please click here to request for a new brand',
								'values'    => [
									['AMD'],
									['NVIDIA'],
									['Intel'],
								],
							],
						],
					], 
                    ['Samsung Phones'], 
                    ['Nokia Phones'], 
                    ['realme Phones'], 
                    ['Infinix Phones'], 
                    ['Alcatel Phones'], 
                    ['Huawei Phones'], 
                    ['Motorola Phones'], 
                    ['Vivo Phones'], 
                    ['OPPO Phones'], 
                    ['Umidigi Phones'], 
                ]
            ],
            ['Tablets'],
            [
                'Laptops',
                'child' => [
                    ['Laptops Notebooks'],
                    ['Gaming Laptops'],
                    ['Macbook'],
                ]
            ],
            [
                'Desktops',
                'child' => [
                    ['All-In-One'],
                    ['Gaming Desktops']
                ]
            ],
            [
                'Gaming Consoles',
                'child' => [
                    ['PlayStation Consoles'],
                    ['Playstation Games'],
                    ['Playstation Controllers Games'],
                    ['Nintendo Games'],
                    ['Xbox Games'],
                    ['Other Gaming Consoles'],
                ],
            ],
            [
                'Cameras',
                'child' => [
                    ['DSLR'],
                    ['Mirrorless'],
                    ['Point Shoot'],
                    ['Bridge'],
                    ['Car Cameras'],
                    ['Action/Video Cameras']
                ]
            ],
            [
                'Security Cameras',
                'child' => [
                    ['IP Security Cameras'],
                    ['IP Security Systems'],
                    ['CCTV Security Cameras'],
                    ['CCTV Security Systems'],
                ],
            ],
        ]
    ],
];