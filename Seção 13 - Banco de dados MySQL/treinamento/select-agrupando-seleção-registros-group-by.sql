SELECT
  *
FROM
  tb_alunos
WHERE
  interesse = 'Jogos';

SELECT
  *
FROM
  tb_alunos
WHERE
  interesse = 'Música';

SELECT
  *
FROM
  tb_alunos
GROUP BY
  interesse;

SELECT
  *, count(*)
FROM
  tb_alunos
GROUP BY
  interesse;

SELECT
  interesse, count(*)
FROM
  tb_alunos
GROUP BY
  interesse;

SELECT
  interesse, count(*) AS total_por_interesse
FROM
  tb_alunos
GROUP BY
  interesse;

SELECT
  *
FROM
  tb_alunos
GROUP BY
  estado;

SELECT
  estado, count(*) AS total_por_estado
FROM
  tb_alunos
GROUP BY
  estado;

SELECT
  *
FROM
  tb_alunos
WHERE
  estado = 'ES';
