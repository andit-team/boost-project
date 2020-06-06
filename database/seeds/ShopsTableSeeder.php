<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
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
                      'name'                 => 'Ak Trades',
                      'slug'                 => 'C111',
                      'phone'                => '09857648739',
                      'google_location'      => 'Mirpur,dhaka',                    
                      'email'                => 'aktrades@gmail.com',
                      'web'                  => 'Aktrade.com',
                      'facebook'             => 'https://www.facebook.com/abul',
                      'youtube'              => 'https://www.youtube.com/funn',
                      'twitter'              => 'https://www.twitter.com/abul',
                      'instagram'            => 'https://www.instragram.com/abul',
                      'description'          => 'This is a departmental store',
                      'seller_id'            => '1',
                      'user_id'              => '1',
                      'created_at'           => now(),
                      'updated_at'           => now()
                  ],
                  [
                     'name'                 => 'Jk Store',
                     'slug'                 => 'C222',
                     'phone'                => '1198374629',
                     'google_location'      => 'dhanmondi,dhaka',                  
                     'email'                => 'jk@gmail.com',
                     'facebook'             => 'https://www.facebook.com/jk',
                     'youtube'              => 'https://www.youtube.com/funny',
                     'twitter'              => 'https://www.twitter.com/jk',
                     'instagram'            => 'https://www.instragram.com/jk',
                     'web'                  => 'jk.com',
                     'description'          => 'hstjsytjy',
                     'seller_id'            => '2',
                     'user_id'              => '1',
                     'created_at'           => now(),
                     'updated_at'           => now()
                 ],
                 [
                    'name'                 => 'Pk Trade',
                    'slug'                 => 'C666',
                    'phone'                => '069856524 ',
                    'google_location'      => 'malibag,dhaka',                   
                    'email'                => 'pk@gmail.com',
                    'web'                  => 'pk.com',
                    'facebook'             => 'https://www.facebook.com/pk',
                    'youtube'              => 'https://www.youtube.com/funny',
                    'twitter'              => 'https://www.twitter.com/pk',
                    'instagram'            => 'https://www.instragram.com/pk',
                    'description'          => 'dfdghbhsfh',
                    'seller_id'            => '3',
                    'user_id'              => '1',
                    'created_at'           => now(),
                    'updated_at'           => now()
                ],
                [
                  'name'                 => 'Fashion House',
                  'slug'                 => 'rofiq',
                  'phone'                => '01719100045 ',
                  'google_location'      => 'malibag,dhaka',               
                  'email'                => 'fashion@gmail.com',
                  'web'                  => 'fashion.com',
                  'facebook'             => 'https://www.facebook.com/fashion',
                  'youtube'              => 'https://www.youtube.com/funny',
                  'twitter'              => 'https://www.twitter.com/fashion',
                  'instagram'            => 'https://www.instragram.com/fashion',
                  'description'          => 'dfdghbhsfh',
                  'seller_id'            => '5',
                  'user_id'              => '3',
                  'created_at'           => now(),
                  'updated_at'           => now()
              ],
      ];

      DB::table('shops')->insert($data);

      }
    }
