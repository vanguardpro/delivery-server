<?php

class m150121_223146_user_init extends \yii\mongodb\Migration
{
    public function up()
    {
        $this->createIndex('user', 'email', array('unique'=>true));
        $data = array("username" => "admin",
                      "email" => "admin@delivery.com",
                      "status" => 1,
                      "role" => "root",
                      "created_at" => time(),
                      "updated_at" => time(),
                      "password_hash" => '$2y$13$DU86fw0XGTuroXNj1f2mAOBUCH.peAcUYGwmMX.QR0G0GwoCImO1.',
                      "auth_key" => "LBOaZxQaR72LUWN5KpEiN1xPRI4LpCWF");
        $this->insert('user', $data);
    }

    public function down()
    {
        $this->remove('user', array('email' => "admin@delivery.com"));
        return true;
    }
}
