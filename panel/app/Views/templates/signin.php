<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KNIGHT ONLINE</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="screen,print" href="css/style_1.css">
	<link rel="stylesheet" type="text/css" media="screen,print" href="css/style_2.css">
</head>

<body>
	<div id="gnb_game_rpg" style="width:100%; height:32px; padding:0; margin:0; overflow:hidden; text-align:left; background-color: #000000;">
		<div style="float:right; width:225px; height:32px; margin:0 10px 0 0; vertical-align:top;">
			<div style="float:right; width:120px; height:22px; margin:5px 0 0 0;">
			</div>
			<div style="float:right; width:90px; height:16px; margin:9px 0 0 0;"> </div>
		</div>
		<div style="float:right; height:22px; margin:4px 10px 0 10px; overflow:hidden;">
		</div>
	</div>
	<div id="skyscraperpd">
		<div id="skyscraper">
		</div>
	</div>
	<div id="all" class="clearfix">
		<div id="header">
			<a id="headerlink" href="/">トップヘ</a>
			<div style="position:absolute;top:-2000px;">
			</div>
		</div>
		<!--- news navigation starts here --->
		<?php
			if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin' | $_SESSION['role'] == 'mod') {

				echo '<ul class="gnb">
				<li><a href="#" style="margin-top: 20px; margin-left: 75px; margin-right:40px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">HOME</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">FAQ</a></li>
						<li><a href="/signup">Register</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">NEWS</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">View All</a></li>
						<li><a href="/news-update">Update</a></li>
						<li><a href="/news/create">Create</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">FORUM</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">General</a></li>
						<li><a href="#">Future Updates</a></li>
						<li><a href="#">Patch Info</a></li>
						<li><a href="#">Announcements</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">GUIDES</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">PVP</a></li>
						<li><a href="#">Farming</a></li>
						<li><a href="#">Class</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">RANKING</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="/clan_rank">Clan</a></li>
						<li><a href="/ladder_rank">Ladder</a></li>
						<li><a href="/loyalty_rank">Loyalty</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">DOWNLOAD</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">Client</a></li>
					</ul>
				</li>
			</ul>';
			} elseif (isset($_SESSION['role']) == 'user') {

				echo '	<ul class="gnb">
				<li><a href="/index" style="margin-top: 20px; margin-left: 75px; margin-right:40px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">HOME</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">FAQ</a></li>
						<li><a href="/signup">Register</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">NEWS</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">View All</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">FORUM</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">General</a></li>
						<li><a href="#">Future Updates</a></li>
						<li><a href="#">Patch Info</a></li>
						<li><a href="#">Announcements</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">GUIDES</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">PVP</a></li>
						<li><a href="#">Farming</a></li>
						<li><a href="#">Class</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">RANKING</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="/clan_rank">Clan</a></li>
						<li><a href="/ladder_rank">Ladder</a></li>
						<li><a href="/loyalty_rank">Loyalty</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">DOWNLOAD</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">Client</a></li>
					</ul>
				</li>
			</ul>';
			} elseif (isset($_SESSION['isLoggedIn']) != true) {

				echo '	<ul class="gnb">
				<li><a href="#" style="margin-top: 20px; margin-left: 75px; margin-right:40px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">HOME</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">FAQ</a></li>
						<li><a href="/signup">Register</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">NEWS</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">View All</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">FORUM</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#>General</a></li>
						<li><a href="#">Future Updates</a></li>
						<li><a href="#">Patch Info</a></li>
						<li><a href="#">Announcements</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">GUIDES</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">PVP</a></li>
						<li><a href="#">Farming</a></li>
						<li><a href="#">Class</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">RANKING</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="/clan_rank">Clan</a></li>
						<li><a href="/ladder_rank">Ladder</a></li>
						<li><a href="/loyalty_rank">Loyalty</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">DOWNLOAD</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="#">Client</a></li>
					</ul>
				</li>
			</ul>';
			} ?>
		</div>
		<!-- navigation ends -->
		<div id="left_column">
			<div class="left_columpb">
				<div class="left_columnbgtop"></div>
				<form action="<?php echo base_url(); ?>/signin/login" method="get" name="login_form">
					<?php
					if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin' | $_SESSION['role'] == 'mod' | $_SESSION['role'] == 'user') {
						echo '<div class="left_columlogout">';
						echo '<div class="left_columloginsz">';
						echo '<div class="left_columloginpd"><p size="14" maxlength="15" tabindex="1" style="color: white; margin-top: 5px;">Welcome!</p>';
						echo '<p style="color: white; margin-top: -15px;">' . session()->get('strAccountID') . '</p>';
						echo '</div>';
						echo '</div>';
						echo '<div class="left_columloginbtn"><a  href= "/logout"><img type="image" src="images/logout.png" alt="LOGIN" border="0" tabindex="3"></img></a>';
						echo '</div>';
						echo '</div>';
					} else {
						echo '<div class="left_columlogin">';
						echo '<div class="left_columloginsz">';
						echo '<div class="left_columloginpd"><input type="email" name="email" placeholder="Email" value="" size="14" maxlength="15" tabindex="1"><input type="password" name="password" placeholder="Password" size="14" maxlength="16" tabindex="2">';
						echo '</div>';
						echo '</div>';
						echo '<div class="left_columloginbtn"><input type="image" src="images/login.png" alt="LOGIN" border="0" tabindex="3">';
						echo '</div>';
						echo '</div>';
					}
					?>
					<div class="left_slogin">
						<div class="left_sloginpd"><input name="ssl" checked></div>
					</div>
				</form>
				<div class="left_columidforget"><a href="#"><img src="<?php echo base_url(); ?>/images/forgotten_password.png" alt="ID：パスワードを忘れた方はこちら"></a></div>
				<div class="left_columfreemember"><a href="/signup"><img src="<?php echo base_url(); ?>/images/btn_register.png" alt="無料会員登録" border="0"></a></div>
				<div class="left_columdownload"><a href="#"><img src="<?php echo base_url(); ?>/images/btn_download_off.png" alt="ダウンロード" border="0"></a></div>
				<div class="left_columfaq"><a href="#"><img src="<?php echo base_url(); ?>/images/btn_faq_off.jpg" alt="FAQ" border="0"></a></div>
				<div class="left_columbeginner"><a href="#"><img src="<?php echo base_url(); ?>/images/bg_bar1.png" alt="初めての方はこちら" border="0"></a></div>
				<div class="left_colummainte"><img src="<?php echo base_url(); ?>/images/bg_bar2.png" alt="メンテナンス"></div>
				<div class="left_columnbgbut"></div>
			</div>
		</div>
		<div id="center_column">
			<!-- start news -->
			<div class="center_columnbgtop">
				<div xmlns:php="http://php.net/xsl" class="center_news">
					<div class="center_newspd">
						<?php if (!empty($news) && is_array($news)) : ?>
							<?php
							$i = 0;
							foreach ($news as $news_item) :
								if ($i++ > 5) break; ?>
								<div class="clear"></div>
								<div class="cl00">
									<div class="cl03"><img src="<?php echo base_url(); ?>/images/news.png"></div>
									<div class="newslistmg"></div>
									<div class="cl01"><a href="/news/<?=esc($news_item['slug'], 'url')?>""><?= esc($news_item['title']) ?></a>
									</div>
									<div class="newslistmg"></div>
									<div class="cl02"><?= date('Y-m-d', strtotime($news_item['created_at'])) ?>
									</div>
									<div class="newslistmg"></div>
								</div>
							<?php endforeach ?>

						<?php else : ?>

							<h3>No News</h3>

							<p>Unable to find any news for you.</p>

						<?php endif ?>
						<div class="cl00">
						</div>
					</div>
				</div>
			</div>
			<!-- news ends -->
			<div>
				<!-- user rank starts -->
				<div class="center_columnbgtoprrank" style="margin-top:-13.5em;">
					<div style="padding: 20px;">
						<table class="table">
							<tr style="border: gray;">
								<th scope="col" style="color:azure; font-weight: bold;">Rank</th>
								<th scope="col" style="color:azure; font-weight: bold;">Prestige</th>
								<th scope="col" style="color:azure; font-weight: bold;">Name</th>
								<th scope="col" style="color:azure; font-weight: bold;">Loyalty</th>
							</tr>
							<tr style="color: azure;">
								<th scope="row" style="border: 0; color: azure;">1</th>
								<td style="border: 0; color: azure;">{Symbol}</td>
								<td style="border: 0; color: azure;">GiR</td>
								<td style="border: 0; color: azure;">12345678</td>
							</tr>
							<tr>
								<th scope="row" style="border: 0; color: azure;">2</th>
								<td style="border: 0; color: azure;">{Symbol}</td>
								<td style="border: 0; color: azure;">GiR</td>
								<td style="border: 0; color: azure;">12345678</td>
							</tr>
							<tr>
								<th scope="row" style="border: 0; color: azure;">3</th>
								<td style="border: 0; color: azure;">{Symbol}</td>
								<td style="border: 0; color: azure;">GiR</td>
								<td style="border: 0; color: azure;">12345678</td>
							</tr>
							<tr>
								<th scope="row" style="border: 0; color: azure;">4</th>
								<td style="border: 0; color: azure;">{Symbol}</td>
								<td style="border: 0; color: azure;">GiR</td>
								<td style="border: 0; color: azure;">12345678</td>
							</tr>
							<tr>
								<th scope="row" style="border: 0; color: azure;">5</th>
								<td style="border: 0; color: azure;">{Symbol}</td>
								<td style="border: 0; color: azure;">GiR</td>
								<td style="border: 0; color: azure;">12345678</td>
							</tr>
						</table>
					</div>
				</div>
				<!-- user rank ends -->
				<!-- guild rank starts -->
				<div class="center_columnbgtopgrank" style="margin-top:-10em;">
					<div style="padding: 20px;">
						<table class="table">
							<tr style="border: gray;">
								<th scope="col" style="color:azure; font-weight: bold;">Rank</th>
								<th scope="col" style="color:azure; font-weight: bold;">Guild</th>
								<th scope="col" style="color:azure; font-weight: bold;">Leader</th>
								<th scope="col" style="color:azure; font-weight: bold;">Contribution</th>
							</tr>
							<tr style="color: azure;">
								<th scope="row" style="border: 0; color: azure;">1</th>
								<td style="border: 0; color: azure;">Noob</td>
								<td style="border: 0; color: azure;">GiR</td>
								<td style="border: 0; color: azure;">12345678</td>
							</tr>
							<tr>
								<th scope="row" style="border: 0; color: azure;">2</th>
								<td style="border: 0; color: azure;">Noob</td>
								<td style="border: 0; color: azure;">GiR</td>
								<td style="border: 0; color: azure;">12345678</td>
							</tr>
							<tr>
								<th scope="row" style="border: 0; color: azure;">3</th>
								<td style="border: 0; color: azure;">Noob</td>
								<td style="border: 0; color: azure;">GiR</td>
								<td style="border: 0; color: azure;">12345678</td>
							</tr>
							<tr>
								<th scope="row" style="border: 0; color: azure;">4</th>
								<td style="border: 0; color: azure;">Noob</td>
								<td style="border: 0; color: azure;">GiR</td>
								<td style="border: 0; color: azure;">12345678</td>
							</tr>
							<tr>
								<th scope="row" style="border: 0; color: azure;">5</th>
								<td style="border: 0; color: azure;">Noob</td>
								<td style="border: 0; color: azure;">GiR</td>
								<td style="border: 0; color: azure;">12345678</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<!-- guild rank ends -->
		<!-- start right column -->
		<div id="right_column">
			<div class="right_columnbgtop2">
				<div class="right_battlflh">
					<ul class="list">
						<li><img src="<?php echo base_url(); ?>/images/img_banner1.jpg" alt></li>
						<li><img src="<?php echo base_url(); ?>/images/img_banner2.jpg" alt></li>
						<li><img src="<?php echo base_url(); ?>/images/img_banner3.jpg" alt></li>
						<li><img src="<?php echo base_url(); ?>/images/img_banner4.jpg" alt></li>
						<li><img src="<?php echo base_url(); ?>/images/img_banner5.jpg" alt></li>
					</ul>
				</div>
				<div class="right_powerupshoppd">
					<a href="http://knight.mgame.jp/guide/beginner/first.html"><img src="<?php echo base_url(); ?>/images/btn_event_2.png" alt="初めから学ばナイト！" border="0"></a>
					<a href="http://knight.mgame.jp/entertainment/cartoon_list.html"><img src="<?php echo base_url(); ?>/images/btn_event.png" alt="斉藤かよ子先生の４コマ漫画" border="0"></a>
				</div>
				<div class="right_bannersz">
					<a href="/powerupshop/kp_buy.html"><img src="<?php echo base_url(); ?>/images/btn_recruit.png" alt="コミュニティ" border="0"></a>
					<a href="/guide/beginner/"><img src="<?php echo base_url(); ?>/images/btn_system.png" alt="ゲームシステム" border="0"></a>
				</div>
			</div>
		</div>
		<!-- end right column -->
		<!-- footer start -->
		<div id="footer">
			<div class="footerpd">
				<div class="footerbg">
					<div class="footerlinkpd">
						<span><a href="http://www.mgame.jp/policy/kiyaku.html" target="_blank">T.O.S</a></span>
						<span><a href="http://www.mgame.jp/policy/privacy_policy.html" target="_blank">Policy</a></span>
						<span><a href="http://corp.mgame.jp/recruit/">Team</a></span>
					</div>
				</div>
			</div>
		</div>
		<!-- footer ends -->
		<!-- Javascript start-->
		<script type="text/javascript" src="js/AC_RunActiveContent.js"></script>
		<script type="text/javascript" src="js/img_changer_auto.js"></script>
		<script type="text/javascript" src="js/mjscript.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
		<script type="text/javascript" src="js/commXMLHttp.js"></script>
		<script type="text/javascript" src="js/windowEvent.js"></script>
		<script type="text/javascript" src="js/makePCookie.js"></script>
		<script type="text/javascript" src="js/menu.js"></script>
		<script type="text/javascript" src="js/jquery-latest.js"></script>
		<script type="text/javascript" src="js/gnb.js"></script>
		<script type="text/javascript" src="js/jquery.bxslider.js"></script>
		<script type="text/javascript" src="js/misc.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		<script charset="utf-8" src="js/ga.js" type="text/javascript"></script>
	</div>

</body>

</html>