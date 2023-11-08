<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ModeloCliente;

class ControladorCliente extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $modeloCliente = new ModeloCliente();
        $datos['clientes'] = $modeloCliente->findall();
        return $this->respond($datos);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $modeloCliente = new ModeloCliente();
        $cliente = $modeloCliente -> getWhere(['id_cliente' => $id]) -> getResult();
        if($cliente){
            return $this -> respond($cliente);
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
        $modeloCliente = new ModeloCliente();

        $datos = [
            'nombre_cliente' => $this -> request -> getVar('nombre_cliente'),
            'apellido_cliente' => $this -> request -> getVar('apellido_cliente'),
            'telefono_cliente' => $this -> request -> getVar('telefono_cliente'),
            'correo_cliente' => $this -> request -> getVar('correo_cliente')
        ];

        $modeloCliente -> insert($datos);

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
        $modeloCliente = new ModeloCliente();

        $datosSolicitud = $this -> request -> getJSON();

        $datosActualizar = [
            'nombre_cliente' => $datosSolicitud -> nombre_cliente,
            'apellido_cliente' => $datosSolicitud -> apellido_cliente,
            'telefono_cliente' => $datosSolicitud -> telefono_cliente,
            'correo_cliente' => $datosSolicitud -> correo_cliente
        ];

        $modeloCliente -> update($id,$datosActualizar);

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
        $modeloCliente = new ModeloCliente();

        $cliente = $modeloCliente -> find($id);

        if($cliente){
            $modeloCliente -> delete($id);

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
