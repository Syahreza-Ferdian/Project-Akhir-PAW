<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $appetizer_menus = [
            [
                'nama'          => 'Crispy Shrimp Delight',
                'short_desc'    => 'Udang segar yang dilapisi tepung renyah, disajikan dengan saus mayo special.',
                'id_kategori'   => 1,
                'tags'          => 'Seafood, Crispy, Appetizer, Fusion',
                'long_desc'     => 'Crispy Shrimp Delight adalah hidangan pembuka yang memukau dengan kombinasi udang segar yang dicelupkan dalam adonan tepung renyah. Disajikan dengan saus mayo special yang memberikan sentuhan unik, hidangan ini menyajikan perpaduan cita rasa yang menggugah selera. Cocok untuk pencinta makanan laut yang menginginkan pengalaman kuliner yang istimewa.',
                'picture'       => 'appetizer/menu1.jpg',
                'harga'         => 65000
            ],
            [
                'nama'          => 'Caprese Salad Skewers',
                'short_desc'    => 'Tomat cherry, mozzarella, dan basil segar disusun dalam tusukan, disiram dengan balsamic glaze.',
                'id_kategori'   => 1,
                'tags'          => 'Salad, Caprese, Skewers, Vegetarian',
                'long_desc'     => 'Caprese Salad Skewers menghadirkan kelezatan salad Caprese dalam bentuk yang lebih menyenangkan. Tomat cherry yang manis, potongan mozzarella yang lembut, dan daun basil segar disusun dalam tusukan cantik, kemudian disiram dengan balsamic glaze yang kaya rasa. Hidangan ini memberikan kesegaran dan kenikmatan untuk memulai hidangan utama Anda.',
                'picture'       => 'appetizer/menu2.jpg',
                'harga'         => 50000
            ],
            [
                'nama'          => 'Asian Dumpling Sampler',
                'short_desc'    => 'Dimsum beraneka rasa dengan saus pedas dan kecap khas Asia.',
                'id_kategori'   => 1,
                'tags'          => 'Dimsum, Asian, Sampler, Spicy',
                'long_desc'     => 'Nikmati keanekaragaman cita rasa Asia dengan Asian Dumpling Sampler. Dimsum lembut yang beraneka rasa, disajikan dengan saus pedas dan kecap khas Asia, menciptakan pengalaman makan yang memuaskan. Cocok untuk mereka yang menyukai rasa autentik Asia dalam satu hidangan pembuka yang lezat.',
                'picture'       => 'appetizer/menu3.jpg',
                'harga'         => 55000
            ],
            [
                'nama'          => 'Stuffed Mushrooms with Herb Cream Cheese',
                'short_desc'    => 'Jamur yang diisi dengan keju krim herbal, panggang hingga kecoklatan.',
                'id_kategori'   => 1,
                'tags'          => 'Mushroom, Cream Cheese, Stuffed, Baked',
                'long_desc'     => 'Stuffed Mushrooms with Herb Cream Cheese adalah hidangan pembuka yang menggoda selera dengan kombinasi jamur yang diisi dengan keju krim herbal lembut. Dipanggang hingga kecoklatan, hidangan ini memberikan kelezatan yang memanjakan lidah. Cocok sebagai pilihan pembuka untuk pecinta keju dan jamur.',
                'picture'       => 'appetizer/menu4.jpg',
                'harga'         => 60000
            ],
            [
                'nama'          => 'Crispy Calamari',
                'short_desc'    => 'Cumi-cumi segar yang dilapisi tepung renyah, disajikan dengan saus tartar dan irisan lemon.',
                'id_kategori'   => 1,
                'tags'          => 'Seafood, Crispy, Deep-fried, Appetizer',
                'long_desc'     => 'Crispy Calamari adalah hidangan pembuka yang memikat selera dengan tekstur renyah luar biasa. Cumi-cumi segar dicelupkan dalam tepung spesial sebelum digoreng hingga keemasan. Disajikan dengan saus tartar yang lezat dan irisan lemon segar untuk menambah kesegaran. Hidangan ini adalah pilihan sempurna bagi pecinta hidangan laut yang menginginkan kelezatan yang tidak terlupakan.',
                'picture'       => 'appetizer/menu5.jpg',
                'harga'         => 65000
            ],
            [
                'nama'          => 'Avocado Bruschetta',
                'short_desc'    => 'Roti bruschetta yang dipanggang dengan lapisan avocado creamy, tomat cherry, dan taburan keju parmesan.',
                'id_kategori'   => 1,
                'tags'          => 'Bruschetta, Avocado, Fresh, Vegetarian',
                'long_desc'     => 'Avocado Bruschetta adalah pilihan pembuka yang menyegarkan dan inovatif. Potongan roti bruschetta yang dipanggang hingga keemasan diselimuti dengan lapisan avocado creamy yang lembut. Ditambah dengan tomat cherry yang segar dan taburan keju parmesan yang gurih, menciptakan harmoni rasa yang tak tertandingi. Hidangan ini cocok untuk pencinta avocado dan cita rasa yang ringan.',
                'picture'       => 'appetizer/menu6.jpg',
                'harga'         => 55000
            ],
            [
                'nama'          => 'Spinach and Artichoke Dip',
                'short_desc'    => 'Campuran bayam dan artichoke yang dipanggang dengan keju cremay, disajikan dengan keripik tortilla.',
                'id_kategori'   => 1,
                'tags'          => 'Dip, Spinach, Artichoke, Creamy',
                'long_desc'     => 'Spinach and Artichoke Dip adalah hidangan pembuka yang menggoda selera dengan kelembutan dan kelezatan. Campuran bayam yang segar dan artichoke yang lembut dipanggang dengan keju creamy hingga mencapai konsistensi yang sempurna. Disajikan dengan keripik tortilla yang renyah, hidangan ini memberikan pengalaman menyeluruh yang memuaskan bagi para pecinta rasa creamy dan tekstur yang beragam.',
                'picture'       => 'appetizer/menu7.webp',
                'harga'         => 60000
            ],
        ];

        $main_course_menus = [
            [
                'nama'          => 'Grilled Salmon Teriyaki',
                'short_desc'    => 'Fillet salmon panggang dengan saus teriyaki, disajikan dengan nasi dan sayuran.',
                'id_kategori'   => 2,
                'tags'          => 'Salmon, Grilled, Teriyaki, Japanese',
                'long_desc'     => 'Grilled Salmon Teriyaki adalah hidangan utama yang memukau dengan fillet salmon berkualitas tinggi yang dipanggang sempurna dengan saus teriyaki lezat. Disajikan dengan nasi yang pulen dan medley sayuran segar, hidangan ini menggabungkan cita rasa Jepang yang autentik dengan kesehatan dan kelezatan.',
                'picture'       => 'main_course/menu1.webp',
                'harga'         => 120000
            ],
            [
                'nama'          => 'Truffle Mushroom Risotto',
                'short_desc'    => 'Risotto creamy dengan campuran jamur dan aroma truffle yang khas.',
                'id_kategori'   => 2,
                'tags'          => 'Risotto, Truffle, Mushroom, Creamy',
                'long_desc'     => 'Truffle Mushroom Risotto adalah hidangan klasik yang diperbarui dengan sentuhan mewah truffle. Risotto creamy dengan campuran jamur yang beragam menciptakan harmoni cita rasa yang luar biasa. Hidangan ini cocok untuk pencinta risotto dan penggemar truffle yang mencari pengalaman kuliner istimewa.',
                'picture'       => 'main_course/menu2.webp',
                'harga'         => 85000
            ],
            [
                'nama'          => 'Vegetarian Mediterranean Wrap',
                'short_desc'    => 'Wrap vegetarian dengan hummus, sayuran, dan feta, disajikan dengan salsa segar.',
                'id_kategori'   => 2,
                'tags'          => 'Vegetarian, Wrap, Mediterranean, Healthy',
                'long_desc'     => 'Vegetarian Mediterranean Wrap adalah pilihan sehat dan lezat untuk hidangan utama. Wrap berisi hummus yang creamy, beragam sayuran segar, dan keju feta yang gurih. Disajikan dengan salsa segar untuk tambahan kesegaran. Cocok untuk para pecinta makanan vegetarian dan peminat cita rasa Mediterania.',
                'picture'       => 'main_course/menu3.jpeg',
                'harga'         => 65000
            ],
            [
                'nama'          => 'Chicken Parmesan',
                'short_desc'    => 'Dada ayam goreng dengan saus marinara dan keju mozzarella, disajikan dengan spaghetti.',
                'id_kategori'   => 2,
                'tags'          => 'Italian, Chicken, Parmesan, Pasta',
                'long_desc'     => 'Chicken Parmesan adalah hidangan klasik yang memukau selera. Dada ayam yang digoreng dengan sempurna disajikan dengan saus marinara yang kaya dan dilapisi dengan keju mozzarella leleh. Disajikan di atas spaghetti yang dimasak al dente, hidangan ini adalah kombinasi yang sempurna dari cita rasa yang gurih dan lezat.',
                'picture'       => 'main_course/menu4.jpg',
                'harga'         => 85000
            ],
            [
                'nama'          => 'Mediterranean Stuffed Chicken',
                'short_desc'    => 'Dada ayam diisi dengan campuran mediterania, dipanggang hingga keemasan.',
                'id_kategori'   => 2,
                'tags'          => 'Ayam, Mediterania, Panggang, Gurih',
                'long_desc'     => 'Hidangan utama ini, Mediterranean Stuffed Chicken, menghadirkan dada ayam yang diisi dengan campuran Mediterania yang kaya akan rasa. Dipanggang hingga keemasan, setiap gigitan memperkenalkan Anda pada kombinasi unik rasa rempah-rempah dan kelembutan daging ayam yang sempurna.',
                'picture'       => 'main_course/menu5.jpg',
                'harga'         => 220000
            ],
            [
                'nama'          => 'Beef Wellington',
                'short_desc'    => 'Daging sapi filet mignon yang dibungkus dengan adonan puff pastry, disajikan dengan saus jamur krim.',
                'id_kategori'   => 2,
                'tags'          => 'Beef, Puff Pastry, Elegant, Mushroom',
                'long_desc'     => 'Rasakan kelezatan filet mignon dalam Beef Wellington kami. Daging sapi berkualitas tinggi yang dibungkus dengan hati-hati oleh lapisan adonan puff pastry yang renyah, kemudian dipanggang hingga mencapai kesempurnaan. Disajikan dengan saus jamur krim yang lezat, setiap gigitan adalah pengalaman kuliner yang tak terlupakan, menggabungkan cita rasa yang kaya dan tekstur yang memikat.',
                'picture'       => 'main_course/menu6.jpg',
                'harga'         => 200000
            ],
        ];

        $dessert_menus = [
            [
                'nama'          => 'Molten Chocolate Lava Cake',
                'short_desc'    => 'Kue cokelat lembut dengan inti cair, disajikan dengan es krim vanilla.',
                'id_kategori'   => 3,
                'tags'          => 'Chocolate, Lava Cake, Dessert, Indulgent',
                'long_desc'     => 'Molten Chocolate Lava Cake adalah puncak kenikmatan bagi pencinta cokelat. Kue cokelat lembut dengan inti cair yang meluber, disajikan dengan es krim vanilla yang lembut. Hidangan ini adalah penutup yang sempurna untuk memuaskan hasrat manis Anda.',
                'picture'       => 'dessert/menu1.jpg',
                'harga'         => 45000
            ],
            [
                'nama'          => 'Tiramisu Delight',
                'short_desc'    => 'Dessert klasik tiramisu dengan lapisan kopi, keju mascarpone, dan cokelat.',
                'id_kategori'   => 3,
                'tags'          => 'Tiramisu, Dessert, Coffee, Italian',
                'long_desc'     => 'Tiramisu Delight adalah hidangan penutup klasik yang memikat dengan lapisan kopi yang lembut, keju mascarpone yang creamy, dan sentuhan cokelat yang memikat. Hidangan ini membawa cita rasa Italia yang autentik ke meja makan Anda.',
                'picture'       => 'dessert/menu2.jpg',
                'harga'         => 55000
            ],
            [
                'nama'          => 'Berry Bliss Cheesecake',
                'short_desc'    => 'Cheesecake lembut dengan saus beri segar dan taburan almond.',
                'id_kategori'   => 3,
                'tags'          => 'Cheesecake, Berry, Dessert, Nutty',
                'long_desc'     => 'Berry Bliss Cheesecake adalah hidangan penutup yang menyenangkan dengan cheesecake lembut yang dipadu dengan saus beri segar dan taburan almond yang renyah. Kesegaran beri dan kelezatan cheesecake menciptakan harmoni rasa yang tak terlupakan.',
                'picture'       => 'dessert/menu3.webp',
                'harga'         => 60000
            ],
            [
                'nama'          => 'Mango Coconut Panna Cotta',
                'short_desc'    => 'Panna cotta lembut dengan lapisan mangga segar dan kelapa parut.',
                'id_kategori'   => 3,
                'tags'          => 'Panna Cotta, Mango, Coconut, Tropical',
                'long_desc'     => 'Mango Coconut Panna Cotta adalah hidangan penutup yang menyegarkan dengan kombinasi panna cotta lembut, lapisan mangga segar yang manis, dan kelapa parut yang memberikan sentuhan tropis. Hidangan ini adalah penutup yang ringan dan lezat untuk menutup makan malam Anda.',
                'picture'       => 'dessert/menu4.jpg',
                'harga'         => 50000
            ],
            [
                'nama'          => 'Dark Chocolate Mousse Tower',
                'short_desc'    => 'Menara mousse cokelat hitam dengan lapisan krim dan hiasan buah segar.',
                'id_kategori'   => 3,
                'tags'          => 'Cokelat Hitam, Mousse, Krim, Buah Segar',
                'long_desc'     => 'Temukan kelezatan tak tertandingi dalam Dark Chocolate Mousse Tower kami. Ini adalah sebuah karya seni kuliner yang memukau, menghadirkan menara mousse cokelat hitam yang lembut dan menggoda. Setiap lapisannya, dari kelembutan mousse hingga lapisan krim yang lembut, menciptakan harmoni yang sempurna dari rasa dan tekstur. Hiasan buah segar di atasnya menambahkan sentuhan segar yang memukau, menciptakan pengalaman penutup yang tak terlupakan. Ini bukan hanya sekadar hidangan penutup; ini adalah sebuah perayaan keindahan dan kenikmatan kuliner yang memanjakan semua indera Anda.',
                'picture'       => 'dessert/menu5.jpg',
                'harga'         => 65000
            ],
            [
                'nama'          => 'Matcha Green Tea Tiramisu',
                'short_desc'    => 'Tiramisu dengan lapisan keju mascarpone yang dipadukan dengan matcha green tea.',
                'id_kategori'   => 3,
                'tags'          => 'Tiramisu, Matcha, Mascarpone, Dessert',
                'long_desc'     => 'Jelajahi harmoni yang unik dengan Matcha Green Tea Tiramisu kami. Lapisan lembut keju mascarpone, yang menyatu dengan kekhasan matcha green tea, menciptakan kombinasi yang mengejutkan dan memikat. Setiap gigitan membawa Anda dalam perjalanan rasa yang mendalam, di mana kelembutan dan aroma teh hijau bertemu dengan cinta dan kelezatan. Ini adalah pengalaman penutup yang memuaskan, dirancang untuk mengangkat semangat dan meninggalkan kesan tak terlupakan pada selera Anda.',
                'picture'       => 'dessert/menu6.webp',
                'harga'         => 75000
            ],
            [
                'nama'          => 'Coconut Mango Pudding',
                'short_desc'    => 'Puding kelapa dengan lapisan mangga segar dan serutan kelapa panggang.',
                'id_kategori'   => 3,
                'tags'          => 'Kelapa, Mangga, Puding, Segar',
                'long_desc'     => 'Sambutlah sentuhan tropis dalam Coconut Mango Pudding kami. Puding kelapa yang lembut, seperti pelukan lembut dari pulau surga, bertemu dengan lapisan mangga segar yang menyegarkan. Disertai dengan serutan kelapa panggang yang memberikan sentuhan renyah dan aroma khas, setiap sendokan menghadirkan pengalaman nikmat yang tak terlupakan. Ini adalah kombinasi yang sempurna antara kenikmatan dan ketenangan, mengundang Anda untuk merayakan keindahan rasa alami.',
                'picture'       => 'dessert/menu7.jpg',
                'harga'         => 55000
            ],
            [
                'nama'          => 'Pistachio Rosewater Baklava',
                'short_desc'    => 'Lapisan phyllo dengan campuran pistachio, madu, dan essence rosewater.',
                'id_kategori'   => 3,
                'tags'          => 'Pistachio, Baklava, Madu, Rosewater',
                'long_desc'     => 'Hadirkan kekayaan dan keindahan rasa dalam setiap gigitan Pistachio Rosewater Baklava kami. Lapisan phyllo yang tipis dan renyah menjadi wadah untuk campuran pistachio yang kaya, madu yang lembut, dan essence rosewater yang menghadirkan keharuman bunga yang memukau. Dengan setiap gigitan, Anda diundang untuk merasakan kelezatan dari timur tengah yang otentik. Ini bukan hanya hidangan penutup, melainkan perjalanan sensorik yang membawa Anda ke daerah yang jauh dan eksotis.',
                'picture'       => 'dessert/menu8.jpg',
                'harga'         => 80000
            ],
        ];
        DB::table('menu')->insert($appetizer_menus);
        DB::table('menu')->insert($main_course_menus);
        DB::table('menu')->insert($dessert_menus);
    }
}
