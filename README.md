#rcguard
Para instalar o plugin basta importar o arquivo sql de acordo com o banco desejado para o database designado ao roundcube e então por todo o conteúdo deste repositório na pasta plugins da pasta roundcube de seu servidor. Então renomeie o arquivo config.inc.php.dist do rcguard para config.inc.php.

Neste arquivo, complete as configurações com o site key e o private key obtidos em https://developers.google.com/recaptcha/intro. Depois disso atualize o config.inc.php do próprio roundcube e adicione rcguard na lista de plugins.

Então use seus formulários de login com segurança.
