<?php

return array(
    'ad'				        => 'Diretório Ativo',
    'ad_domain'				    => 'Domínio de Diretório Ativo',
    'ad_domain_help'			=> 'Geralmente isso é igual ao seu domínio de email, mas nem sempre.',
    'is_ad'				        => 'Este é um servidor de Diretório Ativo',
	'alert_email'				=> 'Enviar alertas a',
	'alerts_enabled'			=> 'Alertas ativados',
	'alert_interval'			=> 'Limite de Expiração dos Alertas (em dias)',
	'alert_inv_threshold'		=> 'Limite de Alerta de Inventário',
	'asset_ids'					=> 'ID do ativo',
	'auto_increment_assets'		=> 'Gerar ID de ativo crescente',
	'auto_increment_prefix'		=> 'Prefixo (opcional)',
	'auto_incrementing_help'    => 'Permitir auto insercao dessa ID de ativo antes de configurar isso',
	'backups'					=> 'Backups',
	'barcode_settings'			=> 'Configuração do código de barras',
    'confirm_purge'			    => 'Confirmar a Exclusão em Lote',
    'confirm_purge_help'		=> 'Digite o texto "DELETE" na caixa antes de excluir os registros. Este ação não poderá ser deifeita.',
	'custom_css'				=> 'CSS personalizado',
	'custom_css_help'			=> 'Digite quaisquer CSS modificada que você gostaria de usar. Mas não inclua as tags &lt;style&gt;&lt;/style&gt;.',
	'default_currency'  		=> 'Moeda padrão',
	'default_eula_text'			=> 'EULA Padrão',
  'default_language'					=> 'Idioma Padrão',
	'default_eula_help_text'	=> 'Você também pode associar EULAs personalizados para categorias específicas de ativos.',
    'display_asset_name'        => 'Exibir Nome do Ativo',
    'display_checkout_date'     => 'Mostrar data de check-out',
    'display_eol'               => 'Exibir EOL na visualização de tabela',
    'display_qr'                => 'Exibir Códigos QR',
	'display_alt_barcode'		=> 'Exibir códigos de barra em 1D',
	'barcode_type'				=> 'Código de barras do tipo 2D',
	'alt_barcode_type'			=> 'Código de barras do tipo 1D',
    'eula_settings'				=> 'Configuração do termo de uso',
    'eula_markdown'				=> 'Este EULA permite <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'general_settings'			=> 'Configuracoes Gerais',
	'generate_backup'			=> 'Backup Criado',
    'header_color'              => 'Cor do Cabeçalho',
    'info'                      => 'Estas configurações deixam-lhe personalizar certos aspectos da sua instalação.',
    'laravel'                   => 'Versão do Laravel',
    'ldap_enabled'              => 'LDAP ativo',
    'ldap_integration'          => 'Integração LDAP',
    'ldap_settings'             => 'Configurações LDAP',
    'ldap_server'               => 'Servidor LDAP',
    'ldap_server_help'          => 'Deve iniciar com ldap:// (para encriptado ou TLS) ou ldaps:// (para SSL)',
	'ldap_server_cert'			=> 'Validação certificado SSL LDAP',
	'ldap_server_cert_ignore'	=> 'Permitir certificado SSL inválido',
	'ldap_server_cert_help'		=> 'Selecione esta opção se está utilizando um certificado SSL próprio e deseja aceitar um certificado SSL inválido.',
    'ldap_tls'                  => 'Use TLS',
    'ldap_tls_help'             => 'Isso deve ser verificado somente se você estiver rodando STARTTLS no seu servidor LDAP. ',
    'ldap_uname'                => 'Login do usuário LDAP',
    'ldap_pword'                => 'Senha do usuário LDAP',
    'ldap_basedn'               => 'DN de Atribuição Básico',
    'ldap_filter'               => 'Filtro LDAP',
    'ldap_pw_sync'              => 'LDAP Password Sync',
    'ldap_pw_sync_help'         => 'Uncheck this box if you do not wish to keep LDAP passwords synced with local passwords. Disabling this means that your users may not be able to login if your LDAP server is unreachable for some reason.',
    'ldap_username_field'       => 'Nome do utilizador',
    'ldap_lname_field'          => 'Último Nome',
    'ldap_fname_field'          => 'Primeiro nome',
    'ldap_auth_filter_query'    => 'Consulta de autenticação LDAP',
    'ldap_version'              => 'Versão de LDAP',
    'ldap_active_flag'          => 'Marcação ativa LDAP',
    'ldap_emp_num'              => 'Número do funcionário LDAP',
    'ldap_email'                => 'Email',
    'load_remote_text'          => 'Scripts Remotos',
    'load_remote_help_text'		=> 'Esta instalação do Snipe-IT pode carregar qualquer scripts do mundo.',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Restringir utilizadores (incluindo admins) associados a empresas ao ativos da empresa.',
    'full_multiple_companies_support_text' => 'Suporte multi-empresa completo',
    'optional'					=> 'Opcional',
    'per_page'                  => 'Resultados Por Página',
    'php'                       => 'Versão do PHP',
    'php_gd_info'               => 'Você deve instalar o php-gd para exibir códigos QR, veja as <a href="http://www.php.net/manual/en/image.installation.php">instruções de instalação</a>.',
    'php_gd_warning'            => 'O plugin PHP Image Processing and GD NÃO está instalado.',
    'qr_help'                   => 'Habilite os Códigos QR primeiro para definir isto',
    'qr_text'                   => 'Texto do Código QR',
    'setting'                   => 'Configuração',
    'settings'                  => 'Configurações',
    'site_name'                 => 'Nome do Site',
    'slack_botname'             => 'Botname do Stack',
    'slack_channel'             => 'Canal do Stack',
    'slack_endpoint'            => 'Endpoint do Slack',
    'slack_integration'         => 'Configurações do Stack',
    'slack_integration_help'    => 'A integração com o Stack é opicional, entretando o endpoint e o canal são obrigatórios se você deseja usá-lo. Para configurar a integração com o Stack, você precisa primeiro  <a href=":slack_link" target="_new">criar um webhook de entrada</a> na sua conta no Stack.',
    'snipe_version'  			=> 'Versão do Snipe-IT',
    'system'                    => 'Informação do sistema',
    'update'                    => 'Atualizar Configurações',
    'value'                     => 'Valor',
    'brand'                     => 'Marca',
    'about_settings_title'      => 'Sobre as Configurações',
    'about_settings_text'       => 'Estas configurações permitem personalizar alguns aspectos da instalação.',
    'labels_per_page'           => 'Etiquetas por página',
    'label_dimensions'          => 'Dimensões das etiquetas (polegadas)',
    'page_padding'             => 'Margens da página (polegadas)',
    'purge'                    => 'Limpar Registros Excluídos',
    'labels_display_bgutter'    => 'Margem inferior da etiqueta',
    'labels_display_sgutter'    => 'Margem lateral da etiqueta',
    'labels_fontsize'           => 'Tamanho do texto da etiqueta',
    'labels_pagewidth'          => 'Largura da folha de etiquetas',
    'labels_pageheight'         => 'Altura da folha de etiquetas',
    'label_gutters'        => 'Espaçamento entre etiquetas (polegadas)',
    'page_dimensions'        => 'Dimensões da pagina (polegadas)',
    'label_fields'          => 'Campos visiveis nas etiquetas',
    'inches'        => 'polegadas',
    'width_w'        => 'largura',
    'height_h'        => 'altura',
    'text_pt'        => 'pt',
    'left'        => 'esquerda',
    'right'        => 'direita',
    'top'        => 'topo',
    'bottom'        => 'rodapé',
    'vertical'        => 'vertical',
    'horizontal'        => 'horizontal',
    'zerofill_count'        => 'Comprimento de etiquetas de ativos, incluindo zerofill',
);
