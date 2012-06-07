<? include('top.php');
include('data/epgp/epgp.php');

$epgp = new EPGP('Alea iacta est');
$epgp->loadFile('epgp_array.php');
$data = $epgp->getPlayers();
?>
    <section class="grid12 first">
		<header class="red mage">
        	<h2>EPGP</h2>
        </header>
        <div>
            <table class="datatable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>EP</th>
                        <th>GP</th>
                        <th>PR</th>
                        
                    </tr>
                </thead>
                <tbody>
                	<? foreach($data as $d){ ?>
                	<tr>
                        <td><a href="#" class="<?=$d['class']?>"><?=utf8_encode($d['name'])?></a></td>
                        <td><?=$d['ep']?></td>
                        <td><?=$d['gp']?></td>
                        <td><?=$d['pr']?></td>
                    </tr>
                    <? } ?>
                </tbody>
            </table>	
        </div>
	</section><br>
<? include('bottom.php') ?>