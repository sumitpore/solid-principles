<?php

interface Settings {
    public function load();
    public function save();
}

class PluginSettings implements Settings {
    public function load() {
            //Load plugin settings
    }

    public function save() {
            //Save Plugin Settings
    }
}

class UserSettings implements Settings {
   public function load() {
            //Load User settings
    }

    public function save() {
            //Save User Settings
    } 
}

class SpecialSettings implements Settings {
    public function load() {
            //Load User settings
    }

    public function save() {
           throw new NotImplementedException();
    } 
}

class SettingsWrapper {

    public function loadSettings(Settings $resources) {
            return $resources->load();
    }


    public function saveSettings(Settings $resources){
        if (!is_a($resources, 'SpecialSettings')) {
               $resources->save();
        }
    }
}


$settingsObject = new SettingsWrapper;

$enviornmentSettings = $settingsObject->loadSettings(new SpecialSettings);
