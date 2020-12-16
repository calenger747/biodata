<div class="container-fluid mt-3">
    <?=$this->session->flashdata('notif')?>
    <div class="row">
        <div class="col-md-12">
            <?php
            if (empty($get_user)) { ?>
                <a href="<?= base_url(); ?>User/tambah" class="btn btn-info mb-2"><i class="fa fa-plus"></i> Tambah</a>
                <?php
            } else { ?>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title text-center mb-3">Data Pribadi Pelamar</h5>
                            </div>
                            <div class="col-md-4 float-right">

                            </div>
                        </div>

                        <div class="table_responsive mt-3">
                            <table class="table-stripped table" style="width: 100%">
                                <tr>
                                    <th width="50%">POSISI YANG DILAMAR</th>
                                    <td><?= $get_user->posisi_dilamar; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">NAMA</th>
                                    <td><?= $get_user->nama; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">NO. KTP</th>
                                    <td><?= $get_user->no_ktp; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">TEMPAT, TANGGAL LAHIR</th>
                                    <td><?= $get_user->tempat_lahir; ?>, <?= $get_user->dob; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">JENIS KELAMIN</th>
                                    <td><?= $get_user->jenis_kelamin; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">AGAMA</th>
                                    <td><?= $get_user->agama; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">GOLONGAN DARAH</th>
                                    <td><?= $get_user->gol_darah; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">STATUS</th>
                                    <td><?= $get_user->status; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">ALAMAT KTP</th>
                                    <td><?= $get_user->alamat_ktp; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">ALAMAT TINGGAL</th>
                                    <td><?= $get_user->alamat_tinggal; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">EMAIL</th>
                                    <td><?= $get_user->email; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">NO. TELP</th>
                                    <td><?= $get_user->no_telp; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">ORANG TERDEKAT YANG DAPAT DIHUBUNGI</th>
                                    <td><?= $get_user->kerabat; ?> - <?= $get_user->no_telp_kerabat; ?></td>
                                </tr>
                            </table>
                        </div>
                        <h5 class="card-title mt-3">Pendidikan Terakhir</h5>
                        <div class="table_responsive mt-3">
                            <table class="table-stripped table-bordered table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Jenjang Pendidikan Terakhir</th>
                                        <th>Nama Institusi</th>
                                        <th>Jurusan</th>
                                        <th>Tahun Lulus</th>
                                        <th>IPK</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($get_pendidikan)) { ?>
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak Ada Data <a href="<?= base_url(); ?>User/tambah_pendidikan" class="text-primary">Tambah</a></td>
                                        </tr>
                                        <?php       
                                    } else {
                                        foreach ($get_pendidikan as $row) { ?>
                                            <tr>
                                                <td><?= $row->jenjang; ?></td>
                                                <td><?= $row->nama_institusi; ?></td>
                                                <td><?= $row->jurusan; ?></td>
                                                <td><?= $row->tahun_lulus; ?></td>
                                                <td><?= $row->ipk; ?></td>
                                            </tr>
                                            <?php
                                        } ?>
                                        <tr>
                                            <td colspan="5" class="text-center"><a href="<?= base_url(); ?>User/tambah_pendidikan" class="text-primary">Tambah</a></td>
                                        </tr>
                                        <?php
                                    }?>
                                </tbody>
                            </table>
                        </div>
                        <h5 class="card-title mt-3">Riwayat Pelatihan</h5>
                        <div class="table_responsive mt-3">
                            <table class="table-stripped table-bordered table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Nama Pelatihan/Seminar</th>
                                        <th>Sertifikat (ada/tidak)</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($get_pelatihan)) { ?>
                                        <tr>
                                            <td colspan="3" class="text-center">Tidak Ada Data <a href="<?= base_url(); ?>User/tambah_pelatihan" class="text-primary">Tambah</a></td>
                                        </tr>
                                        <?php       
                                    } else {
                                        foreach ($get_pelatihan as $row) { ?>
                                            <tr>
                                                <td><?= $row->nama_kursus; ?></td>
                                                <td><?= $row->sertifikat; ?></td>
                                                <td><?= $row->tahun; ?></td>
                                            </tr>
                                            <?php
                                        } ?>
                                        <tr>
                                            <td colspan="5" class="text-center"><a href="<?= base_url(); ?>User/tambah_pendidikan" class="text-primary">Tambah</a></td>
                                        </tr>
                                        <?php
                                    }?>
                                </tbody>
                            </table>
                        </div>
                        <h5 class="card-title mt-3">Riwayat Pekerjaan</h5>
                        <div class="table_responsive mt-3">
                            <table class="table-stripped table-bordered table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Nama Perusahaan</th>
                                        <th>Posisi Terakhir</th>
                                        <th>Pendapatan Terakhir</th>
                                        <th>Tahun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (empty($get_pekerjaan)) { ?>
                                        <tr>
                                            <td colspan="4" class="text-center">Tidak Ada Data <a href="<?= base_url(); ?>User/tambah_pekerjaan" class="text-primary">Tambah</a></td>
                                        </tr>
                                        <?php       
                                    } else {
                                        foreach ($get_pekerjaan as $row) { ?>
                                            <tr>
                                                <td><?= $row->nama_perusahaan; ?></td>
                                                <td><?= $row->posisi; ?></td>
                                                <td><?= $row->pendapatan; ?></td>
                                                <td><?= $row->tahun; ?></td>
                                            </tr>
                                            <?php
                                        } ?>
                                        <tr>
                                            <td colspan="5" class="text-center"><a href="<?= base_url(); ?>User/tambah_pendidikan" class="text-primary">Tambah</a></td>
                                        </tr>
                                        <?php
                                    }?>
                                </tbody>
                            </table>
                            <table class="table-stripped table" style="width: 100%">
                                <tr>
                                    <th width="50%">SKILL</th>
                                    <td><?= $get_user->skill; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">BERSEDIA DITEMPATKAN DISELURUH KANTOR PERUSAHAAN</th>
                                    <td><?= $get_user->kesediaan; ?></td>
                                </tr>
                                <tr>
                                    <th width="50%">PENGHASILAN YANG DIHARAPKAN</th>
                                    <td><?= $get_user->penghasilan; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>