<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            ['id'=>1,'name'=>'admin','type'=>'admin','mobile'=>'0651534293','email'=>'admin@admin.com','password'=>''
            ],
        ];

        foreach ($adminRecords as $key => $record) {
            \App\Admin::create($record);
        }
    }
}
