<?php

namespace App\Support;

class LandingContent
{
    /**
     * Definisi seluruh konten yang dapat diubah dari dashboard.
     *
     * Setiap grup berisi label, ikon, dan daftar field.
     * Tipe field: text, textarea, image.
     *
     * @return array<string, array{label: string, icon: string, fields: array<string, array{label: string, type: string, default: string}>}>
     */
    public static function fields(): array
    {
        return [
            'header' => [
                'label' => 'Header & Navigasi',
                'icon' => 'web_asset',
                'fields' => [
                    'site_title' => ['label' => 'Judul Tab Browser', 'type' => 'text', 'default' => 'Portal Kaprodi D3 Teknik Komputer - Politeknik Prasetiya Mandiri Bogor'],
                    'logo' => ['label' => 'Logo (Header & Footer)', 'type' => 'image', 'default' => 'images/logo.svg'],
                    'header_brand' => ['label' => 'Nama Brand Header', 'type' => 'text', 'default' => 'Program Studi D3 Teknik Komputer'],
                    'header_sub' => ['label' => 'Sub Brand Header', 'type' => 'text', 'default' => 'Politeknik Prasetiya Mandiri Bogor'],
                    'header_badge' => ['label' => 'Badge Akreditasi Header', 'type' => 'text', 'default' => 'Akreditasi Baik Sekali'],
                    'nav_1' => ['label' => 'Menu 1', 'type' => 'text', 'default' => 'Beranda'],
                    'nav_2' => ['label' => 'Menu 2', 'type' => 'text', 'default' => 'Sambutan Kaprodi'],
                    'nav_3' => ['label' => 'Menu 3', 'type' => 'text', 'default' => 'Profil & Visi Misi'],
                    'nav_4' => ['label' => 'Menu 4', 'type' => 'text', 'default' => 'Program & Kompetensi'],
                    'nav_5' => ['label' => 'Menu 5', 'type' => 'text', 'default' => 'Prospek Karier'],
                    'nav_6' => ['label' => 'Menu 6', 'type' => 'text', 'default' => 'Kontak & Konsultasi'],
                    'header_cta' => ['label' => 'Tombol Header', 'type' => 'text', 'default' => 'Jadwalkan Konsultasi Kaprodi'],
                ],
            ],
            'hero' => [
                'label' => 'Bagian Hero & Profil Kaprodi',
                'icon' => 'home',
                'fields' => [
                    'hero_badge_accred' => ['label' => 'Badge Akreditasi', 'type' => 'text', 'default' => 'TERAKREDITASI BAIK SEKALI BAN-PT & ANGGOTA APTIKOM JAWA BARAT'],
                    'hero_badge_prodi' => ['label' => 'Badge Program Studi', 'type' => 'text', 'default' => 'Politeknik Prasetiya Mandiri Bogor - Program Studi D3 Teknik Komputer'],
                    'hero_badge_calendar' => ['label' => 'Badge Kalender Akademik', 'type' => 'text', 'default' => 'Program Vokasi D3 - 3 Tahun'],
                    'hero_eyebrow' => ['label' => 'Teks Pengantar Atas', 'type' => 'text', 'default' => 'Portal Resmi Kaprodi D3 Teknik Komputer'],
                    'hero_title' => ['label' => 'Judul Utama (H1)', 'type' => 'textarea', 'default' => 'Menguasai Pemrograman dan Jaringan Komputer, Siap Kerja di Dunia Teknologi.'],
                    'hero_desc' => ['label' => 'Deskripsi Hero', 'type' => 'textarea', 'default' => 'Program Studi D-3 Teknik Komputer Politeknik Prasetiya Mandiri Bogor menyiapkan lulusan vokasi yang inovatif, mandiri, dan berwawasan global melalui pembelajaran praktik di bidang pemrograman, jaringan komputer, serta pengelolaan dan perbaikan sistem perangkat keras maupun perangkat lunak.'],
                    'hero_cta_primary' => ['label' => 'Tombol Utama', 'type' => 'text', 'default' => 'Jadwalkan Konsultasi Kaprodi'],
                    'hero_cta_secondary' => ['label' => 'Tombol Kedua', 'type' => 'text', 'default' => 'Baca Sambutan Resmi'],
                    'hero_info_1' => ['label' => 'Info Cepat 1', 'type' => 'text', 'default' => 'Jam Kerja: 08.00-16.00 WIB'],
                    'hero_info_2' => ['label' => 'Info Cepat 2', 'type' => 'text', 'default' => 'Baranangsiang, Kota Bogor'],
                    'hero_info_3' => ['label' => 'Info Cepat 3', 'type' => 'text', 'default' => 'Akreditasi Baik Sekali'],
                    'profile_photo' => ['label' => 'Foto Kaprodi', 'type' => 'image', 'default' => 'images/fotopaktaufik.png'],
                    'kaprodi_badge_role' => ['label' => 'Label Badge Foto', 'type' => 'text', 'default' => 'Kaprodi'],
                    'kaprodi_badge_year' => ['label' => 'Periode Badge Foto', 'type' => 'text', 'default' => '2023-2027'],
                    'profile_eyebrow' => ['label' => 'Label Jabatan', 'type' => 'text', 'default' => 'Ketua Program Studi'],
                    'profile_name' => ['label' => 'Nama Kaprodi', 'type' => 'text', 'default' => 'Taufik Tirkaamiasa, S.Kom., M.Kom.'],
                    'profile_role' => ['label' => 'Jabatan Kaprodi', 'type' => 'text', 'default' => 'Ketua Program Studi D3 Teknik Komputer'],
                    'profile_quote' => ['label' => 'Kutipan Profil', 'type' => 'textarea', 'default' => '“Menyiapkan lulusan vokasi teknik komputer yang inovatif, mandiri, dan berwawasan global melalui penguasaan pemrograman, jaringan komputer, serta dukungan teknis yang aplikatif.”'],
                    'profile_tag_1' => ['label' => 'Keahlian 1', 'type' => 'text', 'default' => 'Pemrograman'],
                    'profile_tag_2' => ['label' => 'Keahlian 2', 'type' => 'text', 'default' => 'Jaringan Komputer'],
                    'profile_tag_3' => ['label' => 'Keahlian 3', 'type' => 'text', 'default' => 'Technical Support'],
                    'profile_tag_4' => ['label' => 'Keahlian 4', 'type' => 'text', 'default' => 'Kewirausahaan'],
                    'profile_cta_1' => ['label' => 'Tombol Profil 1', 'type' => 'text', 'default' => 'Konsultasi'],
                    'profile_cta_2' => ['label' => 'Tombol Profil 2', 'type' => 'text', 'default' => 'Profil Lengkap'],
                ],
            ],
            'metrics' => [
                'label' => 'Profil Singkat Program Studi',
                'icon' => 'insights',
                'fields' => [
                    'metrics_eyebrow' => ['label' => 'Label Kecil', 'type' => 'text', 'default' => 'Profil Singkat'],
                    'metrics_title' => ['label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Fakta Utama Program Studi D-3 Teknik Komputer'],
                    'metric1_label' => ['label' => 'Kartu 1 - Label', 'type' => 'text', 'default' => 'Status Akreditasi'],
                    'metric1_value' => ['label' => 'Kartu 1 - Angka', 'type' => 'text', 'default' => 'Baik Sekali'],
                    'metric1_desc' => ['label' => 'Kartu 1 - Deskripsi', 'type' => 'textarea', 'default' => 'Peringkat akreditasi Program Studi D-3 Teknik Komputer sebagai indikator formal kesesuaian tata kelola, mutu pembelajaran, dan capaian standar pendidikan tinggi vokasi.'],
                    'metric2_label' => ['label' => 'Kartu 2 - Label', 'type' => 'text', 'default' => 'Jejaring Akademik'],
                    'metric2_value' => ['label' => 'Kartu 2 - Angka', 'type' => 'text', 'default' => 'APTIKOM Jabar'],
                    'metric2_desc' => ['label' => 'Kartu 2 - Deskripsi', 'type' => 'textarea', 'default' => 'Terdaftar sebagai anggota Asosiasi Pendidikan Tinggi Informatika dan Komputer (APTIKOM) Jawa Barat untuk penyelarasan ekosistem akademik dan kurikulum bidang komputasi.'],
                    'metric3_label' => ['label' => 'Kartu 3 - Label', 'type' => 'text', 'default' => 'Durasi Studi'],
                    'metric3_value' => ['label' => 'Kartu 3 - Angka', 'type' => 'text', 'default' => '3 Tahun'],
                    'metric3_desc' => ['label' => 'Kartu 3 - Deskripsi', 'type' => 'textarea', 'default' => 'Jalur pendidikan tinggi vokasi D-3 yang menitikberatkan keterampilan praktis dan kesiapan kerja langsung di lapangan.'],
                    'metric4_label' => ['label' => 'Kartu 4 - Label', 'type' => 'text', 'default' => 'Arah Visi'],
                    'metric4_value' => ['label' => 'Kartu 4 - Angka', 'type' => 'text', 'default' => '2034'],
                    'metric4_desc' => ['label' => 'Kartu 4 - Deskripsi', 'type' => 'textarea', 'default' => 'Menargetkan lulusan yang inovatif, mandiri, dan berwawasan global pada tahun 2034 dengan tumpuan pada pemrograman dan jaringan komputer.'],
                ],
            ],
            'visi' => [
                'label' => 'Visi, Pilar & Sambutan',
                'icon' => 'compass_calibration',
                'fields' => [
                    'visi_eyebrow' => ['label' => 'Label Kecil', 'type' => 'text', 'default' => 'Arah Strategis Program Studi'],
                    'visi_title' => ['label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Visi 2034 & Tiga Pilar Kompetensi Vokasi'],
                    'visi_desc' => ['label' => 'Deskripsi Visi', 'type' => 'textarea', 'default' => 'Menargetkan lahirnya lulusan yang inovatif, mandiri, dan berwawasan global pada tahun 2034 dengan tumpuan pada pemrograman dan jaringan komputer, sejalan dengan visi institusi yang mengintegrasikan pendidikan vokasi bisnis/teknik berbasis digital dan jiwa entrepreneur.'],
                    'visi_target' => ['label' => 'Sasaran Target', 'type' => 'text', 'default' => 'Sasaran Visi: Lulusan Inovatif, Mandiri & Berwawasan Global 2034'],
                    'pillar1_eyebrow' => ['label' => 'Pilar 1 - Label', 'type' => 'text', 'default' => 'Pilar I'],
                    'pillar1_title' => ['label' => 'Pilar 1 - Judul', 'type' => 'text', 'default' => 'Pemrograman'],
                    'pillar1_desc' => ['label' => 'Pilar 1 - Deskripsi', 'type' => 'textarea', 'default' => 'Pengembangan aplikasi dan logika perangkat lunak terapan untuk membangun sistem/aplikasi pendukung operasional, antarmuka, dan automasi tugas.'],
                    'pillar2_eyebrow' => ['label' => 'Pilar 2 - Label', 'type' => 'text', 'default' => 'Pilar II'],
                    'pillar2_title' => ['label' => 'Pilar 2 - Judul', 'type' => 'text', 'default' => 'Jaringan Komputer'],
                    'pillar2_desc' => ['label' => 'Pilar 2 - Deskripsi', 'type' => 'textarea', 'default' => 'Konfigurasi, pengelolaan konektivitas, dan pemeliharaan jaringan untuk menjaga stabilitas komunikasi data, manajemen perangkat jaringan, dan infrastruktur lokal.'],
                    'pillar3_eyebrow' => ['label' => 'Pilar 3 - Label', 'type' => 'text', 'default' => 'Pilar III'],
                    'pillar3_title' => ['label' => 'Pilar 3 - Judul', 'type' => 'text', 'default' => 'Dukungan Teknis & Kewirausahaan'],
                    'pillar3_desc' => ['label' => 'Pilar 3 - Deskripsi', 'type' => 'textarea', 'default' => 'Troubleshooting perangkat keras dan perangkat lunak, perawatan rutin, serta kemandirian kerja dan orientasi solusi bisnis/masyarakat.'],
                    'sambutan_eyebrow' => ['label' => 'Sambutan - Label', 'type' => 'text', 'default' => 'Pesan Kepemimpinan Kaprodi'],
                    'sambutan_quote' => ['label' => 'Sambutan - Kutipan', 'type' => 'textarea', 'default' => '“Pendidikan vokasi teknik komputer menjembatani kemampuan teknis aplikatif dengan kemandirian kerja dan jiwa kewirausahaan.”'],
                    'sambutan_desc' => ['label' => 'Sambutan - Paragraf', 'type' => 'textarea', 'default' => 'Program D-3 Teknik Komputer dirancang untuk kesiapan kerja langsung di lapangan. Mahasiswa dibekali kemampuan pemrograman, jaringan komputer, dan dukungan teknis, mulai dari pengembangan aplikasi terapan, konfigurasi dan pemeliharaan jaringan, hingga diagnosa kerusakan perangkat keras maupun perangkat lunak.'],
                    'sambutan_name' => ['label' => 'Sambutan - Nama', 'type' => 'text', 'default' => 'Taufik Tirkaamiasa, S.Kom., M.Kom.'],
                    'sambutan_role' => ['label' => 'Sambutan - Jabatan', 'type' => 'text', 'default' => 'Ketua Program Studi D3 Teknik Komputer'],
                    'sambutan_cta' => ['label' => 'Sambutan - Tombol', 'type' => 'text', 'default' => 'Ajukan Audiensi / Pertemuan'],
                    'competency_title' => ['label' => 'Kompetensi - Judul', 'type' => 'text', 'default' => 'Standar Kompetensi Lulusan'],
                    'competency_1' => ['label' => 'Kompetensi 1', 'type' => 'textarea', 'default' => 'Mengembangkan aplikasi dan logika perangkat lunak terapan untuk kebutuhan operasional, antarmuka, dan automasi tugas.'],
                    'competency_2' => ['label' => 'Kompetensi 2', 'type' => 'textarea', 'default' => 'Mengonfigurasi dan memelihara jaringan komputer serta menjaga stabilitas komunikasi data dan infrastruktur lokal.'],
                    'competency_3' => ['label' => 'Kompetensi 3', 'type' => 'textarea', 'default' => 'Melakukan troubleshooting, diagnosa kerusakan, perawatan rutin, serta optimalisasi performa perangkat keras dan perangkat lunak.'],
                ],
            ],
            'program' => [
                'label' => 'Fokus Kompetensi',
                'icon' => 'school',
                'fields' => [
                    'program_eyebrow' => ['label' => 'Label Kecil', 'type' => 'text', 'default' => 'Pilar Kompetensi & Karakteristik Vokasi'],
                    'program_title' => ['label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Fokus Kompetensi D-3 Teknik Komputer'],
                    'program_desc' => ['label' => 'Deskripsi Bagian', 'type' => 'textarea', 'default' => 'Berbeda dengan program sarjana yang lebih banyak menekankan teori perancangan sistem skala luas, program D-3 Teknik Komputer dirancang untuk kesiapan kerja langsung (applied skills) di lapangan.'],
                    'prog1_tag' => ['label' => 'Program 1 - Label', 'type' => 'text', 'default' => 'Pilar Kompetensi'],
                    'prog1_title' => ['label' => 'Program 1 - Judul', 'type' => 'text', 'default' => 'Pemrograman'],
                    'prog1_desc' => ['label' => 'Program 1 - Deskripsi', 'type' => 'textarea', 'default' => 'Pengembangan aplikasi dan logika perangkat lunak terapan untuk membangun sistem/aplikasi pendukung operasional, antarmuka, dan automasi tugas.'],
                    'prog1_link' => ['label' => 'Program 1 - Teks Tautan', 'type' => 'text', 'default' => 'Lihat Prospek Karier'],
                    'prog2_tag' => ['label' => 'Program 2 - Label', 'type' => 'text', 'default' => 'Pilar Kompetensi'],
                    'prog2_title' => ['label' => 'Program 2 - Judul', 'type' => 'text', 'default' => 'Jaringan Komputer'],
                    'prog2_desc' => ['label' => 'Program 2 - Deskripsi', 'type' => 'textarea', 'default' => 'Konfigurasi, pengelolaan konektivitas, dan pemeliharaan jaringan untuk menjaga stabilitas komunikasi data, manajemen perangkat jaringan, dan infrastruktur lokal.'],
                    'prog2_link' => ['label' => 'Program 2 - Teks Tautan', 'type' => 'text', 'default' => 'Lihat Prospek Karier'],
                    'prog3_tag' => ['label' => 'Program 3 - Label', 'type' => 'text', 'default' => 'Pilar Kompetensi'],
                    'prog3_title' => ['label' => 'Program 3 - Judul', 'type' => 'text', 'default' => 'Dukungan Teknis (Technical Support)'],
                    'prog3_desc' => ['label' => 'Program 3 - Deskripsi', 'type' => 'textarea', 'default' => 'Troubleshooting perangkat keras dan perangkat lunak, diagnosa kerusakan fisik/sistem, perawatan rutin, serta optimalisasi performa unit komputer/lab.'],
                    'prog3_link' => ['label' => 'Program 3 - Teks Tautan', 'type' => 'text', 'default' => 'Lihat Prospek Karier'],
                    'prog4_tag' => ['label' => 'Program 4 - Label', 'type' => 'text', 'default' => 'Etos Vokasi'],
                    'prog4_title' => ['label' => 'Program 4 - Judul', 'type' => 'text', 'default' => 'Kemandirian & Kewirausahaan'],
                    'prog4_desc' => ['label' => 'Program 4 - Deskripsi', 'type' => 'textarea', 'default' => 'Kemandirian kerja, praktik lapangan, dan orientasi solusi bisnis/masyarakat untuk menangani kebutuhan klien, jasa teknis, atau proyek terapan skala kecil-menengah.'],
                    'prog4_link' => ['label' => 'Program 4 - Teks Tautan', 'type' => 'text', 'default' => 'Konsultasi Ide Usaha'],
                ],
            ],
            'karier' => [
                'label' => 'Prospek Karier',
                'icon' => 'work',
                'fields' => [
                    'karier_eyebrow' => ['label' => 'Label Kecil', 'type' => 'text', 'default' => 'Prospek Karier & Kesesuaian Industri'],
                    'karier_title' => ['label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Jalur Karier Lulusan D-3 Teknik Komputer'],
                    'karier_desc' => ['label' => 'Deskripsi Bagian', 'type' => 'textarea', 'default' => 'Dengan kombinasi kemampuan troubleshooting perangkat, jaringan, dan pemrograman dasar-menengah, lulusan D-3 Teknik Komputer memiliki jalur masuk yang luwes di berbagai sektor.'],
                    'karier1_title' => ['label' => 'Karier 1 - Judul', 'type' => 'text', 'default' => 'IT Support / Technical Support & Helpdesk'],
                    'karier1_desc' => ['label' => 'Karier 1 - Deskripsi', 'type' => 'textarea', 'default' => 'Menangani instalasi OS/aplikasi, diagnosa hardware, perawatan PC/printer/perangkat kantor, serta dukungan pengguna harian.'],
                    'karier2_title' => ['label' => 'Karier 2 - Judul', 'type' => 'text', 'default' => 'Network Technician / Junior Network Administrator'],
                    'karier2_desc' => ['label' => 'Karier 2 - Deskripsi', 'type' => 'textarea', 'default' => 'Membantu pemeliharaan jaringan LAN/WAN, konfigurasi dasar perangkat jaringan, dan pelacakan gangguan konektivitas.'],
                    'karier3_title' => ['label' => 'Karier 3 - Judul', 'type' => 'text', 'default' => 'Junior Programmer / Web & Application Support'],
                    'karier3_desc' => ['label' => 'Karier 3 - Deskripsi', 'type' => 'textarea', 'default' => 'Terlibat dalam pembuatan, pemeliharaan, atau debugging aplikasi internal instansi, sekolah, UMKM, maupun proyek berbasis web/sistem informasi.'],
                    'karier4_title' => ['label' => 'Karier 4 - Judul', 'type' => 'text', 'default' => 'Teknisi Laboratorium / Operasional Perangkat'],
                    'karier4_desc' => ['label' => 'Karier 4 - Deskripsi', 'type' => 'textarea', 'default' => 'Mengelola kelayakan perangkat keras, penjadwalan/keamanan sistem, dan pemeliharaan rutin di lingkungan laboratorium komputer, perkantoran, atau ruang layanan digital.'],
                    'karier5_title' => ['label' => 'Karier 5 - Judul', 'type' => 'text', 'default' => 'Jasa Layanan Mandiri / Wirausaha Teknis'],
                    'karier5_desc' => ['label' => 'Karier 5 - Deskripsi', 'type' => 'textarea', 'default' => 'Menawarkan jasa servis/perakitan perangkat, instalasi jaringan lokal, atau pembuatan solusi digital sederhana untuk usaha kecil dan komunitas.'],
                ],
            ],
            'pengumuman' => [
                'label' => 'Pengumuman & Jam Layanan',
                'icon' => 'campaign',
                'fields' => [
                    'ann_eyebrow' => ['label' => 'Label Kecil', 'type' => 'text', 'default' => 'Informasi Terkini'],
                    'ann_title' => ['label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Pengumuman & Agenda Program Studi'],
                    'ann_link' => ['label' => 'Teks Tautan Semua', 'type' => 'text', 'default' => 'Semua Pengumuman'],
                    'ann1_month' => ['label' => 'Pengumuman 1 - Bulan', 'type' => 'text', 'default' => 'APRIL'],
                    'ann1_day' => ['label' => 'Pengumuman 1 - Tanggal', 'type' => 'text', 'default' => '18'],
                    'ann1_tag' => ['label' => 'Pengumuman 1 - Tag', 'type' => 'text', 'default' => 'PELATIHAN TEKNIS'],
                    'ann1_location' => ['label' => 'Pengumuman 1 - Lokasi', 'type' => 'text', 'default' => 'Laboratorium Komputer'],
                    'ann1_title' => ['label' => 'Pengumuman 1 - Judul', 'type' => 'text', 'default' => 'Pelatihan Pemrograman Aplikasi Terapan untuk Mahasiswa D-3'],
                    'ann1_desc' => ['label' => 'Pengumuman 1 - Deskripsi', 'type' => 'textarea', 'default' => 'Workshop pengembangan aplikasi dan automasi tugas untuk memperkuat logika serta keterampilan pemrograman terapan mahasiswa.'],
                    'ann1_btn' => ['label' => 'Pengumuman 1 - Tombol', 'type' => 'text', 'default' => 'Silabus'],
                    'ann2_month' => ['label' => 'Pengumuman 2 - Bulan', 'type' => 'text', 'default' => 'MEI'],
                    'ann2_day' => ['label' => 'Pengumuman 2 - Tanggal', 'type' => 'text', 'default' => '05'],
                    'ann2_tag' => ['label' => 'Pengumuman 2 - Tag', 'type' => 'text', 'default' => 'PRAKTIK JARINGAN'],
                    'ann2_location' => ['label' => 'Pengumuman 2 - Lokasi', 'type' => 'text', 'default' => 'Laboratorium Jaringan Komputer'],
                    'ann2_title' => ['label' => 'Pengumuman 2 - Judul', 'type' => 'text', 'default' => 'Praktik Konfigurasi & Pemeliharaan Jaringan Lokal'],
                    'ann2_desc' => ['label' => 'Pengumuman 2 - Deskripsi', 'type' => 'textarea', 'default' => 'Pelatihan konfigurasi perangkat jaringan, pengelolaan konektivitas, dan troubleshooting infrastruktur lokal.'],
                    'ann2_btn' => ['label' => 'Pengumuman 2 - Tombol', 'type' => 'text', 'default' => 'Panduan'],
                    'ann3_month' => ['label' => 'Pengumuman 3 - Bulan', 'type' => 'text', 'default' => 'MEI'],
                    'ann3_day' => ['label' => 'Pengumuman 3 - Tanggal', 'type' => 'text', 'default' => '22'],
                    'ann3_tag' => ['label' => 'Pengumuman 3 - Tag', 'type' => 'text', 'default' => 'KARIER & WIRAUSAHA'],
                    'ann3_location' => ['label' => 'Pengumuman 3 - Lokasi', 'type' => 'text', 'default' => 'Auditorium Kampus Utama'],
                    'ann3_title' => ['label' => 'Pengumuman 3 - Judul', 'type' => 'text', 'default' => 'Seminar Karier: IT Support, Network Technician & Wirausaha Teknis'],
                    'ann3_desc' => ['label' => 'Pengumuman 3 - Deskripsi', 'type' => 'textarea', 'default' => 'Membahas peluang karier lulusan D-3 Teknik Komputer serta peluang jasa layanan mandiri di bidang teknologi informasi.'],
                    'ann3_btn' => ['label' => 'Pengumuman 3 - Tombol', 'type' => 'text', 'default' => 'Registrasi'],
                    'office_eyebrow' => ['label' => 'Jam Layanan - Label', 'type' => 'text', 'default' => 'Jam Buka Terbuka'],
                    'office_title' => ['label' => 'Jam Layanan - Judul', 'type' => 'text', 'default' => 'Open Office Hour Kaprodi'],
                    'office_desc' => ['label' => 'Jam Layanan - Deskripsi', 'type' => 'textarea', 'default' => 'Sesi konsultasi langsung untuk mendengar aspirasi, keluhan studi, bimbingan praktik, maupun ide proyek terapan mahasiswa D-3 Teknik Komputer.'],
                    'office_slot1_day' => ['label' => 'Slot 1 - Hari', 'type' => 'text', 'default' => 'Setiap Selasa'],
                    'office_slot1_desc' => ['label' => 'Slot 1 - Keterangan', 'type' => 'text', 'default' => 'Sesi Pagi: Diskusi Akademik & KRS'],
                    'office_slot1_time' => ['label' => 'Slot 1 - Jam', 'type' => 'text', 'default' => '09.30 - 12.00'],
                    'office_slot2_day' => ['label' => 'Slot 2 - Hari', 'type' => 'text', 'default' => 'Setiap Kamis'],
                    'office_slot2_desc' => ['label' => 'Slot 2 - Keterangan', 'type' => 'text', 'default' => 'Sesi Siang: Bimbingan Praktik & Karier'],
                    'office_slot2_time' => ['label' => 'Slot 2 - Jam', 'type' => 'text', 'default' => '13.30 - 15.30'],
                    'office_note' => ['label' => 'Catatan Jam Layanan', 'type' => 'textarea', 'default' => 'Untuk pertemuan di luar jadwal di atas atau audiensi mitra eksternal, silakan gunakan formulir reservasi di bawah.'],
                    'office_cta' => ['label' => 'Tombol Jam Layanan', 'type' => 'text', 'default' => 'Reservasi Kuota Konsultasi'],
                ],
            ],
            'reservasi' => [
                'label' => 'Formulir Reservasi',
                'icon' => 'event_available',
                'fields' => [
                    'res_eyebrow' => ['label' => 'Label Kecil', 'type' => 'text', 'default' => 'Aksesibilitas & Layanan Terpadu'],
                    'res_title' => ['label' => 'Judul Bagian', 'type' => 'text', 'default' => 'Permohonan Audiensi & Konsultasi Kaprodi'],
                    'res_desc' => ['label' => 'Deskripsi Bagian', 'type' => 'textarea', 'default' => 'Silakan isi formulir di bawah ini untuk mengajukan jadwal konsultasi tatap muka maupun daring dengan Ketua Program Studi D-3 Teknik Komputer atau Sekretaris Program Studi.'],
                    'res_label_nama' => ['label' => 'Label Nama', 'type' => 'text', 'default' => 'Nama Lengkap & Gelar'],
                    'res_label_nim' => ['label' => 'Label NIM', 'type' => 'text', 'default' => 'NIM / NIP / Institusi Asal'],
                    'res_label_email' => ['label' => 'Label Email', 'type' => 'text', 'default' => 'Email Resmi / Kampus'],
                    'res_label_wa' => ['label' => 'Label WhatsApp', 'type' => 'text', 'default' => 'Nomor WhatsApp Aktif'],
                    'res_label_kategori' => ['label' => 'Label Kategori', 'type' => 'text', 'default' => 'Kategori Pertemuan / Konsultasi'],
                    'res_label_tanggal' => ['label' => 'Label Tanggal', 'type' => 'text', 'default' => 'Rencana Tanggal Pertemuan'],
                    'res_label_format' => ['label' => 'Label Format', 'type' => 'text', 'default' => 'Format Pertemuan'],
                    'res_label_topik' => ['label' => 'Label Topik', 'type' => 'text', 'default' => 'Ringkasan Topik / Pokok Bahasan Audiensi'],
                    'res_submit' => ['label' => 'Teks Tombol Kirim', 'type' => 'text', 'default' => 'Kirim Permohonan Jadwal'],
                ],
            ],
            'kontak' => [
                'label' => 'Kontak & Peta',
                'icon' => 'contact_support',
                'fields' => [
                    'sekretariat_eyebrow' => ['label' => 'Label Sekretariat', 'type' => 'text', 'default' => 'Sekretariat Program Studi'],
                    'sekretariat_title' => ['label' => 'Judul Sekretariat', 'type' => 'text', 'default' => 'Politeknik Prasetiya Mandiri & Ruang Kaprodi D-3 Teknik Komputer'],
                    'sekretariat_desc' => ['label' => 'Deskripsi Sekretariat', 'type' => 'textarea', 'default' => 'Pusat administrasi akademik, legalisir ijazah/transkrip, persuratan rekomendasi, dan audiensi resmi Program Studi D-3 Teknik Komputer.'],
                    'contact_location_label' => ['label' => 'Lokasi - Label', 'type' => 'text', 'default' => 'Lokasi Kampus Utama:'],
                    'contact_location_value' => ['label' => 'Lokasi - Nilai', 'type' => 'text', 'default' => 'Jl. Bina Marga No. 19, Baranangsiang, Kota Bogor'],
                    'contact_secretary_label' => ['label' => 'Sekretaris - Label', 'type' => 'text', 'default' => 'Sekretaris Prodi:'],
                    'contact_secretary_value' => ['label' => 'Sekretaris - Nilai', 'type' => 'text', 'default' => 'Ir. Budi Prasetyo, M.T. (Ext. 403)'],
                    'contact_email_label' => ['label' => 'Korespondensi - Label', 'type' => 'text', 'default' => 'Korespondensi Resmi:'],
                    'contact_email_value' => ['label' => 'Korespondensi - Nilai', 'type' => 'text', 'default' => 'Sekretariat Program Studi D-3 Teknik Komputer, Politeknik Prasetiya Mandiri Bogor'],
                    'contact_wa_label' => ['label' => 'Hotline - Label', 'type' => 'text', 'default' => 'Hotline Respons Cepat (WhatsApp):'],
                    'contact_wa_value' => ['label' => 'Hotline - Nilai', 'type' => 'text', 'default' => '+62 811-9876-5432 (Hanya Pesan Teks Jam Kerja)'],
                    'map_label' => ['label' => 'Peta - Label', 'type' => 'text', 'default' => 'Peta Kampus & Rute'],
                    'map_badge' => ['label' => 'Peta - Badge', 'type' => 'text', 'default' => 'Kampus Utama - Baranangsiang'],
                    'map_caption' => ['label' => 'Peta - Keterangan Pin', 'type' => 'text', 'default' => 'Jl. Bina Marga No. 19, Kota Bogor'],
                    'map_embed_url' => ['label' => 'URL Embed Google Maps', 'type' => 'text', 'default' => 'https://maps.google.com/maps?q=Jl.%20Bina%20Marga%20No.%2019,%20Baranangsiang,%20Kota%20Bogor&t=&z=16&ie=UTF8&iwloc=&output=embed'],
                ],
            ],
            'footer' => [
                'label' => 'Footer',
                'icon' => 'bottom_navigation',
                'fields' => [
                    'footer_brand' => ['label' => 'Nama Brand Footer', 'type' => 'text', 'default' => 'Politeknik Prasetiya Mandiri & D-3 Teknik Komputer'],
                    'footer_desc' => ['label' => 'Deskripsi Footer', 'type' => 'textarea', 'default' => 'Program Studi D-3 Teknik Komputer Politeknik Prasetiya Mandiri Bogor berkomitmen mencetak lulusan vokasi yang inovatif, mandiri, dan berwawasan global di bidang pemrograman dan jaringan komputer.'],
                    'footer_badge' => ['label' => 'Badge Footer', 'type' => 'text', 'default' => 'Akreditasi BAN-PT: Baik Sekali'],
                    'footer_links_title' => ['label' => 'Judul Tautan', 'type' => 'text', 'default' => 'Tautan Politeknik & Mitra'],
                    'footer_link1' => ['label' => 'Tautan 1', 'type' => 'text', 'default' => 'Portal Resmi Politeknik'],
                    'footer_link2' => ['label' => 'Tautan 2', 'type' => 'text', 'default' => 'APTIKOM Jawa Barat'],
                    'footer_link3' => ['label' => 'Tautan 3', 'type' => 'text', 'default' => 'Perpustakaan & Repositori Ilmiah'],
                    'footer_link4' => ['label' => 'Tautan 4', 'type' => 'text', 'default' => 'Ikatan Alumni Teknik Komputer'],
                    'footer_office_title' => ['label' => 'Judul Kantor', 'type' => 'text', 'default' => 'Kantor Prodi & Pelayanan'],
                    'footer_address' => ['label' => 'Alamat Footer', 'type' => 'text', 'default' => 'Kampus Utama, Jl. Bina Marga No. 19, Baranangsiang, Kota Bogor'],
                    'footer_email' => ['label' => 'Email Footer', 'type' => 'text', 'default' => 'Sekretariat Program Studi D-3 Teknik Komputer'],
                    'footer_phone' => ['label' => 'Telepon Footer', 'type' => 'text', 'default' => 'Hubungi sekretariat Program Studi'],
                    'footer_hours_title' => ['label' => 'Judul Jam Pelayanan', 'type' => 'text', 'default' => 'Jam Pelayanan & Ruang Kaprodi'],
                    'footer_hours1_label' => ['label' => 'Jam 1 - Hari', 'type' => 'text', 'default' => 'Senin - Kamis'],
                    'footer_hours1_value' => ['label' => 'Jam 1 - Waktu', 'type' => 'text', 'default' => '08.00 - 16.00 WIB'],
                    'footer_hours2_label' => ['label' => 'Jam 2 - Hari', 'type' => 'text', 'default' => 'Jumat'],
                    'footer_hours2_value' => ['label' => 'Jam 2 - Waktu', 'type' => 'text', 'default' => '08.00 - 11.30 WIB'],
                    'footer_hours3_label' => ['label' => 'Jam 3 - Hari', 'type' => 'text', 'default' => 'Sabtu, Minggu & Libur'],
                    'footer_hours3_value' => ['label' => 'Jam 3 - Waktu', 'type' => 'text', 'default' => 'Tutup'],
                    'footer_hours_note' => ['label' => 'Catatan Jam', 'type' => 'text', 'default' => 'Konsultasi Tatap Muka memerlukan janji temu'],
                    'footer_copyright' => ['label' => 'Teks Hak Cipta', 'type' => 'text', 'default' => 'Program Studi D-3 Teknik Komputer, Politeknik Prasetiya Mandiri Bogor. Hak Cipta Dilindungi Undang-Undang.'],
                    'footer_bottom1' => ['label' => 'Tautan Bawah 1', 'type' => 'text', 'default' => 'Kebijakan Privasi'],
                    'footer_bottom2' => ['label' => 'Tautan Bawah 2', 'type' => 'text', 'default' => 'Pedoman Akademik'],
                    'footer_bottom3' => ['label' => 'Tautan Bawah 3', 'type' => 'text', 'default' => 'Sistem Informasi Akademik'],
                ],
            ],
        ];
    }

    /**
     * Daftar nilai bawaan seluruh field.
     *
     * @return array<string, string>
     */
    public static function defaults(): array
    {
        $defaults = [];

        foreach (static::fields() as $group) {
            foreach ($group['fields'] as $key => $field) {
                $defaults[$key] = $field['default'];
            }
        }

        return $defaults;
    }
}
