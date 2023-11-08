<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ModeloExtra;

class ControladorExtra extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $modeloExtra = new ModeloExtra();
        $datos['extras'] = $modeloExtra->findall();
        return $this->respond($datos);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $modeloExtra = new ModeloExtra();
        $extra = $modeloExtra -> getWhere(['id_extra' => $id]) -> getResult();
        if($extra){
            return $this -> respond($extra);
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
        $modeloExtra = new ModeloExtra();

        $datos = [
            'nombre_extra' => $this -> request -> getVar('nombre_extra'),
            'porcion_extra' => $this -> request -> getVar('porcion_extra'),
            'precio_extra' => $this -> request -> getVar('precio_extra'),
            'link_imagen_extra' => $this -> request -> getVar('link_imagen_extra')
        ];

        $modeloExtra -> insert($datos);

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
        $modeloExtra = new ModeloExtra();

        $datosSolicitud = $this -> request -> getJSON();

        $datosActualizar = [
            'nombre_extra' => $datosSolicitud -> nombre_extra,
            'porcion_extra' => $datosSolicitud -> porcion_extra,
            'precio_extra' => $datosSolicitud -> precio_extra,
            'link_imagen_extra' => $datosSolicitud -> link_imagen_extra
        ];

        $modeloExtra -> update($id,$datosActualizar);

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
        $modeloExtra = new ModeloExtra();

        $extra = $modeloExtra -> find($id);

        if($extra){
            $modeloExtra -> delete($id);

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