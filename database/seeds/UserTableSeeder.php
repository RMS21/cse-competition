<?php

use Illuminate\Database\Seeder;
use App\User;



class UserTableSeeder extends Seeder
 {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new User();
       $user->team_id = 2;
       $user->first_name = 'Rasoul';
       $user->last_name = 'MohamadSalehi';
       $user->student_number = '9332008';
       $user->phone_number = '09372508686';
       $user->email = 'rasoul_salehi@ymail.com';
       $user->entery_year = 93;
       $user->univercity = 'shiraz';
       $user->save();

       $user1 = new User();
       $user1->team_id = 2;
       $user1->first_name = 'Rasoul';
       $user1->last_name = 'MohamadSalehi';
       $user1->student_number = '9332008';
       $user1->phone_number = '09372508686';
       $user1->email = 'rasoul_salehi@ymail.com';
       $user1->entery_year = 93;
       $user1->univercity = 'tehran';
       $user1->save();

       $user2 = new User();
       $user2->team_id = 2;
       $user2->first_name = 'Rasoul';
       $user2->last_name = 'MohamadSalehi';
       $user2->student_number = '9332008';
       $user2->phone_number = '09372508686';
       $user2->email = 'rasoul_salehi@ymail.com';
       $user2->entery_year = 93;
       $user2->univercity = 'amirkabir';
       $user2->save();

       $user3 = new User();
       $user3->team_id = 2;
       $user3->first_name = 'Rasoul';
       $user3->last_name = 'MohamadSalehi';
       $user3->student_number = '9332008';
       $user3->phone_number = '09372508686';
       $user3->email = 'rasoul_salehi@ymail.com';
       $user3->entery_year = 93;
       $user3->univercity = 'ahvaz';
       $user3->save();

       $user4 = new User();
       $user4->team_id = 3;
       $user4->first_name = 'Rasoul';
       $user4->last_name = 'MohamadSalehi';
       $user4->student_number = '9332008';
       $user4->phone_number = '09372508686';
       $user4->email = 'rasoul_salehi@ymail.com';
       $user4->entery_year = 93;
       $user4->univercity = 'sharif';
       $user4->save();

       $user5 = new User();
       $user5->team_id = 3;
       $user5->first_name = 'Rasoul';
       $user5->last_name = 'MohamadSalehi';
       $user5->student_number = '9332008';
       $user5->phone_number = '09372508686';
       $user5->email = 'rasoul_salehi@ymail.com';
       $user5->entery_year = 93;
       $user5->univercity = 'shiraz';
       $user5->save();

       $user6 = new User();
       $user6->team_id = 4;
       $user6->first_name = 'Rasoul';
       $user6->last_name = 'MohamadSalehi';
       $user6->student_number = '9332008';
       $user6->phone_number = '09372508686';
       $user6->email = 'rasoul_salehi@ymail.com';
       $user6->entery_year = 93;
       $user6->univercity = 'elmo san at';
       $user6->save();

       $user7 = new User();
       $user7->team_id = 4;
       $user7->first_name = 'Rasoul';
       $user7->last_name = 'MohamadSalehi';
       $user7->student_number = '9332008';
       $user7->phone_number = '09372508686';
       $user7->email = 'rasoul_salehi@ymail.com';
       $user7->entery_year = 93;
       $user7->univercity = "azad shiraz";
       $user7->save();
    }
}
