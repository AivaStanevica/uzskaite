<?php

use Illuminate\Database\Seeder;
use App\Task;
class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->delete();
        Task::create([
            'unit' => 'KK',
            'task' => 'Ielikt jaunu postu',
            'status' => 'Procesā',
            'date' => '2018-01-02',
            'mainOrg' =>'Jānis',
            'helper'=>'Edgars',
        ]);
        Task::create([
            'unit' => 'Visi',
            'task' => 'Ziemassvētku balle',
            'status' => 'Gatavs',
            'date' => '2017-12-12',
            'mainOrg' =>'Elīza',
            'helper'=>'Edgars, Karīna, Marija',
        ]);
        Task::create([
            'unit' => 'Visi',
            'task' => 'Iztīrīt telpas',
            'status' => 'Procesā',
            'date' => '2018-04-02',
            'mainOrg' =>'Edgars',
            'helper'=>'',
        ]);
        Task::create([
            'unit' => 'AK',
            'task' => 'Uzrakstīt iesniegumu',
            'status' => 'Atcelts',
            'date' => '2018-01-12',
            'mainOrg' =>'Edgars',
            'helper'=>'Karīna',
        ]);
    }
}
