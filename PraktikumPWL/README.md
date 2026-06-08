# LAPORAN PRAKTIKUM - WEEK 05 PEMROGRAMAN WEB LANJUT

---

### Identitas Mahasiswa
| Keterangan | Detail |
| :--- | :--- |
| **Nama** | Rani Miftahus Sa'adah |
| **NIM** | 244107020057 |
| **Kelas** | TI-2F |

---
## JOBSHEET WEEK 05 
### JOBSHEET 1 Instalasi dan Setup Filament PHP v4 pada Laravel 11

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>Hasil Praktikum</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/1.1.png)
![Hasil Praktikum](img/1.2.png)

</blockquote>
</details>

<br>

<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Apa kelebihan Filament dibanding membuat admin panel manual?**
<br>
Jawab : 
Filament memiliki kelebihan dibandingkan membuat admin panel secara manual karena mampu mempercepat proses pengembangan dengan menyediakan fitur otomatis seperti CRUD, form, tabel, dan autentikasi tanpa harus membuat semuanya dari awal. Dengan hanya menggunakan perintah artisan, developer sudah bisa mendapatkan struktur admin panel yang lengkap dan siap digunakan. Selain itu, Filament juga memberikan tampilan yang modern, konsisten, serta mudah dikustomisasi sehingga lebih efisien dari segi waktu dan tenaga.

**2. Mengapa Filament menggunakan Livewire?**
<br>
Jawab : 
Filament menggunakan Livewire karena teknologi ini memungkinkan pembuatan antarmuka yang interaktif tanpa perlu banyak menggunakan JavaScript. Livewire bekerja dengan menghubungkan frontend dan backend secara langsung dalam Laravel, sehingga setiap perubahan data dapat diperbarui secara real-time. Hal ini membuat proses pengembangan menjadi lebih sederhana karena developer cukup fokus pada logika backend tanpa perlu membangun API atau menggunakan framework frontend tambahan.

**3. Apa perbedaan SQLite dan MySQL dalam development?**
<br>
Jawab : 
Perbedaan SQLite dan MySQL dalam development terletak pada cara penggunaan dan skalanya. SQLite adalah database ringan yang tidak memerlukan server dan biasanya digunakan untuk tahap pengembangan awal atau testing karena mudah dikonfigurasi. Sedangkan MySQL merupakan database berbasis server yang lebih kompleks namun lebih stabil dan mampu menangani data dalam jumlah besar, sehingga lebih cocok digunakan pada tahap production atau aplikasi skala besar.

**4. Apa fungsi Panel Builder?**
<br>
Jawab : 
Panel Builder pada Filament berfungsi sebagai alat untuk membangun dan mengelola admin panel secara otomatis. Dengan fitur ini, developer dapat mengatur halaman, navigasi, autentikasi, dan tampilan dashboard tanpa harus membuatnya secara manual. Panel Builder membantu mempercepat proses pembuatan admin panel serta memastikan struktur aplikasi lebih rapi, terorganisir, dan mudah dikembangkan.

</blockquote>
</details>

<br>

---

### JOBSHEET 2 Membuat CRUD Resource dengan Filament v4
#### Dokumentasi Praktikum
<br>

<details>
<summary><b>Hasil Praktikum</b></summary>
<br>
<blockquote>

**Menjalankan Aplikasi**
![Hasil Praktikum](img/2.1.png)
![Hasil Praktikum](img/2.2.png)

**Membuat Form Input (Create & Edit)**
![Hasil Praktikum](img/2.3.png)
![Hasil Praktikum](img/2.4.png)
![Hasil Praktikum](img/2.5.png)
![Hasil Praktikum](img/2.6.png)

**Menampilkan Data pada Tabel**
![Hasil Praktikum](img/2.7.png)

**Mengganti Icon Menu Resource**
![Hasil Praktikum](img/2.8.png)
</blockquote>
</details>

<br>

<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Mengapa Filament dapat membuat CRUD tanpa banyak coding?**
<br>
Jawab : 
Filament mampu menghasilkan CRUD secara otomatis karena mengadopsi konsep Resource yang terintegrasi dengan Laravel. Saat pengembang menjalankan perintah php artisan make:filament-resource, Filament akan membaca struktur model dan menghasilkan empat komponen utama: halaman daftar (List), halaman tambah (Create), halaman edit (Edit), serta file-form dan file-tabel yang sudah siap pakai. Di balik layar, Filament memanfaatkan Livewire untuk interaktivitas real-time tanpa perlu menulis JavaScript, serta komponen Form Builder dan Table Builder yang dapat langsung digunakan dengan konfigurasi minimal. Dengan hanya mendefinisikan kolom-kolom yang diperlukan (misalnya name, email, password), sistem secara otomatis membangun tampilan, validasi dasar, serta mekanisme penyimpanan dan pembaruan data. Hal ini mempercepat pengembangan admin panel secara drastis dibandingkan membuat CRUD manual yang memerlukan routing, controller, view, dan logika penyimpanan sendiri.

**2. Apa perbedaan Form Schema dan Table Schema?**
<br>
Jawab : 
Form Schema digunakan untuk menyusun formulir input data pada halaman Create dan Edit. Di dalamnya terdapat komponen-komponen seperti TextInput, Select, FileUpload, yang bertugas mengumpulkan data dari pengguna, dilengkapi dengan aturan validasi (misalnya required, email, unique). Sementara itu, Table Schema digunakan untuk menampilkan data dalam bentuk daftar pada halaman List. Komponen-komponennya seperti TextColumn, ImageColumn, BadgeColumn berfungsi menyajikan data dari database ke dalam tabel interaktif yang mendukung pencarian, pengurutan, filter, dan pemilihan data massal. Intinya, Form Schema berfokus pada cara data dimasukkan dan divalidasi, sedangkan Table Schema berfokus pada cara data ditampilkan dan dieksplorasi. Keduanya bekerja secara independen namun saling melengkapi dalam siklus CRUD.

**3. Bagaimana jika kita ingin menambahkan validasi email unik?**
<br>
Jawab : 

Untuk memastikan email bersifat unik (tidak ada duplikat), kita cukup menambahkan method unique() pada komponen TextInput di Form Schema. Contohnya: TextInput::make('email')->email()->required()->unique('users', 'email'). Validasi ini akan memeriksa tabel users pada kolom email apakah nilai yang dimasukkan sudah ada. Filament secara otomatis menampilkan pesan error jika validasi gagal, tanpa perlu menulis kode validasi manual di controller. Untuk skenario update di mana email milik record yang sedang diedit seharusnya dianggap valid meskipun sama, kita bisa menggunakan unique('users', 'email')->ignore($record). Validasi unik email ini penting untuk menjaga integritas data dan mencegah akun duplikat.

**4. Mengapa password tidak perlu kita hash manual?**
<br>
Jawab : 
Filament menangani hashing password secara otomatis, sehingga pengembang tidak perlu memanggil fungsi bcrypt() atau Hash::make() secara manual. Ketika kita menggunakan komponen TextInput::make('password')->password() pada Form Schema, Filament akan mengenali bahwa field tersebut adalah password dan akan melakukan hashing sebelum menyimpannya ke database. Mekanisme ini biasanya dikelola melalui mutator pada model User (misalnya setPasswordAttribute()) atau karena Filament memanfaatkan fitur casts Laravel. Dengan demikian, kode menjadi lebih bersih, aman, dan konsisten. Selain itu, hashing otomatis juga mengurangi kemungkinan kesalahan manusia seperti lupa mengenkripsi password atau salah menerapkan algoritma hash.

</blockquote>
</details>

<br>

---

### JOBSHEET 3 Membuat Migration, Model, Relasi & Resource Category

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>Hasil Praktikum</b></summary>
<br>
<blockquote>

**Mendesain Tabel Categories**
![Hasil Praktikum](img/3.1.png)

**Membuat Resource Category di Filament**
![Hasil Praktikum](img/3.2.png)
![Hasil Praktikum](img/3.3.png)
![Hasil Praktikum](img/3.4.png)
![Hasil Praktikum](img/3.5.png)

</blockquote>
</details>

<br>

<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Mengapa kita perlu $fillable?**
<br>
Jawab : 
$fillable digunakan untuk menentukan kolom mana saja yang diizinkan untuk diisi secara massal (mass assignment). Hal ini merupakan fitur keamanan Laravel untuk mencegah pengguna mengirimkan data berbahaya (seperti mengubah status is_admin secara ilegal) melalui form input.

**2. Apa fungsi $casts pada Laravel?**
<br>
Jawab : 
Property $casts berfungsi untuk mengkonversi nilai atribut model secara otomatis ke tipe data PHP yang sesuai ketika data diambil dari maupun disimpan ke database. Tanpa casting, semua data yang keluar dari database akan berbentuk string mentah, sehingga harus dikonversi secara manual di setiap bagian kode. Dengan $casts, Laravel menangani konversi tersebut secara otomatis. Sebagai contoh, field tags yang bertipe JSON di database akan otomatis dikonversi menjadi array PHP saat diakses, field published yang bertipe boolean akan otomatis bernilai true atau false, dan field published_at akan otomatis menjadi instance Carbon sehingga dapat langsung dimanipulasi menggunakan method-method tanggal seperti format() atau diffForHumans().

**3. Apa perbedaan integer biasa dengan foreign key?**
<br>
Jawab : 
Integer biasa hanyalah tipe data kolom yang menyimpan angka tanpa memiliki aturan atau ketergantungan terhadap tabel lain. Sedangkan foreign key adalah integer yang secara eksplisit merujuk pada primary key di tabel lain dan dilengkapi dengan constraint di level database. Perbedaan utamanya terletak pada integritas data: foreign key menjamin bahwa nilai yang disimpan di kolom tersebut pasti ada di tabel yang dirujuk, sehingga tidak mungkin memasukkan category_id yang tidak ada di tabel categories. Selain itu, foreign key memungkinkan pengaturan perilaku saat data induk dihapus atau diperbarui, seperti CASCADE, SET NULL, atau RESTRICT. Pada jobsheet ini, category_id masih didefinisikan sebagai integer biasa menggunakan $table->integer('category_id'), sehingga belum memiliki perlindungan integritas tersebut di level database.

**4. Bagaimana jika category dihapus tetapi masih ada post?**
<br>
Jawab : 
Jika category dihapus sementara masih terdapat post yang merujuk pada category tersebut, maka akan timbul masalah integritas data yang disebut orphaned records — yaitu record post yang category_id-nya menunjuk pada category yang sudah tidak ada. Karena pada jobsheet ini category_id belum didefinisikan sebagai foreign key sesungguhnya, penghapusan category tidak akan menimbulkan error di level database, namun ketika aplikasi mencoba mengakses relasi category dari post tersebut maka hasilnya akan null dan berpotensi menyebabkan error pada tampilan. Untuk mengatasi hal ini, terdapat beberapa solusi yang bisa diterapkan, di antaranya adalah mengubah category_id menjadi foreign key dengan constraint ON DELETE CASCADE agar post ikut terhapus ketika category dihapus, atau menggunakan ON DELETE SET NULL agar category_id menjadi null, atau menambahkan validasi di level aplikasi untuk mencegah penghapusan category yang masih memiliki post terkait.

</blockquote>
</details>

<br>

--- 

## JOBSHEET WEEK 06 
### JOBSHEET 1 – Implementasi Form Elements & Resource Post di Filament

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>1. Membuat Resource Post</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/6.1.1.png)
![Hasil Praktikum](img/6.1.2.png)

</blockquote>
</details>

<br>

<details>
<summary><b>2. Implementasi Form Elements</b></summary>
<br>
<blockquote>

*a. Text Input (Title&Slug)*
![Hasil Praktikum](img/6.1.3.png)

*b. Select (Relasi Category)*
![Hasil Praktikum](img/6.1.4.png)

*c. Color Picker*
![Hasil Praktikum](img/6.1.5.png)

*d. Markdown*
![Hasil Praktikum](img/6.1.6.png)

*e. RichEditor*
![Hasil Praktikum](img/6.1.7.png)

*f. File Upload (Image)*
![Hasil Praktikum](img/6.1.8.png)
![Hasil Praktikum](img/6.1.9.png)

*g. Tags Input*
![Hasil Praktikum](img/6.1.10.png)

*h. Checkbpx (Published)*
![Hasil Praktikum](img/6.1.11.png)

*i. Date Picker (Published At)*
![Hasil Praktikum](img/6.1.12.png)

</blockquote>
</details>

<br>

<details>
<summary><b>3. Menampilkan Data di Tabel</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/6.1.13.png)
![Hasil Praktikum](img/6.1.14.png)
![Hasil Praktikum](img/6.1.15.png)

</blockquote>
</details>

<br>
<br>
<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

*1. Mengapa kita perlu storage:link?*
<br>
Jawab : 
Secara default, Laravel menyimpan file yang diunggah (seperti gambar post) di dalam folder storage/app/public, yang mana folder ini tidak dapat diakses secara langsung melalui browser demi keamanan. Perintah php artisan storage:link berfungsi untuk membuat symbolic link (pintasan) dari folder public/storage ke storage/app/public. Dengan adanya link ini, file yang tersimpan di direktori internal storage dapat diakses dan ditampilkan oleh aplikasi web melalui URL publik.

*2. Apa fungsi $casts untuk field JSON?*
<br>
Jawab : 
Properti $casts pada model Laravel digunakan untuk mengubah tipe data field saat data disimpan atau diambil dari database secara otomatis. Untuk field bertipe JSON (seperti field tags), kita perlu melakukan cast ke tipe array. Hal ini dilakukan agar data JSON yang tersimpan sebagai string di database dapat langsung diolah sebagai struktur data array di dalam kode PHP (Filament), sehingga komponen seperti TagsInput dapat berfungsi dengan benar.

*3. Mengapa kita menggunakan category.name bukan category_id?*
<br>
Jawab : 
Penggunaan category.name pada tabel bertujuan agar data yang ditampilkan lebih komunikatif bagi pengguna (user-friendly). Jika kita menggunakan category_id, tabel hanya akan menampilkan angka ID yang sulit dipahami. Dengan memanggil relasi category.name, Filament akan mengambil nama kategori dari tabel terkait (relasi belongsTo) sehingga informasi yang muncul adalah nama kategori yang sebenarnya (misal: "Laravel" atau "PHP").

*4. Apa perbedaan RichEditor dan MarkdownEditor?*
<br>
Jawab : 
Meskipun keduanya digunakan untuk mengolah konten teks panjang, perbedaannya terletak pada format penyimpanan dan antarmukanya:
- MarkdownEditor: Digunakan untuk menulis teks dengan sintaks Markdown (seperti # untuk judul, ** untuk tebal). Data yang disimpan di database adalah teks mentah beserta kode Markdown tersebut.

- RichEditor: Merupakan editor WYSIWYG (What You See Is What You Get) yang memungkinkan pengguna memformat teks secara langsung melalui tombol-tombol (seperti MS Word). Data yang disimpan biasanya berupa tag HTML (seperti ,< b > atau < h1 >)

</blockquote>
</details>

<br>

---

## JOBSHEET WEEK 06 
### JOBSHEET 1 – Implementasi Form Elements & Resource Post di Filament

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>1. Membuat Resource Post</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/6.1.1.png)
![Hasil Praktikum](img/6.1.2.png)

</blockquote>
</details>

<br>

<details>
<summary><b>2. Implementasi Form Elements</b></summary>
<br>
<blockquote>

**a. Text Input (Title&Slug)**
![Hasil Praktikum](img/6.1.3.png)

**b. Select (Relasi Category)**
![Hasil Praktikum](img/6.1.4.png)

**c. Color Picker**
![Hasil Praktikum](img/6.1.5.png)

**d. Markdown**
![Hasil Praktikum](img/6.1.6.png)

**e. RichEditor**
![Hasil Praktikum](img/6.1.7.png)

**f. File Upload (Image)**
![Hasil Praktikum](img/6.1.8.png)
![Hasil Praktikum](img/6.1.9.png)

**g. Tags Input**
![Hasil Praktikum](img/6.1.10.png)

**h. Checkbpx (Published)**
![Hasil Praktikum](img/6.1.11.png)

**i. Date Picker (Published At)**
![Hasil Praktikum](img/6.1.12.png)

</blockquote>
</details>

<br>

<details>
<summary><b>3. Menampilkan Data di Tabel</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/6.1.13.png)
![Hasil Praktikum](img/6.1.14.png)
![Hasil Praktikum](img/6.1.15.png)

</blockquote>
</details>

<br>
<br>
<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Mengapa kita perlu storage:link?**
<br>
Jawab : 
Secara default, Laravel menyimpan file yang diunggah (seperti gambar post) di dalam folder storage/app/public, yang mana folder ini tidak dapat diakses secara langsung melalui browser demi keamanan. Perintah php artisan storage:link berfungsi untuk membuat symbolic link (pintasan) dari folder public/storage ke storage/app/public. Dengan adanya link ini, file yang tersimpan di direktori internal storage dapat diakses dan ditampilkan oleh aplikasi web melalui URL publik.

**2. Apa fungsi $casts untuk field JSON?**
<br>
Jawab : 
Properti $casts pada model Laravel digunakan untuk mengubah tipe data field saat data disimpan atau diambil dari database secara otomatis. Untuk field bertipe JSON (seperti field tags), kita perlu melakukan cast ke tipe array. Hal ini dilakukan agar data JSON yang tersimpan sebagai string di database dapat langsung diolah sebagai struktur data array di dalam kode PHP (Filament), sehingga komponen seperti TagsInput dapat berfungsi dengan benar.

**3. Mengapa kita menggunakan category.name bukan category_id?**
<br>
Jawab : 
Penggunaan category.name pada tabel bertujuan agar data yang ditampilkan lebih komunikatif bagi pengguna (user-friendly). Jika kita menggunakan category_id, tabel hanya akan menampilkan angka ID yang sulit dipahami. Dengan memanggil relasi category.name, Filament akan mengambil nama kategori dari tabel terkait (relasi belongsTo) sehingga informasi yang muncul adalah nama kategori yang sebenarnya (misal: "Laravel" atau "PHP").

**4. Apa perbedaan RichEditor dan MarkdownEditor?**
<br>
Jawab : 
Meskipun keduanya digunakan untuk mengolah konten teks panjang, perbedaannya terletak pada format penyimpanan dan antarmukanya:
- MarkdownEditor: Digunakan untuk menulis teks dengan sintaks Markdown (seperti # untuk judul, ** untuk tebal). Data yang disimpan di database adalah teks mentah beserta kode Markdown tersebut.

- RichEditor: Merupakan editor WYSIWYG (What You See Is What You Get) yang memungkinkan pengguna memformat teks secara langsung melalui tombol-tombol (seperti MS Word). Data yang disimpan biasanya berupa tag HTML (seperti ,< b > atau < h1 >)

</blockquote>
</details>

<br>

---

### JOBSHEET 2 Custom Layout Form dengan Section & Group di Filament

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>1. Mengatur Layout Dasar dengan Column</b></summary>
<br>
<blockquote>

**a. Membuat 3 field dalam satu baris**
![Hasil Praktikum](img/6.2.1.png)
**b. Membuat layout yang berbeda**
![Hasil Praktikum](img/6.2.2.png)

</blockquote>
</details>

<br>

<details>
<summary><b>2. Menggunakan Section</b></summary>
<br>
<blockquote>

**a. Membuat Section "Post Details"**
![Hasil Praktikum](img/6.2.3.png)
**b. Membuat Section Meta Data**
![Hasil Praktikum](img/6.2.4.png)

</blockquote>
</details>

<br>

<details>
<summary><b>3. Menggunakan Group untuk Layout Horizontal</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/6.2.5.png)
![Hasil Praktikum](img/6.2.6.png)

</blockquote>
</details>

<br>

<details>
<summary><b>4. Mengatur Lebar Field Individual</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/6.2.6.png)

</blockquote>
</details>

<br>

<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Mengapa layout form penting dalam aplikasi admin?**
<br>
Jawab : 
Layout form yang baik sangat penting dalam aplikasi admin karena mempengaruhi efisiensi dan kenyamanan pengguna saat mengelola data. Dengan layout yang terstruktur, pengguna dapat dengan mudah menemukan field yang dibutuhkan tanpa harus scroll terlalu jauh. Selain itu, pengelompokan field yang logis menggunakan Section membantu pengguna memahami konteks setiap input, misalnya memisahkan antara informasi utama post, upload gambar, dan meta informasi. Layout yang rapi juga mengurangi kemungkinan kesalahan input karena field yang berkaitan diletakkan berdekatan, sehingga meningkatkan produktivitas administrator dalam mengelola konten aplikasi.

**2. Apa perbedaan Section dan Group?**
<br>
Jawab : 
Section dan Group sama-sama digunakan untuk mengatur tata letak form, namun memiliki perbedaan mendasar. Section menampilkan tampilan visual berupa kotak dengan judul, deskripsi, dan ikon yang terlihat jelas oleh pengguna, sehingga cocok digunakan untuk mengelompokkan field secara semantik agar pengguna tahu field mana yang saling berkaitan. Sementara itu, Group tidak memiliki tampilan visual apapun — tidak ada kotak, judul, maupun border. Group hanya berfungsi sebagai wadah tersembunyi untuk mengatur posisi dan lebar elemen secara horizontal menggunakan columnSpan(). Singkatnya, Section untuk pengelompokan yang terlihat pengguna, sedangkan Group untuk pengaturan layout yang tidak terlihat pengguna.

**3. Kapan kita menggunakan columnSpanFull()?**
<br>
Jawab : 
columnSpanFull() digunakan ketika sebuah field perlu mengambil seluruh lebar yang tersedia dalam grid, tanpa peduli berapa banyak kolom yang didefinisikan. Ini cocok diterapkan pada field yang membutuhkan ruang lebar seperti MarkdownEditor atau RichEditor untuk konten artikel, TextArea untuk deskripsi panjang, dan FileUpload yang membutuhkan area drag-and-drop yang luas. Pada jobsheet ini, MarkdownEditor::make('content')->columnSpanFull() digunakan agar editor konten memanjang penuh di bawah field Title, Slug, Category, dan Color yang tersusun 2 kolom, sehingga ruang menulis menjadi lebih lega dan nyaman.

**4. Apa keuntungan sistem grid 12 kolom?**
<br>
Jawab : 
Sistem grid 12 kolom memberikan fleksibilitas tinggi dalam mengatur tata letak form karena angka 12 dapat dibagi habis oleh banyak angka, yaitu 1, 2, 3, 4, 6, dan 12. Hal ini memungkinkan developer membuat berbagai variasi layout seperti 2 kolom sama rata (6+6), 3 kolom sama rata (4+4+4), layout asimetris seperti yang digunakan pada jobsheet ini (2/3 kiri + 1/3 kanan menggunakan columnSpan(2) dan columnSpan(1) dalam columns(3)), hingga layout 4 kolom (3+3+3+3). Sistem ini diadopsi dari framework CSS seperti Tailwind dan Bootstrap, sehingga developer yang sudah familiar dengan konsep grid CSS dapat langsung memahami dan menerapkannya di Filament dengan mudah.

</blockquote>
</details>

<br>

---

### JOBSHEET 3 Implementasi Form Validation pada Filament

#### Dokumentasi Praktikum
<br>

<details>
<summary><b>1. Menambahkan Validasi</b></summary>
<br>
<blockquote>

**a. Menggunakan Method required()**
![Hasil Praktikum](img/6.3.1.png)

**b. Menggunakan rule()**
![Hasil Praktikum](img/6.3.2.png)

**c. Menggunakan rules() (Multiple Validation) Format String (Pipe)**
![Hasil Praktikum](img/6.3.3.png)

**d. Menggunakan rules() (Multiple Validation) Format Array**
![Hasil Praktikum](img/6.3.4.png)


</blockquote>
</details>

<br>

<details>
<summary><b>2. Validasi Unique</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/6.3.5.png)

</blockquote>
</details>

<br>

<details>
<summary><b>3. Mengganti Pesan Error (Custom Message)</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/6.3.6.png)

</blockquote>
</details>

<br>

<details>
<summary><b>4. Validasi Lengkap Post</b></summary>
<br>
<blockquote>

![Hasil Praktikum](img/6.3.7.png)

</blockquote>
</details>

<br>

<details>
<summary><b>Analisis & Diskusi</b></summary>
<br>
<blockquote>

**1. Mengapa validasi penting pada admin panel?**
<br>
Jawab : 
Validasi sangat penting pada admin panel karena data yang diinput oleh administrator akan langsung tersimpan ke database dan mempengaruhi keseluruhan sistem. Tanpa validasi, data yang tidak valid seperti judul kosong, slug duplikat, atau gambar yang tidak diunggah dapat menyebabkan error pada aplikasi, tampilan yang rusak, atau bahkan celah keamanan. Selain itu, validasi memastikan integritas data tetap terjaga sehingga aplikasi dapat berjalan dengan baik. Pada Filament, validasi terintegrasi langsung dengan sistem validasi Laravel sehingga developer tidak perlu menulis logika validasi secara terpisah di controller, melainkan cukup mendefinisikannya langsung pada komponen form.

**2. Apa perbedaan validasi client-side dan server-side?**
<br>
Jawab : 
Validasi client-side adalah validasi yang dilakukan di sisi browser sebelum data dikirim ke server, biasanya menggunakan HTML5 (seperti atribut required, maxlength) atau JavaScript. Validasi ini memberikan respons yang cepat kepada pengguna tanpa perlu menunggu respon dari server, namun kelemahannya adalah dapat dilewati oleh pengguna yang menonaktifkan JavaScript atau memanipulasi request secara langsung. Sementara itu, validasi server-side dilakukan di sisi server setelah data dikirim, seperti validasi yang diterapkan pada Filament menggunakan aturan Laravel. Validasi ini jauh lebih aman karena tidak dapat dimanipulasi dari sisi pengguna. Oleh karena itu, best practice dalam pengembangan aplikasi adalah menggabungkan keduanya — client-side untuk kenyamanan pengguna dan server-side untuk keamanan data.
**3. Mengapa unique otomatis bekerja saat edit data?**
<br>
Jawab : 
Filament secara cerdas menangani validasi ->unique() pada saat edit data dengan mengecualikan record yang sedang diedit dari pengecekan keunikan. Hal ini dilakukan karena ketika pengguna mengedit sebuah post tanpa mengubah slug-nya, nilai slug tersebut sudah ada di database milik record yang sama. Jika tidak ada pengecualian, validasi unique akan selalu gagal meskipun pengguna tidak mengubah apapun. Filament secara otomatis menambahkan klausa ignore berdasarkan primary key record yang sedang diedit, sehingga validasi hanya akan gagal jika slug yang diinput sudah digunakan oleh record lain, bukan oleh record itu sendiri.

**4. Kapan kita perlu menggunakan rules array dibanding string?**
<br>
Jawab : 
- String ('required|min:5|max:255'): Digunakan untuk validasi yang sederhana dan standar. Lebih ringkas dan mudah dibaca untuk aturan yang pendek.

- Array (['required', 'min:5', new CustomRule]): Digunakan ketika validasi menjadi lebih kompleks, misalnya ketika kita menyertakan Custom Validation Rule (objek kelas), menggunakan logika kondisional, atau jika aturan validasi mengandung karakter pipa (|) di dalamnya yang bisa membingungkan parser string Laravel.

</blockquote>
</details>

<br>

---