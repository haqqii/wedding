<a class="skip-link screen-reader-text" href="#content">Langsung ke konten</a>
<div class="site-canvas">
    <div class="site-container" id="page">
        <div class="site-inner">
            <div class="site-content" id="content">
                <div class="container">
                    <div class="content-area" id="primary">
                        <main class="site-main" id="main">
                            <div class="elementor elementor-13477" data-elementor-id="13477" data-elementor-settings="[]" data-elementor-type="wp-post">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

                                        <style type="text/css">
                                            .modalx {
                                                position: fixed;
                                                z-index: 1000;
                                                width: 100%;
                                                height: 100vh;
                                                top: 0;
                                                left: 0;
                                                background-color: transparent;
                                                background-size: cover;
                                                background-position: center;
                                                background-repeat: no-repeat;
                                                transform: translateY(0)
                                            }

                                            .overlayy {
                                                background-color: #000;
                                                position: relative;
                                                width: 100%;
                                                height: 100%;
                                                z-index: 2001;
                                                top: 0;
                                                opacity: 0.7;
                                                left: 0;

                                            }

                                            .content-modalx {
                                                background-color: transparent;
                                                position: absolute;
                                                width: 100%;
                                                height: 100%;
                                                z-index: 2002;
                                                top: 0;
                                                color: WHITE;
                                                left: 0;

                                            }

                                            .info_modalx {
                                                margin: 150px auto;
                                                width: 90%;
                                                display: flex;
                                                height: auto;
                                                flex-direction: column;
                                                justify-content: center;

                                            }

                                            .info_modalx {
                                                width: 100%;
                                                text-align: center;
                                                height: auto;
                                                margin-bottom: 30px;

                                            }

                                            .info_title {
                                                font-family: "Poppins";
                                                font-size: 17px;
                                                font-weight: 100;

                                            }

                                            .info_button button {
                                                background-color: #E57F85;
                                                font-family: "Poppins";
                                                font-weight: 400;
                                                color: #FFFFFF;
                                                border: none;
                                                padding: 15px 50px;
                                                font-size: 15px;
                                                border-radius: 100px;
                                                cursor: pointer;
                                                outline: none;
                                            }

                                            .removeModals {
                                                transform: translateY(100%);
                                                transition: 1s ease-in-out;

                                            }
                                        </style>

                                        <div class="modalx" data-sampul=<?php echo base_url(); ?>assets/front_end/uploads/2020/sampul/cnk.jpg>
                                            <div class="overlayy"></div>
                                            <div class="content-modalx">
                                                <div class="info_modalx">
                                                    <div class="info_title"><?php echo $biodata['nama_panggilan_wanita'] ?> & <?php echo $biodata['nama_panggilan_pria'] ?></div><br>
                                                    <div class="elementor-element elementor-element-fed8eff elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="fed8eff" data-widget_type="image_lp.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="image">
                                                                <img src="assets/front_image/<?php echo $biodata['photo']; ?>" width="90px">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="elementor-element elementor-element-3491642 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="3491642" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default" style="color: white;";>Kepada Yth.<br> Bapak/Ibu/Saudara/i
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-fe7ba9a elementor-widget elementor-widget-html" data-element_type="widget" data-id="fe7ba9a" data-widget_type="html.default">
                                                        <div class="elementor-widget-container">
                                                            <div class='popup'>
                                                                <div class='cnt223'>
                                                                    <p id="write" style="color: white; font-size: 18px; font-weight:bold; padding-bottom:4px; border-radius:4px; text-align: center"></p>
                                                                    <div style="clear: both;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="info_button">
                                                        <button><i class="fa fa-envelope-open"></i> Buka Undangan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            const sampul = jQuery('.modalx').data('sampul');
                                            jQuery('.modalx').css('background-image', 'url(' + sampul + ')');
                                            jQuery('body').css('overflow', 'hidden');
                                            jQuery('.info_button button').on('click', function() {
                                                jQuery('.modalx').addClass('removeModals');
                                                jQuery('body').css('overflow', 'auto');
                                                document.getElementById("song").play();
                                            });
                                        </script>
                                        <center><audio id="song" autoplay="" controls="" loop="">
                                                <source src="assets/front_audio/musik.mp3">
                                            </audio></center>




                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-39b577f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="39b577f" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" id="home">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a810d30" data-element_type="column" data-id="a810d30">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-9b8eb77 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="9b8eb77" data-widget_type="image_lp.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="90" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04mahkotaatas.png" width="300"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-4ef2df6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="4ef2df6" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aa3dfec" data-element_type="column" data-id="aa3dfec" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-background-overlay"></div>
                                                            <div class="elementor-widget-wrap">
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-4b82151 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="4b82151">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8a5431b" data-element_type="column" data-id="8a5431b">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-6f97a9f elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="6f97a9f" data-widget_type="image_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04frameataskiri.png" width="300"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-76522f2" data-element_type="column" data-id="76522f2">
                                                                                <div class="elementor-column-wrap">
                                                                                    <div class="elementor-widget-wrap"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1b749c3" data-element_type="column" data-id="1b749c3">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-ae2f33b elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="ae2f33b" data-widget_type="image_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04frameataskanan.png" width="300"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <div class="elementor-element elementor-element-2bc3c44 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="2bc3c44" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">The Wedding of</h2>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="elementor-element elementor-element-344d9c7 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="344d9c7" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Aura & Rosyid</h2>
                                                                    </div>
                                                                </div> -->
                                                                <div class="elementor-element elementor-element-a3e6cac elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="a3e6cac" data-widget_type="image_lp.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="300" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04ilustrasihijab.png" width="232"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-ece3647 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="ece3647" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default"><?php echo $biodata['nama_panggilan_wanita'] ?> & <?php echo $biodata['nama_panggilan_pria'] ?></h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-644c51e elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="644c51e" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">- <?php echo $akad['tanggal_akad'] ?> -</h2>
                                                                    </div>
                                                                </div>
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-9e5030d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="9e5030d">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2329c7c" data-element_type="column" data-id="2329c7c">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-0c02976 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="0c02976" data-widget_type="image_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04framebawahkiri.png" width="300"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-adc2630" data-element_type="column" data-id="adc2630">
                                                                                <div class="elementor-column-wrap">
                                                                                    <div class="elementor-widget-wrap"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3dc4993" data-element_type="column" data-id="3dc4993">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-f55374c elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="f55374c" data-widget_type="image_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04framebawahkanan.png" width="300"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-f080bdb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="f080bdb" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b7389a6" data-element_type="column" data-id="b7389a6">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-9f6c33f elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="9f6c33f" data-widget_type="image_lp.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="90" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04mahkotabawah.png" width="300"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-f441a08 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="f441a08" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" id="couple">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dc8b03b" data-element_type="column" data-id="dc8b03b">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-1181c27 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="1181c27" data-widget_type="image_lp.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="90" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04mahkotaatas.png" width="300"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-98db624 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="98db624" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aec9f55" data-element_type="column" data-id="aec9f55" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-background-overlay"></div>
                                                            <div class="elementor-widget-wrap">
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-0cdfc57 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="0cdfc57">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b32ad3e" data-element_type="column" data-id="b32ad3e">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-057e197 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="057e197" data-widget_type="image_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04frameataskiri.png" width="300"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a2b6e82" data-element_type="column" data-id="a2b6e82">
                                                                                <div class="elementor-column-wrap">
                                                                                    <div class="elementor-widget-wrap"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-bb0e323" data-element_type="column" data-id="bb0e323">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-8861812 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="8861812" data-widget_type="image_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04frameataskanan.png" width="300"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <div class="elementor-element elementor-element-e813922 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="e813922" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-4bd7de8 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="4bd7de8" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p class="elementor-heading-title elementor-size-default">Assalamu`alaikum<br> Warahmatullaahi Wabarakaatuh</p>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-0d410b1 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="0d410b1" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p class="elementor-heading-title elementor-size-default">Maha Suci Allah yang telah menciptakan makhluk-Nya berpasang-pasangan. Ya Allah semoga ridho-Mu tercurah mengiringi pernikahan kami:</p>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-e203aef elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="e203aef" data-widget_type="image_lp.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image"><img alt="" class="attachment-medium size-medium" height="600" src="assets/front_image/mami.png" width="600"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-7d3c8bb elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="7d3c8bb" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-heading-title elementor-size-default">
                                                                            <?php echo $biodata['nama_lengkap_wanita'] ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-6bff81c elementor-widget elementor-widget-heading" data-element_type="widget" data-id="6bff81c" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p class="elementor-heading-title elementor-size-default"><?php echo $biodata['nama_orangtua_mempelai_wanita'] ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-b93bfd9 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="b93bfd9" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p class="elementor-heading-title elementor-size-default">- &amp; -</p>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-99d9bc6 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="99d9bc6" data-widget_type="image_lp.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image"><img alt="" class="attachment-medium size-medium" height="600" src="assets/front_image/papa.png" width="600"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-ca829f0 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="ca829f0" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default"> <?php echo $biodata['nama_lengkap_pria'] ?></h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-9a7fcbf elementor-widget elementor-widget-heading" data-element_type="widget" data-id="9a7fcbf" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p class="elementor-heading-title elementor-size-default"><?php echo $biodata['nama_orangtua_mempelai_pria'] ?></p>
                                                                    </div>
                                                                </div>
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-2951c8f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="2951c8f">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-2c0429d" data-element_type="column" data-id="2c0429d">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-b45bcd6 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="b45bcd6" data-widget_type="image_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04framebawahkiri.png" width="300"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-eedf8ee" data-element_type="column" data-id="eedf8ee">
                                                                                <div class="elementor-column-wrap">
                                                                                    <div class="elementor-widget-wrap"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-46b9aa3" data-element_type="column" data-id="46b9aa3">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-c24a5ad elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="c24a5ad" data-widget_type="image_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04framebawahkanan.png" width="300"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-6d29b23 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="6d29b23" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b86d230" data-element_type="column" data-id="b86d230">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-7a4f555 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="7a4f555" data-widget_type="image_lp.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="90" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04mahkotabawah.png" width="300"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-7e41abd elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="7e41abd" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" id="event">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e6aa783" data-element_type="column" data-id="e6aa783">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-476635b elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="476635b" data-widget_type="image_lp.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="90" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04mahkotaatas.png" width="300"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-4a4fa1e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="4a4fa1e" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1392d8f" data-element_type="column" data-id="1392d8f" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-background-overlay"></div>
                                                            <div class="elementor-widget-wrap">
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-b71f282 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="b71f282">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-59e3d18" data-element_type="column" data-id="59e3d18">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-6b34090 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="6b34090" data-widget_type="image_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04frameataskiri.png" width="300"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4afd32f" data-element_type="column" data-id="4afd32f">
                                                                                <div class="elementor-column-wrap">
                                                                                    <div class="elementor-widget-wrap"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-52a2fae" data-element_type="column" data-id="52a2fae">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-6b5f72e elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="6b5f72e" data-widget_type="image_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04frameataskanan.png" width="300"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <div class="elementor-element elementor-element-b92c301 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="b92c301" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Event</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-7635662 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="7635662" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <p class="elementor-heading-title elementor-size-default">Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, kami mengundang Bapak/Ibu/Saudara/i, untuk menghadiri pernikahan kami.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-bfa79e1 elementor-view-default elementor-widget elementor-widget-icon" data-element_type="widget" data-id="bfa79e1" data-widget_type="icon.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-wrapper">
                                                                            <div class="elementor-icon">
                                                                                <svg data-name="Layer 1" id="Layer_1" viewbox="0 0 350.04 383.97" xmlns="http://www.w3.org/2000/svg">
                                                                                    <title>icon akad</title>
                                                                                    <path d="M183.14,448c-7.43-1.5-15-2.53-22.28-4.57-42-11.75-74-49.41-79.06-92.5C75,292.6,111.8,240.7,169,228.07c.85-.19,1.68-.47,3-.87-1.54-1.05-2.74-1.89-4-2.69l-37.3-24.42c-4.9-3.21-5.73-5.62-3.72-11q5.87-15.79,11.79-31.55c1.71-4.55,3.51-5.78,8.43-5.78q45,0,90,0c5,0,6.82,1.26,8.63,6.09q5.89,15.78,11.7,31.59c1.87,5.09,1.06,7.48-3.45,10.45q-19.25,12.65-38.53,25.28c-.92.61-1.81,1.26-3.16,2.2l5.12,1.23A107.72,107.72,0,0,1,253,244c2.08,1.4,3.43,1.45,5.58,0,66-43.47,155.07-6.08,170.3,71.43,12.56,64-32.78,125.09-97.8,131.88a17.28,17.28,0,0,0-2.48.63h-18a5.2,5.2,0,0,0-1.36-.54,111.76,111.76,0,0,1-51.65-18.38c-.92-.6-3.06-.27-4.12.42a110,110,0,0,1-37.34,15.82c-5,1.06-10,1.8-15,2.68Zm41.22-53.65q-31.77-57.51,0-115.09c-23.1-14.15-59.07-12.18-81.89,13.59a66.18,66.18,0,0,0-.21,87.69C165.71,407.06,202.11,408.13,224.36,394.34Zm63,0c24.6,14.67,61.33,11.62,83.72-15.73a66.23,66.23,0,0,0-3.67-87.9c-24.2-25-59.83-24.46-80-11.39Q319.11,336.75,287.41,394.39ZM236.46,286.67c-22.84,36.48-19.43,91.5,21.42,125.48,38.94,32.4,96.79,29,132.26-7.91a97.15,97.15,0,0,0,1.74-133c-35.31-39-90.48-39.72-124.52-16.41l12,12.87c1-.49,1.85-.91,2.71-1.38a77.82,77.82,0,0,1,34.75-9.42c48.23-1.76,86.76,39.12,82.45,87.39-3.38,37.81-34,68.59-71.65,72.09-58.11,5.4-102.37-50.66-83.44-105.68,5.83-8.23,1.68-14.2-4.4-19.82A36.42,36.42,0,0,1,236.46,286.67Zm-4.05,119.2c-.95.49-1.81,1-2.69,1.4-29.22,14.39-57.83,13.25-84.25-5.82s-37.17-45.79-32.11-78.06c5.11-32.58,30.29-58.21,62.59-64.94a79.52,79.52,0,0,1,83.34,35.4c15,23.93,16.57,49.17,5.86,75.27-.57,1.39-.86,3.67-.12,4.69,3.19,4.41,6.81,8.5,10.42,12.87,23-36.61,19.26-93-23.51-126.77-41.2-32.48-100.67-26-135,14.62-33.63,39.85-29.09,100.1,10.24,135.11,38.66,34.41,90.83,28.49,117,8.9Zm-4.8-204.94-.35-.63H156.34c1.44,1.07,2.27,1.74,3.17,2.33,8.76,5.75,17.79,11.14,26.21,17.36,4.92,3.63,8.4,3.46,13.26-.08C208.23,213.18,218,207.21,227.61,200.93Zm-2.69-14.71.15-.68c-10.33-6-20.64-12.14-31.05-18-1-.54-2.88-.22-4,.4-9.66,5.48-19.24,11.12-28.83,16.72-.56.33-1,.79-2.1,1.59Zm31,134.83a55.09,55.09,0,0,0,0,31.4A54.68,54.68,0,0,0,255.88,321ZM145.8,177.8l20.09-11.71a67.58,67.58,0,0,0-13.33-.69,3.34,3.34,0,0,0-2.54,1.4C148.59,170,147.45,173.4,145.8,177.8Zm73.4-12.47-.18.88,19.57,11.41c-1.55-4.26-2.65-7.53-4-10.71a2.94,2.94,0,0,0-2.13-1.51C228.06,165.27,223.63,165.34,219.2,165.34Z" transform="translate(-80.98 -64.01)"></path>
                                                                                    <path d="M128.84,133c-1.39,1.76-2.5,4.48-4.4,5.23-2.06.81-5.72.71-7.17-.62-8-7.36-15.6-15.12-23.12-22.95-2.58-2.69-2.06-6.63.54-9.1a6.37,6.37,0,0,1,8.85-.32c7.82,7.53,15.46,15.27,23.05,23C127.57,129.2,127.88,130.84,128.84,133Z" transform="translate(-80.98 -64.01)"></path>
                                                                                    <path d="M199,86.31c0,5,.06,10,0,15-.07,4.46-2.79,7.45-6.67,7.49s-6.84-3-6.88-7.34q-.13-15,0-30c0-4.45,2.82-7.4,6.73-7.45s6.74,2.87,6.81,7.3C199.07,76.31,199,81.31,199,86.31Z" transform="translate(-80.98 -64.01)"></path>
                                                                                    <path d="M262.6,140c-1.9-1.59-4.27-2.84-5.5-4.81-1.55-2.48-.88-5.35,1.28-7.54,4.82-4.89,9.68-9.73,14.54-14.59,2.47-2.47,4.87-5,7.45-7.38,3-2.78,7.09-2.66,9.71.1a6.57,6.57,0,0,1-.15,9.43q-10.85,11.12-22,22C266.76,138.28,265,138.75,262.6,140Z" transform="translate(-80.98 -64.01)"></path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-19b8d2f elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="19b8d2f" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Akad Nikah</h2>
                                                                    </div>
                                                                </div>
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-44315f3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="44315f3">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-07ddd6b" data-element_type="column" data-id="07ddd6b">
                                                                                <div class="elementor-column-wrap elementor-element-populated">

                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-3d7a74f elementor-align-left elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="3d7a74f" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="icon-list.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <ul class="elementor-icon-list-items">
                                                                                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="far fa-calendar-alt"></i></span> <span class="elementor-icon-list-text"><?php echo $akad['tanggal_akad']; ?> </span></li>
                                                                                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="far fa-clock"></i></span> <span class="elementor-icon-list-text"><?php echo $akad['waktu_akad']; ?></span></li>
                                                                                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="fas fa-map-marker-alt"></i></span> <span class="elementor-icon-list-text"><b><?php echo strtoupper($akad['tempat_akad']); ?><br></b><?php echo $akad['alamat_akad']; ?></span></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-1f872a4 elementor-invisible elementor-widget elementor-widget-html" data-element_type="widget" data-id="1f872a4" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="html.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.89283536622094!2d106.90226995380588!3d-6.226055584546276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3cedbd78817%3A0x6e0a20ec59348d01!2sGedung%20Pertemuan%20Kompleks%20Dinas%20Kebersihan!5e0!3m2!1sid!2sid!4v1650359778218!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-74846e2 elementor-align-center elementor-mobile-align-center elementor-invisible elementor-widget elementor-widget-button_lp" data-element_type="widget" data-id="74846e2" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="button_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-button-wrapper">
                                                                                                    <a class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" href="<?php echo $akad['url_maps_akad']; ?>" role="button"><span class="elementor-button-content-wrapper"><span class="elementor-button-text">Buka Map</span></span></a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <div class="elementor-element elementor-element-25c8fbf elementor-widget elementor-widget-spacer" data-element_type="widget" data-id="25c8fbf" data-widget_type="spacer.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-spacer">
                                                                            <div class="elementor-spacer-inner"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-5bfa475 elementor-view-default elementor-widget elementor-widget-icon" data-element_type="widget" data-id="5bfa475" data-widget_type="icon.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-icon-wrapper">
                                                                            <div class="elementor-icon">
                                                                                <svg data-name="Layer 1" id="Layer_1" viewbox="0 0 297.07 383.98" xmlns="http://www.w3.org/2000/svg">
                                                                                    <title>icon resepsi</title>
                                                                                    <path d="M151.74,448c-4.28-2.34-5.65-6.08-5.92-10.79-2-34.05-4.12-68.09-6.2-102.14-.17-2.74-.36-5.18-2.94-7.21-1.4-1.1-2.1-3.68-2.25-5.66-.89-11.83-1.52-23.69-2.24-35.54a8.8,8.8,0,0,0-1.15-4.47c-.83,4.75-1.7,9.49-2.49,14.24-1.59,9.48-3.1,19-4.72,28.44-1.08,6.32-6,9.57-11.21,7.57-3.93-1.5-5.8-5.21-5-10.15q7.27-43.2,14.59-86.4c1.8-10.58,3.73-21.14,5.53-31.72,2-11.62,8.53-20,18.25-26.2.63-.4,1.26-.8,1.88-1.21.1-.06.14-.2.41-.61-10.46-10.09-15.25-22.42-13-37a39,39,0,0,1,14.26-24.75,40.55,40.55,0,0,1,55,3.36c14.17,14.77,16.32,40.87-2.47,58.57.72.51,1.39,1.05,2.12,1.49,11.86,7.23,17.49,18,19.5,31.59,3.27,22.09,7.5,44,11.34,66.06a7,7,0,0,0,.75,1.25c.55-1.63.94-2.84,1.35-4,5.71-16.94,13.11-33,25.48-46.21,4.74-5.05,10.41-9.29,15.94-13.52,1.9-1.46,2.83-2.62,2.81-5.06-.11-14-.29-28,0-42,.38-16.29,8.08-28.54,22.64-35.67s29.2-5.68,42.36,4.18c10.56,7.91,15.79,18.84,15.95,32,.17,14.74,0,29.49.11,44.24,0,1.4.57,3.34,1.58,4.1,17.16,13,26.15,30.78,29.91,51.53a99.11,99.11,0,0,1-3.27,48.11,7.87,7.87,0,0,0,.05,4.64c9.44,27,13.64,54.93,13.71,83.5,0,11.5-.21,23,0,34.49.07,5-1.4,8.74-6,11h-153c-4.48-2.09-6.16-5.58-6.08-10.52.18-10.61,0-21.24-.1-31.85a260.36,260.36,0,0,1,7.77-66.77c5.55-21.68,13.74-42.16,27.38-60.24,3.38-4.47,9.51-7.21,10.15-13.27.61-5.79-.15-11.72-.37-17.59s-.5-11.83-.79-18.77c-3.12,2.93-5.69,5.06-7.93,7.5-12.58,13.65-20.14,30.1-24.58,47.78-3.3,13.13-4.91,26.69-7.13,40.08-.88,5.31-3.74,8.57-8.15,8.69s-7.4-2.77-8.35-8c-1.76-9.7-3.41-19.42-5.12-29.12-.9-5.08-1.83-10.16-2.74-15.23-1.46,13.27-2.35,26.43-3,39.61-.19,3.67-.82,6.84-4,9.17-.79.57-1.12,2.14-1.2,3.29-.63,9.22-1.13,18.45-1.7,27.67-1.58,25.55-3.24,51.1-4.71,76.66-.27,4.67-1.56,8.46-5.77,10.87Zm236.19-40.38c.18-1.74.29-2.34.29-2.94.05-26.78-3.38-53-12.2-78.41-5.49-15.8-12.83-30.58-24.28-43.06a7.55,7.55,0,0,0-6.13-2.76c-15.86.12-31.73,0-47.59.16a8.54,8.54,0,0,0-5.44,2.31c-8.78,8.92-15,19.6-19.93,31-10.41,23.86-15.21,49-16.62,74.85-.32,5.93,0,11.89,0,18.87,3.22-.92,6.42-1.37,9.19-2.71,9.32-4.49,18.54-4.6,27.71.11a15,15,0,0,0,14.66.13c9.44-4.86,18.95-4.79,28.37,0a14.31,14.31,0,0,0,14,.07c9.69-5.07,19.31-4.84,29.08,0C381.53,406.53,384.58,406.77,387.93,407.61ZM151.57,194.07c-5.36,4.51-8,9.57-7.59,16.25,1.7,28.06,3.29,56.13,4.94,84.19.39,6.55.88,13.09,1.33,19.62h16.63a21.73,21.73,0,0,0,.28-2.37c0-19.75,0-39.49,0-59.24a17,17,0,0,0-1-4.71c-3.88-12.76-7.94-25.47-11.61-38.29C153.08,204.68,152.57,199.58,151.57,194.07Zm47.63.19a7.59,7.59,0,0,0-.64,1.49c-2.13,18.23-8.15,35.41-14.22,52.57a18,18,0,0,0-.91,5.84c-.07,18.6,0,37.2,0,55.8v4.17h16.89c.11-1.17.24-2.14.3-3.12q1.29-20.93,2.56-41.85,1.76-29.71,3.47-59.42C207,203.35,204.26,198.5,199.2,194.27Zm-23.77-24.4A24.17,24.17,0,1,0,151,145.74,24.24,24.24,0,0,0,175.43,169.87ZM346.21,166c-.24-1.53-.57-3.49-.84-5.47-.51-3.81-2.26-5.27-6.46-5.13-11.73.37-23.48.25-35.22,0-3-.05-4.23,1.12-4.91,3.75-2.53,9.79-.62,18.47,7,25.24s16.7,8.3,26.13,4C341.2,184.24,345.72,176.61,346.21,166ZM255.9,431.41H387.84v-8.07c-6.7.49-12.52-1.42-18.19-4.27a12.23,12.23,0,0,0-11.55.37c-10,5.28-20,5.35-30.08.07a13,13,0,0,0-12.58,0c-10,5.26-19.92,5.11-30.15.18a16.37,16.37,0,0,0-10-1c-6.44,1.47-12.64,4-19.35,6.19Zm87.17-192.33H300.89v24.86h42.19ZM155.63,330.8l5,79.7h6.28V330.8Zm28,.11V410.6H190l5-80c-3.25,0-6,0-8.7,0A24.35,24.35,0,0,0,183.62,330.92Zm194.83-39c3.5-21.07-5.62-48.39-18.22-58.25L359,264.51c0,.5-.21,1.07,0,1.48a13.33,13.33,0,0,0,1.71,3.11c4.19,5.11,8.53,10.1,12.66,15.26C375.19,286.63,376.63,289.21,378.45,291.95Zm-35.87-69.61c-2.86-10-12.54-16.13-23.35-15.09-8.46.81-17,8.06-17.62,15.09Zm-167.75.87.9.17,4.17-15.13h-9.24Zm-7-36.41-.88,1.15c1,1.26,1.91,3.49,3,3.61a116.61,116.61,0,0,0,12.52.17l.75-4.93Zm-6.24,240.42.56,4.17h4.75v-4.17Zm22.1.07v4.18h4.91l.25-4.18Z" transform="translate(-107.47 -64.01)"></path>
                                                                                    <path d="M206.49,96.94c0-24.55,23.08-39.41,43.44-30.11a6.81,6.81,0,0,0,6.51.11,30.46,30.46,0,0,1,37.52,9.43c8.81,11.88,8.32,28.16-1.85,38.93-10.63,11.25-21.75,22-32.76,32.94-3.89,3.85-8.33,3.8-12.26-.09q-16.11-15.94-32-32.08C209.29,110.19,206.58,102.95,206.49,96.94Zm46.85,33.37c8.89-8.65,18.36-17.35,27.21-26.65,5.08-5.34,4.18-13.85-1-19a14.54,14.54,0,0,0-19.14-1.3c-6.35,4.78-7.93,4.75-14.38,0-4.87-3.58-10.17-4.07-15.51-1.31s-8.06,7.23-7.58,13.12c.23,2.84,1,6.32,2.85,8.23C234.84,112.67,244.3,121.54,253.34,130.31Z" transform="translate(-107.47 -64.01)"></path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-5b997e9 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="5b997e9" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <h2 class="elementor-heading-title elementor-size-default">Resepsi Pernikahan</h2>
                                                                    </div>
                                                                </div>
                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-eb37cc4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="eb37cc4">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6fd7db9" data-element_type="column" data-id="6fd7db9">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-ef47dcd elementor-align-left elementor-list-item-link-full_width elementor-invisible elementor-widget elementor-widget-icon-list" data-element_type="widget" data-id="ef47dcd" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="icon-list.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <ul class="elementor-icon-list-items">
                                                                                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="far fa-calendar-alt"></i></span> <span class="elementor-icon-list-text"><?php echo $akad['tanggal_resepsi']; ?> </span></li>
                                                                                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="far fa-clock"></i></span> <span class="elementor-icon-list-text"><?php echo $akad['waktu_resepsi']; ?></span></li>
                                                                                                    <li class="elementor-icon-list-item"><span class="elementor-icon-list-icon"><i aria-hidden="true" class="fas fa-map-marker-alt"></i></span> <span class="elementor-icon-list-text"><b><?php echo strtoupper($akad['tempat_resepsi']); ?><br></b><?php echo $akad['alamat_resepsi']; ?></span></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-8b7b8c1 elementor-invisible elementor-widget elementor-widget-html" data-element_type="widget" data-id="8b7b8c1" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="html.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <iframe src="<?php echo $akad['maps_resepsi']; ?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-74846e2 elementor-align-center elementor-mobile-align-center elementor-invisible elementor-widget elementor-widget-button_lp" data-element_type="widget" data-id="74846e2" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="button_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-button-wrapper">
                                                                                                    <a class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" href="<?php echo $akad['url_maps_resepsi']; ?>" role="button"><span class="elementor-button-content-wrapper"><span class="elementor-button-text">Buka Map</span></span></a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>


                                                                <div class="elementor-element elementor-element-25c8fbf elementor-widget elementor-widget-spacer" data-element_type="widget" data-id="25c8fbf" data-widget_type="spacer.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-spacer">
                                                                            <div class="elementor-spacer-inner"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="elementor-element elementor-element-b5c87b5 elementor-widget elementor-widget-spacer" data-element_type="widget" data-id="b5c87b5" data-widget_type="spacer.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-spacer">
                                                                            <div class="elementor-spacer-inner"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-9f48948 elementor-invisible elementor-widget elementor-widget-countdown_simple" data-element_type="widget" data-id="9f48948" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="countdown_simple.default">

                                                                    <?php
                                                                    if ($waktu_acara['status'] == 'aktif') {
                                                                    ?>
                                                                        <div class="elementor-widget-container">
                                                                            <script type="text/javascript">
                                                                                ! function(a) {
                                                                                    "use strict";
                                                                                    a.extend = function(b, c) {
                                                                                        if (b = b || {}, arguments.length > 2)
                                                                                            for (var d = 1; d < arguments.length; d++) a.extend(b, arguments[d]);
                                                                                        else
                                                                                            for (var e in c) b[e] = c[e];
                                                                                        return b
                                                                                    };
                                                                                    var b = function(b) {
                                                                                        this.conf = a.extend({
                                                                                            dateStart: new Date,
                                                                                            dateEnd: new Date((new Date).getTime() + 864e5),
                                                                                            selector: ".timer",
                                                                                            msgBefore: "Be ready!",
                                                                                            msgAfter: "It's over, sorry folks!",
                                                                                            msgPattern: "{days} days, {hours} hours, {minutes} minutes and {seconds} seconds left.",
                                                                                            onStart: null,
                                                                                            onEnd: null,
                                                                                            leadingZeros: !1,
                                                                                            initialize: !0
                                                                                        }, b), this.started = !1, this.selector = document.querySelectorAll(this.conf.selector), this.interval = 1e3, this.patterns = [{
                                                                                            pattern: "{years}",
                                                                                            secs: 31536e3
                                                                                        }, {
                                                                                            pattern: "{months}",
                                                                                            secs: 2628e3
                                                                                        }, {
                                                                                            pattern: "{weeks}",
                                                                                            secs: 604800
                                                                                        }, {
                                                                                            pattern: "{days}",
                                                                                            secs: 86400
                                                                                        }, {
                                                                                            pattern: "{hours}",
                                                                                            secs: 3600
                                                                                        }, {
                                                                                            pattern: "{minutes}",
                                                                                            secs: 60
                                                                                        }, {
                                                                                            pattern: "{seconds}",
                                                                                            secs: 1
                                                                                        }], this.initialize !== !1 && this.initialize()
                                                                                    };
                                                                                    b.prototype.initialize = function() {
                                                                                        return this.defineInterval(), this.isOver() ? this.outOfInterval() : void this.run()
                                                                                    }, b.prototype.seconds = function(a) {
                                                                                        return a.getTime() / 1e3
                                                                                    }, b.prototype.isStarted = function() {
                                                                                        return this.seconds(new Date) >= this.seconds(this.conf.dateStart)
                                                                                    }, b.prototype.isOver = function() {
                                                                                        return this.seconds(new Date) >= this.seconds(this.conf.dateEnd)
                                                                                    }, b.prototype.run = function() {
                                                                                        var b, c = this,
                                                                                            d = Math.abs(this.seconds(this.conf.dateEnd) - this.seconds(new Date));
                                                                                        this.isStarted() ? this.display(d) : this.outOfInterval(), b = a.setInterval(function() {
                                                                                            d--, 0 >= d ? (a.clearInterval(b), c.outOfInterval(), c.callback("end")) : c.isStarted() && (c.started || (c.callback("start"), c.started = !0), c.display(d))
                                                                                        }, this.interval)
                                                                                    }, b.prototype.display = function(a) {
                                                                                        for (var b = this.conf.msgPattern, c = 0; c < this.patterns.length; c++) {
                                                                                            var d = this.patterns[c];
                                                                                            if (-1 !== this.conf.msgPattern.indexOf(d.pattern)) {
                                                                                                var e = Math.floor(a / d.secs),
                                                                                                    f = this.conf.leadingZeros && 9 >= e ? "0" + e : e;
                                                                                                a -= e * d.secs, b = b.replace(d.pattern, f)
                                                                                            }
                                                                                        }
                                                                                        for (var g = 0; g < this.selector.length; g++) this.selector[g].innerHTML = b
                                                                                    }, b.prototype.defineInterval = function() {
                                                                                        for (var a = this.patterns.length; a > 0; a--) {
                                                                                            var b = this.patterns[a - 1];
                                                                                            if (-1 !== this.conf.msgPattern.indexOf(b.pattern)) return void(this.interval = 1e3 * b.secs)
                                                                                        }
                                                                                    }, b.prototype.outOfInterval = function() {
                                                                                        for (var a = new Date < this.conf.dateStart ? this.conf.msgBefore : this.conf.msgAfter, b = 0; b < this.selector.length; b++) this.selector[b].innerHTML !== a && (this.selector[b].innerHTML = a)
                                                                                    }, b.prototype.callback = function(b) {
                                                                                        var c = b.capitalize();
                                                                                        "function" == typeof this.conf["on" + c] && this.conf["on" + c](), "undefined" != typeof a.jQuery && a.jQuery(this.conf.selector).trigger("countdown" + c)
                                                                                    }, String.prototype.capitalize = function() {
                                                                                        return this.charAt(0).toUpperCase() + this.slice(1)
                                                                                    }, a.Countdown = b
                                                                                }(window);
                                                                            </script>
                                                                            <div class="elementor-countdown-simple elementor-countdown-floating-no">
                                                                                <div id="lp-countdown-fixed-9f48948">
                                                                                    <div class="countdown-intro">
                                                                                        Waktu Menuju Acara
                                                                                    </div><span class="count-container"><span class="count-box"><span class="count-num">00</span> <span class="count-label">Hari</span></span> <span class="count-box"><span class="count-num">00</span> <span class="count-label">Jam</span></span> <span class="count-box"><span class="count-num">00</span> <span class="count-label">Menit</span></span> <span class="count-box"><span class="count-num">00</span> <span class="count-label">Detik</span></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <center><a class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" href="https://calendar.google.com/event?action=TEMPLATE&tmeid=N2NuZmNkYWtva3Vhdm4wZWo1bGpicGEyY2tfMjAyMjA1MjFUMDIwMDAwWiBoYXFxaWFyaWVzMDFAbQ&tmsrc=haqqiaries01%40gmail.com&scp=ALL" role="button"><span class="elementor-button-content-wrapper"><span class="elementor-button-text">Add to Calender</span></span></a></center>
                                        
                                                                            <script type="text/javascript">
                                                                                new Countdown({
                                                                                    selector: '#lp-countdown-fixed-9f48948',
                                                                                    dateEnd: new Date('<?php echo $waktu_acara["tanggal"]; ?> <?php echo $waktu_acara["waktu"]; ?> <?php echo $waktu_acara["format_waktu"]; ?>'),
                                                                                    msgPattern: '<div class="countdown-intro">Waktu Menuju Acara<\/div><span class="count-container"><span class="count-box"><span class="count-num">{days}<\/span> <span class="count-label">Hari<\/span><\/span> <span class="count-box"><span class="count-num">{hours}<\/span> <span class="count-label">Jam<\/span><\/span> <span class="count-box"><span class="count-num">{minutes}<\/span> <span class="count-label">Menit<\/span><\/span><span class="count-box"> <span class="count-num">{seconds}<\/span> <span class="count-label">Detik<\/span><\/span><\/span>',
                                                                                    msgAfter: "",
                                                                                    leadingZeros: true,
                                                                                });
                                                                            </script>
                                                                        </div>
                                                                </div>

                                                            <?php
                                                                    }
                                                            ?>
                                                            <div class="elementor-element elementor-element-36bea5b elementor-widget elementor-widget-spacer" data-element_type="widget" data-id="36bea5b" data-widget_type="spacer.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-spacer">
                                                                        <div class="elementor-spacer-inner"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <?php
                                                            if ($wedding_online['status'] == 'aktif') {
                                                            ?>

                                                                <!-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-1bbf821 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="1bbf821">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3873b80" data-element_type="column" data-id="3873b80">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-8e6c1f5 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="8e6c1f5" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <h2 class="elementor-heading-title elementor-size-default">Wedding Online</h2>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-a0a0202 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="a0a0202" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <h2 class="elementor-heading-title elementor-size-default">Temui kami secara virtual untuk menyaksikan acara pernikahan kami yang akan disiarkan langsung, dengan menekan tombol di bawah ini:</h2>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-48948ac elementor-invisible elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="48948ac" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="image_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="300" src="<?php echo base_url(); ?>assets/front_end/uploads/Logo-Zoom-Meeting.png" width="400"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-56850b7 elementor-align-center elementor-mobile-align-center elementor-invisible elementor-widget elementor-widget-button_lp" data-element_type="widget" data-id="56850b7" data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="button_lp.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-button-wrapper">
                                                                                                    <a class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" href="<?php echo $wedding_online['zoom_url']; ?>" role="button"><span class="elementor-button-content-wrapper"><span class="elementor-button-text">Zoom Live</span></span></a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section> -->

                                                                <div class="elementor-element elementor-element-36bf857 elementor-widget elementor-widget-spacer" data-element_type="widget" data-id="36bf857" data-widget_type="spacer.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-spacer">
                                                                            <div class="elementor-spacer-inner"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            <?php } ?>

                                                            <?php if ($prokes['status'] == 'aktif') { ?>

                                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-c583cd1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="c583cd1">
                                                                    <div class="elementor-container elementor-column-gap-default">
                                                                        <div class="elementor-row">
                                                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9d6b93a" data-element_type="column" data-id="9d6b93a">
                                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                                    <div class="elementor-widget-wrap">
                                                                                        <div class="elementor-element elementor-element-7793345 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="7793345" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <h2 class="elementor-heading-title elementor-size-default">Protokol Kesehatan</h2>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-027fb5d elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="027fb5d" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <h2 class="elementor-heading-title elementor-size-default">Untuk mematuhi himbauan pemerintah dalam pencegahan penyebaran Covid-19, maka diharapkan Bapak/Ibu/Saudara/i tamu undangan untuk:</h2>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-4862b27 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-element_type="widget" data-id="4862b27" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="icon-box.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-icon-box-wrapper">
                                                                                                    <div class="elementor-icon-box-icon">
                                                                                                        <span class="elementor-icon elementor-animation-"><svg data-name="Layer 1" id="Layer_1" viewbox="0 0 482 482" xmlns="http://www.w3.org/2000/svg">
                                                                                                                <defs>
                                                                                                                    <style>
                                                                                                                        .cls-1 {
                                                                                                                            fill: #fff;
                                                                                                                        }
                                                                                                                    </style>
                                                                                                                </defs>
                                                                                                                <title>gunakanmasker</title>
                                                                                                                <circle cx="241" cy="241" r="241"></circle>
                                                                                                                <path class="cls-1" d="M204.61,144.31a800.71,800.71,0,0,1-92.43,40.38V302.29S157.12,380.2,256,380.2,399.82,279.07,399.82,279.07V184.69a800.71,800.71,0,0,1-92.43-40.38A111.86,111.86,0,0,0,204.61,144.31Z" transform="translate(-15 -15)"></path>
                                                                                                                <path class="cls-1" d="M151.75,310.82c-2.91-.13-71.5-3.65-100.66-38.33-10.31-12.27-14.47-26.92-12.35-43.54,8.2-53.37,89.1-44.52,92.54-44.06L130,195.67c-.73-.11-73.9-8.16-80.51,34.79-1.73,13.53,1.51,25,9.91,35,26.13,31.08,92.18,34.45,92.83,34.48Z" transform="translate(-15 -15)"></path>
                                                                                                                <path class="cls-1" d="M360.25,310.82c2.91-.13,71.5-3.65,100.66-38.33,10.31-12.27,14.47-26.92,12.35-43.54-8.2-53.37-89.1-44.52-92.54-44.06L382,195.67c.73-.11,73.9-8.16,80.51,34.79,1.73,13.53-1.51,25-9.91,35-26.13,31.08-92.18,34.45-92.83,34.48Z" transform="translate(-15 -15)"></path>
                                                                                                                <path d="M162.34,198c7.23,1.43,14.44,2.78,21.7,3.76s14.49,2.05,21.76,2.76c14.54,1.42,29.1,2.31,43.67,2.3a376.23,376.23,0,0,0,43.64-2c3.62-.39,7.27-.68,10.89-1.16l10.83-1.72c7.31-.81,14.36-2.81,21.69-3.9a218.41,218.41,0,0,1-42.79,11.38c-7.27,1.55-14.69,1.87-22.06,2.77-7.4.32-14.81.83-22.23.68a273.07,273.07,0,0,1-44.24-3.75C190.61,206.63,176.13,203.27,162.34,198Z" transform="translate(-15 -15)"></path>
                                                                                                                <path d="M162.34,296c7.23,1.43,14.44,2.78,21.7,3.76s14.49,2.05,21.76,2.76c14.54,1.42,29.1,2.31,43.67,2.3a376.23,376.23,0,0,0,43.64-2c3.62-.39,7.27-.68,10.89-1.16l10.83-1.72c7.31-.81,14.36-2.81,21.69-3.9a218.41,218.41,0,0,1-42.79,11.38c-7.27,1.55-14.69,1.87-22.06,2.77-7.4.32-14.81.83-22.23.68A273.07,273.07,0,0,1,205.19,307C190.61,304.59,176.13,301.24,162.34,296Z" transform="translate(-15 -15)"></path>
                                                                                                                <path d="M139.08,239.9c9.16,1.82,18.29,3.53,27.5,4.76q13.75,2.14,27.57,3.5c18.42,1.8,36.87,2.93,55.33,2.92a476.83,476.83,0,0,0,55.29-2.57c4.59-.5,9.21-.86,13.8-1.47l13.72-2.18c9.26-1,18.19-3.56,27.48-4.95-17.51,6.42-35.64,11.65-54.22,14.42-9.21,2-18.62,2.37-27.95,3.52-9.38.4-18.77,1.06-28.16.86a346,346,0,0,1-56.05-4.75C174.9,250.85,156.56,246.6,139.08,239.9Z" transform="translate(-15 -15)"></path>
                                                                                                            </svg></span>
                                                                                                    </div>
                                                                                                    <div class="elementor-icon-box-content">
                                                                                                        <h3 class="elementor-icon-box-title"><span></span></h3>
                                                                                                        <p class="elementor-icon-box-description">Selalu memakai masker selama acara berlangsung</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-c160b71 elementor-view-default elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-element_type="widget" data-id="c160b71" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="icon-box.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-icon-box-wrapper">
                                                                                                    <div class="elementor-icon-box-icon">
                                                                                                        <span class="elementor-icon elementor-animation-"><svg data-name="Layer 1" id="Layer_1" viewbox="0 0 484 484" xmlns="http://www.w3.org/2000/svg">
                                                                                                                <defs>
                                                                                                                    <style>
                                                                                                                        .cls-1 {
                                                                                                                            fill: #fff;
                                                                                                                        }

                                                                                                                        .cls-2 {
                                                                                                                            fill: #231f20;
                                                                                                                        }
                                                                                                                    </style>
                                                                                                                </defs>
                                                                                                                <title>mencucitangan</title>
                                                                                                                <circle cx="242" cy="242" r="242"></circle>
                                                                                                                <path class="cls-1" d="M314.67,351a2,2,0,0,1-.68-.12l-68.42-24.8c-2.26-.61-46.54-12.79-76.69-31.83L38,268.1a2,2,0,0,1-1.55-2.44L60.15,169.6a2,2,0,0,1,2.41-1.46c1,.25,102,24.7,107.13,25.91a2.81,2.81,0,0,0,.64.06c2.91,0,9.08-2.75,18.42-6.92,7.5-3.35,17.77-7.93,31-13.16,32.19-12.73,49.72-16.92,49.89-17a2,2,0,0,1,2.27,1.09c1.78,3.78,10.4,22.94,5.08,29.3-3.78,4.52-20.05,13.89-28.52,18.6,11.29,2.15,38.33,7.34,65.16,12.68,20.54,4.09,36.93,7.47,48.73,10.05,23.43,5.12,23.58,5.77,24,7.34.71,3-2.63,17.21-4.1,23.16a2,2,0,0,1-1.94,1.52l-.29,0-77.39-11.19c10,2.68,21.33,5.74,32.63,8.82,66.88,18.28,67.5,19.69,68.1,21.06,1.43,3.28-2.62,16.1-5.16,23.46a2,2,0,0,1-1.89,1.35,2.05,2.05,0,0,1-.41,0l-86.42-17.84,62.06,18.21a2,2,0,0,1,1.37,2.41l-6.09,23.86a2,2,0,0,1-1.94,1.5,2,2,0,0,1-.53-.07l-83.87-23.11,44.41,20.64a2,2,0,0,1,.92,2.76l-9.33,17.28A2,2,0,0,1,314.67,351Z" transform="translate(-14 -14)"></path>
                                                                                                                <path class="cls-2" d="M270.09,159s10.13,21.46,5.36,27.17S242.62,207,242.62,207s141.05,26.72,141.74,29.61-4.09,22.22-4.09,22.22l-111.37-16.1s131.26,34.53,132.58,37.58-5.21,22-5.21,22L262,274.59l108.91,32-6.09,23.86-107-29.48L324,331.7,314.67,349l-68.5-24.83S200.53,312,169.64,292.34L38.41,266.14l23.69-96.06s102,24.68,107.14,25.91a4.79,4.79,0,0,0,1.1.12c5.9,0,19.79-8.22,50.14-20.22C252.91,163.07,270.09,159,270.09,159m0-4a4,4,0,0,0-.92.11c-.71.17-17.84,4.26-50.17,17-13.25,5.24-23.55,9.83-31.07,13.19-8.77,3.92-15.11,6.75-17.6,6.75h-.19C165,190.89,64.06,166.44,63,166.19a4,4,0,0,0-4.82,2.93L34.52,265.18a4,4,0,0,0,3.1,4.88l130.5,26.06C198.51,315.21,241.44,327,245,328l68.34,24.77a4,4,0,0,0,4.88-1.86l9.33-17.28a4,4,0,0,0-1.83-5.53L303,317.55l60.73,16.73a4,4,0,0,0,4.94-2.87l6.09-23.86a4,4,0,0,0-2.75-4.83l-15.22-4.47,38.61,8a4,4,0,0,0,4.59-2.61c.07-.2,1.69-4.9,3.17-10.06,3.08-10.72,2.64-13.21,1.93-14.85-.84-1.93-2.47-2.69-8.48-4.69-3.57-1.19-8.73-2.77-15.33-4.71-11.08-3.25-26.41-7.55-45.59-12.79l-.64-.17,44.59,6.44a4,4,0,0,0,4.46-3c3.32-13.45,4.7-21.55,4.11-24.1-.68-2.88-3.34-3.56-9.18-5.06-3.76-1-9.24-2.24-16.29-3.78-11.81-2.58-28.21-6-48.76-10.06-23.22-4.62-46.6-9.13-59.79-11.66,9-5.12,20.95-12.37,24.31-16.38,3-3.58,2.95-9.78-.15-19.5a108.19,108.19,0,0,0-4.66-11.94A4,4,0,0,0,270.1,155Z" transform="translate(-14 -14)"></path>
                                                                                                                <path class="cls-1" d="M106.06,387.63a2,2,0,0,1-1.82-1.18l-44-97.4a2,2,0,0,1,1.57-2.81c6.26-.8,153.41-19.61,158.67-20.12,2.47-.24,7.78-5.18,15.82-12.65,6-5.6,14.25-13.26,25.06-22.47,26.35-22.46,41.57-32.09,41.72-32.19a2,2,0,0,1,2.5.3c2.91,3,17.27,18.34,14.29,26.08-2.12,5.5-14.48,19.63-21,26.83,24.76-3.52,122.56-17.28,136.8-17.28,1.23,0,2.62,0,3.35,1.15,1.66,2.64,3.08,17.13,3.61,23.24a2,2,0,0,1-1.62,2.14l-76.87,14.46c33.66-2.27,82.22-5.36,98.19-5.36,5.35,0,6.11.29,6.81,1,2.41,2.64,2.73,16.08,2.71,23.86a2,2,0,0,1-1.75,2l-87.55,11.08,64.71-2.84a2,2,0,0,1,2,1.84l2,24.55a2,2,0,0,1-1.87,2.16l-86.84,5.27,48.7,5.16a2,2,0,0,1,1.76,2.32l-3.24,19.37a2,2,0,0,1-2,1.67L335,366.5c-1,.06-9.53.6-21.54.6-16.69,0-40.81-1-61.28-5.9L106.42,387.6A2,2,0,0,1,106.06,387.63Z" transform="translate(-14 -14)"></path>
                                                                                                                <path class="cls-2" d="M304.18,200.5s16.53,17,13.86,24-24.34,30.31-24.34,30.31,126-18.05,142-18.05c1,0,1.56.07,1.65.22,1.58,2.52,3.31,22.35,3.31,22.35L330.12,280.1S437,272.37,462.4,272.37c3.18,0,5.08.12,5.33.39,2.24,2.46,2.18,22.51,2.18,22.51l-136,17.2,113.4-5,2,24.55-110.8,6.73,72.57,7.7-3.24,19.37L335,364.5s-8.72.6-21.49.6c-16.92,0-40.94-1.05-61.22-5.94l-146.2,26.47-44-97.4s153.32-19.6,158.61-20.11,15.45-13,42-35.6,41.49-32,41.49-32m0-4a4,4,0,0,0-2.13.61c-.62.39-15.5,9.81-42,32.36C249.25,238.72,241,246.4,235,252c-6.56,6.1-12.75,11.86-14.65,12.13-5.29.51-152.46,19.32-158.73,20.12a4,4,0,0,0-3.14,5.61l44,97.4a4,4,0,0,0,4.36,2.29l145.37-26.32c20.57,4.83,44.65,5.85,61.33,5.85,11.92,0,20.24-.51,21.58-.6l72.68,1.33h.07a4,4,0,0,0,3.94-3.34L415,347.12a4,4,0,0,0-3.52-4.64l-24.84-2.63L449.53,336a4,4,0,0,0,3.74-4.31l-2-24.55a4,4,0,0,0-4-3.68h-.18l-15.85.7,39.11-4.95a4,4,0,0,0,3.5-4c0-.21,0-5.18-.26-10.54-.56-11.14-1.78-13.36-3-14.67-1.36-1.49-3-1.7-8.28-1.7-11.35,0-38.43,1.5-65.19,3.18l44.23-8.32a4,4,0,0,0,3.25-4.28c-1.21-13.8-2.52-21.92-3.91-24.13s-3.65-2.09-5-2.09c-13.47,0-100.47,12.13-131.66,16.54,6.84-7.75,15.82-18.48,17.7-23.36,1.68-4.36-.37-10.21-6.45-18.41a108.2,108.2,0,0,0-8.27-9.79,4,4,0,0,0-2.87-1.21Z" transform="translate(-14 -14)"></path>
                                                                                                                <circle class="cls-1" cx="354.67" cy="186.5" r="17.61"></circle>
                                                                                                                <circle class="cls-1" cx="403.34" cy="182.95" r="8.58"></circle>
                                                                                                                <circle class="cls-1" cx="382.61" cy="128.69" r="16.33"></circle>
                                                                                                                <circle class="cls-1" cx="446.32" cy="216.93" r="13.27"></circle>
                                                                                                                <circle class="cls-1" cx="433.06" cy="161.53" r="12.84"></circle>
                                                                                                            </svg></span>
                                                                                                    </div>
                                                                                                    <div class="elementor-icon-box-content">
                                                                                                        <h3 class="elementor-icon-box-title"><span></span></h3>
                                                                                                        <p class="elementor-icon-box-description">Mencuci tangan sebelum dan sesudah memasuki lokasi acara.</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-d4fe7cb elementor-view-default elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-element_type="widget" data-id="d4fe7cb" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="icon-box.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-icon-box-wrapper">
                                                                                                    <div class="elementor-icon-box-icon">
                                                                                                        <span class="elementor-icon elementor-animation-"><svg data-name="Layer 1" id="Layer_1" viewbox="0 0 488 488" xmlns="http://www.w3.org/2000/svg">
                                                                                                                <defs>
                                                                                                                    <style>
                                                                                                                        .cls-1,
                                                                                                                        .cls-3 {
                                                                                                                            fill: #fff;
                                                                                                                        }

                                                                                                                        .cls-2 {
                                                                                                                            fill: none;
                                                                                                                            stroke: #fff;
                                                                                                                            stroke-linecap: round;
                                                                                                                            stroke-linejoin: round;
                                                                                                                            stroke-width: 8px;
                                                                                                                        }

                                                                                                                        .cls-3 {
                                                                                                                            font-size: 40.61px;
                                                                                                                            font-family: MyriadPro-Regular, Myriad Pro;
                                                                                                                        }
                                                                                                                    </style>
                                                                                                                </defs>
                                                                                                                <title>jagajarak</title>
                                                                                                                <circle cx="244" cy="244" r="244"></circle>
                                                                                                                <circle class="cls-1" cx="99.16" cy="135.09" r="46.05"></circle>
                                                                                                                <path class="cls-1" d="M88.69,184.49h20.95a49,49,0,0,1,49,49v78.48a2.23,2.23,0,0,1-2.23,2.23H42a2.23,2.23,0,0,1-2.23-2.23V233.46a49,49,0,0,1,49-49Z"></path>
                                                                                                                <circle class="cls-1" cx="388.84" cy="135.09" r="46.05"></circle>
                                                                                                                <path class="cls-1" d="M378.36,184.49h20.95a49,49,0,0,1,49,49v78.48a2.23,2.23,0,0,1-2.23,2.23H331.63a2.23,2.23,0,0,1-2.23-2.23V233.46a49,49,0,0,1,49-49Z"></path>
                                                                                                                <line class="cls-2" x1="99.16" x2="388.84" y1="341.97" y2="341.97"></line>
                                                                                                                <line class="cls-2" x1="99.16" x2="99.16" y1="323.58" y2="363.43"></line>
                                                                                                                <line class="cls-2" x1="388.84" x2="388.84" y1="322.05" y2="361.89"></line>
                                                                                                                <text class="cls-3" transform="translate(217.26 388.81)">
                                                                                                                    2M
                                                                                                                </text>
                                                                                                            </svg></span>
                                                                                                    </div>
                                                                                                    <div class="elementor-icon-box-content">
                                                                                                        <h3 class="elementor-icon-box-title"><span></span></h3>
                                                                                                        <p class="elementor-icon-box-description">Tidak berkerumun, dengan menjaga jarak satu sama lain.</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-fd8033d elementor-view-default elementor-position-top elementor-vertical-align-top elementor-invisible elementor-widget elementor-widget-icon-box" data-element_type="widget" data-id="fd8033d" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="icon-box.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <div class="elementor-icon-box-wrapper">
                                                                                                    <div class="elementor-icon-box-icon">
                                                                                                        <span class="elementor-icon elementor-animation-"><svg data-name="Layer 1" id="Layer_1" viewbox="0 0 474.31 474" xmlns="http://www.w3.org/2000/svg">
                                                                                                                <defs>
                                                                                                                    <style>
                                                                                                                        .cls-1 {
                                                                                                                            fill: #fff;
                                                                                                                        }
                                                                                                                    </style>
                                                                                                                </defs>
                                                                                                                <title>salaman</title>
                                                                                                                <circle cx="237" cy="237" r="237"></circle>
                                                                                                                <path class="cls-1" d="M484.12,190.27c-5.52.38-11,.71-16.49.93-34,1.35-68.16.88-102,3.65a32.89,32.89,0,0,0,.46,3.81c.12.5.23,1,.34,1.49-9.59-.68-18.46-2.36-26.65-6.51-4.78-2.43-8.7-6.13-12.76-10.11l89.66-89.65a6.37,6.37,0,1,0-9-9l-90.06,90a45.13,45.13,0,0,0-6.28-4.19A49,49,0,0,0,274,166.79c-10.89-4.85-26.72-1.69-39.59.89-3.25.65-6.33,1.27-8.92,1.66-6.36,1-10.71,2.36-14.16,4.56a9.11,9.11,0,0,0-5.59,2.84c-19.37,20.19-34.85,31.51-61.15,33.46l-.93.07c.84-3.88,1.7-7.75,2.61-11.61a32.9,32.9,0,0,0,.46-3.81c-33.88-2.78-68.07-2.31-102-3.65-5.47-.22-11-.55-16.49-.93A238.4,238.4,0,0,0,31.3,331.42c30.25,1.17,60.82-.88,88.58-3.83,1.55-.16,3.3-1,3.61-2.75q.78-4.34,1.54-8.7l1.76-.12c3.67-.25,6.85-.47,9.41-.58l-.36-9c-2.58.1-5.69.32-9.25.56,4.91-29.18,9.23-58.58,15.13-87.56l3.53-.26c29.05-2.16,46.56-14.91,67-36.21l.12-.12L214,183l1.39-1c2.4-1.77,5.81-2.89,11.41-3.75,2.8-.43,6-1.06,9.33-1.74,7.39-1.48,16.52-3.3,24.22-3.23-4.23,2.68-8.14,5.68-11.78,8.49-10.51,8.1-22.34,12.84-34.86,17.86-2.87,1.15-5.76,2.31-8.64,3.51l-.37.16c-7.84,3.27-22.44,9.37-21,22a17.35,17.35,0,0,0,3.58,8.29c4.72,6.32,13.06,10.2,22.32,10.37,7.43.15,14-2.79,20.34-5.63,2.15-1,4.17-1.87,6.19-2.63A62.71,62.71,0,0,1,257.77,232c.88,0,1.77,0,2.66,0L188,304.43a15.13,15.13,0,0,0-6.14.88,1.62,1.62,0,0,1-1.36-.1,1.21,1.21,0,0,1-.61-.88l0-.11c-1.27-7.6-6.57-9.59-11.05-10.47-2-.4-8.13-1.6-12.88,2.7a10.65,10.65,0,0,0-8.87-2A14.09,14.09,0,0,0,137,304.2a31.26,31.26,0,0,0-.84,9.56l0,1.54c0,3.2.08,7.18,2.28,10.78a11.7,11.7,0,0,0,7.74,5.51,12.19,12.19,0,0,0,4.47,0c.15.39.3.77.47,1.13a28.7,28.7,0,0,0,3.11,5.42L85.14,407.32a6.37,6.37,0,0,0,9,9l72.27-72.25a12.46,12.46,0,0,0,1.83-.35,25.32,25.32,0,0,0,6.22,10.1,17.12,17.12,0,0,0,18.71,3.5,29.78,29.78,0,0,0,4.27,7.53,16.32,16.32,0,0,0,13.11,6l1.08,0a21,21,0,0,0,15.08-7.59,78.27,78.27,0,0,0,8.43.43c11.65,0,24.94-2.11,36.4-4.92a39.63,39.63,0,0,0,4.22,1.8c10.46,3.71,27.5,2.8,34.93-6.16,13.32,2.74,29.76-1.13,37.14-11.86,10.07-.75,18.57-14,22.19-20.56a65.75,65.75,0,0,0,18.71,2.52l.06.36c.31,1.73,2.06,2.58,3.61,2.75,27.77,2.95,58.33,5,88.58,3.83a238.4,238.4,0,0,0,3.11-141.15ZM257.64,223A71.49,71.49,0,0,0,233,227.27c-2.26.86-4.5,1.86-6.67,2.83-5.69,2.54-11.08,4.94-16.5,4.85-5-.09-11.66-1.92-15.27-6.75a8.65,8.65,0,0,1-1.85-3.95c-.69-5.89,9.84-10.28,15.49-12.64l.38-.16c2.85-1.19,5.69-2.33,8.52-3.47,12.54-5,25.5-10.23,37-19.08,6.56-5,13.33-10.27,21-13A39.63,39.63,0,0,1,307,178.63a34.88,34.88,0,0,1,4.17,2.71l-42.34,42.33-.85-.08A94.56,94.56,0,0,0,257.64,223ZM160.76,331.71a23.18,23.18,0,0,1-1.37-2.62,19.29,19.29,0,0,1-1.25-4.33l-1.3-7-5.78,4.21a4,4,0,0,1-3.07.82,2.7,2.7,0,0,1-1.81-1.37c-.91-1.49-.93-3.77-1-6.2l0-1.61a23.78,23.78,0,0,1,.48-6.86,5.07,5.07,0,0,1,3.33-3.5c.54-.12,1.21-.1,2.09.94a6.48,6.48,0,0,0,10.32-.36,4.47,4.47,0,0,1,.55-.63c.73-.69,1.86-1.24,5.16-.59s3.61,1.31,3.9,3.1l0,.11A10.25,10.25,0,0,0,176,313a10.47,10.47,0,0,0,2.48,1Zm50.41,30.11a7.68,7.68,0,0,1-6.63-2.52,22.12,22.12,0,0,1-4.23-9.82l-1.42-8.42L192.74,347c-3.07,3-8.19,4-12,.35-3.24-3.12-4.54-7.76-5.06-11.09l-.19-1.22,17.43-17.43a21.94,21.94,0,0,1,.92,7.45,9.28,9.28,0,0,0,4,7.66,8.93,8.93,0,0,0,8.26,1,4.79,4.79,0,0,1,5.07.89c4.23,3.41,3.25,9.38,1.4,17.44-.14.62-.28,1.23-.41,1.82l0,.13,0,.14-2.35,4,4.72,2,.62.26.62.26A12.24,12.24,0,0,1,211.17,361.82Zm135.42-28.31-3.71-.72-1.52,3.06c-4.61,9.24-20.34,12.41-31.34,9.07l-3.7-1.12-1.67,3.48c-3.26,6.8-17.93,7.58-25.85,4.77a35.28,35.28,0,0,1-4.6-2.07l-1.53-.8-1.67.43c-20.06,5.11-39.09,6.41-49.43,3.56,1.74-7.65,3.88-18.65-4.73-25.59a13.83,13.83,0,0,0-13.89-2.31.28.28,0,0,1-.12-.22c0-3.4,0-9.34-3.28-14.1l77.81-77.8c1.14,0,2.3-.07,3.45-.18s1.92-.25,2.71-.39c2.08-.37,2.08-.36,2.79.36s1.34,1.5,2,2.34c.86,1,1.75,2.12,2.8,3.16,6.73,6.69,11.71,14.66,17,23.09,2.86,4.57,5.81,9.3,9.06,13.79a206.36,206.36,0,0,0,34.22,36.39,53.75,53.75,0,0,0,10.26,6.85C356.81,327.16,350.12,334,346.59,333.51Zm10.62-28.68a197.38,197.38,0,0,1-32.73-34.78c-3.07-4.24-5.94-8.84-8.72-13.28-5.31-8.5-10.8-17.28-18.26-24.7-.74-.73-1.45-1.6-2.21-2.51s-1.59-1.93-2.53-2.89a10.24,10.24,0,0,0-5.73-3.18l33.6-33.59c4.42,4.33,9,8.73,15.05,11.77,10.32,5.24,21.15,7,32.78,7.64,7.64,35,12.58,70.82,18.71,106.17C376.36,315.22,366.66,312.81,357.21,304.83Z" transform="translate(-19 -19)"></path>
                                                                                                            </svg></span>
                                                                                                    </div>
                                                                                                    <div class="elementor-icon-box-content">
                                                                                                        <h3 class="elementor-icon-box-title"><span></span></h3>
                                                                                                        <p class="elementor-icon-box-description">Tidak bersalaman, dapat menggantinya dengan salaman jarak jauh</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-60b6689 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="60b6689" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <h2 class="elementor-heading-title elementor-size-default">--</h2>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-element elementor-element-1aa9a90 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="1aa9a90" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                            <div class="elementor-widget-container">
                                                                                                <h2 class="elementor-heading-title elementor-size-default">Terima kasih atas pengertian Bapak/Ibu/Saudara/i, semoga dengan melakukan protokol kesehatan di atas, kita semua dapat terjaga dari Covid-19.</h2>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>

                                                            <?php } ?>


                                                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-ba5dcdb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="ba5dcdb">
                                                                <div class="elementor-container elementor-column-gap-default">
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6b9478e" data-element_type="column" data-id="6b9478e">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-223927e elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="223927e" data-widget_type="image_lp.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04framebawahkiri.png" width="300"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-baead5e" data-element_type="column" data-id="baead5e">
                                                                            <div class="elementor-column-wrap">
                                                                                <div class="elementor-widget-wrap"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1f3d610" data-element_type="column" data-id="1f3d610">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-a06e7a0 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="a06e7a0" data-widget_type="image_lp.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04framebawahkanan.png" width="300"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-491937b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="491937b" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-23fed90" data-element_type="column" data-id="23fed90">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-fd04272 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="fd04272" data-widget_type="image_lp.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="90" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04mahkotabawah.png" width="300"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>


                                        <?php if ($gallery_status['status'] == 'aktif') { ?>
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-92fe5b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="92fe5b3" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" id="gallery">
                                                <div class="elementor-background-overlay"></div>
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-01810bb" data-element_type="column" data-id="01810bb">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-8a3c603 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="8a3c603" data-widget_type="image_lp.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"><img alt="" class="attachment-large size-large" height="90" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04mahkotaatas.png" width="300"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-723e316 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="723e316" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-background-overlay"></div>
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d1f9f3" data-element_type="column" data-id="8d1f9f3" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-background-overlay"></div>
                                                                <div class="elementor-widget-wrap">
                                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-1ea0343 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="1ea0343">
                                                                        <div class="elementor-container elementor-column-gap-default">
                                                                            <div class="elementor-row">
                                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-23a210a" data-element_type="column" data-id="23a210a">
                                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                                        <div class="elementor-widget-wrap">
                                                                                            <div class="elementor-element elementor-element-69a766a elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="69a766a" data-widget_type="image_lp.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04frameataskiri.png" width="300"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-36f99ef" data-element_type="column" data-id="36f99ef">
                                                                                    <div class="elementor-column-wrap">
                                                                                        <div class="elementor-widget-wrap"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a850c9e" data-element_type="column" data-id="a850c9e">
                                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                                        <div class="elementor-widget-wrap">
                                                                                            <div class="elementor-element elementor-element-e0a8c8f elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="e0a8c8f" data-widget_type="image_lp.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04frameataskanan.png" width="300"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                    <div class="elementor-element elementor-element-483d3e6 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="483d3e6" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                        <div class="elementor-widget-container">
                                                                            <h2 class="elementor-heading-title elementor-size-default">Wedding Gift</h2>
                                                                        </div>
                                                                    </div>
                                                                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-c5382fe elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-element_type="section" data-id="c5382fe" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
                                                                        <div class="elementor-container elementor-column-gap-default">
                                                                            <div class="elementor-row">
                                                                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8834a09" data-element_type="column" data-id="8834a09">
                                                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                                                        <div class="elementor-widget-wrap">
                                                                                            <!--<div class="elementor-element elementor-element-f8be7f6 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="f8be7f6" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">-->
                                                                                            <!--    <div class="elementor-widget-container">-->
                                                                                            <!--        <h2 class="elementor-heading-title elementor-size-default">Love Gift</h2>-->
                                                                                            <!--    </div>-->
                                                                                            <!--</div>-->
                                                                                            <div class="elementor-element elementor-element-f285510 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="f285510" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <h2 class="elementor-heading-title elementor-size-default">Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk kami, dapat melalui:</h2>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-6dac32c elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="6dac32c" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <h2 class="elementor-heading-title elementor-size-default"><?php echo "<img src='assets/front_image/bni.png' width='150px' height='100px' align='center'" ?><br><br><br> No. Rekening <?php echo $love_gift['no_rekening']; ?><br> a.n <b><?php echo $love_gift['nama_rekening']; ?></b></h2>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-8b50d42 elementor-align-justify elementor-mobile-align-justify elementor-invisible elementor-widget elementor-widget-CopyButton" data-element_type="widget" data-id="8b50d42" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="CopyButton.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-button-wrapper">
                                                                                                        <div class="copy-content" style="display:none"><?php echo $love_gift['no_rekening']; ?></div><a class="elementor-button elementor-size-sm" data-message="Berhasil disalin ke clipboard" onclick="copyToClipboard(this)" role="button" style="cursor:pointer;"><span class="elementor-button-content-wrapper"><span class="elementor-button-icon elementor-align-icon-right"><i aria-hidden="true" class="fas fa-copy"></i></span> <span class="elementor-button-text">Copy Nomor Rekening</span></span></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-e718800 elementor-widget elementor-widget-spacer" data-element_type="widget" data-id="e718800" data-widget_type="spacer.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-6dac32c elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="6dac32c" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <h2 class="elementor-heading-title elementor-size-default"><?php echo "<img src='assets/front_image/Mandiri2.png' width='150px' height='100px'" ?><br><br><br> No. Rekening <?php echo $love_gift['no_rekening2']; ?><br> a.n <b><?php echo $love_gift['nama_rekening2']; ?></b></h2>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-8b50d42 elementor-align-justify elementor-mobile-align-justify elementor-invisible elementor-widget elementor-widget-CopyButton" data-element_type="widget" data-id="8b50d42" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="CopyButton.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-button-wrapper">
                                                                                                        <div class="copy-content" style="display:none"><?php echo $love_gift['no_rekening']; ?></div><a class="elementor-button elementor-size-sm" data-message="Berhasil disalin ke clipboard" onclick="copyToClipboard(this)" role="button" style="cursor:pointer;"><span class="elementor-button-content-wrapper"><span class="elementor-button-icon elementor-align-icon-right"><i aria-hidden="true" class="fas fa-copy"></i></span> <span class="elementor-button-text">Copy Nomor Rekening</span></span></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-e718800 elementor-widget elementor-widget-spacer" data-element_type="widget" data-id="e718800" data-widget_type="spacer.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <div class="elementor-spacer">
                                                                                                        <div class="elementor-spacer-inner"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="elementor-element elementor-element-44d4d25 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="44d4d25" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                <div class="elementor-widget-container">
                                                                                                    <h2 class="elementor-heading-title elementor-size-default">Terima Kasih</h2>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                    <div class="elementor-row">
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e113b03" data-element_type="column" data-id="e113b03">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-1c435df elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="1c435df" data-widget_type="image_lp.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="http://localhost/undangan2/assets/front_end/uploads/2020/03/demo04framebawahkiri.png" width="300"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c3d0a87" data-element_type="column" data-id="c3d0a87">
                                                                            <div class="elementor-column-wrap">
                                                                                <div class="elementor-widget-wrap"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d3101e1" data-element_type="column" data-id="d3101e1">
                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                <div class="elementor-widget-wrap">
                                                                                    <div class="elementor-element elementor-element-44c40ea elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="44c40ea" data-widget_type="image_lp.default">
                                                                                        <div class="elementor-widget-container">
                                                                                            <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="http://localhost/undangan2/assets/front_end/uploads/2020/03/demo04framebawahkanan.png" width="300"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-ac66be0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="ac66be0" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-background-overlay"></div>
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2a00e3a" data-element_type="column" data-id="2a00e3a">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-060acb0 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="060acb0" data-widget_type="image_lp.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image"><img alt="" class="attachment-large size-large" height="90" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04mahkotabawah.png" width="300"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        <?php } ?>


                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-51b91dc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="51b91dc" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" id="ucapan">
                                            <div class="elementor-background-overlay"></div>
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6837540" data-element_type="column" data-id="6837540">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-25bf203 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="25bf203" data-widget_type="image_lp.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="90" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04mahkotaatas.png" width="300"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <center>
                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-fbc28e2 sticky elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="fbc28e2" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-container elementor-column-gap-default">
                                                    <div class="elementor-row">
                                                        <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-464fe09" data-element_type="column" data-id="464fe09">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-5860476 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="5860476" data-widget_type="image_lp.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <figure class="wp-caption">
                                                                                    <a class="elementor-image-link" data-elementor-open-lightbox="" href="#home"><img alt="" class="attachment-large size-large" height="512" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/loving-home-putih.png" width="512"></a>
                                                                                    <figcaption class="widget-image-caption wp-caption-text">
                                                                                        Home
                                                                                    </figcaption>
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-0e6eab6" data-element_type="column" data-id="0e6eab6">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-788b766 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="788b766" data-widget_type="image_lp.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <figure class="wp-caption">
                                                                                    <a class="elementor-image-link" data-elementor-open-lightbox="" href="#couple"><img alt="" class="attachment-large size-large" height="512" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/wedding-rings-putih.png" width="512"></a>
                                                                                    <figcaption class="widget-image-caption wp-caption-text">
                                                                                        Couple
                                                                                    </figcaption>
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-bec701e" data-element_type="column" data-id="bec701e">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-20dfac0 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="20dfac0" data-widget_type="image_lp.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <figure class="wp-caption">
                                                                                    <a class="elementor-image-link" data-elementor-open-lightbox="" href="#event"><img alt="" class="attachment-large size-large" height="512" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/wedding-day-putih.png" width="512"></a>
                                                                                    <figcaption class="widget-image-caption wp-caption-text">
                                                                                        Event
                                                                                    </figcaption>
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-7e055b9" data-element_type="column" data-id="7e055b9">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-d267b68 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="d267b68" data-widget_type="image_lp.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <figure class="wp-caption">
                                                                                    <a class="elementor-image-link" data-elementor-open-lightbox="" href="#gallery"><img alt="" class="attachment-large size-large" height="512" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/wedding-video-putih.png" width="512"></a>
                                                                                    <figcaption class="widget-image-caption wp-caption-text">
                                                                                        Gift
                                                                                    </figcaption>
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-0a3c159" data-element_type="column" data-id="0a3c159">
                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                <div class="elementor-widget-wrap">
                                                                    <div class="elementor-element elementor-element-3da33aa elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="3da33aa" data-widget_type="image_lp.default">
                                                                        <div class="elementor-widget-container">
                                                                            <div class="elementor-image">
                                                                                <figure class="wp-caption">
                                                                                    <a class="elementor-image-link" data-elementor-open-lightbox="" href="#ucapan"><img alt="" class="attachment-large size-large" height="512" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/conversation-putih.png" width="512"></a>
                                                                                    <figcaption class="widget-image-caption wp-caption-text">
                                                                                        Wishes
                                                                                    </figcaption>
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <center>
                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-ff4d8c8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="ff4d8c8" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a8b61d" data-element_type="column" data-id="6a8b61d" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-background-overlay"></div>
                                                                    <div class="elementor-widget-wrap">
                                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-16c9e83 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="16c9e83">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-904c02d" data-element_type="column" data-id="904c02d">
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-1a44b93 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="1a44b93" data-widget_type="image_lp.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04frameataskiri.png" width="300"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-99af322" data-element_type="column" data-id="99af322">
                                                                                        <div class="elementor-column-wrap">
                                                                                            <div class="elementor-widget-wrap"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-54c783a" data-element_type="column" data-id="54c783a">
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-bf54e8e elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="bf54e8e" data-widget_type="image_lp.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04frameataskanan.png" width="300"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>





                                                                        <?php if ($story_status['status'] == 'aktif') { ?>

                                                                            <div class="elementor-element elementor-element-561c90a elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="561c90a" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">Wishes</h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-8cbdecc elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="8cbdecc" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">“Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tentram kepadanya, dan dijadikan-Nya di antaramu
                                                                                        rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berpikir.”<br>
                                                                                        <br> - QS. Ar-Rum : 21 -
                                                                                    </h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-ad19315 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="ad19315" data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">--</h2>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-6481842 elementor-widget elementor-widget-image" data-element_type="widget" data-id="6481842" data-widget_type="image.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-image"><img alt="" class="attachment-full size-full" height="854" src="<?php echo base_url(); ?>assets/front_image/<?php echo $story_status['photo']; ?>" width="1280"></div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="elementor-element elementor-element-055f391 elementor-widget elementor-widget-heading" data-element_type="widget" data-id="055f391" data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">--</h2>
                                                                                </div>
                                                                            </div>


                                                                        <?php } ?>



                                                                        <?php if ($love_gift['status'] == 'aktif') { ?>


                                                                            <div class="elementor-element elementor-element-14fc48a elementor-widget elementor-widget-spacer" data-element_type="widget" data-id="14fc48a" data-widget_type="spacer.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div class="elementor-spacer">
                                                                                        <div class="elementor-spacer-inner"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        <?php
                                                                        }
                                                                        ?>




                                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-4191d94 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="4191d94">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-69d5c04" data-element_type="column" data-id="69d5c04">
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">

                                                                                                <?php if ($rsvp['status'] == 'aktif') { ?>

                                                                                                    <div class="elementor-element elementor-element-2b4844c elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="2b4844c" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h2 class="elementor-heading-title elementor-size-default">RSVP & Ucapan Selamat Untuk</h2>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-f0fd31c elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="f0fd31c" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h2 class="elementor-heading-title elementor-size-default"><?php echo $biodata['nama_panggilan_wanita']; ?> & <?php echo $biodata['nama_panggilan_pria']; ?></h2>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-1d0791b elementor-align-justify elementor-mobile-align-justify elementor-invisible elementor-widget elementor-widget-lp_whatsapp_popup" data-element_type="widget" data-id="1d0791b" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="lp_whatsapp_popup.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-button-wrapper">
                                                                                                                <a class="elementor-popup-with-form elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" href="#elementor-popup-form-1d0791b" role="button"><span class="elementor-button-content-wrapper elementor-button-content-wrapper"><span class="elementor-button-text">Konfirmasi Kehadiran ke Mempelai Pria</span></span></a>
                                                                                                            </div>
                                                                                                            <div class="mfp-hide elementor-popup-block-white" id="elementor-popup-form-1d0791b">
                                                                                                                <div class="elementor-lp-form-wrapper elementor-lp-form-display-default elementor-lp-form-button-align-left">
                                                                                                                    <form class="lp-form lp-whatsapp-form" data-waurl="https://api.whatsapp.com/send?phone=<?php echo $rsvp['wa_pria']; ?>&amp;text=Halo%2C%20Rosyid%20%2C%20saya%20ingin%20menginformasikan%20kehadiran%20di%20acara%20resepsi%20pernikahan%20Aura%20%26%20Rosyid%20pada%20Hari%20Minggu%2C%2021%20Mei%202022%3A%0A%0ANama%3A%20%25name%25%0AInformasi%20Kehadiran%3A%20%25product%25%0AJumlah%20Tamu%3A%20%25extra%25%20Orang%20%0A%0APesan%3A%0A%0A%25address%25" id="lp-whatsapp-form-1d0791b" method="get" name="lp-whatsapp-form-1d0791b">
                                                                                                                        <div class="lp-form-fields-wrapper">
                                                                                                                            <div class="lp-form-field-product">
                                                                                                                                <label class="" for="lp-form-product-1d0791b">Informasi Kehadiran</label> <select class="lp-form-product" id="lp-form-product-1d0791b" name="lp-form-product">
                                                                                                                                    <option selected="selected" value="Akan Hadir">
                                                                                                                                        Akan Hadir
                                                                                                                                    </option>
                                                                                                                                    <option value="Mohon Maaf Belum Bisa Hadir">
                                                                                                                                        Mohon Maaf Belum Bisa Hadir
                                                                                                                                    </option>
                                                                                                                                </select>
                                                                                                                            </div>
                                                                                                                            <div class="lp-form-field-name">
                                                                                                                                <label class="" for="lp-form-name-1d0791b">Nama:</label> <input class="lp-form-name" id="lp-form-name-1d0791b" name="lp-form-name" placeholder="Nama..." required="1" type="text" value="">
                                                                                                                            </div>
                                                                                                                            <div class="lp-form-field-address">
                                                                                                                                <label class="" for="lp-form-address-1d0791b">Ucapan:</label>
                                                                                                                                <textarea class="lp-form-address" id="lp-form-address-1d0791b" name="lp-form-address" placeholder="Ucapan Selamat &amp; Doa..." required="1" rows="4"></textarea>
                                                                                                                            </div>
                                                                                                                            <div class="lp-form-field-extra">
                                                                                                                                <label class="" for="lp-form-extra-1d0791b">Jumlah Tamu:</label> <input class="lp-form-extra" id="lp-form-extra-1d0791b" name="lp-form-extra" placeholder="Jumlah Tamu Yang Hadir..." required="1" type="text" value="">
                                                                                                                            </div>
                                                                                                                            <div class="lp-form-field-submit">
                                                                                                                                <button class="lp-form-button" type="submit">Kirim Konfirmasi Kehadiran</button>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <script>
                                                                                                                (function() {
                                                                                                                    'use strict';
                                                                                                                    window.addEventListener('load', function() {
                                                                                                                        var wa_form = document.getElementById('lp-whatsapp-form-1d0791b');
                                                                                                                        wa_form.addEventListener('submit', function(event) {
                                                                                                                            event.preventDefault();
                                                                                                                            event.stopPropagation();
                                                                                                                        }, false);
                                                                                                                    }, false);
                                                                                                                })();
                                                                                                            </script>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-b845a96 elementor-align-justify elementor-mobile-align-justify elementor-invisible elementor-widget elementor-widget-lp_whatsapp_popup" data-element_type="widget" data-id="b845a96" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_mobile&quot;:&quot;none&quot;}" data-widget_type="lp_whatsapp_popup.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-button-wrapper">
                                                                                                                <a class="elementor-popup-with-form elementor-button-link elementor-button elementor-size-sm elementor-animation-grow" href="#elementor-popup-form-b845a96" role="button"><span class="elementor-button-content-wrapper elementor-button-content-wrapper"><span class="elementor-button-text">Konfirmasi Kehadiran ke Mempelai Wanita</span></span></a>
                                                                                                            </div>
                                                                                                            <div class="mfp-hide elementor-popup-block-white" id="elementor-popup-form-b845a96">
                                                                                                                <div class="elementor-lp-form-wrapper elementor-lp-form-display-default elementor-lp-form-button-align-left">
                                                                                                                    <form class="lp-form lp-whatsapp-form" data-waurl="https://api.whatsapp.com/send?phone=<?php echo $rsvp['wa_wanita']; ?>&amp;text=Halo%2C%20Aura%20%26%20%2C%20saya%20ingin%20menginformasikan%20kehadiran%20di%20acara%20resepsi%20pernikahan%20Aura%20%26%20Rosyid%20pada%20Hari%20Minggu%2C%2021%20Mei%202022%3A%0A%0ANama%3A%20%25name%25%0AInformasi%20Kehadiran%3A%20%25product%25%0AJumlah%20Tamu%3A%20%25extra%25%20Orang%20%0A%0APesan%3A%0A%0A%25address%25" id="lp-whatsapp-form-b845a96" method="get" name="lp-whatsapp-form-b845a96">
                                                                                                                        <div class="lp-form-fields-wrapper">
                                                                                                                            <div class="lp-form-field-product">
                                                                                                                                <label class="" for="lp-form-product-b845a96">Informasi Kehadiran</label> <select class="lp-form-product" id="lp-form-product-b845a96" name="lp-form-product">
                                                                                                                                    <option selected="selected" value="Akan Hadir">
                                                                                                                                        Akan Hadir
                                                                                                                                    </option>
                                                                                                                                    <option value="Mohon Maaf Belum Bisa Hadir">
                                                                                                                                        Mohon Maaf Belum Bisa Hadir
                                                                                                                                    </option>
                                                                                                                                </select>
                                                                                                                            </div>
                                                                                                                            <div class="lp-form-field-name">
                                                                                                                                <label class="" for="lp-form-name-b845a96">Nama:</label> <input class="lp-form-name" id="lp-form-name-b845a96" name="lp-form-name" placeholder="Nama..." required="1" type="text" value="">
                                                                                                                            </div>
                                                                                                                            <div class="lp-form-field-address">
                                                                                                                                <label class="" for="lp-form-address-b845a96">Ucapan:</label>
                                                                                                                                <textarea class="lp-form-address" id="lp-form-address-b845a96" name="lp-form-address" placeholder="Ucapan Selamat &amp; Doa..." required="1" rows="4"></textarea>
                                                                                                                            </div>
                                                                                                                            <div class="lp-form-field-extra">
                                                                                                                                <label class="" for="lp-form-extra-b845a96">Jumlah Tamu:</label> <input class="lp-form-extra" id="lp-form-extra-b845a96" name="lp-form-extra" placeholder="Jumlah Tamu Yang Hadir..." required="1" type="text" value="">
                                                                                                                            </div>
                                                                                                                            <div class="lp-form-field-submit">
                                                                                                                                <button class="lp-form-button" type="submit">Kirim Konfirmasi Kehadiran</button>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <script>
                                                                                                                (function() {
                                                                                                                    'use strict';
                                                                                                                    window.addEventListener('load', function() {
                                                                                                                        var wa_form = document.getElementById('lp-whatsapp-form-b845a96');
                                                                                                                        wa_form.addEventListener('submit', function(event) {
                                                                                                                            event.preventDefault();
                                                                                                                            event.stopPropagation();
                                                                                                                        }, false);
                                                                                                                    }, false);
                                                                                                                })();
                                                                                                            </script>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-dbcff4a elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="dbcff4a" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h2 class="elementor-heading-title elementor-size-default">--</h2>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="elementor-element elementor-element-6ccd7fb elementor-widget elementor-widget-spacer" data-element_type="widget" data-id="6ccd7fb" data-widget_type="spacer.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <div class="elementor-spacer">
                                                                                                                <div class="elementor-spacer-inner"></div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                <?php } ?>

                                                                                                <div class="elementor-element elementor-element-e51cd8e elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="e51cd8e" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <h2 class="elementor-heading-title elementor-size-default">Kami Yang Berbahagia,</h2>
                                                                                                    </div>
                                                                            
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-f0fd31c elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="f0fd31c" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                        <div class="elementor-widget-container">
                                                                                                            <h2 class="elementor-heading-title elementor-size-default"><?php echo $biodata['nama_panggilan_wanita']; ?> & <?php echo $biodata['nama_panggilan_pria']; ?></h2>
                                                                                                            <br>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    
                                                                                                <div class="elementor-element elementor-element-1bb35fd elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="1bb35fd" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <p class="elementor-heading-title elementor-size-default">Keluarga <?php echo str_replace("Putri dari", "", $biodata['nama_orangtua_mempelai_wanita']); ?></p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-5f959c1 elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="5f959c1" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <p class="elementor-heading-title elementor-size-default">- &amp; -</p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-5c7737c elementor-invisible elementor-widget elementor-widget-heading" data-element_type="widget" data-id="5c7737c" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <p class="elementor-heading-title elementor-size-default">Keluarga <?php echo str_replace("Putra dari", "", $biodata['nama_orangtua_mempelai_pria']); ?></p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-element elementor-element-7cbc89e elementor-widget elementor-widget-spacer" data-element_type="widget" data-id="7cbc89e" data-widget_type="spacer.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-spacer">
                                                                                                            <div class="elementor-spacer-inner"></div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-050fe8a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="050fe8a">
                                                                            <div class="elementor-container elementor-column-gap-default">
                                                                                <div class="elementor-row">
                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e113b03" data-element_type="column" data-id="e113b03">
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-1c435df elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="1c435df" data-widget_type="image_lp.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04framebawahkiri.png" width="300"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c3d0a87" data-element_type="column" data-id="c3d0a87">
                                                                                        <div class="elementor-column-wrap">
                                                                                            <div class="elementor-widget-wrap"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-d3101e1" data-element_type="column" data-id="d3101e1">
                                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                                            <div class="elementor-widget-wrap">
                                                                                                <div class="elementor-element elementor-element-44c40ea elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="44c40ea" data-widget_type="image_lp.default">
                                                                                                    <div class="elementor-widget-container">
                                                                                                        <div class="elementor-image"><img alt="" class="attachment-large size-large" height="226" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04framebawahkanan.png" width="300"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-83dc738 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="83dc738" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-background-overlay"></div>
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7268c96" data-element_type="column" data-id="7268c96">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div class="elementor-element elementor-element-ec5b103 elementor-widget elementor-widget-image_lp" data-element_type="widget" data-id="ec5b103" data-widget_type="image_lp.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="elementor-image"><img alt="" class="attachment-large size-large" height="90" src="<?php echo base_url(); ?>assets/front_end/uploads/2020/03/demo04mahkotabawah.png" width="300"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="elementor-section elementor-top-section elementor-element elementor-element-b35fd1b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-id="b35fd1b" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-default">
                                                        <div class="elementor-row">
                                                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-16c3625" data-element_type="column" data-id="16c3625">
                                                                <div class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">

                                                                        <div class="elementor-element elementor-element-df28f2d elementor-widget elementor-widget-html" data-element_type="widget" data-id="df28f2d" data-widget_type="html.default">
                                                                            <div class="elementor-widget-container">
                                                                                <script>
                                                                                    function getParameterByName(name, url) {
                                                                                        if (!url) url = window.location.href;
                                                                                        name = name.replace(/[\[\]]/g, '\\$&');
                                                                                        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                                                                                            results = regex.exec(url);
                                                                                        if (!results) return null;
                                                                                        if (!results[2]) return '';
                                                                                        return decodeURIComponent(results[2].replace(/\+/g, ' '));
                                                                                    }

                                                                                    var sn = getParameterByName('to');

                                                                                    document.getElementById("write").innerHTML = sn;
                                                                                </script>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-37b6121 elementor-fixed elementor-view-stacked elementor-shape-circle elementor-widget elementor-widget-BgSound" data-element_type="widget" data-id="37b6121" data-settings="{&quot;_position&quot;:&quot;fixed&quot;}" data-widget_type="BgSound.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div class="bgsound-box" id="bgsound-container">
                                                                                    <audio id="song" loop="">
                                                                                        <source src="assets/front_audio/musik.mp3">
                                                                                    </audio>
                                                                                    <div class="elementor-icon-wrapper" id="unmute-sound" style="display: none;">
                                                                                        <div class="elementor-icon">
                                                                                            <i aria-hidden="true" class="fas fa-microphone-slash"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="elementor-icon-wrapper" id="mute-sound" style="display: none;">
                                                                                        <div class="elementor-icon">
                                                                                            <i aria-hidden="true" class="fas fa-music"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <script>
                                                                                    var settingAutoplay = 'disable';
                                                                                    window.settingAutoplay = settingAutoplay === 'disable' ? false : true;
                                                                                </script>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="back-to-top">
    <svg viewbox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">
        <path d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z"></path>
    </svg>
</div>
</div>
