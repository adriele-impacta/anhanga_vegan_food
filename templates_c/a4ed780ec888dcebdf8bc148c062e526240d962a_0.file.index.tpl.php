<?php
/* Smarty version 3.1.33, created on 2019-04-17 20:13:37
  from '/opt/lampp/htdocs/smarty/templates/jogos/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cb76cd17198e4_33077974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4ed780ec888dcebdf8bc148c062e526240d962a' => 
    array (
      0 => '/opt/lampp/htdocs/smarty/templates/jogos/index.tpl',
      1 => 1554836736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cb76cd17198e4_33077974 (Smarty_Internal_Template $_smarty_tpl) {
?><div role="main" class="main">
    <div class="slider-container rev_slider_wrapper">
        <div id="revolutionSlider" class="slider rev_slider">
            <ul>
                <li data-transition="fade">
                    <img src="http://hologate.com/wp-content/uploads/2018/08/COLDCLASH_IceHole.jpg"  
                         alt=""
                         data-bgposition="center center" 
                         data-bgfit="cover" 
                         data-bgrepeat="no-repeat" 
                         class="rev-slidebg">

                    <div class="tp-caption main-label"
                         data-x="center"
                         data-y="center"
                         >JOGOS</div>

                </li>
                <li data-transition="fade">
                    <img src="http://hologate.com/wp-content/uploads/2018/08/Zombyte_Portfolio_Header2.jpg"  
                         alt=""
                         data-bgposition="center center" 
                         data-bgfit="cover" 
                         data-bgrepeat="no-repeat" 
                         class="rev-slidebg">
                    <div class="tp-caption main-label"
                         data-x="center"
                         data-y="center"
                         >EMOÇÃO</div>

                </li> 
                <li data-transition="fade">
                    <img src="http://hologate.com/wp-content/uploads/2018/11/GrooveGuardians_04.jpg"  
                         alt=""
                         data-bgposition="center center" 
                         data-bgfit="cover" 
                         data-bgrepeat="no-repeat" 
                         class="rev-slidebg">
                    <div class="tp-caption main-label"
                         data-x="center"
                         data-y="center"
                         >DIVERSÃO</div>
                </li> 
            </ul>
        </div>
    </div>
    <div class="home-intro" id="home-intro">
    </div>

   aasdasd <?php echo $_smarty_tpl->tpl_vars['idioma_ativo']->value;?>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ListaJogos']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>

        <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    


    <ul class="portfolio-list sort-destination full-width" data-sort-id="portfolio">
        <li class="isotope-item games w1">
            <div class="portfolio-item m-none">
                <a href="index.php?action=jogo&id=1">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-none">
                        <span class="thumb-info-wrapper">
                            <img src="https://739981.smushcdn.com/1258229/wp-content/uploads/2018/08/SelectGame_Angry-Birds2-400x400.jpg?size=400x400&lossy=0&strip=1&webp=1" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">THE ANGRY BIRDS MOVIE 2 VR</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </li>
        <li class="isotope-item games w1">
            <div class="portfolio-item m-none">
                <a href="index.php?action=jogo&id=1">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-zoom thumb-info-no-borders m-none">
                        <span class="thumb-info-wrapper">
                            <img src="https://739981.smushcdn.com/1258229/wp-content/uploads/2018/11/WoT_01-400x400.png?size=400x400&lossy=0&strip=1&webp=1" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">WORLD OF TANKS</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </li>
        <li class="isotope-item games w1">
            <div class="portfolio-item m-none">
                <a href="index.php?action=jogo&id=1">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-none">
                        <span class="thumb-info-wrapper">
                            <img src="https://739981.smushcdn.com/1258229/wp-content/uploads/2018/11/SelectGame_Simurai_Arena_03-400x400.png?size=400x400&lossy=0&strip=1&webp=1" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">SIMURAI ARENA</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </li>
        <li class="isotope-item games w1">
            <div class="portfolio-item m-none">
                <a href="index.php?action=jogo&id=1">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-none">
                        <span class="thumb-info-wrapper">
                            <img src="https://739981.smushcdn.com/1258229/wp-content/uploads/2018/11/SelectGame_Simurai_01-400x400.png?size=400x400&lossy=0&strip=1&webp=1" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">SIMURAI</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </li>
        <li class="isotope-item games w1">
            <div class="portfolio-item m-none">
                <a href="index.php?action=jogo&id=1">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-none">
                        <span class="thumb-info-wrapper">
                            <img src="https://739981.smushcdn.com/1258229/wp-content/uploads/2018/08/SelectGame_Angry-Birds2-400x400.jpg?size=400x400&lossy=0&strip=1&webp=1" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">THE ANGRY BIRDS MOVIE 2 VR</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </li>
        <li class="isotope-item games w1">
            <div class="portfolio-item m-none">
                <a href="index.php?action=jogo&id=1">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-zoom thumb-info-no-borders m-none">
                        <span class="thumb-info-wrapper">
                            <img src="https://739981.smushcdn.com/1258229/wp-content/uploads/2018/11/WoT_01-400x400.png?size=400x400&lossy=0&strip=1&webp=1" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">WORLD OF TANKS</span>
                                <!--<span class="thumb-info-type">Logo</span>-->
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </li>
        <li class="isotope-item games w1">
            <div class="portfolio-item m-none">
                <a href="index.php?action=jogo&id=1">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-none">
                        <span class="thumb-info-wrapper">
                            <img src="https://739981.smushcdn.com/1258229/wp-content/uploads/2018/11/SelectGame_Simurai_Arena_03-400x400.png?size=400x400&lossy=0&strip=1&webp=1" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">SIMURAI ARENA</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </li>
        <li class="isotope-item games w1">
            <div class="portfolio-item m-none">
                <a href="index.php?action=jogo&id=1">
                    <span class="thumb-info thumb-info-centered-info thumb-info-no-borders m-none">
                        <span class="thumb-info-wrapper">
                            <img src="https://739981.smushcdn.com/1258229/wp-content/uploads/2018/11/SelectGame_Simurai_01-400x400.png?size=400x400&lossy=0&strip=1&webp=1" class="img-responsive" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner">SIMURAI</span>
                            </span>
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </li>


    </ul>

</div>
<?php }
}
