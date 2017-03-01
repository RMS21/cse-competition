<?php

use Illuminate\Database\Seeder;
use App\Problem;

class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //problems with level A for stages
      $problem = new problem();
      $problem->title = 'title1';
      $problem->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem->level = 'A';
      $problem->stage = 1;
      $problem->score = 10;
      $problem->save();

      $problem33 = new problem();
      $problem33->title = 'title33';
      $problem33->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem33->level = 'A';
      $problem33->stage = 1;
      $problem33->score = 10;
      $problem33->save();

      $problem->save();
      $problem1 = new Problem();
      $problem1->title = 'title2';
      $problem1->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem1->level = 'A';
      $problem1->stage = 2;
      $problem1->score = 10;
      $problem1->save();

      $problem2 = new Problem();
      $problem2->title = 'title3';
      $problem2->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem2->level = 'A';
      $problem2->stage = 3;
      $problem2->score = 10;
      $problem2->save();

      $problem3 = new Problem();
      $problem3->title = 'title4';
      $problem3->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem3->level = 'A';
      $problem3->stage = 4;
      $problem3->score = 10;
      $problem3->save();


      //problems with level B for stages
      $problem4 = new Problem();
      $problem4->title = 'title5';
      $problem4->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem4->level = 'B';
      $problem4->stage = 1;
      $problem4->score = 10;
      $problem4->save();

      $problem5 = new Problem();
      $problem5->title = 'title6';
      $problem5->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem5->level = 'B';
      $problem5->stage = 2;
      $problem5->score = 10;
      $problem5->save();

      $problem19 = new Problem();
      $problem19->title = 'title7';
      $problem19->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem19->level = 'B';
      $problem19->stage = 3;
      $problem19->score = 10;
      $problem19->save();

      $problem6 = new Problem();
      $problem6->title = 'title8';
      $problem6->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem6->level = 'B';
      $problem6->stage = 4;
      $problem6->score = 10;
      $problem6->save();


      //problems with level C for stages
      $problem7 = new Problem();
      $problem7->title = 'title9';
      $problem7->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem7->level = 'C';
      $problem7->stage = 1;
      $problem7->score = 10;
      $problem7->save();

      $problem8 = new Problem();
      $problem8->title = 'title10';
      $problem8->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem8->level = 'C';
      $problem8->stage = 2;
      $problem8->score = 10;
      $problem8->save();

      $problem9 = new Problem();
      $problem9->title = 'title11';
      $problem9->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem9->level = 'C';
      $problem9->stage = 3;
      $problem9->score = 10;
      $problem9->save();

      $problem10 = new Problem();
      $problem10->title = 'title12';
      $problem10->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem10->level = 'C';
      $problem10->stage = 4;
      $problem10->score = 10;
      $problem10->save();


      //problems with level D for stages
      $problem11 = new Problem();
      $problem11->title = 'title13';
      $problem11->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem11->level = 'D';
      $problem11->stage = 1;
      $problem11->score = 10;
      $problem11->save();

      $problem12 = new Problem();
      $problem12->title = 'title14';
      $problem12->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem12->level = 'D';
      $problem12->stage = 2;
      $problem12->score = 10;
      $problem12->save();

      $problem13 = new Problem();
      $problem13->title = 'title15';
      $problem13->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem13->level = 'D';
      $problem13->stage = 3;
      $problem13->score = 10;
      $problem13->save();

      $problem14 = new Problem();
      $problem14->title = 'title16';
      $problem14->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem14->level = 'D';
      $problem14->stage = 4;
      $problem14->score = 10;
      $problem14->save();


      //problems with level E for stages
      $problem15 = new Problem();
      $problem15->title = 'title17';
      $problem15->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem15->level = 'E';
      $problem15->stage = 1;
      $problem15->score = 10;
      $problem15->save();

      $problem16 = new Problem();
      $problem16->title = 'title18';
      $problem16->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem16->level = 'E';
      $problem16->stage = 2;
      $problem16->score = 10;
      $problem16->save();

      $problem17 = new Problem();
      $problem17->title = 'title19';
      $problem17->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem17->level = 'E';
      $problem17->stage = 3;
      $problem17->score = 10;
      $problem17->save();

      $problem18 = new Problem();
      $problem18->title = 'title20';
      $problem18->description = 'asdlkfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffj';
      $problem18->level = 'E';
      $problem18->stage = 4;
      $problem18->score = 10;
      $problem18->save();
    }
}
