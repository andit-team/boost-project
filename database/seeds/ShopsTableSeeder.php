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
                      'featured'             => 'wtgrete',
                      'email'                => 'aktrades@gmail.com',
                      'web'                  => 'Aktrade.com',
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
                     'featured'             => 'This is good',
                     'email'                => 'jk@gmail.com',
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
                    'featured'             => 'vfxgnxjg',
                    'email'                => 'pk@gmail.com',
                    'web'                  => 'pk.com',
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
                  'featured'             => 'vfxgnxjg',
                  'email'                => 'fashion@gmail.com',
                  'web'                  => '',
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
