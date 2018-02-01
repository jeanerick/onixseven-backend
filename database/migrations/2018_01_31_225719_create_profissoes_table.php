<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfissoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profissoes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('prof_nome');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::connection()->getPdo()->exec('
        SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
        SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
        SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE=\'TRADITIONAL,ALLOW_INVALID_DATES\';
        
        ALTER TABLE `pessoas` 
        ADD COLUMN `prof_id` INT(10),
        ADD INDEX `prof_prof_id_foreign` (`prof_id` ASC);
        
        ALTER TABLE `pessoas` 
        ADD CONSTRAINT `prof_prof_id_foreign`
          FOREIGN KEY (`prof_id`)
          REFERENCES `profissoes` (`id`)
          ON DELETE NO ACTION
          ON UPDATE NO ACTION;
        
        SET SQL_MODE=@OLD_SQL_MODE;
        SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
        SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
    ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profissoes');
    }
}
