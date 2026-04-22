# Análise de Regressão com PHP-ML

## Descrição do Projeto

Este projeto é um estudo prático sobre **Análise de Regressão** utilizando a biblioteca **PHP-ML** em PHP. A regressão é uma técnica de aprendizado de máquina supervisionado usada para prever valores contínuos com base em dados de entrada. Exemplos incluem predição de preços, temperaturas ou quantidades.

O foco principal é o algoritmo **Least Squares (Mínimos Quadrados)**, implementado pela classe `LeastSquares` da biblioteca PHP-ML, que ajusta uma linha reta aos dados para minimizar o erro quadrático.

## Por Que Este Projeto?

- **Aprendizado**: Serve como material de estudo para entender conceitos de machine learning em PHP, especificamente regressão linear.
- **Demonstração**: Mostra como integrar e usar a biblioteca PHP-ML em projetos PHP.
- **Aplicação Prática**: Exemplifica o uso de regressão em cenários reais, como predição de valores numéricos.

## Pra Que Serve?

- Prever valores contínuos com base em padrões aprendidos de dados de treinamento.
- Modelar relações lineares entre variáveis.
- Analisar tendências e fazer projeções.

## O Que Faz Este Projeto?

O projeto contém quatro exemplos de código que demonstram o uso da regressão linear:

1. **index01.php**: Treina um modelo de regressão com dados simples e prevê um valor para uma nova entrada.
2. **index02.php**: Similar ao primeiro, mas prevê múltiplos valores simultaneamente.
3. **index03.php**: Usa um conjunto de dados ligeiramente diferente para demonstrar variações na predição.
4. **index04.php**: Outro exemplo com dados ajustados, mostrando previsões para entradas múltiplas.

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
php index04.php
```

Cada script irá treinar o modelo com dados de exemplo e exibir os valores previstos.
