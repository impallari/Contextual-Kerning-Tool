<?php

# Basic list of sample Kerning Pairs

# This list can be used as a template to start a kerning project
# Should be expanded for each font

# Lower to Lower
# -------------------------
$pairs_core_lower_to_lower = array("av", "va", "aw", "wa", 
												  				 "ov", "vo", "cv", "vc", "ev", "ve", "bv", "vd", "pv", "vq", 
												  				 "ow", "wo", "cw", "wc", "ew", "we", "bw", "wd", "pw", "wq",
												  				 "ox", "xo", "cx", "xc", "ex", "xe", "bx", "xd", "px", "xq",
												  				 "oy", "yo", "cy", "yc", "ey", "ye", "by", "yd", "py", "yq", 
												  				 "ko", "kc", "ke", "kd", "kq",
												  				 "ra", "ro", "rc", "re", "rd", "rq",
												  				 "of", "fo", "cf", "fc", "ef", "fe", "bf", "fd", "pf", "fq",
												  				 "ot", "to", "ct", "tc", "et", "te", "bt", "td", "pt", "tq"
												  				);
$pairs_additional_lower_to_lower = array( );
											
# Upper to Upper	
# -------------------------												
$pairs_core_upper_to_upper = array("AT", "TA", "TÆ", 
															"AU", "UA", "UÆ",
															"AV", "VA", "VÆ",
															"AW", "WA", "WÆ",
															"AY", "YA", "YÆ",
															"AO", "OA", "AQ", "QA", "AC", "AG", "DA",
															"OÆ", "DÆ", "QÆ",  
															"OT", "TO", "QT", "TQ", "DT", "TC", "TG",
															"OV", "VO", "QV", "VQ", "DV", "VC", "VG", 
															"OW", "WO", "QW", "WQ", "DW", "WC", "WG", 
															"OX", "XO", "QX", "XQ", "DX", "XC", "XG", 
															"OY", "YO", "QY", "YQ", "DY", "YC", "YG", 
															"KO", "KC", "KG", "KQ", 
															"LO", "LC", "LG", "LQ", 
															"EO", "EC", "EG", "EQ", 
															"FO", "FC", "FG", "FQ", 
															"FA", "FÆ",
															"PA", "PÆ",
															"SY", "YS", 
															"BT", "LT", "RT", 
															"BV", "LV", "PV", "RV", "GV", 
															"BX", "LX", "PX", "RX", "GX", 
															"BY", "LY", "PY", "RY", "GY", 
															"FJ", "PJ", "TJ", "VJ", "WJ", "YJ", 
															"LU", "RU", 
															"AA", "LA", "RA", "KA"
														 );	
$pairs_additional_upper_to_upper = array();
														  
# Upper to Lower
# -------------------------
$pairs_core_upper_to_lower = array("Fa", "Ka", "Pa", "Ta", "Va", "Wa", "Ya", 
															"Fc", "Kc", "Pc", "Tc", "Vc", "Wc", "Xc", "Yc", 
															"Fd", "Kd", "Pd", "Td", "Vd", "Wd", "Xd", "Yd",
															"Fe", "Ke", "Pe", "Te", "Ve", "We", "Xe", "Ye",
															"Fq", "Kq", "Pq", "Tq", "Vq", "Wq", "Xq", "Yq",
															"Fo", "Ko", "Po", "To", "Vo", "Wo", "Xo", "Yo",
															"Fg", "Kg", "Pg", "Tg", "Vg", "Wg", "Xg", "Yg",
															"Vi", "Wi", "Yi",
															"Tm", "Vm", "Wm", "Ym", 
															"Tn", "Vn", "Wn", "Yn", 
															"Tp", "Vp", "Wp", "Yp", 
															"Tr", "Vr", "Wr", "Yr", 
															"At", "Yt", 
															"Fu", "Ku", "Tu", "Vu", "Wu", "Yu", "Xu", 
															"Av", "Kv", "Tv", "Vv", "Wv", "Yv", "Xv", 
															"Aw", "Kw", "Tw", "Vw", "Ww", "Yw", "Xw",
															"Tx", "Yx",
															"Ay", "Ky", "Ty", "Vy", "Wy", "Yy", "Xy",
															"Tz", "Yz"
														 );
$pairs_additional_upper_to_lower = array();														 	

# Merge and send pairs list to app
# --------------------------------
$pairs_lower_to_lower = array_merge($pairs_core_lower_to_lower, $pairs_additional_lower_to_lower);
$pairs_upper_to_upper = array_merge($pairs_core_upper_to_upper, $pairs_additional_upper_to_upper);
$pairs_upper_to_lower = array_merge($pairs_core_upper_to_lower, $pairs_additional_upper_to_lower);

?>