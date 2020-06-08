<?php
//multi-select,select,text,checkbox,number

$data = [
	[
        'Mobiles & Tablets',
        'child' => [
            [
                'Mobiles',
                'attr'	=> [
                    [
                        'label'         => 'Brand',
                        'type'          => 'multi-select',
                        'required'      => 1,
                        'suggestion'    => 'Brand of the product Please click here to request for a new brand',
                        'attr_meta_val' => [
                            ['No Brand'],['Huawei'],['5 Star'],['Samsung'],['IMAX'],['Vega'],['Xiaomi'],['Vivo'],['Mango'],['Jaka Techs'],['Nokia'],['Infinix'],['Mororola'],['Realme'],['Micromax'],['Alcatel'],['Proton'],['OPPO'],['Nokia Bangladesh'],['UMIDIGI'],['Symphony Bangladesh'],['Linnex'],
                        ],
                    ],
                    [
                        'label'         => 'Screen Size (inches)',
                        'type'          => 'select',
                        'required'      => 1,
                        'suggestion'    => 'Size of the mobile screen in inchesValid Value must be a number. The separator between the integer part and the fractional part should be a dot. 1 digit is allowed after the dot. Please click here to request new values',
                        'attr_meta_val' => [
                            ['3.6 - 4 Inch'],['4.1 - 4.5 Inch'],['4.6 - 5 Inch'],['5.1 - 5.5 Inch'],['5.6 - 6 Inch'],['6 Inch and Above'],['3.5 Inch and Below'],
                        ],
                    ],
                    [
                        'label'         => 'RAM Memory',
                        'type'          => 'select',
                        'required'      => 1,
                        'suggestion'    => 'Computer Data Storage. Require format: Both numbers and texts are allowed. Maximum number of characters is 10. Please click here to request new values',
                        'attr_meta_val' => [
                            ['Other'],['6 GB'],['16 GB'],['8 GB'],['4 GB'],['3 GB'],['2 GB'],['1 GB'],['32 GB'],['512 GB'],['1.5 GB'],['12 GB'],['256 mb or below'],
                        ],
                    ],
                    [
                        'label'         => 'Storage Capacity',
                        'type'          => 'select',
                        'required'      => 1,
                        'suggestion'    => 'The size of a file and a storage device\'s capacity. Require format: Both numbers and texts are allowed. Maximum number of characters is 255. Please click here to request new values',
                        'attr_meta_val' => [
                            ['Other'],['6 GB'],['16 GB'],['8 GB'],['4 GB'],['3 GB'],['2 GB'],['1 GB'],['32 GB'],['64 GB'],['128 GB'],['512 MB'],['1.5 GB'],['12 GB'],['256 mb or below'],
                        ],
                    ],
                    [
                        'label'         => 'Operating System',
                        'type'          => 'select',
                        'required'      => 1,
                        'suggestion'    => 'Operating System Version. Require format: Both numbers and texts are allowed. Maximum number of characters is 255. Please click here to request new values',
                        'attr_meta_val' => [
                            ['Windows'],['Android'],['iOS'],['Symbian'],['Other'],['BlackBerry'],['Bada'],['WebOS'],['MeeGo'],['Palm OS'],
                        ],
                    ],
                    [
                        'label'         => 'Operating system version',
                        'type'          => 'select',
                        'suggestion'    => 'Operating System Version. Require format: Both numbers and texts are allowed. Maximum number of characters is 255. Please click here to request new values',
                        'attr_meta_val' => [
                            ['Marshmallow'],['Not Specified'],['Android'],['Symbian'],['Windows 7'],['Windows XP'],['iOS 7'],['Windows 8'],['iOS 8'],['Windows 10'],['Android v4.2'],['Android v4.4'],['OS X Yosemite'],['Windows Vista'],['Windows 2000'],['KitKat'],['Windows XP 64-Bit Edition'],['Jelly Bean'],['Lolipop'],['Windows Server 2008 R2'],['OS X Mountain Lion'],['Eclair'],['Gingerbread'],['Cupcake'],['Windows Server 2012'],['Windows Server 2008'],['Donut'],['Ice Cream Sandwich'],['Froyo'],['Windows Server 2003 R2'],['Honeycomb'],['Windows Server 2003'],['OX X Mavericks'],['OS X El Capitan'],['OS'],['Proprietary OS'],['Android 7.0'],['Android 6.0'],['Android 4.2'],['Android 8.0 Oreo'],['Android 7.1'],['Android v6.0'],['Android v1.0'],['Android v1.1'],['Android v1.5'],['Android v1.6'],['Android v2.0'],['Android v2.0.1'],['Android v2.1'],['Android v2.2'],['Android v2.2.1'],['Android v2.2.2'],['Android v2.2.3'],['Android v2.3'],['Android v2.3.1'],['Android v2.3.2'],['Android v2.3.3'],['Android v2.3.4'],['Android v2.3.5'],['Android v2.3.6'],['Android v2.3.7'],['Android v2.3'],['Android v2.3.1'],['Android v2.3.2'],['Android v2.3.3'],['Android v2.3.4'],['Android v2.3.5'],['Android v2.3.6'],['Android v2.3.7'],['Android v3.0'],['Android v3.1'],['Android v3.2'],['Android v3.2.1'],['Android v3.2.2'],['Android v3.2.3'],['Android v3.2.4'],['Android v3.2.5'],['Android v3.2.6'],['Android v4.0'],['Android v4.0.1'],['Android v4.0.2'],['Android v4.0.3'],['Android v4.0.4'],['Android v4.1'],['Android v4.1.1'],['Android v4.1.2'],['Android v4.2.1'],['Android v4.2.2'],['Android v4.3'],['Android v4.4.1'],['Android v4.4.2'],['Android v4.4.3'],['Android v4.4.4'],['Android v4.4W'],['Android v4.4W.1'],['Android v4.4W.2'],['Android v5.0'],['Android v5.0.1'],['Android v5.0.2'],['Android v5.1.1'],['Android v6.0.1'],['Android v7.0'],['Android v7.1'],['Android v7.1.1'],['Android v7.1.2'],['Android v8.0'],['Android v8.1'],['Android v9.0'],['KaiOS'],
                        ],
                    ],
                    [
                        'label'         => 'PPI',
                        'type'          => 'select',
                        'suggestion'    => 'Pixel per inch (pixel density)Please choose one value from the dropdown list. Please click here to request new values',
                        'attr_meta_val' => [
                            ['300-400 PPI'],['400-500 PPI'],['200-300 PPI'],['Above 500 PPI'],['Below 200 PPI'],                        
                        ],
                    ],
                    [
                        'label'         => 'Video Resolution',
                        'type'          => 'select',
                        'suggestion'    => 'Network Connections of the device. Required format: You can choose one or many values from the dropdown list. Hold Ctrl and click on the values to choose multiple options. Please click here to request new values',
                        'attr_meta_val' => [
                            ['1080p'],['2160p'],['720p'],['480p'],['SVGA'],
                        ],
                    ],
                    [
                        'label'         => 'Network Connections',
                        'type'          => 'multi-select',
                        'suggestion'    => 'Network Connections of the device. Required format: You can choose one or many values from the dropdown list. Hold Ctrl and click on the values to choose multiple options.',
                        'attr_meta_val' => [
                            ['4G'],['GSM'],['3G'],['2G'],['3.5G - HSDPA'],
                        ],
                    ],
                    [
                        'label'         => 'Screen Type',
                        'type'          => 'select',
                        'suggestion'    => 'Different types of phone screen, i.e. AMOLEDPlease choose one value from the dropdown list.',
                        'attr_meta_val' => [
                            ['AMOLED'],['IPS LCD'],['TFT LCD'],['LCD'],['OLED'],['VGA'],['QVGA'],
                        ],
                    ],
                    [
                        'label'         => 'Resolution',
                        'type'          => 'select',
                        'suggestion'    => 'Resolution of the monitor. Require format: Both numbers and texts are allowed. Maximum number of characters is 255.',
                        'attr_meta_val' => [
                            ['HD'],['Full HD'],['Others'],['qHD'],['4K UHD'],['QuadHD'],
                        ],
                    ],
                    ['label'=> 'Number of Cameras','type'=> 'number',],
                    ['label'=> 'notched_display','type'=> 'text',],
                    ['label'=> 'headphone_jack','type'=> 'text',],
                    ['label'=> 'memory_storage_capacity','type'=> 'text',],
                    ['label'=> 'data_transfer_rate','type'=> 'text',],
                    ['label'=> 'maximum_adjustment','type'=> 'text',],
                ],
            ],
        ],
    ],
];