<?php

$this_page = 'home';
require_once('header.php');
?>
<div class="container">
<pre>
	This is an under-development website and related sofware that is built around the premise of improving the mod user and mod developer experience for Stellaris.
</pre>
Planned features:
<ul>
<li>Mod database</li>
<ul>
	<li>Data loaded hourly from Steam (IMPLEMENTED)</li>
	<li>Faster, more responsive search than Steam</li>
	<li>Better (more) stats-searchability (IMPLEMENTED)</li>
	<li>Why the hell doesn't steam have 1 month time period?</li>
	<li>Filtering to tags or languages</li>
	<li>Detail generated from mod data</li>
	<li>Mod version archival, preview archival (IMPLEMENTED, Not exposed yet)</li>
	<li>Automatic difference</li>
	<li>Interface for admins/devs to more easily find files within mods (IE, exe files, which could be viruses)</li>
	<li>Mod anti-virus scanning</li>
	<li>Hash database for identifying mod and mod version from source files</li>
	<li>Hash database should be able to also identify bundled mods (mods including this mod) and updated continuations of un-updated mods</li>
	<li>Hash database can also identify infringing mods and notify mod owner (if mod owner has opted-in)</li>
	<li>Hopefully hash database integration with IronyModManager to auto-generate an internal mod-version-present flag/variable mod</li>
	<li>Mod-aware shared localization interface</li>
</ul>
<li>Save viewer/editor</li>
<ul>
	<li>Browser-local and no upload</li>
	<li>Save parsing is functional</li>
	<li>Substantial amount of GUI work to display the immense amount of data in a save is necessary</li>
	<li>Would like to have a drag and droppable galaxy editor that allows move/add/remove of systems/planets/hyperlanes</li>
	<li>Unsure so far how feasible editing is, changing the file while keeping it in the weird format Stellaris needs is... complicated</li>
	<li>Empire details - Where did that megastructure / fleet / army planet go?</li>
	<li>Ironman mode that obeys in-game visibility requirements?</li>
	<li>Irony mod-identification has <a href="https://github.com/bcssov/IronyModManager/issues/346">pending issues</a> that should allow mod drag-and-drop</a></li>
	<li>Mod integrated tech tree</li>
</ul>

<li>Mod code search</li>
<ul>
	<li>Cross-mod conflict search</li>
	<li>Automatic conflicting mod identification</li>
	<li>Automatic mod to game conflict/override identification</li>
	<li>Code-aware search (IE: Search for event ID, search for planet class type)</li>
	<li>Automatic version compatibility identification</li>
	<li>Code loop detection (IE: on_action that calls event that triggers on_action)</li>
	<li>Crashing feature identification</li>
	<li>Misc future automatic thing-detection</li>
	<li>Code use stats</li>
</ul>
<li>C memory injection app</li>
<ul>
	<li>Windows support</li>
	<li>Maybe Golang rewrite - depends on how much of a pain in the ass ASM in golang is</li>
	<li>Advanced [debug] logging Injection</li>
	<li>LUA/Python interpreter (haven't decided yet, obviously a huge project, should start extremely simply)</li>
	<li>Automatic PDXScript -> LUA/Python conversion (should be possible, initially just by exposing the same C functionality via a interpreter</li>
	<li>More flexible galaxy generation in interpeter</li>
	<li>Ability to add custom UI elements in interpeter</li>
	<li>Ability to add functionality to pdxscript? within interpeter</li>
	<li>Performance -- ?!</li>
	<li>Intermediate rendering and gamestate tick / parallelism such that both can execute simultaneously rather than syncronously</li>
	<li>ZMQ based Messaging (process, not user) interface API?</li>
</ul>
</ul>



<?php
require_once('footer.php');
