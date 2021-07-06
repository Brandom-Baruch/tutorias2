<?php

namespace App\Http\Controllers\Docente\tutorias;
use App\Http\Controllers\Alumno\Entrevista_fresca;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alumno;
use App\Padre_familia;
use App\Entrevista_Fresca_Alumno;
use App\Entrevista_Fresca_Padre;
use App\Cuestionario_Anexos;
use App\Atencion_Individualizada;
use App\Perfil_Academico_Alumno;
use App\Test;
use Carbon\Carbon;

class TutoriasController extends Controller
{
	public function encuestas_index()
	{        
		//Relacion entre docente/materia
		$docente_materia = auth()->user()->materias()->where('name','like','%Tutorias%')->first(); 
		//R entre materia/grupo
		$materia_grupo = $docente_materia->grupos()->where('materia_id',$docente_materia->id)->first(); 
		//dd($docente_materia);
		if($materia_grupo)
		{
			$grupo_alumno = $materia_grupo->alumnos()->where('grupo_id',$materia_grupo->id)->get(); //Grupo/alumno          
			return view('docente.tutorias.docente_tutor')->with(compact('materia_grupo','grupo_alumno'));
		}   
		else
		{
			return view('docente.tutorias.docente_tutor')->with(compact('materia_grupo'));
		}

	}

	public function entrevista_fresca_alumno($alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
		$entrevista = Entrevista_Fresca_Alumno::where('alumno_id',$alumno->nia)->first(); 
		//dd($entrevista);        
		$min_total = $this->minTotal($entrevista->created_at,$entrevista->updated_at);                      
		return view('docente.tutorias.resultados.alumno.entrevista_frescaR')->with(compact('entrevista','alumno','min_total'));
	}

	public function entrevista_padre($alumno_id)
	{                    
		$entrevista = Entrevista_Fresca_Padre::where('alumno_id',$alumno_id)->first();                        
		$min_total = $this->minTotal($entrevista->created_at,$entrevista->updated_at); 
		return view('docente.tutorias.resultados.padre.resultados_padre')->with(compact('entrevista','min_total'));
	}

	public function anexos_alumno($alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
		$cuestionario = Cuestionario_Anexos::where('alumno_id',$alumno->nia)->first();                
		$min_total = $this->minTotal($cuestionario->created_at, $cuestionario->updated_at); //Llamamos al metodo        
		return view('docente.tutorias.resultados.alumno.cuestionario_anexosR')
					->with(compact('cuestionario','alumno','min_total'));
	}

	public function estilo_aprendizaje_alumno($alumno_id)
	{   
		$alumno = Alumno::find($alumno_id);
		$test = Test::where('alumno_id',$alumno->nia)->first();        
		$min_total = $this->minTotal($test->created_at,$test->updated_at);
		return view('docente.tutorias.resultados.alumno.estilo_aprendizajeR')->with(compact('test','alumno','min_total'));
	}

	public function atencion_individual_alumno($alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
		$test = Atencion_Individualizada::where('alumno_id',$alumno->nia)->first();      
		$min_total = $this->minTotal($test->created_at,$test->updated_at);
		return view('docente.tutorias.resultados.alumno.atencion_individualR')->with(compact('test','alumno','min_total'));
	}

	public function perfil_academico_alumno($alumno_id)
	{
		$alumno = Alumno::find($alumno_id);
		$cuestionario = Perfil_Academico_Alumno::where('alumno_id',$alumno->nia)->first();        
		$min_total = $this->minTotal($cuestionario->created_at,$cuestionario->updated_at);
		return view('docente.tutorias.resultados.alumno.perfil_academicoR')->with(compact('cuestionario','alumno','min_total'));
	}

	public function minTotal($inicio, $finalizo){
		$hora_inicial = Carbon::parse($inicio);
		$hora_final = Carbon::parse($finalizo);
		$seg_total = $hora_inicial->diffInSeconds($hora_final);        
		if ($seg_total > 60) {
			$min_total = $hora_inicial->diffInMinutes($hora_final);
			if ($min_total > 60) {
				$hora_total = $hora_inicial->diffInHours($hora_final);
				return $hora_total . " Hora(s)";
			}else{
				return $min_total. " Minuto(s)";    
			}
		}else{
			return $seg_total." Segundo(s)";
		}        
	}
}
