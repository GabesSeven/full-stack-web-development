SELECT
  *
FROM
  tb_produtos LEFT JOIN tb_descricoes_tecnicas ON (tb_produtos.id_produto = tb_descricoes_tecnicas.id_produto);

SELECT
  *
FROM
  tb_produtos AS tabela1 LEFT JOIN tb_descricoes_tecnicas AS tabela2 ON (tabela1.id_produto = tabela2.id_produto);

SELECT
  tabela1.id_produto,
  tabela1.produto,
  tabela1.valor,
  tabela2.descricao_tecnica
FROM
  tb_produtos AS tabela1 LEFT JOIN tb_descricoes_tecnicas AS tabela2 ON (tabela1.id_produto = tabela2.id_produto);

SELECT
  tabela1.id_produto,
  tabela1.produto,
  tabela1.valor,
  tabela2.descricao_tecnica
FROM
  tb_produtos AS tabela1 LEFT JOIN tb_descricoes_tecnicas AS tabela2 ON (tabela1.id_produto = tabela2.id_produto)
WHERE
  tabela1.valor >= 500;

SELECT
  tabela1.id_produto,
  tabela1.produto,
  tabela1.valor,
  tabela2.descricao_tecnica
FROM
  tb_produtos AS tabela1 LEFT JOIN tb_descricoes_tecnicas AS tabela2 ON (tabela1.id_produto = tabela2.id_produto)
WHERE
  tabela1.valor >= 500
ORDER BY
  tabela1.valor ASC;
