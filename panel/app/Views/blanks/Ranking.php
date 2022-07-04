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
	<div id="gnb_game_rpg"
		style="width:100%; height:32px; padding:0; margin:0; overflow:hidden; text-align:left; background-color: #000000;">
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
					<li><a href="/event/losttemple/"><img src="images/visual1.jpg" alt></a></li>
					<li><a href="/support/news/detail.html?nidx=3170"><img src="images/img_issue2.jpg" alt></a></li>
					<li><a href="/event/lostpage/"><img src="images/img_issue3.jpg" alt></a></li>
					<li><a href="/support/news/detail.html?nidx=2243"><img src="images/img_issue4.jpg" alt></a></li>
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
						<li><a href="/guide/beginner/index.html">View All</a></li>
						<li><a href="/guide/gamesystem/index.html">Update</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">FORUM</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="/community/demand/list.php">General</a></li>
						<li><a href="/community/ranking/index.html">Future Updates</a></li>
						<li><a href="/community/fansite/index.html">Patch Info</a></li>
						<li><a href="/community/netcafe/index.html">Announcements</a></li>
					</ul>
				</li>
				<li><a href="#" style="margin-top: 20px; margin-left: 60px; margin-right:30px; text-decoration: none; color: black; font-family: serif; font-weight: bold;">GUIDES</a>
					<ul style="margin-bottom: 5px;">
						<li><a href="/powerupshop/kp_buy.html">PVP</a></li>
						<li><a href="/powerupshop/item.html">Farming</a></li>
						<li><a href="/powerupshop/gacha.html">Class</a></li>
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
		</div>
		<div id="left_column">
			<div class="left_columpb">
				<div class="left_columnbgtop"></div>
				<form action="<?php echo base_url(); ?>/signin/login" method="get" name="login_form">
					<div class="left_columlogin">
						<div class="left_columloginsz">
						<?php
							if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin' | $_SESSION['role'] == 'mod' | $_SESSION['role'] == 'user') {
								echo '<div class="left_columloginpd"><p size="14" maxlength="15" tabindex="1" style="color: white; margin-top: 5px;">Welcome!</p>';
								echo '<p style="color: white; margin-top: -15px;">' . session()->get('strAccountID') . '</p>';
								echo '</div>';
								echo '</div>';
								echo '<div class="left_columloginbtn"><a  href= "/logout"><img type="image" src="images/logout.png" alt="LOGIN" border="0" tabindex="3"></img></a>';
								echo '</div>';
								echo '</div>';
							} else {
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
				<div class="left_columidforget"><a href="http://www.mgame.jp/member/idpw_search.html"><img src="images/forgotten_password.png" alt="ID：パスワードを忘れた方はこちら"></a></div>
				<div class="left_columfreemember"><a href="http://www.mgame.jp/member/step01.html?cp_regid=KNIGHT"><img src="images/btn_register.png" alt="無料会員登録" border="0"></a></div>
				<div class="left_columdownload"><a href="/info/spec.html"><img src="images/btn_download_off.png" alt="ダウンロード" border="0"></a></div>
				<div class="left_columfaq"><a href="/support/faq/index.html"><img src="images/btn_faq_off.jpg" alt="FAQ" border="0"></a></div>
				<div class="left_columbeginner"><a href="/beginner/index.html"><img src="images/bg_bar1.png" alt="初めての方はこちら" border="0"></a></div>
				<div class="left_colummainte"><img src="images/bg_bar2.png" alt="メンテナンス"></div>
				<div class="left_columnbgbut"></div>
			</div>
		</div>
		<!-- content column starts here -->
		<div id="contents_column">
			<div class="contenst_columpb">
				<div class="contentstop">
					<div class="contentstoppd">
						<h1><img border="0" src="images/h1_03community.gif" alt="コミュニティ"></h1>
						<div class="pankz">
							<span><a href="/member/index.html">HOME></a></span>
							<span><a href="/community/index.html">Community></a></span>
							<span><a href="/community/ranking/index.html">Ranking</a></span>
						</div>
					</div>
				</div>
				<div class="contentsmid">
					<!-- ranking navigation -->
					<div class="second">
						<div class="secondpd">
							<span class="selfin">RANKING</span>
							<span><a href="ladder.html">LADDER</a></span>
							<span><a href="loyal.html">LOYALTY</a></span>
							<span><a href="clan.html">CLAN</a></span>
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
											<tr style="color: gray;">
												<th scope="row" style="border: 0; color: gray;">1</th>
												<td style="border: 0; color: gray;"><img src="images/s_0_20_0.gif"></td>
												<td style="border: 0; color: gray;">GiR</td>
												<td style="border: 0; color: gray;">12345678</td>
											</tr>
											<tr>
												<th scope="row" style="border: 0; color: gray;">2</th>
												<td style="border: 0; color: gray;"><img src="images/s_0_21_0.gif"></td>
												<td style="border: 0; color: gray;">GiR</td>
												<td style="border: 0; color: gray;">12345678</td>
											</tr>
											<tr>
												<th scope="row" style="border: 0; color: gray;">3</th>
												<td style="border: 0; color: gray;"><img src="images/s_0_22_0.gif"></td>
												<td style="border: 0; color: gray;">GiR</td>
												<td style="border: 0; color: gray;">12345678</td>
											</tr>
											<tr>
												<th scope="row" style="border: 0; color: gray;">4</th>
												<td style="border: 0; color: gray;"><img src="images/s_0_23_0.gif"></td>
												<td style="border: 0; color: gray;">GiR</td>
												<td style="border: 0; color: gray;">12345678</td>
											</tr>
											<tr>
												<th scope="row" style="border: 0; color: gray;">5</th>
												<td style="border: 0; color: gray;"><img src="images/s_0_24_0.gif"></td>
												<td style="border: 0; color: gray;">GiR</td>
												<td style="border: 0; color: gray;">12345678</td>
											</tr>
										</table>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="bbswidbgbot">
							</div>
							<div class="second">
								<div class="secondpd">
									<span><a href="ladder.html">View All</a></span>
								</div>
							</div>
							<div style="margin-bottom: 2em;"></div>
							<!-- user ranking ends here-->
							<!-- user clan ranking starts here-->
							<h2 style="margin-top: .43em; margin-left: 40%;">Guild Ranking</h2>
							<div class="bbswidbgtop"></div>
							<div class="bbswidbgmid">
								<div class="bbsbbswidbgpd">
									<div style="padding: 1px;">
										<table class="table" style="margin-left: 4em;">
											<tr style="border: transparent;">
												<th scope="col" style="color:gray; font-weight: bold;">Rank</th>
												<th scope="col" style="color:gray; font-weight: bold;">Guild</th>
												<th scope="col" style="color:gray; font-weight: bold;">Leader</th>
												<th scope="col" style="color:gray; font-weight: bold;">Contribution</th>
											</tr>
											<tr style="color: gray;">
												<th scope="row" style="border: 0; color: gray;">1</th>
												<td style="border: 0; color: gray;"> <img src="images/el_grade_12.gif" style="margin-left: -30px; padding-right: 5px;">Noob</td>
												<td style="border: 0; color: gray;">GiR</td>
												<td style="border: 0; color: gray;">12345678</td>
											</tr>
											<tr>
												<th scope="row" style="border: 0; color: gray;">2</th>
												<td style="border: 0; color: gray;"> <img src="images/el_grade_11.gif" style="margin-left: -30px; padding-right: 5px;">Noob</td>
												<td style="border: 0; color: gray;">GiR</td>
												<td style="border: 0; color: gray;">12345678</td>
											</tr>
											<tr>
												<th scope="row" style="border: 0; color: gray;">3</th>
												<td style="border: 0; color: gray;"> <img src="images/el_grade_10.gif" style="margin-left: -30px; padding-right: 5px;">Noob</td>
												<td style="border: 0; color: gray;">GiR</td>
												<td style="border: 0; color: gray;">12345678</td>
											</tr>
											<tr>
												<th scope="row" style="border: 0; color: gray;">4</th>
												<td style="border: 0; color: gray;"> <img src="images/el_grade_9.gif" style="margin-left: -30px; padding-right: 5px;">Noob</td>
												<td style="border: 0; color: gray;">GiR</td>
												<td style="border: 0; color: gray;">12345678</td>
											</tr>
											<tr>
												<th scope="row" style="border: 0; color: gray;">5</th>
												<td style="border: 0; color: gray;"> <img src="images/el_grade_9.gif" style="margin-left: -30px; padding-right: 5px;">Noob</td>
												<td style="border: 0; color: gray;">GiR</td>
												<td style="border: 0; color: gray;">12345678</td>
											</tr>
										</table>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="bbswidbgbot"></div>
						</div>
						<div class="second">
							<div class="secondpd">
								<span><a href="ladder.html">View All</a></span>
							</div>
						</div>
						<!-- user ranking ends here-->
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
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
			integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
			integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
			crossorigin="anonymous"></script>
		<script
			type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www."); document.write(unescape("%3Cscript charset='utf-8' src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));</script>
		<script charset="utf-8" src="js/ga.js" type="text/javascript"></script>
		<script
			type="text/javascript">var pageTracker = _gat._getTracker("UA-3576353-1"); pageTracker._initData(); pageTracker._trackPageview();</script>
		<!-- Javascript ends -->
	</div>

</body>

</html>