<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html>
	<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title><?= $site_title ?></title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width"/>
        
        <link rel="shortcut icon" href="<?= base_url() ?>favicon.ico" />
    	<link rel="apple-touch-icon" href="<?= base_url();?>apple-touch-icon.png" />

        <link rel="stylesheet" href = "<?= base_url() ?>css/main.css" />

        <script src="<?= base_url(); ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
	<body>

		<header class="navbar navbar-static-top">
            <div class="container">
				<div class="navbar-inner">
                    <a class="logo" href="#"><img src="" /></a>
					
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<div class="nav-collapse collapse">
                        <a class="brand" href="#" style="padding-top:7px"><img src="http://i400.photobucket.com/albums/pp81/ngua_con_cao_co/Newlogodesigncopy1.png"/></a>
						<ul class="nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
						</ul>
                        <div>

                            <? if(!$logged_in){ ?>

                                <?= form_open($form_destination, array('class' => 'navbar-form pull-right')) ?>
                                    <?= ($login_message) ? $login_message : false?>
                                    <input name="email" class="span2" type="text" placeholder="Email">
                                    <input name="password" class="span2" type="password" placeholder="Password">
                                    <label class="checkbox inline" for="form_remember">
                                        <input id="for_remember" type="checkbox" checked="checked">
                                         <small><small>Remember</small></small>&nbsp;
                                    </label>
                                    <button name="submit" class="btn pull-right" type="submit" style="inline">Sign in</button>
                               </form>

                            <? }else{ ?>

                                <p>AWESOME! YOU ARE LOGGED IN!!!</p>

                            <? } ?>

                        </div>
					</div>
				</div>                
            </div>
        </header>