<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArabicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('arabics')->delete();

        \DB::table('arabics')->insert([
            [
                'arabic_id'=>'1',
                'datasurah_id'=>'1',
                'ayat'=>'1',
                'text'=>'بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ'
             ],
             [
                'arabic_id'=>'2',
                'datasurah_id'=>'1',
                'ayat'=>'2',
                'text'=>'الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ'
             ],
             [
                'arabic_id'=>'3',
                'datasurah_id'=>'1',
                'ayat'=>'3',
                'text'=>'الرَّحْمَٰنِ الرَّحِيمِ'
             ],
             [
                'arabic_id'=>'4',
                'datasurah_id'=>'1',
                'ayat'=>'4',
                'text'=>'مَالِكِ يَوْمِ الدِّينِ'
             ],
             [
                'arabic_id'=>'5',
                'datasurah_id'=>'1',
                'ayat'=>'5',
                'text'=>'إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ'
             ],
             [
                'arabic_id'=>'6',
                'datasurah_id'=>'1',
                'ayat'=>'6',
                'text'=>'اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ'
             ],
             [
                'arabic_id'=>'7',
                'datasurah_id'=>'1',
                'ayat'=>'7',
                'text'=>'صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ'
             ]
            ]);
    }
}
