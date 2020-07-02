<?php
//multi-select,select,text,checkbox,number

$groceries = [
	[
        'Groceries',
        'child' => [  
          [
            'Cigars & Cigarettes',
            'child'=>[
              ['Lighters'],
              ['Matches'],
            ]
          ],
          [
            'Laundry & Household',
            'child'=>[
              ['Detergent'],
              [
                'Laundry',
                'child'=>[
                  ['Fresheners & Ironing'],
                  ['Stain Remover'],
                  ['Washing Liquid'],
                  ['Washing Machine Cleaner'],
                  ['Washing Powder'],
                  ['Bleach'],
                  ['Delicate Care'],
                  ['Fabric Conditioners'],
                ]
              ],
              [
                'Pest Control',
                'child'=>[
                  ['Insecticide Sprays'],
                  ['Others'],
                  ['Insect Baits'],
                  ['Insecticide Coil'],
                  ['Insecticide Devices'],
                ]
              ],
              [
                'Paper',
                'child'=>[
                  ['Kitchen Roll'],
                  ['Tissues'],
                  ['Toilet Paper'],
                ]
              ],
              [
                'Laundry & Household Sundries',
                'child'=>[
                  ['Disposable Utensils & Gadgets'],
                  ['Food Storage & Party'],
                ]
              ],
              [
                'Dishwashing',
                'child'=>[
                  ['Automatic Dishwashing'],
                  ['Hand Dishwashing'],
                ]
              ],
              [
                'Cleaning',
                'child'=>[
                  ['Bathroom'],
                  ['Bleach'],
                  ['Cleaning Accessories'],
                  ['Drain Cleaners'],
                  ['Fabric Upholstery'],
                  ['Floors'],
                  ['Glass Cleaner'],
                  ['Kitchen'],
                  ['Multipurpose Cleaner'],
                  ['Polish And Wax'],
                  ['Polish Wax'],
                  ['Outdoor'],
                ]
              ],
              [
                'AirCare',
                'child'=>[
                  ['Air Fresheners'],
                  ['Dehumidifiers'],
                ]
              ],
            ]
          ],
          [
            'Baking & Cooking',
            'child'=>[
              [
                'Cooking Ingredients',
                'child'=>[
                  ['Pepper'],
                  ['Salt'],
                  ['Sauce'],
                  ['Seasoning'],
                  ['Stock Gravy Broth'],
                  ['Vinegar & Cooking Wine'],
                  ['Herbs & Spices'],
                  ['Coconut Milk'],
                  ['Cooking Sauces & Kits'],
                  ['Fish Sauce'],
                  ['Soy Sauce'],
                  ['Lemon & Lime Juice'],
                  ['Oil'],
                ]
              ],
              [
                'Home Baking & Sugar',
                'child'=>[
                  ['Sugar'],
                  ['Sugar Cubes, Sticks & Coffee Crystals'],
                  ['Baking Accessories'],
                  ['Baking Chocolates & Cocoa'],
                  ['Baking Needs'],
                  ['Dried Fruits & Raisins'],
                  ['Extract & Flavoring'],
                  ['Bread, Cake, Cookie & Mixes'],
                  ['Flour'],
                  ['Natural Sweeteners'],
                ]
              ],
              [
                'Condiment Dressing',
                'child'=>[
                  ['BBQ Sauce'],
                  ['Chilli Sauce'],
                  ['Condiments'],
                  ['Marinades'],
                  ['Mayonnaise'],
                  ['Mustard'],
                  ['Salad Dressing'],
                  ['Ketchup'],
                ]
              ],
            ]
          ],
          [
            'Breakfast',
            'child'=>[
              ['Breakfast Cereals'],
              ['Oatmeals'],
              ['Granola'],
              ['Pancake & Waffle Mixes'],
              ['Bars'],
              ['Instant Breakfast Drinks'],
              [
                'Jams, Honey & Spreads',
                'child'=>[
                  ['Honey'],
                  ['Jam Marmalade'],
                  ['Kaya'],
                  ['Nut Butter'],
                  ['Savoury Spread'],
                  ['Chocolate Sweet'],
                ]
              ],
            ]
          ],
          [
            'Candy & Chocolate',
            'child'=>[
              ['Chocolate'],
              ['Bars'],
              ['Caramels & Toffee'],
              ['Nuts & Fruits'],
              ['Candy Assortments'],
              ['Chewing Gum & Mints'],
              ['Marshamallows'],
              ['Festive Boxed'],
              ['Other Sweets'],
            ]
          ],
          [
            'Canned, Dry & Packaged Foods',
            'child'=>[
              ['Condiments & Pickles'],
              [
                'Noodles, Pasta & Rice',
                'child'=>[
                  ['Noodles'],
                  ['Pasta'],
                  ['Rice'],
                ]
              ],
              [
                'Jarred Food',
                'child'=>[
                  ['Olives Pickles Chutneys'],
                  ['Other Jarred Food'],
                ]
              ],
              [
                'Instant & Ready to Eat',
                'child'=>[
                  ['Instant Noodles'],
                  ['Instant Pasta'],
                  ['Instant Soup'],
                  ['Instant Porridge'],
                  ['Ready to Eat'],
                ]
              ],
              [
                'Grains, Beans &Pulses',
                'child'=>[
                  ['Cous Cous'],
                  ['Grains'],
                  ['Lentils'],
                  ['Beans & Chickpeas'],
                ]
              ],
              [
                'Dried Goods',
                'child'=>[
                  ['Chinese Dried Goods'],
                  ['Cooked Meat'],
                  ['Dried Fruit Nuts'],
                  ['Seaweed'],
                ]
              ],
              [
                'Canned Food',           
                  'child'=>[
                    ['Canned Fish'],
                    ['Canned Fruit'],
                    ['Canned Meat'],
                    ['Canned Soup & Pasta'],
                    ['Canned Vegetables'],
                  ]               
                ],
          ],
          [
            'Snacks',
            'child'=>[
              ['Breadsticks'],
              ['Chips & Crisps'],
              ['Cookies'],
              ['Crackers'],
              ['Nuts'],
              ['Biscuit'],
              ['Sauces & Syrup'],
              ['Seaweed Laver'],
              ['Local Specialty'],
              ['Wafers'],
              ['Other Snacks'],
              ['Chips'],
              ['Dips'],
              ['Dried Fruit & Vegetable Chips'],
              ['Indian Snacks'],
              ['Popcorn'],
              ['PrawnFish'],
              ['Pretzels'],
            ]
          ],
          ['Gourmet Food and Gifts'],
          [
            'Beverages',
            'child'=>[
              ['Coffee'],
              ['Tea'],
              ['Hot Chocolate and Nutrition Drinks'],
              ['Powdered drink mixes'],
              ['Energy Drink'],
              ['Flavoring Syrups'],
              [
                'Juices',
                'child'=>[
                  ['Juice Drinks'],
                  ['Coconut Water'],
                  ]
              ],            
              [ 'Asian Health Drinks'],             
              [
                'Water',
                'child'=>[
                  ['Flavoured Water'],
                  ['Sparkling Water'],
                  ['Still Water'],
                  ]
              ],
              [
                'UHT, Milk & Milk Powder',
                'child'=>[
                  ['Creamer'],
                  ['Flavoured Milk'],
                  ['Milk Powder'],
                  ['Soy Powder'],
                  ['UHT Dairy Free'],
                  ['UHT Milk'],
                  ['UHT Soy'],
                  ['Condensed Milk'],
                ]
              ],
              [
                'Soft Drinks',
                'child'=>[
                  ['Cordials & Powder Mixes'],
                  ['Carbonated Soft Drinks'],
                  ['Iced Tea'],
                  ['Sports & Energy Drinks'],
                  ['Asian Health Drinks'],
                ]
              ],
            ]
          ],
          [
            'Fresh Produce',
            'child'=>[
              ['Fresh Vegetables'],
              ['Fresh Herbs & Spices'],
              ['Fresh Fruit'],
              ['Salad'],
              ['Mushrooms'],
              ['Asian Vegetables'],
              ['Other Vegetables'],          
            ]
          ],
          [
            'Frozen',
            'child'=>[
              ['Ice Cream'],
              ['Seafood'],
              ['Frozen Desserts'],
              ['Convenience Foods'],
              ['Bread, Bagels & Pancakes'],
              ['Vegetables & Fruits'],
              ['Mock Meat & Seafood'],
              ['Meat'], 
            ]
          ],
          [
            'Bakery',
            'child'=>[
              ['Cakes & Sweet Pies'],
              ['Breakfast & Treats'],
              ['Bread'],
            ]
          ],
          [
            'Dairy & Chilled',
            'child'=>[
              ['Chilled Drinks'],
              ['Desserts'],
              ['Deli'],
              ['Cooking Ingredients'],
              ['Convenience Foods'],
              ['Cheese'],
              ['Yoghurt'],
              ['Tofu'],
              ['Milk, Butter & Eggs'],             
            ]
          ],
        ]
     ], 
];
