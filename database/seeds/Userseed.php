<?php

use Illuminate\Database\Seeder;
Use App\Role;
Use App\User;

class Userseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name="Admin";
        $adminRole->save();

        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name="Member";
        $memberRole->save();

        $admin = new User();
        $admin->name = 'admin ';
        $admin->email ='admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        // $admin->is_verified = 1;
        $admin->save();
        $admin->attachRole($adminRole);

        $member = new User();
        $member->name = "Sample Member";
        $member->email ='member@gmail.com';
        $member->password = bcrypt('rahasia');
        // $member->is_verified = 1;
        $member->save();
        $member->attachRole($memberRole);
        
    }
}
