import zoning_codes as z

res_codes = { x : 'General Residence Districts' 
		for x in z.general_residence_districts.split()}


comm_codes  = { x : 'Commercial Districts' 
		for x in z.commercial_districts.split()}

mfg_codes  = { x : 'Manufacturing Districts' 
		for x in z.manufacturing_districts.split()}

mix_mfg_res_codes = { x : 'Mixed Manufacturing & Residential Districts' 
		for x in z.mix_man_res_combos}

other_codes = {'BPC'	   : 'Battery Park City',
			   'PARK'	   : 'New York City Parks',					
			   'PARKNYS'   : 'New York State Parks',
			   'PARKUS'	   : 'United States Parks',				
			   'ZNA'	   : 'Zoning Not Applicable',
			   'ZR 11-151' : 'Special Zoning District',
}	
		
all_codes = {}
all_codes.update(res_codes)
all_codes.update(comm_codes)
all_codes.update(mfg_codes)
all_codes.update(mix_mfg_res_codes)
all_codes.update(other_codes)
