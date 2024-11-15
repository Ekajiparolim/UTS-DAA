# *Dokumen Perssyaratan Bisnis (BRD)*
### *Proyek:* Aplikasi Penjualan Mabel
*Tanggal:* 15 November 2024

----
## *1. Tujuan Proyek*
- Membuat Platform untuk membeli Produk mabel, yang mempermudah pembelian dan transaksi yang sederhana.
----
## *2. Fitur*
 *Pengelolaan Data*
- Menambah produk
- Menghapus produk
- Melihat pesanan
- Mengelola status pesanan
----
## *3. Persyaratan Fungsional*
 *Akses berdasarkan peran*:
 - Admin dapat mengelola data pelanggan dan transaksi.
 - Penjual dapat mengelola produk.

 *Laporan Penjualan*:
 - Admin dapat melihat laporan penjualan.
----
## *4. Persyaratan non-Fungsional*
*usabilitas*:
- Antarmuka pengguna yang sederhana dan mudah digunakan.

*Keamanan*:
- Proteksi Data Pengguna
- Hanya Admin yang dapat mengelola data pengguna/pembeli
----
## *5. Kebutuhan Bisnis*
* Mempermudah Pelanggan dalam membeli mabel secara online
----
## *6. Model, Migration, Sedeer yang perlu dibuat dalam Conteiner `docker exec -it sample bash`*
*Penjual*:
*Migration*:`id_penjual(PK), nama, alamat, telepon, create_at dan update_at`
*Model*:Menyimpan informasi Penjual
*Seeder*:Data awal Pengujian

*produk*:
*Migration*:i`id_produk(PK), id_Penjual(FK), nama, deskripsi, harga, stok, create_at dan update_at`
*model*:Menyimpan informasi produk
*Seeder*:Data awal pengujian

*pembeli*:
*Migration*:`id_pembeli(PK), nama, email(UK), alamat, telepon, create_at dan update_at`
*model*:Menyimpan informasi Pembeli
*Seeder*:Data aawal pengujian

*order*:
*Migration*:`id_order(PK), id_pembeli(FK), order_date, create_at dan update_at`
*model*:Menyimpan informasi Order
*Seeder*:Data awal Pengujian

*Orderitems*:
*Migration*:`id_orderItems(PK), id_order(FK), id_produk(FK), jumlah, harga, create_at dan update_at`
*model*:menyimpan informasi OrderItems
*Seeder*:Data awal pengujian




