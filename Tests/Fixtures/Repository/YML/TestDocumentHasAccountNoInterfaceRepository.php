<?php

namespace Ordermind\LogicalAuthorizationDoctrineMongoBundle\Tests\Fixtures\Repository\YML;

/**
 * TestDocumentHasAccountNoInterfaceRepository
 *
 * This class was generated by the Doctrine ODM. Add your own custom
 * repository methods below.
 */
class TestDocumentHasAccountNoInterfaceRepository extends \Doctrine\ODM\MongoDB\DocumentRepository
{
  public function customMethod() {
    return $this->findAll();
  }
}
