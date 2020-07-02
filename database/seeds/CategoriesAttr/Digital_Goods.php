<?php
//multi-select,select,text,checkbox,number

$digital_goods = [
	[
        'Digital Goods',
        'child' => [  
          ['Daraz Gift Cards'],
          [
            'Local Vouchers',
            'child' => [
              ['Food and Beverage'],
              ['Beauty & Wellness'],
              ['Activities & Entertainment'],
              ['Hotel and Travel'],
              ['Fashion and Apparel'],
              ['Health & Fitness'],
              ['Linehaul Service'],
              ['Charity'],
             ]
          ],
          [
            'Games Gift Cards & Software',
            'child' => [ 
              ['Softwares'],
              ['Game Keys'],
              ['Gift Cards'],
              ['Game Codes'],
            ]
          ],
          [
            'Home Services',
            'child' => [
              ['Installation'],
              ['Maintenance'],
              ['Repair'],
              ['Replacement'],
             ]
          ],
          [
            'Financial Services',
            'child' => [
              ['Insurance'],
             ]
          ],
          [
            'Seller Services',
            'child' => [
              ['Digital Advertising'],
              ['Photography & Editing'],
             ]
          ],
          ['Education'],
        ]
     ], 
];
