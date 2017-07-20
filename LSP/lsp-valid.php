<?php

interface LoadSettings {
    public function load();
}

interface SaveSettings {
    public function save();
}


class PluginSettings implements LoadSettings, SaveSettings {
    public function load() {
            //Load plugin settings
    }

    public function save() {
            //Save Plugin Settings
    }
}

class UserSettings implements LoadSettings, SaveSettings {
   public function load() {
            //Load User settings
    }

    public function save() {
            //Save User Settings
    } 
}

class SpecialSettings implements LoadSettings {
    public function load() {
            //Load User settings
    }

}

class SettingsWrapper {

    public function loadSettings(LoadSettings $resources) {
            return $resources->load();
    }


    public function saveSettings(SaveSettings $resources){
            $resources->save();
    }
}


$settingsObject = new SettingsWrapper;

$enviornmentSettings = $settingsObject->loadSettings(new SpecialSettings);
