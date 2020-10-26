<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;

class Patients extends Component
{
    public $patients,
        $patient_id,
        $tipo_identificacion,
        $numero_identificacion,
        $nombres,
        $apellidos,
        $direccion,
        $fecha_nacimiento,
        $etnia,
        $sexo,
        $estado_civil,
        $escolaridad,
        $ocupacion,
        $zona_residencia,
        $departamento_residencia,
        $municipio_residencia,
        $telefono_fijo,
        $telefono_laboral,
        $telefono_celular,
        $email,
        $eps,
        $regimen;

    public $updateMode = false;

    public function render()
    {
        $this->patients = Patient::all();
        return view('livewire.patients');
    }

    public function resetInputFields()
    {
        $this->tipo_identificacion = '';
        $this->numero_identificacion = '';
        $this->nombres = '';
        $this->apellidos = '';
        $this->direccion = '';
        $this->fecha_nacimiento = '';
        $this->etnia = '';
        $this->sexo = '';
        $this->estado_civil = '';
        $this->escolaridad = '';
        $this->ocupacion = '';
        $this->zona_residencia = '';
        $this->departamento_residencia = '';
        $this->municipio_residencia = '';
        $this->telefono_fijo = '';
        $this->telefono_laboral = '';
        $this->telefono_celular = '';
        $this->email = '';
        $this->eps = '';
        $this->regimen = '';
    }

    public function store()
    {
        $validData = $this->validate([
            'tipo_identificacion' => 'required',
            'numero_identificacion' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'etnia' => 'required',
            'sexo' => 'required',
            'estado_civil' => 'required',
            'escolaridad' => 'required',
            'ocupacion' => 'required',
            'zona_residencia' => 'required',
            'departamento_residencia' => 'required',
            'municipio_residencia' => 'required',
            'telefono_fijo' => 'required',
            'telefono_laboral' => 'required',
            'telefono_celular' => 'required',
            'email' => 'required',
            'eps' => 'required',
            'regimen' => 'required',
        ]);


        Patient::create($validData);
        session()->flash('message', 'Paciente creado con éxito');
        $this->resetInputFields();
    }

    public function update()
    {
        $validData = $this->validate([
            'tipo_identificacion' => 'required',
            'numero_identificacion' => 'required',
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'etnia' => 'required',
            'sexo' => 'required',
            'estado_civil' => 'required',
            'escolaridad' => 'required',
            'ocupacion' => 'required',
            'zona_residencia' => 'required',
            'departamento_residencia' => 'required',
            'municipio_residencia' => 'required',
            'telefono_fijo' => 'required',
            'telefono_laboral' => 'required',
            'telefono_celular' => 'required',
            'email' => 'required',
            'eps' => 'required',
            'regimen' => 'required',
        ]);

        if ($this->patient_id) {
            $patient = Patient::find($this->patient_id);
            $patient->update([
                'tipo_identificacion' => $this->tipo_identificacion,
                'numero_identificacion' => $this->numero_identificacion,
                'nombres' => $this->nombres,
                'apellidos' => $this->apellidos,
                'direccion' => $this->direccion,
                'fecha_nacimiento' => $this->fecha_nacimiento,
                'etnia' => $this->etnia,
                'sexo' => $this->sexo,
                'estado_civil' => $this->estado_civil,
                'escolaridad' => $this->escolaridad,
                'ocupacion' => $this->ocupacion,
                'zona_residencia' => $this->zona_residencia,
                'departamento_residencia' => $this->departamento_residencia,
                'municipio_residencia' => $this->municipio_residencia,
                'telefono_fijo' => $this->telefono_fijo,
                'telefono_laboral' => $this->telefono_laboral,
                'telefono_celular' => $this->telefono_celular,
                'email' => $this->email,
                'eps' => $this->eps,
                'regimen' => $this->regimen,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Paciente actualizado con éxito.');
            $this->resetInputFields();
        }
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $patient = Patient::where('id', $id)->first();
        $this->patient_id = $patient->id;
        $this->tipo_identificacion = $patient->tipo_identificacion;
        $this->numero_identificacion = $patient->numero_identificacion;
        $this->nombres = $patient->nombres;
        $this->apellidos = $patient->apellidos;
        $this->direccion = $patient->direccion;
        $this->fecha_nacimiento = $patient->fecha_nacimiento;
        $this->etnia = $patient->etnia;
        $this->sexo = $patient->sexo;
        $this->estado_civil = $patient->estado_civil;
        $this->escolaridad = $patient->escolaridad;
        $this->ocupacion = $patient->ocupacion;
        $this->zona_residencia = $patient->zona_residencia;
        $this->departamento_residencia = $patient->departamento_residencia;
        $this->municipio_residencia = $patient->municipio_residencia;
        $this->telefono_fijo = $patient->telefono_fijo;
        $this->telefono_laboral = $patient->telefono_laboral;
        $this->telefono_celular = $patient->telefono_celular;
        $this->email = $patient->email;
        $this->eps = $patient->eps;
        $this->regimen = $patient->regimen;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
        if ($id) {
            Patient::where('id', $id)->delete();
            session()->flash('message', 'El registro del paciente ha sido eliminado con éxito.');
        }
    }
}
