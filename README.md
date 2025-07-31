# TaskX - Web Development Portfolio

[![GitHub](https://img.shields.io/badge/GitHub-roestmn-blue?style=flat-square&logo=github)](https://github.com/roestmn)
[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat-square&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat-square&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white)](https://www.php.net/)

Kumpulan project web development yang dibuat untuk belajar dan praktek programming. Repository ini berisi berbagai aplikasi web menggunakan HTML, CSS, JavaScript, dan PHP.

## 📁 Struktur Project

### 🔐 **Sistem Autentikasi**
- **`HTML_registrasi/`** - Sistem Login & Register dengan Glass Effect UI
- **`login.html`** - Form login dan registrasi dengan validasi lengkap

### 🧮 **Aplikasi Kalkulator & Logic**
- **`arimetika.html`** - Kalkulator aritmatika dasar
- **`loopingjs.html`** - Pencari bilangan ganjil/genap dengan range
- **`phpPenjumlahan.php`** - Kalkulator penjumlahan menggunakan PHP

### 🎓 **Sistem Evaluasi**
- **`kelulusan.html`** - Sistem penentuan kelulusan berdasarkan nilai
- **`hakPilih.html`** - Aplikasi sistem pemilihan/voting

### 💰 **Aplikasi Bisnis**
- **`kasir.html`** - Sistem kasir sederhana
- **`menu.html`** - Interface menu aplikasi

### 🗄️ **Database & Backend**
- **`PHP_CRUD/`** - Sistem CRUD dengan PHP dan MySQL
  - `koneksi.php` - Koneksi database
  - `halo.php` - Interface CRUD
  - `kasir (2).sql` - Database schema

## 🚀 Fitur Utama

### 🔒 **Sistem Login & Register**
- ✨ Glass effect UI dengan video background
- 🔐 Validasi form lengkap (email, password, phone)
- 📱 Responsive design
- 🎨 Smooth transition animations
- ✅ Password confirmation & strength validation

### 🧮 **Kalkulator Tools**
- ➕ Operasi aritmatika dasar
- 🔢 Pencari bilangan ganjil/genap dengan range
- 📊 Input validation dan error handling
- 🎯 User-friendly interface

### 🎓 **Sistem Kelulusan**
- 📝 Input nilai mahasiswa
- ⚖️ Kalkulasi otomatis grade
- 🏆 Penentuan status kelulusan
- 📊 Tampilan hasil yang informatif

### 💼 **Aplikasi Kasir**
- 🛒 Sistem point of sale sederhana
- 💰 Kalkulasi total pembelian
- 📋 Interface yang mudah digunakan

### 🗄️ **PHP CRUD System**
- 📝 Create, Read, Update, Delete operations
- 🔗 MySQL database integration
- 🔐 Secure database connections
- 📊 Data management interface

## 🛠️ Teknologi yang Digunakan

| Teknologi | Penggunaan |
|-----------|------------|
| **HTML5** | Struktur dan markup |
| **CSS3** | Styling, animations, responsive design |
| **JavaScript** | Interaktivitas dan validasi client-side |
| **PHP** | Server-side logic dan database operations |
| **MySQL** | Database management |
| **Bootstrap** | UI framework (beberapa project) |

## 🎨 Fitur UI/UX

- 🌟 **Modern Glass Effect Design**
- 📱 **Fully Responsive Layout**
- 🎭 **Smooth Animations & Transitions**
- 🎨 **Consistent Color Scheme**
- 💡 **Intuitive User Interface**
- ⚡ **Fast Loading & Performance**

## 📸 Screenshots

> 📝 **Note**: Screenshots akan ditambahkan segera untuk setiap project

### Login & Register System
![Login Screenshot](screenshots/login.png)
![Register Screenshot](screenshots/register.png)

### Calculator Applications
![Aritmatika Screenshot](screenshots/aritmatika.png)
![Looping Screenshot](screenshots/looping.png)

### Grading System
![Kelulusan Screenshot](screenshots/kelulusan.png)

### CRUD System
![CRUD Screenshot](screenshots/crud.png)

## 🚀 Cara Menjalankan Project

### Prerequisites
- Web browser modern (Chrome, Firefox, Safari, Edge)
- Local server (XAMPP, WAMP, atau LAMP) untuk PHP projects
- Text editor (VS Code, Sublime Text, etc.)

### Langkah Instalasi

1. **Clone repository**
   ```bash
   git clone https://github.com/roestmn/TaskX.git
   cd TaskX
   ```

2. **Untuk HTML/JS Projects**
   - Buka file `.html` langsung di browser
   - Atau gunakan Live Server extension di VS Code

3. **Untuk PHP Projects**
   ```bash
   # Pindahkan folder ke htdocs (XAMPP)
   cp -r PHP_CRUD/ /xampp/htdocs/
   
   # Start Apache & MySQL
   # Akses: http://localhost/PHP_CRUD/
   ```

4. **Setup Database (untuk CRUD)**
   - Buka phpMyAdmin
   - Import file `kasir (2).sql`
   - Update koneksi di `koneksi.php` jika diperlukan

## 📖 Panduan Penggunaan

### 🔐 Login & Register
1. Buka `HTML_registrasi/login.html`
2. Klik "Sign Up" untuk registrasi user baru
3. Isi semua field yang required
4. Setelah register, login dengan credentials

### 🧮 Calculator Tools
1. Pilih aplikasi calculator yang diinginkan
2. Input nilai sesuai field yang tersedia
3. Klik tombol operasi yang diinginkan
4. Hasil akan ditampilkan secara real-time

### 💰 Sistem Kasir
1. Buka `kasir.html`
2. Input item dan harga
3. Sistem akan kalkulasi total otomatis
4. Cetak atau simpan invoice

## 🔧 Customization

### Mengubah Tema Warna
```css
/* Ubah di file CSS masing-masing */
:root {
    --primary-color: #1999af;
    --secondary-color: #af1919;
    --background-color: #f0f2f5;
}
```

### Menambah Fitur JavaScript
```javascript
// Tambahkan function baru di file JS
function newFeature() {
    // Your code here
}
```

## 🤝 Kontribusi

Kontribusi sangat diterima! Berikut cara berkontribusi:

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buka Pull Request

## 📝 To-Do List

- [ ] Tambahkan unit testing
- [ ] Implementasi API integration
- [ ] Tambahkan theme switcher
- [ ] Mobile app version
- [ ] Database optimization
- [ ] Security enhancements
- [ ] Performance improvements

## 🐛 Known Issues

- [ ] Video background mungkin tidak load di beberapa browser lama
- [ ] PHP session management perlu improvement
- [ ] Mobile responsiveness perlu fine-tuning di beberapa komponen

## 📧 Kontak

- **GitHub**: [@roestmn](https://github.com/roestmn)
- **Email**: [Your Email]
- **LinkedIn**: [Your LinkedIn]

## 📄 License

Project ini dibuat untuk keperluan pembelajaran dan portfolio. Silakan gunakan sebagai referensi.

---

⭐ **Jika project ini membantu, jangan lupa berikan star!**

**Made with ❤️ by [Rustaman](https://github.com/roestmn)**
