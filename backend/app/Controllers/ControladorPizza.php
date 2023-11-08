<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ModeloPizza;

class ControladorPizza extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $modeloPizza = new ModeloPizza();
        $datos['pizzas'] = $modeloPizza->findall();
        return $this->respond($datos);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $modeloPizza = new ModeloPizza();
        $pizza = $modeloPizza -> getWhere(['id_pizza' => $id]) -> getResult();
        if($pizza){
            return $this -> respond($pizza);
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
        $modeloPizza = new ModeloPizza();

        $datos = [
            'nombre_pizza' => $this -> request -> getVar('nombre_pizza'),
            'tamaño_pizza' => $this -> request -> getVar('tamaño_pizza'),
            'precio_pizza' => $this -> request -> getVar('precio_pizza'),
            'link_imagen_pizza' => $this -> request -> getVar('link_imagen_pizza')
        ];

        $modeloPizza -> insert($datos);

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
        $modeloPizza = new ModeloPizza();

        $datosSolicitud = $this -> request -> getJSON();

        $datosActualizar = [
            'nombre_pizza' => $datosSolicitud -> nombre_Pizza,
            'tamaño_pizza' => $datosSolicitud -> tamaño_pizza,
            'precio_pizza' => $datosSolicitud -> precio_pizza,
            'link_imagen_pizza' => $datosSolicitud -> link_imagen_pizza
        ];

        $modeloPizza -> update($id,$datosActualizar);

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
        $modeloPizza = new ModeloPizza();

        $pizza = $modeloPizza -> find($id);

        if($pizza){
            $modeloPizza -> delete($id);

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