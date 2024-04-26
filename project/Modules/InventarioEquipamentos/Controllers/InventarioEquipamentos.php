<?php

namespace Modules\InventarioEquipamentos\Controllers;

use App\Controllers\BaseController;
use Modules\InventarioEquipamentos\Models\EquipamentosModel;
use PhpParser\Node\Expr\AssignOp\Mod;

class InventarioEquipamentos extends BaseController
{
    public function index(){
        $model = new EquipamentosModel();
        return view('Modules\InventarioEquipamentos\Views\ViewInvEquiIndex');
    }

    public function list(){
        $model = new EquipamentosModel();
        $equipamentos = $model->findAll();
        $validation = \Config\Services::validation(); 
        return view('Modules\InventarioEquipamentos\Views\ViewInvEquiList', [
            'equipamentos'=>$equipamentos,
            'validation'=>$validation,
        ]);
    }

    public function submitForm()
    {
        $validation = \Config\Services::validation();
    
        $validation->setRules([
            'ativo' => 'required',
            'ni' => 'required',
            'sn' => 'required',
            'tipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'disponivel' => 'required',
            'localizacao' => 'required',
            'piso' => 'required',
            'sala' => 'required',
            // 'aquisicaoDtm' => 'required|valid_date[Y-m-d H:i:s]', // Adjust date format if needed
        ]);
    
        if ($validation->withRequest($this->request)->run()) {
            try {
                $validatedData = $this->request->getPost(['ativo', 'ni', 'sn', 'tipo', 'marca', 'modelo', 'disponivel', 'localizacao', 'piso', 'sala', 'aquisicaoDtm', 'notas']); // Only retrieve necessary fields
                $db = \Config\Database::connect();
                $db->table('tbl_equipamentos')->insert($validatedData); 
                return redirect()->to('http://localhost:8080/InventarioEquipamentos/list');
            } catch (\Exception $e) {
                // Add more specific error handling based on the exception message (e.g., validation errors)
                return redirect()->back()->with('error', $e->getMessage());
            }
        } else {
            $model = new EquipamentosModel();
            $equipamentos = $model->findAll();
            return view('Modules\InventarioEquipamentos\Views\ViewInvEquiList', [
                'equipamentos' => $equipamentos,
                'validation' => $validation,
            ]);
        }
    }    

    public function updateItemForm()
    {
        $validation = \Config\Services::validation();
    
        $validation->setRules([
            'ativo' => 'required',
            'ni' => 'required',
            'sn' => 'required',
            'tipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'disponivel' => 'required',
            'localizacao' => 'required',
            'piso' => 'required',
            'sala' => 'required',
            // 'aquisicaoDtm' => 'required|valid_date[Y-m-d H:i:s]', // Adjust date format if needed
        ]);
    
        if ($validation->withRequest($this->request)->run()) {
            try {
                $validatedData = $this->request->getPost(['ativo', 'ni', 'sn', 'tipo', 'marca', 'modelo', 'disponivel', 'localizacao', 'piso', 'sala', 'aquisicaoDtm', 'notas']); // Only retrieve necessary fields
                $db = \Config\Database::connect();
                $db->table('tbl_equipamentos')->insert($validatedData); 
                return redirect()->to('http://localhost:8080/InventarioEquipamentos/list');
            } catch (\Exception $e) {
                // Add more specific error handling based on the exception message (e.g., validation errors)
                return redirect()->back()->with('error', $e->getMessage());
            }
        } else {
            $model = new EquipamentosModel();
            $equipamentos = $model->findAll();
            return view('Modules\InventarioEquipamentos\Views\ViewInvEquiList', [
                'equipamentos' => $equipamentos,
                'validation' => $validation,
            ]);
        }
    }    
    
}