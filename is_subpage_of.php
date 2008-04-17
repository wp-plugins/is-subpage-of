<?php
/*
Plugin Name: Is Subpage Of
Version: 0.7
Plugin URI: http://www.schloebe.de/wordpress/is-subpage-of-plugin/
Description: A conditional plugin that determines if the executing page is a subpage of the passed pageID.
Author: Oliver Schl&ouml;be
Author URI: http://www.schloebe.de/
*/

/*  Copyright 2007  Oliver Schlöbe  (email : webmaster@schloebe.de)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function is_subpage_of( $parentpage = '' ) {

	$posts = $GLOBALS['posts'];

	if ( is_numeric($parentpage) ) {
		if ( $parentpage == $posts[0]->post_parent ) {
			return true;
		} else {
			is_subpage_of( $posts[0]->post_parent );
		}
	} else {
		return false;
	}
}
?>