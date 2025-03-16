<div id="gameSettings" >
    <ul id="settingsMenu">
        <li>General</li>
        <li>Display</li>
        <li>Keybinding</li>
    </ul>
    <div id="settingGeneral">

        <h2>Sounds</h2>
        <div class="soundSetting">
            <label for="masterVolume">Master:</label>
            <input type="range" class="volumeSlider" id="masterVolume" min="0" max="1" step="0.01" value="0.5">
        </div>
        <div class="soundSetting">
            <label for="bgmVolume">Background Music:</label>
            <input type="range" class="volumeSlider" id="bgmVolume" min="0" max="1" step="0.01" value="0.5">
        </div>
        <div class="soundSetting">
            <label for="npcVolume">NPC Dialog:</label>
            <input type="range" class="volumeSlider" id="npcVolume" min="0" max="1" step="0.01" value="0.5">
        </div>
        <div class="soundSetting">
            <label for="combatVolume">Combat:</label>
            <input type="range" class="volumeSlider" id="combatVolume" min="0" max="1" step="0.01" value="0.5">
        </div>

        <div id="settingDisplay" >
            <h2>Display Settings</h2>
            <label for="windowSize">Choose Window Size:</label>
            <select id="windowSize">
                <option value="1920x1080">1920 x 1080</option>
                <option value="1600x900">1600 x 900</option>
                <option value="1366x768">1366 x 768</option>
                <option value="1280x720">1280 x 720</option>
                <option value="fullscreen">Fullscreen</option>
            </select>

        </div>
    </div>

    <ul id="settingsFooter">
        <li onclick="closeDialogSettings()">Back</li>
        <li onclick="saveSettings()">Save</li>
    </ul>

</div>