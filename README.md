README

Este código em PHP tem como objetivo redirecionar o usuário para a página inicial de um website caso ele acesse uma pasta específica que foi definida como restrita.


Funcionamento

O código começa criando uma variável $restricted_folder que armazena o nome da pasta restrita que o usuário não deve acessar. Em seguida, é criada uma variável $homepage_url que armazena a URL da página inicial do website.

O código verifica se o nome da pasta atual (obtido através da função basename(__DIR__)) é igual ao nome da pasta restrita. Se sim, ele redireciona o usuário para a página inicial utilizando a função header('Location: ' . $homepage_url) e encerra a execução do script com exit.


Uso

Para utilizar este código, basta inseri-lo no arquivo PHP que será executado quando o usuário acessar a pasta restrita do seu website. É importante definir corretamente o nome da pasta restrita e a URL da página inicial na criação das variáveis $restricted_folder e $homepage_url.

Este código pode ser útil para manter certas áreas do seu website restritas a usuários autorizados e redirecionar usuários não autorizados para a página inicial do seu website.
