<?php
namespace Bolt\Tests\Composer\Action;

use Bolt\Tests\BoltUnitTest;
use Bolt\Composer\Action\SearchPackage;
use Bolt\Composer\PackageManager;


/**
 * Class to test src/Composer/Action/SearchPackage.
 *
 * @author Ross Riley <riley.ross@gmail.com>
 *
 */
class SearchPackageTest extends BoltUnitTest
{
    
    
    public function testRun()
    {
        $app = $this->getApp();
        
        $action = new SearchPackage($app);
        $result = $action->execute(array('gawain/clippy'));
        $this->assertTrue(is_array($result));

    }
    
}
