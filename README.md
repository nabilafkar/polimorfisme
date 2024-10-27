
#KONSEP POLIMORFISME
Konsep Polimorfisme di Apliksai ini memungkinkan satu model, seperti Comment, untuk berelasi dengan berbagai model lain (Post dan Video) menggunakan relasi yang sama. Dalam contoh ini:

-Comment Model menggunakan morphTo sehingga setiap komentar bisa merujuk ke Post atau Video.
-Post dan Video Models menggunakan morphMany untuk menampung banyak komentar melalui satu relasi polimorfik.
-Tabel comments memiliki kolom commentable_id dan commentable_type untuk menyimpan ID dan tipe model terkait (Post atau Video).
