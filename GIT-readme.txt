1. Apliaksi menggunakan Framework Lumen

2. Aktifkan lumen menggunakan perintah berikut :
			
	php -S localhost:8000 -t public
			

3. Untuk memastikan composer update (pada git terdapat bbrp file tidak tercommit) ketikkan perintah berikut : 
			
	composer update
			

4. Untuk detail penggunaan aplikasi bisa lihat pada file DOKUMENTASI API DAN TATA CARA PENGGUNAAN.docx

5. Untuk import database bisa menggunakan printah 

	php artisan migrate
	
   Atau dapat menggunakan file todoapp.sql dan import ke database mysql

6. Untuk rote list yang digunakan 
	
	Route List
		
	- GET /todo => return semua record.
		
	- GET /todo/done/?username=<username> => return todo user yang sudah dikerjakan.
		
	- GET /todo/priority/?username=<username>&order=<asc|desc> => return todo list user diurut berdasarkan prioritas.
		
	- POST /todo => simpan ke db.
		
	- PUT /todo/{id}/update => update todo berdasarkan id record.
		
	- DELETE /todo/{id}/delete => hapus todo berdasarkan id record.
