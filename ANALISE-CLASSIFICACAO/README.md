# Análise de Classificação com PHP-ML

## Descrição do Projeto

Este projeto é um estudo prático sobre **Análise de Classificação** utilizando a biblioteca **PHP-ML** em PHP. A classificação é uma técnica de aprendizado de máquina supervisionado usada para categorizar dados em classes ou labels pré-definidas. Exemplos incluem classificação de emails (spam/não spam), reconhecimento de dígitos ou predição de tamanhos (P, M, G).

O foco principal são algoritmos de classificação como **Naive Bayes**, **K-Nearest Neighbors (KNN)** e **Support Vector Machine (SVM)**, implementados pelas classes `NaiveBayes`, `KNearestNeighbors` e `SVC` da biblioteca PHP-ML.

## Por Que Este Projeto?

- **Aprendizado**: Serve como material de estudo para entender conceitos de machine learning em PHP, especificamente classificação supervisionada.
- **Demonstração**: Mostra como integrar e usar a biblioteca PHP-ML em projetos PHP.
- **Aplicação Prática**: Exemplifica o uso de diferentes algoritmos de classificação em cenários reais, como classificação de dados categóricos.

## Pra Que Serve?

- Categorizar novos dados com base em padrões aprendidos de dados de treinamento.
- Resolver problemas de classificação binária ou multiclasse.
- Comparar o desempenho de diferentes algoritmos.

## O Que Faz Este Projeto?

O projeto está organizado em subpastas, cada uma focada em um algoritmo específico:

- **BAYES/**: Exemplos usando Naive Bayes para classificação probabilística.
- **KNN/**: Exemplos usando K-Nearest Neighbors para classificação baseada em proximidade.
- **SVM/**: Exemplos usando Support Vector Machine para classificação com margem ótima.

Cada subpasta contém exemplos de código (`index01.php`, `index02.php`) que demonstram o treinamento e predição com dados de exemplo.

### Dependências

- **PHP**: Versão compatível com a biblioteca (recomendado PHP 7.1+).
- **PHP-ML**: Biblioteca de machine learning para PHP, instalada via Composer.

### Instalação

1. Certifique-se de ter o Composer instalado.
2. Execute `composer install` na raiz do projeto para instalar as dependências (em cada subpasta).

### Como Executar

Navegue para cada subpasta e execute os arquivos PHP via linha de comando:

```bash
cd BAYES && php index01.php && php index02.php
cd ../KNN && php index01.php && php index02.php
cd ../SVM && php index01.php && php index02.php
```

Cada script irá treinar o modelo com dados de exemplo e exibir as classificações previstas.
