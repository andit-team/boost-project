<?php

use Illuminate\Database\Seeder;
// use Baazar;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

 
$data = [
	  [
        'Electronic Devices',
        'child' => [
            [
                'Mobiles',
                'child' => [
                    ['Xiaomi Phones'], 
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
    [
        'Electronic Accessories',
        'child' => [
            [
                'Mobile Accessories',
                'child' => [
                    ['Phone Cases'],
                    ['Power Banks'],
                    ['Cables Converters'],
                    ['Wall Chargers'],
                    ['Wireless Chargers'],
                ],
            ],
            [
                'Audio',
                'child' => [
                    ['Headphones Headset'],
                    ['Home Entertainment'],
                    ['Bluetooth Speakers'],
                    ['Live sound Stage Equipment'],
                ]
            ],
            [
                'Wearable',
                'child' => [
                    ['Smartwatches'],
                    ['Virtual Reality'],
                ],  
            ],
            [
                'Console Accessories',
                'child' => [
                    ['Playstation Controllers'],
                    ['Other Gaming Accessories'],
                ]
            ],
            [
                'Camera Accessories',
                'child' => [
                    ['Memory Cards	'],
                    ['DSLR Lens'],
                    ['Mirrorless Lens'],
                    ['Special Camera Lens'],
                    ['Tripods Monopods'],
                    ['Camera Cases, Covers and Bags'],
                    ['Lighting Studio Equipment'],
                    ['Dry Box'],
                    ['Batteries'],
                ]
            ],
            [
                'Computer Accessories',
                'child' => [
                    ['Monitors'],
                    ['Mice'],
                    ['PC Audio'],
                    ['Keyboards'],
                    ['Mice Keyboard Combos'],
                    ['Power Cord Adaptors'],
                ]
            ],
            [
                'Storage',
                'child' => [
                    ['External Hard Drives'],
                    ['Internal Hard Drives'],
                    ['Flash Drives'],
                    ['OTG Drives'],
                ]
            ],
            [
                'Printers Categories',
                'child' => [
                    ['Printers'],
                    ['Ink Toners'],
                    ['Printer Stands'],
                    ['Fax Machines'],
                ]
            ],
            [
                'Computer Components',
                'child' => [
                    ['Graphic Cards'],
                    ['Desktop Casings'],
                    ['Motherboards'],
                    ['Fans Heatsinks'],
                    ['RAM'],
                    ['Processors'],
                ]
            ],
            [
                'Network Components',
                'child' => [
                    ['Access Points'],
                    ['Modems'],
                    ['Network Interface Cards'],
                    ['Network Switches'],
                    ['Routers'],
                    ['Wireless USB Adapters'],
                ]
            ],
            [
                'Software',
                'child' => [
                    ['Educational Media'],
                    ['Operating System'],
                    ['PC Games'],
                    ['Security Software '],
                ]
            ],
        ],
    ],
    [
      
    ],
];
/*
TV Home Appliances
 
     Televisions 
	     Smart Televisions 
		 LED Televisions
		 OLED Televisions
		 Other Televisions
		 
     Home Audio 
         Soundbars 
         Home Entertainment 
         Portable Players
         Live Sound Stage Equipment
	 
     TV Accessories Video Device 
         TV Receivers 
         Projectors 
         TV Remote Controllers 
         Cables 
         Wall Mounts Protectors 
         Blu-Ray/DVD Players 
		 
     Large Appliances 
	     Refrigerators 
		 Freezers 
         Washing Machines 
         Microwave Oven
         Electric Oven
         Hoods
         Cooktop Range
         
     Small Kitchen Appliances 
         Rice Cooker 
         Blender, Mixer Grinder
         Electric Kettle
         Juicer Fruit Extraction 
         Fryer
         Coffee Machine
         Pressure Cookers
         Sandwich Makers
         Specialty Cookware
         Toasters 
		 
     Cooling Heating	
         Fan
         Air Conditioner
         Air Coolers
         Air Purifiers
         Dehumidifiers
         Water Heater 
         
     Vacuums Floor Care 
         Vacuum Cleaners
         Steam Mops
         Vacuum Cleaner Parts
		 
     Ironing Sewing Machine 
	     Irons 
		 Sewing Machines
		 
	 Water Purifiers Filters  
	 
Health Beauty

     Bath Body
	     Body Massage Oils 
		 Body Moisturizers
		 Body Scrubs
		 Body Soaps Shower Gels
		 Foot Care
		 Hair Removal
		 Hand Care
		 Sun Care for Body
		 Bath Body Accessories
	 Beauty Tools 
	     Curling Irons Wands
		 Flat Irons
		 Multi-stylers
		 Hair Dryers
		 Face Skin Care Tools
		 Foot Relief Tools
		 Hair Removal Accessories
		 Slimming Electric Massagers
		 
	 Fragrances
	     Women Fragrances
		 Men Fragrances
		 Unisex Fragrances
		 
	 Hair Care
	     Shampoo
		 Hair Treatments
		 Hair Care Accessories
		 Hair Brushes Combs
		 Hair Coloring
		 Hair Conditioner
		 Wig Hair Extensions Pads
		 
	 Makeup
	     Face
		 Lips
		 Eyes
		 Nails
		 Palettes Sets
		 Brushes Sets
		 Makeup Accessories
		 Makeup Removers
		 
	 Men's Care
	     Deodorants
		 Hair Care
		 Shaving Grooming
		 Skin Care
		 
	 Personal Care
	     Deodorants
		 Feminine Care
		 Oral Care
		 Personal Safety Security
		 
	 Skin Care
	     Moisturizers Creams
		 Serum Essence
		 Face Mask Packs
		 Face Scrubs Exfoliators
		 Facial Cleansers
		 Lip Balm Treatments
		 Toner Mists
		 
	 Food Supplements
	     Beauty Supplements
		 Multivitamins
		 Sports Nutrition
		 Well Being
		 Sexual Health Vitamins
		 
	 Medical Supplies
	     First Aid Supplies
		 Health Accessories
		 Health Monitors Tests
		 Injury Support Braces
		 Medical Tests
		 Nebulizers Aspirators
		 Ointments Creams
		 Scales Body Fat Analyzers
		 Wheelchairs
		 
Babies Toys

     Mother Baby
	 
	 Feeding
		 Baby Toddler Foods
		 Milk Formula
		 
	 Diapering Potty
	     Cloth Diapers Accessories
		 Diaper Bags
		 Wipes Holders
		 Disposable Diapers
		 
	 Baby Gear
	     Baby Walkers
		 Backpacks Carriers
		 Strollers
		 Swings, Jumpers Bouncers
		 
	 Baby Personal Care
	     Baby Bath
		 Bathing Tubs  Seats
		 Shampoo  Conditioners
		 Soaps, Cleansers  Bodywash
		 
	 Clothing Accessories
	     Girls Clothing
		 Girls Shoes
		 Boys Clothing
		 Maternity Wear
		 New Born Unisex (0 - 6 months)
		 New Born Body Suits
		 New Born Sets Packs
		 
	 Nursery
		 Bathroom Safety
		 Mattresses Bedding
		 Sanitizers
		 
	 Toys Games
	     Action Figures Collectibles
		 Arts Crafts for Kids
		 Ball Prit Accessories
		 Block Building Toys
		 Doll Accessories
		 Dress Up Pretend Play
		 Electronic toys
		 Learning Education
		 Party Supplies
		 Puzzle
		 Slime Squishy Toys
		 Stuffed Toys
		 
	 Baby Toddler Toys
	     Activity Gym Playmats
		 Ball
		 Bath Toys
		 Crib Toys Attachments
		 Early Learning
		 Indoor Climbers Structures
		 Push Pull Toys
		 Rocking Spring Ride-Ons
		 
	 Remote Control Vehicles
	     Die-Cast Vehicles
		 RC Vehicles Batteries
		 Play Trains Railway Sets
		 Play Vehicles
		 Drones Accessories
		 
	 Sports Outdoor Play
	     Fidget Spinners Cubes
		 Kids Bikes Accessories
		 Swimming Pool Water Toys
		 Outdoor Toys
		 Play Tents Tunnels
		 Boxing
		 Play Sets Playground Equipment
		 Sports Play
		 Kids Tricycles
		 Toys Sports
		 
	 Traditional Games
	     Board Games
		 Card Games
		 Game Room Games
		  		 
Groceries Pets

     Beverages 
	     Coffee
		 Hot Chocolate Drinks
		 Powdered Drink Mixes
		 
	 Breakfast, Choco Snacks
	     Biscuit
		 Breakfast Cereals
		 Chocolate
		 Oatmeals
		 
	 Food Staples
	     Canned Food
		 Condiment Dressing
		 Grains, Beans Pulses
		 Home Baking Sugar
		 Instant Ready-to-Eat
		 Jarred Food
		 Noodles
		 Rice
		 
	 Cooking Ingredients
	     Oil
		 Herbs Spices
		 Sauce
		 
	 Laundry Household
	     AirCare
		 Cleaning
		 Dishwashing
		 Laundry
		 Pest Control
		 
	 Cat
	     Cat Food
		 Grooming
		 Toys Accessories
		 Litter Toilet
		 
	 Dog
	     Dog Treats
		 Dog Grooming
		 Toys Accessories
		 Carriers Travel
		 Dog Food
		 Leashes, Collars Muzzles
		 
	 Fish
	     Aquariums Accessories
		 Fish Food
		 Starter Kits
		 
	 Bird
	     Bird Food
		 
	 Small Pet
	     Food Accessories
		 
	 Lifestyle Accessories
	     Lighters
		 
Home Lifestyle

     Bath 
	     Bathroom Scales
		 Shower Caddies Hangers
		 Shower Curtains
		 Towel Rails Warmers
		 
	 Bedding
	     Blankets Throws
		 Comforters, Quilts Duvets
		 Mattress Pads
		 Mattress Protectors
		 Pillows Bolsters
		 
	 Decor
	     Artificial Flowers Plants
		 Candles Candleholders
		 Clocks
		 Curtains
		 Cushions Covers
		 Picture Frames
		 Rugs Carpets
		 Vases Vessels
		 
	 Furniture
	     Bedroom
		 Living Room
		 Home Office
		 
	 Kitchen Dining
		 Storage Organisation
		 Coffee Tea
		 Cookware
		 Dinnerware
		 Kitchen Table Linen
		 Kitchen Storage Accessories
		 Kitchen Utensils
		 Serveware
		 
	 Lighting
	     Ceiling Lights
		 Floor Lamps
		 Lamp Shades
		 Light Bulbs
		 Lighting Fixtures Components
		 Outdoor Lighting
		 Rechargeables Flashlights
		 Specialty Lighting
		 Table Lamps
		 Wall Lights Sconces
		 
	 Laundry Cleaning
	     Brushes, Sponges Wipers
		 Brooms, Mops Sweepers
		 Laundry Baskets Hampers
		 Clothes Line Drying Racks
		 Ironing Boards
		 
	 Tools, DIY Outdoor
	     Outdoor
		 Fixtures Plumbing
		 Electrical
		 Hand Tools
		 Power Tools
		 Security
		 
	 Stationery Craft
	     Gifts Wrapping
		 Packaging Cartons
		 Paper Products
		 School Office Equipment
		 Writing Correction
		 Art Supplies
		 Craft Supplies
		 Sewing
		 Religious Items
		 
	 Media, Music Books
	     eBooks
		 Musical Instruments
		 Books
		 
Women's Fashion
     
	 Traditional Clothing
	     Saree
		 Shalwar Kameez
		 Unstitched Fabric
		 Wedding Wear
		 Kurtis
		 
	 Clothing
	     Women's Dresses
		 Tops
		 Pants
		 Shorts
		 Skirts
		 Sweaters Cardigans
		 Jackets Coats
		 Girl's Fashion
		 
	 Women's Bags
	     Cross Body Shoulder Bags
		 Clutches
		 Top-Handle Bags
		 
	 Shoes
	     Flat Sandals
		 Heels
		 Flat Shoes
		 Wedges
		 Flip Flops
		 
	 Accessories
	     Jewelleries
		 Belts
		 Hair Accessories
		 Scarves
		 Umbrellas
		 
	 Lingerie, Sleep Lounge
	     Bras
		 Panties
		 Lingerie Sets
		 Sleep Loungewear
		 Shapewear
		 
	 Travel Luggage
	     Laptop Cases
		 Suitcases
		 Travel Accessories
		 
Men's Fashion
     
	 T-Shirts
	 
	 Shirts
	 
	 Panjabi Fatua
	 
	 Polo Shirts
	 
	 Jeans
	 
	 Pant
	     Chinos
		 Cargo
		 Joggers Sweatpants
		 Shorts Bermudas
		 
	 Men's Bags
	     Backpack
		 Business Bags
		 Messenger Bags
		 Crossbody Bags
		 
	 Shoes
	     Sneakers
		 Sandals
		 Formal Shoes
		 Boots
		 Flip Flops
		 Slip-Ons Loafers
		 House Slippers
		 Boy's Shoes
		 
	 Accessories
	     Belt
		 Wallet
		 Hats Caps
		 Ties Bow Ties
		 Gloves
		 Umbrellas
		 
	 Clothing
	     Suits
		 Underwear
		 Boy's Clothing
		 Jackets Coats
		 Hoodies Sweatshirts
		 Sweaters
		 
Watches Accessories
     
	 Men's Watch
	     Casual
		 Business
		 Fashion
		 Sport
		 
	 Women's Watch
	     Casual
		 Business
		 Fashion
		 
	 Women's Jewelleries
	     Rings
		 Necklaces
		 Pendants
		 Earrings
		 Jewellery Sets
		 Bracelets
		 
	 Men's Jewelleries
	     Rings
		 Necklaces Pendants
		 Bracelets
		 
	 Men's Belt
	 
	 Men's Wallet
	 
	 Sunglasses
	     Men Sunglasses
		 Women Sunglasses
		 Kids Sunglasses
		 
	 Eyeglasses
	     Men Eyeglasses
		 Women Eyeglasses
		 
	 Kid's Watch
	 
Sports Outdoor
     
	 Treadmills
	 
	 Fitness Accessories
	 
	 Dumbbells
	 
	 Cycling  
         Bicycle
		 Bicycle Accessories
		 
	 Boxing,Martial Arts & MMA
	     Boxing Gloves
		 Boxing Protective gear
		 Martial Art Equipment
		 Punching Bags & Accessories
		 
     Men Shoes & Clothing
	     Clothing
		 Shoes
		 Accessories
		 Bags
		 
	Outdoor Recreation	 
	     Golf
		 Fishing
		 Skateboards
		 Water Sports
		 
    Exercise & Fitness
	     Exercise Bikes
		 Elliptical Trainers
		 Strength Training Equipment
		 
	Racket Sports
	     Badminton
		 Squash
		 
	Team Sports
	     Football
		 Cricket
		 Basketball
		 Volleyball
		 
    Camping & Hiking
	     Tents
		 Sleeping Bags
		 Cooking Essentials
		 Hiking Backpacks
		 
	Fanshop
	
	Automobile
	    Sedans
		SUVs
		Trucks
		
	Auto Oils & Fluids
	    Additives
		Transmission Fluids
		
    Interior Accessories
        Seat Covers & Accessories	
		Floor Mats & Cargo Liners
		Air Fresheners
		
	Exterior Accessories
        Covers	
		
	Exterior Vehicle Care
		Car Polishes &amp; Waxes
		
	Interior Vehicle Care
		Vacuums
		
	Car Electronics Accessories
	
	Car Audio
		Speakers
	
    Motorcycle	
		Scooters
		Standard Bikes
		
	Moto Parts & Accessories
		Drivetrain & Transmission
		Oils & Fluids
		Tools & Maintenance
		
	Motorcycle Riding Gear
		Helmet
		Gloves
		Eyewear

     	 
Automotive Motorbike */

    \Baazar::insertRecords($data);
   }

  }
