<?php

namespace CrEOF\Spatial\ORM\Query\AST\Functions\MySql;

use CrEOF\Spatial\ORM\Query\AST\Functions\AbstractSpatialDQLFunction;

/**
 * STPointFromText DQL function
 *
 * @author Adrien Blandin <adrien@lepermislibre.fr>
 * @license http://mit-license.org MIT
 */
class STPointFromText extends AbstractSpatialDQLFunction
{
    protected $platforms = array('mysql');
    protected $functionName = 'ST_PointFromText';
    protected $minGeomExpr = 1;
    protected $maxGeomExpr = 2;
}
