<?php namespace System\Controllers;

use Str;
use Lang;
use File;
use Flash;
use Backend;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use System\Classes\ApplicationException;
use System\Classes\SettingsManager;
use Exception;

/**
 * Event Logs controller
 *
 * @package october\system
 * @author Alexey Bobkov, Samuel Georges
 *
 */
class EventLogs extends Controller
{

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $requiredPermissions = ['system.access_event_logs'];

    public $formConfig = 'config_form.yaml';

    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('October.System', 'system', 'settings');
        SettingsManager::setContext('October.System', 'event_logs');
    }

}