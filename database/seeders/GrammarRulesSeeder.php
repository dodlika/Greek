<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrammarRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grammarRules = [
            [
                'title' => 'Greek Alphabet',
                'description' => 'The Greek alphabet has 24 letters. It is the ancestor of modern Latin and Cyrillic scripts.',
                'examples' => json_encode([
                    'Α α (alpha)', 'Β β (beta)', 'Γ γ (gamma)', 'Δ δ (delta)',
                    'Ε ε (epsilon)', 'Ζ ζ (zeta)', 'Η η (eta)', 'Θ θ (theta)',
                    'Ι ι (iota)', 'Κ κ (kappa)', 'Λ λ (lambda)', 'Μ μ (mu)',
                    'Ν ν (nu)', 'Ξ ξ (xi)', 'Ο ο (omicron)', 'Π π (pi)',
                    'Ρ ρ (rho)', 'Σ σ/ς (sigma)', 'Τ τ (tau)', 'Υ υ (upsilon)',
                    'Φ φ (phi)', 'Χ χ (chi)', 'Ψ ψ (psi)', 'Ω ω (omega)'
                ]),
                'category' => 'alphabet',
                'order' => 1,
            ],
            [
                'title' => 'Definite Articles',
                'description' => 'Greek has definite articles that correspond to "the" in English. They vary according to gender (masculine, feminine, neuter), number (singular, plural), and case (nominative, genitive, accusative, vocative).',
                'examples' => json_encode([
                    'Masculine singular nominative: ο (o) - ο άνδρας (the man)',
                    'Feminine singular nominative: η (i) - η γυναίκα (the woman)',
                    'Neuter singular nominative: το (to) - το παιδί (the child)',
                    'Masculine plural nominative: οι (oi) - οι άνδρες (the men)',
                    'Feminine plural nominative: οι (oi) - οι γυναίκες (the women)',
                    'Neuter plural nominative: τα (ta) - τα παιδιά (the children)'
                ]),
                'category' => 'articles',
                'order' => 2,
            ],
            [
                'title' => 'Present Tense Verb Conjugation',
                'description' => 'In Greek, verbs change form (conjugate) according to the person and number. Here is the present tense conjugation of the verb "είμαι" (to be).',
                'examples' => json_encode([
                    'εγώ είμαι (I am)',
                    'εσύ είσαι (you are, singular)',
                    'αυτός/αυτή/αυτό είναι (he/she/it is)',
                    'εμείς είμαστε (we are)',
                    'εσείς είστε (you are, plural)',
                    'αυτοί/αυτές/αυτά είναι (they are)'
                ]),
                'category' => 'verbs',
                'order' => 3,
            ],
            [
                'title' => 'Noun Cases',
                'description' => 'Greek nouns have four cases: nominative (subject), genitive (possession), accusative (object), and vocative (address).',
                'examples' => json_encode([
                    'Nominative: Ο άνθρωπος τρώει. (The person eats.)',
                    'Genitive: Το βιβλίο του ανθρώπου. (The person\'s book.)',
                    'Accusative: Βλέπω τον άνθρωπο. (I see the person.)',
                    'Vocative: Άνθρωπε, έλα εδώ! (Person, come here!)'
                ]),
                'category' => 'nouns',
                'order' => 4,
            ],
            [
                'title' => 'Personal Pronouns',
                'description' => 'Personal pronouns in Greek change according to person, number, gender, and case.',
                'examples' => json_encode([
                    'Nominative: εγώ (I), εσύ (you), αυτός/αυτή/αυτό (he/she/it)',
                    'Genitive: μου (my/mine), σου (your/yours), του/της/του (his/hers/its)',
                    'Accusative: με (me), σε (you), τον/την/το (him/her/it)'
                ]),
                'category' => 'pronouns',
                'order' => 5,
            ],
        ];

        foreach ($grammarRules as $rule) {
            DB::table('grammar_rules')->insert($rule);
        }
    }
}