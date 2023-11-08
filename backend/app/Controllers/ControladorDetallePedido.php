<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ModeDetallePedido;

class ControladorDetallePedido extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $modeloDetallePedido = new ModeloDetallePedido();
        $datos['detalle_pedido'] = $modeloDetallePedido->findall();
        return $this->respond($datos);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $modeloDetallePedido = new ModeloDetallePedido();
        $detallePedido = $modeloDetallePedido -> getWhere(['id_detalle_pedido' => $id]) -> getResult();
        if($detallePedido){
            return $this -> respond($detallePedido);
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
        $modeloDetallePedido = new ModeloDetallePedido();

        $datos = [
            'id_cliente' => $this -> request -> getVar('id_cliente'),
            'id_pizza' => $this -> request -> getVar('id_pizza'),
            'id_bebida' => $this -> request -> getVar('id_bebida'),
            'id_extra' => $this -> request -> getVar('id_extra'),
            'precio_total' => $this -> request -> getVar('precio_total')
        ];

        $modeloDetallePedido -> insert($datos);

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
        $modeloDetallePedido = new ModeloDetallePedido();

        $datosSolicitud = $this -> request -> getJSON();

        $datosActualizar = [
            'id_cliente' => $datosSolicitud -> id_cliente,
            'id_pizza' => $datosSolicitud -> id_pizza,
            'id_bebida' => $datosSolicitud -> id_bebida,
            'id_extra' => $datosSolicitud -> id_extra,
            'precio_total' => $datosSolicitud -> precio_total
        ];

        $modeloDetallePedido -> update($id,$datosActualizar);

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
        $modeloDetallePedido = new ModeloDetallePedido();

        $detallePedido = $modeloDetallePedido -> find($id);

        if($detallePedido){
            $modeloDetallePedido -> delete($id);

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