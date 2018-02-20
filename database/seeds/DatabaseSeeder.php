<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(add_kinship::class);
        $this->call(add_procedure_types::class);
        $this->call(ProcedureTablesSeeder::class);
        $this->call(QuotaSeeder::class);
        $this->call(WorkFlowAndStates::class);
        $this->call(SequenceSeeder::class);
        $this->call(ShortenedModalitiesSeeder::class);
        $this->command->info('Todo ok finalizado! DAVID y NADIA'); 
    }
}
