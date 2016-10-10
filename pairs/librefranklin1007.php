<?php

# Human readable name
$font_name = "LibreFranklin v1.007"; 

# Lower to Lower
# -------------------------
$pairs_core_lower_to_lower = array(
"bf", "bt", "bv", "bx", 
"et", "ex", 
"fc", "fd", "fe", "fo", "fq", 
"gc", "gd", "ge", "go", 
"kc", "kd", "ke", "ko", "kq", "ks", 
"of", "ot", "ov", "ox", 
"pf", "pt", "pv", "px", 
"ra", "rc", "rd", "re", "ro", "rq", 
"tc", "td", "te", "to", "tq", 
"vc", "vd", "ve", "vo", "vq", 
"xc", "xd", "xe", "xf", "xo", "xq", "xt", "xy", 
"yg"
		);
$pairs_additional_lower_to_lower = array();
											
# Upper to Upper	
# -------------------------												
$pairs_core_upper_to_upper = array(
"AC", "AG", "AO", "AQ", "AS", "AT", "AU", "AV", "AW", "AY", 
"BT", "BV", "BY", 
"CA", 
"DA", "DT", "DV", "DW", "DX", "DY", "DZ", 
"EC", "EG", "EO", "EQ", 
"FA", "FC", "FG", "FJ", "FO", "FQ", 
"GY", 
"KC", "KG", "KO", "KQ", 
"LC", "LG", "LO", "LQ", "LT", "LU", "LV", "LW", "LY", 
"OA", "OT", "OV", "OW", "OX", "OY", "OZ", 
"PA", "PJ", "PX", 
"QA", "QT", "QV", "QW", "QX", "QY", "QZ", 
"RT", "RV", "RW", "RY", 
"SY", 
"TA", "TC", "TG", "TJ", "TO", "TQ", 
"UA", 
"VA", "VC", "VG", "VO", "VQ", 
"WA", "WC", "WG", "WO", "WQ", 
"XC", "XG", "XO", "XQ", 
"YA", "YC", "YG", "YO", "YQ", "YS", 
"ZC", "ZG", "ZO", "ZQ"
		);	
$pairs_additional_upper_to_upper = array();
														  
# Upper to Lower
# -------------------------
$pairs_core_upper_to_lower = array(
"At", "Av", "Aw", "Ay", 
"Ev", "Ew", "Ey", 
"Fa", "Fc", "Fd", "Fe", "Ff", "Fg", "Fm", "Fn", "Fo", "Fp", "Fq", "Fr", "Fs", "Ft", "Fu", "Fv", "Fw", "Fx", "Fy", "Fz", 
"Ka", "Kc", "Kd", "Ke", "Ko", "Ku", "Kv", "Kw", "Ky", 
"Lv", "Lw", "Ly", 
"Pc", "Pd", "Pe", "Po", 
"St", 
"Ta", "Tc", "Td", "Te", "Tm", "Tn", "To", "Tr", "Ts", "Tu", "Tv", "Tw", "Tx", "Ty", "Tz", 
"Va", "Vc", "Vd", "Ve", "Vg", "Vm", "Vn", "Vo", "Vr", "Vs", "Vu", "Vy", 
"Wa", "Wc", "Wd", "We", "Wm", "Wn", "Wo", "Wu", 
"Xy", 
"Ya", "Yc", "Yd", "Ye", "Yg", "Ym", "Yn", "Yo", "Ys", "Yt", "Yu", "Yv", "Yw", "Yx", "Yz"
		);
$pairs_additional_upper_to_lower = array();														 	

# Merge and send pairs list to app
# -------------------------
$pairs_upper_to_upper = array_merge($pairs_core_upper_to_upper, $pairs_additional_upper_to_upper);
$pairs_lower_to_lower = array_merge($pairs_core_lower_to_lower, $pairs_additional_lower_to_lower);
$pairs_upper_to_lower = array_merge($pairs_core_upper_to_lower, $pairs_additional_upper_to_lower);

?>