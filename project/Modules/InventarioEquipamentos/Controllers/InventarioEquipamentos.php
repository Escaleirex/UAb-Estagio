<?php

namespace Modules\InventarioEquipamentos\Controllers;

use App\Controllers\BaseController;
use Modules\InventarioEquipamentos\Models\EquipamentosModel;
use PhpParser\Node\Expr\AssignOp\Mod;

class InventarioEquipamentos extends BaseController {
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

    public function submitForm() {
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

    public function getItemById($id){
        try {
            $db = \Config\Database::connect();
            $query = $db->query('SELECT * FROM tbl_equipamentos WHERE id = ?', [$id]);
            $result = $query->getResult();
            return json_encode($result);
        } catch (\Exception $e) {
            return ['error' => 'Database query error: ' . $e->getMessage()];
        }
    }        

    public function updateItemForm(){
        $validation2 = \Config\Services::validation();
    
        $validation2->setRules([
            'id' => 'required',
            // 'ativo' => 'required',
            'ni' => 'required',
            // 'sn' => 'required',
            'tipo' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'disponivel' => 'required',
            'localizacao' => 'required',
            // 'piso' => 'required',
            // 'sala' => 'required',
            // 'aquisicaoDtm' => 'required|valid_date[Y-m-d H:i:s]', // Adjust date format if needed
        ]);
    
        if ($validation2->withRequest($this->request)->run()) {
            try {
                $validatedData2 = $this->request->getPost(['ativo', 'ni', 'sn', 'tipo', 'marca', 'modelo', 'disponivel', 'localizacao', 'piso', 'sala', 'aquisicaoDtm', 'notas', 'id']); // Include 'id' field
                $model = new EquipamentosModel();
                $model->update($validatedData2['id'], $validatedData2);
                return redirect()->to('/InventarioEquipamentos/list');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        } else {
            die(print_r($validation2->getErrors(), true));
            $model = new EquipamentosModel();
            $equipamentos = $model->findAll();
            return view('Modules\InventarioEquipamentos\Views\ViewInvEquiList', [
                'equipamentos' => $equipamentos,
                'validation' => $validation2,
            ]);
        }
    }

    public function deleteForm(){
        $validation3 = \Config\Services::validation();
        $validation3->setRules([
            'id'=> 'required',
        ]);

        if ($validation3->withRequest($this->request)->run()) {
            $validatedData3 = $this->request->getPost('id');
            $model = new EquipamentosModel();
            $model->delete($validatedData3);
            return redirect()->to('/InventarioEquipamentos/list');
        } else {
            die(print_r($validation3->getErrors(), true));
            $model = new EquipamentosModel();
            $equipamentos = $model->findAll();
            return view('Modules\InventarioEquipamentos\Views\ViewInvEquiList', [
                'equipamentos' => $equipamentos,
                'validation' => $validation3,
            ]);
        }
    }
}