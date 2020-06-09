<?php
//multi-select,select,text,checkbox,number

$data = [
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
                                                                
                                    ],
                                ],
                                [
                                    'Basic', 
                                ],
                        ],  
                    ],                                                
               ],
    ],
];