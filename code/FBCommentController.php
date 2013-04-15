<?php
/**
 * Provides email notification if desired.
 *
 * @author Mark Guinn <mark@adaircreative.com>
 * @date 04.15.2013
 * @package silverstripe-fb-comments
 */
class FBCommentController extends Controller
{
	static $allowed_actions = array('notify');

	/**
	 * @param SS_HTTPRequest $req
	 * @return string
	 */
	public function notify(SS_HTTPRequest $req) {
		$notify = Config::inst()->get('FBComments', 'notify');
		$notifyFrom = Config::inst()->get('FBComments', 'notify_from');
		$notifySubject = Config::inst()->get('FBComments', 'notify_subject');
		if (!is_array($notify) || count($notify) <= 0) return $this->httpError(401);

		foreach ($notify as $to) {
			$email = new Email($notifyFrom, $to, $notifySubject);
			$email->setTemplate('FBCommentNotificationEmail');
			$email->populateTemplate(array(
				'URL'           => $req->requestVar('page'),
				'SiteConfig'    => SiteConfig::current_site_config(),
			));
			$email->send();
		}

		return 'ok';
	}
}
