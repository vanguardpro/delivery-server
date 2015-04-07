<?php
namespace common\components\rbac;

use Yii;
use yii\rbac\Rule;
use yii\helpers\ArrayHelper;
use common\models\User;

class UserRoleRule extends Rule
{
    public $name = 'userRole';

    public function execute($user, $item, $params)
    {
        $user = ArrayHelper::getValue($params, 'user', User::findOne($user));
        if ($user) {
            $role = $user->role;
            if ($item->name === 'root') {
                return $role == User::ROLE_ROOT;
            } elseif ($item->name === 'admin') {
                return $role == User::ROLE_ROOT || $role == User::ROLE_ADMIN;
            } elseif ($item->name === 'author') {
                return $role == User::ROLE_ROOT || $role == User::ROLE_ADMIN || $role == User::ROLE_AUTHOR;
            } elseif ($item->name === 'member') {
                return $role == User::ROLE_ROOT || $role == User::ROLE_ADMIN || $role == User::ROLE_AUTHOR
                    || $role == User::ROLE_MEMBER;
            }
        }
        return false;
    }
}