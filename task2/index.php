
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YIPL | Task 2</title>
		
		<!-- Bootstrap Core CSS -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
</head>

<body>

<!-- top tilte bar and side options bars -->

	<div class="navbar">
		<div  class="col-lg-12">
			<h2>Contracts Viewer</h2>
		</div>
	</div>

	<div >
		<div  class="col-lg-4">
		
				
				<li><p type="button" id="button_1" class="btn btn-default btn-block">Contract-2070-1</p></li>
				<li><p type="button" id="button_2" class="btn btn-default btn-block">Contract-2070-2</p></li>
				<li><p type="button" id="button_3" class="btn btn-default btn-block">Contract-2070-3</p></li>
				<li><p type="button" id="button_4" class="btn btn-default btn-block">Contract-2070-4</p></li>
				<li><p type="button" id="button_5" class="btn btn-default btn-block">Contract-2070-5</p></li>
				<li><p type="button" id="button_6" class="btn btn-default btn-block">Contract-2070-6</p></li>
				<li><p type="button" id="button_7" class="btn btn-default btn-block">Contract-2070-7</p></li>
				<li><p type="button" id="button_8" class="btn btn-default btn-block">Contract-2070-8</p></li>
				<li><p type="button" id="button_9" class="btn btn-default btn-block">Contract-2070-9</p></li>
				<li><p type="button" id="button_10" class="btn btn-default btn-block">Contract-2070-10</p></li>
			
		</div>
		
		<?php 
		$row = 0;
		$contractsData = fopen('final.csv', 'r');
		$contracts = [];
		while (($data = fgetcsv($contractsData, 1000, ",")) !== FALSE) {
			$contracts[]=$data;
			$row++;
		}
		for($x=1;$x<= $row; $x++) {
		?>
		<div id = "tableinfo_<?= $x; ?>" class="hidden">
			<div class="col-lg-4">
				<div  class="box box-solid">
							
					<div class="col-xs-12 col-sm-12 placeholder">
						<h3 class="contract_id" ><?= $contracts[$x][0]; ?></h3>
						<?php if($contracts[$x][1] != null) { ?> <p class="status"> Status: <?= $contracts[$x][1]; ?></p> <?php } ?>
						<?php if($contracts[$x][2] != null) { ?> <p class="purchase">	bidPurchaseDeadline: <?= $contracts[$x][2]; ?></p> <?php } ?>
						<?php if($contracts[$x][3] != null) { ?> <p class="submission">	bidSubmissionDeadline: <?= $contracts[$x][3]; ?></p> <?php } ?>
						<?php if($contracts[$x][4] != null) { ?> <p class="opening">	bidOpeningDate: <?= $contracts[$x][4]; ?></p> <?php } ?>
						<?php if($contracts[$x][5] != null) { ?> <p class="tender">	tenderid: <?= $contracts[$x][5]; ?></p> <?php } ?>
						<?php if($contracts[$x][6] != null) { ?> <p class="publication">	publicationDate: <?= $contracts[$x][6]; ?></p> <?php } ?>
						<?php if($contracts[$x][7] != null) { ?> <p class="published">	publishedIn: <?= $contracts[$x][7]; ?></p> <?php } ?>
						<?php if($contracts[$x][8] != null) { ?> <p class="contract">	contractDate: <?= $contracts[$x][8]; ?></p> <?php } ?>
						<?php if($contracts[$x][9] != null) { ?> <p class="completion">	completionDate: <?= $contracts[$x][9]; ?></p> <?php } ?>
						<?php if($contracts[$x][10] != null) { ?> <p class="award">	awardee: <?= $contracts[$x][10]; ?></p> <?php } ?>
						<?php if($contracts[$x][11] != null) { ?> <p class="location">	awardeeLocation: <?= $contracts[$x][11]; ?></p> <?php } ?>
						<?php if($contracts[$x][12] != null) { ?> <p class="amount">	Amount: <?= $contracts[$x][12]; ?></p> <?php } ?>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<?php if($contracts[$x][11] == "Banke") { ?> 
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601948.491222952!2d81.929169!3d28.16085899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDA5JzM5LjEiTiA4McKwNTUnNDUuMCJF!5e0!3m2!1sen!2sus!4v1435973359524" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				<?php } 
				if($contracts[$x][11] == "Makwanpur") { ?> 
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622147.7821222404!2d85.02334599999998!3d27.554636000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDMzJzE2LjciTiA4NcKwMDEnMjQuMSJF!5e0!3m2!1sen!2sus!4v1436013228190" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				<?php } 
				if($contracts[$x][11] == "Lalitpur") { ?> 
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618445.397171882!2d85.316667!3d27.666667000000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjfCsDQwJzAwLjAiTiA4NcKwMTknMDAuMCJF!5e0!3m2!1sen!2sus!4v1436013075679" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				<?php } ?>
			</div>
		</div>
				
		<?php } ?>
        
    <!-- /#page-wrapper -->
	</div>

<!-- jQuery -->
<script src="dist/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->


<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/jquery.csv-0.71.min.js"></script>
<script src="dist/js/papaparse.min.js"></script>


<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>

var totaldivs = 10;	
$( "[id^=button_]" ).click(function() {
	
	var button_id = $(this).attr('id');
	var button = button_id.replace(/[^0-9]/g, '');
	
	for (i=1; i<=totaldivs; i++) {
		var tableinfo = "#tableinfo_" + i;
		if ( i == button) {
			$(tableinfo).removeClass("hidden");
		}
		else {
			$(tableinfo).addClass("hidden");
		}
	}
});

</script>
</body>

</html>

