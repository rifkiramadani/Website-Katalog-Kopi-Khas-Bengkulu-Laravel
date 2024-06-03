<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Produk;
use App\Models\Category;
use App\Models\DetailProduk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // produk kopi jadi
        Produk::create([
            'detailproduk_id' => 1,
            'nama' => 'Kopi Bubuk Cap 1001',
            'slug' => 'kopi-bubuk-cap-1001',
            'img' => 'produk1.jpg',
            'jenis' => 'produkkopi',
            'excerpt' => 'Kopi ini bernama Kopi 1001 yang sudah sangat familiar dan akrab bagi sebagian besar masyarakat Bengkulu.'
       ]);
        Produk::create([
            'detailproduk_id' => 2,
            'nama' => 'Rafflesia Coffe',
            'slug' => 'rafflesia-coffe',
            'img' => 'prroduk2.jpg',
            'jenis' => 'produkkopi',
            'excerpt' => 'Provinsi Bengkulu termasuk salah satu daerah penghasil kopi terbesar di pulau sumatera.'
       ]);
        Produk::create([
            'detailproduk_id' => 3,
            'nama' => 'Kopi Bubuk Mantap Nian',
            'slug' => 'kopi-bubuk-mantap-nian',
            'img' => 'produk3.jpg',
            'jenis' => 'produkkopi',
            'excerpt' => 'Kopi robusta bengkulu yang sudah terkenal karna kenikmatan dan keharuman dari biji kopinya, di racik secara tradisional secara turun menurun.            '
       ]);
        Produk::create([
            'detailproduk_id' => 4,
            'nama' => 'Kopi Dusun Kopi Dusun',
            'slug' => 'kopi-dusun-kopi-dusun',
            'img' => 'produk4.jpg',
            'jenis' => 'produkkopi',
            'excerpt' => 'Ini adalah salah satu kopi khas endemik salah satu wilayah di Indonesia.'
       ]);
        Produk::create([
            'detailproduk_id' => 5,
            'nama' => 'Kopi Kepahiang Gold Ground Coffe',
            'slug' => 'kopi-kepahiang-gold-ground-coffe',
            'img' => 'produk5.jpg',
            'jenis' => 'produkkopi',
            'excerpt' => 'Netto : 200Gr, ini adalah produk UMKM RKB Kab. Kepahiang,Kab. Kepahiang, Bengkulu            '
       ]);
        Produk::create([
            'detailproduk_id' => 6,
            'nama' => 'Kopi Bubuk Premium Lestari',
            'slug' => 'kopi-bubuk-premium-lestari',
            'img' => 'produk6.jpg',
            'jenis' => 'produkkopi',
            'excerpt' => 'kopi lestari adalah kopi yang di kombinasikan dari seluruh kopi robusta sindang dataran dan teciptalah rasa kopi yang  nikmat dan mantap.'
       ]);


        //produk kopi hitam
       Produk::create([
            'detailproduk_id' => 7,
            'nama' => 'Kopi Bengkulu',
            'slug' => 'kopi-bengkulu',
            'img' => 'bijikopihitam1.jpeg',
            'jenis' => 'kopihitam',
            'excerpt' => 'Kopi Bengkulu mencakup berbagai kopi yang ditanam di seluruh provinsi Bengkulu.'
       ]);
       Produk::create([
            'detailproduk_id' => 8,
            'nama' => 'Kopi Robusta Rejang Lebong',
            'slug' => 'kopi-robusta-rejang-lebonng',
            'img' => 'bijikopihitam2.jpeg',
            'jenis' => 'kopihitam',
            'excerpt' => 'Ditumbuhkan di Kabupaten Rejang Lebong, kopi robusta ini terkenal karena kualitasnya yang tinggi.'
       ]);
       Produk::create([
            'detailproduk_id' => 9,
            'nama' => 'Kopi Arabika Kepahiang',
            'slug' => 'kopi-arabika-kepahiang',
            'img' => 'bijikopihitam3.jpeg',
            'jenis' => 'kopihitam',
            'excerpt' => 'Ditanam di wilayah Kepahiang, kopi ini berasal dari varietas Arabika yang lebih halus dan beraroma'
       ]);
       Produk::create([
            'detailproduk_id' => 10,
            'nama' => 'Kopi Semerendo',
            'slug' => 'kopi-semerendo',
            'img' => 'bijikopihitam4.jpeg',
            'jenis' => 'kopihitam',
            'excerpt' => 'Kopi ini berasal dari daerah Semendo, yang berada di perbatasan antara Bengkulu dan Sumatera Selatan.'
       ]);
       Produk::create([
            'detailproduk_id' => 11,
            'nama' => 'Kopi Liwa',
            'slug' => 'kopi-liwa',
            'img' => 'bijikopihitam5.jpeg',
            'jenis' => 'kopihitam',
            'excerpt' => 'Meskipun berasal dari daerah Liwa di Lampung Barat, kopi ini banyak dikonsumsi di Bengkulu dan sekitarnya.
            '
       ]);
       Produk::create([
            'detailproduk_id' => 12,
            'nama' => 'Kopi Enggano',
            'slug' => 'kopi-enggano',
            'img' => 'bijikopihitam6.jpeg',
            'jenis' => 'kopihitam',
            'excerpt' => 'Berasal dari Pulau Enggano, sebuah pulau kecil di lepas pantai Bengkulu.
            '
       ]);

    // produk buah kopi
        Produk::create([
            'detailproduk_id' => 13,
            'nama' => 'Kopi Curup',
            'slug' => 'kopi-curup',
            'img' => 'buahkopi.jpeg',
            'jenis' => 'buahkopi',
            'excerpt' => ' Kopi ini berasal dari daerah Curup, sebuah kota di Kabupaten Rejang Lebong, yang terkenal dengan perkebunan kopinya.
            '
        ]);
        Produk::create([
            'detailproduk_id' => 14,
            'nama' => 'Kopi Lembak',
            'slug' => 'kopi-lembak',
            'img' => 'buahkopi2.jpeg',
            'jenis' => 'buahkopi',
            'excerpt' => 'Kopi Lembak berasal dari daerah Lembak di Kabupaten Bengkulu Tengah, yang terkenal dengan iklim dan tanahnya yang subur.
            '
        ]);
        Produk::create([
            'detailproduk_id' => 15,
            'nama' => 'Kopi Mukomuko',
            'slug' => 'kopi-mukomuko',
            'img' => 'buahkopi4.jpeg',
            'jenis' => 'buahkopi',
            'excerpt' => 'Kopi Mukomuko ditanam di Kabupaten Mukomuko, yang berada di bagian utara Bengkulu.
            '
        ]);
        Produk::create([
            'detailproduk_id' => 16,
            'nama' => 'Kopi Padang Guci',
            'slug' => 'kopi-padangguci',
            'img' => 'buahkopi5.jpeg',
            'jenis' => 'buahkopi',
            'excerpt' => 'Berasal dari daerah Padang Guci di Kabupaten Kaur, kopi ini ditanam di ketinggian yang ideal untuk perkebunan kopi.
            '
        ]);
        Produk::create([
            'detailproduk_id' => 17,
            'nama' => 'Kopi Bintuhan',
            'slug' => 'kopi-bintuhan',
            'img' => 'buahkopi6.jpeg',
            'jenis' => 'buahkopi',
            'excerpt' => 'Kopi Bintuhan berasal dari Kecamatan Bintuhan di Kabupaten Kaur, yang memiliki tanah subur dan iklim sejuk.
            '
        ]);
        Produk::create([
            'detailproduk_id' => 18,
            'nama' => 'Kopi Seluma',
            'slug' => 'kopi-seluma',
            'img' => 'buahkpi3.jpeg',
            'jenis' => 'buahkopi',
            'excerpt' => 'Kopi Seluma berasal dari Kabupaten Seluma, yang terkenal dengan produksi kopi berkualitas tinggi.
            '
        ]);

        //    detail produk produk kopi jadi
    DetailProduk::create([
            'slug' => 'kopi-bubuk-cap-1001',
            'deskripsi' => 'Kopi ini bernama Kopi 1001 yang sudah sangat familiar dan akrab bagi sebagian besar masyarakat Bengkulu. Adapun usaha pembuatan bubuk  kopi 1001 ini diketahui sudah berlangsung sejak tahun1985, dinamakan "1001" ini merupakan nama pemberian dari sang kakek dari pemilik usaha kopi ini yaitu Thompson Sirait. Untuk bahan dasar dari bubuk  kopi 1001 ini memakai 100 persen kopi jenis robusta terbaik yang didapat dari petani lokal Provinsi Bengkulu seperti Kabupaten Kepahiang dan juga Kabupaten Rejang Lebong.
            ',
            'harga' => 100000
        ]);
    DetailProduk::create([
            'slug' => 'rafflesia-coffe',
            'deskripsi' => 'Provinsi Bengkulu termasuk salah satu daerah penghasil kopi terbesar di pulau sumatera. "Rafflesia Coffee" adalah salah satu brand Kopi Bengkulu yang berasal dari wilayah perkebunan kopi di kabupaten Kepahiang dengan altitude 1000-1300 m dpl, dataran tinggi yang terletak di sepanjang wilayah bukit barisan pulau sumatra, tepatnya di wilayah barat daya pulau Sumatera. Untuk mendapatkan hasil kopi robusta yang baik dan bermutu, proses pemetikan panen kopi dilakukan dengan pemilihan buah petik merah (red cherry) dengan melalui tahapan-tahapan proses yang panjang dalam pegolahannya, mulai dari proses pengolahan pasca panen, proses sangrai/roasting, proses penggilingan/grinding sampai ke proses pengemasan/packaging Proses pengolahan yang dikerjakan oleh tenaga ahli dan berpengalaman, untuk menghasilkan kopi robusta dengan rasa dan aroma yang nikmat, mantap dan berkualitas.
            ',
            'harga' => 800000
        ]);
    DetailProduk::create([
            'slug' => 'kopi-bubuk-mantap-nian',
            'deskripsi' => 'Kopi Bubuk Robusta Asli Bengkulu.
            Kopi robusta bengkulu yang sudah terkenal karna kenikmatan dan keharuman dari biji kopinya, di racik secara tradisional secara turun menurun.
            Aroma yang khas, rasa yang nikmat serta aman untuk dikonsumsi menjadikan kopi ini wajib untuk dijadikan seduhan anda.
            Beli sekarang sebelum kehabisan!
            ',
            'harga' => 900000
         ]);
    DetailProduk::create([
            'slug' => 'kopi-dusun-kopi-dusun',
            'deskripsi' => 'ni adalah salah satu kopi khas endemik salah satu wilayah di Indonesia. Kebetulan salah satu Mimin cemilan4u ada yg asal daerah tsb, jadi dia sedikit antusias pengen bantu majang di etalase :). Adalah Kopi Dusun, kopi hitam tubruk produksi Bejaya Kopi - Desa Talang Benuang, Seluma-Bengkulu. Kopi dari racikan biji2 kopi endemik tanah bengkulu dari lereng2 pegunungan Bukit Barisan di Sumatera yg terkenal akan kandungan tanah vulkanisnya yg khas buat perkebunan kopi. Kopi2 tanam Bukit Barisan ini mempunyai rasa dan kandungan yg khas, bahkan terkadang membutuhkan proses produksi menjadi bubuk kopi yg beragam dan unik. Sehingga terkenal dari dahulu mempunyai kandungan dan hasil yg kuat, dan salah satunya di produksi oleh Bejaya Kopi menjadi brand produk mereka Kopi Dusun. Dari racikan dasar robusta dengan tata proses tradisional turun temurun sehingga menghasilkan kopi Bengkulu yg khas dan nikmat. Beratribut lengkap PIRT dan jaminan halal dari produsen. Dikemas dalam berbagai ukuran, salah satunya kemasan pouch sedang 200 gr. Silahkan di order, hati2 berdebar, sesuaikan waktu dan mood anda untuk menyeduh kopi ini :)
            ',
            'harga' => 110000
        ]);
    DetailProduk::create([
            'slug' => 'kopi-kepahiang-gold-ground-coffe',
            'deskripsi' => 'ini adalah produk UMKM RKB Kab. Kepahiang,Kab. Kepahiang, Bengkulu
            ',
            'harga' => 200000
         ]);
    DetailProduk::create([
            'slug' => 'kopi-bubuk-premium-lestari',
            'deskripsi' => 'kopi lestari adalah kopi yang di kombinasikan dari seluruh kopi robusta sindang dataran dan teciptalah rasa kopi yang  nikmat dan mantap. Kopi ini asli dari rejang lebong bengkulu.
            ',
            'harga' => 650000
         ]);

    // detail produk kopi hitam
       DetailProduk::create([
            'slug' => 'kopi-bengkulu',
            'deskripsi' => 'Kopi Bengkulu mencakup berbagai kopi yang ditanam di seluruh provinsi Bengkulu. Daerah ini memiliki iklim yang sangat cocok untuk pertumbuhan kopi, baik robusta maupun arabika.
            Memiliki cita rasa yang kompleks dengan keseimbangan antara asam dan pahit, serta aroma yang kuat. Kopi Bengkulu sering diolah secara tradisional, memberikan nuansa rasa lokal yang khas.
            ',
            'harga' => 800000
       ]);
       DetailProduk::create([
            'slug' => 'kopi-robusta-rejang-lebong',
            'deskripsi' => 'Ditumbuhkan di Kabupaten Rejang Lebong, kopi robusta ini terkenal karena kualitasnya yang tinggi. Daerah ini berada pada ketinggian yang ideal untuk menanam kopi robusta.
            Memiliki tubuh yang tebal, rasa pahit yang kuat, dan sedikit rasa cokelat. Kandungan kafeinnya tinggi, menjadikannya pilihan yang bagus untuk kopi yang kuat dan berenergi.
            ',
            'harga' => 820000
       ]);
       DetailProduk::create([
            'slug' => 'kopi-kepahiang',
            'deskripsi' => 'Ditanam di wilayah Kepahiang, kopi ini berasal dari varietas Arabika yang lebih halus dan beraroma.
            Memiliki rasa yang halus dengan sedikit keasaman, serta aroma buah-buahan yang khas. Kopi ini sering dipilih oleh pecinta kopi yang menyukai rasa yang lebih ringan dan aromatik.
            ',
            'harga' => 850000
       ]);
       DetailProduk::create([
            'slug' => 'kopi-semendo',
            'deskripsi' => 'Kopi ini berasal dari daerah Semendo, yang berada di perbatasan antara Bengkulu dan Sumatera Selatan. Semendo dikenal dengan tanahnya yang subur dan iklim yang sejuk.
            Kopi Semendo memiliki rasa yang kaya dan kompleks, dengan perpaduan antara rasa cokelat, rempah, dan sedikit buah-buahan. Teksturnya halus dan memiliki aftertaste yang menyenangkan.
            ',
            'harga' => 900000
       ]);
       DetailProduk::create([
            'slug' => 'kopi-liwa',
            'deskripsi' => 'Meskipun berasal dari daerah Liwa di Lampung Barat, kopi ini banyak dikonsumsi di Bengkulu dan sekitarnya.
            Kopi ini memiliki cita rasa yang kuat dengan aroma yang harum dan rasa pahit yang dominan. Proses pengolahannya sering dilakukan secara tradisional, yang meningkatkan cita rasanya.
            ',
            'harga' => 950000
       ]);
       DetailProduk::create([
            'slug' => 'kopi-enggano',
            'deskripsi' => 'Berasal dari Pulau Enggano, sebuah pulau kecil di lepas pantai Bengkulu.
            Kopi Enggano memiliki rasa yang unik dan kompleks dengan sentuhan rempah-rempah lokal. Kopi ini memiliki keasaman yang seimbang dan aftertaste yang panjang.
            ',
            'harga' => 1200000
       ]);

    //    detail produk buah kopi
       DetailProduk::create([
            'slug' => 'kopi-curup',
            'deskripsi' => 'Kopi ini berasal dari daerah Curup, sebuah kota di Kabupaten Rejang Lebong, yang terkenal dengan perkebunan kopinya.
            Memiliki rasa yang kaya dengan aroma bunga yang lembut. Rasa asamnya seimbang dengan sedikit rasa manis di akhir.
            ',
            'harga' => 950000
       ]);
       DetailProduk::create([
            'slug' => 'kopi-lembak',
            'deskripsi' => 'Kopi Lembak berasal dari daerah Lembak di Kabupaten Bengkulu Tengah, yang terkenal dengan iklim dan tanahnya yang subur.
            Kopi ini memiliki rasa yang sedikit pedas dengan aroma rempah yang khas. Teksturnya halus dengan aftertaste yang panjang dan memuaskan.
            ',
            'harga' => 750000
       ]);
       DetailProduk::create([
            'slug' => 'kopi-mukomuko',
            'deskripsi' => 'Kopi Mukomuko ditanam di Kabupaten Mukomuko, yang berada di bagian utara Bengkulu.
            Memiliki rasa yang kuat dan sedikit pahit dengan aroma kayu yang khas. Kandungan kafeinnya cukup tinggi, membuatnya cocok untuk penikmat kopi yang membutuhkan dorongan energi.
            ',
            'harga' => 850000
       ]);
       DetailProduk::create([
            'slug' => 'kopi-padangguci',
            'deskripsi' => ' Berasal dari daerah Padang Guci di Kabupaten Kaur, kopi ini ditanam di ketinggian yang ideal untuk perkebunan kopi.
            Memiliki keasaman yang seimbang dengan rasa cokelat dan kacang yang lembut. Aromanya kuat dan menggugah selera.
            ',
            'harga' => 110000
       ]);
       DetailProduk::create([
            'slug' => 'kopi-bintuhan',
            'deskripsi' => 'Kopi Bintuhan berasal dari Kecamatan Bintuhan di Kabupaten Kaur, yang memiliki tanah subur dan iklim sejuk.
            Kopi ini memiliki rasa yang kompleks dengan campuran rasa buah-buahan tropis dan sedikit rempah. Teksturnya lembut dan aftertaste yang lama.
            ',
            'harga' => 1200000
       ]);
       DetailProduk::create([
            'slug' => 'kopi-seluma',
            'deskripsi' => 'Kopi Seluma berasal dari Kabupaten Seluma, yang terkenal dengan produksi kopi berkualitas tinggi.
            Memiliki rasa yang sedikit asam dengan aroma buah-buahan dan bunga yang lembut. Rasanya halus dengan sedikit sentuhan manis di akhir.
            ',
            'harga' => 550000
       ]);
    }
}
