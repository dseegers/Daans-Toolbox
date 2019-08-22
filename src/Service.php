<?php

namespace Flx\Toolbox;

class Service
{

    public function __construct()
    {
        add_action('admin_menu', [$this, 'registerToolboxOptions']);
        $this->helper = new \Flx\Toolbox\Helper\GetTag;
    }

    public function registerToolboxOptions()
    {
        add_options_page("Daans's toolbox", "Daans's toolbox", 'manage_options', 'toolbox',
            [$this, 'ToolboxSettingsPage']);
    }

    function ToolboxSettingsPage()
    {
        echo $this->helper->getTitle("Daan's toolbox");

        $this->helper->getCheckbox('1221', ['enabled' => 'Enable structured Data']);
    }

}