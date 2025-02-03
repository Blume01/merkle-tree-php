# 📜 Merkle Tree PHP

![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue)
![License](https://img.shields.io/badge/license-MIT-green)

Uma biblioteca PHP para criar e validar **Merkle Trees**, amplamente usadas em blockchain e segurança de dados.

---

## 🚀 Instalação

Se quiser usar essa biblioteca em seu projeto, instale via [Composer](https://getcomposer.org/):

```sh
composer require blume01/merkle-tree
```

## Exemplo de uso

```php
use MerkleTree\MerkleTree;

// 🔹 Dados para construir a árvore Merkle
$dados = ["bloco1", "bloco2", "bloco3", "bloco4"];

// 🔹 Criando a Merkle Tree
$merkleTree = new MerkleTree($dados);

// 🔹 Obtendo e exibindo a raiz da árvore
echo $merkleTree->getRootHash();
```