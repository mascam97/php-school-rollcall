<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateStudentClassTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $this->table('student_class_room')
            ->addColumn('student_id', 'integer')
            ->addForeignKey('student_id', 'users', 'id')
            ->addColumn('class_room_id', 'integer')
            ->addForeignKey('class_room_id', 'class_rooms', 'id')
            ->create();
    }
}
