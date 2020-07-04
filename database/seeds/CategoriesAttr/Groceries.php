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
              [
                'Fresh Vegetables',
                'child'=>[
                  ['Radish'],
                  ['Roots'],
                  ['Sweet Potatoes'],
                  ['Turnip'],
                  ['Yams'],
                  ['Carrots & Root Vegetables'],
                  ['Leafy Vegetables'],
                  ['Peas, Beans & Sweetcorn'],
                  ['Ginger'],
                  ['Gourds'],
                  ['LotusRoot'],
                  ['Nuts'],
                  ['Onions'],
                  ['Parsnips'],
                  ['Potatoes'],
                  ['Pumpkin & Squash'],
                  ['Peas'],
                  ['Preserved Vegetables'],
                  ['Spring Onions'],
                  ['Sprouts Microgreens'],
                  ['Sweet Corn'],
                  ['Tomatoes'],
                  ['Beetroot'],
                  ['Garlic'],
                  ['Courgettes'],
                  ['Cucumber'],
                  ['Endives'],
                  ['Fennel'],
                  ['Okra'],
                  ['Leeks'],
                  ['Lettuce'],
                  ['Mixed'],
                  ['Brinjal'],
                  ['Broccoli'],
                  ['Brussel Sprouts'],
                  ['Cabbage'],
                  ['Capsicums'],
                  ['Cauliflower'],
                  ['Celery'],
                  ['Chillies'],
                  ['Aloe Vera'],
                  ['Asparagus'],
                  ['Avocados'],
                  ['Baby Vegetables & Edible Flowers'],
                  ['Beans'],
                ]
              ],
              ['Fresh Herbs & Spices'],
              [
                'Fresh Fruit',
                'child'=>[
                  ['Grapes'],
                  ['Mangoes'],
                  ['Melons'],
                  ['Papaya'],
                  ['Pineapple'],
                  ['Apples'],
                  ['Bananas'],
                  ['Citrus'],
                  ['Pears'],
                  ['Stonefruits'],
                  ['Berries'],
                  ['Coconut'],
                  ['Exotic Fruits'],
                ]
              ],
              [
                'Salad',               
                'child'=>[                  
                  ['Ready-to Eat Salad'],
                  ['Packaged Salad'],
                                  ]
              ],
              ['Mushrooms'],
              [
                'Asian Vegetables',
                'child'=>[  
                  ['Leaves'],
                  ['Pak Choi'],
                  ['Spinach'],
                  ['Sprouts Microgreens'],
                  ['Chye Sim/CaiXin'],
                ]
              ],
              ['Other Vegetables'],          
            ]
          ],
          [
            'Frozen',
            'child'=>[
              [
                'Ice Cream',
                'child'=>[
                  ['Ice Cream'],
                  ['Frozen Yogurt'],
                  ['Sorbet'],
                ]
              ],
              [
                'Seafood',
                'child'=>[
                  ['Fish & Fingers Cakes'],
                  ['Frozen Fish Fillet'],
                  ['Frozen Shellfish'],
                  ['Breaded Seafood'],
                  ['Crabsticks & Fishballs'],
                ]
              ],
              [
                'Frozen Desserts',
                'child'=>[
                  ['Jelly Pudding'],
                  ['Soy Dessert'],
                  ['Cakes'],
                  ['Sweet Pastries'],
                ]
              ],
              [
                'Convenience Foods',
                'child'=>[
                  ['Dim Sum'],
                  ['Noodles'],
                  ['Pizza'],
                  ['Ready Meals'],
                  ['Ready-to-Eat Meals'],
                  ['Soups'],
                  ['Chilled Soup'],
                ]
              ],
              [
                'Bread, Bagels & Pancakes',
                'child'=>[
                  ['Speciality Bread'],
                  ['Frozen Bread'],
                  ['Panckaes & Waffles'],
                ]
              ],
              [
                'Vegetables & Fruits',
                'child'=>[
                  ['Fruits'],
                  ['Vegetables'],
                ]
              ],
              ['Mock Meat & Seafood'],
              [
                'Meat'],
                  'child'=>[
                    ['Beef'],
                    ['Burger & Sausage'],
                    ['Chicken'],
                    ['Chicken Franks Nuggets'],
                    ['Duck'],
                    ['Lamb'],
                    ['Pork'],
                    ['Poultry'],
                    ['Satay'],
                    ['Sliced Meat'],
                    ['Turkey'],
                  ]
                , 
            ]
          ],
          [
            'Bakery',
            'child'=>[
              [
                'Cakes & Sweet Pies',
                'child'=>[
                  ['Cookies & Brownies'],
                  ['SweetPies'],
                  ['Cakes'],
                  ['Fruit Loaves & Scones'],
                ]
              ],
              [
                'Breakfast & Treats',
                'child'=>[
                  ['Croissants & Brioche'],
                  ['Muffins'],
                  ['Pancakes'],
                  ['Pastries & Scones'],
                ]
              ],
              [
                'Bread',
                'child'=>[
                  ['Bagels & Pretzels'],
                  ['Bread Rolls &Buns'],
                  ['Cream Rolls'],
                  ['Loaves & Artisanal Breads'],
                  ['Prebaked Bread'],
                  ['Sliced Bread'],
                  ['Variety Buns'],
                  ['Wraps, Pitta & Naan'],
                ]
              ],
            ]
          ],
          [
            'Dairy & Chilled',
            'child'=>[
              [
                'Chilled Drinks',
                'child'=>[
                  ['Chilled Tea'],
                  ['Coconut'],
                  ['Cold Pressed Juice'],
                  ['Fresh Apple Juice'],
                  ['Fresh Orange Juice'],
                  ['Other Drinks'],
                  ['Other Fresh Fruit Juice'],
                  ['Shakes And Smoothies'],
                  ['Chilled Coffee'],
                ]
              ],
              [
                'Desserts',
                'child'=>[
                  ['Cakes'],
                  ['Cheese Cakes'],
                  ['Chocolates'],
                  ['Jelly Pudding & Custard'],                
                  ['Ready-to-Roll Pastry'],
                  ['Soy Dessert'],
                  ['Sweet Pastries'],
                  ['Sweet Soups'],
                  ['Others'],
                ]
              ],
              [
                'Deli',
                'child'=>[
                  ['Antipasti'],
                  ['Deli Meat'],
                  ['Dips'],
                  ['Ethnic'],
                ]
              ],
              [
                'Cooking Ingredients',
                'child'=>[
                  ['Home Baking'],
                  ['Ready to Roll Pastry'],
                  ['Seasoning'],
                  ['Stock, Gravy & Broth'],
                  ['Asian Pastes & Sauces'],
                  ['Coconut'],
                  ['Garlic & Shallots'],
                ]
              ],
              [
                'Convenience Foods',
                'child'=>[
                  ['Ready Meals'],
                  ['Pickles & Chutneys'],
                  ['Salad Dressing'],
                  ['Dim Sum'],
                  ['Fresh Pasta & Sauce'],
                  ['Mock Meat & Seafood'],
                  ['Noodles'],
                ]
              ],
              ['Cheese'],
              [
                'Yoghurt',
                'child'=>[
                  ['Yogurt'],
                  ['Yoghurt Drinks'],
                ]
              ],
              ['Tofu'],
              [
                'Milk, Butter & Eggs'],           ,
                  'child'=>[
                    ['Butter'],
                    ['Margarine & Spread'],
                    ['Cream'],
                    ['Cultured Milk'],
                    ['Eggs'],
                    ['Fresh Milk'],
                    ['Soy & Dairy Free Milk'],
                  ]               
              ]
            ],
         ]
      ]
    ], 
];
