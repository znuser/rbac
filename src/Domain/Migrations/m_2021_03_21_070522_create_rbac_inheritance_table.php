<?php

namespace Migrations;

use Illuminate\Database\Schema\Blueprint;
use ZnLib\Migration\Domain\Base\BaseCreateTableMigration;
use ZnLib\Migration\Domain\Enums\ForeignActionEnum;

class m_2021_03_21_070522_create_rbac_inheritance_table extends BaseCreateTableMigration
{

    protected $tableName = 'rbac_inheritance';
    protected $tableComment = 'Наследование';

    public function tableSchema()
    {
        return function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->comment('Идентификатор');
            $table->string('parent_name')->comment('Родитель');
            $table->string('child_name')->comment('Ребенок');

            $table->unique(['parent_name', 'child_name']);

            $this->addForeign($table, 'parent_name', 'rbac_item', 'name');
            $this->addForeign($table, 'child_name', 'rbac_item', 'name');

            /*$table
                ->foreign('parent_name')
                ->references('name')
                ->on($this->encodeTableName('rbac_item'))
                ->onDelete(ForeignActionEnum::CASCADE)
                ->onUpdate(ForeignActionEnum::CASCADE);
            $table
                ->foreign('child_name')
                ->references('name')
                ->on($this->encodeTableName('rbac_item'))
                ->onDelete(ForeignActionEnum::CASCADE)
                ->onUpdate(ForeignActionEnum::CASCADE);*/
        };
    }
}