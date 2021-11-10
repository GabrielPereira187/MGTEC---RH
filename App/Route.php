<?php

    namespace App;

    use MF\Init\Bootstrap;

    class Route extends Bootstrap{
        
        protected function initRoutes() {
            $routes['home'] = array(
                'route'=>'/home',
                'controller'=>'GeneralScreensController',
                'action'=>'index'
            );

            // Cadastrar Processo Seletivo
            $routes['processo_seletivo'] = array(
                'route'=>'/processo_seletivo',
                'controller'=>'EmployeeScreensController',
                'action'=>'processoSeletivo'
            );

            $routes['processo_seletivo_cadastrar'] = array(
                'route'=>'/processo_seletivo_cadastrar',
                'controller'=>'EmployeeScreensController',
                'action'=>'processoSeletivoCadastrar'
            );

            $routes['gerenciar_processo_seletivo'] = array(
                'route'=>'/gerenciar_processo_seletivo',
                'controller'=>'EmployeeScreensController',
                'action'=>'gerenciarProcessoSeletivo'
            );

            $routes['visualizar_processo_seletivo'] = array(
                'route'=>'/visualizar_processo_seletivo',
                'controller'=>'EmployeeScreensController',
                'action'=>'visualizarProcessoSeletivo'
            );


            //Registrar Entrevista
            $routes['entrevista_registrar'] = array(
                'route'=>'/entrevista_registrar',
                'controller'=>'ManagerScreensController',
                'action'=>'entrevistaRegistrar'
            );

            $routes['entrevista_candidato_registrar'] = array(
                'route'=>'/entrevista_candidato_registrar',
                'controller'=>'ManagerScreensController',
                'action'=>'entrevistaCandidatoRegistrar'
            );

            // Marcar Entrevista
            $routes['entrevista_marcar'] = array(
                'route'=>'/entrevista_marcar',
                'controller'=>'EmployeeScreensController',
                'action'=>'entrevistaMarcar'
            );

            $routes['entrevista_candidato_marcar'] = array(
                'route'=>'/entrevista_candidato_marcar',
                'controller'=>'EmployeeScreensController',
                'action'=>'entrevistaCandidatoMarcar'
            );

            $routes['gerenciar_entrevista_candidato'] = array(
                'route'=>'/gerenciar_entrevista_candidato',
                'controller'=>'EmployeeScreensController',
                'action'=>'gerenciarEntrevistaCandidato'
            );

            $routes['visualizar_entrevista_candidato'] = array(
                'route'=>'/visualizar_entrevista_candidato',
                'controller'=>'EmployeeScreensController',
                'action'=>'visualizarEntrevistaCandidato'
            );

            // Requisição de Vaga
            $routes['gerar_requisicao_vaga'] = array(
                'route'=>'/gerar_requisicao_vaga',
                'controller'=>'ManagerScreensController',
                'action'=>'gerarRequisicaoVaga'
            );

            $routes['gerar_vaga'] = array(
                'route'=>'/gerar_vaga',
                'controller'=>'ManagerScreensController',
                'action'=>'gerarVaga'
            );

            $routes['visualizar_requisicao'] = array(
                'route'=>'/visualizar_requisicao',
                'controller'=>'ManagerScreensController',
                'action'=>'visualizarRequisicao'
            );

            $routes['requisicoes_vaga'] = array(
                'route'=>'/requisicoes_vaga',
                'controller'=>'ManagerScreensController',
                'action'=>'requisicoesVagas'
            );

            // Teste
            $routes['atribuir_teste'] = array(
                'route'=>'/atribuir_teste',
                'controller'=>'EmployeeScreensController',
                'action'=>'atribuirTeste'
            );

            $routes['cadastrar_teste'] = array(
                'route'=>'/cadastrar_teste',
                'controller'=>'EmployeeScreensController',
                'action'=>'cadastrarTeste'
            );

            // Perfil Candidato
            $routes['editar_perfil'] = array(
                'route'=>'/editar_perfil',
                'controller'=>'CandidateScreensController',
                'action'=>'editarPerfil'
            );

            $routes['editar_perfil_salvar'] = array(
                'route'=>'/editar_perfil_salvar',
                'controller'=>'CandidateScreensController',
                'action'=>'editarPerfilSalvar'
            );

            // Cadastro Usuário
            $routes['usuario_cadastrar'] = array(
                'route'=>'/usuario_cadastrar',
                'controller'=>'GeneralScreensController',
                'action'=>'usuarioCadastrar'
            );

            $routes['usuario_cadastrar_salvar'] = array(
                'route'=>'/usuario_cadastrar_salvar',
                'controller'=>'GeneralScreensController',
                'action'=>'usuarioCadastrarSalvar'
            );

            $this->setRoutes($routes);
        }    
    }

?>