<?php

return [
    'database_connect' => [
        'title' => 'Erro ao conectar ao banco de dados',
    ],
    'database_inconsistent' => [
        'title' => 'Banco de dados inconsistente',
        'header' => 'Inconsistências de banco de dados encontradas durante um erro no banco de dados, corrija para continuar.',
    ],
    'dusk_unsafe' => [
        'title' => 'Não é seguro executar o Dusk em produção',
        'message' => 'Execute ":command" para remover o Dusk ou se você for um desenvolvedor, defina o apropriado APP_ENV',
    ],
    'file_write_failed' => [
        'title' => 'Erro: Não foi possível escrever no arquivo',
        'message' => 'Falha ao escrecer no arquivo (:file). Por favor, verifique as permissões e se SELinux/AppArmor se estiver em uso.',
    ],
    'ldap_missing' => [
        'title' => 'Falta suporte para PHP LDAP',
        'message' => 'PHP não suporta LDAP, por favor instale ou ative a extensão PHP LDAP',
    ],
    'maximum_execution_time_exceeded' => [
        'title' => 'Tempo máximo de execução de :seconds segundos excedido|Tempo máximo de execução de :seconds segundos excedido',
        'message' => 'O carregamento da página excedeu seu tempo máximo de execução configurado em PHP. Aumente max_execution_time em seu php.ini ou melhore o hardware do servidor',
    ],
    'unserializable_route_cache' => [
        'title' => 'Erro causado por incompatibilidade de versão do PHP',
        'message' => 'A versão do PHP que seu servidor web está executando (:web_version) não corresponde à versão do CLI (:cli_version)',
    ],
];
