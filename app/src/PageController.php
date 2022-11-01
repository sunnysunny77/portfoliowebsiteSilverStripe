<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\View\Requirements;

    class PageController extends ContentController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [];

        protected function init()
        {

            parent::init();
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
            Requirements::css("css/foundation.min.css");
            Requirements::css("css/icons/foundation-icons.css");
            Requirements::javascript("js/vendor/jquery.js");
            Requirements::javascript("js/vendor/what-input.js");
            Requirements::javascript("js/vendor/foundation.min.js");
            Requirements::javascript("node_modules/vivus/dist/vivus.min.js");
            Requirements::javascript("js/app.js");
        }
    }
}
