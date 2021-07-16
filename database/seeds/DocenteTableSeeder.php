<?php

use Illuminate\Database\Seeder;
use App\PuestoAsignado;
use App\Puesto;
use App\Docente;
use App\Alumno;


class DocenteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

         Docente::create([                        
            'name' => 'Admin',
            'apellidoP' => 'admin',
            'apellidoM' => 'admin',
            'edad' => 22,
            'email' => 'admin@live.com',
            'password' => bcrypt('123123'),            
            'telefono_fijo' => ' ' ,
            'telefono_cel' => ' ' ,            
            'remember_token' => str_random(100),
        ]);  
        
        

        Puesto::create([            
            'puesto' => 'Director',
            'descripcion' => 'Descripcion del director',
        ]);  

        Puesto::create([            
            'puesto' => 'Tutor Escolar',
            'descripcion' => 'Descripcion del tutor escolar',
        ]); 

        PuestoAsignado::create([

            'docente_id' => '1',
            'puesto_id' => '1',
        ]); 

        PuestoAsignado::create([

            'docente_id' => '1',
            'puesto_id' => '2',
        ]); 
    
    	$docentes = factory(Docente::class, 5)->create();
        //$puesto = factory(Puesto::class,4)->create();
    
    }
}
