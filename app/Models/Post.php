<?php

namespace App\Models;


class Post 
{
    private static $krone_layanan = [
        [
            "title" => "Krone Hair Design Layanan",
            "slug" => "krone-hair-design-layanan",
            "body" => "Halo girls! Sekarang kamu dapat menikmati beberapa layanan yang ada di Krone Hair Design, Loh ! Dengan bergabung sebagai membernya, kamu bisa mendapatkan diskon besar-besaran! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales nibh felis, vel cursus sem condimentum at. Aenean feugiat felis in augue euismod ultricies. Quisque euismod risus vel elit placerat, eu fermentum massa porta. Quisque consequat euismod odio, in iaculis elit dictum vel. Fusce sit amet mauris pharetra, pharetra est ut, sollicitudin urna. Pellentesque sagittis id augue at malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque sed feugiat turpis, ac ullamcorper tortor."

        ],
        [
            "title" => "Krone Hair Design Layanan",
            "slug" => "krone-hair-design-layanan",
            "body" => "Halo girls! Sekarang kamu dapat menikmati beberapa layanan yang ada di Krone Hair Design, Loh ! Dengan bergabung sebagai membernya, kamu bisa mendapatkan diskon besar-besaran! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sodales nibh felis, vel cursus sem condimentum at. Aenean feugiat felis in augue euismod ultricies. Quisque euismod risus vel elit placerat, eu fermentum massa porta. Quisque consequat euismod odio, in iaculis elit dictum vel. Fusce sit amet mauris pharetra, pharetra est ut, sollicitudin urna. Pellentesque sagittis id augue at malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque sed feugiat turpis, ac ullamcorper tortor."

        ]
        ];

    public static function all()
    {
        return self::$krone_layanan;
    }

    public static function find($slug)
    {
        $krones = static::all();
        return $krones->firstWhere('slug', $slug);
    }

}
