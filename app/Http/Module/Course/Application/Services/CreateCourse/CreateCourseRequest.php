<?php

namespace App\Http\Module\Course\Application\Services\CreateCourse;

class CreateCourseRequest
{
  // "judul", "deskripsi", "rating", "harga", "bidangId"
  
    public function __construct(
        public string $judul,
        public string $deskripsi,
        public int $rating,
        public float $harga,
        public int $bidangId
    )
    {
    }
}
