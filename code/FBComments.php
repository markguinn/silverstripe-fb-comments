<?php
/**
 * If desired, adds fb comment functionality to a pagetype. Right now that
 * only means enabling 'RequireFB' so the base api gets included but in
 * the future I could see adding methods to easily get comment count, etc.
 *
 * @author Mark Guinn <mark@adaircreative.com>
 * @date 04.15.2013
 * @package fb-comments
 */
class FBComments extends DataExtension
{
	public static $num_posts     = 3;
	public static $comment_width = 600;
	public static $color_scheme  = 'light';

	/**
	 * If this returns false, the base FB API code will not be included.
	 * (Assuming you include OptionalFBAPI instead of FBAPI in the template)
	 *
	 * @return bool
	 */
	public function RequireFB() {
		return true;
	}

	/**
	 * @return ArrayData
	 */
	public function FBConfig() {
		$cfg = Config::inst();

		return new ArrayData(array(
			'NumPosts'      => $cfg->get('FBComments', 'num_posts'),
			'CommentWidth'  => $cfg->get('FBComments', 'comment_width'),
			'ColorScheme'   => $cfg->get('FBComments', 'color_scheme'),
			'IsMobile'      => 'false', // TODO: this would be helpful if it were accurate
		));
	}
}
 
