<?php
use Migrations\AbstractSeed;
use \Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
            ['name' => 'Catt',
            'email' => 'author@ggc.edu',
            'password' => (new DefaultPasswordHasher())->hash('authorps'),
            'role' => 'author',
            'created' => date('Y-m-d H:i:s'),
            ],

            ['name' => 'Catt',
            'email' => 'editor@ggc.edu',
            'password' => (new DefaultPasswordHasher())->hash('editorps'),
            'role' => 'editor',
            'created' => date('Y-m-d H:i:s'),
            ]
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
