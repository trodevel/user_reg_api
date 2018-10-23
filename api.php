<?php

/*

Lead/Registration API.

Copyright (C) 2018 Sergey Kolevatov

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.

*/

// $Revision: 9905 $ $Date:: 2018-10-19 #$ $Author: serge $

namespace lead_reg_api;

require_once __DIR__.'/../lead_reg_protocol/lead_reg_protocol.php';
require_once __DIR__.'/../lead_reg_protocol/response_parser.php';    // ResponseParser::parse()
require_once __DIR__.'/../generic_api/api.php';

class Api extends \generic_api\Api
{
    protected function parse_response( $resp )
    {
        $res = \lead_reg_protocol\ResponseParser::parse( $resp );

        if( $res == NULL )
            return \generic_protocol\ResponseParser::parse( $resp );

        return $res;
    }
}

?>
