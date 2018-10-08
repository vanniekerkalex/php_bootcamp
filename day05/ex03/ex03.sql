USE db_avan_ni;
INSERT INTO ft_table (login, usr_group, creation_date)
SELECT last_name, birthdate
FROM user_card
WHERE last_name LIKE '%a%' AND LENGTH(last_name) < 9
LIMIT 10 ORDER BY last_name asc;


SELECT last_name, birthdate
FROM user_card
WHERE last_name LIKE '%a%' AND LENGTH(last_name) < 9
ORDER BY last_name ASC
LIMIT 10;