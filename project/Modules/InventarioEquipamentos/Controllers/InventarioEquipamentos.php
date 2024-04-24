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
            // 'name' => 'required|min_length[5]|max_length[50]',
            // 'date' => 'required|valid_date[Y-m-d H:i:s]',
        ]);

        if ($validation->withRequest($this->request)->run()) {
            // try {
            $validatedData = $this->request->getPost();
            
            $db = \Config\Database::connect();
            $db->table('tbl_equipamentos')->insert($validatedData); 
    
            return redirect()->to('http://localhost:8080/InventarioEquipamentos/list');
        //     } catch (\Exception $e) {
        //         return redirect()->back()->with('error', 'Database insertion failed: ' . $e->getMessage());
        //     }
        // } else {
        //     $model = new EquipamentosModel();
        //     $equipamentos = $model->findAll();
        //     $validation = \Config\Services::validation(); 
        //     return view('Modules\InventarioEquipamentos\Views\ViewInvEquiList', [
        //         'equipamentos' => $equipamentos,
        //         'validation' => $validation,
        //     ]);
        }        
    }
}