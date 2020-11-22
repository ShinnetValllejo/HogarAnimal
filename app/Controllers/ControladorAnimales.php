<?php namespace App\Controllers;

use App\Models\modeloAnimales;

class ControladorAnimales extends BaseController
{
	public function index()
	{
		return view('vistaRegistro');
	}

	public function registrar()
	{
	//1. Recibir datos desde la vista
		$nombre=$this ->request->getPost("nombre");
		$edad=$this ->request->getPost("edad");
		$tipo=$this ->request->getPost("tipo");
        $descripcion=$this ->request->getPost("descripcion");
		$comida=$this ->request->getPost("comida");
		$foto=$this ->request->getPost("foto");

	//2. Organizar los datos de envío a la base de datos (arreglo)


		$datosEnvio=array(
			"nombre"=>$nombre,
			"edad"=>$edad,
			"tipo"=>$tipo,
            "descripcion"=>$descripcion,
			"comida"=>$comida,
			"foto"=>$foto	
		);

		//print_r ($datosEnvio);
	
	//3.Sacar una copia de la clase (instanciar clase/crear objeto) de la clase modeloUsuario
	
	$modeloAnimales = new modeloAnimales();

	//4. Ejecuto el metodo insert () del objeto creado en el punto3

	try {

		$modeloAnimales->insert($datosEnvio);
		$mensaje="Animal registrado con éxito";

		return redirect()->to(base_url("public/animales")) ->with('mensaje',$mensaje);	
	}
	
	catch (\Exception $e) {
		echo ($e->getMessage());
	}
  }

  public function consultar (){

	  //1.crear un objeto del modelo
	  $modeloAnimales = new modeloAnimales();

	  //2.ejecutar la consulta

	  try {
		
		//3.utilizar el metodo findAll(); del objeto del modelo

		$animalesconsultados = $modeloAnimales ->findAll();

		//4. organizar le resultado en un arreglo asociativo 
		//Para poderlo enviar a la vista
		$datosParaVista=array ('animales'=>$animalesconsultados);

		//Enviar datos a la vista

		return view('vistalistado', $datosParaVista);


	}
	
	catch (\Exception $e) {
		echo ($e->getMessage());
	}

  }

  public function eliminar ($idEliminar){

	  //1.crear un objeto del modelo
	  $modeloAnimales = new modeloAnimales();

	  //2.ejecutar la funsion delete del modelo
	  try {
		
		$modeloAnimales ->where ('id',$idEliminar) ->delete();
		echo ("se ha eliminado el registro");
	}
	
	catch (\Exception $e) {
		echo ($e->getMessage());
	}

  }

  public function editar ($idEditar){

	//1. Recibir datos desde la vista
	$nombre=$this ->request->getPost("nombreEditar");
	$descripcion=$this ->request->getPost("descEditar");

	$datosEnvio=array(
		"nombre"=>$nombre,
		"descripcion"=>$descripcion		
	);

	$modeloAnimales = new modeloAnimales();

	try {

		$modeloAnimales ->update($idEditar, $datosEnvio);
		echo ("Animal editado con exito");
		
	}
	
	catch (\Exception $e) {
		echo ($e->getMessage());
	}
  } 
}