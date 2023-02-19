UPDATE
  tb_alunos
SET
  nome = 'João'
WHERE
  id_aluno = '13';

SELECT
  *
FROM
  tb_alunos
WHERE
  idade >= 80;

UPDATE
  tb_alunos
SET
  interesse = 'Saúde'
WHERE
  idade >= 80;

SELECT
  *
FROM
  tb_alunos
WHERE
  idade >= 80;

UPDATE
  tb_alunos
SET
  nome = 'José', idade = 25, email = 'jose@gmail.com'
WHERE
  id_aluno = '18';

SELECT
  *
FROM
  tb_alunos
WHERE
  idade BETWEEN 18 AND 25 AND estado = 'PA';

UPDATE
  tb_alunos
SET
  nome = 'Maria'
WHERE
  idade BETWEEN 18 AND 25 AND estado = 'PA';

SELECT
  *
FROM
  tb_alunos
WHERE
  idade BETWEEN 18 AND 25 AND estado = 'PA';
