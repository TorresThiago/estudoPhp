<?php 
	
$hierarquia = array(
	array(
		'nome_cargo'   => 'CEO',
		'subordinados' => array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo'   => 'Diretor Comercial',
				'subordinados' => array(
					//Inicio Gerente de Vendas
					array(
						'nome_cargo' => 'Gerente Vendas'
					)
					//Fim Gerente de Vendas
				)
			),
			//Fim: Diretor Comercial

			//Inicio Diretor financeiro
			array(
				'nome_cargo'     => 'Diretor Financeiro',
				'subordinados' 	 => array(
					//Inicio Gerentes de Contas a Pagar
					array(
						'nome_cargo' => 'Gerentes Contas a pagar',
						'subordinados' => array(
							//Inicio Supoervidor de pagamentos
							array(
								'nome_cargo' => 'Supervidor de Pagamentos'
							)
							//Fim Supervidor de pagamentos
						)
					),
					//Fim Gerentes de Contas a Pagar
					
					//Inicio gerentes de compras
					array(
						'nome_cargo' => 'Gerente de compras',
						'subordinados' => array(
						//Inicio Supervidor de suprimentos
						array(
							'nome_cargo' => 'Supervidor de Suprimentos',
							'subordinados' => array(
								array(
									'nome_cargo' => 'Funcionário'
								)
							)
						)
						//Fim Supervidor de suprimentos
						)
					)
					//Fim gerentes de compras
				)
			)
			//Fim Diretor financeiro
		)
	)
);


function exibe($cargos){

	$html  = '<ul>';
	
	foreach ($cargos as $cargo) {
		
		$html .= '<li>';

		$html .= $cargo['nome_cargo'];		

		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
			$html .= exibe($cargo['subordinados']);
		}

		$html .= '</li>';
	}

	$html .= '</ul>';

	return $html;
}

echo exibe($hierarquia);

 ?>