<?php

namespace CrEOF\Spatial\ORM\Query\AST\Functions\MySql;

use CrEOF\Spatial\ORM\Query\AST\Functions\AbstractSpatialDQLFunction;

/**
 * STPolygonFromText DQL function
 *
 * @author Adrien Blandin <adrien@lepermislibre.fr>
 * @license http://mit-license.org MIT
 */
class STPolygonFromText extends AbstractSpatialDQLFunction
{
    protected $platforms = array('mysql');
    protected $functionName = 'ST_PolygonFromText';
    protected $minGeomExpr = 1;
    protected $maxGeomExpr = 2;
}
