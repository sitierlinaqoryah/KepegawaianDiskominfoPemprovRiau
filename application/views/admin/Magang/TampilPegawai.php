<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tabel_Pegawai</title>
</head>
<body>

<div class="panel-body">
                    <table class="table table-bordered table-striped" id="mytable">
                    <thead>
                    <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Departemen</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Golongan</th>
                    </tr>
                    </thead>

                    <tbody>

                        <?php

                        foreach($data->result_array() as $i):

                              $id_pegawai=$i['id_pegawai'];

                              $nama_pegawai=$i['nama_pegawai'];

                              $id_departemen=$i['id_departemen'];

                              $id_jabatan=$i['id_jabatan'];

                              $id_golongan=$i['id_golongan'];

                        ?>
                  <tr>

                        <td><?php echo $id_pegawai;?> </td>

                        <td><?php echo $nama_pegawai;?> </td>

                        <td><?php echo $id_departemen;?> </td>

                        <td><?php echo $id_jabatan;?> </td>

                        <td><?php echo $id_golongan;?> </td>

                  </tr>

                  <?php endforeach;?>


                     </tbody>
                    </table>
                </div>

</body>
</html>
