
## 0. Instalação

composer require gframework/lana
## 1. Configuração

Adicionar  `gframework\lana\ChatBotServiceProvider::class,` Para config/app.php `providers`  


## 2. Postar

>  ` php artisan vendor:publish` 


## 4. Configure a configuração

> Você pode editar diretamente `config/chatbot.php` Ficheiro

## 5. Configure o aiml

> Editar`storage/chatbot/aiml` Arquivos no diretório

> * `chatbot.aiml` É o arquivo de entrada ，Nele `aiml` Tags podem conter vários `category` Tags , 一个 `default`Tags e vários `include`Tags.

> * Outros que você adicionou `aiml` Arquivo na raiz`aiml`O rótulo deve incluir um
 `topic` Tags, 
 Essa tag de tópico pode conter vários tópico Sinônimos de tópico Substantivo temamensagemassunto  
 
 `category` Etiqueta e um `default`Tags (Os outros arquivos aiml aqui não podem ser gravados`include`Tags，`include`As tags podem aparecer apenas em`chatbot.aiml`No arquivo)。


## 6. Teste o chatbot

> Você pode abrir `http://127.0.0.1:/chatbot`Teste com bots para teste。


## 7. Ligar para chatbot


> Se quisermos chamar o bot de bate-papo em nosso aplicativo, podemos chamar sua API assim `api?requestType=talk&userInput=hello`

## 8. Sobre regras de correspondência

> Regras de correspondência modificadas :

```PHP
* ---> (\S+)
# ---> \S+
_ ---> .*
= ---> \S*
```

## 9. Sobre tags AIML

> A tag `aiml` deste bot de bate-papo é diferente da tag padrão` aiml`. Eu personalizei a tag de acordo com minhas necessidades. Podemos encontrar mais desse bate-papo no arquivo [AIML.MD] (AIML.md). Tags suportadas pelo robô.

## 14. Sobre o banco de dados

> `log` Tabela onde os logs são armazenados. 

> `property` É armazenamento `user`e`bot`Uma tabela de atributos relacionados , Equivalente ao chefe do nosso chatbot，Ajude-nos a lembrar de alguns atributos。 set ,get, del, user, bot Tags Etc são usadas para manipular esta tabela .

> `data` As tabelas são usadas para armazenar a entrada do usuário，Resposta do robô，`input `, `that`, `topic` Aguarde as etiquetas operarem
`Parser::$_data`Cada vez que o programa começa a ser executado, o programa carrega os dados desta tabela nessa matriz e os armazena nessa tabela quando o programa termina. A única indicação da tabela é`userId`。



---

#  Aproveite


> [Ver detalhes](https://github.com/gleisonnanet/laravel-chatbot/)

![chatbot](./resources/assets/img/demo.png)
