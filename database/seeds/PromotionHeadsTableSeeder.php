<?php

use Illuminate\Database\Seeder;

class PromotionHeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
          [
            'promotion_name'       => 'Flash Sales',
            'description'          => 'A flash sale is one that offers some sort of savings but only for a short time.',
            'user_id'              => 1,
            'created_at'           => now(),
            'updated_at'           => now()
         ],

         [
           'promotion_name'       => 'Buy One, Get...',
           'description'          => ' Especially enticing is buy one, get one free, as people have a hard time saying no to that word.',
           'user_id'              => 1,
           'created_at'           => now(),
           'updated_at'           => now()
        ],

        [
          'promotion_name'       => 'Coupons Or Discounts',
          'description'          => 'Coupons and discounts are great because they get people buying, and you still can realize some profit.',
          'user_id'              => 1,
          'created_at'           => now(),
          'updated_at'           => now()
       ],

       [
         'promotion_name'       => 'Giveaways Or Free Samples',
         'description'          => ' In essence, this is you giving gifts away for your birthday. ',
         'user_id'              => 1,
         'created_at'           => now(),
         'updated_at'           => now()
      ],
      [
        'promotion_name'       => 'Recurring Sales',
        'description'          => 'Brands like Nordstrom have carved out a niche by     offering sales only twice a year.',
        'user_id'              => 1,
        'created_at'           => now(),
        'updated_at'           => now()
     ],
     [
       'promotion_name'       => 'Tripwires',
       'description'          => 'Traditionally, a tripwire costs something. In this case, it costs time. ',
       'user_id'              => 1,
       'created_at'           => now(),
       'updated_at'           => now()
    ],
    [
      'promotion_name'       => 'Limited Time Offer',
      'description'          => 'Summer is traditionally a slow time for retailers. ',
      'user_id'              => 1,
      'created_at'           => now(),
      'updated_at'           => now()
   ],
    ];

    DB::table('promotion_heads')->insert($data);
   }
    }
