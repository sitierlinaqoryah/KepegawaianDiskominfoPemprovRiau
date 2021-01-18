        <!-- Header -->
<?php $this->load->view('layout/header') ?>
<body><center><p><h5> DAFTAR NAMA JASA LAINNYA ORANG PERORANGAN</h5></p>
    <p><h6>DINAS KOMUNIKASI, INFORMATIKA DAN STATISTIK PROVINSI RIAU</h6></p>
    <p><h7>TAHUN 2019</h7></p></center>
                    
                 <table border="1">
                                <thead>
                                    <tr align="center">
                                        <center>
                                        <th align="center">No</th>
                                        <th align="center">Nama </th>
                                       <th align="center">Jabatan</th>                   
                                        <th align="center">Kegiatan</th>
                                        <th align="center">TMT Bekerja</th>
                                                           
                                       <th align="center">Lama Bekerja</th>                
                                   
                                    </center>
                                    </tr>
                                </thead>
                                <tbody>
                                   


                                    <?php 
                                        $no = 1;
                                        foreach($honor AS $item) : ?>                             
                                        <tr align="center">
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $item->nama ?></td>
                                             <td><?php echo $item->jabatan ?></td>                     
                                            <td><?php echo $item->kegiatan?></td>
                                            <td><?php echo $item->tmt_kerja ?></td>
                                                                    
                                          
                                            <td><?php echo $item->lama_kerja ?>  Tahun </td>




                                        
                                           

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

