# Análise de Classificação com Support Vector Machine (SVM) usando PHP-ML

## Descrição do Projeto

Este projeto é um estudo prático sobre **Classificação usando Support Vector Machine (SVM)** utilizando a biblioteca **PHP-ML** em PHP. O SVM é um algoritmo de aprendizado de máquina supervisionado que encontra um hiperplano ótimo para separar classes em um espaço de features, maximizando a margem entre elas.

O foco principal é o algoritmo **Support Vector Classifier (SVC)**, implementado pela classe `SVC` da biblioteca PHP-ML, que usa kernels (como RBF) para lidar com dados não lineares.

## Por Que Este Projeto?

- **Aprendizado**: Serve como material de estudo para entender o SVM em PHP.
- **Demonstração**: Mostra como usar SVM para problemas de classificação robusta.
- **Aplicação Prática**: Exemplifica o uso de SVM em cenários como classificação binária ou multiclasse com boa generalização.

## Pra Que Serve?

- Classificar dados novos encontrando a melhor separação entre classes.
- Resolver problemas onde a margem de decisão é importante.
- Analisar datasets onde a linearidade ou kernels ajudam na separação.

## O Que Faz Este Projeto?

O projeto contém exemplos de código que demonstram o uso do SVM:

1. **index01.php**: Treina um modelo SVM com dados de exemplo e prevê a classe para um novo dado.
2. **index02.php**: Similar ao primeiro, mas demonstra previsões para múltiplos dados ou ajustes nos parâmetros do kernel.

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
