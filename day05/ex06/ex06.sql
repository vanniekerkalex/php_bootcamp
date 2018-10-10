SELECT title, summary
FROM db_avan_ni.`film`
WHERE summary
LIKE '%Vincent%'
ORDER BY id_film ASC;