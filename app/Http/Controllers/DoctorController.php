<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\Doctor;

class DoctorController extends Controller
{
    private $doctor;

    public function __construct(Doctor $doctor)
    {
        $this->doctor = $doctor;
    }

    public function profile($id)
    {
        $doctor = Doctor::find($id);
        return view('auth.profile', compact('doctor'));
    }

    public function index()
    {
        return view('index');
    }

    public function updateDoctor(Request $request, $id)
    {   
        $dados = $request->all();
        $doctor = Doctor::find($id);

        if(!$dados['password']){
            $senha_antiga = $doctor->password;
            $dados['password'] = $senha_antiga;
            $doctor->update($dados);
        }else{
            $senha_nova = Hash::make($dados['password']);
            $dados['password'] = $senha_nova;
            $doctor->update($dados);
        }
 
        return redirect()->route('index');
    }

    public function deleteDoctor($id)
    {
        $doctor = Doctor::find($id);

        $doctor->delete();

        return view('auth.register');
    }
}
