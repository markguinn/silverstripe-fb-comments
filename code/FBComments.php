<?php
/**
 * Adds fb comment functionality to a pagetype. Right now that's pretty basic but
 * the future I could see adding methods to easily get comment count, etc.
 *
 * @author Mark Guinn <mark@adaircreative.com>
 * @date 04.15.2013
 * @package silverstripe-fb-comments
 */
class FBComments extends DataExtension
{
	public static $num_posts     = 3;
	public static $comment_width = 600;
	public static $color_scheme  = 'light';
	public static $notify        = array();     // can add email addresses
	public static $notify_from   = '';
	public static $notify_subject= 'Facebook Comment Notification';

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
		$notify = $cfg->get('FBComments', 'notify');

		return new ArrayData(array(
			'NumPosts'      => $cfg->get('FBComments', 'num_posts'),
			'CommentWidth'  => $cfg->get('FBComments', 'comment_width'),
			'ColorScheme'   => $cfg->get('FBComments', 'color_scheme'),
			'Notify'        => is_array($notify) && count($notify) > 0,
		));
	}
}
 
