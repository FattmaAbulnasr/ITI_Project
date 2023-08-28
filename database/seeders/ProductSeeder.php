<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
                       [
                        'name'=>'MasCara',
                        'price'=>'250',
                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                        "category"=>"Lashes",
                        'gallery'=>"
                        https://www.brides.com/thmb/IzmfCSnhpR2s2Q3OVUqhMpPX4L4=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/best-wedding-makeup-products-4802579-BRIDES-43a4b722b885411da93c58cc15f8427e.jpg"
                       ],
            
                        [
                            'name'=>'Glow OIL',
                            'price'=>'150',
                            "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                            "category"=>"Lips",
                            'gallery'=>"
                            https://n.nordstrommedia.com/id/sr3/01e53906-ca09-4924-a244-9407430da616.jpeg?h=365&w=240&dpr=2"
                        ],
            
                               [
                                'name'=>'Glowy Skin',
                                'price'=>'500',
                                "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                "category"=>"Eye_Makeup",
                                'gallery'=>"
                                https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1571779199-becca-1571779144.jpg?crop=1xw:1xh;center,top&resize=980:*",
                               ],
            
                                [
                                    'name'=>'Glossy',
                                    'price'=>'300',
                                    "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                    "category"=>"Lips",
                                    'gallery'=>"
                                    https://www.cromoda.com/layout/i/content/144091936376371.jpg"
                                ],


            
                                    [
                                        'name'=>'eyeConic',
                                        'price'=>'100',
                                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                        "category"=>"Eye_Makeup",
                                        'gallery'=>"
                                        https://www.maybelline.com/-/media/project/loreal/brand-sites/mny/americas/us/eye-makeup/eye-shadow/color-tattoo-eye-makeup-longwear-multi-use-eye-shadow-stix/maybelline-color-tattoo-24h-eye-stix-55-i-am-fearless-041554084207-o.jpg?rev=3cfcaeff96de4434aa0b16b192bbaa6e&cx=0&cy=0&cw=1&ch=1"
                                    ],

                                    

                                    [
                                        'name'=>'powder-blush',
                                        'price'=>'175',
                                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                        "category"=>"blushers",
                                        'gallery'=>"
                                        https://m.media-amazon.com/images/I/71ix2hsoSgL._AC_SX679_.jpg",
                                    ],


                                    [
                                        'name'=>'Korean-blush',
                                        'price'=>'1000',
                                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                        "category"=>"blushers",
                                        'gallery'=>"
                                        https://ddvql06zg3s2o.cloudfront.net/Assets/res/imgs/creative/20wk22/k_kr_eyeshadows.jpg",
                                    ],

                                    [
                                        'name'=>'Highlighter-pink',
                                        'price'=>'300',
                                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                        "category"=>"Highlighter",
                                        'gallery'=>"
                                        https://m.media-amazon.com/images/I/81NDYtu31gS.__AC_SX300_SY300_QL70_ML2_.jpg",
                                    ],


                                    [
                                        'name'=>'EyeShadow',
                                        'price'=>'400',
                                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                        "category"=>"Eye_Makeup",
                                        'gallery'=>"
                                        https://m.media-amazon.com/images/I/61DVoMdv8lL.__AC_SX300_SY300_QL70_ML2_.jpg",
                                    ],


                                    [
                                        'name'=>'Sponge Blending ',
                                        'price'=>'100',
                                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                        "category"=>"Face",
                                        'gallery'=>"
                                        https://m.media-amazon.com/images/I/41hKDCbb+CL._AC_.jpg",
                                    ],

                                    [
                                        'name'=>'Amanda-Blush',
                                        'price'=>'170',
                                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                        "category"=>"blushers",
                                        'gallery'=>"
                                        https://m.media-amazon.com/images/I/51Nk5CtErBL._AC_SY879_.jpg",
                                    ],

                                    [
                                        'name'=>'Orange_Corrector',
                                        'price'=>'270',
                                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                        "category"=>"Face",
                                        'gallery'=>"
                                        https://m.media-amazon.com/images/I/51naBEW-xxL._AC_SX679_.jpg",
                                    ],

                                    [
                                        'name'=>'Liquic_Blush',
                                        'price'=>'1150',
                                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                        "category"=>"Blushers",
                                        'gallery'=>"
                                        https://assets.vogue.com/photos/6254709ef4d32274a826f91f/3:4/w_748%2Cc_limit/slide_2%2520(2).jpg",
                                    ],

                                    [
                                        'name'=>'Makeup-remover',
                                        'price'=>'130',
                                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                        "category"=>"Face",
                                        'gallery'=>"
                                        https://m.media-amazon.com/images/I/71IIJME33mL._AC_SY879_.jpg",
                                    ],

                                    [
                                        'name'=>'Lip_Stick',
                                        'price'=>'280',
                                        "description"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nostrum dolore corrupti reprehenderit, officiis ad eum eveniet ea esse, quod eius doloribus eos accusantium aspernatur. Corrupti minima labore quis voluptates.",
                                        "category"=>"Lips",
                                        'gallery'=>"
                                        https://www.theknot.com/tk-media/images/2004eb7e-83b1-496e-9f60-c2e7f65b3863~rs_768.h-cr_0.0.2000.2000",
                                    ],




                                   

                                   
        
            ]);
    }
}
