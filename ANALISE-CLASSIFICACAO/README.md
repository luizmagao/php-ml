# Análise de Classificação com PHP-ML

## Descrição do Projeto

Este projeto é um estudo prático sobre **Análise de Classificação** utilizando a biblioteca **PHP-ML** em PHP. A classificação é uma técnica de aprendizado de máquina supervisionado usada para categorizar dados em classes ou labels pré-definidas. Exemplos incluem classificação de emails (spam/não spam), reconhecimento de dígitos ou predição de tamanhos (P, M, G).

O foco principal são algoritmos de classificação como **K-Nearest Neighbors (KNN)** e **Support Vector Machine (SVM)**, implementados pelas classes `KNearestNeighbors` e `SVC` da biblioteca PHP-ML.

## Por Que Este Projeto?

- **Aprendizado**: Serve como material de estudo para entender conceitos de machine learning em PHP, especificamente classificação supervisionada.
- **Demonstração**: Mostra como integrar e usar a biblioteca PHP-ML em projetos PHP.
- **Aplicação Prática**: Exemplifica o uso de KNN e SVM em cenários reais, como classificação de dados categóricos.

## Pra Que Serve?

- Categorizar novos dados com base em padrões aprendidos de dados de treinamento.
- Resolver problemas de classificação binária ou multiclasse.
- Analisar e prever classes em datasets variados.

## O Que Faz Este Projeto?

O projeto contém exemplos de código que demonstram o uso de algoritmos de classificação:

1. **index01.php**: Treina um modelo de classificação com dados de exemplo e prevê a classe para um novo dado.
2. **index02.php**: Similar ao primeiro, mas demonstra previsões para múltiplos dados ou variações no algoritmo.

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
