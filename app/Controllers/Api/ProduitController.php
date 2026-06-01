<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\ProduitModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProduitController extends BaseController
{
    public function index()
    {
        $model = new ProduitModel();

        return $this->response->setJSON(
            $model->findAll()
        );
    }

    public function create()
    {
        $model = new ProduitModel();

        $data = [
            'nom' => $this->request->getJSON()->nom,
            'prix' => $this->request->getJSON()->prix,
            'quantite' => $this->request->getJSON()->quantite
        ];

        $model->insert($data);

        return $this->response->setJSON([
            'message' => 'Produit ajouté'
        ]);
    }

    public function show($id)
    {
        $model = new ProduitModel();

        return $this->response->setJSON(
            $model->find($id)
        );
    }

    public function update($id)
    {
        $model = new ProduitModel();

        $data = $this->request->getJSON(true);

        $model->update($id, $data);

        return $this->response->setJSON([
            'message' => 'Produit modifié'
        ]);
    }

    public function delete($id)
    {
        $model = new ProduitModel();

        $model->delete($id);

        return $this->response->setJSON([
            'message' => 'Produit supprimé'
        ]);
    }
}
