<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Roles;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        DB::table('admin_roles')->truncate();
        // takeone=first 
        $adminRoles = Roles::where('name','admin')->first();
        $authorRoles = Roles::where('name','author')->first();
        $userRoles = Roles::where('name','user')->first();

        $admin = Admin::create([
            'admin_name'=>'bemadmin',
            'admin_email'=>'bemadmin@gmail.com', 
            'admin_phone'=>'0987634178',
            'admin_password'=> md5('123')
        ]);
        $author = Admin::create([
            'admin_name'=>'bemauthor',
            'admin_email'=>'bemauthor@gmail.com',
            'admin_phone'=>'0987634178',
            'admin_password'=> md5('123')
        ]);
        $user = Admin::create([
            'admin_name'=>'bemuser',
            'admin_email'=>'bemuser@gmail.com',
            'admin_phone'=>'0987634178',
            'admin_password'=> md5('123') 
        ]);
        $admin->roles()->attach($adminRoles);
        $author->roles()->attach($authorRoles);
        $user->roles()->attach($userRoles);
        //attach laf laays 2 class admin và roles, sau đó thi thêm các CDSL vào thì tự thêm vào Admin 
        factory(App\Admin::class,20)->create();
    }
   
}
