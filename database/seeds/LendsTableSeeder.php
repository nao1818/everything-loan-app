<?php

use Illuminate\Database\Seeder;

class LendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
    	DB::table('lends')->truncate();
    	DB::table('lends')->insert([
    		[
    			'title' => 'ハリーポッターと賢者の石',
    			'created_at' => '2015-04-01 23:00:00',
    			'updated_at' => '2015-04-02 15:00:00',
    		],
    		[
    			'title' => '短眠になろう',
    			'created_at' => '2015-05-02 20:00:00',
    			'updated_at' => '2015-04-02 15:00:00',
    		],

    ]);
    }
    


    public function run()
    {
        //this->call(LendsTableSeeder::class);
    }
}
