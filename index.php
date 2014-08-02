<?php
	try {
        $dbh = new PDO('mysql:host=localhost;dbname=geo', 'root', '', array( PDO::ATTR_PERSISTENT => false));
		$lat = -46.7013788;
		$lng = -23.7017804;
		$dif = 0.00005;
		
		$sql = "SELECT `latitude`,`longitude`, `via` FROM `rotas` as r WHERE ( ";
		$sql .= "(CAST(`latitude` AS DECIMAL(10,8)) + ".$dif.") >= ".$lat." and ";
		$sql .= "(CAST(`latitude` AS DECIMAL(10,8)) - ".$dif.") <= ".$lat." ) and";
		$sql .= " ( (CAST(`longitude` AS DECIMAL(10,8)) + ".$dif.") >= ".$lng." and ";
		$sql .= "(CAST(`longitude` AS DECIMAL(10,8)) - ".$dif.") <= ".$lng." )";
		
		// $sql = "SELECT * FROM `rotas` WHERE (`latitude` >= -46.7013788 and `latitude` <= -46.7013788) and (`longitude`>= -23.7017804 and `longitude`<= -23.7017804)";
		// $stmt = $dbh->prepare("select * from rotas where 1");
		// $sql = "INSERT INTO `rotas`( `latitude`, `longitude`, `via`)";
		// $sql .= " VALUES ";
		// $sql .= "('-46.7013788', '-23.7017804' , 'teotonio vilela'),";
		// $sql .= "('-46.7004991', '-23.7058474' , 'teotonio vilela'),";
		// $sql .= "('-46.700381', '-23.7063287' , 'teotonio vilela'),";
		// $sql .= "('-46.7001665', '-23.7072129' , 'teotonio vilela'),";
		// $sql .= "('-46.7000592', '-23.7078612' , 'teotonio vilela'),";
		// $sql .= "('-46.6994369', '-23.7102777' , 'teotonio vilela'),";
		// $sql .= "('-46.6984713', '-23.7130871' , 'teotonio vilela'),";
		// $sql .= "('-46.6985571', '-23.7139516' , 'teotonio vilela'),";
		// $sql .= "('-46.6990936', '-23.7154643' , 'teotonio vilela'),";
		// $sql .= "('-46.6992331', '-23.716643' , 'teotonio vilela'),";
		// $sql .= "('-46.6993082', '-23.7177235' , 'teotonio vilela'),";
		// $sql .= "('-46.6982675', '-23.7205721' , 'teotonio vilela'),";
		// $sql .= "('-46.69801', '-23.7215543' , 'teotonio vilela'),";
		// $sql .= "('-46.6980529', '-23.7222615' , 'teotonio vilela'),";
		// $sql .= "('-46.6983211', '-23.722841' , 'teotonio vilela'),";
		// $sql .= "('-46.6995335', '-23.724501' , 'teotonio vilela'),";
		// $sql .= "('-46.6996408', '-23.7247073' , 'teotonio vilela'),";
		// $sql .= "('-46.6996944', '-23.7250216' , 'teotonio vilela'),";
		// $sql .= "('-46.6995335', '-23.7264556' , 'teotonio vilela'),";
		// $sql .= "('-46.6994584', '-23.7267404' , 'teotonio vilela'),";
		// $sql .= "('-46.6994262', '-23.726927' , 'teotonio vilela'),";
		// $sql .= "('-46.6993403', '-23.7272904' , 'teotonio vilela'),";
		// $sql .= "('-46.6993189', '-23.727919' , 'teotonio vilela'),";
		// $sql .= "('-46.699394', '-23.7282628' , 'teotonio vilela'),";
		// $sql .= "('-46.6992438', '-23.7288227' , 'teotonio vilela'),";
		// $sql .= "('-46.6989541', '-23.7294414' , 'teotonio vilela'),";
		// $sql .= "('-46.6986001', '-23.7298834' , 'teotonio vilela'),";
		// $sql .= "('-46.6982031', '-23.7305808' , 'teotonio vilela'),";
		// $sql .= "('-46.6979349', '-23.731229' , 'teotonio vilela'),";
		// $sql .= "('-46.6978598', '-23.7316218' , 'teotonio vilela'),";
		// $sql .= "('-46.6979027', '-23.7329969' , 'teotonio vilela'),";
		// $sql .= "('-46.698482', '-23.733262' , 'teotonio vilela'),";
		// $sql .= "('-46.6987503', '-23.7337237' , 'teotonio vilela'),";
		// $sql .= "('-46.6989648', '-23.7342638' , 'teotonio vilela'),";
		// $sql .= "('-46.6991687', '-23.7348433' , 'teotonio vilela'),";
		// $sql .= "('-46.6992652', '-23.7352853' , 'teotonio vilela'),";
		// $sql .= "('-46.6992331', '-23.7358254' , 'teotonio vilela'),";
		// $sql .= "('-46.6992545', '-23.7362379' , 'teotonio vilela'),";
		// $sql .= "('-46.6993296', '-23.7366504' , 'teotonio vilela'),";
		// $sql .= "('-46.6994584', '-23.7370236' , 'teotonio vilela'),";
		// $sql .= "('-46.69963', '-23.7373772' , 'teotonio vilela'),";
		// $sql .= "('-46.7000806', '-23.7378977' , 'teotonio vilela'),";
		// $sql .= "('-46.7006171', '-23.738428' , 'teotonio vilela'),";
		// $sql .= "('-46.7012393', '-23.7390173' , 'teotonio vilela'),";
		// $sql .= "('-46.7017114', '-23.7393414' , 'teotonio vilela'),";
		// $sql .= "('-46.7022371', '-23.7395869' , 'teotonio vilela'),";
		// $sql .= "('-46.7040718', '-23.7404414' , 'teotonio vilela'),";
		// $sql .= "('-46.7057455', '-23.7412467' , 'teotonio vilela'),";
		// $sql .= "('-46.7059493', '-23.7414136' , 'teotonio vilela'),";
		// $sql .= "('-46.7062712', '-23.741885' , 'teotonio vilela'),";
		// $sql .= "('-46.7072582', '-23.7455776' , 'teotonio vilela'),";
		// $sql .= "('-46.7075372', '-23.7463436' , 'teotonio vilela'),";
		// $sql .= "('-46.707859', '-23.7468739' , 'teotonio vilela')";
		// $sql .= "; ";
		$stmt = $dbh->prepare($sql);
        // call the stored procedure
        $stmt->execute();

        echo "<B>Selecionando...</B><BR><table border='1' >";
        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo "<tr><td>...Latitude: ".$rs->latitude."</td>";
			echo "<td>...Longitude: ".$rs->longitude."</td>";
			echo "<td>...Rodovia: ".$rs->via."<td></tr>";
        }
        echo "</table><BR><B>".date("r")."</B>";
   
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>