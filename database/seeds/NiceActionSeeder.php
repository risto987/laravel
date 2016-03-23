<?php
use Illuminate\Database\Seeder;
use App\NiceAction;

class NiceActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nice_action = new NiceAction();
        $nice_action->name = 'Greet';
        $nice_action->niceness = 1;
        $nice_action->save();

        $nice_action = new NiceAction();
        $nice_action->name = 'Hug';
        $nice_action->niceness = 5;
        $nice_action->save();

       $nice_action = new NiceAction();
        $nice_action->name = 'Kiss';
        $nice_action->niceness = 10;
        $nice_action->save();

    }
}
