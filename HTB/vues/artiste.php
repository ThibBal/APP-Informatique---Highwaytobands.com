<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/artiste_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<link rel="stylesheet" href="header_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Maiden+Orange' rel='stylesheet' type='text/css'>

	<?php include 'controleurs/header.php' ?>

 <!--<div class="banniere_artiste"><img width=100% src="img/<?php echo($data['banniere']); ?>   />
	</div>-->
	

	<div id="contenu">
		
		<div class="article">

			<div class="sous_article">
				<h2><?php echo ($data['name']); ?></h2>
				<img width=250 src="img/<?php echo ($data['photo']); ?>"/>
				
				
		</div>

			<div class="wiki">
				<h2> Actualités </h2>
				<!--<p><?php echo ($data['actu']); ?>-->
				</p>
				<h2> Composition du groupe </h2>
				<!--<p> <?php echo ($data['membres_groupe']); ?>
				</p>-->
			</div>	
			
		</div>


		<div class="article2">
			<h3>Informations</h3>
			<div class="actu" id="actu">
				<?php echo ($data['description']); ?>
				</div>			
			</div>

			<div class="article">
				<div class="sous_article">
					<h3>Agenda Concert</h3>
					<div class="actu">
						<table>
							<caption> MARCH 2014 </caption>
							<tr>
								<th> Lun </th>
								<th> Mar </th>
								<th> Mer </th>
								<th> Jeu </th>
								<th> Ven </th>
								<th> Sam </th>
								<th> Dim </th>
							</tr>
							<tr>
								<td>26</td>
								<td>27</td>
								<td>28</td>
								<td>29</td>
								<td>30</td>
								<td>01</td>
								<td>02</td>
							</tr>
							<tr>
								<td>03</td>
								<td>04</td>
								<td>05</td>
								<td>06</td>
								<td>07</td>
								<td>08</td>
								<td>09</td>
							</tr>
							<tr>
								<td>10</td>
								<td>11</td>
								<td>12</td>
								<td>13</td>
								<td>14</td>
								<td>15</td>
								<td>16</td>
							</tr>
							<tr>
								<td>17</td>
								<td>18</td>
								<td>19</td>
								<td>20</td>
								<td>21</td>
								<td>22</td>
								<td>23</td>
							</tr>
							<tr>	
								<td>24</td>
								<td>25</td>
								<td>26</td>
								<td>27</td>
								<td>28</td>
								<td>29</dta>
								<td>30</td>
							</tr>
							
						</table>			
					</div>
				</div>

				<div class="sous_article">
					<h3>Commentaires</h3>
					<div class="actu">
					<!--<?php echo (['commentaires']); ?>-->
					</div>
				</div>
			</div>
		</div>

		
		<?php include 'footer.php' ?>		
	</body>

	</html>