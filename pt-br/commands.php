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
        'args-nonsense' => 'Use one of --probes and --targets',
        'config-insufficient' => 'In order to generate a smokeping configuration, you must have set "smokeping.probes", "fping", and "fping6" set in your configuration',
        'dns-fail' => 'was not resolvable and was omitted from the configuration',
        'description' => 'Generate a configuration suitable for use with smokeping',
        'header-first' => 'This file was automatically generated by "lnms smokeping:generate',
        'header-second' => 'Local changes may be overwritten without notice or backups being taken',
        'header-third' => 'For more information see https://docs.librenms.org/Extensions/Smokeping/"',
        'no-devices' => 'No eligible devices found - devices must not be disabled.',
        'no-probes' => 'At least one probe is required.',
        'options' => [
            'probes' => 'Generate probe list - used for splitting the smokeping configuration into multiple files. Conflicts with "--targets"',
            'targets' => 'Generate the target list - used for splitting the smokeping configuration into multiple files. Conflicts with "--probes"',
            'no-header' => 'Don\'t add the boilerplate comment to the start of the generated file',
            'no-dns' => 'Skip DNS lookups',
            'single-process' => 'Only use a single process for smokeping',
            'compat' => '[deprecated] Mimic the behaviour of gen_smokeping.php',
        ],
    ],
    'snmp:fetch' => [
        'description' => 'Run snmp query against a device',
        'arguments' => [
            'device spec' => 'Device to query: device_id, hostname/ip, hostname regex, or all',
            'oid' => 'SNMP OID to fetch.  Should be either MIB::oid or a numeric oid',
        ],
        'failed' => 'SNMP command failed!',
        'oid' => 'OID',
        'options' => [
            'type' => 'The type of snmp query to perform :types',
            'output' => 'Specify the output format :formats',
            'numeric' => 'Numeric OIDs',
        ],
        'not_found' => 'Device not found',
        'value' => 'Value',
    ],
    'translation:generate' => [
        'description' => 'Generate updated json language files for use in the web frontend',
    ],
    'user:add' => [
        'description' => 'Add a local user, you can only log in with this user if auth is set to mysql',
        'arguments' => [
            'username' => 'The username the user will log in with',
        ],
        'options' => [
            'descr' => 'User description',
            'email' => 'Email to use for the user',
            'password' => 'Password for the user, if not given, you will be prompted',
            'full-name' => 'Full name for the user',
            'role' => 'Set the user to the desired role :roles',
        ],
        'password-request' => "Please enter the user's password",
        'success' => 'Successfully added user: :username',
        'wrong-auth' => 'Warning! You will not be able to log in with this user because you are not using MySQL auth',
    ],
];
