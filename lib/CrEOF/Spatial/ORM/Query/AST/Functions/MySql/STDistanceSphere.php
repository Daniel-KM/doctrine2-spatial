<?php

namespace CrEOF\Spatial\ORM\Query\AST\Functions\MySql;

use CrEOF\Spatial\ORM\Query\AST\Functions\AbstractSpatialDQLFunction;

/**
 * STDistanceSphere DQL function
 *
 * @author Adrien Blandin <adrien@lepermislibre.fr>
 * @license http://mit-license.org MIT
 */
class STDistanceSphere extends AbstractSpatialDQLFunction
{
    protected $platforms = array('mysql');
    protected $functionName = 'ST_Distance_Sphere';
    protected $minGeomExpr = 2;
    protected $maxGeomExpr = 3;
}
