update database :

UPDATE setting_aplikasi set `value`='0' WHERE `key`='enable_track';
UPDATE setting_aplikasi SET `value`='18-10-2021' WHERE `key`='tgl_data_lengkap';
UPDATE setting_aplikasi SET `value`='1' WHERE `key`='tgl_data_lengkap_aktif';
DELETE FROM `setting_aplikasi` WHERE `id`='12';
INSERT INTO `setting_aplikasi` (`id`, `key`, `value`, `keterangan`, `jenis`, `kategori`) VALUES (12, 'offline_mode', '0', 'Apakah modul web akan ditampilkan atau tidak', 'option-kode', '');
INSERT INTO `setting_aplikasi_options` (`id`, `id_setting`, `value`, `kode`) VALUES (16, 12, 'Web bisa diakses publik', 0);
INSERT INTO `setting_aplikasi_options` (`id`, `id_setting`, `value`, `kode`) VALUES (17, 12, 'Web hanya bisa diakses petugas web', 1);
INSERT INTO `setting_aplikasi_options` (`id`, `id_setting`, `value`, `kode`) VALUES (18, 12, 'Web non-aktif sama sekali', 2);
UPDATE setting_modul SET `aktif`='1' WHERE `id`='50'; 
UPDATE setting_modul SET `aktif`='0',`hidden`='1' WHERE `id`='331';
DELETE FROM `user_grup` WHERE `id`='5';
ALTER TABLE komentar ADD `no_hp` varchar(15) DEFAULT NULL;

#ke2
UPDATE setting_modul SET `url`='' WHERE `id`='4';
UPDATE setting_modul SET `url`='surat' WHERE `id`='31';

#surat ahli Waris
INSERT INTO `tweb_surat_format` VALUES (7, 'Ahli Waris', 'surat_ahli_waris', '000', NULL, 0, 0, 1, 1, 1, 'M', 0);

#ke3
UPDATE setting_modul SET `aktif`='1' WHERE `id`='101'; 
UPDATE setting_modul SET `hidden`='1' WHERE `id`='101'; 
UPDATE setting_modul SET `aktif`='1' WHERE `id`='5'; 
UPDATE setting_modul SET `hidden`='1' WHERE `id`='5'; 


#shell
sudo cp /home/egov/OpenSID/desa-contoh/upload/user_pict/kuser.png desa/upload/user_pict/
sudo cp /home/egov/OpenSID/desa-contoh/upload/user_pict/wuser.png desa/upload/user_pict/
sudo chown 33:33 -R .
rm cache/*

*/
#ke4
INSERT INTO `tweb_surat_format` VALUES (4, 'Permohonan KIS Daerah', 'surat_permohonan_kis_daerah', '000', NULL, 0, 0, 1, 1, 1, 'M', 0);