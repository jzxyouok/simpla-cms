<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();
//        $this->call('UserTableSeeder');
//        $this->call('RolesTableSeeder');
//        $this->call('MenuTableSeeder');
//        $this->call('NodeTableSeeder');
//        $this->call('Node_fieldTableSeeder');
        $this->call('BlockTableSeeder');
        $this->command->info('Insert Success!');
    }

}
