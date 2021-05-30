<?php 
	use yii\helpers\Html;
	use yii\widgets\LinkPager;
 ?>
 <h1>Data Mahasiswa</h1>
 <p>
 	<?= Html::a('Create Mahasiswa',['create'],['class'=>'btn btn-success']) ?>
 </p>
 <table class="table table-hover">
 	<tr>
 		<td>NO</td>
 		<td>NIM</td>
 		<td>NAMA</td>
 		<td>JENIS KELAMIN</td>
 		<td>ID PRODI</td>
 		<td>EMAIL</td>
 		<td>ALAMAT</td>
 		<td>AKSI</td>
 	</tr>
 	<?php foreach ($isiMahasiswa as $mahasiswa): ?>
 		<tr>
 			<td><?= Html::encode($mahasiswa->id) ?></td>
 			<td><?= Html::encode($mahasiswa->nim) ?></td>
 			<td><?= Html::encode($mahasiswa->nama) ?></td>
 			<td><?= Html::encode($mahasiswa->jekel) ?></td>
 			<td><?= Html::encode($mahasiswa->id_prodi) ?></td>
 			<td><?= Html::encode($mahasiswa->email) ?></td>
 			<td><?= Html::encode($mahasiswa->alamat) ?></td>
 			<td>
 				<?= Html::a('Edit',['mahasiswa/update','id'=>$mahasiswa->id]) ?> |
 				<?= Html::a('Hapus',['mahasiswa/delete','id'=>$mahasiswa->id],
 				['onclick'=>'return(confirm("Yakin menghapus data?"))']) ?>
 			</td>
 		</tr>
 	<?php endforeach; ?>	
 </table>
 <?= LinkPager::widget(['pagination'=>$pagination]) ?>