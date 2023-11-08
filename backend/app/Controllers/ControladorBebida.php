<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ModeloBebida;

class ControladorBebida extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $modeloBebida = new ModeloBebida();
        $datos['bebidas'] = $modeloBebida->findall();
        return $this->respond($datos);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $modeloBebida = new ModeloBebida();
        $bebida = $modeloBebida -> getWhere(['id_bebida' => $id]) -> getResult();
        if($bebida){
            return $this -> respond($bebida);
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
        $modeloBebida = new ModeloBebida();

        $datos = [
            'nombre_bebida' => $this -> request -> getVar('nombre_bebida'),
            'tamaño_bebida' => $this -> request -> getVar('tamaño_bebida'),
            'precio_bebida' => $this -> request -> getVar('precio_bebida'),
            'link_imagen_bebida' => $this -> request -> getVar('link_imagen_bebida')
        ];

        $modeloBebida -> insert($datos);

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
        $modeloBebida = new ModeloBebida();

        $datosSolicitud = $this -> request -> getJSON();

        $datosActualizar = [
            'nombre_bebida' => $datosSolicitud -> nombre_bebida,
            'tamaño_bebida' => $datosSolicitud -> tamaño_bebida,
            'precio_bebida' => $datosSolicitud -> precio_bebida,
            'link_imagen_bebida' => $datosSolicitud -> link_imagen_bebida
        ];

        $modeloBebida -> update($id,$datosActualizar);

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
        $modeloBebida = new ModeloBebida();

        $bebida = $modeloBebida -> find($id);

        if($bebida){
            $modeloBebida -> delete($id);

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