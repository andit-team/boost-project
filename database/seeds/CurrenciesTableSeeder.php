<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
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
          'name'           => 'AED',
          'code'           => '784',
          'symbol'         => 'د.إ',
          'user_id'        => '2',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
          'name'           => 'BDT',
          'code'           => '050',
          'symbol'         => '৳	',
          'user_id'        => '2',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
          'name'           => 'ERN',
          'code'           => '232',
          'symbol'         => 'Nfk',
          'user_id'        => '2',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
          'name'           => 'EUR',
          'code'           => '978',
          'symbol'         => '€',
          'user_id'        => '2',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
          'name'           => 'DOP',
          'code'           => '214',
          'symbol'         => '$',
          'user_id'        => '2',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
          'name'           => 'EGP',
          'code'           => '818',
          'symbol'         => '£',
          'user_id'        => '2',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
          'name'           => 'COP',
          'code'           => '170',
          'symbol'         => '$',
          'user_id'        => '2',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
        'name'           => 'CDF',
        'code'           => '976',
        'symbol'         => '₣',
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'BRL',
        'code'           => '986',
        'symbol'         => 'R$',
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
    ];
    DB::table('currencies')->insert($data);
    }
}
