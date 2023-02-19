SELECT
  *
FROM
  tb_alunos
WHERE
  nome = 'Evelyn';

-- % semelhante ao * no Word
-- cadeia de caracteres

SELECT
  *
FROM
  tb_alunos
WHERE
  nome LIKE '%ne';

SELECT
  *
FROM
  tb_alunos
WHERE
  nome LIKE '%a%';

SELECT
  *
FROM
  tb_alunos
WHERE
  nome LIKE 'C%';

-- _ semelhante ao ? no Word
-- único caracter

SELECT
  *
FROM
  tb_alunos
WHERE
  nome LIKE '_riel';

SELECT
  *
FROM
  tb_alunos
WHERE
  nome LIKE '_ru_';

SELECT
  *
FROM
  tb_alunos
WHERE
  nome LIKE 'I__';
