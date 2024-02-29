<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Posts::updateOrCreate(
            [
                'title' => 'How to Create a Culture of Learning at Work',
            ],
            [
                'content' => 'Establishing a culture that values learning and makes it practical, easy to adopt, and scalable for enhancing employee engagement is a significant undertaking. It all begins by sowing the seeds for a culture that embraces continuous learning. Read our blog post to learn how.',
                'author' => 'Phillip Jr',
                'image' => 'https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/1706798582385-EK22FD3VB9O5F4L0IH5E/how+to+create+a+culture+of+learning+at+work+1080.png?format=750w',

            ]
        );

        Posts::updateOrCreate(
            [
                'title' => 'Practicing Effective Time Management to Boost Your Productivity',
            ],
            [
                'content' => 'Effective time management is vital to living a productive, balanced, and successful life. Leverage Intellezy\'s eLearning content to sharpen your skills.',
                'author' => 'Jason',
                'image' => 'https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/1705498075396-QFVALCDRDONM8PE0TNJZ/pexels-cottonbro-studio-4065891.jpg?format=1000w',

            ]
        );

        Posts::updateOrCreate(
            [
                'title' => 'Digital Skills Development',
            ],
            [
                'content' => 'Employees must have basic digital skills in today\'s modern workplace — it\'s almost non-negotiable. Depending on the industry and company needs, some employees must build their digital skills to a more advanced level. <br>But what are digital skills exactly? What counts as basic or advanced skills? How can you, as an employer, help your employees with digital skills development? ',
                'author' => 'Ryan',
                'image' => 'https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/1705519833321-8IX75U4JVIM2L8334W1C/01-Digital-Skills-Development.jpg?format=1500w',

            ]
        );

        Posts::updateOrCreate(
            [
                'title' => 'Podcast: Immersive Technologies for Learning with Destery Hildenbrand',
            ],
            [
                'content' => 'In this episode of the “Become an IDOL” podcast, XR Solution Architect Destery Hildenbrand recalls his journey from graphic designer to XR Solution Architect and how he initially began his involvement with immersive technologies for learning, discussing several real-world examples of AR and VR for learning and why certain learning modalities are better suited for some scenarios than others.',
                'author' => 'Destery',
                'image' => 'https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/1704832096396-VJCT731LIHD8WZLODTDZ/podcast+immersive+technologies+for+learning+ar+vr.png?format=750w',

            ]
        );
        Posts::updateOrCreate(
            [
                'title' => 'Upskilling and Reskilling Training Guide ',
            ],
            [
                'content' => 'Developing new skills is essential for career growth. Employees want it and businesses need it to keep up with market and industry needs. Upskilling and reskilling are effective skills-building strategies to help your employees get there. But what exactly are employee upskilling and reskilling? ',
                'author' => 'Ron',
                'image' => 'https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/8f5e482b-7be0-4eb2-acd5-6ffbc7e28095/01-Upskill-and-Reskill-Training-Guide.png?format=1500w',

            ]
        );
        Posts::updateOrCreate(
            [
                'title' => 'Cyber Security Training for Employees',
            ],
            [
                'content' => 'Cybercrimes can compromise your business data and safety, with cyber-attacks becoming increasingly common via email, download, or internet search. A robust cyber security training program is essential for your business — it helps you shield your digital assets from malicious actors. When you provide personalized, engaging, and regular security awareness training for employees, you equip them with the tools and knowledge to recognize and prevent cybercrimes. ',
                'author' => 'Cody',
                'image' => 'https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/1705519138764-MXOF5F5Z90ELJ6B13N46/01-Cybersecurity-Training-for-Employees.jpg?format=1500w',

            ]
        );
        Posts::updateOrCreate(
            [
                'title' => '2024 Learning and Development Trends',
            ],
            [
                'content' => 'As we look towards 2024, the synergy between technology and learning is more exciting than ever. The eLearning market\'s growth shows that we\'re moving towards a future where learning isn\'t limited by old-school rules. It\'s already become something that anyone, from anywhere, can access. This journey into the future of learning is guided by the ever-evolving world of technology, promising not just fun, interesting, and effective learning experiences, but dynamic ones that can change to fit the unique needs of learners around the globe.',
                'author' => 'Drew',
                'image' => 'https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/1703098988613-ZVE6S0XBOQRJ6QVFX0F2/2024+learning+and+development+trends+square.png?format=750w',

            ]
        );
        Posts::updateOrCreate(
            [
                'title' => 'What is Learning and Development (L&D)? A Comprehensive Guide',
            ],
            [
                'content' => 'This guide is your L&D manual, packed with information to get you started. Whether you’re a rank-and-file employee looking to upskill yourself or an organizational leader looking to advance your workforce capability, this helpful guide is your go-to for understanding the function and importance of Learning and Development.',
                'author' => 'Andrew',
                'image' => 'https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/1702572752102-L72ZND7DN0VVKW45PQUF/what+is+learning+and+development+square.png?format=750w',

            ]
        );
        Posts::updateOrCreate(
            [
                'title' => 'How to Develop Employees\' Soft Skills',
            ],
            [
                'content' => 'Soft skills are essential for workplace productivity, team collaboration, and meeting deadlines. Training programs can be employed to develop these transferable skills, enhancing areas like organization, leadership, communication, and emotional intelligence. Organizations can benefit from robust learning methodologies including eLearning courses, Virtual Reality training, and peer learning. Building soft skills boosts employee confidence, leads to better services, and can improve sales.',
                'author' => 'Frank',
                'image' => 'https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/1701377958604-TEJNYYTDO7ZMCFS3ES1V/How+to+Develop+Employees+Soft+Skills+square.png?format=750w',

            ]
        );
        Posts::updateOrCreate(
            [
                'title' => 'Intellezy Announces Strategic Partnership with Edflex to Improve Access to High-Quality Learning Experiences',
            ],
            [
                'content' => 'Intellezy, a revolutionary learning solutions company that provides an award-winning online video library, augmented reality (AR) & virtual reality (VR) solutions, and custom eLearning development, announced that it has partnered with Edflex, a software-as-a-service solution that enables learners to access thousands of pieces of online learning content in a simplified way. As a result of this partnership, Edflex customers and clients will now have the ability to access Intellezy’s expertly designed learning videos directly through the Edflex Prime platform.',
                'author' => 'Jack',
                'image' => 'https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/1700583205035-37L0IV77792BT93PQYL5/Intellezy+Edflex+Partnership+Square.png?format=750w',

            ]
        );
        Posts::updateOrCreate(
            [
                'title' => 'Virtual Reality Employee Training',
            ],
            [
                'content' => 'Discover how VR technology is reshaping traditional training methods, offering immersive, hands-on experiences that empower employees to learn faster and retain knowledge longer. From simulating real-world scenarios to fostering collaboration in virtual environments, explore the myriad benefits that VR brings to corporate training programs.',
                'author' => 'Ed',
                'image' => 'https://images.squarespace-cdn.com/content/v1/596e17229f74561878f79e76/1699020049060-N1J2RXTESONT42NS8588/virtual+reality+employee+training+square.png?format=750w',

            ]
        );


    }
}
