						<?php
						include '../koneksi.php';
						$sxl = 'SELECT category.id, category_id.item, name.item FROM category JOIN item ON category.id = item.category_id';
						$sumber = mysqli_query($koneksi, $sxl);
						echo $sumber;
						?>"