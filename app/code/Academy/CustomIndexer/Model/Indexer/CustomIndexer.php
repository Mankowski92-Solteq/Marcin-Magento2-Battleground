<?php
namespace Academy\CustomIndexer\Model\Indexer;
use Magento\Framework\Mview\ActionInterface as MviewActionInterface;
use Magento\Framework\Indexer\ActionInterface as IndexerActionInterface;
class CustomIndexer implements MviewActionInterface, IndexerActionInterface
{
   /**
    * Execute full indexation
    *
    * @return void
    */
   public function executeFull()
   {
       // TODO: Implement executeFull() method.
   }
   /**
    * Execute partial indexation by ID list
    *
    * @param int[] $ids
    *
    * @return void
    */
   public function executeList(array $ids)
   {
       // TODO: Implement executeList() method.
   }
   /**
    * Execute partial indexation by ID
    *
    * @param int $id
    *
    * @return void
    */
   public function executeRow($id)
   {
       // TODO: Implement executeRow() method.
   }
   /**
    * Execute materialization on ids entities
    *
    * @param int[] $ids
    *
    * @return void
    * @api
    */
   public function execute($ids)
   {
       // TODO: Implement execute() method.
   }
}
