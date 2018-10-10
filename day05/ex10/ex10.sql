SELECT 
	title AS 'Title',
	summary AS 'Summary',
	prod_year
FROM 
	db_avan_ni.film
INNER JOIN 
	genre on genre.id_genre = film.id_genre
WHERE 
	genre.name = 'erotic'
ORDER BY 
	prod_year DESC;