# Imagem de uma aplicação Laravel simples no Docker Hub

Este repositório contém os arquivos criados durante o desenvolvimento do trabalho de Docker da disciplina de Tecnologias Sustentáveis. A pasta `docker` contém os arquivos usados para gerar o build da imagem que está disponível no Docker Hub, enquanto a pasta `imagem` contém o arquivo necessário para subir a aplicação.

## Rodando o projeto pela imagem

1. Baixe o arquivo **docker-compose.yml** da pasta _imagem_.
2. Abra o terminal (se estiver usando Windows, será necessário ter o WSL instalado) na mesma pasta onde o arquivo foi baixado e execute o seguinte comando:

    ```bash
    docker compose up
    ```

3. Aguarde a configuração do ambiente, isso pode demorar um pouco na primeira execução, quando a linha de código a seguir for exibida a configuração terminou:
> INFO success: php-fpm entered RUNNING state, process has stayed up for > than 1 seconds (startsecs)
5. Em seguida, já será possível acessar a aplicação em: [http://localhost](http://localhost)

### Observação:
O arquivo está configurado para rodar na porta 80. Se essa porta estiver ocupada, isso pode resultar em um erro. Para resolver, você pode parar a execução do programa que está ocupando a porta ou alterar a variável _port_ no arquivo `docker-compose.yml`.

## Referências

- Configuração do Dockerfile: [docker-php-com-nginx](https://github.com/urnauzao/docker-php-com-nginx) e [Tutorial Armazenando e Executando uma Aplicação Laravel](https://www.youtube.com/watch?v=4RFkrzDPCpg)
- Configuração da imagem: [Como Criar Imagem Docker para Ambiente de Produção](https://www.youtube.com/watch?v=iDJjb2zYa4c)
