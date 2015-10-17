<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
    
        User::create(array(
            'name' => 'Eric Tsang',
            'phone' => '12345678',
	    'nationality' => 'Canada'
        ));
    
        User::create(array(
            'name' => 'Bob Bunger',
            'phone' => '23456778',
	    'nationality' => 'USA'
        ));
    
    }    

}
