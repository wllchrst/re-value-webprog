# Laporan Projek Re - Value

### HOW TO RUN CODE?
#### Requirements

-   php and composer
-   xampp for my sql

#### STEPS

1. Configure the env files (create new new file in the root directory ".env")
2. Change the database configuration to suit yours (below is mine for example just change the part i copy below)

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=re-value
DB_USERNAME=root
DB_PASSWORD=password

3. on the terminal run "composer install"
4. on the terminal run "php artisan migrate"
5. on the terminal run "php artisan key:generate"
6. on the terminal run "php artisan serve"
7. Open the website based on the port in localhost

### Anggota Kelompok
1. 2602150270 - Adila Nashira Yuhanas, Jobdesc: Membangun Front-End website Re - Value dan Menyusun laporan proyek
2. 2602083833 - Farren Flair, Jobdesc: Membangun Front-End website Re - Value dan Menyusun laporan proyek
3. 2602136165 - William Christian, Jobdesc: Membangun Front-End website Re - Value, Mengembangkan Back-End website Re - Value, Melakukan deployment website Re - Value, dan Menyusun laporan proyek
4. 2602061776 - Yossy Frenlie Lo, Jobdesc: Membangun Front-End website Re - Value dan Menyusun laporan proyek

### Penjelasan Terkait SDG
Sustainable Development Goals (SDG) yang kami pilih adalah SDG 12 yaitu Responsible Consumption and Production yang berfokus pada memastikan pola konsumsi dan produksi yang berkelanjutan. Tujuannya adalah untuk menjaga lingkungan dengan mengurangi limbah, meningkatkan efisiensi sumber daya, dan mendorong penggunaan ulang dan daur ulang barang. Kita dapat mendukung keberlanjutan sumber daya bumi untuk generasi mendatang dengan menerapkan pola konsumsi dan produksi yang bertanggung jawab.

#### Deskripsi Website
Website yang kami kembangkan mendukung SDG 12 dengan menyediakan platform berbasis online store bernama Re - Value yang berfokus pada promosi dan praktik daur ulang. Berikut adalah fitur utama dari website ini:
- Penjualan produk daur ulang
- Fitur penjualan barang bekas oleh user
- Sistem poin sebagai insentif

#### Manfaat website untuk mendukung SDG 12
1. Mengurangi limbah: Platform ini mendaur ulang limbah menjadi produk berguna, memungkinkan pengalihannya dari tempat pembuangan akhir.
2. Meningkatkan kesadaran: Platform ini mendorong orang untuk lebih sadar tentang pentingnya daur ulang dan konsumsi yang bertanggung jawab.
3. Membangun ekosistem sirkular: Platform ini membangun sistem ekonomi sirkular yang lebih berkelanjutan dengan memungkinkan pengguna menjual dan membeli barang bekas.

### Link Domain Web
Berikut link domain website Re - Value:
https://re-value-webprog.vercel.app/ 

### Struktur ERD Database
Berikut ERD dari platform Re - Value: 
https://drive.google.com/drive/folders/1XFWfdz2Bja7WbBqCJbms1zc0mrt4tBVi?usp=sharing

### Tampilan, Struktur, dan Fungsi Laman Website
Berikut Laporan Platform Re - Value versi Google Docs: 
https://docs.google.com/document/d/1dFTs3E4zTvFMZA1ZVpa5n26EgxjMsAZVKxxbuIdOZq8/edit?usp=sharing

Berikut screenshot dari tampilan platform Re - Value: 
https://drive.google.com/drive/folders/1XFWfdz2Bja7WbBqCJbms1zc0mrt4tBVi?usp=sharing

#### Home Page
Pada page Home, pengguna akan melihat tampilan utama dari website Re-Value yang bertujuan untuk memperkenalkan layanan dan produk yang tersedia. Di bagian atas, terdapat slogan "Turn Waste Into Worth" yang menjelaskan visi Re-Value dalam mengubah limbah menjadi peluang bernilai. Ada dua tombol utama, yaitu See Product untuk melihat daftar produk dan See Item untuk eksplorasi lebih lanjut.

Selanjutnya, terdapat bagian Re-Value can do it all yang menjelaskan tiga fitur utama:
- Recycled Products: Membeli produk ramah lingkungan dari bahan daur ulang.
- Sell Used Items: Menjual barang bekas seperti botol, kardus, dan kaleng untuk mendapatkan poin.
- Earn Points for Recycling: Mengumpulkan poin.

Pada bagian Our Products, pengguna dapat melihat daftar produk yang tersedia, lengkap dengan kategori, harga, stok, dan tombol Buy Now untuk melakukan pembelian. Halaman ini juga menyediakan navigasi pagination di bagian bawah untuk menjelajahi lebih banyak produk yang tersedia.

#### Register Page
Pada page Register akan ditampilkan sebuah form berisi email address, full name, password, description (optional), dan image yang harus diisi oleh user. Kemudian, ada button register yang akan mendaftarkan user dan memberi akses kepada user untuk masuk ke dalam website Re-Value. Selain itu, ada button Login yang dapat digunakan user untuk direct ke Login Page dan melakukan Login jika sudah memiliki akun yang telah didaftarkan dalam website Re-Value.

#### Login Page
Pada page Login akan ditampilkan form yang berisi email address dan password yang harus diisi oleh user sesuai dengan email dan password yang telah mereka registrasi sebelumnya. Kemudian, ada button Login yang akan direct user langsung ke Home Page. Selain itu, ada button Register yang dapat digunakan user untuk membuat akun di website Re-Value.

#### Product Page
Pada page Product akan ditampilkan product-product recycle yang tersedia dan dapat dibeli oleh user.

#### Product Detail Page
Product Detail Page dapat dilihat dengan cara mengklik button Buy Now pada product yang ingin dilihat. Page ini akan menampilkan detail dari product seperti yang tertera pada gambar, dan ada button Buy untuk membeli dan Back untuk kembali ke page sebelumnya.

#### Item Page
Pada page Item akan ditampilkan item-item barang bekas yang dijual oleh user kepada seller dalam website Re-Value.

#### Item Detail Page
Item Detail Page dapat dilihat dengan cara mengklik button Buy Now pada item yang ingin dilihat. Page ini akan menampilkan detail dari item seperti yang tertera pada gambar, dan ada button Buy untuk membeli dan Back untuk kembali ke page sebelumnya.

#### Profile Page
Di Profile Page, terdapat foto profil, nama, email, about me, button untuk user menambahkan product, dan button untuk user menambahkan item. User juga dapat melihat poin yang didapatkan dari membeli item ataupun product di website Re-value.

#### Create Product Form
Create Product Form ini akan muncul ketika user mengklik button Create Product pada Profile Page. Form ini berfungsi untuk menginput informasi-informasi mengenai recycle product yang ingin dijual.  

#### Create Item Form
Create Item Form akan muncul ketika user mengklik button Create Item pada Profile Page. Form ini berfungsi untuk menginput informasi-informasi mengenai barang bekas yang ingin dijual oleh user.


### Deskripsi Fitur Utama
Berikut penjelasan mengenai fitur utama pada platform Re -Value:
1. Penjualan produk daur ulang: Re - Value menjual barang yang dibuat dari bahan daur ulang. Semua produk ini berasal dari bahan bekas yang telah diproses dengan cara yang memaksimalkan pemanfaatan sumber daya, meningkatkan nilai, dan mengurangi limbah.
2. Fitur penjualan barang bekas oleh user: Re - Value memungkinkan pengguna menjual barang bekas seperti kain bekas, botol plastik, atau barang lain yang dapat didaur ulang. Barang - barang ini dikumpulkan dan diproses oleh pihak Re - Value atau produsen.
3. Sistem poin sebagai insentif: Untuk mendorong partisipasi aktif, penjual barang bekas akan mendapatkan poin, yang dapat digunakan untuk mendapatkan diskon saat membeli barang daur ulang online atau ditukarkan dengan hadiah tertentu.


