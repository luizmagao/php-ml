# Análise de Classificação com Naive Bayes usando PHP-ML

## Descrição do Projeto

Este projeto é um estudo prático sobre **Classificação usando Naive Bayes** utilizando a biblioteca **PHP-ML** em PHP. O Naive Bayes é um algoritmo de aprendizado de máquina supervisionado baseado em probabilidade, que aplica o teorema de Bayes com a suposição de independência entre as features.

O foco principal é o algoritmo **Naive Bayes**, implementado pela classe `NaiveBayes` da biblioteca PHP-ML, que calcula probabilidades para classificar novos dados.

## Por Que Este Projeto?

- **Aprendizado**: Serve como material de estudo para entender o Naive Bayes em PHP.
- **Demonstração**: Mostra como usar Naive Bayes para problemas de classificação probabilística.
- **Aplicação Prática**: Exemplifica o uso de Naive Bayes em cenários como classificação de texto ou categorias simples.

## Pra Que Serve?

- Classificar dados novos com base em probabilidades calculadas.
- Resolver problemas onde a independência das features é uma boa aproximação.
- Analisar datasets com features categóricas ou numéricas.

## O Que Faz Este Projeto?

O projeto contém exemplos de código que demonstram o uso do Naive Bayes:

1. **index01.php**: Treina um modelo Naive Bayes com dados de exemplo e prevê a classe para novos dados.
2. **index02.php**: Similar ao primeiro, mas demonstra previsões para múltiplos dados ou ajustes.

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
```

Cada script irá treinar o modelo com dados de exemplo e exibir as classificações previstas.
