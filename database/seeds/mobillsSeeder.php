<?php

use Illuminate\Database\Seeder;
Use App\pelanggansS;
Use App\mobill;

class mobillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
           	$pelanggan1 = pelanggan::create(['name'=>'edoh']);
            $pelanggan2 = pelanggan::create(['name'=>'encun']);
            $pelanggan3 = pelanggan::create(['name'=>'iim']);

            $mobill1 = mobill::create(['jenis_mobil'=>'honda',
                'pelanggan_id'=>$pelanggan1->id ]);
           $mobill2 = mobill::create(['jenis_mobil'=>'toyota',
                'pelanggan_id'=>$pelanggan2->id ]);
           $mobill3 = mobill::create(['jenis_mobil'=>'honda',
                'pelanggan_id'=>$pelanggan3->id ]);

        //     sample peminjaman buku
        //     $member = User::where('email','member@gmail.com')->first();
        // BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book1->id,'is_returned' => 0]);
        // BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book2->id,'is_returned' => 0]);
        // BorrowLog::create(['user_id' => $member->id, 'book_id'=>$book3->id,'is_returned' => 1]);
    }
}
