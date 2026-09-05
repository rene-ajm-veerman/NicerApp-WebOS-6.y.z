<?php
    global $naWebOS;
    require_once ($naWebOS->codePath.'/../domains/'.$naWebOS->domainFolder.'/domainConfig/mainmenu.items.php');
    global $naURLs; // from .../domainConfig/nicer.app/mainmenu.items.php
    global $na_apps_structure;
    if (false) {
        echo '<pre style="color:blue;">';
        var_dump ($na_apps_structure);
        echo '</pre><pre style="color:purple">';
        var_dump ($naURLs);
        echo '</pre>'; exit();
    }
?>
    <style>
        #companyLogosAndName {
            width:100%;
            display:flex;
            justify-content:left;
            align-items:center;
        }
        .divFor_neCompanyLogo {
            display:flex;
            flex-direction:column;
            justify-content:center;
            color:white;
            border-radius:20px;
            border:solid rgba(0,0,0,0.8);
            background:rgba(0,0,50,0.555);
            box-shadow:0px 0px 2px 1px rgba(0,0,0,0.55), 0px 0px 5px 2px rgba(0,0,0,0.8);
        }
        .divFor_neCompanyLogo video {
            margin : 10px;
            border-radius:20px;
        }
    </style>
    <div id="companyLogosAndName" class="container">
        <table style="width:fit-content">
            <tr>
                        <!--
                <td>
                    <div class="divFor_neCompanyLogo" style="width:500px;height:700px;background:none;border:none;box-shadow:none;">
                        <video controls autoplay loop playsinline style="width:fit-content">
                            <source src="/NicerAppWebOS/businessLogos/text-to-video-AI/raw-oxpecker-v5.11/stitched.mp4" type="video/mp4"></source>
                            Your browser does not support video.
                        </video>
                        <iframe src="https://nicer.app/NicerAppWebOS/businessLogos/models/angel_brass_version.html" defer style="width:500px;height:700px;background:none;border:none;"></iframe>
                    </div>
                </td>
                        -->
                <td rowspan="2">
                    <div>
                        <div><h1 class="contentSectionTitle1" alt="Nicer.app WebOS homepage">Nicer.app WebOS homepage</h1></div>
                    </div>
                </td>
            </tr>
        </table>
        <table style="width:100%;margin:30px;">
        <tr>
        <td rowspan="2" align="right">
        <div style="font-size:x-large;font-weight:bold;text-shadow:0px 0px 4px black, 2px 2px 8px black">
        <div><p class="backdropped"><span style="font-size:x-large;font-weight:bold">(C) and (R) 2026 <a href="https://zoned.at/d3" class="tooltip" title="Diary part 3">René</a> AJM Veerman</span> [<a href="mailto:rene.veerman.netherlands@gmail.com">rene.veerman.netherlands@gmail.com</a>],<br/>Current status : Tonight i'll be fixing na.site.transform_siteGlobalsThemes_to_jsTree().<br/>also known as <a href="https://www.usmessageboard.com/search/1852780/?c[users]=GavanPeacefan&o=date" class="nomod noPushState tooltip" title="Geopolitical diary" target="usmessageboardDotComSlashGavanPeacefan">Gavan Peacefan Grokman Veers</a>.</p></div>

        <div><p class="backdropped" alt="Original idea by unknown and/or anonymous humans">Original idea by unknown and/or anonymous human(s) ;-)<br/>For whom (well, for my own conscience too of course) I plan to donate to charities when I finally can again.</p></div>

        <div><p class="backdropped"><span style="font-size:x-large;font-weight:bold">Founded in <a class="nomod noPushState tooltip" title="Diary part 1" target="rvFB" href="https://facebook.com/rene.veerman.90">2002</a> by <a class="nomod noPushState tooltip" target="rvX" title="Diary part 2" href="https://x.com/GavanVeers">René AJM Veerman</a>,</span><br/><span style="font-size:small">official Prophet of the Christian God since around 2010,<br/>and Prophet of the Council of the Gods since 2026.<br/><em>I heard their voices in my head on a regular basis.<br/>I felt their holy presences around me quit often, <br/>guiding me and witnessing how my life went,<br/>in great detail.<br/>Sometimes every moment I was awake, for a while.</em></span></p></div>

        <div><p class="backdropped">Student of <a class="nomod noPushState" target="ytCheetahKungFu" href="https://youtube.com/@CheetahKungFu">numerous kung-fu styles</a>, as well as just about every art of war.</p></div>


<pre class="backdropped">
Straight, born 25-05-1977.

Politically an Assertive Centrist.
Unafraid and completely comfortable within my own city.

See also (currently mostly down, awaiting a big code upgrade that'll be complete before Sept 20th 2026) : <a href="https://zoned.at/d3" class="nomod noPushState tooltip" target="DiaryPart3" title="Diary part 3">https://zoned.at/d3</a> <a href="https://zoned.at/p1" class="nomod noPushState tooltip" target="PsychiatricDiaryPart1" title="Psychiatric diary part 1">/p1</a> <a href="https://zoned.at/p2" class="nomod noPushState tooltip" target="PsychiatricDiaryPart2" title="Psychiatric diary part 2">/p2</a> <a href="https://zoned.at/p3" class="nomod noPushState tooltip" target="PsychiatricDiaryPart3" title="Psychiatric diary part 3">/p3</a> <a href="https://zoned.at/p4" class="nomod noPushState tooltip" target="PsychiatricDiaryPart4" title="Psychiatric diary part 4">/p4</a> <a href="https://zoned.at/z" class="nomod noPushState tooltip" target="SongTexts" title="SongTexts">/z</a> <a href="https://zoned.at/r" class="nomod noPushState tooltip" target="RefirendaGovernments" title="Refirenda Governments">/r</a>
</pre>
        </div>
        </td>
        <td align="center" class="naFrontpage_headerText naFrontpage_headerText_intro" style="width:220px;background:rgba(255,255,255,0.33);"><a class="nomod noPushState" href="/NicerAppWebOS/documentation/selfies/rene-ajm-veerman/IMG_20260826_082746_1.jpg"><img src="/NicerAppWebOS/documentation/selfies/rene-ajm-veerman/IMG_20260826_082746_1.jpg" style="width:200px;margin:5px;border:3px solid rgba(255,255,255,0.33);border-radius:10px;box-shadow:3px 3px 7px 5px rgba(0,0,0,0.8);"></a><br/><div lang="ar" dir="rtl" style="font-size:large;font-weight:bold;text-shadow:0px 0px 5px rgba(0,0,0,0.88),2px 2px 7px rgba(0,0,0,0.89)">الله عظيم حقاً، لكن مجلس الآلهة أعظم بكثير ;-)</div><br/><div style="font-size:large;font-weight:bold;text-shadow:0px 0px 5px rgba(0,0,0,0.88),2px 2px 7px rgba(0,0,0,89)">Allah is very great indeed, but The Council of the Gods is still way larger ;-)</div></td>
        </tr>
        </table>

    </div>

    <div class="linkContainer">
        <a href="/ " class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Front page</span></h3></a>
        <a href="<?php echo $naURLs['docs__overview'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Documentation</span></h3></a>
        <a href="<?php echo $naURLs['docs__license'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">License</span></h3></a>
        <a href="<?php echo $naURLs['docs__todoList'];?>" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">To-Do List</span></h3></a>
        <a href="/company" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Company</span></h3></a>
        <?php
            global $naLAN;
            if (false && $naLAN) {
        ?>
                <a href="/memoires" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Owners memoires</span></h3></a>
                <a href="/geopolitics" class="contentSectionTitle3_a"><h3 class="contentSectionTitle3"><span class="contentSectionTitle3_span">Geopolitics</span></h3></a>
        <?php
            }
        ?>
    </div>
    <script type="text/javascript">
        na.site.settings.loadingApps = false;
        na.site.settings.startingApps = false;
    </script>
