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
		<div id="flash">
			<div class="issue">
				<ul class="list">
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="images/visual5.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="images/visual2.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="images/visual3.jpg" class="d-block w-100" alt="...">
							</div>
						</div>
					</div>
				</ul>
				<div class="skin">
					<div></div>
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
				<		<!-- left panel starts -->
		<div id="left_column">
			<div class="left_columpb">
				<div class="left_columnbgtop"></div>
				<form action='<?php echo base_url(); ?>/signin/login' method="get" name="login_form">
					<?php
					if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin' | $_SESSION['role'] == 'mod' | $_SESSION['role'] == 'user') {
						echo '<div class="left_columlogout">';
						echo '<div class="left_columloginsz">';
						echo '<div class="left_columloginpd"><p size="14" maxlength="15" tabindex="1" style="color: white; margin-top: 5px;">Welcome!</p>';
						echo '<p style="color: white; margin-top: -15px;">' . session()->get('strAccountID') . '</p>';
						echo '</div>';
						echo '</div>';
						echo '<div class="left_columloginbtn"><a  href= "/logout"><img type="image" src="../images/logout.png" alt="LOGIN" border="0" tabindex="3"></img></a>';
						echo '</div>';
						echo '</div>';
						echo '<div class="left_slogin">';
						echo '<div class="left_sloginpd"><input name="ssl" checked></div>';
						echo '</div>';
						echo '</form>';
						echo '<div class="left_columidforget"><a href="#"><img src="images/forgotten_password.png" alt="ID：パスワードを忘れた方はこちら"></a></div>';
						echo '<div class="left_columfreemember" style="margin-bottom: -12px;"><a href="#"><img src="images/bg_acc.png" alt="無料会員登録" border="0"></a></div>';
						echo '<div class="left_columdownload"><a href="#"><img src="images/btn_download_off.png" alt="ダウンロード" border="0"></a></div>';
						echo '<div class="left_columfaq"><a href="#"><img src="images/btn_faq_off.jpg" alt="FAQ" border="0"></a></div>';
						echo '<div class="left_columbeginner"><a href="#"><img src="images/bg_bar1.png" alt="初めての方はこちら" border="0"></a></div>';
						echo '<div class="left_colummainte"><img src="images/bg_bar2.png" alt="メンテナンス"></div>';
						echo '<div class="left_columnbgbut"></div>';
					} else {
						echo '<div class="left_columlogin">';
						echo '<div class="left_columloginsz">';
						echo '<div class="left_columloginpd"><input type="email" name="email" placeholder="Email" value="" size="14" maxlength="15" tabindex="1"><input type="password" name="password" placeholder="Password" size="14" maxlength="16" tabindex="2">';
						echo '</div>';
						echo '</div>';
						echo '<div class="left_columloginbtn"><input type="image" src="images/login.png" alt="LOGIN" border="0" tabindex="3">';
						echo '</div>';
						echo '</div>';
						echo '<div class="left_slogin">';
						echo '<div class="left_sloginpd"><input name="ssl" checked></div>';
						echo '</div>';
						echo '</form>';
						echo '<div class="left_columidforget"><a href="#"><img src="images/forgotten_password.png" alt="ID：パスワードを忘れた方はこちら"></a></div>';
						echo '<div class="left_columfreemember" style="margin-bottom: -12px;"><a href="/signup"><img src="images/bg_register.png" alt="無料会員登録" border="0"></a></div>';
						echo '<div class="left_columdownload"><a href="#"><img src="images/btn_download_off.png" alt="ダウンロード" border="0"></a></div>';
						echo '<div class="left_columfaq"><a href="#"><img src="images/btn_faq_off.jpg" alt="FAQ" border="0"></a></div>';
						echo '<div class="left_columbeginner"><a href="#"><img src="images/bg_bar1.png" alt="初めての方はこちら" border="0"></a></div>';
						echo '<div class="left_colummainte"><img src="images/bg_bar2.png" alt="メンテナンス"></div>';
						echo '<div class="left_columnbgbut"></div>';
					}
					?>
					<!-- left panel navigation ends here-->
			</div>
		</div>
		<!-- content column starts here -->
		<div id="contents_column">
			<div class="contenst_columpb">
				<div class="contentstop">
					<div class="contentstoppd">
						<h1><img border="0" src="images/h1_03community.gif" alt="コミュニティ"></h1>
						<div class="pankz">
						<span><a href="<?php echo base_url(); ?>/">HOME></a></span>
							<span><a href="<?php echo base_url(); ?>/clan_rank">Clan</a></span>
						</div>
					</div>
				</div>
				<div class="contentsmid">
					<!-- ranking navigation -->
					<div class="second">
						<div class="secondpd">
							<span><a href="<?php echo base_url(); ?>/ladder_rank">LADDER</a></span>
							<span><a href="<?php echo base_url(); ?>/loyalty_rank">LOYALTY</a></span>
							<span class="selfin"><a href="<?php echo base_url(); ?>/clan_rank">CLAN</a></span>
						</div>
					</div>
					<!-- ranking navigation ends here -->
					<div class="contentsh2">
						<div class="contentsh2pd">
							<h2 style="margin-top: .43em; margin-left: 40%;">Rankings</h2>
						</div>
					</div>
					<div class="contentsmain">
						<div class="bbsmargin">
							<div class="clear"></div>
							<!-- user ranking starts here-->
							<h2 style="margin-top: .43em; margin-left: 40%;">Ladder Ranking</h2>
							<div class="bbswidbgtop"></div>
							<div class="bbswidbgmid">
								<div class="bbsbbswidbgpd">
									<div style="padding: 1px;">
										<table class="table" style="margin-left: 4em;">
											<tr style="border: transparent;">
												<th scope="col" style="color:gray; font-weight: bold;">Rank</th>
												<th scope="col" style="color:gray; font-weight: bold;">Prestige</th>
												<th scope="col" style="color:gray; font-weight: bold;">Name</th>
												<th scope="col" style="color:gray; font-weight: bold;">Loyalty</th>
											</tr>
											<?php if (!empty($Crank) && is_array($Crank)) : ?>
												<?php foreach ($Crank as $Crank_item) : ?>
													<?php echo '<tr style="color: gray;">';
													echo "<td scope='row' style='border: 0; color: gray;'>" . $Crank_item['Ranking'] . "</td>";
													if ($Crank_item['Points'] >= 720000) {
														echo "<td style='border: 0; color: gray;'><img src='../images/gn_grade_1.gif'</td>";
													} elseif ($Crank_item['Points'] < 720000 && $Crank_item['Points'] >= 360000) {
														echo "<td style='border: 0; color: gray;'><img src='../images/gn_grade_2.gif'</td>";
													} elseif ($Crank_item['Points'] < 360000 && $Crank_item['Points'] >= 144000) {
														echo "<td style='border: 0; color: gray;'><img src='../images/gn_grade_3.gif'</td>";
													} elseif ($Crank_item['Points'] < 144000 && $Crank_item['Points'] >= 72000) {
														echo "<td style='border: 0; color: gray;'><img src='../images/gn_grade_4.gif'</td>";
													} elseif ($Crank_item['Points'] < 72000) {
														echo "<td style='border: 0; color: gray;'><img src='../images/gn_grade_5.gif'</td>";
													}
													echo "<th style='border: 0; color: gray;'>" . $Crank_item['Chief'] . "</th>";
													echo "<th style='border: 0; color: gray;'>" . $Crank_item['Points'] . "</th>";
													echo "</tr>"; ?>
												<?php endforeach ?>
											<?php else : ?>
											<?php endif ?>
										</table>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="bbswidbgbot">
							</div>
							<!-- user ranking ends here-->
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="contentsbut"></div>
			</div>
		</div>
		<!-- content ends here -->
		<!-- footer starts here -->
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
		<!-- footer ends here -->
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