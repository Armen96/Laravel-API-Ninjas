<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'id' => 1, 'title' => 'A Brief History of Time',
                'description' => "A landmark volume in science writing by one of the great minds of our time, Stephen Hawking’s book explores such profound questions as: How did the universe begin—and what made its start possible? Does time always flow forward? Is the universe unending—or are there boundaries? Are there other dimensions in space? What will happen when it all ends? Told in language we all can understand, A Brief History of Time plunges into the exotic realms of black holes and quarks, of antimatter and “arrows of time,” of the big bang and a bigger God—where the possibilities are wondrous and unexpected. With exciting images and profound imagination, Stephen Hawking brings us closer to the ultimate secrets at the very heart of creation.",
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/A1xkFZX5k-L.jpg',
                'price' => rand(5,40), 'stock' => rand(10,25), 'status' => 'New', 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'id' => 2, 'title' => 'Angela\'s Ashes: A Memoir',
                'description' => "“When I look back on my childhood I wonder how I managed to survive at all. It was, of course, a miserable childhood: the happy childhood is hardly worth your while. Worse than the ordinary miserable childhood is the miserable Irish childhood, and worse yet is the miserable Irish Catholic childhood.” So begins the luminous memoir of Frank McCourt, born in Depression-era Brooklyn to recent Irish immigrants and raised in the slums of Limerick, Ireland. Frank’s mother, Angela, has no money to feed the children since Frank’s father, Malachy, rarely works, and when he does he drinks his wages. Yet Malachy—exasperating, irresponsible, and beguiling—does nurture in Frank an appetite for the one thing he can provide: a story. Frank lives for his father’s tales of Cuchulain, who saved Ireland, and of the Angel on the Seventh Step, who brings his mother babies.",
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/91r1zHNhaiL.jpg',
                'price' => rand(5,40), 'stock' => rand(10,25), 'status' => 'New', 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'id' => 3, 'title' => 'Breath, Eyes, Memory ',
                'description' => "At an astonishingly young age, Edwidge Danticat has become one of our most celebrated new novelists, a writer who evokes the wonder, terror, and heartache of her native Haiti--and the enduring strength of Haiti's women--with a vibrant imagery and narrative grace that bear witness to her people's suffering and courage. At the age of twelve, Sophie Caco is sent from her impoverished village of Croix-des-Rosets to New York, to be reunited with a mother she barely remembers. There she discovers secrets that no child should ever know, and a legacy of shame that can be healed only when she returns to Haiti--to the women who first reared her. What ensues is a passionate journey through a landscape charged with the supernatural and scarred by political violence, in a novel that bears witness to the traditions, suffering, and wisdom of an entire people.",
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/91SrnXVWwSL.jpg',
                'price' => rand(5,40), 'stock' => rand(10,25), 'status' => 'New', 'created_at' => now(), 'updated_at' => now(),
            ],
        ]);
    }
}
