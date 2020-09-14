studi kasus -> sistem pendaftaran siswa baru
frontend -> HTML & CSS
backend -> PHP native

user management:
User :  1.calon siswa
        2.admin/panitia

database ->db_psb
table : 
#tb_pendaftaran
===============================
1.id_pendaftaran    | char (10) priamry key
2.tgl_daftar        | date
3.th_ajaran         | varchar(9)
4.jurusan           | varchar(50)
5.nm_peserta        | varchar(50)
6.tmp_lahir         | varchar(50)
7.tgl_lahir         | date
jk                  | enum ('laki - laki','perempuan')
agama               | varchar (20)
alamt_peserta       | text
================================
 
 #tb_admin
 ================================
 1.id_admin         | int(11) primary key auto increment
 2.nm_admin         | varchar (50)
 3.username         | varchar (50)
 4.password         | varchar (100)
 =================================
 
 *format ID pendaftaran P202000001
 P -> Pendaftaran
 2020 -> tahun daftar
 00001 -> nomor urut pendaftaran
 *format ID admin 1,2,3,4...dst
 
 =>menu calon siswa / penndaftar
    -pendaftaran (Daftar.Print)
=>menu admin/panitia
    -Data peserta (Detail,Hapus,Print)
    -Keluar

