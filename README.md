# shop

Home:

<a href="https://ibb.co/q9Spwz5"><img src="https://i.ibb.co/HYSqQ0d/screenindex.png" alt="screenindex" border="0"></a>

Admin session: (acces commerce/public/admin/dashboard) You can't access without being logged.

<a href="https://ibb.co/bX6yfPW"><img src="https://i.ibb.co/89mRh0K/screenadminsession.png" alt="screenadminsession" border="0"></a>

Admin login: (acces commerce/public/admin) email:max@admin.com or mat@admin.com password:8e14e90

<a href="https://ibb.co/Rjtm73t"><img src="https://i.ibb.co/J384Cv8/screenadminlogin.png" alt="screenadminlogin" border="0"></a>

you can change email and password in AdminTableSeeder.php Laravel includes a method of seeding your database.
```php
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
```
and if you want to change the password you need to hash it
```php
echo Hash::make('yourpassword')
```
