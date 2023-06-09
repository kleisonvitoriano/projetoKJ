<?php
use models\Jogo;

class JogosController {

	
	function index($id = null){

		#variáveis que serao passados para a view
		$send = [];

		#cria o model
		$model = new Jogo();
		
		
		$send['data'] = null;
		#se for diferente de nulo é porque estou editando o registro
		if ($id != null){
			#então busca o registro do banco
			$send['data'] = $model->findById($id);
		}

		#busca todos os registros
		$send['lista'] = $model->all();

		#$send['tipos'] = [0=>"Escolha uma opção", 1=>"Usuário comum", 2=>"Admin"];

		#chama a view
		render("jogos", $send);
	}

	
	function salvar($id=null){

		$model = new Jogo();
		
		if ($id == null){
			$id = $model->save($_POST);
		} else {
			$id = $model->update($id, $_POST);
		}
		
		redirect("jogos/index/$id");
	}

	function deletar(int $id){
		
		$model = new Jogo();
		$model->delete($id);

		redirect("jogos/index/");
	}


}
