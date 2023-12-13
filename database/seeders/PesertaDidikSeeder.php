<?php

namespace Database\Seeders;

use App\Models\Poin;
use App\Models\User;
use App\Models\PesertaDidik;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PesertaDidikSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    PesertaDidik::create([
      'user_id' => User::create([
        'nama' => 'Reza Sune',
        'username' => 'pesertadidik',
        'email' => 'pesertadidik@gmail.com',
        'password' => bcrypt('12345678')
      ])->id,
      'pangkalan_id' => 1,
      'gender' => 'Laki-laki',
      'no_hp' => '089999999999',
      'alamat' => 'Jalan Jeruk, Kecamatan Dungingi, Kelurahan Huangobotu',
      'tanggal_lahir' => '2003-12-08',
      // 'foto' => 'https://api.multiavatar.com/shaphire.svg',
      'agama_id' => 6
    ]);

    PesertaDidik::factory(19)->create();
  }
}
