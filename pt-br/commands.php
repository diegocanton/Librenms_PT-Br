<?php

return [
    'config:get' => [
        'description' => 'Obter valor de configuração',
        'arguments' => [
            'setting' => 'configure o valor a ser obtido em notação pontuada (example: snmp.community.0)',
        ],
        'options' => [
            'dump' => 'Produza toda a configuração como json',
        ],
    ],
    'config:set' => [
        'description' => 'Definir valor de configuração (ou cancelar)',
        'arguments' => [
            'setting' => 'configure o valor a ser enviado em notação pontuada (example: snmp.community.0) Para anexar um sufixo em uma matriz (Array) use .+',
            'value' => 'valor a ser definido, configuração não definida se for omitido',
        ],
        'options' => [
            'ignore-checks' => 'Ignorar todas as verificações de segurança',
        ],
        'confirm' => 'Resetar :setting para o padrão?',
        'forget_from' => 'Esquecer :path para :parent?',
        'errors' => [
            'append' => 'Não é possível anexar a configuração sem matriz (Array)',
            'failed' => 'Falha ao definir :setting',
            'invalid' => 'Esta não é uma configuração válida. Por favor, verifique sua entrada',
            'invalid_os' => 'O SO especificado (:os) não existe',
            'nodb' => 'Database não está conectada',
            'no-validation' => 'Não pode configurar :setting, falta definição de validação.',
        ],
    ],
    'db:seed' => [
        'existing_config' => 'Database contém configurações existentes. Continuar?',
    ],
    'dev:check' => [
        'description' => 'Verificações de código LibreNMS. Executar sem opções executa todas as verificações',
        'arguments' => [
            'check' => 'Execute a verificação especificada :checks',
        ],
        'options' => [
            'commands' => 'Imprimir apenas os comandos que seriam executados, sem verificações',
            'db' => 'Execute testes de unidade que requerem uma conexão de banco de dados',
            'fail-fast' => 'Pare as verificações quando qualquer falha for encontrada',
            'full' => 'Execute verificações completas, ignorando a filtragem de arquivos alterados',
            'module' => 'Módulo específico para executar testes. Implica unidade, --db, --snmpsim',
            'os' => 'SO específico para executar testes. Implica unidade, --db, --snmpsim',
            'quiet' => 'Ocultar a saída a menos que haja um erro',
            'snmpsim' => 'Use snmpsim para testes de unidade',
        ],
    ],
    'dev:simulate' => [
        'description' => 'Simule dispositivos usando dados de teste',
        'arguments' => [
            'file' => 'O nome do arquivo (apenas o nome de base) do arquivo snmprec para atualizar ou adicionar ao LibreNMS. Se o arquivo não for especificado, nenhum dispositivo será adicionado ou atualizado.',
        ],
        'options' => [
            'multiple' => 'Use o nome da comunidade para o nome do host em vez de snmpsim',
            'remove' => 'Remova o dispositivo após parar',
        ],
        'added' => 'Dispositivo :hostname (:id) adicionado',
        'exit' => 'Ctrl-C para Parar',
        'removed' => 'Dispositivo :id removido',
        'updated' => 'Dispositivo :hostname (:id) atualizado',
    ],
    'device:ping' => [
        'description' => 'Faça ping no dispositivo e registre os dados para resposta',
        'arguments' => [
            'device spec' => 'Dispositivo para fazer ping em um dos: <Device ID>, <Hostname/IP>, todos',
        ],
    ],
    'device:poll' => [
        'description' => 'Pesquisa de dados de dispositivo(s) conforme definido pela descoberta',
        'arguments' => [
            'device spec' => 'Especificação do dispositivo para sondar: device_id, hostname, curinga, ímpar, par, todos',
        ],
        'options' => [
            'modules' => 'Especifique um único módulo a ser executado. Módulos separados por vírgulas, submódulos podem ser adicionados com /',
            'no-data' => 'Não atualizar o armazenamento de dados (RRD, InfluxDB, etc)',
        ],
        'errors' => [
            'db_connect' => 'Falha ao conectar ao banco de dados. Verifique se o serviço de banco de dados está em execução e as configurações de conexão.',
            'db_auth' => 'Falha ao conectar ao banco de dados. Verifique as credenciais: :error',
        ],
    ],
    'key:rotate' => [
        'description' => 'TROCAR APP_KEY, isso descriptografa todos os dados criptografados com a chave antiga fornecida e os armazena com a nova chave em APP_KEY.',
        'arguments' => [
            'old_key' => 'A antiga APP_KEY que é válida para dados criptografados',
        ],
        'cleared-cache' => 'A configuração foi armazenada em cache, limpamos o cache para se certificar de que APP_KEY está correto. Por favor, execute novamente lnms key:rotate',
        'backup_keys' => 'Documente AMBAS as chaves! Caso algo saia errado, defina a nova chave em .env e use a chave antiga como um argumento para este comando.',
        'backups' => 'Este comando pode causar perda irreversível de dados e invalidar todas as sessões do navegador. Certifique-se de ter backups.',
        'confirm' => 'Eu tenho backups e quero continuar',
        'decrypt-failed' => 'Falha ao descriptografar :item, pulando',
        'failed' => 'Falha ao descriptografar item(s).  Configure uma nova APP_KEY e execute isso novamente com a chave antiga como um argumento.',
        'new_key' => 'Nova chave: :key',
        'old_key' => 'Antiga chave: :key',
        'save_key' => 'Salver a nova chave em .env?',
        'success' => 'Sucesso ao trocar as chaves!',
        'validation-errors' => [
            'not_in' => ':attribute não deve ser igual a atual APP_KEY',
            'required' => 'Chave antiga ou --generate-new-key é necessária.',
        ],
    ],
    'smokeping:generate' => [
        'args-nonsense' => 'Use um dos --probes e --targets',
        'config-insufficient' => 'Para gerar uma configuração smokeping, você deve definir "smokeping.probes", "fping" e "fping6" em sua configuração',
        'dns-fail' => 'não foi resolvido e foi omitido da configuração',
        'description' => 'Gere uma configuração adequada para uso com smokeping',
        'header-first' => 'Este aquivo foi gerado automaticamente por "lnms smokeping:generate',
        'header-second' => 'Mudanças locais podem ser sobrescritas sem aviso e sem manter uma versão de backup',
        'header-third' => 'Para mais informações leia https://docs.librenms.org/Extensions/Smokeping/"',
        'no-devices' => 'Não foram encontrados equipamentos elegiveis - dispositivos não devem estar desativados.',
        'no-probes' => 'É necessária pelo menos uma sonda.',
        'options' => [
            'probes' => 'Gerar lista de sondagens - usado para dividir a configuração do smokeping em vários arquivos. Conflitos com "--targets"',
            'targets' => 'Gere a lista de alvos - usada para dividir a configuração do smokeping em vários arquivos. Conflitos com "--probes"',
            'no-header' => 'Não adicione o comentário clichê ao início do arquivo gerado',
            'no-dns' => 'Pular pesquisas de DNS',
            'single-process' => 'Use apenas um único processo para smokeping',
            'compat' => '[Obsoleto] Imitar o comportamento de gen_smokeping.php',
        ],
    ],
    'snmp:fetch' => [
        'description' => 'Executar consulta snmp em um dispositivo',
        'arguments' => [
            'device spec' => 'Dispositivo para consultar: device_id, hostname/ip, hostname regex, or all',
            'oid' => 'SNMP OID para buscar. Deve ser MIB::oid ou um oid numérico',
        ],
        'failed' => 'Falha no comando SNMP!',
        'oid' => 'OID',
        'options' => [
            'type' => 'O tipo de consulta snmp a ser executada :types',
            'output' => 'Especifique o formato de saída :formats',
            'numeric' => 'OIDs numérico',
        ],
        'not_found' => 'Dispositivo não encontrado',
        'value' => 'Valor',
    ],
    'translation:generate' => [
        'description' => 'Gere arquivos de idioma json atualizados para uso no front-end da web',
    ],
    'user:add' => [
        'description' => 'Adicione um usuário local, você só pode fazer login com este usuário se auth estiver definido como mysql',
        'arguments' => [
            'username' => 'O nome de usuário com o qual o usuário fará login',
        ],
        'options' => [
            'descr' => 'Descrição do usuário',
            'email' => 'Email para uso do usuário',
            'password' => 'Senha para o usuário, se não for fornecida, você será solicitado',
            'full-name' => 'Nome completo do usuário',
            'role' => 'Defina a função desejada para o usuário :roles',
        ],
        'password-request' => "Por favor digite a senha do usuário",
        'success' => 'Sucesso ao adicionar o usuário: :username',
        'wrong-auth' => 'Aviso! Você não poderá fazer o login com este usuário porque não está usando a autenticação MySQL.',
    ],
];
