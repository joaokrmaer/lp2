# lp2

Landing page do Workshop de Neuromonitorização Veterinária, do I Simpósio Brasileiro
de Neuromonitorização Veterinária, Anestesia e Neurologia, 20 e 21 de novembro de
2026 (sexta teórica, sábado prático), Faculdade UFAPE. A programação segue o
planejamento da coordenação em NeuroVet_Workshop_Planejamento_Sexta_Teoria_Sabado_Pratica_2026.docx.

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
- A página vende só o workshop, produto 68633 "Workshop Neuromonitorização" no
  carrinho. Em 22/10/2026 a página passou a anunciar R$ 1.250,00 também no 1º
  lote (antes R$ 950,00); o produto no carrinho precisa cobrar o mesmo valor.
  Na virada do lote, ele precisa ser atualizado lá junto com `LOTE_VIGENTE` aqui. O simpósio saiu
  da página; o produto 68631 (combo) segue no carrinho.
- O card "Workshop Transmitido + Gravado" (R$ 450,00) usa o produto 68634, que
  no carrinho era o do simpósio isolado a R$ 400,00. O nome e o valor do
  produto precisam ser atualizados lá para bater com a página.
- O cupom de aluno e ex-aluno precisa dar os 20% de `DESCONTO_EX_ALUNO`, que é o
  que a página anuncia. No workshop isso é R$ 1.000,00 nos dois lotes.
