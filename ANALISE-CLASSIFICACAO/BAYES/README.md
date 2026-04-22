# Análise de Classificação com K-Nearest Neighbors (KNN) usando PHP-ML

## Descrição do Projeto

Este projeto é um estudo prático sobre **Classificação usando K-Nearest Neighbors (KNN)** utilizando a biblioteca **PHP-ML** em PHP. O KNN é um algoritmo de aprendizado de máquina supervisionado baseado em instância, que classifica novos dados com base na maioria dos k vizinhos mais próximos no espaço de features.

O foco principal é o algoritmo **K-Nearest Neighbors**, implementado pela classe `KNearestNeighbors` da biblioteca PHP-ML, que calcula distâncias (geralmente Euclidiana) para determinar a classe mais provável.

## Por Que Este Projeto?

- **Aprendizado**: Serve como material de estudo para entender o KNN em PHP.
- **Demonstração**: Mostra como usar KNN para problemas de classificação simples.
- **Aplicação Prática**: Exemplifica o uso de KNN em cenários como classificação de tamanhos ou outras categorias baseadas em proximidade.

## Pra Que Serve?

- Classificar dados novos com base em similaridade com dados de treinamento.
- Resolver problemas onde a decisão depende de vizinhos próximos.
- Analisar datasets pequenos onde algoritmos paramétricos podem falhar.

## O Que Faz Este Projeto?

O projeto contém exemplos de código que demonstram o uso do KNN:

1. **index01.php**: Treina um modelo KNN com dados de exemplo e prevê a classe para um novo dado.
2. **index02.php**: Similar ao primeiro, mas demonstra previsões para múltiplos dados ou ajustes no parâmetro k.

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
