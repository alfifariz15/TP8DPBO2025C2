# TP8DPBO2025C2
Saya Muhammad Alfi Fariz dengan NIM 2311174 mengerjakan TP 8 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Desain Program
Aplikasi web berbasis PHP untuk mengelola data mahasiswa menggunakan pola arsitektur Model-View-Controller (MVC). Sistem ini mencakup fungsi CRUD (Create, Read, Update, Delete) untuk data mahasiswa, mata kuliah, dan enrollments.

Struktur Direktori MVC nya

![image](https://github.com/user-attachments/assets/86f4672e-754d-44c2-8e9c-d79f7cad37a7)

config/
- database.php        # Konfigurasi koneksi database

controllers/
- CourseController.php # Logika bisnis mata kuliah
- EnrollmentController.php # Logika enrollment
- StudentController.php # Logika bisnis mahasiswa

models/
- Course.php          # Model data mata kuliah
- Enrollment.php      # Model enrollment
- Student.php         # Model data mahasiswa

public/
- index.php           # Front controller

assets/             # File statis
- css/            # File CSS
- js/             # File JavaScript
- index.php           # Front controller

views/
- courses/            # Template mata kuliah
- enrollments/        # Template enrollment
- layouts/            # Template layout
- students/           # Template mahasiswa 

Skema database nya menggunakan tiga tabel utama dengan relasi sebagai berikut:
- students - Menyimpan informasi mahasiswa
- courses - Menyimpan informasi mata kuliah
- enrollments - Tabel penghubung relasi mahasiswa-mata kuliah

# Alur Program
1. Inisialisasi
- Pengguna mengakses aplikasi melalui public/index.php (Front Controller)
- Front Controller memuat controller yang sesuai berdasarkan parameter action

2. Alur Operasi CRUD
- Untuk Mahasiswa:

Request → index.php (Front Controller) → StudentController → Student Model → Database

                                                                   ↓
                                                              Student Views ←

- Untuk Mata Kuliah:

Request → index.php (Front Controller) → CourseController → Course Model → Database

                                                                   ↓
                                                              Course Views ←

- Untuk Enrollment:

Request → index.php (Front Controller) → EnrollmentController → Enrollment Model → Database

                                                                     ↓
                                                             Enrollment Views ←

3. Siklus Permintaan Khas
- Pengguna mengklik link/tombol di view
- Request diarahkan melalui index.php dengan parameter action
- Method controller yang sesuai dipanggil
- Controller berinteraksi dengan model untuk memproses data
- Model melakukan operasi database
- Controller memuat view yang sesuai dengan data
- View merender respon HTML

4. Fitur Utama
- Operasi CRUD lengkap untuk semua entitas
- Pemisahan concern MVC
- Antarmuka responsif berbasis Bootstrap
- Manajemen relasi antara mahasiswa dan mata kuliah

# Dokumentasi ScreenRecord Programnya 

https://github.com/user-attachments/assets/cb5ba615-f137-441c-90e9-2775b98964c4
