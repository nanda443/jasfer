<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fotografer>
 */
class FotograferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama' => fake()->name(),
            'provider_id' => fake()->numberBetween(1, 5),
            'deskripsi' => 'Halo, perkenalkan saya seorang fotografer profesional yang passion-nya terletak dalam seni memotret. Saya telah mengeksplorasi dunia fotografi selama beberapa tahun terakhir. Dengan pengalaman dan dedikasi dalam bidang ini, saya telah berhasil mengabadikan momen-momen indah dan berharga dalam setiap karya saya. Fotografi bagi saya bukan hanya sekadar pekerjaan, tetapi juga sebuah bentuk ekspresi diri yang memungkinkan saya untuk menggambarkan keindahan dan makna di sekitar kita. Saya senang dapat berbagi keahlian dan pengalaman saya dalam menciptakan gambar yang menginspirasi dan memberikan dampak positif pada orang lain. Semoga melalui karya-karya saya, saya dapat terus memberikan kontribusi dalam memperkaya dunia visual dan merayakan keberagaman kehidupan melalui lensa kamera saya.',
            'harga' => fake()->randomNumber(6, true),
            'foto' => 'https://source.unsplash.com/500x500/?Photographer',
            'foto_karya' => json_encode([
                'https://source.unsplash.com/640x480/?mountain',
                'https://source.unsplash.com/640x480/?beach',
                'https://source.unsplash.com/640x480/?lake',
                'https://source.unsplash.com/640x480/?forest',
                'https://source.unsplash.com/640x480/?sea',
                'https://source.unsplash.com/640x480/?city'
            ])
        ];
    }
}
