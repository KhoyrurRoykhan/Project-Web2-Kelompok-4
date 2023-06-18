-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2023 at 10:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weatland`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(11, 'Rumah Bubungan Tinggi', 'article/8PdiJDfaJllYZOfdY8RFvVMdJSAHS41WPqNQ8AqO.png', '<p>Rumah bubungan tinggi Kalimantan, juga dikenal sebagai rumah banjar, adalah salah satu bentuk rumah tradisional yang khas di Kalimantan Selatan, Indonesia. Rumah ini menggambarkan kekayaan budaya suku Banjar yang merupakan suku mayoritas di Kalimantan Selatan. Ciri khas utama rumah ini adalah atapnya yang tinggi dan melengkung, yang disebut sebagai \"bubungan tinggi\" atau \"banjar limas\". Atap ini memberikan ruang ekstra di bagian atas rumah dan memberikan sirkulasi udara yang baik di dalam rumah.</p><p>Desain rumah bubungan tinggi Kalimantan didasarkan pada konsep yang memperhatikan iklim tropis yang panas dan lembap. Selain atap tinggi, rumah ini memiliki ventilasi yang baik dengan adanya serambi terbuka di bagian depan dan belakang rumah. Serambi ini memberikan ruang untuk kegiatan sosial dan juga berfungsi sebagai ruang penyejuk sebelum masuk ke dalam rumah.</p><p>Konstruksi rumah ini menggunakan material alami seperti kayu untuk kerangka dan bambu untuk dinding dan lantai. Kayu yang digunakan biasanya adalah kayu ulin yang kuat dan tahan terhadap serangan hama. Pada bagian atap, digunakan sirap atau genteng tanah liat yang disusun sedemikian rupa untuk membentuk bentuk melengkung yang khas.</p><p>Rumah bubungan tinggi Kalimantan juga memiliki nilai filosofis dan simbolis yang dalam. Bubungan tinggi yang melengkung menggambarkan gunung yang menjadi simbol keagungan dan keberlimpahan. Selain itu, rumah ini juga mencerminkan adat istiadat dan tradisi suku Banjar yang kaya dan kompleks, termasuk dalam hal pernikahan, upacara adat, dan ritual keagamaan.</p><p>Meskipun rumah bubungan tinggi Kalimantan saat ini jarang ditemui di perkotaan, rumah ini masih dilestarikan oleh masyarakat suku Banjar di pedesaan sebagai bagian dari warisan budaya mereka. Banyak rumah bubungan tinggi yang dijadikan sebagai destinasi wisata dan museum untuk memperkenalkan kekayaan budaya suku Banjar kepada wisatawan dan generasi muda.</p><p>Rumah bubungan tinggi Kalimantan tidak hanya merupakan bentuk arsitektur yang indah dan unik, tetapi juga mewakili warisan budaya dan identitas suku Banjar. Keberadaannya menjadi bukti pentingnya melestarikan budaya tradisional di tengah perkembangan zaman yang modern.</p>', '2023-06-11 08:17:41', '2023-06-11 08:17:41'),
(12, 'Rumah Adat Gajah Baliku', 'article/mRW238SwPbik87EAHZDbEwXzgp1qfG0FqLiTkBbB.jpg', '<p>Rumah adat Gajah Baliku adalah salah satu warisan budaya yang kaya dari masyarakat Dayak di Kalimantan, Indonesia. Gajah Baliku secara harfiah berarti \"rumah yang bertiang gajah\" karena desainnya yang menyerupai tubuh kokoh dan kuat seekor gajah. Rumah adat ini memiliki keunikan dan kekhasan yang mencerminkan kehidupan, kepercayaan, serta kebudayaan yang kaya dari suku Dayak.</p><p>Secara desain, rumah adat Gajah Baliku memiliki bentuk yang mencolok dan memikat perhatian. Atap rumah ini melengkung ke atas menyerupai punggung gajah, sedangkan tiang-tiang besar yang kokoh menjadi fondasi rumah. Tiang-tiang ini umumnya diukir dengan motif dan hiasan yang rumit, menggambarkan keindahan seni tradisional Dayak. Material yang digunakan dalam pembangunan rumah ini biasanya kayu ulin, kayu meranti, dan rotan. Kayu ulin, yang tahan terhadap serangan hama dan cuaca ekstrem, menjadi bahan utama untuk tiang-tiang utama rumah adat ini. Sementara itu, atap rumah adat Gajah Baliku biasanya terbuat dari daun nipah atau ijuk yang dirangkai dengan teknik anyaman yang rumit, memberikan perlindungan dari panas dan hujan.</p><p>Selain aspek fisiknya, rumah adat Gajah Baliku juga memiliki makna dan simbolisme yang dalam bagi masyarakat Dayak. Rumah ini menjadi simbol identitas budaya mereka yang kaya dan menjadi pusat kegiatan sosial dan budaya. Di dalam rumah adat ini, berbagai acara adat, upacara keagamaan, pertemuan komunitas, dan pertunjukan seni budaya dilakukan. Selain itu, rumah adat Gajah Baliku juga menggambarkan hubungan yang erat antara masyarakat Dayak dengan alam sekitar. Desainnya yang menggambarkan gajah, binatang yang dianggap suci dan memiliki kekuatan spiritual dalam kepercayaan Dayak, menggambarkan rasa kagum dan penghormatan mereka terhadap alam dan makhluk hidup di sekitar mereka.</p><p>Rumah adat Gajah Baliku juga memiliki peran penting dalam pelestarian budaya dan peningkatan pariwisata. Rumah ini menjadi daya tarik wisata yang penting di Kalimantan, menarik minat wisatawan untuk melihat dan belajar tentang kehidupan, seni, dan budaya masyarakat Dayak. Melalui pemeliharaan dan penggunaan rumah adat ini, tradisi dan warisan budaya suku Dayak dapat terus dijaga, dipelihara, dan ditransmisikan kepada generasi mendatang. Rumah adat Gajah Baliku juga menjadi tempat edukasi dan pembelajaran bagi masyarakat lokal dan wisatawan tentang kekayaan budaya dan kehidupan tradisional suku Dayak.</p><p>Dengan demikian, rumah adat Gajah Baliku tidak hanya merupakan struktur fisik yang menakjubkan, tetapi juga simbol penting dari identitas budaya dan kehidupan masyarakat Dayak. Rumah adat ini menjadi wadah untuk menjaga, melestarikan, dan menghormati tradisi serta kearifan lokal yang kaya di tengah perkembangan zaman yang modern.</p>', '2023-06-11 08:27:06', '2023-06-11 08:27:06'),
(13, 'Rumah Adat Palimasan', 'article/ykCRfVNpN552FVXpFCwTdhyB8XRVDfcl6g9zSR4S.jpg', '<p>Rumah adat Palimasan adalah salah satu jenis rumah tradisional yang berasal dari suku Banjar di Kalimantan, Indonesia. Rumah ini memiliki bentuk panggung dengan atap yang melengkung ke atas, memberikan kesan yang elegan dan indah. Atap rumah adat Palimasan umumnya terbuat dari ijuk atau daun kelapa yang dirangkai dengan teknik anyaman yang rumit. Struktur atap yang melengkung ini memberikan sentuhan estetika yang khas pada rumah adat ini.</p><p>Selain atap yang menonjolkan keindahan desainnya, rumah adat Palimasan juga memiliki ciri khas lainnya. Struktur rumah ini umumnya terbuat dari kayu ulin yang tahan lama dan kuat. Rumah adat ini juga dilengkapi dengan tiang-tiang yang tinggi sebagai pondasi utama, memberikan stabilitas dan kekokohan pada bangunan. Bagian bawah rumah biasanya digunakan sebagai tempat penyimpanan barang-barang, sedangkan bagian atasnya digunakan sebagai ruang tinggal.</p><p>Selain itu, rumah adat Palimasan juga memiliki ruang terbuka yang luas di bagian bawah rumah. Ruang terbuka ini sering digunakan sebagai tempat berkumpul, beraktivitas, dan menjalankan kegiatan sosial masyarakat Banjar. Rumah adat Palimasan juga dilengkapi dengan tangga atau anak tangga yang menghubungkan lantai bawah dengan lantai atas.</p><p>Rumah adat Palimasan memiliki peran penting dalam kehidupan masyarakat Banjar. Selain sebagai tempat tinggal, rumah ini juga digunakan untuk melaksanakan berbagai upacara adat, pertemuan komunitas, serta pertunjukan seni dan budaya tradisional. Rumah adat Palimasan menjadi simbol identitas budaya dan sejarah masyarakat Banjar, serta sebagai sarana pelestarian dan pengenalan warisan budaya mereka kepada generasi muda dan wisatawan.</p><p>Dengan keunikan arsitektur dan keindahan desainnya, rumah adat Palimasan juga menjadi daya tarik pariwisata yang penting di Kalimantan. Banyak wisatawan yang tertarik untuk mengunjungi rumah adat ini, melihat keindahan dan kekayaan budaya suku Banjar yang terpancar dari setiap detail rumah adat Palimasan. Melalui pemeliharaan dan penggunaan rumah adat ini, tradisi dan warisan budaya masyarakat Banjar dapat terus dilestarikan dan dihormati, memperkaya keanekaragaman budaya di Indonesia.</p>', '2023-06-11 08:34:38', '2023-06-11 08:34:38'),
(14, 'Rumah Balai Bini', 'article/lQVHBvY95cgapFzuGFPtSIMILFNWvlMusdhTemtv.jpg', '<p>Rumah Balai Bini merupakan salah satu jenis rumah tradisional yang berasal dari suku Dayak di Kalimantan, Indonesia. Rumah ini memiliki ciri khas dan desain yang unik, mencerminkan kearifan lokal serta kehidupan masyarakat Dayak.</p><p>Rumah Balai Bini memiliki bentuk panggung dengan atap yang melengkung ke atas. Atapnya biasanya terbuat dari bahan alami seperti ijuk atau daun rumbia yang dirangkai dengan teknik anyaman tradisional. Struktur atap yang melengkung memberikan ciri khas pada rumah ini dan memberikan perlindungan dari hujan dan panas.</p><p>Selain itu, rumah Balai Bini memiliki konstruksi yang kokoh dan stabil. Pondasi utama rumah ini terdiri dari tiang-tiang kayu besar yang ditanam dalam tanah atau diikat dengan tali rotan. Tiang-tiang tersebut menjulang tinggi dan memberikan kekokohan pada bangunan. Material utama yang digunakan adalah kayu ulin, kayu meranti, dan rotan. Kayu ulin yang tahan terhadap serangan hama dan cuaca ekstrem menjadi bahan utama dalam pembangunan rumah ini.</p><p>Rumah Balai Bini juga memiliki ruangan yang luas dan terbuka di bagian bawah, sering kali digunakan sebagai tempat berkumpul, beraktivitas, dan menjalankan kegiatan sosial. Bagian atas rumah ini digunakan sebagai ruang tidur atau tempat tinggal keluarga. Ruangan-ruangan dalam rumah Balai Bini biasanya dipisahkan oleh dinding-dinding kayu yang dihias dengan ukiran dan motif tradisional Dayak.</p><p>Selain sebagai tempat tinggal, rumah Balai Bini juga berperan penting dalam menjaga identitas budaya dan kehidupan masyarakat Dayak. Rumah ini digunakan untuk melaksanakan upacara adat, pertemuan komunitas, dan kegiatan keagamaan. Rumah Balai Bini menjadi pusat kegiatan sosial dan budaya masyarakat Dayak serta menjadi tempat yang penting dalam menjalankan tradisi dan mempertahankan warisan budaya mereka.</p><p>Rumah Balai Bini juga memiliki nilai historis dan keindahan yang menarik bagi wisatawan. Wisatawan dapat melihat keunikan arsitektur, ukiran kayu, dan kekayaan budaya yang terpancar dari rumah ini. Melalui pemeliharaan dan penggunaan rumah Balai Bini, tradisi dan warisan budaya masyarakat Dayak dapat terus dijaga dan dipelihara, serta menjadi daya tarik wisata yang memperkaya keanekaragaman budaya di Kalimantan.</p>', '2023-06-11 08:40:01', '2023-06-11 08:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `bendas`
--

CREATE TABLE `bendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bendas`
--

INSERT INTO `bendas` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'a', 'benda/1686029917.png', '<p>a</p>', '2023-06-05 10:05:13', '2023-06-05 21:38:37');

-- --------------------------------------------------------

--
-- Table structure for table `cobas`
--

CREATE TABLE `cobas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fauna_kalimantans`
--

CREATE TABLE `fauna_kalimantans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fauna_kalimantans`
--

INSERT INTO `fauna_kalimantans` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(8, 'Orang Utan Kalimantan', 'faunakalimantan/Zfr9pAHhkIhaNezKv8ZFTFFTpaU5O6EN5KTzEGt5.jpg', '<p>Orangutan Kalimantan (Pongo pygmaeus) adalah salah satu spesies kera besar yang endemik di pulau Kalimantan, Indonesia. Orangutan Kalimantan termasuk dalam keluarga Hominidae dan merupakan primata terbesar di Asia. Mereka memiliki keunikan yang menarik dan penting dalam ekosistem hutan hujan Kalimantan. Berikut ini adalah penjelasan panjang tentang Orangutan Kalimantan:</p><p>Orangutan Kalimantan memiliki tubuh yang besar dan kuat. Orangutan jantan bisa mencapai tinggi sekitar 1,5 hingga 1,8 meter dan memiliki berat badan antara 50 hingga 90 kilogram, sementara Orangutan betina biasanya lebih kecil dengan tinggi sekitar 1 hingga 1,2 meter dan berat badan sekitar 30 hingga 50 kilogram. Mereka memiliki lengan yang panjang dan kuat serta tubuh yang dilengkapi dengan otot yang kuat, memungkinkan mereka untuk berayun dan bergantung di atas pohon dengan mudah.</p><p>Orangutan Kalimantan memiliki ciri khas wajah yang mencolok. Mereka memiliki alis yang tebal dan menonjol, serta pipi yang lebar. Warna bulu Orangutan Kalimantan dapat bervariasi mulai dari merah-kecoklatan hingga coklat tua. Bulu ini memberikan perlindungan dan isolasi bagi mereka saat hidup di hutan hujan yang lembap.</p><p>Orangutan Kalimantan adalah makhluk yang sangat cerdas. Mereka merupakan satu-satunya spesies kera yang menggunakan alat untuk membantu dalam mencari makanan. Orangutan menggunakan ranting, daun, dan berbagai bahan lainnya untuk mencari makan, membuka buah-buahan, dan mencari larva serangga. Mereka juga menggunakan daun besar sebagai payung saat hujan atau sebagai alat untuk membuat sarang di atas pohon.</p><p>Orangutan Kalimantan adalah hewan yang sebagian besar bersifat arboreal, yang berarti mereka menghabiskan sebagian besar waktu hidup mereka di atas pohon. Mereka memiliki kemampuan yang luar biasa dalam bergerak di antara cabang-cabang pohon dengan lincah dan gesit. Mereka dapat melompat, berayun, dan memanjat dengan keahlian yang luar biasa. Gerakan mereka di atas pohon memungkinkan mereka mencari makanan, mencari pasangan, dan menghindari pemangsa di lingkungan mereka.</p><p>Makanan utama Orangutan Kalimantan adalah buah-buahan, daun, tunas, serangga, dan madu. Mereka juga dapat memakan kulit pohon, batang, dan bunga. Orangutan Kalimantan adalah hewan herbivora, tetapi mereka juga memiliki kemampuan untuk memakan protein hewani sebagai tambahan sumber nutrisi. Makanan ini mereka dapatkan dengan cara mencari, mencabut, dan memproses makanan menggunakan alat alamiah, seperti batang kayu atau batu.</p><p>Orangutan Kalimantan memiliki kehidupan sosial yang kompleks. Mereka umumnya hidup secara soliter atau dalam kelompok kecil yang terdiri dari induk betina dan anak-anaknya. Induk betina akan merawat anaknya dengan penuh kasih sayang selama beberapa tahun. Setelah mencapai kematangan seksual, orangutan jantan akan mencari pasangan dan berpindah dari satu wilayah ke wilayah lainnya untuk mencari betina yang siap kawin.</p><p>Namun, populasi Orangutan Kalimantan saat ini terancam oleh berbagai faktor. Deforestasi yang disebabkan oleh perambahan hutan, perambahan lahan untuk perkebunan kelapa sawit, dan perdagangan ilegal hewan liar adalah beberapa ancaman utama bagi kelangsungan hidup mereka. Orangutan Kalimantan termasuk dalam kategori Terancam Kritis dalam Daftar Merah IUCN. Upaya konservasi dan perlindungan habitat mereka menjadi sangat penting untuk menjaga kelangsungan hidup spesies ini.</p><p>Orangutan Kalimantan memiliki peran yang sangat penting dalam ekosistem hutan hujan Kalimantan. Mereka berperan sebagai agen pemencar benih karena mereka memakan buah-buahan dan menyebarkan biji-bijian melalui kotorannya. Hal ini penting untuk menjaga keanekaragaman hayati hutan hujan dan menjaga ekosistem yang seimbang.</p><p>Dengan kecerdasan, keunikan, dan peran pentingnya dalam ekosistem, Orangutan Kalimantan merupakan harta yang sangat berharga bagi Indonesia dan dunia. Upaya konservasi, perlindungan habitat, dan edukasi publik sangat penting untuk memastikan bahwa Orangutan Kalimantan dapat bertahan dan hidup di alam bebas untuk generasi mendatang.</p>', '2023-06-10 22:02:05', '2023-06-10 22:02:05'),
(9, 'Bekantan', 'faunakalimantan/gjYb3peuUGXpUZdrgV6cG6qdU5dVyBMqMaQsR7ld.jpg', '<p>Bekantan Kalimantan, atau juga dikenal sebagai bekantan (Nasalis larvatus), adalah spesies monyet endemik yang hanya ditemukan di pulau Kalimantan, Indonesia. Bekantan dikenal karena fitur fisiknya yang mencolok, yaitu hidung yang besar dan panjang, serta bulu jambul yang khas. Berikut adalah penjelasan tentang Bekantan Kalimantan:</p><p>Bekantan Kalimantan memiliki tubuh yang besar dengan panjang sekitar 60 hingga 75 centimeter, dan berat mencapai 12 hingga 24 kilogram. Mereka memiliki bulu tebal berwarna coklat tua hingga hitam, dengan bulu jambul di kepala yang mirip mahkota. Namun, yang paling mencolok adalah hidung mereka yang membesar dan panjang, yang digunakan untuk mengeluarkan suara khas bekantan dan juga berfungsi sebagai alat komunikasi.</p><p>Hidung bekantan jantan bisa tumbuh hingga sekitar 7 hingga 10 sentimeter, sementara hidung betina lebih kecil. Hidung tersebut membantu dalam memperkuat suara panggilan mereka, yang dapat terdengar hingga beberapa kilometer jauhnya. Suara bekantan dikenal sebagai \"honk\" yang keras dan berdengung, dan digunakan untuk berkomunikasi dengan sesama anggota kelompok, baik dalam situasi ancaman, saat mencari pasangan, atau dalam interaksi sosial lainnya.</p><p>Bekantan Kalimantan hidup di hutan-hutan rawa dan hutan hujan tropis yang lembap, terutama di daerah-daerah pesisir dan daerah dataran rendah Kalimantan. Mereka adalah hewan arboreal, artinya mereka menghabiskan sebagian besar waktu hidup mereka di atas pohon. Adaptasi mereka yang luar biasa dalam bergerak di antara cabang-cabang pohon membuat mereka sangat lincah dan gesit dalam melompat, berayun, dan memanjat.</p><p>Makanan utama bekantan adalah daun-daunan, terutama daun mangrove, serta buah-buahan, bunga, dan tunas. Mereka juga dapat memakan kulit pohon, kayu, dan beberapa jenis serangga. Bekantan memiliki sistem pencernaan yang khusus, memungkinkan mereka untuk mencerna daun dan menghasilkan nutrisi yang diperlukan dari makanan yang sulit dicerna oleh hewan lain.</p><p>Bekantan Kalimantan memiliki kehidupan sosial yang kompleks. Mereka hidup dalam kelompok kecil yang terdiri dari satu jantan dewasa, beberapa betina, dan anak-anak mereka. Bekantan jantan memiliki peran yang penting dalam menjaga wilayah mereka dan melindungi anggota kelompoknya dari ancaman. Mereka juga melakukan tarian khas yang melibatkan gerakan tubuh dan jambul mereka untuk menarik perhatian betina saat mencari pasangan.</p><p>Sayangnya, populasi bekantan Kalimantan saat ini terancam oleh deforestasi, perambahan hutan, dan perburuan ilegal. Pengurangan habitat alaminya dan gangguan manusia mengancam kelangsungan hidup mereka. Bekantan saat ini terdaftar sebagai spesies Terancam Kritis dalam Daftar Merah IUCN. Upaya konservasi dan perlindungan habitat mereka menjadi sangat penting untuk memastikan kelangsungan hidup bekantan dan menjaga keanekaragaman hayati di pulau Kalimantan.</p><p>Bekantan Kalimantan memiliki peran penting dalam ekosistem hutan hujan Kalimantan. Sebagai hewan herbivora, mereka membantu menyebarkan biji-bijian melalui kotoran mereka, yang mendukung regenerasi hutan. Selain itu, mereka juga merupakan bagian integral dari rantai makanan dan menjaga keseimbangan ekosistem.</p><p>Dengan keunikan dan peran pentingnya dalam ekosistem, bekantan Kalimantan merupakan salah satu harta berharga Kalimantan dan perlu dilindungi. Upaya konservasi, perlindungan habitat, penghentian perburuan ilegal, serta edukasi publik adalah langkah-langkah penting untuk memastikan bahwa bekantan Kalimantan dapat terus hidup di alam bebas dan melanjutkan perannya sebagai simbol kekayaan alam Kalimantan.</p>', '2023-06-10 22:07:09', '2023-06-10 22:07:09'),
(10, 'Beruang Madu', 'faunakalimantan/2rTXJoozEHhPxgN5ZZ6zlAnE48P5XEjo4J9GfT8P.jpg', '<p>Beruang Madu Kalimantan, atau juga dikenal sebagai beruang malas (Helarctos malayanus euryspilus), adalah salah satu subspesies beruang madu yang dapat ditemukan di pulau Kalimantan, Indonesia. Beruang Madu Kalimantan adalah salah satu hewan yang paling terancam di dunia dan memiliki keunikan serta peran penting dalam ekosistem hutan Kalimantan. Berikut adalah penjelasan tentang Beruang Madu Kalimantan:</p><p>Beruang Madu Kalimantan memiliki ciri khas warna tubuh yang gelap dengan garis coklat yang mencolok di bagian dada dan perutnya. Mereka memiliki tubuh yang besar, dengan panjang sekitar 120 hingga 150 centimeter dan berat mencapai 60 hingga 80 kilogram. Salah satu ciri khas yang membedakan beruang madu adalah adanya bulu yang lebat di bagian telinga mereka.</p><p>Beruang Madu Kalimantan merupakan hewan pemakan serangga dan buah-buahan. Diet mereka terutama terdiri dari madu, larva serangga, lebah, termasuk juga buah-buahan, madu kayu, dan nektar bunga. Mereka memiliki lidah yang panjang dan dapat menjilati madu dari sarang lebah dengan mudah. Keberadaan beruang madu dalam ekosistem sangat penting karena mereka berperan sebagai agen penyerbukan bagi banyak tumbuhan yang memiliki bunga yang kaya nektar.</p><p>Beruang Madu Kalimantan adalah hewan soliter yang cenderung hidup sendiri. Mereka memiliki wilayah kekuasaan yang luas dan mencakup beberapa wilayah berbeda. Wilayah kekuasaan beruang madu jantan bisa mencapai 10 hingga 80 kilometer persegi tergantung pada ketersediaan makanan dan habitat. Mereka cenderung bergerak dengan lambat dan menghabiskan sebagian besar waktu di atas pohon.</p><p>Habitat alami Beruang Madu Kalimantan terutama terdapat di hutan dataran rendah, hutan rawa, dan hutan hujan tropis di Kalimantan. Mereka menghabiskan waktu di pepohonan dan memiliki keterampilan yang luar biasa dalam memanjat dan berayun di antara cabang-cabang pohon. Kemampuan beruang madu dalam hidup di atas pohon membantu melindungi mereka dari pemangsa seperti harimau atau anjing liar.</p><p>Sayangnya, populasi Beruang Madu Kalimantan saat ini terancam oleh perusakan habitat, perburuan ilegal, dan perdagangan satwa liar. Deforestasi yang disebabkan oleh perambahan hutan dan konversi lahan untuk perkebunan kelapa sawit adalah ancaman utama bagi kelangsungan hidup mereka. Beruang Madu Kalimantan saat ini masuk dalam kategori Kritis di Daftar Merah IUCN.</p><p>Untuk melindungi dan melestarikan Beruang Madu Kalimantan, upaya konservasi yang komprehensif sangat penting. Hal ini meliputi perlindungan habitat alaminya, penegakan hukum terhadap perburuan ilegal, pengelolaan kawasan konservasi, serta kampanye edukasi untuk meningkatkan kesadaran publik tentang pentingnya pelestarian hewan ini. Melalui langkah-langkah ini, diharapkan Beruang Madu Kalimantan dapat bertahan dan terus memberikan manfaat bagi ekosistem hutan Kalimantan serta menjadi warisan yang berharga bagi generasi mendatang.</p>', '2023-06-10 22:09:31', '2023-06-10 22:09:31'),
(11, 'Burung Raja Udang Kalung Biru', 'faunakalimantan/dOq6QZaYveB8RHeOi5XAMS3dKUm1GEaF2YclqcAj.jpg', '<p>Burung Raja Udang Kalung Biru (Alcedo euryzona) merupakan salah satu spesies burung yang terdapat di Kalimantan, Indonesia. Burung ini memiliki penampilan yang menarik dan khas, dengan warna bulu yang cerah dan corak yang mencolok. Berikut ini adalah penjelasan mengenai Burung Raja Udang Kalung Biru:</p><p>Burung Raja Udang Kalung Biru memiliki tubuh yang kecil dengan panjang sekitar 17 hingga 19 centimeter. Bulu-bulunya didominasi oleh warna biru yang terang, khususnya pada bagian punggung, kepala, dan sayapnya. Bagian dada dan tenggorokan burung ini memiliki corak putih yang membentuk semacam kalung, yang memberikan nama spesifiknya yaitu \"Kalung Biru\". Paruh burung ini berwarna hitam, sementara kaki dan kaki burung berwarna merah jambu.</p><p>Habitat alami Burung Raja Udang Kalung Biru terutama terdapat di hutan-hutan rawa, sungai, dan danau di Kalimantan. Mereka sering ditemukan di sepanjang sungai atau tepi danau yang memiliki vegetasi yang lebat. Burung ini memiliki keahlian khusus dalam memburu ikan, yang menjadi sumber makanan utamanya. Mereka akan duduk di atas cabang atau batu yang menonjol di dekat air, kemudian menyusuri air dengan cepat saat melihat ikan dan menangkap mangsanya dengan paruh yang kuat.</p><p>Selain ikan, Burung Raja Udang Kalung Biru juga memakan serangga, kepiting, dan udang kecil. Mereka merupakan pemangsa yang lincah dan terampil dalam menangkap mangsa di air. Burung ini seringkali meluncur ke air dengan cepat dari posisi duduknya untuk menangkap ikan atau serangga yang berada di permukaan air. Setelah berhasil menangkap mangsa, mereka akan kembali ke posisi duduk dan memakan makanan mereka.</p><p>Burung Raja Udang Kalung Biru memiliki kebiasaan soliter, dan biasanya ditemukan hidup sendirian atau dalam pasangan. Mereka adalah burung yang teritorial dan melindungi wilayah kekuasaan mereka dari burung lain. Burung jantan sering kali menunjukkan perilaku agresif terhadap lawan jenisnya selama musim kawin. Suara panggilan burung ini khas dan terdengar seperti \"tsit-tsit\" yang pendek dan tajam.</p><p>Meskipun belum ada penilaian khusus mengenai status konservasi Burung Raja Udang Kalung Biru, ancaman terhadap populasi burung ini meliputi hilangnya habitat akibat perusakan hutan dan perburuan. Upaya konservasi yang melibatkan perlindungan habitat alaminya, pengendalian perburuan ilegal, serta peningkatan kesadaran publik tentang pentingnya pelestarian burung ini sangat penting untuk menjaga kelangsungan populasi Burung Raja Udang Kalung Biru di Kalimantan.</p>', '2023-06-10 22:21:16', '2023-06-10 22:21:16'),
(12, 'Macan Dahan', 'faunakalimantan/yoajLs071g2FLbtGDwZsaIYT6SGzfean3h3DMbqN.jpg', '<p>Macan Dahan Kalimantan, yang juga dikenal sebagai Macan Dahan Borneo (Neofelis diardi borneensis), adalah salah satu subspesies langka dari macan dahan yang dapat ditemukan di pulau Kalimantan, Indonesia. Macan Dahan Kalimantan memiliki keunikan dan pentingnya peran dalam ekosistem hutan Kalimantan. Berikut adalah penjelasan mengenai Macan Dahan Kalimantan:</p><p>Macan Dahan Kalimantan memiliki penampilan yang khas dan memukau. Mereka memiliki tubuh yang besar dan kompak, dengan panjang tubuh mencapai 90 hingga 120 centimeter, ditambah dengan ekor yang panjang sekitar 50 hingga 75 centimeter. Bulu mereka didominasi oleh corak belang-belang kemerahan atau kecokelatan dengan latar belakang kuning kecokelatan. Salah satu ciri khas yang membedakan Macan Dahan Kalimantan adalah adanya pola belang-belang yang melintang di wajah mereka, mirip dengan tanda \"wajah berbentuk M\".</p><p>Macan Dahan Kalimantan adalah hewan yang sangat terampil dalam berpindah-pindah di atas pohon. Mereka memiliki cakar yang kuat dan fleksibel, memungkinkan mereka untuk melompat, memanjat, dan menjelajahi lingkungan tajuk pohon dengan lincah. Mereka juga memiliki kemampuan untuk berenang dengan baik dan kadang-kadang turun ke tanah untuk bergerak di antara area hutan yang berbeda.</p><p>Sebagai predator karnivora, Macan Dahan Kalimantan adalah pemangsa yang tangguh. Diet mereka terutama terdiri dari mamalia kecil, seperti kera ekor panjang, tupai, dan hewan pengerat lainnya. Mereka juga dapat memangsa burung, reptil, dan invertebrata. Macan Dahan Kalimantan merupakan hewan yang teritorial dan mengamati wilayah kekuasaannya dengan cermat untuk mencari mangsa.</p><p>Habitat alami Macan Dahan Kalimantan adalah hutan-hutan primer dan sekunder di pulau Kalimantan, termasuk hutan dataran rendah, hutan pegunungan, dan hutan rawa. Mereka biasanya tinggal di daerah dengan vegetasi yang lebat dan memiliki akses yang baik ke sumber air. Kehadiran mereka dalam ekosistem hutan sangat penting karena mereka berperan sebagai predator yang membantu menjaga keseimbangan populasi hewan lainnya.</p><p>Sayangnya, populasi Macan Dahan Kalimantan saat ini terancam kepunahan. Perusakan habitat akibat deforestasi, perburuan ilegal, dan konflik dengan manusia merupakan ancaman utama bagi kelangsungan hidup mereka. Macan Dahan Kalimantan saat ini masuk dalam kategori Terancam Kritis dalam Daftar Merah IUCN.</p><p>Upaya konservasi yang melibatkan perlindungan habitat alaminya, penegakan hukum terhadap perburuan ilegal, dan peningkatan kesadaran publik tentang pentingnya pelestarian Macan Dahan Kalimantan sangat penting untuk melindungi spesies ini. Kolaborasi antara pemerintah, organisasi konservasi, dan masyarakat lokal diperlukan untuk memastikan kelangsungan hidup Macan Dahan Kalimantan dan menjaga keanekaragaman hayati di hutan Kalimantan.</p>', '2023-06-10 22:34:39', '2023-06-10 22:34:39'),
(13, 'Ikan Pesut Mahakam', 'faunakalimantan/q5VfG1O5Mek9vAz9hISZZ2Qoad2QYI5m6efqpjID.png', '<p>Ikan Pesut Mahakam, juga dikenal sebagai Ikan Pesut Mahakam Kalimantan (Orcaella brevirostris) adalah spesies ikan air tawar yang sangat langka dan endemik di sungai Mahakam, Kalimantan, Indonesia. Ikan ini memiliki penampilan yang unik dan menjadi simbol kekayaan alam sungai Mahakam. Berikut adalah penjelasan tentang Ikan Pesut Mahakam Kalimantan:</p><p>Ikan Pesut Mahakam memiliki tubuh yang ramping dan berwarna abu-abu dengan area perut yang lebih terang. Mereka memiliki paruh yang panjang dan pipi yang bengkak, memberikan wajahnya yang khas. Ukurannya dapat mencapai panjang sekitar 2 hingga 2,5 meter dan berat mencapai 100 hingga 200 kilogram. Ikan ini termasuk dalam keluarga ikan lumba-lumba dan memiliki gigi yang jarang, cocok untuk pola makan mereka yang terdiri dari ikan dan hewan kecil lainnya.</p><p>Habitat alami Ikan Pesut Mahakam terutama terdapat di sungai Mahakam, yang merupakan salah satu sungai terbesar di Kalimantan Timur. Mereka biasanya ditemukan di perairan yang dangkal dengan arus yang lambat, seperti muara sungai, estuari, dan daerah sekitar sungai yang memiliki perairan dangkal dan berawa-rawa. Ikan ini memiliki kemampuan untuk berenang ke hulu dan hilir sungai Mahakam untuk mencari makanan dan berbagai habitat.</p><p>Ikan Pesut Mahakam dikenal dengan kecerdasan dan perilaku sosial yang kompleks. Mereka sering terlihat berenang dalam kelompok kecil atau berkelompok besar yang terdiri dari beberapa individu. Ikan ini juga memiliki kemampuan untuk berkomunikasi menggunakan suara dan getaran tubuh, yang membantu mereka berinteraksi dan berkoordinasi dengan sesama anggota kelompok.</p><p>Sayangnya, populasi Ikan Pesut Mahakam saat ini terancam kepunahan. Ancaman utama terhadap spesies ini adalah perburuan ilegal, perusakan habitat akibat kegiatan manusia seperti pertambangan, pencemaran air, dan perubahan ekosistem sungai. Perubahan iklim juga dapat berdampak negatif terhadap keberlangsungan hidup ikan ini.</p><p>Upaya konservasi dilakukan untuk melindungi Ikan Pesut Mahakam, termasuk penegakan hukum terhadap perburuan ilegal, pengawasan dan pemantauan habitat, serta pengembangan program pemulihan populasi. Selain itu, edukasi dan kesadaran masyarakat juga sangat penting untuk mempromosikan perlindungan spesies ini dan pentingnya menjaga keberlanjutan ekosistem sungai Mahakam.</p><p>Dengan kerja sama antara pemerintah, organisasi konservasi, masyarakat lokal, dan komunitas ilmiah, diharapkan upaya konservasi yang berkelanjutan dapat dilakukan untuk memastikan kelangsungan hidup Ikan Pesut Mahakam dan mempertahankan keanekaragaman hayati sungai Mahakam yang unik.</p>', '2023-06-10 22:41:04', '2023-06-10 22:41:04'),
(14, 'Rangkong Papan', 'faunakalimantan/HwqBkBT7k6HuYyD4hu6S3Y8Q3x0vjy5vtdDAlY8N.jpg', '<p>Rangkong Papan Kalimantan, juga dikenal sebagai Rangkong Kalimantan (Buceros vigil), adalah salah satu burung terbesar dan paling menonjol di pulau Kalimantan, Indonesia. Dengan ciri khasnya yang mencolok, Rangkong Papan Kalimantan telah menjadi simbol kekayaan alam dan keindahan hutan Kalimantan. Berikut adalah penjelasan tentang Rangkong Papan Kalimantan:</p><p>Rangkong Papan Kalimantan memiliki tubuh yang besar dan gagah. Panjangnya mencapai sekitar 100 hingga 120 cm, dengan berat mencapai 2 hingga 3 kg. Burung ini memiliki sayap yang lebar dan kuat, serta ekor yang panjang dan bercabang. Penampilan yang paling mencolok adalah paruhnya yang besar dan kokoh, yang bisa mencapai setengah panjang tubuhnya. Paruh tersebut memiliki warna cerah seperti kuning atau oranye dengan area hitam di ujungnya.</p><p>Habitat alami Rangkong Papan Kalimantan adalah hutan primer dan sekunder di pulau Kalimantan, terutama di hutan dataran rendah, pegunungan, dan hutan rawa. Mereka sering ditemukan di daerah dengan vegetasi yang lebat, seperti hutan hujan tropis. Burung ini memiliki kecenderungan untuk tinggal di pohon-pohon yang tinggi dan menjunjung tinggi kehidupan di kanopi hutan.</p><p>Rangkong Papan Kalimantan memiliki peran penting dalam ekosistem hutan. Mereka adalah pemakan buah-buahan besar, dan dengan paruhnya yang kuat, mereka mampu membantu menyebarkan biji-biji tumbuhan dalam kotoran mereka. Ini berkontribusi pada penyebaran dan regenerasi hutan yang sehat. Selain itu, burung ini juga memainkan peran penting dalam rantai makanan, sebagai pemangsa serangga, reptil kecil, dan hewan kecil lainnya.</p><p>Sayangnya, populasi Rangkong Papan Kalimantan saat ini terancam kepunahan. Perusakan habitat akibat deforestasi yang berkelanjutan, perburuan ilegal, dan perdagangan burung liar merupakan ancaman serius bagi kelangsungan hidup mereka. Rangkong Papan Kalimantan saat ini masuk dalam kategori Rentan dalam Daftar Merah IUCN.</p><p>Upaya konservasi dilakukan untuk melindungi Rangkong Papan Kalimantan. Ini melibatkan perlindungan habitat alaminya, penegakan hukum terhadap perburuan ilegal, serta kampanye dan pendidikan masyarakat untuk meningkatkan kesadaran tentang pentingnya menjaga burung ini dan ekosistem hutan Kalimantan. Kolaborasi antara pemerintah, organisasi konservasi, masyarakat lokal, dan komunitas ilmiah sangat penting untuk menjaga keberlanjutan populasi Rangkong Papan Kalimantan dan menjaga keanekaragaman hayati pulau Kalimantan yang kaya.</p>', '2023-06-10 22:43:58', '2023-06-10 22:43:58'),
(15, 'Katak Kepala Pipih', 'faunakalimantan/f1frNSb3Sv5H31xLqzBibxCizxQmMa0FAvf8dwJ0.jpg', '<p>Katak Kepala Pipih Kalimantan, juga dikenal sebagai katak Kalimantan (Barbourula kalimantanensis), adalah spesies katak yang unik dan langka yang ditemukan di pulau Kalimantan, Indonesia. Katak ini memiliki karakteristik yang menarik dan menjadi bagian penting dari keanekaragaman hayati Kalimantan. Berikut adalah penjelasan tentang Katak Kepala Pipih Kalimantan:</p><p>Katak Kepala Pipih Kalimantan memiliki ciri khas kepala pipih dan tubuh yang pendek. Ukuran tubuhnya kecil, biasanya hanya sekitar 3 hingga 4 cm panjangnya. Katak ini memiliki kulit yang licin dan halus, dengan warna tubuh yang bervariasi, mulai dari coklat kemerahan hingga coklat kehitaman. Yang membedakan mereka adalah kepala mereka yang sangat pipih, dengan bentuk seperti segitiga dan mata yang ditempatkan di sisi atas kepala.</p><p>Habitat alami Katak Kepala Pipih Kalimantan terutama terdapat di hutan hujan dataran rendah Kalimantan, terutama di sungai-sungai yang mengalir melalui hutan primer. Mereka cenderung hidup di dekat aliran air yang lambat atau rawa-rawa dengan vegetasi yang lebat. Katak ini terbiasa hidup di air tawar, seperti sungai, sungai kecil, dan rawa-rawa, di mana mereka bersembunyi di antara tumbuhan air dan dedaunan yang tenggelam.</p><p>Katak Kepala Pipih Kalimantan memiliki adaptasi unik terhadap kehidupan air. Mereka memiliki kulit yang sangat tipis, yang memungkinkan pertukaran oksigen dan karbon dioksida dengan mudah melalui kulit mereka. Selain itu, mereka juga memiliki kaki yang pipih dan cakar yang kuat untuk membantu mereka bergerak di air dan memanjat di atas tumbuhan air yang tenggelam.</p><p>Sayangnya, populasi Katak Kepala Pipih Kalimantan saat ini terancam kepunahan. Ancaman utama terhadap spesies ini adalah hilangnya habitat akibat perusakan hutan, pencemaran air, dan perubahan ekosistem sungai. Penangkapan ilegal untuk perdagangan hewan peliharaan juga menjadi ancaman serius bagi kelangsungan hidup mereka.</p><p>Upaya konservasi dilakukan untuk melindungi Katak Kepala Pipih Kalimantan. Ini melibatkan perlindungan habitat alaminya, penegakan hukum terhadap perdagangan ilegal, dan pengawasan populasi. Pendidikan dan kesadaran masyarakat juga penting untuk meningkatkan pemahaman tentang pentingnya menjaga keberlanjutan spesies ini dan ekosistem air tawar Kalimantan.</p><p>Dengan kolaborasi antara pemerintah, organisasi konservasi, masyarakat lokal, dan komunitas ilmiah, diharapkan upaya konservasi yang berkelanjutan dapat dilakukan untuk menjaga kelangsungan hidup Katak Kepala Pipih Kalimantan dan mempertahankan keanekaragaman hayati pulau Kalimantan yang kaya.</p>', '2023-06-10 22:47:04', '2023-06-10 22:47:04'),
(16, 'Luntung Merah', 'faunakalimantan/PVDjHO0DEmhDyVRAaDaAdwmwmY1xgYW4e3Vf31jX.jpg', '<p>Luntung Merah Kalimantan, juga dikenal sebagai lutung merah (Presbytis rubicunda), adalah salah satu spesies primata yang hidup di pulau Kalimantan, Indonesia. Dikenal dengan penampilannya yang menarik dan warna bulu yang mencolok, Luntung Merah Kalimantan merupakan bagian penting dari keanekaragaman hayati Kalimantan. Berikut adalah penjelasan tentang Luntung Merah Kalimantan:</p><p>Luntung Merah Kalimantan memiliki ciri khas warna bulu merah cerah yang menonjol. Bulu mereka umumnya merah kecoklatan atau merah terang, dengan variasi warna di beberapa bagian tubuh seperti kepala, wajah, dan bagian bawah tubuh. Mereka memiliki ukuran tubuh sedang, dengan panjang tubuh mencapai sekitar 50 hingga 60 cm, dan ekor panjang yang hampir sama panjangnya. Selain itu, mereka memiliki wajah yang khas dengan bibir berwarna cerah dan telinga yang berbulu.</p><p>Luntung Merah Kalimantan umumnya ditemukan di hutan-hutan dataran rendah, hutan rawa, dan hutan pegunungan di Kalimantan. Mereka adalah hewan arboreal, yang berarti mereka menghabiskan sebagian besar waktu mereka di pohon. Mereka memiliki kaki yang kuat dan ekor yang panjang untuk membantu mereka bergerak dengan lincah di antara cabang-cabang pohon. Luntung Merah Kalimantan terbiasa hidup di ketinggian yang berbeda-beda di hutan, mulai dari dataran rendah hingga pegunungan.</p><p>Luntung Merah Kalimantan adalah hewan herbivora, yang sebagian besar makanannya terdiri dari daun, buah, dan tunas tumbuhan. Mereka memiliki gigi yang disesuaikan untuk mengunyah makanan serat tinggi. Mereka menghabiskan sebagian besar waktu mereka mencari makan di atas pohon, menjelajahi lingkungan mereka untuk mencari makanan yang tersedia.</p><p>Populasi Luntung Merah Kalimantan saat ini terancam kepunahan. Ancaman utama terhadap spesies ini adalah perusakan habitat akibat deforestasi yang berkelanjutan, perburuan ilegal, dan perdagangan hewan liar. Hilangnya hutan yang merupakan tempat mereka tinggal dan mencari makanan menyebabkan penurunan jumlah populasi.</p><p>Upaya konservasi dilakukan untuk melindungi Luntung Merah Kalimantan. Ini melibatkan perlindungan habitat alami mereka, penegakan hukum terhadap perburuan ilegal, dan pengawasan populasi. Pendidikan dan kesadaran masyarakat juga penting untuk meningkatkan pemahaman tentang pentingnya menjaga keberlanjutan spesies ini dan ekosistem hutan Kalimantan.</p><p>Melalui kerjasama antara pemerintah, organisasi konservasi, masyarakat lokal, dan komunitas ilmiah, diharapkan dapat dilakukan upaya konservasi yang berkelanjutan untuk menjaga kelangsungan hidup Luntung Merah Kalimantan dan mempertahankan keanekaragaman hayati Kalimantan yang kaya dan unik.</p>', '2023-06-10 22:51:42', '2023-06-10 22:51:42'),
(17, 'Kucing Merah', 'faunakalimantan/BFhpNMuMDSH2QxNm2P0CuMp6OeGKsuFhYTPXPTse.jpg', '<p>Kucing Merah Kalimantan, juga dikenal sebagai Kucing Hutan Kalimantan (Catopuma badia), adalah salah satu spesies kucing liar yang endemik di pulau Kalimantan, Indonesia. Kucing Merah Kalimantan memiliki penampilan yang menarik dengan bulu berwarna merah kecoklatan yang khas, dan merupakan hewan yang penting dalam keanekaragaman hayati Kalimantan. Berikut adalah penjelasan tentang Kucing Merah Kalimantan:</p><p>Kucing Merah Kalimantan adalah kucing berukuran sedang dengan tubuh yang ramping dan kaki yang proporsional. Mereka memiliki kepala yang bulat dengan telinga yang kecil dan tajam. Salah satu ciri khas yang membedakan mereka adalah bulu merah kecoklatan yang meliputi tubuh mereka, dengan pola bintik-bintik gelap di sepanjang punggung dan ekor mereka. Mata mereka biasanya berwarna hijau atau keemasan.</p><p>Habitat alami Kucing Merah Kalimantan terutama terdapat di hutan-hutan dataran rendah dan hutan pegunungan di Kalimantan. Mereka adalah hewan yang sangat penakut dan pemalu, lebih suka bersembunyi di semak-semak atau di antara vegetasi tebal. Kucing Merah Kalimantan cenderung menghindari interaksi dengan manusia dan lebih suka menjaga jarak dari kebisingan dan gangguan.</p><p>Kucing Merah Kalimantan adalah karnivora dan memakan berbagai jenis mangsa, termasuk mamalia kecil, burung, reptil, dan serangga. Mereka merupakan predator yang terampil dan menggunakan kecepatan dan kelincahan mereka untuk berburu mangsa di antara rerimbunan pepohonan atau di tanah. Kucing Merah Kalimantan juga memiliki kemampuan berenang yang baik dan dapat mengejar mangsa ke dalam air jika diperlukan.</p><p>Populasi Kucing Merah Kalimantan saat ini terancam kepunahan. Ancaman utama terhadap spesies ini adalah hilangnya habitat akibat deforestasi yang berkepanjangan, perburuan ilegal, dan konflik dengan manusia. Perusakan hutan yang mengakibatkan hilangnya habitat alami mereka mengancam kelangsungan hidup kucing ini.</p><p>Upaya konservasi dilakukan untuk melindungi Kucing Merah Kalimantan. Ini melibatkan perlindungan habitat alami mereka, pemantauan populasi, dan penegakan hukum terhadap perburuan ilegal. Pendidikan dan kesadaran masyarakat juga penting untuk mempromosikan keberlanjutan dan perlindungan spesies ini.</p><p>Melalui kerjasama antara pemerintah, organisasi konservasi, masyarakat lokal, dan komunitas ilmiah, diharapkan dapat dilakukan upaya konservasi yang berkelanjutan untuk menjaga kelangsungan hidup Kucing Merah Kalimantan dan mempertahankan keanekaragaman hayati Kalimantan yang unik.</p>', '2023-06-10 22:57:33', '2023-06-10 22:57:33'),
(18, 'Owa Owa', 'faunakalimantan/LrPLvs5db8RAKwk70gu20N8iiQXztmNQddCVNfLb.jpg', '<p>Owa-owa Kalimantan, juga dikenal sebagai Owa Kalimantan (Hylobates muelleri), adalah salah satu spesies primata yang hidup di pulau Kalimantan, Indonesia. Owa-owa Kalimantan termasuk dalam keluarga Hylobatidae atau gibon dan merupakan salah satu spesies kera terancam yang memerlukan perlindungan khusus. Berikut adalah penjelasan tentang Owa-owa Kalimantan:</p><p>Owa-owa Kalimantan memiliki ciri khas berupa tubuh yang kecil dan anggun, dengan panjang tubuh sekitar 50 hingga 60 cm dan berat sekitar 7 hingga 10 kg. Mereka memiliki lengan yang panjang dan kaki yang relatif pendek, serta ekor yang hampir tidak terlihat. Salah satu ciri khas yang membedakan mereka adalah adanya kantung suara di tenggorokan yang memungkinkan mereka mengeluarkan suara yang khas.</p><p>Warna bulu Owa-owa Kalimantan bervariasi, tetapi umumnya cokelat gelap hingga hitam. Mereka memiliki wajah yang ekspresif dengan bibir berwarna terang dan mata yang besar dan cerah. Owa-owa Kalimantan juga memiliki lengan dan jari-jari yang panjang, memungkinkan mereka untuk bergerak dengan lincah di atas pohon.</p><p>Owa-owa Kalimantan adalah primata arboreal, yang berarti mereka menghabiskan sebagian besar waktu mereka di pohon. Mereka memiliki kebiasaan hidup dalam kelompok kecil yang terdiri dari pasangan monogami dan keturunan mereka. Owa-owa Kalimantan adalah hewan yang sangat aktif dan lincah, melompat dari cabang ke cabang dengan keahlian yang luar biasa. Mereka juga memiliki kemampuan untuk berjalan dengan dua kaki di atas cabang yang kuat.</p><p>Owa-owa Kalimantan adalah hewan herbivora, yang sebagian besar makanannya terdiri dari buah-buahan, daun, bunga, dan serangga kecil. Mereka adalah penyebar biji alami dalam hutan, karena mereka memakan buah-buahan dan kemudian mengeluarkan biji-bijinya di tempat lain melalui tinja mereka. Hal ini memainkan peran penting dalam menjaga keanekaragaman hayati dan regenerasi hutan.</p><p>Populasi Owa-owa Kalimantan saat ini terancam kepunahan. Ancaman utama terhadap spesies ini adalah perusakan habitat akibat deforestasi yang berkelanjutan, perburuan ilegal, dan perdagangan hewan liar. Hilangnya hutan yang merupakan tempat mereka tinggal dan mencari makanan menyebabkan penurunan jumlah populasi.</p><p>Upaya konservasi dilakukan untuk melindungi Owa-owa Kalimantan. Ini melibatkan perlindungan habitat alami mereka, penegakan hukum terhadap perburuan ilegal, dan pemantauan populasi. Pendidikan dan kesadaran masyarakat juga penting untuk meningkatkan pemahaman tentang pentingnya menjaga keberlanjutan spesies ini dan ekosistem hutan Kalimantan.</p><p>Melalui kerjasama antara pemerintah, organisasi konservasi, masyarakat lokal, dan komunitas ilmiah, diharapkan dapat dilakukan upaya konservasi yang berkelanjutan untuk melindungi Owa-owa Kalimantan dan memastikan kelangsungan hidup spesies ini serta keanekaragaman hayati Kalimantan yang unik.</p>', '2023-06-10 23:00:04', '2023-06-10 23:00:04'),
(19, 'Biawak Kalimantan', 'faunakalimantan/gfjKEeilLdRLKQucJCaEp1IGhQVGnbXtEMYDU5uk.jpg', '<p>Biawak Kalimantan, juga dikenal sebagai Biawak Tanah Kalimantan (Varanus salvator), adalah spesies biawak yang dapat ditemui di pulau Kalimantan, Indonesia. Biawak Kalimantan termasuk dalam keluarga Varanidae dan merupakan salah satu reptil yang cukup besar dan terkenal di kawasan tersebut. Berikut adalah penjelasan tentang Biawak Kalimantan:</p><p>Biawak Kalimantan memiliki ukuran yang cukup besar, dengan panjang tubuh mencapai 2 hingga 2,5 meter dan berat mencapai 20 hingga 30 kilogram. Mereka memiliki tubuh yang panjang, dengan ekor yang membantu mereka dalam pergerakan dan kaki yang kuat untuk berjalan di daratan atau berenang di perairan. Biawak Kalimantan memiliki kulit yang kasar dan bersisik, dengan warna dominan cokelat gelap atau hitam dengan bintik-bintik kuning atau keputihan yang khas.</p><p>Biawak Kalimantan adalah hewan yang amfibi, yang berarti mereka dapat hidup baik di darat maupun di air. Mereka dapat ditemukan di berbagai habitat, termasuk hutan-hutan lebat, rawa-rawa, sungai, dan daerah pesisir. Biawak Kalimantan adalah predator yang tangguh dan memakan berbagai jenis mangsa, termasuk ikan, amfibi, reptil, burung, mamalia kecil, dan kadang-kadang juga memakan bangkai.</p><p>Biawak Kalimantan memiliki peran penting dalam ekosistem. Sebagai predator puncak, mereka membantu menjaga keseimbangan populasi hewan lain di ekosistem. Mereka juga berperan dalam penyebaran biji melalui tinja mereka, sehingga membantu dalam regenerasi dan pemuliaan hutan. Biawak Kalimantan juga berkontribusi dalam rantai makanan dan sirkulasi nutrisi di ekosistem yang mereka huni.</p><p>Namun, populasi Biawak Kalimantan saat ini menghadapi ancaman kepunahan. Ancaman utama adalah hilangnya habitat akibat perambahan hutan, perburuan ilegal, dan perangkap. Deforestasi yang berkepanjangan dan konversi lahan untuk pertanian, pertambangan, dan pemukiman manusia telah menyebabkan penurunan luas habitat alami Biawak Kalimantan. Selain itu, perdagangan hewan liar juga menjadi ancaman serius terhadap spesies ini.</p><p>Upaya konservasi dilakukan untuk melindungi Biawak Kalimantan. Ini melibatkan perlindungan habitat alami mereka, penegakan hukum terhadap perburuan ilegal, dan pemantauan populasi. Pendidikan dan kesadaran masyarakat juga penting untuk meningkatkan pemahaman tentang pentingnya menjaga keberlanjutan spesies ini dan ekosistem Kalimantan.</p><p>Melalui kolaborasi antara pemerintah, organisasi konservasi, masyarakat lokal, dan komunitas ilmiah, diharapkan dapat dilakukan upaya konservasi yang berkelanjutan untuk melindungi Biawak Kalimantan dan memastikan kelangsungan hidup spesies ini serta keanekaragaman hayati yang kaya di pulau Kalimantan.</p>', '2023-06-10 23:11:56', '2023-06-10 23:11:56'),
(20, 'Luntung Dahi Putih', 'faunakalimantan/GXqq8dujDTT5qAuLEmACtIEZ3OaepJ6y28TDQft6.png', '<p><br>Luntung Dahi Putih Kalimantan (Presbytis frontata) adalah sebuah spesies kera endemik yang ditemukan di pulau Kalimantan, Indonesia. Juga dikenal sebagai lutung dahi putih, lutung berkepala merah, atau lutung Borneo, spesies ini memiliki ciri khas warna dahi yang mencolok dan merupakan primata yang menarik untuk dipelajari. Berikut adalah penjelasan tentang Luntung Dahi Putih Kalimantan:</p><p>Luntung Dahi Putih Kalimantan memiliki tubuh yang proporsional, dengan panjang tubuh antara 45 hingga 65 cm dan ekor yang panjangnya hampir sama dengan tubuhnya. Mereka memiliki bulu tebal dan halus dengan warna tubuh yang umumnya abu-abu kehitaman. Namun, yang membedakan mereka adalah dahi putih yang mencolok yang menjadi ciri khasnya, sehingga memberikan nama spesies ini.</p><p>Seperti halnya primata lainnya, Luntung Dahi Putih Kalimantan adalah hewan arboreal, yang berarti mereka menghabiskan sebagian besar waktunya di atas pohon. Mereka memiliki kaki yang kuat dan lengan yang panjang, memungkinkan mereka untuk melompat dan bergerak dengan lincah di antara cabang-cabang pohon. Keahlian mereka dalam bergerak di pohon membuat mereka terlihat sangat gesit dan elegan.</p><p>Luntung Dahi Putih Kalimantan hidup dalam kelompok sosial yang terdiri dari beberapa individu. Kelompok ini dipimpin oleh satu atau beberapa individu jantan dewasa, sedangkan betina dan anak-anak juga menjadi anggota kelompok yang penting. Kelompok-kelompok ini berinteraksi melalui komunikasi visual, vokal, dan sentuhan untuk memperkuat ikatan sosial mereka.</p><p>Makanan utama Luntung Dahi Putih Kalimantan adalah dedaunan, buah-buahan, bunga, dan tunas muda. Mereka memiliki sistem pencernaan yang dirancang untuk mengolah serat tumbuhan, sehingga memungkinkan mereka untuk mendapatkan nutrisi yang diperlukan dari makanan tersebut. Selain itu, mereka juga dapat mengonsumsi serangga kecil dan biji-bijian sebagai tambahan dalam diet mereka.</p><p>Luntung Dahi Putih Kalimantan menghadapi ancaman yang signifikan terhadap kelangsungan hidup mereka. Perusakan dan fragmentasi habitat akibat deforestasi, perambahan hutan, dan konversi lahan menjadi perkebunan atau pemukiman manusia telah menyebabkan penurunan jumlah populasi mereka. Selain itu, perdagangan hewan liar juga menjadi ancaman serius terhadap spesies ini.</p><p>Upaya konservasi dilakukan untuk melindungi Luntung Dahi Putih Kalimantan. Ini melibatkan perlindungan habitat alami mereka, pemantauan populasi, dan pendidikan masyarakat tentang pentingnya menjaga keberlanjutan spesies ini dan ekosistem Kalimantan. Penegakan hukum terhadap perdagangan hewan liar juga diperlukan untuk meminimalkan ancaman terhadap spesies ini.</p><p>Dengan kolaborasi antara pemerintah, organisasi konservasi, masyarakat lokal, dan komunitas ilmiah, diharapkan dapat dilakukan upaya konservasi yang berkelanjutan untuk melindungi Luntung Dahi Putih Kalimantan dan memastikan kelangsungan hidup spesies ini serta keanekaragaman hayati yang unik di pulau Kalimantan.</p>', '2023-06-10 23:13:52', '2023-06-10 23:13:52'),
(21, 'Gajah Kerdil', 'faunakalimantan/5M9f4ZNpdFXVKfp1gVYRQYfYiVBKar8QJUCuLb3X.jpg', '<p>Gajah Kerdil Kalimantan, juga dikenal dengan sebutan Gajah Pygmy Kalimantan (Elephas maximus borneensis), adalah salah satu subspesies gajah Asia yang dapat ditemukan di pulau Kalimantan, Indonesia. Gajah Kerdil Kalimantan merupakan salah satu hewan yang menarik perhatian karena ukuran tubuhnya yang lebih kecil dibandingkan dengan subspesies gajah lainnya. Berikut adalah penjelasan tentang Gajah Kerdil Kalimantan:</p><p>Gajah Kerdil Kalimantan memiliki ukuran tubuh yang relatif kecil, dengan tinggi mencapai sekitar 2 hingga 3 meter dan berat sekitar 2.000 hingga 3.000 kilogram. Mereka memiliki telinga yang besar dan lebar, serta gading yang relatif pendek. Gading pada Gajah Kerdil Kalimantan biasanya tidak terlalu panjang dan cenderung melengkung ke bawah. Selain itu, mereka juga memiliki bulu yang lebih banyak di tubuhnya, memberikan kesan lebih berbulu dibandingkan dengan subspesies gajah lainnya.</p><p>Gajah Kerdil Kalimantan hidup di hutan-hutan Kalimantan yang lebat, termasuk di hutan dataran rendah, hutan rawa, dan daerah pantai. Mereka merupakan hewan herbivora dan sebagian besar makanannya terdiri dari dedaunan, rumput, buah-buahan, dan tunas pohon. Untuk mencapai makanan yang sulit dijangkau, mereka menggunakan belalai mereka yang fleksibel dan kuat.</p><p>Karena habitat Gajah Kerdil Kalimantan semakin terancam akibat perusakan hutan dan perambahan manusia, populasi mereka mengalami penurunan yang signifikan. Perburuan ilegal dan perdagangan gading juga menjadi ancaman serius terhadap spesies ini. Hal ini menyebabkan Gajah Kerdil Kalimantan masuk dalam daftar spesies yang terancam punah.</p><p>Upaya konservasi dilakukan untuk melindungi Gajah Kerdil Kalimantan. Perlindungan habitat alami mereka, penegakan hukum terhadap perburuan ilegal, dan kesadaran masyarakat tentang pentingnya pelestarian spesies ini menjadi langkah-langkah yang penting dalam upaya konservasi. Pemerintah, organisasi konservasi, dan masyarakat lokal bekerja sama untuk menjaga keberlanjutan populasi Gajah Kerdil Kalimantan serta memastikan kelangsungan hidupnya di pulau Kalimantan.</p><p>Dalam rangka konservasi, penting juga untuk mengedukasi masyarakat tentang pentingnya menjaga keseimbangan ekosistem di Kalimantan dan perlunya perlindungan terhadap spesies ikonik seperti Gajah Kerdil Kalimantan. Dengan demikian, diharapkan dapat tercipta kesadaran dan komitmen yang lebih besar untuk menjaga kelestarian Gajah Kerdil Kalimantan dan keanekaragaman hayati Kalimantan yang unik.</p>', '2023-06-10 23:18:58', '2023-06-10 23:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `fauna_voices`
--

CREATE TABLE `fauna_voices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `floras`
--

CREATE TABLE `floras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floras`
--

INSERT INTO `floras` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Anggrek Hitam', '<p>Anggrek Hitam Kalimantan, juga dikenal sebagai Coelogyne pandurata atau Anggrek Hitam Borneo, adalah spesies anggrek yang endemik di pulau Kalimantan, Indonesia. Anggrek ini termasuk dalam genus Coelogyne yang merupakan salah satu genus anggrek terbesar dalam suku Orchidaceae.</p><p>Anggrek Hitam Kalimantan dikenal dengan nama \"Anggrek Hitam\" karena warna bunganya yang berbeda dengan kebanyakan anggrek lainnya. Bunganya memiliki warna dasar hitam atau cokelat tua dengan bercak-bercak kuning atau cokelat terang yang membentuk pola yang unik. Bunga ini memiliki bentuk menyerupai kantong dengan ujung yang melengkung. Selain itu, bunga ini juga memiliki aroma yang khas dan harum.</p><p>Anggrek Hitam Kalimantan tumbuh di hutan-hutan Kalimantan yang lembap dan teduh. Anggrek ini umumnya hidup di ketinggian antara 500 hingga 1.200 meter di atas permukaan laut. Seperti kebanyakan anggrek, Anggrek Hitam Kalimantan juga merupakan tanaman epifit yang tumbuh menempel pada batang pohon atau cabangnya.</p><p>Anggrek Hitam Kalimantan termasuk dalam anggrek yang cukup langka dan dilindungi di Indonesia. Populasi alaminya terancam oleh hilangnya habitat alami, perusakan hutan, dan perdagangan ilegal. Oleh karena itu, upaya konservasi dan perlindungan terhadap spesies ini sangat penting untuk memastikan kelangsungan hidupnya.</p><p>Spesies anggrek seperti Anggrek Hitam Kalimantan memiliki daya tarik estetika yang tinggi dan sering dikoleksi oleh pecinta anggrek dan penggemar tanaman hias. Namun, jika Anda tertarik untuk memiliki atau mengoleksi anggrek ini, penting untuk memastikan bahwa Anda memperolehnya secara legal dari sumber yang terpercaya dan tidak mengganggu populasi alaminya.</p>', 'flora/qLET6seVaem8sy4VK0ss0pN3AfMnjddeTwYFFS9l.jpg', '2023-06-10 20:48:16', '2023-06-10 20:48:16'),
(4, 'Kantong Samar', '<p>Kantong Samar Kalimantan, juga dikenal dengan nama ilmiah Nepenthes ampullaria, adalah tumbuhan karnivora yang endemik di pulau Kalimantan, Indonesia. Tumbuhan ini dikenal dengan sebutan \"Kantong Samar\" karena memiliki ciri khas berupa kantong yang digunakan untuk menangkap dan mencerna serangga.</p><p>Kantong Samar Kalimantan memiliki bentuk yang unik dan menarik. Daunnya berbentuk seperti gelas atau kantong yang menggantung di ujung tangkainya. Kantong ini memiliki ukuran yang bervariasi, mulai dari beberapa sentimeter hingga lebih dari 30 sentimeter. Warnanya dapat bervariasi, mulai dari hijau terang, hijau kekuningan, hingga merah gelap.</p><p>Fungsi utama kantong pada Kantong Samar Kalimantan adalah sebagai perangkap untuk menangkap serangga. Pada bagian atas kantong terdapat tutup yang berfungsi untuk menjaga agar air hujan tidak masuk ke dalam kantong. Ketika serangga masuk ke dalam kantong untuk mencari makanan atau mencari tempat berlindung, ia akan terperangkap di dalam kantong yang licin dan berisi cairan pencernaan. Tumbuhan ini menggunakan enzim dalam cairan pencernaannya untuk mencerna serangga dan memperoleh nutrisi tambahan seperti nitrogen dan fosfor.</p><p>Kantong Samar Kalimantan biasanya tumbuh di habitat yang lembap, seperti hutan rawa, hutan dataran rendah, atau tempat-tempat dengan kelembaban yang tinggi. Tumbuhan ini dapat ditemukan di berbagai lokasi di Kalimantan, termasuk Kalimantan Barat, Kalimantan Tengah, Kalimantan Timur, dan Kalimantan Selatan.</p><p>Selain memiliki fungsi sebagai tumbuhan karnivora, Kantong Samar Kalimantan juga memiliki nilai estetika yang tinggi. Banyak penggemar tanaman yang mengoleksi Kantong Samar Kalimantan sebagai tanaman hias karena keindahan dan keunikan bentuknya. Namun, perlu diingat bahwa tumbuhan ini dilindungi dan diperlukan izin untuk mengumpulkannya dari habitat alaminya.</p><p>Kantong Samar Kalimantan merupakan salah satu keajaiban alam yang ada di pulau Kalimantan. Keunikan bentuknya, kemampuannya sebagai tumbuhan karnivora, dan peran ekologisnya dalam rantai makanan memberikan nilai penting dalam menjaga keseimbangan ekosistem. Penting bagi kita untuk melindungi dan melestarikan Kantong Samar Kalimantan serta habitatnya agar keindahan dan keberadaannya dapat dinikmati oleh generasi mendatang.</p>', 'flora/i75FUXK10yBqLqNGBianvKDyCeAXzZI8KEepJlQw.png', '2023-06-10 21:26:30', '2023-06-10 21:26:30'),
(5, 'Mangga Kasturi', '<p>Mangga Kasturi Kalimantan, atau nama ilmiahnya Mangifera casturi, adalah salah satu varietas mangga yang berasal dari Kalimantan, Indonesia. Buah Mangga Kasturi Kalimantan memiliki ciri khas yang membedakannya dari jenis mangga lainnya.</p><p>Buah Mangga Kasturi Kalimantan memiliki ukuran sedang hingga besar, dengan bentuk bulat atau sedikit lonjong. Kulit buahnya memiliki warna hijau kekuningan saat belum matang dan berubah menjadi kuning cerah saat matang sepenuhnya. Kulitnya juga memiliki tekstur yang lembut dan licin. Selain itu, ada juga varietas Mangga Kasturi Kalimantan yang memiliki warna kulit yang lebih merah.</p><p>Daging buah Mangga Kasturi Kalimantan memiliki tekstur yang lembut dan sedikit serat. Rasanya manis dengan sedikit keasaman, memberikan kombinasi yang menyegarkan pada setiap gigitan. Buah ini juga memiliki aroma yang khas dan harum, menjadikannya salah satu pilihan favorit di kalangan pecinta mangga.</p><p>Selain sebagai buah konsumsi langsung, Mangga Kasturi Kalimantan juga sering digunakan dalam berbagai hidangan kuliner. Buah ini dapat dijadikan bahan baku untuk membuat jus, es krim, selai, dan makanan penutup lainnya. Kandungan air yang tinggi dan rasa segar yang dimilikinya menjadikannya pilihan yang populer di musim panas.</p><p>Pohon Mangga Kasturi Kalimantan tumbuh subur di iklim tropis, terutama di daerah Kalimantan yang memiliki curah hujan yang cukup tinggi. Pohonnya cukup besar dan menjulang tinggi dengan cabang yang lebat. Daunnya berwarna hijau gelap dan memiliki bentuk yang panjang dan sempit.</p><p>Mangga Kasturi Kalimantan merupakan salah satu kekayaan buah-buahan Indonesia yang khas dan memiliki nilai ekonomi. Selain memberikan kelezatan dan kepuasan bagi para penikmatnya, mangga ini juga memiliki nilai gizi yang baik. Mangga secara umum mengandung vitamin C, serat, dan berbagai nutrisi penting lainnya.</p><p>Penting untuk mencatat bahwa Mangga Kasturi Kalimantan adalah varietas lokal yang perlu dijaga dan dilestarikan. Keberadaannya merupakan bagian dari keanekaragaman hayati Indonesia. Dengan melestarikan dan menghargai mangga ini, kita juga turut menjaga warisan budaya dan kekayaan alam Indonesia.</p>', 'flora/1686461607.jpeg', '2023-06-10 21:29:20', '2023-06-10 21:33:27'),
(6, 'Tenggaring', '<p>Tenggaring Kalimantan, juga dikenal dengan nama ilmiahnya Dipterocarpus oblongifolius, adalah sejenis pohon yang endemik di pulau Kalimantan, Indonesia. Tenggaring Kalimantan termasuk dalam keluarga Dipterocarpaceae, yang terkenal dengan anggota-anggotanya yang besar dan penting dalam industri kayu. Berikut ini adalah penjelasan yang lebih rinci tentang Tenggaring Kalimantan:</p><p>Tenggaring Kalimantan memiliki bentuk pohon yang besar dan tinggi, dengan batang lurus dan cabang yang menjulang tinggi. Pohon ini dapat mencapai ketinggian hingga 60 meter atau lebih. Daun-daunnya berukuran besar dan berbentuk elips atau memanjang, dengan warna hijau pekat. Pada musim berbunga, pohon Tenggaring Kalimantan menghasilkan bunga-bunga yang berwarna putih atau kuning, memberikan keindahan pada pohon tersebut.</p><p>Salah satu ciri khas Tenggaring Kalimantan adalah kayu yang dihasilkannya. Kayu Tenggaring Kalimantan memiliki kualitas yang sangat baik dan digunakan dalam berbagai industri, seperti konstruksi, pembuatan perabot, dan pengolahan kayu lainnya. Kayu ini sangat tahan terhadap serangan rayap dan memiliki daya tahan yang baik terhadap cuaca dan kelembaban.</p><p>Selain manfaat ekonomi, Tenggaring Kalimantan juga memiliki nilai ekologi yang penting. Pohon ini merupakan bagian dari hutan-hutan tropis Kalimantan dan memberikan kontribusi yang signifikan dalam menjaga keberagaman hayati dan ekosistem. Tenggaring Kalimantan menjadi tempat hidup bagi berbagai spesies tumbuhan dan hewan, serta berperan dalam menjaga keseimbangan ekosistem.</p><p>Sayangnya, seperti banyak spesies pohon lainnya, Tenggaring Kalimantan menghadapi ancaman yang serius akibat deforestasi dan perusakan habitat. Penebangan liar dan eksploitasi yang berlebihan telah mengurangi populasi pohon ini secara signifikan. Oleh karena itu, penting bagi kita untuk melindungi dan melestarikan Tenggaring Kalimantan serta habitatnya sebagai bagian dari upaya konservasi dan perlindungan lingkungan.</p><p>Melalui kesadaran akan pentingnya menjaga keberadaan Tenggaring Kalimantan, kita dapat memastikan bahwa warisan alam dan keanekaragaman hayati Kalimantan tetap terjaga. Dengan memperhatikan nilai ekonomi dan ekologi dari pohon ini, serta mengimplementasikan praktik keberlanjutan dalam penggunaan kayu, kita dapat menjaga kelestarian Tenggaring Kalimantan bagi generasi mendatang.</p>', 'flora/QDjQpEtsjyRalgnUCElNVvxk50qZ4Odu6SUBpF1t.jpg', '2023-06-10 21:35:49', '2023-06-10 21:35:49'),
(7, 'Tengkawang', '<p>Tengkawang Kalimantan, atau juga dikenal dengan nama ilmiahnya Shorea spp., adalah sejenis pohon yang tumbuh secara alami di pulau Kalimantan, Indonesia. Tengkawang Kalimantan termasuk dalam keluarga Dipterocarpaceae, yang terkenal dengan anggota-anggotanya yang penting dalam industri kayu. Berikut ini adalah penjelasan yang lebih rinci tentang Tengkawang Kalimantan:</p><p>Tengkawang Kalimantan memiliki karakteristik yang unik dan bernilai ekonomi tinggi. Pohon ini memiliki batang tegak yang tinggi, biasanya mencapai ketinggian antara 30 hingga 60 meter. Daun-daunnya berbentuk jorong dan tersusun secara spiral. Pada musim berbunga, Tengkawang Kalimantan menghasilkan bunga-bunga yang menarik, dengan warna putih atau kuning cerah.</p><p>Salah satu ciri khas Tengkawang Kalimantan adalah buah tengkawang yang dihasilkannya. Buah ini berukuran besar, biasanya seukuran bola tenis, dan berwarna cokelat tua. Di dalam buah tengkawang terdapat biji yang mengandung minyak yang kaya akan lemak. Minyak tengkawang dikenal dengan sebutan \"kemiri Kalimantan\" dan telah lama digunakan oleh masyarakat lokal untuk berbagai keperluan.</p><p>Minyak tengkawang memiliki kualitas yang sangat baik dan banyak digunakan dalam industri kosmetik, farmasi, dan kuliner. Minyak ini kaya akan asam lemak tak jenuh, seperti asam oleat dan linoleat, yang bermanfaat untuk menjaga kelembaban kulit, mengurangi kerutan, dan memberikan nutrisi bagi rambut. Selain itu, minyak tengkawang juga digunakan dalam pembuatan sabun, lilin, dan produk-produk perawatan tubuh lainnya.</p><p>Selain manfaat ekonomi dari buah dan minyaknya, Tengkawang Kalimantan juga memiliki peranan penting dalam ekosistem hutan Kalimantan. Pohon ini menyediakan habitat bagi berbagai spesies tumbuhan dan hewan. Buah tengkawang juga menjadi sumber makanan bagi berbagai satwa liar, termasuk orangutan Kalimantan yang mengonsumsi daging buahnya.</p><p>Meskipun memiliki nilai ekonomi yang tinggi, Tengkawang Kalimantan juga menghadapi ancaman serius akibat deforestasi dan perusakan habitat. Penebangan liar dan perambahan hutan mengancam populasi pohon ini. Oleh karena itu, perlindungan dan konservasi Tengkawang Kalimantan menjadi sangat penting dalam menjaga keberlangsungan spesies ini dan kelestarian hutan Kalimantan secara keseluruhan.</p><p>Melalui upaya pelestarian dan pengelolaan yang berkelanjutan, kita dapat memastikan bahwa Tengkawang Kalimantan tetap tumbuh dan berkontribusi dalam menjaga keanekaragaman hayati dan ekosistem hutan. Selain itu, pengembangan ekonomi berkelanjutan yang melibatkan masyarakat lokal juga dapat memberikan insentif untuk menjaga kelestarian pohon ini. Dengan demikian, kita dapat mempertahankan warisan alam yang berharga ini bagi generasi mendatang.</p>', 'flora/3Nu3SZhuTbI2ySrwzN2DfpD5oYReAPLhGa9XeuKG.jpg', '2023-06-10 21:38:39', '2023-06-10 21:38:39'),
(8, 'Buah Ulin', '<p>Buah Ulin Kalimantan, juga dikenal sebagai buah Kembang Ulin, merupakan buah yang tumbuh di pulau Kalimantan, Indonesia. Buah ini berasal dari pohon Ulin (Eusideroxylon zwageri), salah satu spesies pohon yang sangat bernilai ekonomi di Kalimantan. Buah Ulin Kalimantan memiliki penampilan yang menarik dan unik. Bentuknya bulat dengan kulit yang keras berwarna cokelat tua hingga kehitaman. Ukuran buahnya bervariasi, umumnya kecil hingga sedang, dan kulitnya memiliki tekstur kasar dengan serat-serat halus yang memberikan sentuhan menarik saat dipegang.</p><p>Rasa Buah Ulin Kalimantan sangat khas dan menggugah selera. Saat buah ini matang sepenuhnya, daging buahnya menjadi lembut, manis, dan sedikit asam. Beberapa orang menggambarkan rasanya sebagai kombinasi antara manggis dan rambutan. Selain itu, buah Ulin Kalimantan juga memiliki aroma yang khas dan mengundang selera.</p><p>Buah Ulin Kalimantan mengandung beberapa nutrisi penting, seperti vitamin C, vitamin A, serat, dan antioksidan. Nutrisi ini bermanfaat bagi kesehatan tubuh, termasuk memperkuat sistem kekebalan, menjaga kesehatan kulit, dan membantu dalam proses pencernaan.</p><p>Selain kelezatannya, Buah Ulin Kalimantan juga memiliki nilai budaya dan ekonomi yang signifikan. Buah ini sering digunakan dalam masakan tradisional Kalimantan, seperti manisan, jus, es krim, atau dimakan secara langsung. Selain itu, Buah Ulin Kalimantan juga menjadi salah satu daya tarik wisata kuliner di Kalimantan, menarik wisatawan untuk mencicipi keunikan dan kelezatan buah lokal ini.</p><p>Namun, penting untuk memperhatikan keberlanjutan dalam memanen Buah Ulin Kalimantan. Pohon Ulin sendiri dilindungi oleh hukum di Indonesia karena keberadaannya yang terbatas dan penting untuk menjaga keseimbangan ekosistem hutan Kalimantan. Oleh karena itu, perlu adanya upaya konservasi dan pengelolaan yang bijaksana dalam memanfaatkan Buah Ulin Kalimantan, sehingga dapat terus dinikmati oleh generasi masa depan dan menjaga keberlanjutan lingkungan.</p><p>Dengan keunikan rasa dan nilai budayanya, Buah Ulin Kalimantan menjadi salah satu harta berharga yang perlu dilestarikan dan diapresiasi. Menikmati Buah Ulin Kalimantan bukan hanya menghadirkan kenikmatan kuliner, tetapi juga memperkaya pengalaman kita akan keanekaragaman alam Indonesia.</p>', 'flora/7oRiUEsuenue6hVgqtJBmzaY8BKR756SvSsc0mte.jpg', '2023-06-10 21:45:54', '2023-06-10 21:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `leaderboards`
--

CREATE TABLE `leaderboards` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `skor` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `leaderboards`
--

INSERT INTO `leaderboards` (`id`, `nama`, `skor`, `updated_at`, `created_at`) VALUES
(1, 'Faldi', 20, '2023-06-10 07:16:36', '2023-06-10 07:16:36'),
(2, 'Faldi', 20, '2023-06-10 07:17:23', '2023-06-10 07:17:23'),
(3, 'Faldi', 20, '2023-06-10 07:21:21', '2023-06-10 07:21:21'),
(4, 'Faldi', 20, '2023-06-10 07:22:42', '2023-06-10 07:22:42'),
(5, 'Faldi', 20, '2023-06-10 07:23:20', '2023-06-10 07:23:20'),
(6, 'Faldi', 20, '2023-06-10 07:27:55', '2023-06-10 07:27:55'),
(7, 'Faldi', 20, '2023-06-10 07:28:48', '2023-06-10 07:28:48'),
(8, 'Faldi', 10, '2023-06-10 07:29:55', '2023-06-10 07:29:55'),
(9, 'Faldi', 20, '2023-06-10 07:31:09', '2023-06-10 07:31:09'),
(10, 'Faldi', 20, '2023-06-10 07:32:05', '2023-06-10 07:32:05'),
(11, 'Faldi', 10, '2023-06-10 19:08:46', '2023-06-10 19:08:46'),
(12, 'Faldi', 20, '2023-06-10 19:29:58', '2023-06-10 19:29:58'),
(13, 'nanda', 20, '2023-06-10 20:30:48', '2023-06-10 20:30:48'),
(14, 'Faldi', 20, '2023-06-11 03:42:35', '2023-06-11 03:42:35'),
(15, 'Faldi', 20, '2023-06-12 22:02:42', '2023-06-12 22:02:42'),
(16, 'Faldi', 20, '2023-06-15 21:03:29', '2023-06-15 21:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2023_05_14_124855_create_pakaians_table', 3),
(7, '2023_05_14_133821_create_taris_table', 4),
(10, '2023_05_14_142346_create_bendas_table', 6),
(12, '2023_05_15_154914_create_cobas_table', 8),
(18, '2014_10_12_000000_create_users_table', 9),
(19, '2014_10_12_100000_create_password_reset_tokens_table', 9),
(20, '2019_08_19_000000_create_failed_jobs_table', 9),
(21, '2019_12_14_000001_create_personal_access_tokens_table', 9),
(22, '2023_05_14_081217_create_articles_table', 9),
(23, '2023_05_14_141338_create_taris_table', 9),
(24, '2023_05_14_141353_create_pakaians_table', 9),
(25, '2023_05_14_143748_create_bendas_table', 9),
(26, '2023_05_15_154033_create_fauna_kalimantans_table', 9),
(27, '2023_05_15_160110_create_cobas_table', 9),
(28, '2023_05_15_165819_create_fauna_voices_table', 9),
(29, '2023_05_22_140939_create_mulai_kuis_table', 9),
(30, '2023_05_23_061806_create_floras_table', 9),
(31, '2023_06_05_180256_add_bendas_to_users_table', 10),
(32, '2023_06_05_180332_create_bendas_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `mulai_kuis`
--

CREATE TABLE `mulai_kuis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soal` varchar(255) NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `Jawaban` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mulai_kuis`
--

INSERT INTO `mulai_kuis` (`id`, `soal`, `option_a`, `option_b`, `option_c`, `option_d`, `Jawaban`, `created_at`, `updated_at`) VALUES
(1, 'Nama hewan yang berada dibawah jembatan barito', 'bekantan', 'monyet', 'ayam', 'sapissssssssss', 'bekantan', '2023-06-05 19:18:13', '2023-06-05 21:13:24'),
(3, 'ww', 'ww', 'aa', 'cc', 'cc', 'ww', '2023-06-09 23:13:19', '2023-06-09 23:13:19'),
(4, 'test', 'a', 'b', 'c', 'd', 'a', '2023-06-15 09:18:52', '2023-06-15 09:18:52'),
(5, 'a', 'a', 'b', 'c', 'd', 'c', '2023-06-15 10:29:38', '2023-06-15 10:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `pakaians`
--

CREATE TABLE `pakaians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakaians`
--

INSERT INTO `pakaians` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'an', 'pakaian/1686317276.png', '<p>aaaaaaaa</p>', '2023-06-05 09:53:22', '2023-06-09 05:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taris`
--

CREATE TABLE `taris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taris`
--

INSERT INTO `taris` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'ww', 'tari/1686317444.jpg', '<p>wwwwwwwwwwwwwwwwwwwwwww</p>', '2023-06-08 07:36:58', '2023-06-09 05:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Faldi', 'admin', 'admin@gmail.com', NULL, '$2y$10$l9CfcHS0dMiuEnZtg2bPhe.0c7qCSgKkq4QHIteuEftw5b0y84Hdm', NULL, NULL, NULL),
(2, 'roy', 'user', 'roy123@gmail.com', NULL, '$2y$10$nHHTIq21zVHP8ad5ZI7rDuWdL4LPl.tzsxScOkuz1gS.LOVjJwkvu', NULL, '2023-06-05 08:37:13', '2023-06-05 08:37:13'),
(3, 'nanda', 'user', 'nanda@gmail.com', NULL, '$2y$10$PYMgDADrFMIvj5Zn6eiNguYXKuUpXKVJ/b7l35LWprtZIudSYNODS', NULL, '2023-06-10 20:30:18', '2023-06-10 20:30:18'),
(6, 'faldi', 'user', 'faldi@gmail.com', NULL, '$2y$10$VeWp1H5JZ7ijOUgxd4v3s.Boojq7pxVgIoHmApzo9sPnBBmWqql86', NULL, '2023-06-12 22:04:43', '2023-06-12 22:04:43'),
(7, 'faldi', 'user', 'sopia@gmail.com', NULL, '$2y$10$BUBx.E1Ur29vuVKCMEZHu.0ILzn5mo/rxaTZUBnutidEEzbAWA7h.', NULL, '2023-06-14 00:22:26', '2023-06-14 00:22:26'),
(8, 'nanda', 'user', 'nanda123@gmail.com', NULL, '$2y$10$VdMzJSlmlMrE.kbWLz2ak.DfnkO4zBdqg60BSyEMhXA8IrSh7Azpi', NULL, '2023-06-14 21:59:57', '2023-06-14 21:59:57'),
(9, 'user', 'user', 'user@gmail.com', NULL, '$2y$10$7ZjhNAwyh8.gXSj1E6x2o.Kd7zDHWqeQc9it3xZVwBGN4nZN53Yoi', NULL, '2023-06-14 22:00:45', '2023-06-14 22:00:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bendas`
--
ALTER TABLE `bendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cobas`
--
ALTER TABLE `cobas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fauna_kalimantans`
--
ALTER TABLE `fauna_kalimantans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fauna_voices`
--
ALTER TABLE `fauna_voices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floras`
--
ALTER TABLE `floras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaderboards`
--
ALTER TABLE `leaderboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mulai_kuis`
--
ALTER TABLE `mulai_kuis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakaians`
--
ALTER TABLE `pakaians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `taris`
--
ALTER TABLE `taris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bendas`
--
ALTER TABLE `bendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cobas`
--
ALTER TABLE `cobas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fauna_kalimantans`
--
ALTER TABLE `fauna_kalimantans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `fauna_voices`
--
ALTER TABLE `fauna_voices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `floras`
--
ALTER TABLE `floras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leaderboards`
--
ALTER TABLE `leaderboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `mulai_kuis`
--
ALTER TABLE `mulai_kuis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pakaians`
--
ALTER TABLE `pakaians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taris`
--
ALTER TABLE `taris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
