<?php
use Migrations\AbstractSeed;

/**
 * Articles seed.
 */
class ArticlesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'The title',
                'body' => 'This is the article body',
                'published' => '1',
                'user_id' => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'A title once again',
                'body' => 'And the article body follows',
                'published' => '0',
                'user_id' => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'Title strikes back',
                'body' => 'This is really exciting! NOt.',
                'published' => '1',
                'user_id' => '1',
                'created' => date('Y-m-d H:i:s'),
            ]
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
