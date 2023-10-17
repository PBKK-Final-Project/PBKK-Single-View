<?php

namespace App\Http\Module\Course\Domain\Model;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Course
{
  // "judul", "deskripsi", "rating", "harga", "bidangId"

    /**
     * @param string $judul
     * @param string $deskripsi
     * @param int $rating
     * @param float $harga
     * @param int $bidangId
     */
    public function __construct(
      public string $judul,
      public string $deskripsi,
      public int $rating,
      public float $harga,
      public int $bidangId,
    )
    {
    }
}
