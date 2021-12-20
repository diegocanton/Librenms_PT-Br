<?php

return [
    'settings' => [
        'settings' => [
            'poller_groups' => [
                'description' => 'Grupos Atribuídos',
                'help' => 'Este nó só executará ações em dispositivos nesses grupos de poller.',
            ],
            'poller_enabled' => [
                'description' => 'Poller habilitado',
                'help' => 'Habilite poller workers neste nó.',
            ],
            'poller_workers' => [
                'description' => 'Poller Workers',
                'help' => 'Quantidade de poller workers a serem gerados neste nó.',
            ],
            'poller_frequency' => [
                'description' => 'Frequência do Poller (Aviso!)',
                'help' => 'Com que freqüência pesquisar dispositivos neste nó. Aviso! Mudar isso sem consertar os arquivos rrd quebrará os gráficos. Veja os documentos para mais informações.',
            ],
            'poller_down_retry' => [
                'description' => 'Tentar novamente os dispositivos desligados',
                'help' => 'Se um dispositivo estiver inativo durante a tentativa de polling neste nó. Este é o tempo de espera antes de tentar novamente.',
            ],
            'discovery_enabled' => [
                'description' => 'Discovery habilitado',
                'help' => 'Habilite trabalhos de descoberta neste nó.',
            ],
            'discovery_workers' => [
                'description' => 'Discovery Workers',
                'help' => 'Quantidade de trabalhos de descoberta a serem executados neste nó. Valor muito alto pode causar sobrecarga.',
            ],
            'discovery_frequency' => [
                'description' => 'Frequência de descoberta',
                'help' => 'Com que freqüência executar a descoberta de dispositivo neste nó. O padrão é 4 vezes ao dia.',
            ],
            'services_enabled' => [
                'description' => 'Services habilitado',
                'help' => 'Habilite trabalhadores de serviços neste nó.',
            ],
            'services_workers' => [
                'description' => 'Services Workers',
                'help' => 'Quantidade de services workers neste nó.',
            ],
            'services_frequency' => [
                'description' => 'Frequência de Serviços',
                'help' => 'Com que freqüência executar serviços neste nó. Isso deve corresponder à frequência do poller.',
            ],
            'billing_enabled' => [
                'description' => 'Faturamento habilitado',
                'help' => 'Habilite workers de cobrança neste nó.',
            ],
            'billing_frequency' => [
                'description' => 'Frequência de Faturamento',
                'help' => 'Com que frequência coletar dados de faturamento neste nó.',
            ],
            'billing_calculate_frequency' => [
                'description' => 'Frequência de cálculo de faturamento',
                'help' => 'Com que frequência calcular o uso da fatura neste nó.',
            ],
            'alerting_enabled' => [
                'description' => 'Alerta habilitado',
                'help' => 'Habilite o worker de alerta neste nó.',
            ],
            'alerting_frequency' => [
                'description' => 'Frequência de Alerta',
                'help' => 'A frequência com que as regras de alerta são verificadas neste nó. Observe que os dados são atualizados apenas com base na frequência do poller.',
            ],
            'ping_enabled' => [
                'description' => 'Fast Ping habilitado',
                'help' => 'O Fast Ping apenas faz ping nos dispositivos para verificar se eles estão ativos ou inativos',
            ],
            'ping_frequency' => [
                'description' => 'Frequência de Ping',
                'help' => 'Com que frequência verificar o ping neste nó. Aviso! Se você alterar isso, deverá fazer alterações adicionais. Verifique os documentos do Fast Ping.',
            ],
            'update_enabled' => [
                'description' => 'Manutenção diária habilitada',
                'help' => 'Execute o script de manutenção daily.sh e reinicie o "dispatcher service" posteriormente.',
            ],
            'update_frequency' => [
                'description' => 'Frequência de Manutenção',
                'help' => 'Com que frequência executar a manutenção diária neste nó. O padrão é 1 dia. É altamente recomendável não mudar isso.',
            ],
            'loglevel' => [
                'description' => 'Nível de Log',
                'help' => 'Nível de log do dispatch service.',
            ],
            'watchdog_enabled' => [
                'description' => 'Watchdog Habilitado',
                'help' => 'Watchdog monitora o arquivo de log e reinicia o serviço se ele não tiver sido atualizado',
            ],
            'watchdog_log' => [
                'description' => 'Arquivo de Log a observar',
                'help' => 'O padrão é o arquivo de log LibreNMS.',
            ],
        ],
        'units' => [
            'seconds' => 'Segundos',
            'workers' => 'Workers',
        ],
    ],
];
