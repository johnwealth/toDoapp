<?php

class UserTableSeeder extends Seeder{


    public function run(){


        User::create([

            'username' =>'nelson',
            'profile'=>'nelsonabieno',
            'password'=>'1234'



        ]);

    }



}