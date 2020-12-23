<?php

namespace CrEOF\Spatial\ORM\Query\AST\Functions\MySql;

use CrEOF\Spatial\ORM\Query\AST\Functions\AbstractSpatialDQLFunction;

/**
 * STY DQL function
 *
 * @author Adrien Blandin <adrien@lepermislibre.fr>
 * @license http://mit-license.org MIT
 */
class STY extends AbstractSpatialDQLFunction
{
    protected $platforms = array('mysql');
    protected $functionName = 'ST_Y';
    protected $minGeomExpr = 1;
    protected $maxGeomExpr = 1;
}
