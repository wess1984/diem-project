<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version1 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropTable('doc_page_translation_version');
        $this->removeColumn('doc_page_translation', 'created_by');
        $this->removeColumn('doc_page_translation', 'updated_by');
        $this->removeColumn('doc_page_translation', 'version');
    }

    public function down()
    {
        $this->createTable('doc_page_translation_version', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'primary' => '1',
             ),
             'lang' => 
             array(
              'fixed' => '1',
              'primary' => '1',
              'type' => 'string',
              'length' => '2',
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'resume' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'text' => 
             array(
              'type' => 'clob',
              'extra' => 'markdown',
              'length' => '',
             ),
             'is_active' => 
             array(
              'type' => 'boolean',
              'notnull' => '1',
              'default' => '1',
              'length' => '25',
             ),
             'is_done' => 
             array(
              'type' => 'boolean',
              'notnull' => '1',
              'default' => '0',
              'length' => '25',
             ),
             'created_by' => 
             array(
              'notnull' => '',
              'type' => 'integer',
              'length' => '8',
             ),
             'updated_by' => 
             array(
              'notnull' => '',
              'type' => 'integer',
              'length' => '8',
             ),
             'version' => 
             array(
              'primary' => '1',
              'type' => 'integer',
              'length' => '8',
             ),
             ), array(
             'type' => '',
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
              1 => 'lang',
              2 => 'version',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
        $this->addColumn('doc_page_translation', 'created_by', 'integer', '8', array(
             'notnull' => '',
             ));
        $this->addColumn('doc_page_translation', 'updated_by', 'integer', '8', array(
             'notnull' => '',
             ));
        $this->addColumn('doc_page_translation', 'version', 'integer', '8', array(
             ));
    }
}