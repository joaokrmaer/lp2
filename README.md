# lp2

Landing page do I Simpósio Brasileiro de Neuromonitorização Veterinária, Anestesia
e Neurologia, 20 e 21 de novembro de 2026, Faculdade UFAPE.

PHP puro, sem framework e sem dependência: a página monta a partir dos arrays de
`includes/dados.php` (preços, lotes, ids do carrinho) e `includes/conteudo.php`
(programação, corpo docente, dúvidas).

## Rodar local

```
php -S localhost:8000
```

## Publicar no site da faculdade

A página roda dos dois jeitos e decide sozinha qual cabeçalho usar: solta numa
pasta do Apache, usa `includes/header.php`; como view do CodeIgniter, detecta o
`site_url()` e usa `includes/header-sistema.php`, com o cabeçalho e o rodapé
institucionais. A pasta de publicação fica em `PASTA_NO_SITE`.

## Antes de abrir as inscrições

- `LOTE_VIGENTE` precisa ser trocado no mesmo dia em que os valores mudam no
  carrinho: a página não pode anunciar preço diferente do que o checkout cobra.
- A página vende só o simpósio, produto 68634 "Simpósio Brasileiro de
  Neuromonitorização Veterinária" no carrinho, conferido a R$ 400,00 no 1º lote
  em 25/09/2026. Na virada do lote, ele precisa ser atualizado lá junto com
  `LOTE_VIGENTE` aqui. O workshop saiu da página; os produtos 68631 (combo) e
  68633 (workshop) seguem no carrinho e precisam ser despublicados lá.
- O cupom de aluno e ex-aluno precisa dar os 20% de `DESCONTO_EX_ALUNO`, que é o
  que a página anuncia. No simpósio isso é R$ 320,00 no 1º lote e R$ 400,00 no 2º.
