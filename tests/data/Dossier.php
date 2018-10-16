<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\activerecord\tests\data;

use yii\activerecord\ActiveQuery;

/**
 * Class Dossier
 *
 * @property int $id
 * @property int $department_id
 * @property int $employee_id
 * @property string $summary
 *
 * @property Employee $employee
 *
 * @author Kolyunya <OleynikovNY@mail.ru>
 * @since 2.0.12
 */
class Dossier extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dossier';
    }

    /**
     * Returns dossier employee.
     *
     * @return ActiveQuery
     */
    public function getEmployee()
    {
        return $this
            ->hasOne(Employee::class, [
                'department_id' => 'department_id',
                'id' => 'employee_id',
            ])
            ->inverseOf('dossier')
        ;
    }
}
