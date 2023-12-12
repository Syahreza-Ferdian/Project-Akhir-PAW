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
        ];
        DB::table('menu')->insert($appetizer_menus);
        DB::table('menu')->insert($main_course_menus);
        DB::table('menu')->insert($dessert_menus);
    }
}
