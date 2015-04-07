<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\components\rbac\UserRoleRule;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();

        $rule = new UserRoleRule();
        $auth->add($rule);

        // Create roles
        $member = $auth->createRole('member');
        $author = $auth->createRole('author');
        $admin = $auth->createRole('admin');
        $root = $auth->createRole('root');

        // Create permissions
        $user  = $auth->createPermission('user');
        $site  = $auth->createPermission('site');

        // Add permissions in Yii::$app->authManager
        $auth->add($user);
        $auth->add($site);

        // Add rule "UserRoleRule" in roles
        $member->ruleName = $rule->name;
        $author->ruleName = $rule->name;
        $admin->ruleName = $rule->name;
        $root->ruleName = $rule->name;

        // Add roles in Yii::$app->authManager
        $auth->add($member);
        $auth->add($author);
        $auth->add($admin);
        $auth->add($root);

        // Add permission-per-role in Yii::$app->authManager
        $auth->addChild($author, $member);
        $auth->addChild($admin, $author);
        $auth->addChild($admin, $site);
        $auth->addChild($root, $admin);
        $auth->addChild($root, $user);
    }
}