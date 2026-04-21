# Análise Associativa com PHP-ML

## Descrição do Projeto

Este projeto é um estudo prático sobre **Análise de Associação** utilizando a biblioteca **PHP-ML** em PHP. A análise de associação é uma técnica de aprendizado de máquina usada para descobrir relações interessantes entre variáveis em grandes bancos de dados. Um exemplo clássico é a análise de cestas de compras, onde se identifica produtos que são frequentemente comprados juntos.

O foco principal é o algoritmo **Apriori**, implementado pela classe `Apriori` da biblioteca PHP-ML, que encontra regras de associação do tipo "se A, então B" com base em suporte e confiança.

## Por Que Este Projeto?

- **Aprendizado**: Serve como material de estudo para entender conceitos de machine learning em PHP, especificamente análise de associação.
- **Demonstração**: Mostra como integrar e usar a biblioteca PHP-ML em projetos PHP.
- **Aplicação Prática**: Exemplifica o uso de Apriori em cenários reais, como recomendação de produtos em e-commerce.

## Pra Que Serve?

- Identificar padrões de associação em dados transacionais.
- Gerar regras de recomendação, como "clientes que compraram X também compraram Y".
- Analisar comportamentos de compra ou outras relações em datasets.

## O Que Faz Este Projeto?

O projeto contém três exemplos de código (`index01.php`, `index02.php`, `index03.php`) que demonstram o uso do algoritmo Apriori:

1. **index01.php**: Treina o modelo com dados de exemplo (produtos) e prevê associações para um item específico.
2. **index02.php**: Similar ao primeiro, mas prevê múltiplas associações para um item.
3. **index03.php**: Demonstra previsões para múltiplos conjuntos de itens simultaneamente.

### Dependências

- **PHP**: Versão compatível com a biblioteca (recomendado PHP 7.1+).
- **PHP-ML**: Biblioteca de machine learning para PHP, instalada via Composer.

### Instalação

1. Certifique-se de ter o Composer instalado.
2. Execute `composer install` na raiz do projeto para instalar as dependências.

### Como Executar

Execute os arquivos PHP via linha de comando:

```bash
php index01.php
php index02.php
php index03.php
```

Cada script irá treinar o modelo com dados de exemplo e exibir as associações previstas.

### Estrutura do Projeto

- `composer.json`: Configuração do projeto e dependências.
- `index01.php`, `index02.php`, `index03.php`: Exemplos de uso do Apriori.
- `vendor/`: Diretório com as dependências instaladas (PHP-ML e Composer).

### Dados de Exemplo

Os exemplos usam dados hardcoded de produtos (roupas, calçados, acessórios, cosméticos) para simular transações de compra.

### Próximos Passos

- Integrar com datasets reais (CSV, banco de dados).
- Explorar outros algoritmos de associação ou métricas avançadas.
- Implementar uma interface web para visualização das regras.

## Autor

LuizLins (luizmagao@gmail.com)

## Licença

Este projeto é para fins educacionais. Consulte a licença da biblioteca PHP-ML para uso em produção.