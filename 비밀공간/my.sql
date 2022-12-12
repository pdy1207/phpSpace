SELECT  biz_type, 
		biz_name, 
		biz_rc, 
		biz_phonecorp, 
		biz_phone,
		biz_birth, 
		biz_gender,
		biz_regtime,
		biz_flag  
FROM admin.tb_bizring 
WHERE DATE(biz_regtime) = '2022-11-11' order by biz_regtime;
