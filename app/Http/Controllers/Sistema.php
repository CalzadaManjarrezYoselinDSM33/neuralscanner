<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Paciente;
use App\Models\Imagenes;

class Sistema extends Controller
{
    public function index()
      {
          //dd($id_tipos);
         
          // dd($tipo);
          return view("index");
      }
    public function login (){
        return view ('login');
    }
    public function valida (Request $request){
        $email=$request -> input('email');
        $pass=$request->input('password');
        $consulta=Doctor::where('email','=',$email)
        ->where('password','=',$pass)
        ->get();
        if (count($consulta)==0 ){
            return view ('login');
        }
        else{
            $request->session()->put('session_id',$consulta[0]->id_doctor);
            $request->session()->put('session_name',$consulta[0]->nombre);
    
            $session_id=$request->session()->get ('session_id');
            $session_name=$request->session()->get ('session_name');
    
            if($session_id == 1){return redirect()-> route('lista_doctor');}
            else { return redirect()->route('lista_doctor');}
        }
    }
    public function logout(Request $request){
        
        $request->session()->forget ('session_id');
        $request->session()->forget ('session_name');
        return view ('login');
    }
    
    public function inicio()
    {
        $doctor_a = Doctor::all();
        $doctor_b = \DB::select('SELECT * FROM doctor');
        return view("lista_doctor")
            ->with(['doctor1'=>$doctor_a])
            ->with(['doctor2'=>$doctor_b]);
    }
   
    // controladoreeeeees de doctor consulta, alta, baja , modificacion
    // --------------------------Consulta usuario---------------------------------
    public function doctor()
    {
        $doctor_a = Doctor::all();
        $doctor_b = \DB::select('SELECT * FROM doctor');
        return view("lista_doctor")
            ->with(['doctor1'=>$doctor_a])
            ->with(['doctor2'=>$doctor_b]);
    }
    
    // -------------------------------Detalle---------------------------------
    
    public function detalledoctor($id_doctor)
    {
        //dd($id_doctor);
        $doctor = Doctor::find($id_doctor);
        // dd($doctor);
        return view("detalledoctor")
            ->with(['detalle'=> $doctor]);
    }
    public function altadoctor()
    {
        $doctor = Doctor::all();
        return view("altadoctor")
        ->with(['nombre' => $doctor]);       
    }

    // public function registrar(Validar $request)
    public function registrardoctor(Request $request)
    // -----------------------valida campos requeridos-------------------------------
    {
        $this->validate($request, [
            
            'nombre' => 'required',
            'ap_pat' => 'required',
            'ap_mat' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        Doctor::create(array(
            'nombre' => $request->input('nombre'),
            'ap_pat' => $request->input('ap_pat'),
            'ap_mat' => $request->input('ap_mat'),
            'telefono' => $request->input('telefono'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ));

        return redirect()->route('lista_doctor');
    }
    // ----------------------------Editar Usuario-------------------------------------
    
    public function editardoctor(Doctor $id_doctor)
    {
        return view("editardoctor", ['doctor' => $id_doctor]);
    }
    public function actualizarDoctor(Request $request, $id)
{
    $doctor = Doctor::findOrFail($id);
    $doctor->update($request->all());
    return redirect()->route('lista_doctor');
}

    public function salvardoctor(Doctor $id_doctor, Request $request)
    {  
    $query = Doctor::find($id_doctor->id_doctor);
    
        $query->nombre =  trim($request->nombre) ;
        $query->ap_pat = trim($request->ap_pat);
        $query->ap_mat =  trim($request->ap_mat);
        $query->telefono = trim($request->telefono);
        $query->email = trim($request->email);
        $query->password = trim($request->password);
    $query-> save() ;
    
        return redirect()->route("editardoctor", ['id_doctor' => $id_doctor->id_doctor]);
    }
// ---------------------------------Borrar Usuarios-------------------------------------
public function borrardoctor(Doctor $id_doctor)
{

    // $id_doctor = doctor::find($id_doctor);
    $id_doctor->delete();
    return redirect()->route("lista_doctor");
}

 // controladoreeeeees de pacientes consulta, alta, baja , modificacion
    // --------------------------Consulta usuario---------------------------------
    public function paciente()
    {
        $paciente_a = Paciente::all();
        $paciente_b = \DB::select('SELECT * FROM paciente');
        return view("lista_paciente")
            ->with(['paciente1'=>$paciente_a])
            ->with(['paciente2'=>$paciente_b]);
    }
    public function altapaciente()
    {
        $paciente = Paciente::all();
        return view("altapaciente")
        ->with(['nombre' => $paciente]);       
    }
    // -------------------------------Detalle---------------------------------
    
    public function detallepaciente($id_paciente)
    {
        //dd($id_paciente);
        $paciente = Paciente::find($id_paciente);
        // dd($paciente);
        return view("detallepaciente")
            ->with(['detalle'=> $paciente]);
    }

    // public function registrar(Validar $request)
    public function registrarpaciente(Request $request)
    // -----------------------valida campos requeridos-------------------------------
    {
        $this->validate($request, [
            
            'nombre' => 'required',
            'ap_paciente' => 'required',
            'am_paciente' => 'required',
            'edad' => 'required'
        ]);

        Paciente::create(array(
            'nombre' => $request->input('nombre'),
            'ap_paciente' => $request->input('ap_paciente'),
            'am_paciente' => $request->input('am_paciente'),
            'edad' => $request->input('edad'),
        ));

        return redirect()->route('lista_paciente');
    }
    // ----------------------------Editar Usuario-------------------------------------
    
    public function editarpaciente(Paciente $id_paciente)
    {
      

             return view("editarpaciente")
                ->with(['paciente' => $id_paciente]);
    }

    public function salvarpaciente(Paciente $id_paciente, Request $request)
    {  
    $query = Paciente::find($id_paciente->id_paciente);
    
        $query->nombre =  trim($request->nombre) ;
        $query->ap_paciente = trim($request->ap_paciente);
        $query->am_paciente =  trim($request->am_paciente);
        $query->edad = trim($request->edad);
    $query-> save() ;
    
        return redirect()->route("editarpaciente", ['id_paciente' => $id_paciente->id_paciente]);
    }
// ---------------------------------Borrar Usuarios-------------------------------------
public function borrarpaciente(Paciente $id_paciente)
{

    // $id_paciente = paciente::find($id_paciente);
    $id_paciente->delete();
    return redirect()->route("lista_paciente");
}
 // controladoreeeeees de imagenes consulta, alta, baja , modificacion
    // --------------------------Consulta usuario---------------------------------
    public function imagenes()
    {
        $imagenes_a = Imagenes::all();
        $imagenes_b = \DB::select('SELECT * FROM imagenes');
        return view("lista_imagenes")
            ->with(['imagenes1'=>$imagenes_a])
            ->with(['imagenes2'=>$imagenes_b]);
    }
    public function altaimagenes()
    {
        $imagenes = Imagenes::all();
        return view("altaimagenes")
        ->with(['imagen' => $imagenes]);       
    }
    // -------------------------------Detalle---------------------------------
    
    public function detalleimagenes($id_imagenes)
    {
        //dd($id_imagenes);
        $imagenes = Imagenes::find($id_imagenes);
        // dd($imagenes);
        return view("detalleimagenes")
            ->with(['detalle'=> $imagenes]);
    }

    // public function registrar(Validar $request)
   
    // ----------------------------Editar Usuario-------------------------------------
    
    public function editarimagenes(Imagenes $id_imagenes)
    {
      

             return view("editarimagenes")
                ->with(['imagenes' => $id_imagenes]);
    }

    public function salvarimagenes(Imagenes $id_imagenes, Request $request)
    {  
    $query = Imagenes::find($id_imagenes->id_imagenes);
    
    
        $query->imagen = trim($request->imagen);
    $query-> save() ;
    
        return redirect()->route("editarimagenes", ['id_imagenes' => $id_imagenes->id_imagenes]);
    }
// ---------------------------------Borrar Usuarios-------------------------------------
public function borrarimagenes(Imagenes $id_imagenes)
{
    \Storage::disk('local')->delete($id_imagenes->imagen);  //destrulle la imagen del imagenes

    // $id_imagenes = imagenes::find($id_imagenes);
    $id_imagenes->delete();
    return redirect()->route("lista_imagenes");
}
}
