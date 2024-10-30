<?php
/*
Plugin Name: internet-time
Plugin URI: http://www.monolitonimbus.com.br
Description: Shows Internet Time on your site
Version: 1.1
Author: ViniRoger
Author URI: http://www.monolitonimbus.com.br/contato
License: GPLv2

 *      Copyright 2014 ViniRoger <viniroger@yahoo.com.br>
 *
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 3 of the License, or
 *      (at your option) any later version.
 *
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 */

add_shortcode( 'internet_time', 'itime' );
 
function itime() {
  date_default_timezone_set('Brazil/East');
  echo '<div style="text-shadow: #21759b 1px 1px 1px; border: #000 1px solid;text-align:center;font-size:large;"><p style="font-size:small;">Você começou a ler esse post às</p><p>Hora (UTC-3): <strong>'.date('H').':'.date('i').'</strong> | Internet time: <strong>@'.idate('B', time()).'</strong></p></div><p></p>';
}

?>
