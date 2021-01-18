        <!-- Header -->
<?php $this->load->view('layout/header') ?>
<body><center><p><h5> DAFTAR NAMA ANGGOTA MAGANG/ KERJA PRAKTEK</h5></p>
    <p><h6>DINAS KOMUNIKASI, INFORMATIKA DAN STATISTIK PROVINSI RIAU</h6></p>
    <p><h7>TAHUN 2018</h7></p></center>
                    
                 <table border="1">
                                <thead>
                                    <tr align="center">
                                        <center>
                                        <th align="center">No</th>
                                        <th align="center">Nama</th>
                                       <th align="center">Jenis Kelamin</th>
                                       <th align="center">Nomor Hp</th>
                                       <th align="center">Bidangp</th>
                                       <th align="center">Asal</th>
                                                             
                                   
                                    </center>
                                    </tr>
                                </thead>
                                <tbody>
                                   


                                    <?php 
                                        $no = 1;
                                        foreach($magangfix AS $item) : ?>                             
                                        <tr align="center">
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $item->nama_magang ?></td>                        
                                            <td><?php echo $item->jk_magang?></td>
                                            <td><?php echo $item->nohp_magang ?></td>
                                            <td><?php echo $item->bidang ?></td>
                                            <td><?php echo $item->asal_magang ?></td>                        
                                            




                                        
                                           

                                        </tr>
                                    <?php $no++;endforeach; ?>

                                     
                                </tbody>

                            </table>
</div>
                       
                      

                   
                </div>
                </div>
            </div><!-- .animated -->


        </div><!-- .content --> 

    </div><!-- /#right-panel -->
    <script> window.print();</script>

    <!-- Right Panel -->
 <?php $this->load->view('layout/js') ?>

