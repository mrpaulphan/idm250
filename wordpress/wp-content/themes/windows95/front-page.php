<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="system/icons/start.png">
    <title>Jordan Zagerman's Portfolio</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/win95.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/window.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/widgets.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/taskbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/start.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/jquery.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/bsod.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/controls.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/normalize.css">
    <!--<link rel="stylesheet" type="text/css" href="webkit.css">-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/jquery.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/win95.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/widgets.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/clock.js"></script>
</head>

<body onload="updateClock(); setInterval('updateClock()', 1000 );" <?php body_class();?> data-theme-uri="
    <?php echo get_stylesheet_directory_uri(); ?>/dist/">
    <noscript>
        <div class="bsod_container">
            <div class="bsod_textcont">
                <p class="bsod_title">Windows 95</p>
                <p class="bsod_p">An error has occurred. To continue:</p>
                <p class="bsod_p">Press F5 to restart your computer. If you do this,
                    <br> you will lose any unsaved information in all open applications.</p>
                <p class="bsod_p">Error: JAVASCRIPT_NOT_ENABLED</p>
                <p class="bsod_press">Press F5 to continue _</p>
            </div>
        </div>
    </noscript>

    <!-- Taskbar -->
    <div id="win_taskbar">
        <!-- Start Button -->
        <div id="win_start_button">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/start.png" id="win_start_icon" alt="Windows Logo">
            <span id="win_start_text">Start</span>
        </div>
        <!-- Taskbar Buttons -->
        <div id="win_tb_placeholder">

        </div>
        <!-- This is here to provide a target for the taskbar addition function -->
        <!-- <div class="win_tb_button win_tb_button_inactive" id="win_tb_win_1">
			<div class="win_tb_icon">
				<img src="system/icons/start.png">
			</div>
			<div class="win_tb_text">
				Inactive Window
			</div>
		</div>
		<div class="win_tb_button win_tb_button_active" id="win_tb_win_2">
			<div class="win_tb_icon">
				<img src="system/icons/start.png">
			</div>
			<div class="win_tb_text">
				Active Window
			</div>
		</div> -->

        <!-- System Tray -->
        <div id="win_systray">
            <span id="win_clock">&nbsp;</span>
        </div>
    </div>
    <!-- Start Menu -->
    <div id="win_start">
        <div id="win_start_banner">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/start_banner.png" alt="Windows 95" id="win_start_banner_img">
        </div>
        <!-- Start Menu Top-level List -->
        <div id="win_start_tli_cont">
            <!-- Programs -->
            <div id="win_start_tli_programs" class="win_start_toplevel_item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/programs24.png" alt="Programs" class="win_start_tliicon">
                <span class="win_start_tlitext">
                    <u>P</u>rograms</span>
            </div>
            <!-- Documents -->
            <div id="win_start_tli_documents" class="win_start_toplevel_item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/documents24.png" alt="Documents" class="win_start_tliicon">
                <span class="win_start_tlitext">
                    <u>D</u>ocuments</span>
            </div>
            <!-- Settings -->
            <div id="win_start_tli_settings" class="win_start_toplevel_item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/settings24.png" alt="Settings" class="win_start_tliicon">
                <span class="win_start_tlitext">
                    <u>S</u>ettings</span>
            </div>
            <!-- Find -->
            <div id="win_start_tli_find" class="win_start_toplevel_item" onClick="run(true)">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/find24.png" alt="Find" class="win_start_tliicon">
                <span class="win_start_tlitext">
                    <u>F</u>ind</span>
            </div>
            <!-- Help -->
            <div id="win_start_tli_help" class="win_start_toplevel_item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/help24.png" alt="Help" class="win_start_tliicon">
                <span class="win_start_tlitext">
                    <u>H</u>elp</span>
            </div>
            <!-- Run -->
            <div id="win_start_tli_run" class="win_start_toplevel_item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/run24.png" alt="Run..." class="win_start_tliicon">
                <span class="win_start_tlitext">
                    <u>R</u>un...</span>
            </div>
            <!-- Divider -->
            <div class="win_start_divider">
                <div class="win_start_d1"></div>
                <div class="win_start_d2"></div>
            </div>
            <!-- Shut Down -->
            <div id="win_start_tli_shutdown" class="win_start_toplevel_item" onclick="windowsError(true, 404, 'Page not found');">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/shutdown24.png" alt="Shut Down..." class="win_start_tliicon">
                <span class="win_start_tlitext">
                    <u>S</u>hut Down...</span>
            </div>
        </div>
    </div>
    <div id="win_container">
        <div id="win_placeholder"></div>
        <!-- This is here to provide a target for the window creation function -->

        <!-- Homescreen Shortcuts -->
        <div class="icon_container">
            <!-- function makeWindow(icon, title, frameurl, taskbar, res, wid, hei) -->
            <div class='homescreen_icons' onclick="makeWindow('<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/document_file.png', 'README.txt', '<?php echo get_stylesheet_directory_uri(); ?>/pages/information_page.html', true);">
                <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/README.png" id="win_start_icon" alt="About">
                <p class="homescreen_title_text">README.txt</p>
            </div>
            <div class='homescreen_icons' onclick="makeWindow('<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/document_file.png', 'Portfolio', '<?php echo get_stylesheet_directory_uri(); ?>/pages/portfolio_index.html', true);">
                <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/folder.png" id="win_start_icon" alt="Portfolio">
                <p class="homescreen_title_text">Portfolio</p>
            </div>
            <div class='homescreen_icons' onclick="makeWindow('<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/recycle_bin_full.png', 'Recycle Bin', '<?php echo get_stylesheet_directory_uri(); ?>/pages/archive_page.html', true);">
                <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/recycle_bin_full.png" id="win_start_icon" alt="Archives">
                <p class="homescreen_title_text">Recycle Bin</p>
            </div>
            <div class='homescreen_icons' onClick="runHome()">
                <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/find32.png" id="win_start_icon" alt="Find">
                <p class="homescreen_title_text">Find</p>
            </div>
            <div class='homescreen_icons' onclick="makeWindow('<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/contact_icon.png', 'Contact', '<?php echo get_stylesheet_directory_uri(); ?>/pages/contact_page.html', true);">
                <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/contact_icon.png" id="win_start_icon" alt="Contact">
                <p class="homescreen_title_text">Contact</p>
            </div>
            <div class='homescreen_icons'>
                <a class="home_link" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/download/resume.pdf" download>
                    <img class="homescreen_icons_images" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/system/icons/resume.png" id="win_start_icon" alt="Resume">
                </a>
                <p class="homescreen_title_text">Resume</p>
            </div>
        </div>
    </div>
    <div id="win_overlay">

    </div>
    <?php wp_footer();?>
</body>
</html>