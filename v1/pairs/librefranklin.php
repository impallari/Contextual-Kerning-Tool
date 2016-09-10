<?php

# Expanded list of Kerning Pairs
# Used for the LibreFranklin font

# Lower to Lower
# -------------------------
$pairs_core_lower_to_lower = array(
		"af", "at", "av", "aw", "ay", 
		"bf", "bt", "bv", "bx", "by", "bz", 
		"cf", "ct", "cv", "cw", "cy", 
		"ef", "et", "ev", "ew", "ex", "ey", "ez", 
		"fc", "fd", "fe", "fo", "fq", "fs", 
		"ga", "gc", "gd", "ge", "go", "gq", "gs", 
		"hf", "hv", "hw", "hy", 
		"ka", "kc", "kd", "ke", "kf", "ko", "kq", "ks", "kt", "kv", "kw", "ky", 
		"mf", "mv", "mw", "my", 
		"nf", "nv", "nw", "ny", 
		"of", "ot", "ov", "ow", "ox", "oy", "oz", 
		"pf", "pt", "pv", "px", "py", "pz", 
		"ra", "rc", "rd", "re", "ro", "rq", 
		"sf", "st", "sv", "sw", "sx", "sy", 
		"tc", "td", "te", "to", "tq", 
		"va", "vc", "vd", "ve", "vo", "vq", "vs", 
		"wa", "wc", "wd", "we", "wo", "wq", "ws", 
		"xa", "xc", "xd", "xe", "xf", "xo", "xq", "xs", "xt", "xy", 
		"ya", "yc", "yd", "ye", "yg", "yo", "yq", "ys", 
		"zc", "zd", "ze", "zo", "zq"
			);
$pairs_additional_lower_to_lower = array();
											
# Upper to Upper	
# -------------------------												
$pairs_core_upper_to_upper = array(
		"AA", "AC", "AG", "AO", "AQ", "AS", "AT", "AU", "AV", "AW", "AX", "AY", 
		"BA", "BT", "BV", "BY", 
		"CA", "CT", "CY", 
		"DA", "DJ", "DS", "DT", "DV", "DW", "DX", "DY", "DZ", 
		"EC", "EG", "EO", "EQ", 
		"FA", "FC", "FG", "FJ", "FO", "FQ", "FS", 
		"GY", 
		"JA", 
		"KA", "KC", "KG", "KO", "KQ", "KS", "KU", "KV", "KW", "KY", 
		"LA", "LC", "LG", "LO", "LQ", "LT", "LU", "LV", "LW", "LY", 
		"OA", "OJ", "OS", "OT", "OV", "OW", "OX", "OY", "OZ", 
		"PA", "PJ", "PX", "PY", 
		"QA", "QJ", "QS", "QT", "QV", "QW", "QX", "QY", "QZ", 
		"RA", "RT", "RV", "RW", "RY", 
		"SA", "SC", "SG", "SO", "SQ", "ST", "SV", "SW", "SY", 
		"TA", "TC", "TG", "TJ", "TO", "TQ", "TS", "TX", 
		"UA", "UJ", "UX", 
		"VA", "VC", "VG", "VO", "VQ", "VS", 
		"WA", "WC", "WG", "WO", "WQ", "WS", 
		"XA", "XC", "XG", "XO", "XQ", "XT", "XU", 
		"YA", "YC", "YG", "YO", "YQ", "YS", 
		"ZC", "ZG", "ZO", "ZQ"
			);	
$pairs_additional_upper_to_upper = array( );
														  
# Upper to Lower
# -------------------------
$pairs_core_upper_to_lower = array(
		"Ac", "Ad", "Ae", "Af", "Ao", "Aq", "As", "At", "Av", "Aw", "Ax", "Ay", 
		"Ds", 
		"Ec", "Ed", "Ee", "Eo", "Eq", "Es", "Ev", "Ew", "Ex", "Ey", 
		"Fa", "Fc", "Fd", "Fe", "Ff", "Fg", "Fm", "Fn", "Fo", "Fp", "Fq", "Fr", "Fs", "Ft", "Fu", "Fv", "Fw", "Fx", "Fy", "Fz", 
		"Ka", "Kc", "Ke", "Ko", "Ku", "Kv", "Kw", "Ky", 
		"Lc", "Ld", "Le", "Lo", "Lq", "Ls", "Lv", "Lw", "Ly", 
		"Os", 
		"Pa", "Pc", "Pe", "Po", "Ps", 
		"Qs", 
		"Rc", "Re", "Ro", 
		"St", "Sv", "Sw", "Sy", 
		"Ta", "Tc", "Td", "Te", "Tm", "Tn", "To", "Tq", "Tr", "Ts", "Tu", "Tv", "Tw", "Tx", "Ty", "Tz", 
		"Va", "Vc", "Vd", "Ve", "Vg", "Vm", "Vn", "Vo", "Vq", "Vr", "Vs", "Vu", "Vy", 
		"Wa", "Wc", "Wd", "We", "Wm", "Wn", "Wo", "Wq", "Wr", "Wu", "Wy", 
		"Xa", "Xc", "Xe", "Xo", "Xy", 
		"Ya", "Yc", "Yd", "Ye", "Yg", "Ym", "Yn", "Yo", "Yq", "Ys", "Yt", "Yu", "Yv", "Yw", "Yx", "Yz"
			);
$pairs_additional_upper_to_lower = array( );														 	

# Merge and send pairs list to app
# -------------------------
$pairs_upper_to_upper = array_merge($pairs_core_upper_to_upper, $pairs_additional_upper_to_upper);
$pairs_lower_to_lower = array_merge($pairs_core_lower_to_lower, $pairs_additional_lower_to_lower);
$pairs_upper_to_lower = array_merge($pairs_core_upper_to_lower, $pairs_additional_upper_to_lower);

?>