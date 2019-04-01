# Belajar Object Oriented dengan PHP

## 1.1. Abstraction
**Abstraction** (Abstraksi) -> teknik untuk menentukan ciri, sifat atau informasi penting dari suatu objek mana yang 
akan ditampilkan dan mana yang akan disembunyikan.

## 1.2. Object
**Object** (Objek) -> Elemen dasar dari konsep pemograman beriorientasi objek adalah objek itu sendiri. Merupakan abstraksi dalam dunia nyata. Sesuatu yang dapat berupa apa saja : benda, aktivitas, manusia, business system atau workflow.
Sebuah objek memiliki attribute dan method. Atribut adalah data yang terkandung di dalam objek, sedangkan method adalah operasi-operasi yang disediakan oleh objek untuk mengakses atau memodifikasi atribut yang dimiliki.

## 1.3. Class
**Class** -> Dalam terminologi pemograman berorientasi objek, objek apapun dapat berupa instansi dari suatu class.
Sebuah class tersusun atas dua bagian, yaitu class declaration dan class body. Bagian class body diapit oleh tanda { dan }. Di dalam bagian class body dideklarasikan variabel, method, method konstruktur dan method destruktur.



## 1.4. Inheritance
**Inheritance** (Turunan) -> Sebuah metode penurunan class dari class lainnya dapat disebut sebagain inherit.

## 1.5. Polymorphism
**Polymorphism** (perubahan) -> Polymorphism berarti suatu objek dapat memiliki berbagai bentuk, yaitu sebagai objek dari class-nya 
sendiri ataupun sebagai objek dari superclass-nya. Ada dua macam bentuk polymorphism, yaitu overloading dan overriding.

**Overloading** adalah penggunaan satu nama untuk beberapa method yang berbeda dalam suatu kelas. Method-method yang namanya sama ini dibedakan satu dengan yang lain berdasarkan parameter yang disediakan masing-masing method.

**Overriding** adalah mendeklarasikan sebuah method dengan nama dan parameter yang sama dengan suatu method dari superclass-nya. Method yang dideklarasikan di subclass akan meng-override method dari superclass-nya.

## 1.6 Hubungan Antar-Class
Saat melakukan perancangan aplikasi dengan metode berorientasi objek akan terlihat bahwa class-class di dalam suatu aplikasi memiliki hubungan satu terhadap lainnya.
Terdapat tiga macam hubungan antara satu class dengan class lainnya, yaitu : generalization, dependency dan associations.

- Generalization adalah hubungan antar-class di mana class yang satu merupakan genralisasi dari class lainnya yang lebih spesifik atau spesialis. Class yang lebih general disebut superclass sedangkan yang lebih spesifik disebut subclass. Generalizations biasa juga disebut inheritance. Hubungan yang timbul biasa disebut "is-a relationship". Contohnya jendela dorong dan jendela geser adalah jendela atau pada contoh **Tabungan Haji**, **Tabungan Pendidikan** dan **Tabungan Pensiun** adalah **Tabungan**. Class yang memiliki satu superclass disebut single inheritance. Class dengan lebih dari satu superclass disebut multiple inheritance. Class yang tidak memiliki superclass disebut baseclass.

- Dependency adalah hubungan ketergantungan antara satu class dengan class lainnya. Pada hubungan ini satu class dapat mengubah spesifikasi atau kondisi (state) dari class lainnya. Contohnya, class *Jendela* memiliki hubungan dependency dengan class *Operasi_Jendela* dimana class *Operasi_Jendela* dapat mengubah kondisi class Jendela, misalnya dari kondisi tertutup menjadi terbuka.

- Association adalah hubungan struktural yang menspesifikasikan bahwa objek dari sebuah class berhubungan dengan objek dari class lainnya dan sebaliknya. Contohnya, class *Dosen* memiliki hubungan "mengajar" dengan class *Universitas* di mana hubungan mengajar ini bersifat *many-to-many*, yang berarti satu objek instance dari class Dosen dapat mengajar di satu atau lebih objek instance dari class Universitas dan sebaliknya satu objek instance dari class Universitas dapat memiliki satu atau lebih objek instance dari class Dosen. Association memperlihatkan sebuah hubungan yang setara di mana satu class tidak lebih superior daripada class lainnya. Adalakanya hubungan ini tidak setara di mana class yang satu merupakan bagian dari class lainnya, contohnya class Fakultas adalah bagian dari class Universitas. Hubungan ini disebut aggregation.