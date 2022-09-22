<?php
namespace Bss\Schema\Setup;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;
class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup,ModuleContextInterface $context){
        $setup->startSetup();
        $conn = $setup->getConnection();
        $tableName = $setup->getTable('data_example');
        if($conn->isTableExists($tableName) != true){
            $table = $conn->newTable($tableName)
                ->addColumn(
                    'id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity'=>true,'unsigned'=>true,'nullable'=>false,'primary'=>true]
                )
                ->addColumn(
                    'title',
                    Table::TYPE_TEXT,
                    255,
                    ['nullable'=>false,'default'=>'']
                )
                ->addColumn(
                    'content',
                    Table::TYPE_TEXT,
                    '2M',
                    ['nullbale'=>false,'default'=>'']
                )
                ->setOption('charset','utf8');
            $conn->createTable($table);
        }
        $setup->endSetup();
    }
}
?>