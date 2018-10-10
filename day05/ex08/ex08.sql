SELECT last_name, first_name, DATE(birthdate)
FROM db_avan_ni.user_card
WHERE YEAR(birthdate) = 1989
ORDER BY last_name ASC;