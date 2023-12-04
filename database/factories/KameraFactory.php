<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kamera>
 */
class KameraFactory extends Factory
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
            'spesifikasi' => "Canon EOS R6 adalah kamera mirrorless full-frame yang memadukan sensor CMOS 20.1 megapiksel dengan prosesor gambar DIGIC X, menghasilkan kinerja tinggi dan kualitas gambar yang luar biasa. Dengan sistem fokus otomatis canggih, pengambilan gambar seri cepat hingga 20 fps, dan stabilisasi gambar in-body 5-axis, EOS R6 memungkinkan para fotografer menangkap momen dengan presisi. Kamera ini juga menawarkan kemampuan merekam video 4K UHD hingga 60 fps, dilengkapi dengan layar sentuh vari-angle, dan visor elektronik tinggi resolusi. Dengan fitur dual card slot, Wi-Fi, Bluetooth, dan desain tahan cuaca, Canon EOS R6 merupakan pilihan yang solid untuk kebutuhan fotografi dan videografi profesional, memberikan fleksibilitas dan kreativitas yang tak terbatas.",
            'harga' => fake()->randomNumber(6, true),
            'foto' => 'https://source.unsplash.com/500x500/?Camera',
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
