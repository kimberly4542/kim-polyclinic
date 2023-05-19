<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ModifyCityadminPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE cityadmin_patients DROP COLUMN email');
        DB::statement('ALTER TABLE cityadmin_patients MODIFY COLUMN suffix VARCHAR(255) DEFAULT NULL');
        DB::statement('ALTER TABLE cityadmin_patients MODIFY COLUMN civil_status VARCHAR(255) DEFAULT NULL');
        DB::statement('ALTER TABLE cityadmin_patients MODIFY COLUMN height VARCHAR(255) DEFAULT NULL');
        DB::statement('ALTER TABLE cityadmin_patients MODIFY COLUMN weight VARCHAR(255) DEFAULT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE cityadmin_patients ADD COLUMN email VARCHAR(255) UNIQUE');
        DB::statement('ALTER TABLE cityadmin_patients MODIFY COLUMN suffix VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE cityadmin_patients MODIFY COLUMN civil_status VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE cityadmin_patients MODIFY COLUMN height VARCHAR(255) NOT NULL');
        DB::statement('ALTER TABLE cityadmin_patients MODIFY COLUMN weight VARCHAR(255) NOT NULL');
    }
}
