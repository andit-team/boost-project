<?php
//multi-select,select,text,checkbox,number

$Computers_Laptop = [
	[
        'Computers & Laptops',  
        'child' => [                    
            [
                'Laptops',
                'child' => [
                    [
                        'Gaming',
                        'attr'	=> [
                            [
                                'label'         => 'Brand',
                                'type'          => 'select',
                                'required'      => 1,
                                'suggestion'    => 'Brand of the product',
                                'meta' => [
                                    'No Brand','Dell','ASUS','MSI','Acer','Lenovo','I-Life','Walton Computers','Razer','IDEAL PRODUCT','HP','KMS'
                                ],
                            ],                      
                            [
                                'label'         => 'Hard Disk (GB)',
                                'type'          => 'select',                                              
                                'suggestion'    => 'Specify the size of the hard drive in GB. Require format: Valid Value must be a number. The separator between the integer part and the fractional part should be a dot. 1 digit is allowed after the dot.',
                                'meta' => [
                                    '3.5TB','2.5TB','16TB','30TB','8TB','12TB','256GB','320GB', '8TB & Up','6TB','4TB','3\'TB','2TB','480GB','240GB','960GB','18','1GB','2GB','32GB','64GB', '640GB','61','10TB','361','1050GB','256gb SSD','525GB','180GB','121','360GB','240','241', '259','260','261','262','306','500','640','750','2000',
                                ],
                            ], 
                            [
                                'label'         => 'Wireless Connectivity',
                                'type'          => 'select',                                              
                                'suggestion'    => 'A wireless network of computer network that uses wireless data connections for connecting network nodes. Require format: Both numbers and texts are allowed. Maximum number of characters is 255.',
                                'meta' => [
                                   ' Bluetooth','Wifi','Cellular (3G/4G)','WIFI + Bluetooth',  
                              ],
                            ], 
                            [
                                'label'         => 'Processor Type',
                                'type'          => 'select',                                              
                                'suggestion'    =>'Specify the processor type of the product. Require format: Please choose one value from the dropdown list.',
                                'meta' => [                                 
                                    'Intel', 'Xeon','AMD','Quad Core','Dual Core','Single Core','Intel Core i3','Intel Core 2 Duo','Intel Core i5','Intel Core i7','Apple A4','Apple A7',  'Apple A8',  'NVIDIA','ARM',  'Apple A6X','Apple A5','Boxchip','ALLWINNER','Qualcomm','Mediatek', 'Intel Xeon', 'Intel Pentium','Intel Celeron','AMD Phenom','AMD Athlon','AMD A10', 'AMD A8','AMD A6 ','Intel Atom','AMD Phenom II','AMD E-Series','AMD Turion','AMD A-Series','AMD Athlon II','Intel Core 2','Intel Core i7-7500U', 'Marvell','Texas Instrument', 'Intel Dual Core','AMD Phenom Triple-Core', 'Intel Pentium Dual Core', 'AMD Dual Core',  'Intel Atom','AMD Phenom II',  'AMD E-Series', 'AMD Turion','AMD A-Series', 'AMD Athlon II', 'Intel Core 2','Intel Core i7-7500U', 'Marvell', 'Texas Instrument', 'Intel Dual Core', 'AMD Phenom Triple-Core', 'Intel Pentium Dual Core','AMD Dual Core', 
                                ],
                            ],

                            [
                                'label'         => 'Camera Front (Megapixels)',
                                'type'          => 'select',                                              
                                'suggestion'    => 'Resolution of the front camera. Require format: Valid Value must be a number. The separator between the integer part and the fractional part should be a dot. 1 digit is allowed after the dot.',
                                'meta' => [                                  
                                    '2-3MP','8 MP', 'No Camera', '5-6 MP', '7 MP and up','0-1 MP','3-4 MP', '1-2 MP','20 MP', '16 MP','24 MP','13M', '2\'5 MP',                             
                                 ],
                            ], 
                            [
                                'label'         => 'Software Offerings',
                                'type'          => 'select',                                              
                                'suggestion'    => 'Software that a computer offers. Require format: Both numbers and texts are allowed. Maximum number of characters is 255.',
                                'meta' => [
                                    'Windows','Linux','Ubuntu','Mac OS','Others','Indoor HDTV','Linpus','Microsoft office','Skype',
                              ],
                            ], 
                            [
                                'label'         => 'Processor Type',
                                'type'          => 'select',                                              
                                'suggestion'    => 'Example Dual-core, Quad-corePlease choose one value from the dropdown list.',
                                'meta' => [
                                   'Intel Dual Core E-22 Speed: 3.6 GHz','Intel Dual Core E-2200 Speed: 2.80 GHz','Intel Dual Core E-2200 Speed: 3.00 GHz','Intel Dual Core E-2200 Speed: 3.06 GHz','Intel Dual Core E2','Intel Dual Core E2 Speed 3. GHz, 2MB Cache','Intel Dual Core E2000','Intel Dual Core E2000 Speed 2.5 GHz, 2MB Cache','Intel Dual Core E2000 Speed 3.00 GHz, 2MB Cache','Intel Dual Core i5','Intel Dual Core Processor Speed: 2.2 GHz','Intel Dual Core Processor Speed: 2.20 GHz','Intel dual-core 1.6GHz Core i5','Intel Pentium Processor N3700','Intel Pentium Quad Core','Intel Pentium Quad Core N3530','Intel Pentium Quad Core N3540','Intel Pentium Quad Core N3540','Intel Pentium Quad Core N3700','Intel Pentium Quad Core N3710','Intel Pentium Quad Core Processor N3540','Intel Pentium Quad Core – N3700','Intel Pentium Quad Core- N3530 Processo','Intel Pentium Quad-Core Processor J2900','Intel Pentium-3558U','Intel PQC N3530','Intel Xeon E5-1620v3 CPU','Intel Xeon E5-2670v3 CPU','Intel Z8500','Intel ® Core ™ i5','IntelCore-i5 4200U','Intel® CORE i3 4005U','Intel® CORE I3 4030U','Intel® CORE I3 4160HU','Intel® CORE I5 4200U','Intel® CORE i5 4210U','Intel® CORE I5 4570HU','Intel® CORE I5 5005U','Intel® CORE I5 5200U','Intel® Core i7 4510U','Intel® Celeron® Dual-Core N3050 Processor, 2.16 GHz','Intel® Celeron® N3350 Processor (2M Cache, 1.10 GHz up to 2.4 GHz)','Intel® Core i3','Intel® CORE i3 5005U','Intel® Core i5-4590 4th Gen Processor','Intel® Core i5-5200U','1.2','1.7','6th Gen Intel Core i7-6600U','0.416','1 GHz','1.3 GHz Dual Core','1.3 GHz Octa Core (64-bit)','1.3 GHz Processor (Quad Core)','1.3 GHz Quad Core','1.3 GHz Quad Core Processor','1.3 GHz Quad-Core','1.3 GHz Quad-Core Processor','1.3 GHz, Dual-core Processor','1.3GHz','1.3GHz Dual Core','1.3GHz Octa Core','1.3GHz Quad Core','1.3GHz Quad Core 6580A','2.46GHz quad-core','2.7GHz Qualcomm Snapdragon 805 with quad-core CPU (APQ 8084-AB), Adreno 420 GPU','2.9GHz quad-core Intel Core i5 processor','28nm Quad-Core 1.2GHz Processor','2nd-gen Snapdragon 615','2X2 : Intel Atom Multi-Core Z2580','2xIntel Xeon E5 2630v4','3.0GHz quad-core Intel Core i5','3.5 GHz Intel Core i5 Quad-Core','3.8 GHz Intel Core i5 Quad-Core','312Mhz','3nd Generation Duel core intel core i5','3rd Core i7',
                              ],
                            ], 
                            [
                                'label'         => 'CPU Cores',
                                'type'          => 'select',                                              
                                'suggestion'    => 'CPU Cores',
                                'meta' => [
                                   ' Quard Core','Single Core','Dual Core','Octa Core',  
                              ],
                            ], 
                            [
                                'label'         => 'Graphic Card',
                                'type'          => 'select',                                              
                                'suggestion'    => 'A graphics card is the device inside a computer that interprets graphics signals from the motherboard and sends them to the monitor, which is plugged into the graphics card. On a graphics card, the chipset is the flat circuitry-board part that is attached to the graphics connectors, which send visuals to the computer monitor. Require format: Both numbers and texts are allowed. Maximum number of characters is 255.',
                                'meta' => [    
                                    'Intel 4th Gen Core i5','Intel Core i6','1.5 GB','AMD Radeon(TM) HD 7570M with 1GB GDDR5', '2GB GR','NVIDIA 820M 2GB', 'Nvidia GT940M 4GB', 'NVIDIA GeForce GT960M 4GB', 'AMD Radeon R5 M430 2GB', 'Amd Radeon HD 8750 2Gb DDR3 Graphics',  'Nvidia 940MX 2GB','Amd Radeon R5 M230 2GB','Intel HD 405', '2GB NVIDIA GT 750','Intel(R) HD graphics 620','NVIDIA GeForce 940MX','AMD Radeon 255M','840M 2GB','NVIDIA GeForce GT940M 2GB','Nvidia GTX 960M 4GB','NVIDIA® GeForce® GTX 1050 with 4GB GDDR5','Integrated HD Graphics 620','2GB NVIDIA GeForce 930MX','AMD Radeon(TM) HD R7 M265 2GB DDR3 Graphics','Nvidia Quadro M1200 w/4GB GDDR5','Intel HD Graphics Card','Nvidia GT 920M 1GB',   '4GB GeForce 940MX','NVIDIA GT 820 2GB Graphics','2GB Radeon','Intel HD Graphics 530','GT940M 2GB Graphics','Intel(R) HD graphics 520','AMD 8670M 2GB','Nvidia GTX 1050, 4GB DDR5','Nvidia GT940M 2GB','AMD TM R5 M420 2GB','Intel® HD Graphics 4400','Intel HD Graphics 405 ','Intel UHD 620','2GB GFX','Nvidia GTX 850M 4GB','AMD Radeon HD 8670M','Intel ® HD Graphics 515 integrated graphics','Intel Iris Plus Graphics 640','2GB, AMD Radeon HD 8850M','4GB NVIDIA GeForce GTX 1050 Graphics','AMD Radeon HD 8210M','NVidia GeForce GT940M 4GB VRAM','NVIDIA GeForce 150MX SGDDR5 2GB dedicated Graphics','Intel HD Graphics (512 MB dedicated)','Intel® HD Graphics 5500',  'Intel HD 620 Graphics','Intel HD Graphics 515','NVIDIA GeForce GT 735M (1 GB VRAM)','Intel® HD Graphics','AMD Radeon(TM) R7 M445 with 4GB DDR5','NVIDIA GeForce 820M 2GB VRAM','2GB 940MX Graphics','ATI JET LE R5 M230 DDR3L 2G','8GB Intel UHD Graphics 620','NVIDIA GTX 860M 4GB','Nvidia GT 840M 2 GB Dedicated Graphics','Intel HD Graphics500 (12EUs 650MHZ)','NVIDIA(R) GeForce(R) GTX 1050 with 4GB GDDR5','Integrated HD 5500 ',                     
                                   
                              ],
                            ], 
                            [
                                'label'         => 'Battery Life',
                                'type'          => 'select',                                              
                                'suggestion'    => 'How long a device can work on a single charge of a rechargeable batter. Require format: Both numbers and texts are allowed. Maximum number of characters is 255.',
                                'meta' => [
                                    'Not Specified','21 hour and up','16-20 Hour','11-15 Hour','6-10 Hour','1-5 Hour','Less than 1 hour','Less than 30 minutes','30-45 minutes',
                              ],
                            ],   
                            [
                                'label'         => 'Battery Life',
                                'type'          => 'select',                                              
                                'suggestion'    => 'How long a device can work on a single charge of a rechargeable batter. Require format: Both numbers and texts are allowed. Maximum number of characters is 255.',
                                'meta' => [
                                    'Not Specified','21 hour and up','16-20 Hour','11-15 Hour','6-10 Hour','1-5 Hour','Less than 1 hour','Less than 30 minutes','30-45 minutes',
                              ],
                            ], 

                            ['label'=> 'Number_of_Sockets','type'=> 'number',],
                            ['label'=> 'Number Cpus','type'=> 'number',],
                            ['label'=> 'Chipset Manufacturer','type'=> 'text',],
                            ['label'=> 'Graphics Memory','type'=> 'text',],
                            ['label'=> 'Storage Capacity','type'=> 'text',],
                            ['label'=> 'Connectivity','type'=> 'text',],   
                            ['label'=> 'Cl Cable Length','type'=> 'number',],
                            ['label'=> 'System Memory','type'=> 'text',],
                            ['label'=> 'Antenna Type','type'=> 'text',],
                            ['label'=> 'Number_of_Bays','type'=> 'text',],
                            ['label'=> 'Storage Capacity','type'=> 'text',],
                            ['label'=> 'Adjustable_Fan_Speed','type'=> 'text',],    
                       
                        [
                            'label'         => 'CPU Speed (GHz)',
                            'type'          => 'select',                                              
                            'suggestion'    => 'Specify the processor speed in GHz for the product. Require format: Valid Value must be a number. The separator between the integer part and the fractional part should be a dot. 2 digits are allowed after the dot.',
                            'meta' => [
                               ' 3.20','4.20',  
                          ],
                        ],
                        ['label'=> 'Display Size','type'=> 'number',],                      
                        [
                            'label'         => 'Operating System',
                            'type'          => 'select',                                              
                            'suggestion'    => 'Enter the operating system of the product. Required format:Please choose one value from the dropdown list.',
                            'meta' => [
                                'Windows','Linux','Windows XP Professional','Mac OS X','Android','iOS','No OS','Other','Windows Phone OS','Symbian','Blackberry OS','Chrome OS','Windows 8','Firefox','Android 4.3 Jelly Bean','Android 4.2 Jelly Bean','Android 4.1 Jelly Bean','Android 4.0 Ice Cream Sandwich','Android 4.4 Kitkat','iOS 7','iOS 8','Proprietary','Windows 8.1','Maverick','DOS','X Mavericks','Android 4.3 Jelly','Android 2.1 Eclair','Android 2.2 Froyo','Android 4.0 Ice Cream','Nokia OS','Ubuntu','Android 2.3','Android 2.3.6 Gingerbread','SGP','Symbia','Windows 10','Android OS, v4.2.2 (Jelly Bean)','Android v4.2.2 (Jelly Bean)','Android v4.3 (Jelly Bean)','Android 1.5 Cupcake','Android 1.6 (Donut)','Android 1.6 Donut','Android 4.4.4 KitKat','Android KitKat 4.4','Android OS 4.2.1 (Jelly Bean)','Android OS 4.4 Kitkat','Android OS v1.6 (Donut)','Android OS v4.0','Android OS, v2.2 (Froyo)','Android OS, v2.3 (Gingerbread)','Android OS, v2.3.5 (Gingerbread)','Android OS, v2.3.7 (Gingerbread)','Android OS, v4.0.3 (Ice Cream Sandwich)','Android OS, v4.0.4 Ice Cream Sandwich','Android OS, v4.1 (Jelly Bean)',
                          ],
                        ], 
                        ['label'=> 'Model','type'=> 'text',],
                        [
                            'label'         => 'Touch Pad',
                            'type'          => 'select',                                              
                            'suggestion'    => 'Indicates if the device has Touchpad. Require format: Please choose one value from the dropdown list.',
                            'meta' => [
                               'yes','no',  
                          ],
                        ],
                        
                        [
                            'label'         => 'Input Output ports',
                            'type'          => 'select',                                              
                            'suggestion'    => 'input/output is the communication between a computer and the outside world, possibly another information processing system. Inputs are the signals or data received by the system and outputs are the signals or data sent from it. Require format: Both numbers and texts are allowed. Maximum number of characters is 255.',
                            'meta'          =>['Ac Port',]
                          ],
                          [
                            'label'         => 'AC Adapter',
                            'type'          => 'select',                                              
                            'suggestion'    => 'AC adapter is an external power supply used with devices that run on batteries or have no other power source. AC adapters help reduce the size of a laptop computer by alleviating the need for a standard sized power supply. Require format: Both numbers and texts are allowed. Maximum number of characters is 255.',
                            'meta'          => ['no',]
                        ],
                        [
                            'label'         => 'System Memory',
                            'type'          => 'select',                                              
                            'suggestion'    => 'Computer system storage. Require format: Both numbers and texts are allowed. Maximum number of characters is 255.',
                            'meta'          => ['14GB',]
                        ],
                        [
                            'label'         => 'Graphics memory',
                            'type'          => 'select',                                              
                            'suggestion'    => 'Graphics Memory. Require format: Both numbers and texts are allowed. Maximum number of characters is 255.',
                            'meta'          => ['6 GB',]
                        ],
                        ['label'=> 'Bluetooth Version','type'=> 'number',],
                        ['label'=> 'Rotatable','type'=> 'text',],
                        ['label'=> 'Hard_Drive_Capacity','type'=> 'text',],
                        ['label'=> 'Barcode Ean','type'=> 'text',],
                        ['label'=> 'Output_Voltage','type'=> 'text',],
                        ['label'=> 'Auto_Shut-Off','type'=> 'text',],   
                        ['label'=> 'Plug_and_Play','type'=> 'text',],
                        ['label'=> 'Number_of_Modules','type'=> 'Number',],
                        ['label'=> 'Cord Length','type'=> 'text',],
                        ['label'=> 'Usb_Generation','type'=> 'text',],
                        ['label'=> 'Write_Speed','type'=> 'text',],   

                        ],                 
                    ],          
                    [
                        'Ultrabooks',
                        'child' => [
                            [
                                'Touchscreens',
                                'attr'	=> [
                                    [
                                        'label'         => 'Brand',
                                        'type'          => 'select',
                                        'required'      => 1,
                                        'suggestion'    => 'Brand of the product',
                                        'meta' => [
                                            'No Brand','Dell',
                                        ],
                                    ], 
                               ], 
                            ], 
                            [
                                'Non-touchscreens',
                                'attr'	=> [
                                    [
                                        'label'         => 'Brand',
                                        'type'          => 'select',
                                        'required'      => 1,
                                        'suggestion'    => 'Brand of the product',
                                        'meta' => [
                                            'No Brand','Dell',
                                        ],
                                    ], 
                               ], 
                            ],                                                         
                         ],
                    ],
                    [
                        'Traditional Laptops',
                        'attr'	=> [
                            [
                                'label'         => 'Brand',
                                'type'          => 'select',
                                'required'      => 1,
                                'suggestion'    => 'Brand of the product',
                                'meta' => [
                                    'No Brand','Dell'
                                ],
                            ], 
                       ], 

                    ],                   
                    [
                        'Basic',
                        'attr'	=> [
                            [
                                'label'         => 'Brand',
                                'type'          => 'select',
                                'required'      => 1,
                                'suggestion'    => 'Brand of the product',
                                'meta' => [
                                    'No Brand','Dell'
                                ],
                            ], 
                       ], 
                    ],

                    [
                        'All-purpose',
                        'child' => [
                            [
                                'Touchscreen',
                                'attr'	=> [
                                    [
                                        'label'         => 'Brand',
                                        'type'          => 'select',
                                        'required'      => 1,
                                        'suggestion'    => 'Brand of the product',
                                        'meta' => [
                                            'No Brand','Dell'
                                        ],
                                    ], 
                               ], 
                            ],

                            [
                                'Non-touchscreen',
                                'attr'	=> [
                                    [
                                        'label'         => 'Brand',
                                        'type'          => 'select',
                                        'required'      => 1,
                                        'suggestion'    => 'Brand of the product',
                                        'meta' => [
                                            'No Brand','Dell'
                                        ],
                                    ], 
                               ], 

                            ],                          
                       ],                       
                    ],

                    [
                        '2-in-1s',
                        'attr'	=> [
                            [
                                'label'         => 'Brand',
                                'type'          => 'select',
                                'required'      => 1,
                                'suggestion'    => 'Brand of the product',
                                'meta' => [
                                    'No Brand','Dell'
                                ],
                            ], 
                       ], 
                    ],

                    [
                        'Chromebooks',
                        'attr'	=> [
                            [
                                'label'         => 'Brand',
                                'type'          => 'select',
                                'required'      => 1,
                                'suggestion'    => 'Brand of the product',
                                'meta' => [
                                    'No Brand','Dell'
                                ],
                            ], 
                       ], 
                    ],

                    [
                        'Macbooks ',
                        'attr'	=> [
                            [
                                'label'         => 'Brand',
                                'type'          => 'select',
                                'required'      => 1,
                                'suggestion'    => 'Brand of the product',
                                'meta' => [
                                    'No Brand','Dell'
                                ],
                            ], 
                       ], 

                    ],           
                ],                                                
        ], 
        [
            'Desktops Computers',
            'child' => [
                [
                    'All-In-One',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                   ], 
                ], 
                [
                    'Gaming Dextop',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                   ], 
                ], 
                [
                    'DIY',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ], 
                 ], 
           ],            
        ],
        [
            'Computer Accessories',
            'child' => [
                [
                    'Gadgets',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ], 
                ],

                ['Laptop Screen Filters'],         
                [
                    'Power Cord & Adaptors',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ], 
                ],               
                [
                    'Laptop Batteries',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ], 
                ] ,              
                [
                    'Blank Media',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ], 
                ],               
                [
                    'Cooling PadsCooling Stands',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ], 
                ],                
                [
                    'External DVD Writers',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ], 
                ],               
                [
                    'Keyboards',
                    'child' => [
                        [
                            'Basic Keyboards',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ], 
                        ],
                        [
                            'Gaming Keyboards',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ], 
                        ],
                        [
                            'Mice & Keyboard Combos',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Keyboard Accessories',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                   ],  
                ],              
                [
                    'Laptop stands',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],              
                [
                    'Mice',
                    'child' => [
                        [
                            'Basic Mice',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Gaming Mice', 'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],                      
                   ],  
                ],               
                [
                    'Monitors',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],               
                [
                    'Speakers',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],              
                [
                    'TV Tuners',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],           
                [
                    'Webcams',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],            
                [
                    'Surge Protector',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],             
                [
                    'Gaming Headphones',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],            
                [
                    'Mousepads',
                    'child' => [
                        [
                            'Basic Mousepads',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Gaming Mousepads',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],                      
                   ], 
                ],        
                [
                    'Uninterrupted Power Supply',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],           
                [
                    'USB Fans',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],           
                [
                    'PC Audio',
                    'child' => [
                        [
                            'Gaming Headsets',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'PC Soundbars',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'PC Speaker Systems',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                   ], 

                ],          
                [
                    'Monitor Stands',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],           
                [
                    'Monitor Screen Filters',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  

                ],             
                [
                    'USB Hubs',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],             
                [
                    'Fingerprint Reader',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],             
                [
                    'Bluetooth Adapters',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],    
                [
                    'Card Reader',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],               
                [
                    'USB Lighting',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],              
                [
                    'Mac Accessories',
                    'child' => [
                        [
                            'Hard Covers',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Skin & Decal Stickers Accessories',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Power Adapters Accessories',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Screen Filters Accessories',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Storage for Mac Accessories',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Airport Routers Accessories ',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'USB-Ethernet Adapters Accessories',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'USB-Video Adapters Accessories',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Type C-Ethernet Adapters Accessories',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Type C-Video Adapters Accessories',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Firewire Cables Accessories',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'ThunderBolt Cables Accessories',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                   ], 
                ],            
                [
                    'Drawing Tools',
                    'child' => [
                        [
                            'Drawing Display',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Drawing Pad',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Drawing Stylus',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Display Screen Protectors',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                   ], 
                ],             
                [
                    'Adapters & Cables',
                     'child' => [
                        [
                            'USB-Ethernet Adapters',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'USB-Video Adapters',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Mini Display-Ethernet Adapters',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Mini Display-Video Adapters',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Type C-Ethernet Adapters',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Type C-Video Adapters',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Ethernet Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Firewire Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'ThunderBolt Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'VGA Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'DVI Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'PS/2 Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Mini-SAS Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'SCSI Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Parallel Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Serial Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'SATA Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'eSATA Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'IDE Ribbon Cables',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Cable Tester',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  

                        ],
                   ],
                ],      
           ],
        ],
        [
            'Computer Components',
            'child' => [
                [
                    'Desktop Casings',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Fans & Heatsinks',
                    'child' => [
                        [
                            'Cooling Fans',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Heatsinks',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],                   
                   ], 
                ],          
                [
                    'Graphic Cards',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],          
                [
                    'Front Bay Devices',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],            
                [
                    'Motherboards',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  

                ],             
                [
                    'Power Supply Units',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],             
                [
                    'Processors',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],             
                [
                    'RAM',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],             
                [
                    'TV Tuner',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],              
                [
                    'Sound cards',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],                
                [
                    'Water Cooling System',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],               
                [
                    'Single Board Computer',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],        
           ], 

        ],
        [
            'Network Components',
            'child' => [  
                [
                    'Network Gadgets',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Access Points',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Network Interface Cards',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Routers',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Switches',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Wireless USB Adapters',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                'Mobile Broadband',
                'child' => [
                    [
                        'Mobile Wi-Fi Hotspots',
                        'attr'	=> [
                            [
                                'label'         => 'Brand',
                                'type'          => 'select',
                                'required'      => 1,
                                'suggestion'    => 'Brand of the product',
                                'meta' => [
                                    'No Brand','Dell'
                                ],
                            ], 
                        ],  
                    ],
                    [
                        'USB Modems',
                        'attr'	=> [
                            [
                                'label'         => 'Brand',
                                'type'          => 'select',
                                'required'      => 1,
                                'suggestion'    => 'Brand of the product',
                                'meta' => [
                                    'No Brand','Dell'
                                ],
                            ], 
                        ],  
                    ],  
                  ],
                ],
                [
                    'Modems',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Range extender',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Network adaptors',
                    'child' => [
                        [
                            'Laptop Network adapters',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'USB network adapters',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Bluetooth network adapters',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Powerline network adapter',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                      ],
                ],
                [
                    'Airport Routers',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
           ], 
        ],
        [
            'Printers & Accessories',
            'child' => [
                [
                    'Printers',
                    'child' => [                      
                        [
                            'Laser Jet',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Ink Jet',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Photo',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Business',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Dot matrix Printer',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Label Printer',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                      ],
                ],
                [
                    'Printer stands',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],      
                [
                    'Fax machines',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],          
                [
                    'Ink',
                    'child' => [                      
                        [
                            'Inkjets Inks',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            'Laser Toners',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],                                           
                      ],
                ],         
                [
                    '3D Printing',
                    'child' => [                      
                        [
                            '3D Printers',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],
                        [
                            '3D Printer Parts',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ], 
                        [
                            '3D Printing Materials',
                            'attr'	=> [
                                [
                                    'label'         => 'Brand',
                                    'type'          => 'select',
                                    'required'      => 1,
                                    'suggestion'    => 'Brand of the product',
                                    'meta' => [
                                        'No Brand','Dell'
                                    ],
                                ], 
                            ],  
                        ],                                           
                      ],
                ],           
                [
                    'Printer cutter',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],             
                [
                    'Printer memory modules',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],                    
           ], 
        ],
        [
            'Scanners',
            'attr'	=> [
                [
                    'label'         => 'Brand',
                    'type'          => 'select',
                    'required'      => 1,
                    'suggestion'    => 'Brand of the product',
                    'meta' => [
                        'No Brand','Dell'
                    ],
                ], 
            ],  
        ],

        [
            'Software',
            'child' => [
                [
                    'Educational Media',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Productivity',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],               
                [
                    'Operating System',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],               
                [
                    'Security Software',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],              
                [
                    'PC Games',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],           
                [
                    'VR Games',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
            ],
        
        ],
        [
            'Storage',
            'child' => [
                [
                    'External Hard Drives',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Memory Cards',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'USB Flash Drives',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Internal Hard Drives',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Solid State Drives',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'NAS',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Internal Solid State Drives',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'External Solid State Drives',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'OTG Drives',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Flash Drives',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
                [
                    'Storage for Mac',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],
            ],  
        ],
        [
            'Clearance',
            'attr'	=> [
                [
                    'label'         => 'Brand',
                    'type'          => 'select',
                    'required'      => 1,
                    'suggestion'    => 'Brand of the product',
                    'meta' => [
                        'No Brand','Dell'
                    ],
                ], 
            ],  
        ],
        [
            'PC Gaming',
            'child' => [
                [
                    'PC Game',
                    'attr'	=> [
                        [
                            'label'         => 'Brand',
                            'type'          => 'select',
                            'required'      => 1,
                            'suggestion'    => 'Brand of the product',
                            'meta' => [
                                'No Brand','Dell'
                            ],
                        ], 
                    ],  
                ],             
            ],
        ],   
     ],                                                
  ], 
];