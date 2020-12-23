<?php

namespace CrEOF\Spatial\ORM\Query\AST\Functions\MySql;

use CrEOF\Spatial\ORM\Query\AST\Functions\AbstractSpatialDQLFunction;

/**
 * STX DQL function
 *
 * @author Adrien Blandin <adrien@lepermislibre.fr>
 * @license http://mit-license.org MIT
 */
class STX extends AbstractSpatialDQLFunction
{
    protected $platforms = array('mysql');
    protected $functionName = 'ST_X';
    protected $minGeomExpr = 1;
    protected $maxGeomExpr = 1;
}
