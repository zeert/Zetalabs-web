<?php

class Test_Controller extends Base_Controller {

    public function action_index()
    {
        echo 'esta es una pagina de Prueba';
    }

    public function action_login()
	{
		echo 'este es el Login de la web';
	}

	public function action_bienvenida()
	{
	
		return View::make('page');
		
		
	}
}



/* Ubicacion: ./application/controllers/test.php */
