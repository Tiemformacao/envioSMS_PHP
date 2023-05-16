<?php 

// Mensagem do SMS.
// o texto é codificado usando a função urlencode() para garantir que caracteres especiais sejam tratados corretamente na URL.
$mensagem = urlencode("teste de requisicao http");

// concatena a url da api com a variável carregando o conteúdo da mensagem.
$url_api = "https://api.iagentesms.com.br/webservices/http.php?metodo=envio
&usuario=xibepa2907@appxapi.com
&senha=Ti2023**
&celular=85996718821
&mensagem={$mensagem}
&codigosms=102";

// realiza a requisição http passando os parâmetros informados.
// função file_get_contents() para fazer uma requisição HTTP GET para a URL da API que foi construída. Essa função retorna o conteúdo da resposta da requisição.
$resposta_api = file_get_contents($url_api);

// imprime o resultado da requisição.
echo $resposta_api;

?>