<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ModeloPedido;

class ControladorPedido extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $modeloPedido = new ModeloPedido();
        $datos['pedidos'] = $modeloPedido->findall();
        return $this->respond($datos);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $modeloPedido = new ModeloPedido();
        $pedido = $modeloPedido -> getWhere(['id_pedido' => $id]) -> getResult();
        if($pedido){
            return $this -> respond($pedido);
        }else{
            return $this -> failNotFound('Recurso no encontrado con el identificador ' . $id);
        }
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $modeloPedido = new ModeloPedido();

        $datos = [
            'id_detalle_pedido' => $this -> request -> getVar('id_detalle_pedido'),
            'fecha_pedido' => $this -> request -> getVar('fecha_pedido')
        ];

        $modeloPedido -> insert($datos);

        $respuesta = [
            'status' => 201,
            'error' => null,
            'message' => ['satisfactorio' => 'Recurso almacenado satisfactoriamente']
        ];

        return $this -> respondCreated($respuesta,201);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $modeloPedido = new ModeloPedido();

        $datosSolicitud = $this -> request -> getJSON();

        $datosActualizar = [
            'id_detalle_pedido' => $datosSolicitud -> id_detalle_pedido,
            'fecha_pedido' => $datosSolicitud -> fecha_pedido
        ];

        $modeloPedido -> update($id,$datosActualizar);

        $respuesta = [
            'status' => 200,
            'error' => null,
            'message' => ['satisfactorio' => 'Recurso actualizado satisfactoriamente']
        ];

        return $this -> respond($respuesta);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $modeloPedido = new ModeloPedido();

        $pedido = $modeloPedido -> find($id);

        if($pedido){
            $modeloPedido -> delete($id);

            $respuesta = [
                'status' => 200,
                'error' => null,
                'message' => ['satisfactorio' => 'Recurso eliminado satisfactoriamente']
            ];

            return $this -> respondDeleted($respuesta);
        }else{
            return $this -> failNotFound('Recurso no encontrado con el identificador ' . $id);
        }
    }
}