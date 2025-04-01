<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $words = [
            [
                'greek' => 'γεια',
                'transliteration' => 'yeia',
                'english' => 'hello',
                'part_of_speech' => 'greeting',
                'example_sentence' => 'Γεια σου! Πώς είσαι;',
                'example_translation' => 'Hello! How are you?',
            ],
            [
                'greek' => 'ευχαριστώ',
                'transliteration' => 'efcharistó',
                'english' => 'thank you',
                'part_of_speech' => 'expression',
                'example_sentence' => 'Ευχαριστώ πολύ.',
                'example_translation' => 'Thank you very much.',
            ],
            [
                'greek' => 'ναι',
                'transliteration' => 'nai',
                'english' => 'yes',
                'part_of_speech' => 'adverb',
                'example_sentence' => 'Ναι, θέλω να μάθω ελληνικά.',
                'example_translation' => 'Yes, I want to learn Greek.',
            ],
            [
                'greek' => 'όχι',
                'transliteration' => 'óchi',
                'english' => 'no',
                'part_of_speech' => 'adverb',
                'example_sentence' => 'Όχι, δεν είμαι από την Ελλάδα.',
                'example_translation' => 'No, I am not from Greece.',
            ],
            [
                'greek' => 'άνθρωπος',
                'transliteration' => 'ánthropos',
                'english' => 'human',
                'part_of_speech' => 'noun',
                'example_sentence' => 'Ο άνθρωπος είναι κοινωνικό ζώο.',
                'example_translation' => 'Man is a social animal.',
            ],
            [
                'greek' => 'πόλη',
                'transliteration' => 'póli',
                'english' => 'city',
                'part_of_speech' => 'noun',
                'example_sentence' => 'Η Αθήνα είναι μια μεγάλη πόλη.',
                'example_translation' => 'Athens is a big city.',
            ],
            [
                'greek' => 'θάλασσα',
                'transliteration' => 'thálassa',
                'english' => 'sea',
                'part_of_speech' => 'noun',
                'example_sentence' => 'Η θάλασσα είναι γαλάζια.',
                'example_translation' => 'The sea is blue.',
            ],
            [
                'greek' => 'είμαι',
                'transliteration' => 'eímai',
                'english' => 'I am',
                'part_of_speech' => 'verb',
                'example_sentence' => 'Είμαι μαθητής.',
                'example_translation' => 'I am a student.',
            ],
            [
                'greek' => 'έχω',
                'transliteration' => 'écho',
                'english' => 'I have',
                'part_of_speech' => 'verb',
                'example_sentence' => 'Έχω ένα βιβλίο.',
                'example_translation' => 'I have a book.',
            ],
            [
                'greek' => 'πηγαίνω',
                'transliteration' => 'pigaíno',
                'english' => 'I go',
                'part_of_speech' => 'verb',
                'example_sentence' => 'Πηγαίνω στο σχολείο.',
                'example_translation' => 'I go to school.',
            ],
        ];

        foreach ($words as $word) {
            DB::table('words')->insert($word);
        }
    }
}