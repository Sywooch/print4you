<?php

namespace common\models;

use Yii;

use yii\db\ActiveRecord;
use backend\models\User;

/**
 * This is the model class for table "orders".
 *
 * @property integer $id
 * @property string $order_status
 * @property integer $price
 * @property integer $manager_id
 * @property string $comment
 * @property integer $created_at
 * @property integer $updated_at
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * Константы статусов заказа. 
     * Используются в backend\controllers\OrdersController.php
     */
    const STATUS_NEW = 'new';
    const STATUS_PROCCESSING = 'proccessing';
    const STATUS_COMPLETED = 'completed';
    const STATUS_CANCELLED = 'cancelled';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price', 'manager_id', 'created_at', 'updated_at'], 'integer'],
            [['order_status'], 'string', 'max' => 32],
            [['comment'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_status' => 'Order Status',
            'price' => 'Price',
            'manager_id' => 'Manager ID',
            'comment' => 'Comment',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }

    public function getManager($id)
    { 
        $manager = User::findIdentity($id);

        return $manager;
    }
}