<?php

use Illuminate\Database\Seeder;

class RelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('relation')->insert([
            'en_relation' => 'Please fill relation AdminSide Application...',
            'ar_relation' => '...يرجى ملء معلومات التطبيق',
            'updated_by' => 'master.admin',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
    
}
