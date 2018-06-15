START TRANSACTION;

UPDATE cidades c
JOIN estados e ON e.code = c.state_code
SET c.state_id = e.id;

COMMIT;