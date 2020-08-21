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
            ['id'=>1,'name'=>'max','type'=>'admin','mobile'=>'0651534293','email'=>'max@admin.com','password'=>'$2y$10$rbi1se0XTJhM38yqJz3yW.XJok4lDbrx0Vt.K6VSy41jpdOGDQA72'
            ],
            ['id'=>2,'name'=>'mat','type'=>'admin','mobile'=>'none','email'=>'mat@admin.com','password'=>'$2y$10$rbi1se0XTJhM38yqJz3yW.XJok4lDbrx0Vt.K6VSy41jpdOGDQA72'
            ],
        ];

        foreach ($adminRecords as $key => $record) {
            \App\Admin::create($record);
        }
    }
}
