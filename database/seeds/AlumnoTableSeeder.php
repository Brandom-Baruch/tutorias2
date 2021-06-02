<?php

use Illuminate\Database\Seeder;
use App\Alumno;
use App\Grupo;

class AlumnoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
       Alumno::create([  
            'nia' => 16240011,          
            'name' => 'Brandom Baruch',
            'apellidoP' => 'González',
            'apellidoM' => 'Cervantes',
            'edad' => 22,
            'email' => 'baruch@live.com',
            'password' => bcrypt('123123'),            
            'phone' => '248-177-0762' ,
            'genero' => 'H',
            'fechaN' => '1998-08-28',
            'grupo_id' => 0,
            'remember_token' => str_random(100),
        ]);   

      $grupos = factory(Grupo::class, 5)->create();

        $grupos->each(function ($grupo)
        {
        	$alumnos = factory(Alumno::class,10)->make();
        	$grupo->alumnos()->saveMany($alumnos);

            $materias = factory(App\Materia::class,10)->make();
            $grupo->materias()->saveMany($materias);
        });
    

	  /*	factory(Alumno::class, 10)->create()->each(function ($u) {
	        $u->grupo()->saveMany(factory(Grupo::class,5)->make());
	    });*/
    }
}
